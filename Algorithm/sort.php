<?php
/**
 * Created by PhpStorm.
 * User: DongJuntong
 * Date: 2017/2/12
 * Time: 17:58
 */
class Sort
{
    public $arr;

    public $len;
    
    public $chg;

    public function __construct($arr)
    {
        $this->arr=$arr;
        $this->len=count($this->arr);
    }
    /**
     * 冒泡排序：每次让上一个与下一个对比从而在待排序的最后一个得到最小或者最大值
     *
     * @return mixed
     */
    public function BubbleSort()
    {
       for($i=0;$i<$this->len-1;$i++)
       {
           for ($j=0;$j<$this->len-$i-1;$j++)
           {
               if($this->arr[$j]>$this->arr[$j+1])
               {
                   $this->chg=$this->arr[$j];
                   $this->arr[$j]=$this->arr[$j+1];
                   $this->arr[$j+1]=$this->chg;
               }
           }
       }
        return $this->arr;
    }
    /**
     * 选择排序:每次选出最小或者最大的放到待排序的第一位
     *
     * @return mixed
     */
    public function SelectSort()
    {
        for ($i=0;$i<$this->len;$i++)
        {
            for ($j=$i+1;$j<$this->len;$j++)
            {
                if($this->arr[$j]<$this->arr[$i])
                {
                    $this->chg=$this->arr[$j];
                    $this->arr[$j]=$this->arr[$i];
                    $this->arr[$i]=$this->chg;
                }
            }
        }
        return $this->arr;
    }
    /**
     * 快速排序: 每次把数组分为两部分一部分比另一部分所有数据都小
     *
     * @param $arr
     * @return array
     */
    public function quickSort(&$arr){
        if(count($arr)>1){
            $k=$arr[0];
            $x=array();
            $y=array();
            $_size=count($arr);
            for($i=1;$i<$_size;$i++){
                if($arr[$i]<=$k){
                    $x[]=$arr[$i];
                }elseif($arr[$i]>$k){
                    $y[]=$arr[$i];
                }
            }
            $x=quickSort($x);
            $y=quickSort($y);
            return array_merge($x,array($k),$y) ;
        }else{
            return $arr;
        }
    }
}
$arr=array(10,5,4,8,20,12,1,9,7);
$sort=new Sort($arr);
//var_dump($sort->BubbleSort());
//var_dump($sort->SelectSort());
var_dump($sort->quickSort($arr));

