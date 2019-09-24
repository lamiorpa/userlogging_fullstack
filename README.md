Html, php + sql -harjoitus missä mahdollistetaan käyttäjän luominen ja kirjautuminen nettisivulle

Exercise was made based on following tutorial:
https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

1. Registration form allows you to create account (name + hashed password). Account data is sent to sql storage
2. Login page reads user inputs and compares them to login information loaded from sql storage. If match, continue
3. Welcome-page is displayed with list of names of all users. You can either log out (-> 2.) or change your password (-> 4.).
4. Password can be changed in its own page. If successful, user redirected to step 2.

Environments:

HTML5

mysql  Ver 15.1 Distrib 10.4.6-MariaDB, for Win64 (AMD64), source revision b8e655ce029a1f182602c9f12c3cc5931226eec2

PHP 7.3.9 (cli) (built: Aug 28 2019 09:28:48) ( ZTS MSVC15 (Visual C++ 2017) x64 )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.9, Copyright (c) 1998-2018 Zend Technologies

Libraries:

Bootstrap
https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css