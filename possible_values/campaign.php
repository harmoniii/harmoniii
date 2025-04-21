<?php

 $campaign = [
    "campaign_id" => "CAMPAIGN_ID",                             // Remove this field when create a campaign
    "name" => "Campaign Name",
    "status" => [
       "status" => "Active",                                    // Possible values: Active, Paused, Stopped, Show Promo Page
       "set_active_after_imps" => "10",                         // Integer value
       "set_under_review_after_mins" => "0"                     // Possible values: 0,5,10,15,20,25,30,35,40,45,50,55,60
    ],
    "landers" => [
          "safe_page" => "http://trkrl.com/mario/show1.php",    // Safe page URL
          "safe_page_type" => 1,                                // Possible values: 1 - Redirect, 2 - Show content
          "promo_page" => "http://trkrl.com/mario/shovv2.php",  // Promo page URL
          "promo_page_type" => 1,                               // Possible values: 1 - Redirect, 2 - Show content
          "safe_page_append_url_query" => 1,                    // Possible values: 1 - Append URL Query, 0 - Skip URL parameters
          "promo_page_append_url_query" => 0                    // Possible values: 1 - Append URL Query, 0 - Skip URL parameters
       ],
    "filters" => [
             "global_filters" => [                              // Global filters tab
                "vpn_proxy" => [                                // VPN/Proxy Filter
                   "status" => 1                                // 1 - Enabled, 0 - Off
                ],
                "bots" => [                                     // Bots Filter
                      "status" => 1                             // 1 - Enabled, 0 - Off
                   ],
                "magic_filter_light" => [                       // Magic Filter Light
                         "status" => 1                          // 1 - Enabled, 0 - Off
                      ],
                "magic_filter_normal" => [                      // Magic Filter Normal
                            "status" => 1                       // 1 - Enabled, 0 - Off
                         ],
                "magic_filter_super" => [                       // Magic Filter Super
                               "status" => 1                    // 1 - Enabled, 0 - Off
                            ]
             ],
             "countries" => [                                   // Visitor's Location tab
                                  "status" => 100,              // Possible values: 0- Off, 1 - Allow only, 100 - Block Only
                                  "list" => [
                                     "RU"                       // List of countries. Possible values: look countries.php
                                  ]
                               ],
             "device_os" => [                                   // Device/Os tab
                                "desktops" => [                 // All possible values are presented in current array
                                   "Windows",                   // If array is empty then filter is off
                                   "Mac",
                                   "GNU/Linux",
                                   "Ubuntu",
                                   "FreeBSD",
                                   "Fedora",
                                   "Chrome OS",
                                   "Other"
                                ],
                                "smartphones" => [
                                      "Android",
                                      "MocorDroid",
                                      "iOS",
                                      "Windows Phone",
                                      "Windows RT",
                                      "BlackBerry OS",
                                      "Firefox OS",
                                      "KaiOS",
                                      "Tizen"
                                   ],
                                "gameconsoles" => [
                                         "PlayStation",
                                         "PlayStation Port",
                                         "Other"
                                      ],
                                "smarttv" => [
                                         ]
                             ],
             "browsers_languages" => [                           // Browsers/Languages tab
                                    "browsers" => [              // All possible values for browsers are
                                       "Aloha Browser",          // presented in current array
                                       "Android Browser",        // If array is empty then filter is off
                                       "BlackBerry Browser",
                                       "Chrome",
                                       "Chromium",
                                       "Coc Coc",
                                       "Firefox",
                                       "Internet Explorer",
                                       "MIUI Browser",
                                       "Maxthon",
                                       "Microsoft Edge",
                                       "NetFront",
                                       "Opera",
                                       "Oppo Browser",
                                       "Puffin",
                                       "QQ Browser",
                                       "Safari",
                                       "Samsung Browser",
                                       "UC Browser",
                                       "Vivaldi",
                                       "Yandex Browser",
                                       "Other"
                                    ],
                                    "languages" => [            // Languages
                                          "status" => 1,        //Possible values: 0- Off, 1 - Allow only, 100 - Block Only
                                          "list" => [
                                             "en",              // List of languages. Possible values: look languages.php
                                             "ru"
                                          ]
                                       ]
                                 ],
             "isp_organizations" => [                           // ISP/Organisations tab
                                    "status" => 1,              //Possible values: 0- Off, 1 - Allow only, 100 - Block Only
                                    "list" => [
                                       "Google",                // List of ISPs. Looking for a string entry
                                       "Yahoo"
                                    ]
                                 ],
             "ip_list" => [                                     // IP list tab
                                "status" => 1,                  //Possible values: 0- Off, 1 - Allow only, 100 - Block Only
                                "list" => [                     //Possible values:
                                   "237.78.123.10",             //237.78.123.17 - single IP (IPv4)
                                   "237.78.123.11"              //247.78.45.1 - 247.78.45.54 (IPv4)
                                                                //2001:0DB8:AA10:0001:0000:0000:0000:00FB - single IP (IPv6)
                                                                //2001:0DB8:AA10:0001:0000:0000:1000:00FB - 2001:0DB8:AA10:0001:0000:0000:2000:00FB (IPv6)
                                ],
                                "block_all_v6" => 1,            //Block all IPv6 range. Possible values: 0- Off, 1 - On
                             ],
             "referer" => [                                     // Referer tab
                                "status" => 1,                  //Possible values: 0- Off, 1 - Allow only, 100 - Block Only
                                "list" => [
                                   "yandex"                     // List of strings. Looking for a string entry
                                ],
                                "block_blank" => 1              // Block blank referer. 1 - Block, 0 - Do not block
                             ],
             "url_substrings" => [                              // URL Substrings tab
                                "status" => 1,                  //Possible values: 0- Off, 1 - On
                                "required_list" => [            // Required list
                                   "asdfg1",                    // Possible values: https://docs.magicchecker.com/en/articles/3293654-regular-expressions-for-url-substrings-rule?utm_source=direct&utm_medium=referral&utm_campaign=tips&utm_content=substrings_tab
                                   "test=[[+]]"
                                ],
                                "disallowed_list" => [          // Disallowed list
                                      "tag",                    // Possible values: https://docs.magicchecker.com/en/articles/3293654-regular-expressions-for-url-substrings-rule?utm_source=direct&utm_medium=referral&utm_campaign=tips&utm_content=substrings_tab
                                      "id"
                                   ]
                             ],
             "user_agent" => [                                  // User Agent tab
                                "status" => 1,                  //Possible values: 0- Off, 1 - On
                                "required_list" => [            // Required list
                                   "Mazilla",                   // Looking for a string entry
                                   "Edge"
                                ],
                                "disallowed_list" => [          // Disallowed list
                                      "Safari"                  // Looking for a string entry
                                   ]
                             ],
             "time_of_day" => [                                     // Time of day tab
                                "status" => 1,                      // Possible values: 0- Off, 1 - Allow only, 100 - Block Only
                                "selected_time" => "02:00 - 22:50", // Possible values 00:00-23:59
                                "timezone" => "Pacific/Midway"      // Possible values: look time_zone.php
                             ]
          ]
 ];
