<?php

$person = array("Ashik"=> "04","Nasib"=> "8","Tusher"=> "36");
$number = array(2,6,7,8,'9',10,11,12,13,0,15,16,0,0,0,20);

if(in_array(9, $number, true)) {

    echo "Number is found\n";
}else{
    echo "Number is not found\n";
}

$offset = array_search(10, $number);
echo $offset."\n";

if(key_exists("Nasib", $person)) {
    echo "key found\n";

}

if(in_array(10, $number, true)) {

    echo "number found \n";

}

$index = array_search(6, $number);

echo $index."\n";

if(key_exists("Ashik", $person)) {
    echo "key found";
}

?>