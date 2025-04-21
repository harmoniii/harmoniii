<?php

require_once 'config.php';
require_once 'funcs.php';

/**
 * Create campaign
 * 
 * CURL request:
 * 
 * curl -u LOGIN:PASS -H 'Accept:application/json' API_URL/create -X POST -d 'json_array'
 * 
 */

// minumum required fields for campaign creation
$campaign = [
   "name" => "Campaign Name", 
   "status" => [
         "status" => "Active", 
         "set_active_after_imps" => "10", 
         "set_under_review_after_mins" => "5" 
      ], 
   "landers" => [
            "safe_page" => "http://mysite.com/page1.php", 
            "safe_page_type" => 2, 
            "promo_page" => "http://mysite.com/page2.php", 
            "promo_page_type" => 2 
         ] 
]; 

$campaign_json = json_encode($campaign);

$output = mc_send_request(MC_API_URL.'/create', $campaign_json, 'POST');

print $output;
