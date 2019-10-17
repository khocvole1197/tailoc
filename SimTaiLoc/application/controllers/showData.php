

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation','session'));
		#Tải model
		$this->load->model(array('authentication_model'));

	}

	public function index()
	{	
		$this->load->model('showData_model');
		// goi ham getdatabase trong model
			$dulieu = $this->showData_model->getDatabase();
		$dulieu = array('dulieutucontroller' =>  $dulieu ); // bien du lieu thanh mang voi key = dulieutucontroller
		// $this->load->model('showData_model');
		
		// echo "<pre>";
		// var_dump($dulieu);
		// $dulieu['user'] = $this->session->userdata('user');
		$this->load->view('admin/showData_view', $dulieu, FALSE);

        // $this->load->view('tem_dangnhap',$ad_data);


	}



//log out
public function logout(){
		$this->session->unset_userdata('user');	// Unset session of user
		redirect(base_url('index.php/authentication'));
	}

//don hang doi xuly
	public function adminOrder()
	{
		# code...
		$this->load->model('showData_model');

		// $listSDT = $this->showData_model->getSDT();
		// $sdtt = $this->input->post('sdt');

		// var_dump($sdtt);
	
		
		// goi ham getdatabase trong model
		$dulieu = $this->showData_model->getDatabaseOrder();
		$dulieu = array(

			'dulieutucontroller' =>  $dulieu,
			'danhsachSDT'		=> $dulieu
		); // bien du lieu thanh mang voi key = dulieutucontroller 
		// var_dump($dulieu)	
		$this->load->view('admin/adminOrder_view', $dulieu, FALSE);
	}
	//don hang dang duoc xuly
	public function adminOrder_xuly()
	{
		# code...
		// $this->load->view('adminOrder_view');
		$this->load->model('showData_model');
		// goi ham getdatabase trong model
		$dulieu = $this->showData_model->getDatabaseOrder_xl();
		$dulieu = array('dulieutucontroller' =>  $dulieu ); // bien du lieu thanh mang voi key = dulieutucontroller 
		// echo "<pre>";
		// var_dump($dulieu);
		$this->load->view('admin/adminOrderxuly_view', $dulieu, FALSE);
	}
	public function admin_history()
	{
		# code...
		//$this->load->view('adminOrder_view');
		// $this->load->model('showData_model');
		// // goi ham getdatabase trong model
		// $dulieu = $this->showData_model->getDatabaseOrder_lichsu();
		// $dulieu = array('dulieutucontroller' =>  $dulieu ); // bien du lieu thanh mang voi key = dulieutucontroller 
		// // echo "<pre>";
		// // var_dump($dulieu);
		// $this->load->view('admin/adminOrder_history', $dulieu, FALSE);
		// phan trang
	}

	
	//xoá du lieu
	public function deleteData($idnhanduoc)
	{
		# code...
		// echo $idnhanduoc;
		$this->load->model('showData_model');
		if($this->showData_model->deleteDataById($idnhanduoc)){
			header('Location: http://localhost:8080/simtailoc/index.php/showData');
			// header('Location: http://localhost/learnphpmvc/bai2dulieu/index.php/ShowData/show');
		}

	}
	// update du lieu

	public function updateData()
	{
		# code...
		//lay ve du lieu tu view 
		$is = $this->input->post('is');
		if ($is){
			$id = $this->input->post('id');
			$so = $this->input->post('so');
			$gia = $this->input->post('gia');
			$nhamang = $this->input->post('nhamang');
		// echo "ID nhan duoc la $id";
		// echo "So nhan duoc la $so";
		// echo "Gia nhan duoc la $gia";
		// 	echo "Gia nhan duoc la $nhamang";

			
			$this->load->model('showData_model');
		//xu  dung ham trong model giao tiep voi du lieu voi gia tri nhan duoc tu view
			if($this->showData_model->updateDataById($id,$so,$gia,$nhamang))
			{
				header('Location: http://localhost:8080/simtailoc/index.php/showData');
			// echo "thanh cong";
			// echo "<a href=".base_url()."/index.php/showData> quay ve trang chu</a>";
			}
		}
		else
		{
			header('Location: http://localhost:8080/simtailoc/index.php/showData/logout');
		}
	}
	public function addData()
	{
		// lay du lieu 
		$is = $this->input->post('is');
		if ($is){
			$sodienthoai = $this->input->post('so');
			$giatien = $this->input->post('gia');
			$nhamang = $this->input->post('nhamang');
			$is = $this->input->post('is');
			
			$this->load->model('addData_model');
			
			if ($this->addData_model->insert($sodienthoai,$giatien,$nhamang) ) {
				# code...
				header('Location: http://localhost:8080/simtailoc/index.php/showData');
			}
		}
		else{
			header('Location: http://localhost:8080/simtailoc/index.php/showData/logout');
		}
	}
}

/* End of file showData.php */
/* Location: ./application/controllers/showData.php */