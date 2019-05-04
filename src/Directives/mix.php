<?php

return [
  /*
  |---------------------------------------------------------------------
  | @mix
  |---------------------------------------------------------------------
  */

  'mix' => function ($expression) {
      if (ends_with($expression, ".css'")) {
          return '<link rel="stylesheet" href="<?php echo mix('.$expression.') ?>">';
      }

      if (ends_with($expression, ".js'")) {
          return '<script src="<?php echo mix('.$expression.') ?>"></script>';
      }

      return "<?php echo mix({$expression}); ?>";
  },

];
