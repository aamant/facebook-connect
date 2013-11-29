<?php namespace Aamant\FacebookConnect;

class Fconnect extends \Facebook
{
	/**
	 *
	 * @var array
	 */
	public function getLoginUrl($params = array())
	{
		if (!isset($params['redirect_uri'])){
			$params['redirect_uri'] = \Config::get('facebook-connect::redirect_uri');
		}
		if (!isset($params['scope'])){
			$params['scope'] = \Config::get('facebook-connect::scope');
		}

		return parent::getLoginUrl($params);
	}

	/**
	 *
	 * @var array
	 */
	public function getLogoutUrl($params = array())
	{
		if (!isset($params['next'])){
			$params['next'] = \Config::get('facebook-connect::next');
		}

		return parent::getLogoutUrl($params);
	}
}