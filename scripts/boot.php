<?php
require_once('lib/spyc.php');
require_once('lib/magpierss/rss_fetch.inc');

require_once(dirname(__FILE__).'/../config/environment.php');

# connect to database
// $connection = mysql_connect($ENV['server'], $ENV['username'], $ENV['password']) or die('Could not connect'.mysql_error());
// mysql_select_db($ENV['database']) or die ('Could not select database');
// 
// # get config information from database
// $config_r = mysql_query('SELECT * FROM config');
// $CONFIG = mysql_fetch_assoc($config_r);
// mysql_free_result($config_r);

// $environment = Spyc::YAMLLoad(dirname(__FILE__).'/../config/environment.yml');

// $CONFIG = $environment['config'];

// $CONFIG = array(
// 	// 'web_root' => '/Users/amdayton/Sites/mnkino.com/',
// 	 'web_root' => '/users/home/amdayton/domains/mnkino.com/web/public/',
// 	'mail_to' => 'mnkino@gmail.com',
// 	'flickr_api_key' => '',
// 	'admin_username' => '',
// 	'admin_password' => '',
// 	'blip_tv_username' => '',
// 	'blip_tv_password' => '',
// 	'blip_tv_url' => '',
// 	'flickr_username' => '',
// 	'flickr_password' => '',
// 	'flickr_url' => ''
// );

include_once('page.php');
// include_once('flickr.php');
?>