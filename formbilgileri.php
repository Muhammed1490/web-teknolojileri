<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   
    <?php echo "Adınız: ". $_POST["Ad"]."<br>"; ?>
    <?php echo "Soyadınız: ". $_POST["Soyad"]."<br>"; ?>
    <?php echo "E-Mail:" . $_POST["Mail"] . "<br>"; ?>
    <?php echo "Şifre:" .  $_POST["Şifre"] . "<br>"; ?>
    <?php echo "Mesajınız: ". $_POST["Mesaj"]."<br>"; ?>
    <?php echo "Üniversite: ".$_POST["Universite"]."<br>"; ?>
    <?php echo "Cinsiyet: ".$_POST["Cinsiyet"]."<br>"; ?>
    <!-- <?php echo "Programlama Dilleri: ".$_POST["Programlama"]."<br>"; ?> -->

    <?php
        echo "Programlama Dilleri:";
        foreach($_POST['Programlama'] as $selected){
        echo "<br>". $selected; } ?>
        
</body>
</html>