<?php


class FindMinAndMax
{
    public $arr;
    public function __construct($arr)
    {
        $this->arr=$arr;
    }

    public function findMin()
    {
        $min=$this->arr[0];
        for ($i=0;$i<count($this->arr);$i++){
            if ($min>$this->arr[$i]){
                $min=$this->arr[$i];
            }
        }
        return $min;
}

    public function findMax()
    {
        $max=$this->arr[0];
        for ($i=0;$i<count($this->arr);$i++){
            if ($max<$this->arr[$i]){
                $max=$this->arr[$i];
            }
        }
        return $max;
}
}
$arr=[4,6,3,4,22,43,12,45,34,67,45,87,36,98,64];
$num=new FindMinAndMax($arr);
echo 'Số nhỏ nhất trong mảng là: '.$num->findMin().'<br>';
echo 'Số lớn nhất trong mảng là: '.$num->findMax();