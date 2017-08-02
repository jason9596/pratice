<?php
class Light{
    /**
     * get the light status
     *
     * @param $mi
     * @param $mn 
     * @return array
     */
	public function openLight($mi,$mn){
        $n=$j=1;
		$arr=[];
		while($j<=$mi)
		{
			$arr[$j]=0;
			$j++;
		}
		while($n<=$mn)
		{
			$i=1;
			while($i<=$mi)
			{
				if(!($i%$n))
				{
					$arr[$i] = $arr[$i]?0:1;
				}
				$i++;
			}
			$n++;
		}
		return $arr;
	}	

}
$light=new Light();
var_dump($light->openLight(20,3));