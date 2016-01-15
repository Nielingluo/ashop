<?php
	class UserModel extends Model{
		protected $_validate = array(
			//array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
		    array('code','require','验证码必须！'), //默认情况下用正则进行验证
		    array('code','checkCode','验证码不正确！',0,'callback',1), // 自定义函数验证密码格式
		    array('username','require','用户名未填写！！'), 
		    array('username','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
		    array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
		    array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
		    array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式
		);

		protected function checkCode($code){
			if(md5($code)!=$_SESSION['verify']){
				return false;
				//var_dump($_SESSION['verify']);
			}else{
				return true;
			}
		}
	}
?>