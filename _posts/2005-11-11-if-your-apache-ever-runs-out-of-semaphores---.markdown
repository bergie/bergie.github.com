---
  title: "If your Apache ever runs out of semaphores..."
  categories: 
    - "midgard"
  layout: "post"

---
If you get this error message when trying to start Apache, then you're out of [semaphores][2]:

	# apachectl start
	Ouch! ap_mm_create(1048576, "/var/run/httpd.mm.22903") failed
	Error: MM: mm:core: failed to acquire semaphore (No space left on device): OS: Invalid argument
	/usr/sbin/apachectl start: httpd could not be started

The easy fix is to just remove all semaphores owned by Apache:

	# /usr/bin/ipcrm sem $(/usr/bin/ipcs -s | grep apache | awk '{print$2}')

Got the fix from [cacti forum][1].

[1]: http://forums.cacti.net/about675.html
[2]: http://en.wikipedia.org/wiki/Semaphore_(programming)
