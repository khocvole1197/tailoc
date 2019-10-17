
<?php
class Authentication extends CI_Controller{
	
	private $b_Check = false;
	
	public function __construct(){
		parent::__construct();
		#Tải thư viện  và helper của Form trên CodeIgniter
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation','session'));
		
		#Tải model
		$this->load->model(array('authentication_model'));

		$this->lang->load('vi', 'vietnamese');
	}
	
	public function index(){
		$this->load->view('admin/login');

		
	}
	
	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		#Kiểm tra điều kiện validate
		if($this->form_validation->run() == TRUE){
			$a_UserInfo['username'] = $this->input->post('username');
			$a_UserInfo['password'] = ($this->input->post('password'));
			$a_UserChecking = $this->authentication_model->a_fCheckUser( $a_UserInfo );
			if($a_UserChecking){
				$this->session->set_userdata('user', $a_UserChecking);			 
				redirect(base_url('index.php/showdata')); 
			}else{
				$this->b_Check = false;
			}
		}
		$a_Data['b_Check']= $this->b_Check;
		$this->load->view('admin/login', $a_Data);
		
	}

	// test validate
	public function formValidate(){
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
		}elseif ($str.length) {
			# code...
		}
		else{
			return TRUE;
		}
	}

}
?>