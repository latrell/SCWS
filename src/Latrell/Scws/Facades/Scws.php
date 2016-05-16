<?php
namespace Latrell\Scws\Facades;

use Illuminate\Support\Facades\Facade;

class Scws extends Facade
{

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'scws';
	}
}
