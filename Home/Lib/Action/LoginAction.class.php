<?php
	class LoginAction extends Action{
		public function index(){
			$this->display();
		}
		public function do_login(){
			//获取用户名密码和数据库比对，有，则允许登陆，没有则返回
			//dump($_POST);
			$name=$_POST['username'];
			$password=$_POST['password'];
			$code=$_POST['code'];

			if($_SESSION['verify'] !== md5($code)) {
   				$this->error('验证码错误！');
			}

			$m=M('User');
			$where['name']=$name;
			$where['password']=$password;
			$i=$m->where($where)->count();
			if($i>0){
				$this->redirect('User/index');
			}else{
				$this->error('该用户不存在');


			}
		}
	}
?>