# Create your views here.
from django.template.loader import get_template
from django.template import Context
from django.http import HttpResponse
from django.core.context_processors import csrf
from django.template.defaulttags import csrf_token
from models import *
from socialapp.functions import *

def landing(request):
    t = get_template('index.html')
    sports_groups = Groups.objects.all().order_by("group_name").filter(is_sport=1)
    activity_groups = Groups.objects.all().order_by("group_name").filter(is_sport=0)
    discussions = Discussion.objects.all().order_by("-discussion_id")
    event_users = Event_User.objects.all()
    discussionThreads = {}
    for discussion in discussions:
        if discussion.thread_id not in discussionThreads:
            discussionThreads[discussion.thread_id] = []
        discussionThreads[discussion.thread_id].insert(0, discussion)

    event_user_dict = {}
    for event_user in event_users:
        if event_user.event.event_id not in event_user_dict:
            event_user_dict[event_user.event.event_id] = {}
            event_user_dict[event_user.event.event_id]["count"] = 0
            event_user_dict[event_user.event.event_id]["users"] = []
        event_user_dict[event_user.event.event_id]["users"].append(event_user.user)
        event_user_dict[event_user.event.event_id]["count"] += 1
        
    html = t.render(Context({'all_activity_groups' : activity_groups, 
                             'all_sports_groups': sports_groups, 'discussionThreads': discussionThreads, 'event_user_dict': event_user_dict}),
                            )
    return HttpResponse(html)
	
def about(request):
	t = get_template('about.html')
	html = t.render(Context({}))
	return HttpResponse(html)

def createGroup(request):
	t = get_template('createGroup.html')
	html = t.render(Context({}))
	return HttpResponse(html)
	
def loggedIn(request):
    Email = ''
    Password = ''
    t = get_template('loggedIn.html')
    user = Users.objects.get(firstName="Joseph")
    html = t.render(Context({'firstName': user.firstName, 
                             'lastName': user.lastName, 
                              'Email': Email, 
                              'Password': Password}))
    return HttpResponse(html)

def editAccount(request):
	t = get_template('editAccount.html')
	html = t.render(Context({}))
	return HttpResponse(html)

def group(request):
	t = get_template('group.html')
	html = t.render(Context({}))
	return HttpResponse(html)

def signup(request):
	t = get_template('signup.html')
	html = t.render(Context({}))
	return HttpResponse(html)	
	
def profile(request):
	t = get_template('profile.html')
	html = t.render(Context({}))
	return HttpResponse(html)
	

	