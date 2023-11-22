<div class="result" style="text-align:center">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiA12yd2RmUTc0L5Z52ACzkZuKVc4ko8kdMDcKni2loBDHhzgHGKHkXnZgMxfhOoUwIRk&usqp=CAU" alt="Huan chuong">
<h1>Thx for <?php if(isset($_POST["name"])) { echo $_POST["name"]; } ?> !!</h1>

<p>We received your application for the <?php if(isset($_POST["club"])) { echo $_POST["club"]; } ?></p>

<p>You are 
<?php
$printAnd = false; // Biến trung gian để kiểm tra xem có nên in "and" hay không

if (isset($_POST["thebestcoder"])) {
    echo $_POST["thebestcoder"];
    $printAnd = true;
}

if (isset($_POST["asuperstar"])) {
    if ($printAnd) {
        echo " and ";
    }
    echo $_POST["asuperstar"];
    $printAnd = true;
}

if (isset($_POST["singer"])) {
    if ($printAnd) {
        echo " and ";
    }
    echo $_POST["singer"];
    $printAnd = true;
}

if (isset($_POST["thebesteater"])) {
    if ($printAnd) {
        echo " and ";
    }
    echo $_POST["thebesteater"];
    $printAnd = true;
}

if (isset($_POST["goodinarts"])) {
    if ($printAnd) {
        echo " and ";
    }
    echo $_POST["goodinarts"];
    $printAnd = true;
}

if (isset($_POST["acrazydancer"])) {
    if ($printAnd) {
        echo " and ";
    }
    echo $_POST["acrazydancer"];
    $printAnd = true;
}

if (isset($_POST["goodindesign"])) {
    if ($printAnd) {
        echo " and ";
    }
    echo $_POST["goodindesign"];
    $printAnd = true;
}

if (isset($_POST["goodinspeeches"])) {
    if ($printAnd) {
        echo " and ";
    }
    echo $_POST["goodinspeeches"];
}

?>
</p>
<p>You will be avaliable on <?php if(isset($_POST["time"])) { echo $_POST["time"]; } ?></p><br>
</div>

