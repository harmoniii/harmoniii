<?php

require_once 'config.php';
require_once 'funcs.php';

/**
 * Get one campaign
 * 
 * CURL request:
 * 
 * curl -u LOGIN:PASS -H 'Accept:application/json' API_URL/CAMPAIGN_ID -X GET
 * 
 */

$campaign_id = 'CAMPAIGN_ID';
$output = mc_send_request(MC_API_URL.'/'.$campaign_id);

print $output;

