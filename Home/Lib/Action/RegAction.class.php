<?php
	class RegAction extends Action{
		public function register(){
			$this->display();
		}
		public function user_register(){
			$m=D('User');
			if(!$m->create()){
				$this->error($m->getError());
			}
			 
			//$m->create(); 数据库用户名要改为username
			//dump($m);exit;
			$idnum=$m->add();
			if($idnum){
				$this->success('注册成功，即将跳转到登陆页面',U('Login/index'));
			}else{
				$this->error('注册失败，请稍候重试……');
			}

		}
		//检测用户是否注册过
		public function checkName(){
			$username=$_GET['username'];
			//echo $username;
			$user=M('User');
			$where['username']=$username;
			$count=$user->where($where)->count();
			if($count){
				echo '不允许';
			}else{
				echo '允许';
			}
		}


/*和上述方法一致的作用只是不同的写法而已

		public function user_register(){
			$email=$_POST['email'];
			$username=$_POST['username'];
			$password=$_POST['password'];

			$m=M('User');
			$data['email']=$email;
			$data['username']=$username;
			$data['password']=$password;
			$idnum=$m->add($data);
			dump($data);
			exit;
			if($idnum){
				$this->success('注册成功，即将跳转到登陆页面',U('Login/index'));
			}else{
				$this->error('注册失败，请稍候重试……');
			}

		}  
		//方法二：
		public function user_register(){
			$m=M('User');
			$m->email=$_POST['email'];
			$m->name=$_POST['username'];
			$m->password=$_POST['password'];
			$idnum=$m->add();
			if($idnum){
				$this->success('注册成功，即将跳转到登陆页面',U('Login/index'));
			}else{
				$this->error('注册失败，请稍候重试……');
			}

		}

		*/
	}
?>