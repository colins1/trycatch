<?php 

class NumberException extends Exception {}
class FloatException extends Exception {}
class StringException extends Exception {}
class BooleanException extends Exception {}
class ArrayException extends Exception {}
class NullException extends Exception {}

function checkType($value) {
    if (is_int($value)) {
        throw new NumberException('Целочисленное число');
    } elseif (is_float($value)) {
        throw new FloatException('дробь');
    } elseif (is_string($value)) {
        throw new StringException('строка');
    } elseif (is_bool($value)) {
        throw new BooleanException('булевое значение');
    } elseif (is_array($value)) {
        throw new ArrayException('массив');
    } elseif (is_null($value)) {
        throw new NullException('Null');
    }
}

try {
    $value = 10;
    checkType($value);
} catch (NumberException $e) {
    echo 'Исключение: ',  $e->getMessage(), '<br/>';
}

try {
    $value = 10.5;
    checkType($value);
} catch (FloatException $e) {
    echo 'Исключение: ',  $e->getMessage(), '<br/>';
}

try {
    $value = 'hello';
    checkType($value);
} catch (StringException $e) {
    echo 'Исключение: ',  $e->getMessage(), '<br/>';
}

try {
    $value = true;
    checkType($value);
} catch (BooleanException $e) {
    echo 'Исключение: ',  $e->getMessage(), '<br/>';
}

try {
    $value = array();
    checkType($value);
} catch (ArrayException $e) {
    echo 'Исключение: ',  $e->getMessage(), '<br/>';
}

try {
    $value = null;
    checkType($value);
} catch (NullException $e) {
    echo 'Исключение: ',  $e->getMessage(), '<br/>';
}
?>