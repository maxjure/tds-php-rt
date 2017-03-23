<?php
function addition($a, $b){
    return $a+$b;
}
$v1=12;$v2=37;
echo "addition de $v1 et $v2";
echo"<hr>";
echo addition($v1,$v2);


function soustration($a, $b){
    return $a-$b;
}
$v1=12;$v2=37;
echo "<br>soustraction de $v1 et $v2";
echo"<hr>";
echo soustration($v1,$v2);

function multiplication($a, $b){
    return $a*$b;
}
$v1=12;$v2=37;
echo "<br>multiplication de $v1 et $v2";
echo"<hr>";
echo multiplication($v1,$v2);

function division($a, $b){
    return $a/$b;
}
$v1=12;$v2=37;
echo "<br>division de $v1 et $v2";
echo"<hr>";
echo division($v1,$v2);

function operation($val1, $val2, $op){
$operateurs=["*"=>"multiplication","+"=>"addition",
             "-"=>"soustraction","/"=>"division"];
             $result=0;
             $op=$operateurs[$op];
             return $op($val1,$val2);
            

}
echo "<br>Résultat de 2/5 : ".operation(2,5,"/");

