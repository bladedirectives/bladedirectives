<?php

return [

  /**
   * @svg
   */
  'svg' => function($arguments){


      $trim = trim($arguments, "() ");
      $explode = explode(',', $trim);

      list($path, $class) = array_pad($explode, 2, '');

      $path = trim($path, "' ");
      $class = trim($class, "' ");


      $svg = new \DOMDocument();
      $svg->load(public_path(
        $path
      ));
      $svg
        ->documentElement
        ->setAttribute("class", $class);

      return $svg->saveXML(
              $svg->documentElement
            );

  },

];
