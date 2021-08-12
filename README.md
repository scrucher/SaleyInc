#####################################################
####               DOCUMENTATION                 ####
#####################################################

#####################
# PROJECT STRUCTURE #
#####################
tet()
|_MAIN
 |__assets(css, javascript and bootstrapfiles)
 |__Dashboard
 |  |__assets(css, javascript and bootstrapfiles)
 |  |__includes
 |  |  |__link.css.php
 |  |  |__nav_bar.php
 |  |  |__script.js.php
 |  |  |__side_bar.php
 |  |  |__toglle.tool.php
 |  |
 |  |__includes
 |  |
 |  |__src
 |  |  |__dbcon
 |  |  |  |__development.db.php
 |  |  |  |__production.db.php
 |  |  |
 |  |  |__client_secret.json
 |  |  |__comp.php
 |  |  |__inter.php
 |  |  |__oauth2callback.php
 |  |  |__user.class.php
 |  |  
 |  |__dashboard.php
 |  |__generator.php
 |  |__index.php
 |  |__notification.php
 |  |__profile.php
 |  |__tables.php
 |  |__user.php
 |  
 |__eng
 |  |__404.html
 |  |__about.php
 |  |__clients.php
 |  |__contact.php
 |  |__footer.php
 |  |__header.php
 |  |__hero.php
 |  |__index.php
 |  |__portfolio.php
 |  |__pricing.php
 |  |__QA.php
 |  |__service.php
 |  |__sitemap.xml
 |  |__skills.php
 |  |__team.php
 |  |__hero.phpwhy.php
 |
 |__vendor(composer packages foalder)
 |
 |__.gitignore
 |__about.php
 |__clients.php
 |__composer.json
 |__composer.lock
 |__config.php
 |__contact.php
 |__favicon.ico
 |__footer.php
 |__header.php
 |__index.html
 |__index.php
 |__php.ini
 |__portfoli-details.php
 |__portfolio.php
 |__hero.phppricing.php
 |__QA.php
 |__README.md
 |__robot.txt
 |__service.php
 |__sitemap.xml
 |__skills.php
 |__team.php
 |__why.php



 ############################
 ##  PHP SOURCE CODE FILES ##
 ############################

 ## Database Config Files  ##

 developmen.db.php  is a file that holds db config file for local develepment
 production.db.php is a file that holds db config file for server deployment 


 ## Server Side Integration Files ##

 comp.php is a file which integrate with QR Code library to generate QR Codes
 inter.php is a file which still under construction for Web content changing 
 oauth2callback.php is a file from Google Analytics which integrate with Analytics library
 user.class.php which is the main file that holds most of the website logic
 client_secret.json is a json file that holds google clouds api secret that connects to Analytics



##############
##  Classes ##
##############

## User.class.php Classes ##

    |_User class()
    user class is a class that holds all the methods for creating user athenticate user update user data and delete a user

















