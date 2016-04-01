<? 
//admin maked by scinfast.ru 
include('../sett.php');


//БЫДЛО КОД
//если стерешь коммент, ничего работать не будет


//include('../steamauth/userInfo.php');



foreach($admin as $adm){



if( $value['user_id'] == $adm['admin_id']){

$name = $adm['admin_name'];

$message_info['user_id'] == '0';

//$message_info['user_id'] == '0';

 $value['user_id'] == '0';
	$value['user_avatar'] ='../admin/photo/'.$adm['admin_ava'];
	
   $value['user_name'] = '<font size="1,9px" color="#3ACDFF">«'.  $name .'»</font>';
	$value['user_message'] = '<font color="#fff">'.$value['user_message'].'</font>';
}		

}




	



?>

