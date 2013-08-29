<?php

/**
 * This class holds the settings for the TransIP API.
 */
class Transip_ApiSettings
{
	/**
	 * The mode in which the API operates, can be either:
	 *		readonly
	 *		readwrite
	 *
	 * In readonly mode, no modifying functions can be called.
	 * To make persistent changes, readwrite mode should be enabled.
	 */
	public static $mode = 'readwrite';

	 /**
	  * TransIP API endpoint to connect to.
	  *
	  * e.g.:
	  *
	  * 		'api.transip.nl'
	  * 		'api.transip.be'
	  * 		'api.transip.eu'
	  */
	public static $endpoint = 'api.transip.nl';

	/**
	 * Your login name on the TransIP website.
	 *
	 */
	public static $login = '';

	/**
	 * One of your private keys; these can be requested via your Controlpanel
	 */
	public static $privateKey = '';
	
	/**
	 * Option to add aditional options to the SoapClient(http://php.net/manual/en/soapclient.soapclient.php)
	 */
	public static $soapOptions = array();
	
}