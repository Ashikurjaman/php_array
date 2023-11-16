<?php   
        $a = array("a"=>22,"d"=>85,"f"=>23);
        $b = array("c"=> 22,"d"=> 7, "k"=>0);


        $c = array_intersect_assoc($a, $b);
        print_r($c);

        $d = array_diff_assoc($b,$a);
        print_r($d);
?>