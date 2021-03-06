#!/usr/bin/python

import fcgi, os, sys, cgi

count=0

while fcgi.isFCGI():
	req = fcgi.Accept()
	count = count+1
				
	req.out.write("Content-Type: text/html\n\n")
	req.out.write("""<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css" />
	    <script type='application/ld+json'> 
    {
        "@context": "http://www.schema.org",
        "@type": "Local Business",
        "name": "New Haven Village Suites",
        "url": "http://newhavenvillagesuites.com/",
        "description": "New Haven Village Suites is an extended stay hotel, designed for people looking for flexibility and ease of living. Our community offers the conveniences of a hotel with the comforts of home. Whether you are traveling for business or pleasure, a day, a week, a month or a year, we will provide you with everything you need for a pleasant stay.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "3 Long Wharf Drive",
            "addressLocality": "New Haven",
            "addressRegion": "Connecticut",
            "postalCode": "06511",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "41.2885066",
            "longitude": "-72.9315693"
        },
        "hasMap": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.9355751025473!2d-72.93156928457728!3d41.28850657927338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e7d842161a3b13%3A0xc0c3f72ff384d2a8!2sNew+Haven+Village+Suites!5e0!3m2!1sen!2sus!4v1476995441225"
    }
    </script>
</head>
	<body class="test-data">
	<table cellspacing="0" cellpadding="0" border="0">
	<tr class="subhead"><th>Name</th><th>Value</th></tr>""")
	req.out.write('<tr class="normal"><td>%s</td><td>%s</td></tr>\n' % ("Request counter", count))
	names = req.env.keys()
	names.sort()
	cl = ('alt','normal')
	i= 0
	for name in names:
		if not name.find("HTTP") or not name.find("REQUEST"):
			req.out.write('<tr class="%s"><td>%s</td><td>%s</td></tr>\n' % (cl[i%2],
				name, cgi.escape(`req.env[name]`)))
			i = i+1

	req.out.write('</table>\n</body></html>\n')

	req.Finish()
