<?php
	header("Content-Type:text/html;charset=utf-8");
	//1、接受客户端的数据（用户输入的数据）
	$goodsId   = $_REQUEST['goodsId'];
	$goodsName = $_REQUEST['goodsName'];
	$goodsType = $_REQUEST['goodsType'];
	$goodsPrice = $_REQUEST['goodsPrice'];
	$goodsCount = $_REQUEST['goodsCount'];
	$goodsDesc = $_REQUEST['goodsDesc'];
	$goodsImg  = $_REQUEST['goodsImg'];
	$beiyong1  = $_REQUEST['beiyong1'];
	$beiyong2  = $_REQUEST['beiyong2'];
	$beiyong3  = $_REQUEST['beiyong3'];
	$beiyong4  = $_REQUEST['beiyong4'];
	$beiyong5  = $_REQUEST['beiyong5'];
	$beiyong6  = $_REQUEST['beiyong6'];
	$beiyong7  = $_REQUEST['beiyong7'];
	$beiyong8  = $_REQUEST['beiyong8'];
	$beiyong9  = $_REQUEST['beiyong9'];
	$beiyong10 = $_REQUEST['beiyong10'];
	$beiyong11 = $_REQUEST['beiyong11'];
	$beiyong12 = $_REQUEST['beiyong12'];
	$beiyong13 = $_REQUEST['beiyong13'];
	
	//2、数据保存在数据库中
	//1）、建立连接（搭桥）
	$conn = mysql_connect("localhost","root","qianfeng");
	
	//2）、选择数据库（找目的地）
	mysql_select_db("web20170427",$conn);
	
	//3）、传输数据（过桥）
	//insert语句
	$sqlstr = "insert into goodsInfo values('".$goodsId."','".$goodsName."','".$goodsType."'
	,'".$goodsPrice."','".$goodsCount."','".$goodsDesc."','".$goodsImg."'
	,'".$beiyong1."','".$beiyong2."','".$beiyong3."','".$beiyong4."'
	,'".$beiyong5."','".$beiyong6."','".$beiyong7."','".$beiyong8."'
	,'".$beiyong9."','".$beiyong10."','".$beiyong11."','".$beiyong12."','".$beiyong13."')";
	//echo($sqlstr);
	
	mysql_query($sqlstr,$conn);
	
	//4）、关闭连接（拆桥）
	mysql_close($conn);
	
	//3、给客户端返回（响应）一个注册成功！
	echo "保存成功";
?>