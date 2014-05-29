import requests
import boto # AWS python SDK
from boto.s3.key import Key

# CONFIG
url = 'http://localhost/portfolio/' # locan endpoint
bucket_name = 'lisa.codes' # name of the bucket we want to use
html = [
	'index.php',
	'404.php',
	'project/bandr/index.php',
	'project/booksatwork/index.php',
	'project/inctrl/index.php',
	'project/infographics/index.php',
	'project/lefkowitz/index.php',
	'project/parentalcontrols/index.php',
	'project/platform/index.php'
]

S3 = boto.connect_s3()

bucket = S3.get_bucket(bucket_name)

for slug in html:

	r = requests.get( url + slug )

	k = Key(bucket)
	k.key = slug.replace('.php', '.html')
	k.content_type = 'text/html'
	k.set_contents_from_string(r.content)