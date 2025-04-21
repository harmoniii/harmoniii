<?php

require_once 'config.php';
require_once 'funcs.php';

/**
 * Update several campaigns
 * 
 * CURL request:
 * 
 * curl -u LOGIN:PASS -H 'Accept:application/json' API_URL/update -X POST -d 'json_array'
 * 
 */

// upload campaign
$campaign = [
   "campaign_id" => [
         "CAMPAIGN_ID_1",
         "CAMPAIGN_ID_2", // maximum 20 campaign IDs per request
      ], 
   "filters" => [
            "global_filters" => [
               "vpn_proxy" => [
                  "status" => 0 
               ], 
               "bots" => [
                     "status" => 0 
                  ], 
               "magic_filter_light" => [
                        "status" => 0 
                     ], 
               "magic_filter_normal" => [
                           "status" => 0 
                        ], 
               "magic_filter_super" => [
                              "status" => 1 
                           ] 
            ], 
            "countries" => [
                                 "status" => 100, 
                                 "list" => [
                                    "RU" 
                                 ] 
                            ] 
         ] 
]; 


$campaign_json = json_encode($campaign);

$output = mc_send_request(MC_API_URL.'/update', $campaign_json, 'POST');
print $output;
