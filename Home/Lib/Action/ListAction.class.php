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
			$m=M('Article');
			$m->title=$_POST['title'];
			$m->content=$_POST['content'];
			$idnum=$m->add();
			if($idnum>0){
				$this->success('添加文章成功','atlist');
			}else{
				$this->error('添加文章失败，请稍候重试！');
			}
		}

	}
?>