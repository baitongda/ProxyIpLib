<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('proxy_ip', 'ProxyIpController@getNowValidateOneIp');
$router->get('proxy_ips', 'ProxyIpController@getProxyIpList');
$router->get('web-request-speed', 'ProxyIpController@proxyIpRequestWebSiteCheck');
