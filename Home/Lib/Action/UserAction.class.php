<?php
	class UserAction extends Action{
		public function index(){
			$list=M('User');
			$arr=$list->order('id desc')->select();
			//var_dump($arr);
			$this->assign('data',$arr);
			$this->display();
		}
		public function del(){
			$del=M('User');
			$id=$_GET['id'];
			$count=$del->delete($id);
			if($count>0){
				$this->success('数据删除成功');
			}else{
				$this->error('数据删除失败');
			}
		}

		//显示修改（modify）页面
		public function modify(){
			$id=$_GET['id'];
			$m=M('User');
			$arr=$m->find($id);
			//var_dump($arr);
			$this->assign('data',$arr);
			$this->display();
		}
		public function update(){
			$m=M('user');
			$data['id']=$_POST['id'];
			$data['name']=$_POST['name'];
			$data['sex']=$_POST['sex'];
			$count=$m->save($data);
			if($count>0){
				$this->success('数据修改成功','index');
			}else{
				$this->error('数据修改失败');
			}

		}

		//显示添加页面
		public function add(){
			$this->display();
		}
		public function create(){
			$m=M('User');
			$m->name=$_POST['name'];
			$m->sex=$_POST['sex'];
			$idnum=$m->add();

			if($idnum>0){
				$this->success('数据添加成功','index');
			}else{
				$this->error('数据添加失败');
			}
		}

		//搜索
		public function search(){
			//var_dump($_POST);   
			//获取post数据，根据数据组装查询条件，根据条件从数据库中获取数据，返回给页面中遍历
			if(isset($_POST['name']) && $_POST['name']!=null){
				$where['name']=array('like',"%{$_POST['name']}%");
			}
			if(isset($_POST['sex']) && $_POST['sex']!=null){
				$where['sex']=array('eq',$_POST['sex']);
			}
			$m=M('User');
			$arr=$m->where($where)->select();
			$this->assign('data',$arr);
			$this->display('index');
		}

		//order用法实例
		public function demo(){
			$m=M('User');
			$arr=$m->order('id asc')->limit(10)->field('id',true)->select();  //asc升序  desc降序
			//$arr=$m->order(array('id'=>'asc','sex'=>'desc'))->select();  数组的形式
			var_dump($arr);
			$this->show('abs');
		}

		public function info(){
			$id=$_GET['id'];
			$m=M('User');
			$arr=$m->find($id);
			//dump($arr);
			if($arr){
				$this->assign('list',$arr);
				$this->display();
				//$this->success('查询成功',U('User/index'));
			}else{
				$this->error('查询失败');
				//$this->redirect('User/index',array('cate_id' => 2), 5, '页面跳转中...');
			}
			
		}


		/*About Article*/
		//Article list

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
		public function atcreate(){
			$m=M('Article');
			$m->title=$_POST['title'];
			$m->content=$_POST['content'];
            $m->now_time=date('Y:m:d H:i:s',time());
			$idnum=$m->add();
			if($idnum>0){
				$this->success('添加文章成功','atlist');
			}else{
				$this->error('添加文章失败，请稍候重试！');
			}
		}
		
	}
?>