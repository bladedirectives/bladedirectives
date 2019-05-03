<?php

return [
  /*
  |---------------------------------------------------------------------
  | @typeof
  |---------------------------------------------------------------------
  */

  'typeof' => function ($expression) {
      $expression = Directives::getArguments($expression);

      return  "<?php if (gettype({$expression->get(0)}) == {$expression->get(1)}) : ?>";
  },

  'endtypeof' => function () {
      return '<?php endif; ?>';
  },

];
