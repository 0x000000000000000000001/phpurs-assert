<?php

$assertImpl = function($message, $success) {
    return function() use ($message, $success) {
        if (!$success) {
            throw new \Exception($message);
        }
    };
};

$checkThrows = function($fn) {
    return function() use ($fn) {
        try {
            // fn :: Unit -> a. The JS FFI calls fn() with an implicit
            // undefined; PHP closures require the argument, so pass null
            // as the Unit value. Compiled lambdas ignore it anyway.
            $fn(null);
            return false;
        } catch (\Throwable $e) {
            return true;
        }
    };
};

$exports['assertImpl'] = $assertImpl;
$exports['checkThrows'] = $checkThrows;
return $exports;
