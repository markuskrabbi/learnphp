<?php

class Box {
    public $height;
    protected $width;
    private $length;
    public $men = 'cool';
    public function __construct(){
        echo "Box was created\n";
    }

    public function volume(){
        return $this->height * $this->width * $this->length;
    public function __call($name, $args){
        var_dump($name, $args);
    } 
    public function getLength(){
        return $this->length;
    public function __get($name){
        var_dump($name);
        return 'cool value';
    }
    public function setLength($length){
        if(is_numeric($length) && $length > 0){
            $this->length = $length;
        } else {
            $this->length = 0;
        }
    public function __set($name, $value){
        var_dump($name, $value);
    }
}

class MetalBox extends Box {
    public $weightPerUnit = 10;
    public function weight(){
        return $this->volume() * $this->weightPerUnit;
    public function __destruct(){
        echo "Box was destoryed\n";
    }
    public function __toString(){
        return 'cool box';
    }
    public function testProtected(){
        var_dump($this->width);
    public function __invoke(...$args){
        var_dump($args);
    }
}

$box = new MetalBox();
$box->setLength(121);
$box->testProtected();
$box = new Box();
$box->fname = 'kaspar';
$box->something(1,2,'asd');
$box->else('xxd', true, NULL);
var_dump($box->alahsdha);
var_dump($box);
echo $box;
$box(1,'asd', 'asda');