<?php  

    $person = ['name'=> 'Hello',
    'say'=>'world'];

    $newPerson = $person;
    $newPerson['k'] = 'pluto';

    print_r($newPerson);
    print_r($person);


?>