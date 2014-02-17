<?php

/**
 * This example returns the amount of traffic used for a given VPS in the current contract period
 *
 * @copyright Copyright 2013 TransIP BV
 * @author TransIP BV <support@transip.nl>
 */

// Include vpsservice
require_once('Transip/VpsService.php');

try {
    // Get a the amount of traffic used for the current contract period
    $amountOfTraffic = Transip_VpsService::getAmountOfTrafficUsed('vps-name');

    print_r($amountOfTraffic);
} catch (SoapFault $f) {
    // It is possible that an error occurs when connecting to the TransIP Soap API,
    // those errors will be thrown as a SoapFault exception.
    echo 'An error occurred: ' . $f->getMessage(), PHP_EOL;
}
