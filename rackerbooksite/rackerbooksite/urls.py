from django.conf.urls import patterns, include, url
from socialapp.views import current_datetime

# Uncomment the next two lines to enable the admin:
# from django.contrib import admin
# admin.autodiscover()

urlpatterns = patterns('',
    url(r'^home/$', current_datetime),
    # Examples:
    # url(r'^$', 'rackerbooksite.views.home', name='home'),
    # url(r'^rackerbooksite/', include('rackerbooksite.foo.urls')),

    # Uncomment the admin/doc line below to enable admin documentation:
    # url(r'^admin/doc/', include('django.contrib.admindocs.urls')),

    # Uncomment the next line to enable the admin:
    # url(r'^admin/', include(admin.site.urls)),
)
