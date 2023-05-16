<?php

## name     : msg.php
## purpose  : type-aware CLI output
## license  : MIT
## git      : https://github.com/pffy/msg-php
## requires : PHP 7.4.33


# msg returns output for debugging

function msg($var = '') {

  switch(gettype($var)) {
    case 'string':
      echo 'TYPE-STRING: ';
      echo (string)$var;
      break;
    case 'float':
#    case 'real': # depercated in PHP8
    case 'double':
      echo 'TYPE-DOUBLE: ';
      echo (float)$var;
      break;
    case 'integer':
      echo 'TYPE-INTEGER: ';
      echo (integer)$var;
      break;
    case 'boolean':
      echo 'TYPE-BOOLEAN: ';
      $var = !!$var ? 'true' : 'false';
      echo $var;
      break;
    case 'array':
      echo 'TYPE-ARRAY: ';
      var_dump($var);
      break;
    case 'object':
      echo 'TYPE-OBJECT: ';
      var_dump($var);
      break;
    case 'NULL':
      echo 'TYPE-NULL: ';
      echo $var;
      break;
    case 'resource':
      echo 'TYPE-RESOURCE: ';
      echo $r = get_resource_type($var);
      echo PHP_EOL;
      echo 'ID: ' . (int)$var;
      break;
    default:
      # derp, whatever
      var_dump($var);
      break;
  }

  echo PHP_EOL;
}
