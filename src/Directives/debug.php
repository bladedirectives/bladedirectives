<?php

return [
    /*
    |---------------------------------------------------------------------
    | @isdebug / @isnotdebug
    |---------------------------------------------------------------------
    */

    'isdebug' => function(){
        $condition = config('app.debug');
        return "<?php if($condition) :  ?>";
    },

    'enddebug' => function(){
        return '<?php endif; ?>';
    },

    'isnotdebug' => function(){
        $condition = config('app.debug');
        return "<?php if(! $condition) :  ?>";
    },

    'endisnotdebug' => function(){
        return '<?php endif; ?>';

    },
];
