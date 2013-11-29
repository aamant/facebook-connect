<?php

return array(
	'app' => array(
		'appId'		=> 'youAppId',
		'secret'	=> 'yourSecret'
	),
	// After login
	'redirect_uri' => 'YourSiteURL',
	// After logout
	'next' => 'LogoutPageUrl',
	'scope' => 'user_birthday,email,user_hometown,user_location,user_status,user_photos,user_likes,user_education_history'
);