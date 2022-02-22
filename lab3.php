<?php
#declarations & initializations
$color = array('white', 'green', 'red');
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
$key_value = [];
$originalArray = array("1", "2", "3", "4", "5");
#logic part for the third
$exfile = file("first.txt");
foreach ($exfile as $line) {
    $pattern = "/\s/";
    $splitted = preg_split($pattern, $line);
    $temp = array($splitted[0] => $splitted[1]);
    if(is_null($key_value)) {
        $key_value = $temp;
    }else {
        $key_value = array_merge($key_value, $temp);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab_3</title>
</head>
<body>
    <h3>First</h3>
    <br>
    <?php foreach($color as $clr) { ?>
            <?= $clr ?>,        
            <?php } ?>
    <ul>
            <li>
                <?= ucfirst($color[1]) ?>
              </li>
            <br>
            <li>
                <?= ucfirst($color[2]) ?>
            </li>
            <br>
            <li>
                <?= ucfirst($color[0]) ?>
            </li>
    </ul>
    <h3>Second</h3>
    <?php asort($ceu) ?>
    <?php 
    foreach($ceu as $key_=>$value_) { ?>
        <?= "The capital of " . $key_ ." is ". $value_ . "\n"; ?>
                <br>              
    <?php } ?>
    <h3>Third</h3>
    <?php 
    foreach($key_value as $key_=>$value_) { ?>   
        <?= "Key: \"$key_\" Value: \"$value_\"\n";?>
                <br>              
    <?php } ?>
    <h3>Fourth</h3>
    <?php
    array_splice($originalArray, 3, 0, array("smth"));
    print_r($originalArray);
    ?>
</body>
</html>