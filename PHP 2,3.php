<?php 
$arr = array(); 
for ($i = 1; $i <= 50; $i++)
{ 
    $arr[$i]=rand(0,100);
   echo $arr[$i] ," "; 
}


<?php
$complist = "��������� ����, RAM, CPU, GPU, �������"; 
$array = explode(",", $complist);
$c = 0; //count($array);
while($c < 9)
{ 
    $c++;
//array_push($array, "��", "HDD" ,"����");
}
    print_r($array);
