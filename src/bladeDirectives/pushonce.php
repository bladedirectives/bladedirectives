<?php

return [
  /*
  |---------------------------------------------------------------------
  | @pushonce
  |---------------------------------------------------------------------
  */

  'pushonce' => function ($expression) {
      list($pushName, $pushSub) = explode(':', trim(substr($expression, 1, -1)));

      $key = '__pushonce_'.str_replace('-', '_', $pushName).'_'.str_replace('-', '_', $pushSub);

      return "<?php if(! isset(\$__env->{$key})): \$__env->{$key} = 1; \$__env->startPush('{$pushName}'); ?>";
  },

  'endpushonce' => function () {
      return '<?php $__env->stopPush(); endif; ?>';
  },

];
