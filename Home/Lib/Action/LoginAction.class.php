<?php
	class LoginAction extends Action{
		public function index(){
			$this->display();
		}
		public function do_login(){
			//获取用户名密码和数据库比对，有，则允许登陆，没有则返回
			//dump($_POST);
			$username=$_POST['username'];
			$password=$_POST['password'];
			$code=$_POST['code'];

			if($_SESSION['verify'] !== md5($code)) {
   				$this->error('验证码错误！');
			}

			$m=M('User');
			$where['username']=$username;
			$where['password']=$password;
			/* 方法一
			$i=$m->where($where)->count();
			if($i>0){
				$_SESSION['username']=$username;
				$this->redirect('User/index');
			}else{
				$this->error('该用户不存在');   

			}*/

			//方法二
			$arr=$m->where($where)->find();
			//dump($i);
			if($arr){
				$_SESSION['username']=$username;
				$_SESSION['id']=$arr['id'];
				$this->success('登陆成功',U('User/index'));
			}else{
				$this->error('该用户不存在'); 
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