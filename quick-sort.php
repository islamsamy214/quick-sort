<?php

Class QuickSort{

    private $operations = 0;

    public function quickSort($array){
        $this->operations++;

        if (count($array) < 2){
            return $array;
        }

        $pivot = $array[0];
        $less = [];
        $greater = [];
        
        foreach ($array as $element){
            if ($element < $pivot){
                array_push($less,$element);
            }
            if ($element > $pivot){
                array_push($greater,$element);
            }
        }

        return array_merge($this->quickSort($less) , [$pivot] , $this->quickSort($greater));
    }
}

$testingArray = new QuickSort();

print_r($testingArray->quickSort([6,5,9,7,2,1,45,8]));

?>