<?php

return [
  /*
  |---------------------------------------------------------------------
  | @inline
  |---------------------------------------------------------------------
  */

  'inline' => function ($expression) {
      $include = "//  {$expression}\n".
                 "<?php include public_path({$expression}) ?>\n";

      if (ends_with($expression, ".html'")) {
          return $include;
      }

      if (ends_with($expression, ".css'")) {
          return "<style>\n".$include.'</style>';
      }

      if (ends_with($expression, ".js'")) {
          return "<script>\n".$include.'</script>';
      }
  },

];
