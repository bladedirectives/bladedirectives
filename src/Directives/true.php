<?php

return [
  /*
  |---------------------------------------------------------------------
  | @istrue
  |---------------------------------------------------------------------
  */

  'istrue' => function ($expression) {
      if (str_contains($expression, ',')) {
          $expression = BladeDirectives::getArguments($expression);

          return  "<?php if (isset({$expression->get(0)}) && (bool) {$expression->get(0)} === true) : ?>".
                  "<?php echo {$expression->get(1)}; ?>".
                  '<?php endif; ?>';
      }

      return "<?php if (isset({$expression}) && (bool) {$expression} === true) : ?>";
  },

  'endistrue' => function ($expression) {
      return '<?php endif; ?>';
  },

];
