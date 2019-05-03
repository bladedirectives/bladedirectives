<?php

return [
  /*
  |---------------------------------------------------------------------
  | @isfalse
  |---------------------------------------------------------------------
  */

  'isfalse' => function ($expression) {
      if (str_contains($expression, ',')) {
          $expression = Directives::getArguments($expression);

          return  "<?php if (isset({$expression->get(0)}) && (bool) {$expression->get(0)} === false) : ?>".
                  "<?php echo {$expression->get(1)}; ?>".
                  '<?php endif; ?>';
      }

      return "<?php if (isset({$expression}) && (bool) {$expression} === false) : ?>";
  },

  'endisfalse' => function ($expression) {
      return '<?php endif; ?>';
  },

];
