<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ผลลัพธ์การแบ่งเงิน</h1>
    <hr>
    <?php
        if($_GET["num1"] == null || $_GET["num2"] == null) {
            echo "ไม่สามารถคำนวณได้ เนื่องจากข้อมูลไม่ครบถ้วน";
            //redirect back to dti05.php after 3 seconds
            header("Refresh: 3; url=dti05.php");
            exit();
        } else if(floatval($_GET["num1"]) == 0 || intval($_GET["num2"]) == 0) {
            echo "ไม่สามารถหารด้วยศูนย์ได้";
            //redirect back to dti05.php after 3 seconds
            header("Refresh: 3; url=dti05.php");
            exit();
        }
        $result = $_GET["num1"] / $_GET["num2"];
        echo "เงิน " . $_GET["num1"] . " บาท<br/>";
        echo "คน " . $_GET["num2"] . " คน<br/>";
        echo "หารกันคนละ " . $result;
        //redirect back to dti05.php after 3 seconds
        header("Refresh: 3; url=dti05.php");
    ?>
</body>
</html>