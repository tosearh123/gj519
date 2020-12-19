<?php
    # 用户名 商品id
    $tel = $_GET['tel'];
    $goods_id = $_GET['goods_id'];
    $num=$_GET['num'];
    // $tel = 13420117214;
    // $goods_id = 123135156;
    // $num=1;

    // $username = '婧婧';
    // $goods_id = '8';
    $con = mysqli_connect('localhost','root','123456','gj519');


    $sql = "SELECT * FROM `car` WHERE `tel`='$tel' AND `goods_id`='$goods_id'";
    $res = mysqli_query($con,$sql);

    if(!$res){
        die('error for mysql' . mysqli_error($con));
    }
    $row = mysqli_fetch_assoc($res);
     # 如果购物车表中存在该条数据，让这个条数据中的goods_num 值加 1
    if($row){
        $goodsNum = $row['goods_nums']+$num;
       $res2= mysqli_query($con,"UPDATE `car` SET `goods_nums` = '$goodsNum'  WHERE `tel`='$tel' AND `goods_id`='$goods_id'");
    }else{
        # 如果不存在，就往car表中 添加数据
        $res2= mysqli_query($con,"INSERT INTO `car` (`id`,`goods_id`, `tel`, `goods_nums`) VALUES (NULL,'$goods_id', '$tel', '$num')");
    }
    if($res2){
        echo json_encode(array("code"=>true,"msg"=>"添加数据成功"));
    }

?>