transip-api
===========

Makes the TransIP API client available in Composer.

To install run the followoing command:

	composer require eresults/transip-api

Added ``` Transip_ApiSettings::$soapOptions``` so you can add extra options to ```SoapClient``` (http://php.net/manual/en/soapclient.soapclient.php).

I made this adjustment to make it possible to communicate with Transip from Heroku (http://heroku.com). Heroku doesn't have a fixed IP range so it's not possible to add a trusted IP (https://www.transip.nl/cp/mijn-account/#api).

### Examples

#### Proximo (https://addons.heroku.com/proximo)
Add the code below to your bootstrap file and add the IP you get from Proximo to the transip trusted IP list.
```php
$parsed = parse_url(getenv('PROXIMO_URL'));
Transip_ApiSettings::$soapOptions = array(
  'proxy_host' => $parsed['host'],
  'proxy_port' => isset( $parsed['port'] ) ? $parsed['port'] : 80,
  'proxy_login' => $parsed['user'],
  'proxy_password' => $parsed['pass']
);
```

### Disclaimer

This repo is based on TransipAPI 5.4 (https://www.transip.nl/transip/api/) and in no way affiliated with or endorsed by TransIP.
