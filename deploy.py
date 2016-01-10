import os
import sys
import requests
import boto # AWS python SDK
from boto.s3.key import Key

# must accept one argument: www or grad
if len(sys.argv) == 2:
	target = sys.argv[1]
else:
	print 'Specify a target: www, grad, or staging'
	sys.exit()

# CONFIG
url = 'http://localhost/portfolio/' # local endpoint
if target == 'www':
	bucket_name = 'lisaot.to'
elif target == 'grad':
	bucket_name = 'grad.lisaot.to'
elif target == 'staging':
	bucket_name = 'staging.lisaot.to'

S3 = boto.connect_s3()
bucket = S3.get_bucket(bucket_name)

html = [
	'index.php',
	'404.php',
	'about/index.php',
	'project/311/index.php',
	'project/bandr/index.php',
	'project/booksatwork/index.php',
	'project/inctrl/index.php',
	'project/infographics/index.php',
	'project/lefkowitz/index.php',
	'project/parentalcontrols/index.php',
	'project/platform/index.php',
	'project/underdog/index.php',
	'project/zenoandroid/index.php',
	'project/zenolive/index.php',
	'writing/index.php'
]

for slug in html:

	r = requests.get( url + slug + '/?deploy=true&deploy-url=http://' + bucket_name)

	print 'deploying ' + slug

	k = Key(bucket)
	k.key = slug.replace('.php', '.html')
	k.content_type = 'text/html'
	k.set_contents_from_string(r.content)

# css
print 'Syncing CSS...'
os.system('aws s3 sync css s3://' + bucket_name + '/css')

# js
print 'Syncing JavaScript...'
os.system('aws s3 sync js s3://' + bucket_name + '/js')

# images
print 'Syncing images...'
os.system('aws s3 sync img s3://' + bucket_name + '/img')