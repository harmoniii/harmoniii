<?php

require_once 'config.php';
require_once 'funcs.php';

/**
 * Update campaign
 * 
 * CURL request:
 * 
 * curl -u LOGIN:PASS -H 'Accept:application/json' API_URL/update -X POST -d 'json_array'
 * 
 */

// upload campaign
$campaign_id = 'CAMPAIGN_ID';
$output = mc_send_request(MC_API_URL.'/'.$campaign_id);
$resp = json_decode($output, true);

// error proceccing example
if ($resp['success']) {
    $campaign = $resp['responce'];

    //print_r($campaign);

    $campaign['status']['status'] = 'Paused';  // change status
    $campaign_json = json_encode($campaign);

    $output = mc_send_request(MC_API_URL.'/update', $campaign_json, 'POST');
    print $output;
}
else {
    print 'Error: '.$resp['errorCode'].'. ' .$resp['errorMessage'] ."\n";
}
