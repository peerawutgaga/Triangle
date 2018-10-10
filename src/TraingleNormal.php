<?php namespace Triangle; // 6170947621 Peerawut Luengruengroj
class TriangleNormal{
    private $A,$B,$C;  
    public function __construct(int $A,int $B,int $C){
        $this->A = $A;
        $this->B = $B;
        $this->C = $C;
    }
public function getType(): array{
    $answer = array('path'=>array(), 'answer'=> 'out of range' );
    $isOutOfRange = false;
    if($this->C < 1 || $this->C > 200){    
        $answer['answer'] = 'C '.$answer['answer'];
        $isOutOfRange = true;}
    if($this->B < 1 || $this->B > 200){ 
        $answer['answer'] = 'B '.$answer['answer'];
        $isOutOfRange = true;}    
    if($this->A < 1 || $this->A > 200){
        $answer['answer'] = 'A '.$answer['answer'];
        $isOutOfRange = true;}
    if(!$isOutOfRange)
    {if($this->A >= $this->B + $this->C){
            $answer['answer'] = 'Not a triangle';}
        else {if($this->B >= $this->A + $this->C){
            $answer['answer'] = 'Not a triangle';}
        else {if($this->C >= $this->A + $this->B){
            $answer['answer'] = 'Not a triangle';}
        else {if($this->A == $this->B && $this->B == $this->C){
            $answer['answer'] = 'Equilateral';}
        else {if($this->A == $this->B && $this->B != $this->C){
            $answer['answer'] = 'Isosceles';}
        else {if($this->B == $this->C && $this->A != $this->B){
            $answer['answer'] = 'Isosceles';}
        else{if($this->A == $this->C && $this->A != $this->B) {
            $answer['answer'] = 'Isosceles';}
        else {$answer['answer'] = 'Scalene';}}}}}}}}
    return $answer;}
}