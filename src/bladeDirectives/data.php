<?php

return [
  /*
   |---------------------------------------------------------------------
   | @data
   |---------------------------------------------------------------------
   */

  'data' => function ($expression) {
      $output = 'collect((array) '.$expression.')
          ->map(function($value, $key) {
              return "data-{$key}=\"{$value}\"";
          })
          ->implode(" ")';

      return "<?php echo $output; ?>";
  },

];
