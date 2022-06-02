<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['template'] = 'onchainsurveys';
$config['domain'] = '';
$config['title'] = 'Onchain Surveys';
$config['author'] = '';
$config['crypt_key'] = 'onchain2022';


$this->app = json_decode(json_encode($config),false);

//print_r($this->app);

