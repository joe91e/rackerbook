from django.db import models

class Locations(models.Model):#this should contain the OFFICE LOCATION, not event location, for the sake of simplicity.
    locaiton_id = models.IntegerField(primary_key=True)
    location_name = models.CharField(max_length=50)
    class Meta:
        db_table='locations'

class Users(models.Model):
    GENDER_CHOICES = (
        ('M', 'Male'),
        ('F', 'Female'),
    )
    user_id = models.IntegerField(primary_key=True)
    firstName = models.CharField(max_length=50)#
    lastName = models.CharField(max_length=50)#
    password = models.CharField(max_length=50)#
    email = models.CharField(max_length=100)#
    phone = models.CharField(max_length=12, blank=True)#empty string by default must be stored in 123-456-7890 format
    gender = models.CharField(max_length=1, choices=GENDER_CHOICES)
    location = models.ForeignKey(Locations)
    user_desc = models.TextField(blank=True)
    class Meta:
        db_table='users'
        
class Groups(models.Model):
    group_id = models.IntegerField(primary_key=True)
    group_name = models.CharField(max_length=50)
    group_desc = models.TextField()
    is_sport = models.BooleanField()
    location = models.ForeignKey(Locations)
    class Meta:
        db_table='groups'

class Group_User(models.Model):
    group = models.ForeignKey(Groups) #if field is named group_id here, then on the actual database table, the field will be named group_id_id.
    user = models.ForeignKey(Users)
    rating = models.FloatField()#initially, starts with 0, and then builds up the average over time.
    unique_together = (("group_id", "user_id"),)
    class Meta:
        db_table='group_user'
	
class Links(models.Model): #for extra stuff within groups. For example, if a tennis group had a link for finding a court to play.
    link_id = models.IntegerField(primary_key=True)
    url = models.URLField()
    link_name = models.CharField(max_length=50)
    group = models.ForeignKey(Groups)
    class Meta:
        db_table='links'

class Discussion(models.Model): #the original message or a reply to an event or comment in a group. If an event, then this tabled will be pointed by Events table entry.
    discussion_id = models.IntegerField(primary_key=True)
    thread_id = models.IntegerField()#can be 0, if this is the parent of the thread. 
    discussion = models.TextField()
    date = models.DateTimeField()#the comment post time.
    group = models.ForeignKey(Groups)
    user = models.ForeignKey(Users)
    class Meta:
        db_table='discussion'

class Events(models.Model): #this is a public event for a group, not the same as invitation, which is private.
    event_id = models.IntegerField(primary_key=True)
    event_discussion = models.ForeignKey(Discussion)#this will point to a parent of a discussion thread, to get necessary info.
    event_place = models.CharField(max_length=250)#we want to keep this separate from "Location" table.
    event_start = models.DateTimeField()
    event_end = models.DateTimeField()
    class Meta:
        db_table='events'
	
class Event_User(models.Model): #for rackers joined in the event, this does NOT include 
    event = models.ForeignKey(Events)
    user = models.ForeignKey(Users)
    class Meta:
        db_table='event_user'
	
class Invitation(models.Model): #non-public invitation from user to other user(s)
    invitation_id = models.IntegerField(primary_key=True)
    subject = models.CharField(max_length=50)#this is what will be displayed on the notification dropdown.
    description = models.TextField()
    place = models.CharField(max_length=250)
    start = models.DateTimeField()
    end = models.DateTimeField()
    class Meta:
        db_table='invitation'

class Invitation_List(models.Model): #the list of people invited in an invitation.
    list_id = models.IntegerField(primary_key=True)
    invitation = models.ForeignKey(Invitation)
    user = models.ForeignKey(Users)
    is_sender = models.BooleanField()#set to true if this is the host user who sent out the invitation
    is_read = models.BooleanField()#if true, then this will not be on the notification.
    class Meta:
        db_table='invitation_list'