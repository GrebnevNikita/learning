<?php


class People
{
    public $per_public = 'per_public';
    private $per_private = 'per_private';

    public function study()
    {
        echo "{$this->per_public} учится в {$this->per_private}";
    }
}

$set_to_null = null;
$array = [-1, 1, 0, '999', '1', '0', 0.1, 2222.1, false, '', 'string', null, 3.12345678, 3.123459, array(), [], [1, 2, 3]];


foreach( $array as $k => $v) {

if (isset($var)) {
} // не определена'; // Определяет, была ли установлена переменная значением, отличным от null
if (empty($var)) {
} // '$var или 0, или пусто, или вообще не определена';
if (is_null($var)) {
} //
if (is_bool($var)) {
} // Проверяет, является ли переменная булевой
if (is_numeric($var)) {
} // Проверяет, является ли переменная числом или строкой, содержащей число
if (is_float($var)) {
} // // Проверяет, является ли переменная числом с плавающей точкой;
if (is_int($var)) {
} // Проверяет, является ли переменная целым числом
if (is_string($var)) {
} // Проверяет, является ли переменная строкой
if (is_object($var)) {
} //  Проверяет, является ли переменная объектом
if (is_array($var)) {
} // Определяет, является ли переменная массивом

}


unset($foo);



