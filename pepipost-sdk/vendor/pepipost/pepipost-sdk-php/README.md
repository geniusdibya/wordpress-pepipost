Pepipost API SDK-PHP
====================
This Pepipost API SDK-PHP.

It was semi-auto generated by APIMATIC v2.0. Thanks to [APIMATIC](http://apimatic.io/)

INSTALLATION
=============

Installing via Composer
=======================
Using Composer is the recommended way to install the Pepipost SDK for PHP. Composer is a dependency management tool for PHP that allows you to declare the dependencies your project needs and installs them into your project.

**Install Composer**
```
curl -sS https://getcomposer.org/installer | php
```
**Run Composer**
```
php composer.phar require pepipost/pepipost-sdk-php:v1.0.0
```

USAGE
===========
```php
<?php

require_once __DIR__.'/vendor/autoload.php';

use PepipostAPIV10Lib\Controllers\Email;

$email = new Email();

$data = array(
    'api_key'        =>  'yoursecretapikey',
    'recipients'    =>  array('recipient@example.com'),
    'email_details' => array(
        'content'       =>  'this mail is sent via PHP SDK',
        'from'          =>  'from@example.com',
        'subject'       =>  'this mail is sent via PHP SDK',
        'fromname'      =>  'SDK Sender Name ',    
    )
);

try {
    $response = $email->sendJson( $data );
    if(empty($response->errorcode)){
        print "Email sent successfully.\n";
    }
    else {
        print "Email sent Failed.\n";
        print "errormessage(" . $response->errormessage . ") \n";
        print "errorcode(" . $response->errorcode . ").\n";
    }
}
catch(Exception $e){
    print 'Call failed due to unhandled exception/error('. $e->getMessage().')'."\n";
}

```
   
Response format
===============
```php
    $response-> message = "SUCCESS";
    $response-> errorcode = 0;
    $response-> errormessage = '';
```