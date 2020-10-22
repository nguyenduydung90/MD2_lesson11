<?php


class CountTheNumber
{
public $arr;
public $num;
public function __construct($arr,$num)
{
    $this->arr=$arr;
    $this->num=$num;
}

    public function countNumber()
    {
        $count=0;
        for ($i=0;$i<count($this->arr);$i++){
            if ($this->num==$this->arr[$i]){
                $count++;
            }
        }
        return $count;
}
}

$arr=[2,4,3,45,3,45,67,12,8,65,25];
$num=new CountTheNumber($arr,3);
echo "Số lần xuất hiện của $num->num là: ".$num->countNumber();