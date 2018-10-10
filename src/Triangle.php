<?php namespace Triangle;
class Triangle{
    private $A,$B,$C;
    public function __construct(int $A,int $B,int $C){
        $this->A = $A;
        $this->B = $B;
        $this->C = $C;
    }
public function getType(): array{ 
    $answer = array('path'=>array(), 'answer'=> 'out of range' );
    $isOutOfRange = false;
    array_push($answer['path'],'11');
    array_push($answer['path'],'14');
    if($this->C < 1 || $this->C > 200){
        $answer['answer'] = 'C '.$answer['answer'];
        $isOutOfRange = true;
        array_push($answer['path'],'16');}
    array_push($answer['path'],'19');
    if($this->B < 1 && $this->B > 200){ 
        $answer['answer'] = 'B '.$answer['answer'];
        $isOutOfRange = True;
        array_push($answer['path'],'21');}    
    array_push($answer['path'],'24');
    if($this->A < 1 || $this->A > 200){
        $answer['answer'] = 'A '.$answer['answer'];
        $isOutOfRange = true;
        array_push($answer['path'],'27');} 
    array_push($answer['path'],'29');
    if(!$isOutOfRange){
        array_push($answer['path'],'31');
        if($this->A >= $this->B + $this->C){
            $answer['answer'] = 'Not a triangle';
            array_push($answer['path'],'32');}
        else {array_push($answer['path'],'35');
        if($this->B >= $this->A + $this->C){
            $answer['answer'] = 'Not a triangle';
            array_push($answer['path'],'36');}
        else {array_push($answer['path'],'39');
        if($this->C >= $this->A + $this->B){
            $answer['answer'] = 'Not a triangle';
            array_push($answer['path'],'40');}
        else {array_push($answer['path'],'43');
        if($this->A == $this->B && $this->B == $this->C){
            $answer['answer'] = 'Equilateral';
            array_push($answer['path'],'44');}
        else {array_push($answer['path'],'47');
        if($this->A == $this->B && $this->B != $this->C){
            $answer['answer'] = 'Isosceles';
            array_push($answer['path'],'48');}
        else {array_push($answer['path'],'51');
        if($this->B == $this->C && $this->A != $this->B){
            $answer['answer'] = 'Isosceles';
            array_push($answer['path'],'52');}
        else{array_push($answer['path'],'54');
        if($this->A == $this->C && $this->A != $this->B) {
            $answer['answer'] = 'Isosceles';
            array_push($answer['path'],'55');}
        else {$answer['answer'] = 'Scalene';
            array_push($answer['path'],'58');}}}}}}}}
    array_push($answer['path'],'61');
    return $answer;}
}