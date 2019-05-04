<?php

return [
  /*
  |---------------------------------------------------------------------
  | @isnull / @isnotnull
  |---------------------------------------------------------------------
  */

  'isnull' => function ($expression) {
      return "<?php if (is_null({$expression})) : ?>";
  },

  'endisnull' => function ($expression) {
      return '<?php endif; ?>';
  },

  'isnotnull' => function ($expression) {
      return "<?php if (! is_null({$expression})) : ?>";
  },

  'endisnotnull' => function ($expression) {
      return '<?php endif; ?>';
  },

];
