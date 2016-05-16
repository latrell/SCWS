<?php
namespace Latrell\Scws;

class Scws
{

	protected $scws;

	public function __construct($config)
	{
		$this->scws = \scws_new();
		foreach ($config as $key => $value) {
			$this->scws->{'set_' . $key}($value);
		}
	}

	public function __call($name, $arguments)
	{
		return call_user_func_array([
			$this->scws,
			snake_case($name)
		], $arguments);
	}
}
