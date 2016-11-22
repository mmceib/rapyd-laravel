<?php namespace Zofe\Rapyd\Facades;

use Illuminate\Support\Facades\Facade;

class DataEdit extends Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
    protected static function getFacadeAccessor()
    {
        return 'Zofe\Rapyd\DataEdit\DataEdit';
    }
}
