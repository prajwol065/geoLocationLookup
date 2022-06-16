# geoLocationLookup

1. Clone the repo first:
  https://github.com/prajwol065/geoLocationLookup.git 
  if https authentication doesn't work, please let me know. I can add your SSH keys in github.
  

2. Move the files in linux server/machine to /var/www/html directory

  mv geoLocationLookup /var/www/html

3. Check if the apache is running properly or not
  
  etc/init.d/apache2 status
 
 4. Check if the php is installed or NOT

  php -v (the code requires at least PHP >= 7.2, tested on PHP7.4)
  
 5. Then install composer:

   a.  cd ~
       curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
   b.  HASH=`curl -sS https://composer.github.io/installer.sig`
   c.  echo $HASH
   d. Check if you have output from c.
   e. php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
   f. write command composer to see if its installed properly.
   
 6. Then do composer require geoip2/geoip2.

After all these steps, you run the web form application.

Success output:<br>
<img width="512" alt="successs" src="https://user-images.githubusercontent.com/99427984/174030937-49d65a15-f1d1-472b-b027-3b7cefc42d98.png">

Error output:<br>
<img width="442" alt="Error_output" src="https://user-images.githubusercontent.com/99427984/174030957-b265ee02-1978-48c6-a4ea-2d9f7243a87e.png">


There is switch button between IPV4 and IPV6.<br>
<img width="440" alt="switch_to_ipv6_input_form" src="https://user-images.githubusercontent.com/99427984/174031049-3070881f-4b81-4cb9-a45d-f78905040c6e.png">


If the entered IP address is not found then it shows error as follows:<br>
<img width="430" alt="if_ip_address_is_not_found" src="https://user-images.githubusercontent.com/99427984/174031160-ef735195-ff3d-41d4-b7c1-546be8d5c6f6.png">


If you have any queries or concerns, please do not hesitate to contact me. subediprajwol@gmail.com
 
