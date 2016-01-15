<?php
	class ListAction extends Action{
		public function atlist(){
			$list=M('Article');
			$arr=$list->order('id desc')->select();
			//var_dump($arr);
			$this->assign('data',$arr);
			$this->display();
		}
		public function atadd(){
			$this->display();
		}
		public function create(){
			$m=D('Article');
			/*$m->title=$_POST['title'];
			$m->content=$_POST['content'];*/
			//上传文件
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}
			//dump($info);exit;
			$m->create();
			$m->filename=$info[0]['savename'];
			//$m->date=time();  //数据库插入当前时间
			//$m->uid=$_SESSION['id'];
			$idnum=$m->add();
			if($idnum>0){
				$this->success('添加文章成功','atlist');
			}else{
				$this->error('添加文章失败，请稍候重试！');
			}
		}

	}
?>