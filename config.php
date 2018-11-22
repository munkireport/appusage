
<?php

return [
/*
|===============================================
| Application Usage - bundle ID ignore list
|===============================================
|
| List of bundle-ID's to be ignored when processing application usage
| The list is processed using regex, examples:
|
| Skip  all virtual windows apps created by parallels and VMware
| $conf['bundleid_ignorelist'][] = ['com.parallels.winapp.*', 'com.vmware.proxyApp.*'];
|
| Skip all Apple apps, except iLife, iWork and Server
| 'com.apple.(?!iPhoto)(?!iWork)(?!Aperture)(?!iDVD)(?!garageband)(?!iMovieApp)(?!Server).*'
|
| Skip all apps with empty bundle-id's
| '^$'
|
*/

'appusage_ignorelist' => env('APPUSAGE_IGNORELIST', [
    'com.apple.SecurityAgent',
    'com.apple.cloudphotosd',
    'com.apple.dock.extra',
    'com.apple.PowerChime*',
    ]),
];