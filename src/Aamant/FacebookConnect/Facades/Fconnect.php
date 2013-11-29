<?php namespace Aamant\FacebookConnect\Facades;

use Illuminate\Support\Facades\Facade;

class Fconnect extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'facebook-connect'; }

}