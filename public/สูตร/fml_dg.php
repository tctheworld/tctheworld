<?php
  /* Facebook : อดิเทพ เทศเทียน /*
  /* Tel : 063-163-1368 /*
  /* Line : Aditep2541 /*
  /* Date : 25/01/63 */   
header('Content-Type: application/json');
//error_reporting(0);
session_start();
//include $_SERVER['DOCUMENT_ROOT']."/function/database.php";
include "function/database.php";


$User = query("SELECT * FROM user WHERE user = ?",array($_SESSION['user']));
$Users = $User->fetch();

if($Users['credit'] <= 0){
	$arr = array("fm"=>"W","refill"=>1);
     echo json_encode($arr);
	exit();
}

if($Users['lobby']==1){
$Check_U = query("SELECT * FROM statisctic_dg WHERE user = ? AND result = 'wait'",array($_SESSION['user']));
while($cu = $Check_U->fetch()){
	$Logs = query("UPDATE statisctic_dg SET result = 'cancel' WHERE id = ?",array($cu['id']));
	}
$Playstat = query("UPDATE user SET lobby = 0 WHERE user = ?",array($_SESSION['user']));	
}
/* OLD
$rest = substr($_GET['fm'], -5);
*/
$str = "";
$gg = explode(',',$_GET['fm']);

foreach($gg as $a){
	$str .= $a;
}

$rest = substr($str, -5);


$Check = query("SELECT * FROM statisctic_dg WHERE user = ? AND result = 'wait' AND room = ?",array($_SESSION['user'],$_GET['room']));
$C = $Check->fetch();
if($C){
	
$old_len = strlen($C['fm']);
$new_len = strlen($str);
$new_len_fm = substr($str, -1);
$len = $new_len - $old_len;

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($len >= 1)
	{
		if($new_len_fm == $C['an']){
			$Logs = query("UPDATE statisctic_dg SET result = 'win' WHERE id = ?",array($C['id']));
		}
		else if($new_len_fm != $C['an'] and $new_len_fm == "T"){
			$Refund = query("UPDATE user SET credit = credit+1 WHERE user = ?",array($_SESSION['user']));
			$Logs = query("UPDATE statisctic_dg SET result = 'tle1' WHERE id = ?",array($C['id']));
		}
		else if($new_len_fm != $C['an'] and $C['an'] == "T"){
			$Logs = query("UPDATE statisctic_dg SET result = 'tle2' WHERE id = ?",array($C['id']));
		}
		else if($new_len_fm == $C['an'] and $new_len_fm == "T"){
			$Logs = query("UPDATE statisctic_dg SET result = 'tle3' WHERE id = ?",array($C['id']));
		}
		else if($new_len_fm == $C['an'] and $C['an'] == "T"){
			$Logs = query("UPDATE statisctic_dg SET result = 'tle4' WHERE id = ?",array($C['id']));
		}else{
			$Refund = query("UPDATE user SET credit = credit+1 WHERE user = ?",array($_SESSION['user']));
			$Logs = query("UPDATE statisctic_dg SET result = 'lose' WHERE id = ?",array($C['id']));
		}	
	}
//echo $len;
}

$Query = query("SELECT * FROM fml_dg WHERE fm LIKE ? AND idea = ? LIMIT 1",array($rest,$_GET['idea']));
$Data = $Query->fetch();

if($Data){

$Check = query("SELECT * FROM statisctic_dg WHERE user = ? AND result = 'wait' AND room = ?",array($_SESSION['user'],$_GET['room']));
$C = $Check->fetch();
if($C){
	
}else{
//echo 'new';
	$Take = query("UPDATE user SET credit = credit-1 WHERE user = ?",array($_SESSION['user']));
	$Logs = query("INSERT INTO statisctic_dg (user,room,date,fm,an,result) VALUES (?,?,?,?,?,?)",array($_SESSION['user'],$_GET['room'],date("d-m-Y"),$str,strtoupper($Data['an']),"wait"));
}

$arr = array("fm"=>$Data['an'],"refill"=>0,"credit"=>$Users['credit']);
echo json_encode($arr);

}else{
	$arr = array("fm"=>"W","refill"=>0,"credit"=>$Users['credit']);
	echo json_encode($arr);
}




