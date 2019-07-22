<?php

class PrintNumbers
{
    private $multiple3;
    private $multipe5;
    private $multipe35;
    private $number;

    private function remainder($number,$param){
        return $number % $param;
    }

    private function add($number3,$number5){
        return $number3 +  $number5;
    }

    public function execute($i){
        if($i > 0){
            $this->execute($i-1);
            $this->number = $i;
            $this->remainder3  = $this->remainder($i,3);
            $this->remainder5  = $this->remainder($i,5);
            $this->remainder35 = $this->add($this->remainder3,$this->remainder5);
            $this->printValues($this);
        }
    }

    private function printValues($resultset){
        switch ($resultset) {
            case ($resultset->remainder35 == 0 ):
                echo "Linianos <br/>";
                break;   
            case ($resultset->remainder5 == 0):
                echo "IT <br/>";
                break;
            case ($resultset->remainder3 == 0):
                echo "Linio <br/>";
                break;       
            default:
                echo $resultset->number ."<br/>";
        }
    }
}

$obj = new PrintNumbers();
$obj->execute(100);

?>
