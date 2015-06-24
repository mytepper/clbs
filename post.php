<?php  
 /**
 * 
 */
 class post
 {
 	
 	public function login($data=null,$db){
 		$username = stripslashes($data["username"]);
		$password = stripslashes($data["password"]);
		$salt = sha1(md5($password));
		$password = md5($password.$salt);
		$check = $db->fetchRow("select * from tb_admin where userName='".$username."' and passWord='".$password."' ");
		if($check){
			$_SESSION["login"] = $check;
			fn::go_url("?login=true");
		}else{
			fn::alertgo("Username Or Password Incorect","");
		}

 	}


 	public function add_person($data=null,$db){
 		$check_mail  = $db->fetchRow("select * from tb_admin where email='".stripslashes($data['email'])."' ");
 		//print_r($check_mail);
 		if($check_mail){fn::alertgo("อีเมลล์นี้ถุกใช้แล้ว",""); exit();}
 		$data_ = array(
	 		"userName" => "",
	 		"passWord" => "",
	 		"name" => stripslashes($data['name']),
	 		"email" => stripslashes($data['email']),
	 		"position" => stripslashes($data['position']),
	 		"type" => "1",
	 		"status" => "false",
 		);

 		if($db->insert("tb_admin",$data_)){
 			fn::alertgo("เพิ่มข้อมูลพนักงานแล้ว","");
 		}else{
 			fn::alertgo("เพิ่มข้อมูลพนักงานไม่ได้","");
 		}

 		
 	}

 	public function add_rate($data=null,$db){
 		$data_ = array(
 			"comment"=>stripslashes($data['comment']),
 			"date"=>date("Y-m-d"),
 			"person_id"=>$_GET['id'],
 			"person_rate"=>$_SESSION['login']['id'],
 			);
 		if($db->insert("tb_rate",$data_)){
 			fn::alertgo("บันทึกข้อมูลแล้ว","");
 		}else{
 			fn::alertgo("บันทึกข้อมูลไม่ได้","");
 		}
 	}


 	public function register($data=null,$db){

 		$email = stripslashes($data['email']);
 		 $username = stripslashes($data['userName']);
 		
 		$password = stripslashes($data["password"]);
		$salt = sha1(md5($password));
		$password = md5($password.$salt);
		$check_user = $db->fetchRow("select * from tb_admin where userName='".$username."' ");
		if($check_user){
			fn::alertgo("ไม่สามารถใช้ username นี้ได้","");
			exit;
		}
		$check = $db->fetchRow("select * from tb_admin where email='".$email."' and userName='' and passWord='' ");
		if($check){

				$data_ = array(
						"userName"=>$username,
						"passWord"=>$password,
						"status"=>"true",
				);

				if($db->update("tb_admin",$data_,"email=:email",array(":email"=>$email))){
					fn::alertgo("สัมครเข้าใช้งานสำเร็จแล้ว สามารถใช้ข้อมูลนี้เข้าสู่ระบบได้แล้ว","");
				}else{
					fn::alertgo("ข้อมูลไม่ถูกต้อง","");
				}

		}else{
			fn::alertgo("ข้อมูลไม่ถูกต้อง","");
		}


 	}

 }


 ?>

