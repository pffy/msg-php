<?php

## name     : msg.php
## purpose  : type-aware CLI output
## license  : MIT
## git      : https://github.com/pffy/msg-php

# msg returns output for debugging

function msg($var) {

  switch(gettype($var)) {
    case 'string':
      echo (string)$var;
      break;
    case 'float':
      echo (float)$var;
      break;
    case 'integer':
      echo (int)$var;
      break;
    case 'boolean':
      $var = (string) $var;
      echo $var;
      break;
    case 'object':
      var_dump($var);
      break;
    default:
      # derp, whatever
      var_dump($var);
      break;
  }

  echo PHP_EOL;
}
