<?php

return [
  /*
  |---------------------------------------------------------------------
  | @script
  |---------------------------------------------------------------------
  */

  'script' => function ($expression) {
      if (! empty($expression)) {
          return '<script src="'.BladeDirectives::deleteQuotes($expression).'"></script>';
      }

      return '<script>';
  },

  'endscript' => function () {
      return '</script>';
  },

];
