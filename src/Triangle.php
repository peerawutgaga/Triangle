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
        if(!($this->C >= 1 && $this->C <= 200)){    
            $answer['answer'] = 'C '.$answer['answer'];
            $isOutOfRange = true;
            array_push($answer['path'],'16');
        }
        array_push($answer['path'],'20');
        if(!($this->B >= 1 && $this->B <= 200)){ 
            $answer['answer'] = 'B '.$answer['answer'];
            $isOutOfRange = True;
            array_push($answer['path'],'22');
        }    
        array_push($answer['path'],'26');
        if(!($this->A >= 1 && $this->A <= 200)){
            $answer['answer'] = 'A '.$answer['answer'];
            $isOutOfRange = true;
            array_push($answer['path'],'28');
        } 
        array_push($answer['path'],'32');
        if(!$isOutOfRange)
        {
            array_push($answer['path'],'35');
            if($this->A >= $this->B + $this->C){
                $answer['answer'] = 'Not a triangle';
                array_push($answer['path'],'36');
            }
            else {
                array_push($answer['path'],'41');
                if($this->B >= $this->A + $this->C){
                    $answer['answer'] = 'Not a triangle';
                    array_push($answer['path'],'42');
                }
                else {
                    array_push($answer['path'],'47');
                    if($this->C >= $this->A + $this->B){
                        $answer['answer'] = 'Not a triangle';
                        array_push($answer['path'],'48');
                    }
                    else {
                        array_push($answer['path'],'53');
                        if($this->A == $this->B && $this->B == $this->C){
                            $answer['answer'] = 'Equilateral';
                            array_push($answer['path'],'54');
                        }
                        else {
                            array_push($answer['path'],'59');
                            if($this->A == $this->B && $this->B != $this->C){
                                $answer['answer'] = 'Isosceles';
                                array_push($answer['path'],'60');
                            }
                            else {
                                array_push($answer['path'],'65');
                                if($this->B == $this->C && $this->A != $this->B){
                                    $answer['answer'] = 'Isosceles';
                                    array_push($answer['path'],'66');
                                }
                                else
                                {
                                    array_push($answer['path'],'72');
                                    if($this->A == $this->C && $this->A != $this->B) {
                                        $answer['answer'] = 'Isosceles';
                                        array_push($answer['path'],'73');
                                    }
                                    else {
                                        $answer['answer'] = 'Scalene';
                                        array_push($answer['path'],'77');
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        array_push($answer['path'],'88');
        return $answer;
    }
}