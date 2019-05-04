<?php

return [
  /*
  |---------------------------------------------------------------------
  | @repeat
  |---------------------------------------------------------------------
  */

  'repeat' => function ($expression) {
      return "<?php for (\$iteration = 0 ; \$iteration < (int) {$expression}; \$iteration++): ?>";
  },

  'endrepeat' => function ($expression) {
      return '<?php endfor; ?>';
  },

];
