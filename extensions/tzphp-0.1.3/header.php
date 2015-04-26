<?php
/**
 * Created by PhpStorm.
 * User: merlin
 * Date: 15-1-11
 * Time: 上午11:08
 */
$thisurl = "http://www.lao8.org/";
var_dump(get_headers($thisurl, 1));

var_dump(get_headers($thisurl,1)['Accept-Language']);