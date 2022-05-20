<?php  

class Signup{
	public function __construct(){
		require('Model/UserModel.php');
		$userModel = new UserModel();
		$message = $this->signUp($userModel);
		require('View/client/pages/regis.php');	
	}
	public function signUp($userModel) {
		$message = NULL;
		if (isset($_POST['signup'])) {
			$name = $_POST['name'];
			$password = md5($_POST['pass']);
			$account = $_POST['account'];
			$dob = $_POST['dob'];
			$sex = $_POST['sex'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$fid = $_FILES["frontID"]["name"];
			$bid = $_FILES['backID']["name"];
			$sex =  $_POST['sex'];
			if ($account && $password && $name && $dob && $email && $phone && $fid && $bid && $sex) {
				$checkuser = $userModel->checkExistsAccount($account);
				if ($checkuser->num_rows > 0) {
					$message = '* Tên đăng nhập đã bị trùng';
				}else {
					$check = 0;
					if (file_exists("../../Public/client/img/".basename($fid))) {
						$check = 1;
					}
					if (file_exists("../../Public/client/img/".basename($bid))) {
						$check = $check+'1';
					}
					if ($check = '11') {
						$this->sgn($userModel,$name, $password, $account, $email, $dob, $phone, $sex, $fid, $bid);
					}
					else if ($check = '1') {
						if (move_uploaded_file($_FILES["anh"]["tmp_name"], "../../Public/client/img/".basename($bid)))
							$this->sgn($userModel,$name, $password, $account, $email, $dob, $phone, $sex, $fid, $bid);
					}
					else if ($check = '01'){
						if(move_uploaded_file($_FILES["anh"]["tmp_name"], "../../Public/client/images/".basename($fid)))
							$this->sgn($userModel,$name, $password, $account, $email, $dob, $phone, $sex, $fid, $bid);
					}
					else if (move_uploaded_file($_FILES["anh"]["tmp_name"], "../../Public/client/img/".basename($bid)) 
						&& move_uploaded_file($_FILES["anh"]["tmp_name"], "../../Public/client/img/".basename($fid)))
						$this->sgn($userModel,$name, $password, $account, $email, $dob, $phone, $sex, $fid, $bid);
					//regis sucessfully, store data user into session
					$_SESSION['user']['name'] = $name;
				}
			}
			else $message = 'đăng ký thất bại';
			
		}

		return $message;
	}
	public function sgn($userModel,$name, $password, $account, $email, $dob, $phone, $sex, $fid, $bid){
		$userModel->signup($name, $password, $account, $email, $dob, $phone, $sex, $fid, $bid);
		echo "<script>	
		location.href='./';
		</script>";
	}
}

?>