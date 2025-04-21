<?php

require_once 'config.php';
require_once 'funcs.php';

/**
 * Get Campaigns list
 * 
 * Possible parameters:
 * name=test               - filter by campaign name
 * tag=tag_name1,tag_name2 - filter by tags
 * per_page=50             - campaigns per page, default 30, maximum 100
 * page=1                  - page number (page=1 - second page, page=2 - third page ...)
 * 
 * CURL request:
 * 
 * curl -u LOGIN:PASS -H 'Accept:application/json' API_URL -X GET
 * 
 */

$url = MC_API_URL;

// More examples:

// $url = MC_API_URL?per_page=50&page=1;
// $url = MC_API_URL?name=test;
// $url = MC_API_URL?tag=tag_name1,tag_name2;

$output = mc_send_request($url);

print $output;
