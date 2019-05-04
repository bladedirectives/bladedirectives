<?php

return [
  /*
  |---------------------------------------------------------------------
  | @fa, @fas, @far, @fal, @fab
  |---------------------------------------------------------------------
  */

  'fa' => function ($expression) {
      $expression = Directives::getArguments($expression);

      return '<i class="fa fa-'.Directives::deleteQuotes($expression->get(0)).' '.Directives::deleteQuotes($expression->get(1)).'"></i>';
  },

  'fas' => function ($expression) {
      $expression = Directives::getArguments($expression);

      return '<i class="fas fa-'.Directives::deleteQuotes($expression->get(0)).' '.Directives::deleteQuotes($expression->get(1)).'"></i>';
  },

  'far' => function ($expression) {
      $expression = Directives::getArguments($expression);

      return '<i class="far fa-'.Directives::deleteQuotes($expression->get(0)).' '.Directives::deleteQuotes($expression->get(1)).'"></i>';
  },

  'fal' => function ($expression) {
      $expression = Directives::getArguments($expression);

      return '<i class="fal fa-'.Directives::deleteQuotes($expression->get(0)).' '.Directives::deleteQuotes($expression->get(1)).'"></i>';
  },

  'fab' => function ($expression) {
      $expression = Directives::getArguments($expression);

      return '<i class="fab fa-'.Directives::deleteQuotes($expression->get(0)).' '.Directives::deleteQuotes($expression->get(1)).'"></i>';
  },

];
