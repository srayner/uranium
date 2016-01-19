Uranium
=======

Zend Framework2 PHP application that tweets your Github activity.

Currently a simple tweet is sent each time you push code to your repository.

Usage
-----
Install this application on a publicly accessible webserver.

Set up a webhook in your github repository that points to http://yourpublicserver/webhook

Set up an application on your twitter account and obtain an access token.

Add your twitter access token to the configuration of this application on your public web server.

Each time you push code to your repository, Github will send a POST request to your
server. Upon receipt of the POST request, your server will send a tweet via your
twitter account using you access token.

Notes
-----
This application can work as is, but it is a work in progress and more features
will be added, and it will become more simple to set up.