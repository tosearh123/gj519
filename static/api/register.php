<?php
    // $username = $_GET['username'];
    $tel =$_POST['tel'];
    $password = $_POST['password'];


    $con = mysqli_connect('localhost','root','123456','gj519');
    $sql = "SELECT * FROM `userlist` WHERE `tel`='$tel'";
    $res = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($res);
    if(!$row){
        $sql2 ="INSERT INTO `userlist`(`id`, `tel`, `password`) VALUES (NULL,'$tel','$password')";
        $res2 = mysqli_query($con,$sql2);
        if($res2){
            echo json_encode(array("code"=>1,"msg"=>"添加数据成功"));
        }else{
            echo json_encode(array("code"=>0,"msg"=>"注册失败"));
        }
    }else{
        echo json_encode(array("code"=>0,"msg"=>"用户已存在"));
    }
    
?>