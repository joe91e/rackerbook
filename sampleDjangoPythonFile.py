import os
import sys

sys.path.append("../Model")
sys.path.append("../html")
sys.path.append("../minixsv")
sys.path.append("..")

from google.appengine.ext import db
from google.appengine.api import users
from google.appengine.ext import webapp
from google.appengine.ext.webapp import template
from google.appengine.ext.webapp.util import run_wsgi_app
from google.appengine.api import taskqueue

from People import People
from Crisis import Crisis
from Organization import Organization
from Data import Data
from importXML import importXML
from exportXML import exportXML
from wchelper import getHeader
from wchelper import eliminateHtmlTag
from wchelper import populateLinks
from searchhelper import populateSearchByRecords
from searchhelper import populateSearchByKeys
from searchhelper import formatKeys
import SearchFc

class MainPage(webapp.RequestHandler):
	
	def get(self):
		template_values = getHeader()
		template_values["crs"] = []
		template_values["ppl"] = [] 
		template_values["orgs"] = []
		rows = db.GqlQuery("SELECT * FROM Crisis")
		for row in rows.run(limit = 100):
			p = row
			populateLinks(p)
			template_values["crs"].append(p)

		rows = db.GqlQuery("SELECT * FROM 
Organization")
		for row in rows.run(limit = 100):
			p = row
			populateLinks(p)
			template_values["orgs"].append(p)

		rows = db.GqlQuery("SELECT * FROM People")
		for row in rows.run(limit = 100):
			p = row
			populateLinks(p)
			template_values["ppl"].append(p)
		path = os.path.join(os.path.dirname(__file__), 
'index.html')
		self.response.out.write(template.render(path, 
template_values))

	def post(self):
		template_values = getHeader()
		path = os.path.join(os.path.dirname(__file__), 
'unknown.html')
		self.response.out.write(template.render(path, 
template_values))

class CrisesPage(webapp.RequestHandler):
	
	def get(self):
		template_values = getHeader()
		template_values["crs"] = []
		path = os.path.join(os.path.dirname(__file__) 
+ '/crises', 'crises.html')
		rows = db.GqlQuery("SELECT * FROM Crisis")
		for row in rows.run(limit = 100):
			p = row
			populateLinks(p)
			template_values["crs"].append(p)
		self.response.out.write(template.render(path, 
template_values))

class PeoplePage(webapp.RequestHandler):
	
	def get(self):
		template_values = getHeader()
		template_values["ppl"] = []
		path = os.path.join(os.path.dirname(__file__) 
+ '/people', 'people.html')
		rows = db.GqlQuery("SELECT * FROM People")
		for row in rows.run(limit = 100):
			p = row
			populateLinks(p)
			template_values["ppl"].append(p)
		self.response.out.write(template.render(path, 
template_values))

class OrganizationPage(webapp.RequestHandler):
	
	def get(self):
		template_values = getHeader()
		template_values["orgs"] = []
		path = os.path.join(os.path.dirname(__file__) 
+ '/organizations', 'organizations.html')
		rows = db.GqlQuery("SELECT * FROM 
Organization")
		for row in rows.run(limit = 100):
			p = row
			populateLinks(p)
			template_values["orgs"].append(p)
		self.response.out.write(template.render(path, 
template_values))

class CrisesIndividualPage(webapp.RequestHandler):
	
	def get(self, crisis_id):
		template_values = getHeader()
		crisis_id = eliminateHtmlTag(crisis_id)
		rows = db.GqlQuery("SELECT * FROM Crisis WHERE 
model_id='" + crisis_id + "'")
		if(rows.count() > 0):
			p = rows.fetch(1)[0]
			path = 
os.path.join(os.path.dirname(__file__) + '/crises', 
'crisis.html')
			p.locationString = 
p.getLocationString()
			p.count = rows.count()
			populateLinks(p);
			template_values["crisis"] = p
		else: 
			path = 
os.path.join(os.path.dirname(__file__), 'unknown.html')
		self.response.out.write(template.render(path, 
template_values))


class OrgIndividualPage(webapp.RequestHandler):
	
	def get(self, org_id):
		template_values = getHeader()
		org_id = eliminateHtmlTag(org_id)
		rows = db.GqlQuery("SELECT * FROM Organization 
WHERE model_id='" + org_id + "'")
		if(rows.count() > 0):
			p = rows.fetch(1)[0]
			path = 
os.path.join(os.path.dirname(__file__) + '/organizations', 
'organization.html')
			p.locationString = 
p.getLocationString()
			p.count = rows.count()
			populateLinks(p);
			template_values["org"] = p
		else: 
			path = 
os.path.join(os.path.dirname(__file__), 'unknown.html')
		self.response.out.write(template.render(path, 
template_values))

class PeopleIndividualPage(webapp.RequestHandler):
	
	def get(self, person_id):
		template_values = getHeader()
		person_id = eliminateHtmlTag(person_id)
		rows = db.GqlQuery("SELECT * FROM People WHERE 
model_id='" + person_id + "'")
		if(rows.count() > 0):
			p = rows.fetch(1)[0]
			path = 
os.path.join(os.path.dirname(__file__) + '/people', 
'person.html')
			p.locationString = 
p.getLocationString()
			p.count = rows.count()
			populateLinks(p);
			template_values["person"] = p
		else: 
			path = 
os.path.join(os.path.dirname(__file__), 'unknown.html')
		self.response.out.write(template.render(path, 
template_values))

class ImportPage(webapp.RequestHandler):
	
	def get(self):
		template_values = getHeader()
		path = os.path.join(os.path.dirname(__file__), 
'import.html')
		self.response.out.write(template.render(path, 
template_values))

	def post(self):
		file = self.request.get('file')
		taskqueue.add(url='/import-worker', 
params={'file': file})
		self.redirect('/')

class SearchPage(webapp.RequestHandler):
	
	def get(self, term, query, page):
		self.render_page(query, int(page))
	
	def post(self, term, query, page):
		query = self.request.get('query')
		self.render_page(query, 1)

	def render_page(self, query, page):
		template_values = getHeader()
		template_values['query'] = query
		template_values['page'] = page
		page = page-1
		records = self.recordsStub()
		if len(records) > page*10+10:
			template_values['has_next'] = True
		if page != 0:
			template_values['has_prev'] = True
		records = records[page*10:page*10+10]
		records = SearchFc.Search(query)
		if records > 0:
			formatKeys(query, records, 
template_values)
			path = 
os.path.join(os.path.dirname(__file__), 'search.html')
		else: 
			path = 
os.path.join(os.path.dirname(__file__), 'unknown.html')
		self.response.out.write(template.render(path, 
template_values))

	def recordsStub(self):
		rows = db.GqlQuery("SELECT * FROM People")
		people = rows.fetch(None)
		ret = []
		for person in people:
			ret.append(person.model_id)
		for person in people:
			ret.append(person.model_id)
		return ret

class ImportHandler(webapp.RequestHandler):
	
	def post(self):
		file = self.request.get('file')
		x = importXML()
		x.importDocumentsFile(file)

application = webapp.WSGIApplication([
								
('/', MainPage),
								
('/import', ImportPage),
								
('/import-worker', ImportHandler),
								
('/crises', CrisesPage),
								
('/crises/(.*)', CrisesIndividualPage),
								
('/people', PeoplePage),
								
('/people/(.*)', PeopleIndividualPage),
								
('/organizations', OrganizationPage),
								
('/organizations/(.*)', OrgIndividualPage),
								
('/search(/([^/]+)/([^/]+))?', SearchPage)
								
],
								
debug=True)


def main():
	run_wsgi_app(application)


if __name__ == '__main__':
	main()
