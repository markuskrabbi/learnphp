<?php

$a = 1;
$a++;
$a--;
$a+=2;
$a-=2;
$a/=2;
$a*=2;
$a%=2;

$a = 'hello ' . 'world';
$a .='askfh';
$array = [1,2,3];
$array = array(1,2,3);

var_dump($array[1]);
$array = [
    'essa' => 1,
    'tessa' => 2,
    'kossa' => 3,
    5 => 4,
    'asfaf',
    10 => 1.2,
    true

];
var_dump($array['kossa']);

var_dump($array);
//foreach($array as $key => $value){
//   echo $value . "\n";
// }

var_dump($array);
foreach($array as $key => $value){
    //echo $key . '=>'. $value . "\n";
    echo "$key=>$value\n";
}
$name ='Markus';

$string = "hello $name\n";
var_dump($string);

$char = 'a';

for($i=0;$i<26;$i++){
    var_dump($char);
    $char++;
}

