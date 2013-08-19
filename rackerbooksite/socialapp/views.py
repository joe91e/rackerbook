# Create your views here.
from django.template.loader import get_template
from django.template import Context
from django.http import HttpResponse
import models

def landing(request):
    t = get_template('index.html')
    html = t.render(Context({}))
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
	t = get_template('loggedIn.html')
	html = t.render(Context({}))
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
	

	