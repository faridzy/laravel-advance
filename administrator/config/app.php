<?php

/**
 * Created by PhpStorm.
 * User: mfarid
 * Date: 26/08/18
 * Time: 11.22
 */


$returnArray = [

    'name' => 'Administrator',

    'providers' => [
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        Administrator\Providers\AppServiceProvider::class,
        Administrator\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        Administrator\Providers\EventServiceProvider::class,
        Administrator\Providers\RouteServiceProvider::class,

    ],

];

$fileName = basename(__FILE__);

$commonConfig = realpath(app()->basePath().'/../common/config/'.$fileName);
if(is_file($commonConfig)){
    return array_merge_recursive($returnArray, include ($commonConfig));
}

return $returnArray;