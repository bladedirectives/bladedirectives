<?php

return [
  /*
  |---------------------------------------------------------------------
  | @style
  |---------------------------------------------------------------------
  */

  'style' => function ($expression) {
      if (! empty($expression)) {
          return '<link rel="stylesheet" href="'.Directives::deleteQuotes($expression).'">';
      }

      return '<style>';
  },

  'endstyle' => function () {
      return '</style>';
  },


];
