<?php
    //function
    //no parameter no return
    function showMessage() {
        echo "<h3 style=\"color: #ff0000\">Hello Function</h3>";
    }
    showMessage();
    showMessage();

    //have parameter no return
    function showMessage2($fname, $lname) {
        echo "Wwlcome " . $fname . " " . $lname;
        echo "<br/>";
    }
    showMessage2("Sombat", "Jaiyen");
    showMessage2("Somchai", "Deeja");

    //no parameter has return
    function showMessage3() {
        echo "Wow wow wow....";
        return "Bye Bye....";
    }
    echo showMessage3();
    echo "<br/>";
    $data = showMessage3();
    echo "<br/>" . $data . "DTI-SAU";

    //have parameter has return
    function sumNumber($num1, $num2) {
        $sum = $num1 + $num2;
        return $sum;
    }
    echo "<br/><br/>100 + 200 = " . sumNumber(100, 200);
    echo "<br/><br/>";

    //Arrow Function (เขียนในรูปแบบที่เรียก Expression Function)
    //Arrow Function ของ PHP จะเป็นแบบมี return อัตโนมัติ
    $woo = fn() => "Hello Arrow Function";
    echo $woo();

    $hi = fn($nickname) => "<br/>Hi " . $nickname;
    echo $hi("Somsri");