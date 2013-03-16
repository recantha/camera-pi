camera-pi
=========

Work-in-progress for the official camera module from the Raspberry Pi Foundation.

Notes
-----
Install nginx and php according to the instructions at
http://en.joscandreu.com/blog/install-nginx-on-raspberry-pi/
and 
http://en.joscandreu.com/blog/install-php-raspberrypi/

I changed the root folder in the sites-enabled/default config file to somewhere more appropriate (so I could github it)

You need to set a password for the www-data user and then change the two files raspicam.php and raspivid.php to set the password.
All this will be cleaned up over the next few weeks of course.
