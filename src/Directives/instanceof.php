<?php

return [
  /*
  |---------------------------------------------------------------------
  | @instanceof
  |---------------------------------------------------------------------
  */

  'instanceof' => function ($expression) {
      $expression = Directives::getArguments($expression);

      return  "<?php if ({$expression->get(0)} instanceof {$expression->get(1)}) : ?>";
  },

  'endinstanceof' => function () {
      return '<?php endif; ?>';
  },

];
