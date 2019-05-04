<?php

return [
  /*
  |---------------------------------------------------------------------
  | @js
  |---------------------------------------------------------------------
  */

  'js' => function ($expression) {
      $expression = BladeDirectives::getArguments($expression);

      $variable = BladeDirectives::deleteQuotes($expression->get(0));

      return  "<script>\n".
              "window.{$variable} = <?php echo is_array({$expression->get(1)}) ? json_encode({$expression->get(1)}) : '\''.{$expression->get(1)}.'\''; ?>;\n".
              '</script>';
  },


];
