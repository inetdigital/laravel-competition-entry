# Laravel PHP Framework

# Requirements

Vagrant - https://www.vagrantup.com/downloads.html
VirtualBox - https://www.virtualbox.org/wiki/Downloads
Composer - https://getcomposer.org/


# Setup 

1) Install homestead using composer - $composer require laravel/homestead --dev

2) Generate Vagrantfile and homestead.yaml - $php vendor/bin/homestead make

3) By default the app will be available at http://homestead.app - edit Homestead.yaml line 19 to change 

4) Add local host record - ip homestead.app I.E 192.168.10.10 homestead.app (editable in lines 2 & 19 of homestead.yaml)

5) Install NPM Dependencies - $npm install  

6) build vagrant box - $vagrant up --provision

7) SSH into vagrant VM - $vagrant ssh

8) CD to root directory /var/www/dewsign/

9) Run DB migrations - $php artisan migrate

10) Run DB seeders - $php artisan db:seed

11) Open http://homestead.app in web browser

12) To view entries, click Admin Login - credentials: admin@admin.com : p@ssw0rd!16

# Gulp

For any changes to javascript and scss to work, gulp must be run. 
To use gulp watch (which tracks files changes and automatically runs gulp), 
it's considerably faster to run on the host machine.

To install gulp:

npm install -g gulp

And then run: gulp watch


