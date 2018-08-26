<?php

/**
 * Created by PhpStorm.
 * User: mfarid
 * Date: 26/08/18
 * Time: 11.22
 */


$returnArray = [

    'name' => 'Frontend',

    'providers' => [

        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        Frontend\Providers\AppServiceProvider::class,
        Frontend\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        Frontend\Providers\EventServiceProvider::class,
        Frontend\Providers\RouteServiceProvider::class,

    ],

];

$fileName = basename(__FILE__);

$commonConfig = realpath(app()->basePath().'/../common/config/'.$fileName);
if(is_file($commonConfig)){
    return array_merge_recursive($returnArray, include ($commonConfig));
}

return $returnArray;
