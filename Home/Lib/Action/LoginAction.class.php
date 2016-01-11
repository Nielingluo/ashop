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
			/* 方法一
			$i=$m->where($where)->count();
			if($i>0){
				$_SESSION['name']=$name;
				$this->redirect('User/index');
			}else{
				$this->error('该用户不存在');   

			}*/

			//方法二
			$arr=$m->where($where)->find();
			//dump($i);
			if($arr){
				$_SESSION['name']=$name;
				$_SESSION['id']=$arr['id'];
				$this->success('登陆成功',U('User/index'));
			}else{
				$this->error('该用户不存在'); 
			}


		}

		public function register(){
			$this->display();
		}
		public function user_register(){
			$m=M('User');
			$m->email=$_POST['email'];
			$m->name=$_POST['username'];
			$m->password=$_POST['password'];
			$idnum=$m->add();
			if($idnum){
				$this->success('注册成功，即将跳转到登陆页面','index');
			}else{
				$this->error('注册失败，请稍候重试……');
			}
			

		}
       
       //退出
		/*将session赋值为空
		清除session
		判断session是否是基于cookie的 如果是基于cookie的 那么将cookie也清除掉*/
       public function dologout(){
       		$_SESSION=array();
       		if(isset($_COOKIE[session_name()])){
       			//setcookie(sessionm名字,赋值为空,让时间过期,全局有效)
       			setcookie(session_name,'',time()-1,'/');
       		}
       		session_destroy();
       		$this->redirect('User/index');
       }
	}
?>