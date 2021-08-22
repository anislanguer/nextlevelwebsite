<?php

return [

    /*
     * Redirect URL after login
     */
    'redirect_url' => '/auth/steam/handle',

    /*
     * Realm override. Bypass domain ban by Valve.
     * Use alternative domain with redirection to main for authentication (banned by valve).
     */
    //'realm' => 'redirected.com',

    /*
     * API Key (set in .env file) [http://steamcommunity.com/dev/apikey]
     */
    'api_key' => env('STEAM_API_KEY', '24365E09C2FBF107A178D9F16D24E9A5'),

    /*
     * Is using https ?
     */
    'https' => false,
];
