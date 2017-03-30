<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

 return array(
   'localhost' => array(
     'devMode' => true,
     'siteUrl' => 'http://localhost:8888/',
     'environmentVariables' => array(
       'basePath' => '/Users/Andreas-air/Documents/_demot/craft/Craft-2.6.2968/craft',
       'baseUrl'  => 'http://craft-demo2:8888/',
     ),
     'testToEmailAddress' => 'dev@email.com',
   ),

   // Use IP address of your droplet below
   '46.101.171.179' => array(
     'siteUrl' => 'http://207.154.227.223/',
     'environmentVariables' => array(
       'basePath' => '/var/www/html/craft',
       'baseUrl'  => 'http://207.154.227.223/craft',
     )
   )
 );
