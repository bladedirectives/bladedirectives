<?php

return [
  /*
  |---------------------------------------------------------------------
  | @config
  |---------------------------------------------------------------------
  */
 
  'config' => function($expression){
      return "<?php echo e(config($expression)); ?>";
  },

];
