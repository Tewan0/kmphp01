<?php
    //Array
    //Index Array
            //0    1   2   3  4
    $dataA = [10, 20, 30, 40, 50];
    $dataB = array(11, 22, 33, 44, 55);
    $dataC = array("aa", "bb", "cc", "dd", "ee");
 
    echo $dataA[3] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";   //40
    echo $dataB[1] . "       ";   //22
    echo $dataC[4] ;   //ee
 
    //Associative Array
    $faculty = ["as"=>"Arts Sci", "en"=>"Engineer", "bu"=>"Business"] ;
    $subject = array("th"=>"Thai", "en"=>"English","jp"=>"Japan");
 
    echo "<br/>" . $faculty["as"];
    echo "<br/>" . $faculty["bu"];
    echo "<br/>" . $subject["jp"];