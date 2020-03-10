# z-mailgun

[![License](http://img.shields.io/:license-mit-blue.svg)](http://doge.mit-license.org)

PHP module for Mailgun email sender

# Getting Started

### Add package to composer.json

`composer require zguillez/z-mailgun`

	//packaje.json
	{
        "require": {
            "zguillez/z-mailgun": "^1.0.0"
        }
    }

# Usage:

	require 'vendor/autoload.php';
	
	$mail = new Z\Mailgun('m.mydomain.com', 'key-****************************');
    $result = $mail->send("no_reply@mydomain.com", "dummy@gmail.com", "[test] z-mailgun", "this is a test...");
    var_dump($result);


# Contributing and issues

Contributors are welcome, please fork and send pull requests! If you have any ideas on how to make this project better then please submit an issue or send me an [email](mailto:mail@zguillez.io).

# License

©2020 Zguillez.io

Original code licensed under [MIT](https://en.wikipedia.org/wiki/MIT_License) Open Source projects used within this project retain their original licenses.

# Changelog

### v1.0.0 (Mar 10, 2020) 

* Initial implementation