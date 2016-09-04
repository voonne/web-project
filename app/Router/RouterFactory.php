<?php

namespace App\Router;

use Nette\Application\IRouter;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;


class RouterFactory
{

	/**
	 * @return IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList;

		$router[] = $frontRouter = new RouteList('Front');

		$frontRouter[] = new Route('[<locale=cs cs|en>/]<presenter>/<action>[/<id>]', 'Default:default');

		return $router;
	}

}
