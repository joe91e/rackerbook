from django.db import models

class Locations(models.Model):#this should contain the OFFICE LOCATION, not event location, for the sake of simplicity.
    location_id = models.AutoField(primary_key=True)
    location_name = models.CharField(max_length=50)
    def __unicode__(self):
	    return u'%d || %s' % (self.location_id, self.location_name)
	
    class Meta:
        db_table='locations'

class Users(models.Model):
    GENDER_CHOICES = (
        ('M', 'Male'),
        ('F', 'Female'),
    )
    user_id = models.AutoField(primary_key=True)
    firstName = models.CharField(max_length=50)#
    lastName = models.CharField(max_length=50)#
    password = models.CharField(max_length=50)#
    email = models.CharField(max_length=100)#
    phone = models.CharField(max_length=12, blank=True)#empty string by default must be stored in 123-456-7890 format
    gender = models.CharField(max_length=1, choices=GENDER_CHOICES)
    location = models.ForeignKey(Locations)
    user_desc = models.TextField(blank=True)
    def __unicode__(self):
        return u'%d || %s || %s || %s || %s || %s || %s || %d || %s' % (self.user_id, 
		                                                                self.firstName, 
																		self.lastName, 
																		self.password, 
																		self.email,
																		self.phone, 
																		self.gender,
																		self.location.location_id,
																		self.user_desc)
    class Meta:
        db_table='users'
        
class Groups(models.Model):
    group_id = models.AutoField(primary_key=True)
    group_name = models.CharField(max_length=50)
    group_desc = models.TextField()
    is_sport = models.BooleanField()
    location = models.ForeignKey(Locations)
    def __unicode__(self):
        return u'%d || %s || %s || %s || %d' % (self.group_id, self.group_name, self.group_desc, self.is_sport, self.location.location_id)
    class Meta:
        db_table='groups'

class Group_User(models.Model):
    group = models.ForeignKey(Groups) #if field is named group_id here, then on the actual database table, the field will be named group_id_id.
    user = models.ForeignKey(Users)
    rating = models.FloatField()#initially, starts with 0, and then builds up the average over time.
    unique_together = (("group_id", "user_id"),)
    def __unicode__(self):
        return u'%d || %d || %f' % (self.group.group_id, self.user.user_id, self.rating)
    class Meta:
        db_table='group_user'
	
class Links(models.Model): #for extra stuff within groups. For example, if a tennis group had a link for finding a court to play.
    link_id = models.AutoField(primary_key=True)
    url = models.URLField()
    link_name = models.CharField(max_length=50)
    group = models.ForeignKey(Groups)
    def __unicode__(self):
        return u'%d || %s || %s || %d' % (self.link_id, self.url, self.link_name, self.group.group_id)
    class Meta:
        db_table='links'

class Discussion(models.Model): #the original message or a reply to an event or comment in a group. If an event, then this tabled will be pointed by Events table entry.
    discussion_id = models.AutoField(primary_key=True)
    thread_id = models.IntegerField(null=True)#can be 0, if this is the parent of the thread. 
    discussion = models.TextField()
    date = models.DateTimeField()#the comment post time.
    event = models.ForeignKey('Events', null=True, default=None)#if not an event, then the event key will be null
    group = models.ForeignKey(Groups)
    user = models.ForeignKey(Users)#the person who posted this comment
    def __unicode__(self):
        return u'%d || %d || %s || %s || %d || %d' % (self.discussion_id, self.thread_id, self.discussion, self.date, self.group.group_id, self.user.user_id)
    class Meta:
        db_table='discussion'

class Events(models.Model): #this is a public event for a group, not the same as invitation, which is private.
    event_id = models.AutoField(primary_key=True)
    event_place = models.CharField(max_length=250)#we want to keep this separate from "Location" table.
    event_start = models.DateTimeField()
    event_end = models.DateTimeField()
    def __unicode__(self):
        return u'%d || %d || %s || %s || %s' % (self.event_id, self.event_discussion.discussion_id, self.event_place, self.event_start, self.event_end)
    class Meta:
        db_table='events'
	
class Event_User(models.Model): #for rackers joined in the event, this does NOT include 
    event = models.ForeignKey(Events)
    user = models.ForeignKey(Users)
    def __unicode__(self):
        return u'%d || %d' % (self.event.event_id, self.user.user_id)
    class Meta:
        db_table='event_user'
	
class Invitation(models.Model): #non-public invitation from user to other user(s)
    invitation_id = models.AutoField(primary_key=True)
    subject = models.CharField(max_length=50)#this is what will be displayed on the notification dropdown.
    description = models.TextField()
    place = models.CharField(max_length=250)
    start = models.DateTimeField()
    end = models.DateTimeField()
    def __unicode__(self):
        return u'%d || %s || %s || %s || %s || %s' % (self.invitation_id, self.subject, self.description, self.place, self.start, self.end)
    class Meta:
        db_table='invitation'

class Invitation_List(models.Model): #the list of people invited in an invitation.
    list_id = models.AutoField(primary_key=True)
    invitation = models.ForeignKey(Invitation)
    user = models.ForeignKey(Users)
    is_sender = models.BooleanField()#set to true if this is the host user who sent out the invitation
    is_read = models.BooleanField()#if true, then this will not be on the notification.
    def __unicode__(self):
        return u'%d || %d || %d || %s || %s' % (self.list_id, self.invitation.invitation_id, self.user.user_id, self.is_sender, self.is_read)
    class Meta:
        db_table='invitation_list'