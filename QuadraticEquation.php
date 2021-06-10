<?php


class QuadraticEquation
{
public $a;
public $b;
public $c;
public $delta;


    public function __construct($a, $b, $c, $delta=0)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->delta = $delta;
    }
    public function getA()
    {
        return $this->a;
    }


    public function getB()
    {
        return $this->b;
    }


    public function getC()
    {
        return $this->c;
    }

    public function disPlay(){
        return 'phuong trinh bac 2: '.$this->a.'x^2 + '.$this->b.'x + '.$this->c.' = 0';
    }

    public function getDiscriminant() {
        $this->delta = $this->b * $this->b - (4 * $this->a * $this->c);
        return $this->delta;
    }

    public function getRoot1(){
        if ($this->getDiscriminant() >=0 ){
            $root1 = (-$this->b + sqrt($this->delta))/2;
        } else {
            $root1 = 0;
        }
        return $root1;
    }

    public function getRoot2(){
        if ($this->getDiscriminant() >= 0){
            $root2 = (-$this->b - sqrt($this->delta))/2;
        } else {
            $root2 = 0;
        }
        return $root2;
    }
}

$quadratic = new QuadraticEquation(1,2,1);


function quadratic ($quadratic){
    echo $quadratic->disPlay().'<br/>';
    if ($quadratic->getRoot1() !=0 && $quadratic->getRoot2() !=0){
        if ($quadratic->getRoot1() == $quadratic->getRoot2()){
            echo 'phuong trinh co 1 nghiem :'.$quadratic->getRoot1();
        } else {
            echo 'phuong trinh co hai nghiem phan biet : x1 = '.$quadratic->getRoot1().' x2: '.$quadratic->getRoot2();
        }
    } else {
        echo 'the equation has no solution';
    }
}

echo quadratic($quadratic);
?>