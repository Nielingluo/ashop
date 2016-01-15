<?php
	class ArticleModel extends Model{  
	   //Model文件夹下的名字是针对某个表的名字如针对Article表就用ArticleModel.class.php
		protected $_auto = array ( 
			//array(填充字段,填充内容,[填充条件,附加规则])
		    //array('password','md5',1,'function') , // 对password字段在新增的时候使md5函数处理
		    //array('name','getName',1,'callback'), // 对name字段在新增的时候回调getName方法
		    array('date','time',1,'function'), // 对create_time字段在更新的时候写入当前时间戳
			array('uid','getId',1,callback),

		);
		protected function getId(){
			return $_SESSION['id'];
		}
	}
?>