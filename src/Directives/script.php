<?php

return [
  /*
  |---------------------------------------------------------------------
  | @script
  |---------------------------------------------------------------------
  */

  'script' => function ($expression) {
      if (! empty($expression)) {
          return '<script src="'.Directives::deleteQuotes($expression).'"></script>';
      }

      return '<script>';
  },

  'endscript' => function () {
      return '</script>';
  },

];
