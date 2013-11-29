<?php namespace Aamant\FacebookConnect;

use Illuminate\Support\ServiceProvider;

class FacebookConnectServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('aamant/facebook-connect');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['facebook-connect'] = $this->app->share(function($app){
			return new Fconnect($this->app['config']->get('facebook-connect::app'));
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('facebook-connect');
	}

}