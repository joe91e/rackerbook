from django.db import models

class Location(models.Model):
    locaiton_id = models.IntegerField(primary_key=True)
    location_name = models.CharField(max_length=50)

class Groups(models.Model):
    group_id = models.IntegerField(primary_key=True)
    group_name = models.CharField(max_length=50)
    group_desc = models.TextField()
    is_sport = models.BooleanField()
    location = models.ForeignKey(Location)

class Users(models.Model):
    user_id = models.IntegerField(primary_key=True)
    user_name = models.CharField(max_length=50)
    user_password = models.CharField(max_length=50)
    location = models.ForeignKey(Location)
    user_desc = models.TextField(blank=True)

class Discussion(models.Model):
    discussion_id = models.IntegerField(primary_key=True)
    thread_id = models.IntegerField()
    discussion = models.TextField()
    date = models.DateTimeField()
    group_id = models.ForeignKey(Groups)
    user_id = models.ForeignKey(Users)

class Grp_Usr(models.Model):
    group_id = models.ForeignKey(Groups)
    user_id = models.ForeignKey(Users)
    unique_together = (("group_id", "user_id"),)

class Links(models.Model):
    link_id = models.IntegerField(primary_key=True)
    url = models.URLField()
    link_name = models.CharField(max_length=50)
    group_id = models.ForeignKey(Groups)

class Message(models.Model):
    message_id = models.IntegerField(primary_key=True)
    subject = models.CharField(max_length=50)
    suggested_time = models.DateTimeField()
    location = models.ForeignKey(Location)
    description = models.TextField()

class Events(models.Model):
    event_id = models.IntegerField(primary_key=True)
    event_desc = models.TextField()
    event_date = models.DateTimeField()

class Event_User(models.Model):
    event_id = models.ForeignKey(Events)
    user_id = models.ForeignKey(Users)
