<?php

require_once 'config.php';
require_once 'funcs.php';

/**
 * Downloads campaign's index.php file
 * 
 * CURL request:
 * 
 * curl -u LOGIN:PASS -H 'Accept:application/json' API_URL/CAMPAIGN_ID/getfile -X GET -s -o /path/to/folder/filename.php
 * 
 */

$campaign_id = 'CAMPAIGN_ID';
$output = mc_send_request(MC_API_URL.'/'.$campaign_id .'/getfile');

$f = fopen('/path/to/folder/filename.php', 'w');
fputs($f, $output);
fclose($f);

print "File downloaded.\n";

