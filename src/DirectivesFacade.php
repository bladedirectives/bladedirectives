<?php

namespace bladeDirectives\bladeDirectives;

use Illuminate\Support\Facades\Facade;

class DirectivesFacade extends Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
	protected static function getFacadeAccessor()
	{
    	return 'directives';
	}
}
