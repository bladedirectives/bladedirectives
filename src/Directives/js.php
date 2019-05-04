<?php

return [
  /*
  |---------------------------------------------------------------------
  | @js
  |---------------------------------------------------------------------
  */

  'js' => function ($expression) {
      $expression = Directives::getArguments($expression);

      $variable = Directives::deleteQuotes($expression->get(0));

      return  "<script>\n".
              "window.{$variable} = <?php echo is_array({$expression->get(1)}) ? json_encode({$expression->get(1)}) : '\''.{$expression->get(1)}.'\''; ?>;\n".
              '</script>';
  },


];
