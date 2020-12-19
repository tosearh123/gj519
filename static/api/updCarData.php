<?php
    $tel = $_GET['tel'];
    $goods_id = $_GET['cateId'];
    $goods_nums = $_GET['goods_nums'];

    // $username = '婧婧';
    // $goods_id = 5;
    // $goods_num = 7;
    $con = mysqli_connect('localhost','root','123456','gj519');

    $sql = "UPDATE `car` SET `goods_nums` = '$goods_nums' WHERE `goods_id` = '$goods_id' AND `tel` = '$tel'";

    $res = mysqli_query($con,$sql);

    if(!$res){
        // die('error for mysqli' . mysqli_error());
        echo json_encode(array("code"=>0,"msg"=>"修改数据失败"));
    }else{
        echo json_encode(array("code"=>$res,"msg"=>"修改数据成功"));
    }
?>