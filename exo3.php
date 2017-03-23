<?php
function createHTMLTable($nblignes,$nbcolonnes){
    $result="<table border='1'>
    <tbody>";
    for($i=0;$i<$nblignes;$i++){
        $result.="<tr>";    
        for($j=0;$j<$nbcolonnes;$j++){
            $result.="<td>{$i}-{$j}</td>";
        }
        $result.="<tr>";
    }
     $result.="</body>
        </table>";
    return $result;
}
echo createHTMLTable(8,12);