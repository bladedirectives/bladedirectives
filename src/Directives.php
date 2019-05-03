<?php

namespace bladeDirectives\bladeDirectives;

use Illuminate\Support\Facades\Blade;

class Directives
{

  public function load()
  {
    $path = __DIR__.'/bladeDirectives';

    $this->registerDirectives(
      $this->loadDirectivesFrom($path)
    );
  }

  public function loadDirectivesFrom(string $path)
  {
    if(is_dir( $path ))
    {
      $directives = [];

      foreach (glob(  $path.'/*.php' ) as $directivefile)
      {
        $directive = require $directivefile;

        foreach($directive as $k => $v)
        {
          $directives[$k] = $v;
        }
      }

      return $directives;
    }

    return new \Exception("Directives Directory Doesn't Exists.");
  }

  /**
   * Register the directives.
   *
   * @param  array $directives
   * @return void
   */
  public static function registerDirectives(array $directives)
  {
    collect($directives)->each(function ($item, $key) {
      Blade::directive($key, $item);
    });
  }

  /**
   * Get Arguments From an Expression.
   *
   * @param  string $expression
   * @return \Illuminate\Support\Collection
   */
  public static function getArguments($expression)
  {
    $explode = explode(',', $expression);
    
    return collect($explode)->map(function ($item) {
      return trim($item);
    });
  }

  /**
   * Strip single quotes.
   *
   * @param  string $expression
   * @return string
   */
  public static function deleteQuotes($expression)
  {
    return str_replace("'", '', $expression);
  }

}
