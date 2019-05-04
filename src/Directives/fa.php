<?php

return [
  /*
  |---------------------------------------------------------------------
  | @fa, @fas, @far, @fal, @fab
  |---------------------------------------------------------------------
  */

  'fa' => function ($expression) {
      $expression = BladeDirectives::getArguments($expression);

      return '<i class="fa fa-'.BladeDirectives::deleteQuotes($expression->get(0)).' '.BladeDirectives::deleteQuotes($expression->get(1)).'"></i>';
  },

  'fas' => function ($expression) {
      $expression = BladeDirectives::getArguments($expression);

      return '<i class="fas fa-'.BladeDirectives::deleteQuotes($expression->get(0)).' '.BladeDirectives::deleteQuotes($expression->get(1)).'"></i>';
  },

  'far' => function ($expression) {
      $expression = BladeDirectives::getArguments($expression);

      return '<i class="far fa-'.BladeDirectives::deleteQuotes($expression->get(0)).' '.BladeDirectives::deleteQuotes($expression->get(1)).'"></i>';
  },

  'fal' => function ($expression) {
      $expression = BladeDirectives::getArguments($expression);

      return '<i class="fal fa-'.BladeDirectives::deleteQuotes($expression->get(0)).' '.BladeDirectives::deleteQuotes($expression->get(1)).'"></i>';
  },

  'fab' => function ($expression) {
      $expression = BladeDirectives::getArguments($expression);

      return '<i class="fab fa-'.BladeDirectives::deleteQuotes($expression->get(0)).' '.BladeDirectives::deleteQuotes($expression->get(1)).'"></i>';
  },

];
