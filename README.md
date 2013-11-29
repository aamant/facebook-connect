facebook-connect
================

Laravel Facade for Facebook PHP SDK

Add `aamant\facebook` to `composeer.json`

	"aamant/facebook-connect": "dev-master"

Add Provider to `app/config/app.php`

	'providers' => array(
		'Aamant\FacebookConnect\FacebookConnectServiceProvider'
	)

And Alias

	'aliases' => array(
		'Fconnect'		  => 'Aamant\FacebookConnect\Facades\Fconnect',
	)

## Configuration

Run `php artisan config:publish aamant/facebook-connect` and modify the config file with your own informations.

## Exemple

1. Get Login Url with your credentials and scope.

	`Route::get('facebook', function(){
		if (0 === Fconnect::getUser()){
			return Redirect::to(Fconnect::getLoginUrl());
		} else {
			return Fconnect::api('/me');
		}
	});`
