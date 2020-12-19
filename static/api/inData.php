<?php

    # 用户名 商品图片 价格等 
    $name = $_GET['name'];
    $say=$_GET['say'];
    $pic = $_GET['pic'];
    $price=$_GET['price'];
    $buyCount=$_GET['buyCount'];
    $cateId=$_GET['cateId'];


    // print_r($name);
    // print_r($pic)
    $con = mysqli_connect('localhost','root','123456','gj519');
    $sql = "INSERT INTO `goods` (`id`, `name`, `pic`,`say`,`price`,`buyCount`,`cateId`) VALUES (NULL, '$name', '$pic','$say','$price','$buyCount','$cateId')";
    $res = mysqli_query($con,$sql);
    if($res){
        print_r(1);
    }
?>