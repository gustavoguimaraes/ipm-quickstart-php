# IP Messaging Quickstart for PHP

This application should give you a ready-made starting point for writing your
own messaging apps with Twilio IP Messaging. Before we begin, we need to collect
all the config values we need to run the application:

Credential | Description
---------- | -----------
Twilio Account SID | Your main Twilio account identifier - [find it in the console](https://www.twilio.com/console).
IP Messaging Service SID | Like a database ID for all your messaging app's data. [Generate one here](https://www.twilio.com/console/ip-messaging/services).
API Key | Used to authenticate - [generate one here](https://www.twilio.com/console/ip-messaging/dev-tools/api-keys).
API Secret | Used to authenticate - [just like the above, you'll get one here](https://www.twilio.com/console/ip-messaging/dev-tools/api-keys).

## A Note on API Keys

When you generate an API key pair at the URLs above, your API Secret will only
be shown once - make sure to save this in a secure location, 
or possibly your `~/.bash_profile`.

## Setting Up The PHP Application

Create a configuration file for your application:

```bash
cp config.example.php config.php
```

Edit `config.php` with the four configuration parameters we gathered from above.

Next, we'll need to install the Twilio Helper library via [Composer](https://getcomposer.org/).

```bash
composer install
```

Now we should be all set! Run the application using the `php -S` command.

```bash
php -S localhost:8000
```

Alternately, you could simple place the contents of this project directly in the
webroot of your server and visit `index.html`.

Your application should now be running at [http://localhost:8000](http://localhost:8000). 
Open this page in a couple browsers or tabs, and start chatting!

![screenshot of chat app](https://s3.amazonaws.com/howtodocs/quickstart/ipm-browser-quickstart.png)

## License

MIT
