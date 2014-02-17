<?php 
class LoginAction extends Action{

	public function index(){
		//如果已经登录了，就直接跳转到后台
		if(isset($_SESSION['uid'])&&isset($_SESSION['username'])){
			$this->redirect('Admin/Index/index');
		}
		$this->display();
	}

	public function login(){
		if(!IS_POST) halt('页面不存在');


		if(I('verifycode','','md5')!=$_SESSION['verify']){
			$this->error('验证码错误');
		}
		$username= I('username');
		$pwd = I('password','','md5');
		$user= M('user')->where(array('username'=>$username))->find();
		if(!$user || $user['password']!=$pwd){
			$this->error("用户账户或者密码错误");
		}
		if($user['lock']) $this->error("用户被锁定");
		$data=array(
			'id'=>$user['id'],
			'logintime' =>time(),
			'loginip' =>get_client_ip()
		);

		M('user')->save($data);

		session('uid',$user['id']);
		session('username',$user['username']);
		session('logintime',date('Y-m-d H:i:s'),$user['logintime']);
		session('loginip',$user['loginip']);

		$this->redirect('Admin/Index/index');

	}

	public function verify(){
		import('ORG.Util.Image');
		Image::buildImageverify(1,1,'png');
	}
}

 ?>