<?php
    // 获取传递过来的用名 和 商品id
    $tel = $_GET['tel'];
    $cateId = $_GET['cateId'];

    // $username = '婧婧';
    // $goods_id = 6;

    $con = mysqli_connect('localhost','root','123456','gj519');

    $sql = "DELETE FROM `car` WHERE `car`.`goods_id` = '$cateId' AND `tel` = '$tel'";

    $res = mysqli_query($con,$sql);

    if(!$res){
        // die('error for mysqli' . mysqli_error());
        echo json_encode(array("code"=>false,"msg"=>"删除数据失败"));
    }else{
        echo json_encode(array("code"=>$res,"msg"=>"删除数据成功"));
    }
?>