<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 40px;
        }
        .form-group {
            margin-bottom: 5px;
            padding-bottom: 10px;
        }
        label {
            display: block;
        }
        input[type="text"],input[type="password"],input[type="number"],select, textarea {
            width: 100%;
            padding: 5px;
        }
        input[type="submit"] {
            background-color: #2b2ef0;
            color: #ffffff;
            padding: 5px 20px;
            cursor: pointer;
            border-radius: 5px;
            border: none;
        }
        input[type="reset"] {
            background-color: #ff0000;
            color: #ffffff;
            padding: 5px 20px;
            cursor: pointer;
            border-radius: 5px;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #202098;
        }
        input[type="reset"]:hover {
            background-color: #b02323;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">All Form with PHP 2026</h1>
    <hr>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="">
        <div class="form-group">
            <label for="fname">ชื่อ-นามสกุล</label>
            <input type="text" id="fname" name="fname" placeholder="กรอกชื่อ-นามสกุล">
        </div>
        <div class="form-group">
            <label for="pword">รหัสผ่าน</label>
            <input type="password" id="password" name="password" placeholder="กรอกรหัสผ่าน">
        </div>
        <div class="form-group">
            <label for="age">อายุ</label>
            <input type="number" id="age" name="age" placeholder="กรอกอายุ">
        </div>
        <div class="form-group">
            <label for="gender">เพศ</label>
            <input type="radio" name="gender" value="ชาย" checked id="">ชาย
            <input type="radio" name="gender" value="หญิง" id="">หญิง
            <input type="radio" name="gender" value="อื่นๆ" id="">อื่นๆ
        </div>
        <div class="form-group">
            <label for="plang">ภาษาโปรแกรมที่ชอบ</label>
            <input type="checkbox" name="plang[]" value="C">C
            <input type="checkbox" name="plang[]" value="Java">Java
            <input type="checkbox" name="plang[]" value="Python">Python
            <input type="checkbox" name="plang[]" value="JavaScript">JavaScript
            <input type="checkbox" name="plang[]" value="PHP">PHP
        </div>
        <div class="form-group">
            <label for="food">อาหารที่ชอบ</label>
            <input type="checkbox" name="food1" value="KFC">KFC
            <input type="checkbox" name="food2" value="Pizza">Pizza
            <input type="checkbox" name="food3" value="Donut">Donut
            <input type="checkbox" name="food4" value="Burger">Burger
        </div>
        <div class="form-group">
            <label for="country">ประเทศที่ชอบ</label>
            <select name="country" id="country">
                <option value="thailand">ไทย</option>
                <option value="usa">สหรัฐอเมริกา</option>
                <option value="japan">ญี่ปุ่น</option>
                <option value="korea">เกาหลีใต้</option>
                <option value="china">จีน</option>
            </select>
        </div>
        <div class="form-group">
            <label for="province">จังหวัดที่ชอบ</label>
            <select name="province" id="province" size="4">
                <option value="bangkok">กรุงเทพฯ</option>
                <option value="chiangmai">เชียงใหม่</option>
                <option value="chiangrai">เชียงราย</option>
                <option value="lambon">ลำพูน</option>
                <option value="lampang">ลำปาง</option>
                <option value="phraed">แพร่</option>
                <option value="nan">น่าน</option>
            </select>
        </div>
        <div class="form-group">
            <label for="bdate">วันเกิด</label>
            <input type="date" id="bdate" name="bdate">
        </div>
        <div class="form-group">
            <label for="likelevel">ระดับความชอบ</label>
            0<input type="range" id="likelevel" name="likelevel" min="0" max="10">10
        </div>
        <div class="form-group">
            <label for="comment">ความคิดเห็น</label>
            <textarea name="comment" id="comment" rows="5"></textarea>
        </div>
        <!-- input:hidden จะไม่แสดงบนหน้าจอ แต่จะมีข้อมูลที่ส่งไปประมวลผล -->
        <input type="hidden" name="message" value="I love PHP">
        <!-- ------------------------------ -->
        <div class="form-group">
            <input type="submit" value="ตกลง">
            <input type="reset" value="ยกเลิก">
        </div>
    </form>
    <hr>
    <!-- แสดงข้อมูลที่ส่งมาจากฟอร์ม ที่ส่งมาจากในไฟล์ตัวเอง -->
     <?php
        //ตรวจสอบว่ามีการร้องขอการส่งข้อมูลมาแบบไหน
        if($_SERVER["REQUEST_METHOD"] == "POST") {
    ?>
    <div>
        <strong>ชื่อ-นามสกุล : </strong>
        <?php echo empty($_POST["fname"]) ? "-" : $_POST["fname"]; ?>
    </div>
    <div>
        <strong>รหัสผ่าน : </strong>
        <?php 
            //ป้องกันการแสดงรหัสผ่านแบบเปลือย
            if(!empty($_POST["password"])) {
                echo str_repeat("*", strlen($_POST["password"]));
            } else {
                echo "-";
            }
        ?>
    </div>
    <div>
        <strong>อายุ : </strong>
        <?php echo empty($_POST["age"]) ? "-" : $_POST["age"]; ?>
        <strong>ปี</strong>
    </div>
    <div>
        <strong>เพศ : </strong>
        <?php echo $_POST["gender"]; ?>
    </div>
    <div>
        <strong>ภาษาโปรแกรมที่ชอบ : </strong>
        <?php echo empty($_POST["plang"]) ? "-" : implode(",", $_POST["plang"]); ?>
    </div>
    <div>
        <strong>อาหารที่ชอบ : </strong>
        <?php
            if(empty($_POST["food1"]) && empty($_POST["food2"]) && empty($_POST["food3"]) && empty($_POST["food4"])) {
                echo "-";
            }

            echo isset($_POST["food1"]) ? $_POST["food1"] : "";
            echo isset($_POST["food2"]) ? ", " . $_POST["food2"] : "";
            echo isset($_POST["food3"]) ? ", " . $_POST["food3"] : "";
            echo isset($_POST["food4"]) ? ", " . $_POST["food4"] : "";
        ?>
    </div>
    <div>
        <strong>ประเทศที่ชอบ : </strong>
        <?php echo empty($_POST["country"]) ? "-" : $_POST["country"]; ?>
    </div>
    <div>
        <strong>จังหวัดที่ชอบ : </strong>
        <?php echo empty($_POST["province"]) ? "-" : $_POST["province"]; ?>
    </div>
    <div>
        <strong>วันเกิด : </strong>
        <?php echo empty($_POST["bdate"]) ? "-" : $_POST["bdate"]; ?>
    </div>
    <div>
        <strong>ระดับความชอบ : </strong>
        <?php echo empty($_POST["likelevel"]) ? "-" : $_POST["likelevel"]; ?>
    </div>
    <div>
        <strong>ความคิดเห็น : </strong>
        <?php echo empty($_POST["comment"]) ? "-" : $_POST["comment"]; ?>
    </div>
    <div>
        <strong>ข้อความ : </strong>
        <?php echo empty($_POST["message"]) ? "-" : $_POST["message"]; ?>
    </div>

    <?php    
        }
    ?>
</body>
</html>