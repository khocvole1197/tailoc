
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData  extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation','session'));
		
		
	

		$this->lang->load('vi', 'vietnamese');
	}
	public function index()
	{
		// echo "TEst thu duoc chua";
		//chay qua duong dan .../
		$this->load->view('addData_view');
	}
	
	public function insertData_controller_order()
	{
		// lay du lieu ve
		if($_POST["comBackXl"]){
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
			if($this->addData_model->deleteDataByIdOrderXL($id)){
				header('Location: http://localhost:8080/simtailoc/index.php/showData/adminOrder_xuly');
			}
			
		
					}
		else
		{
			echo "Insert that bai roi";
		}
		}
		if($_POST["divaols"]){
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

		if($this ->addOrder_model->insert_xuly2($soo,$giaa,$nhamangg,$hotenn,$sdtt,$diachii)){
			// echo "thanh cong";
			
			$this->load->model('khachhang_model');
			if ($this->khachhang_model->deleteDataById_xl2($id)) {
				# code...
				header('Location: http://localhost:8080/simtailoc/index.php/showData/adminOrder_xuly');
			}
			
			// $this->load->view('admin/thanhcong_ls');
					}
		else
		{
			echo "đặt hàng that bai roi";
		}
		}
		
		
	}
	


	// them bang ajax
	public function addData_ajax()
	{
		// lay du lieu 
		$sodienthoai = $this->input->post('so');
		// echo "o";
		$giatien = $this->input->post('gia');

		$nhamang = $this->input->post('nhamang');
		

		$this->load->model('addData_model');
		
		

		$trangthai = $this->addData_model->insert($sodienthoai,$giatien,$nhamang);
		


		// truyen du lieu vao model
		
		
		
		
		
	}
public function addData_aja()
	{
	# Thiết lập lại các lời báo lỗi cho từng quy tắc được thiết lập ở dưới
		$this->form_validation->set_message('required', $this->lang->line('required'));
		$this->form_validation->set_message('valid_email', $this->lang->line('invalid-email'));
		$this->form_validation->set_message('matches', $this->lang->line('matches'));
		
		# Thiết lập các quy tắc cho từng trường trong form
		$this->form_validation->set_rules('username', 'lang:username', 'callback_username_check|trim|required|min_length[1]|max_length[12]');
		$this->form_validation->set_rules('password', 'lang:password', 'trim|required|matches[passconf]');
		$this->form_validation->set_rules('passconf', 'lang:passconf', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		#Kiểm tra điều kiện validate
		if($this->form_validation->run() == TRUE){
			$this->b_Check = true;
		}
		$data['b_Check']= $this->b_Check;
		$this->load->view('admin/login', $data);
		
	}
	public function username_check($str = ''){
		# Kiểm tra trường tên nhập vào phải khác từ 'damn'
		if($str && $str == 'damn'){
			$this->form_validation->set_message('username_check', 'Trường \'%s\' không được phép là từ \'damn\'');
			return FALSE;
		}
		else{
			return TRUE;
		}
	}


}

/* End of file addData_controller.php */
/* Location: ./application/controllers/addData_controller.php */