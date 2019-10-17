<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addOrder  extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		// echo "TEst thu duoc chua";
		//chay qua duong dan .../
		//load libraly
		// $this->load->libraly('form_validation');
		// $this->form_validation->set_rules('hoten','Họ Tên Khách Hàng','required');

		// if($this->form_validation->run() == TRUE){
		// 	echo "form is validate";
		// }
		$this->load->view('addOrder_view');
	}

	//dua du lieu vao bang don_hang

	public function insertData_controller()
	{
		// lay du lieu ve
		$id = $this->input->post('id');
		$soo = $this->input->post('so');
		// echo "<hr>";
		$giaa = $this->input->post('gia');
		$nhamangg = $this->input->post('nhamang');

		$hotenn = $this->input->post('hoten');
		// echo "<hr>";
		$sdtt = $this->input->post('sdt');
		$diachii = $this->input->post('diachi');
		// echo "<pre>";
		// truyen du lieu vao model
		$this->load->model('addOrder_model');

		if($this ->addOrder_model->insert($soo,$giaa,$nhamangg,$hotenn,$sdtt,$diachii)){
			//thanh cong
			// $this->load->view('thanhcong');
			$this->load->model('khachhang_model');
			$this->khachhang_model->deleteDataById($id);
			$this->load->view('khachhang/order_thanhcong');
					}
		else
		{
			echo "đặt hàng that bai roi";
		}
		
	}
	//du lieu them vao bang dang xu ly
	public function insertData_controller_xuly1(){
		if($_POST["save"]) {
  		
			// $id = $this->input->post('id');
			$soo = $this->input->post('so');
			// echo "<hr>";
			$giaa = $this->input->post('gia');
			$nhamangg = $this->input->post('nhamang');

			$hotenn = $this->input->post('hoten');
			// echo "<hr>";
			$sdtt = $this->input->post('sdt');
			$diachii = $this->input->post('diachi');
			// echo "<pre>";
			// truyen du lieu vao model
			$this->load->model('addOrder_model');

			if($this ->addOrder_model->insert_xuly($soo,$giaa,$nhamangg,$hotenn,$sdtt,$diachii)){
				//thanh cong
				// $this->load->view('thanhcong');
				$this->load->model('khachhang_model');
				$this->khachhang_model->deleteDataById_xl_sosim1($soo);


				if($this->khachhang_model->deleteDataById_xl($sdtt)){
					header('Location: http://localhost:8080/simtailoc/index.php/showData/adminOrder');					
				}
				
						}
			else
			{
				echo "đặt hàng that bai roi";
			}
		}
	// dua du lieu tro lai bang so_sim1
	if($_POST["comback"]) {

		$sdtt = $this->input->post('sdt');


		$id = $this->input->post('id');
		$sodienthoai = $this->input->post('so');
		// echo "<hr>";
		$giatien = $this->input->post('gia');
		$nhamang = $this->input->post('nhamang');

		// truyen du lieu vao model
		$this->load->model('addData_model');
		if($this ->addData_model->insert($sodienthoai,$giatien,$nhamang)){
			//thanh cong
			$this->load->model('addData_model');
			if($this->addData_model->deleteDataByIdOrder($sdtt)){

				header('Location: http://localhost:8080/simtailoc/index.php/showData/adminOrder');
			}
			
		
					}
		else
		{
			echo "Insert that bai roi";
		}
	} 
	







	}
	public function insertData_controller_xuly()
	{
		$this->load->model('addOrder_model');
		$sdtt = $this->input->post('sdt');

		if($_POST['hienthi']) {
				
				
				// echo "<pre>";
				// var_dump($dulieu);

				$dulieu = $this->addOrder_model->getDataBySDT($sdtt);

				
				
				$ketqua =  $this->addOrder_model->show_cart($sdtt);
				$ketqua = json_decode($ketqua);
				
				// echo "<pre>";
				// var_dump($ketqua);
				// echo "<pre>";
				$ketqua = array(
					'mangketqua' => $ketqua,
					'list'		=>$dulieu
					
				);
				// echo "<pre>";
				// var_dump($ketqua);
				$this->load->view('admin/test.php',$ketqua,FALSE);
				// $this->load->view('admin/adminOrder_view.php',$ketqua,FALSE);
	
		}








		
	}

}
