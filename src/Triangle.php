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
        array_push($answer['path'],'1');
        array_push($answer['path'],'2');
        if(!($this->C >= 1 && $this->C <= 200)){    
            $answer['answer'] = 'C '.$answer['answer'];
            $isOutOfRange = true;
            array_push($answer['path'],'3');
        }
        array_push($answer['path'],'4');
        if(!($this->B >= 1 && $this->B <= 200)){ 
            $answer['answer'] = 'B '.$answer['answer'];
            $isOutOfRange = True;
            array_push($answer['path'],'5');
        }    
        array_push($answer['path'],'6');
        if(!($this->A >= 1 && $this->A <= 200)){
            $answer['answer'] = 'A '.$answer['answer'];
            $isOutOfRange = true;
            array_push($answer['path'],'7');
        } 
        array_push($answer['path'],'8');
        if(!$isOutOfRange)
        {
            array_push($answer['path'],'9');
            if($this->A >= $this->B + $this->C){
                $answer['answer'] = 'Not a triangle';
                array_push($answer['path'],'10');
            }
            else {
                array_push($answer['path'],'11');
                if($this->B >= $this->A + $this->C){
                    $answer['answer'] = 'Not a triangle';
                    array_push($answer['path'],'12');
                }
                else {
                    array_push($answer['path'],'13');
                    if($this->C >= $this->A + $this->B){
                        $answer['answer'] = 'Not a triangle';
                        array_push($answer['path'],'14');
                    }
                    else {
                        array_push($answer['path'],'15');
                        if($this->A == $this->B && $this->B == $this->C){
                            $answer['answer'] = 'Equilateral';
                            array_push($answer['path'],'16');
                        }
                        else {
                            array_push($answer['path'],'17');
                            if($this->A == $this->B && $this->B != $this->C){
                                $answer['answer'] = 'Isosceles';
                                array_push($answer['path'],'18');
                            }
                            else {
                                array_push($answer['path'],'19');
                                if($this->B == $this->C && $this->A != $this->B){
                                    $answer['answer'] = 'Isosceles';
                                    array_push($answer['path'],'20');
                                }
                                else
                                {
                                    array_push($answer['path'],'21');
                                    if($this->A == $this->C && $this->A != $this->B) {
                                        $answer['answer'] = 'Isosceles';
                                        array_push($answer['path'],'22');
                                    }
                                    else {
                                        $answer['answer'] = 'Scalene';
                                        array_push($answer['path'],'23');
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        array_push($answer['path'],'24');
        return $answer;
    }
}