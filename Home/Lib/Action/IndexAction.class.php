<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	/*$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
*/
   // $m = M();
    //$result=$m->execute("insert into t_user(`name`) values('homelee')");
    //$result=$m->execute("insert into tp_user(`name`) values('njm')");
    //var_dump($result);

    //echo $c;
    //$data['name']='占山';
    //$c=$m->where($data)->count();

    //$arr=$m->select();
    //$arr=$m->where('id=9')->getField('name');
    //$arr=$m->where("sex=0 and name='王伟'")->find();
    /*$data['sex']=1;
    $data['name']='旺旺';*/
    //$data['_logic']='or';  //将sql语句设置为or
    //$data['name']=array('LIKE','%一%');
   // $data['name']=array('LIKE',array('%一%','%山%'),'and'); //模糊查询用户中有’一‘或是’山‘的名字
     //$data['id']=array('not between',array(9,20));
     //$data['id']=array(array('gt',10),array('lt',17),);
   // $data['name']=array(array('like','%将%'),array('like','%一%'),array('like','%里%'));
     //$arr=$m->where($data)->select();  
   // $arr=$m->where($data)->find();   查找一条id>9的数据


   // var_dump($arr);
   // $this->display('./Public/error.html','utf-8','text/xml');
/*    
        $content=$this->fetch('Public:error');
        dump($content);
        $content=str_replace('h1','i',$content);
        $this->show($content);*/

        $this->assign('name','张三');
        $this->display();
	
  }
  	public function show2(){
  		/*echo "访问了Index类下的show方法";*/
  		//echo "欢迎你".$_GET['name']."你的年龄是".$_GET['age'];
  		//$m = new Model('User');
      $m = M('User');
  		//$arr=$m->select();
     // $arr = $m->find(2);
      //$arr= $m->where('id=2')->getField('name');
  		//var_dump($arr);
     /* $m->name='jack';
      $m->sex='0';
      $m->add();*/
      //$m->where('id=2')->delete();
      $data['id']=1;
      $data['name']='pp6';
      $count=$m->save($data);
      echo $count;

$m->save($data);
  		//$name = 'homelee';
  		//$this->assign('date',$arr[0]['name']);
      $this->assign('date',$arr);
  		$this->display();
  	}
    public function time(){
      $m = M('User');
      //$arr=$m->select();
      //var_dump($arr);
      //$this->assign('data',$arr);
   /*  $data['id'] = 6;
     $data['name'] = 799;
     $count = $m->save($data);*/
     //$m->delete(6);
     $arr=$m->select();
     $this->assign('data',$arr[0]['name']);
      var_dump($count);
      //echo "$arr";
      $this->display();
    }


}