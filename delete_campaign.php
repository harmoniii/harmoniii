<?php

require_once 'config.php';
require_once 'funcs.php';

/**
 * Delete campaign
 * 
 * CURL request:
 * 
 * curl -u LOGIN:PASS -H 'Accept:application/json' API_URL/delete -X POST -d 'json_array'
 * 
 */

// upload campaign
$campaign = [
   "campaign_id" => [
         "CAMPAIGN_ID_1",
         "CAMPAIGN_ID_2", // maximum 20 campaign IDs per request
      ]
]; 


$campaign_json = json_encode($campaign);

$output = mc_send_request(MC_API_URL.'/delete', $campaign_json, 'POST');
print $output;
