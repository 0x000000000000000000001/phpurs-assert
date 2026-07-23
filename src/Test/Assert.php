<?php

$assertImpl = function($message) {
  return function($condition) use ($message) {
    return function() use ($message, $condition) {
      if (!$condition) {
        throw new \Exception($message);
      }
    };
  };
};

$checkThrows = function($fn) {
  return function() use ($fn) {
    try {
      $fn();
      return false;
    } catch (\Exception $e) {
      return true;
    }
  };
};

$exports['assertImpl'] = $assertImpl;
$exports['checkThrows'] = $checkThrows;

return $exports;
