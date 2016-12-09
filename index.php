<?php

require_once('GetResponseAPI3.class.php');
$getresponse = new GetResponse('YOUR_API_KEY');

// To get the list of campaigns

$campaign=$getresponse->getCampaigns();

// To add new contact to a campaign

$getresponse->addContact(array(
    'name'              => 'John Smith',
    'email'             => 'Johnsmith@testdomain.com',
    'dayOfCycle'        => 0,
    'campaign'          => array('campaignId' => 'CAMPAIGN_ID_FROM_GETRESPONSE'),
    'ipAddress'         => $_SERVER['REMOTE_ADDR'],
    
));


?> 
