<?php
/**
 * Created by PhpStorm.
 * User: mfarid
 * Date: 26/08/18
 * Time: 21.53
 */

$returnArray = [

];

$fileName = basename(__FILE__);

$commonConfig = realpath(app()->basePath().'/../common/config/'.$fileName);
if(is_file($commonConfig)){
    return array_merge_recursive($returnArray, include ($commonConfig));
}

return $returnArray;