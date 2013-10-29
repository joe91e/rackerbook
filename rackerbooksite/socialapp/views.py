# Create your views here.
from django.template.loader import get_template
from django.template import Context
from django.template import RequestContext
from django.http import HttpResponse
from django.http import HttpResponseRedirect
from django.contrib import auth
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
        
    landingInfo = {'all_activity_groups' : activity_groups, 
                             'all_sports_groups': sports_groups, 'discussionThreads': discussionThreads, 'event_user_dict': event_user_dict,
                             }
    landingInfo.update(csrf(request))                             
    html = t.render(Context(landingInfo))
    return HttpResponse(html)
	
def about(request):
	t = get_template('about.html')
	html = t.render(Context({}))
	return HttpResponse(html)

def createGroup(request):
	t = get_template('createGroup.html')
	html = t.render(Context({}))
	return HttpResponse(html)
    
def loginFail(request):
    t = get_template('loginFail.html')
    c = {}
    c.update(csrf(request))                             
    html = t.render(Context(c)) 
    return HttpResponse(html)
    
def loggedIn(request):
    if request.method != 'POST':
        raise Http404('Only POSTs are allowed')
    
    try :
        user = Users.objects.get(email=request.POST['Email'])
        if user.password == request.POST['Password']:
            request.session['user_id'] = user.user_id
            Email = request.POST['Email']
            Password = request.POST['Password']
            loginInfo = {"Email": Email, "Password": Password,
                                        "firstName": user.firstName, "lastName":
                                        user.lastName}
            loginInfo.update(csrf(request))
            t = get_template('loggedIn.html')
            html = t.render(Context(loginInfo))
            return HttpResponse(html)
        else:
            return HttpResponseRedirect('/loginFail/')
    except:
        return HttpResponse("Your email and password didn't match")       

def editAccount(request):
	t = get_template('editAccount.html')
	html = t.render(Context({}))
	return HttpResponse(html)

def group(request):
	t = get_template('group.html')
	html = t.render(Context({}))
	return HttpResponse(html)

def signup(request):
    locations = Locations.objects.all()
    t = get_template('signup.html')
    ctx = {"locations": locations}
    ctx.update(csrf(request))
    html = t.render(Context(ctx))
    return HttpResponse(html)
  
def createUser(request):
    if request.method != 'POST':
        raise Http404('Only POSTs are allowed')
    
    try:
        firstNameVal = request.POST['firstName']
        lastNameVal = request.POST['lastName']
        emailVal = request.POST['Email']
        location_idVal = request.POST['location']
        genderVal = request.POST['gender']
        g = 'M'
        if genderVal == 'male':
            g = 'M'
        else:
            g = 'F'
        locationObj = Locations.objects.get(location_id=location_idVal)       
        newUser = Users(
            firstName=firstNameVal, 
            lastName=lastNameVal,
            password='pistachio',
            email=emailVal,
            gender=g,
            location=locationObj,
            user_desc=''
        )
        newUser.save()
        
        if newUser.user_id:
            return HttpResponseRedirect('/registered/')
        else:
            t = get_template('signup.html')
            ctx = {"locations": locations, "error_msg": "Sign up was unsuccssful!"}
            ctx.update(csrf(request))
            html = t.render(Context(ctx))            
            return HttpResponse(html)
    except:
        return HttpResponse("Sign up unsuccessful!")      

def registered(request):
    t = get_template('registered.html')
    ctx = {}
    ctx.update(csrf(request))
    html = t.render(Context(ctx))
    return HttpResponse(html)
	
def profile(request):
	t = get_template('profile.html')
	html = t.render(Context({}))
	return HttpResponse(html)
    
def csrf_failure(request, reason=""):
    ctx = {'reason': reason}
    return render_to_response("failure.html", ctx)

	