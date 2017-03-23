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
$l=5;$c=12;
extract($_get)
echo createHTMLTable($l,$c);
?>
<form>
    <input value="<?php echo $l;?>" type="number" min="1" max="100" name="l" placeholder="nblignes"/>
    <input value="<?php echo $c;?>" type="number" min="1" max="100" name="c" placeholder="nbcolonnes"/>
    <input type="submit" value="créer tableau"/>
    </form>