<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {

	// public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	// them du lieu tu control  vao model
	public function insert($so, $gia,$nhamang)
	{
		# code... vao autoload de kich hoat database $autoload['libraries'] = array('database');
		$dulieu = array('so' => $so, 'gia' =>$gia,'nhamang' =>$nhamang ); // dung mang dulieu arr-->tab   
		$this->db->insert('so_sim1', $dulieu); //db_insert-->tab de hien insert du lieu
		return $this->db->insert_id(); //tra ve gia tri id cua phan tu do
	}
	
			
	public function insert_user($username, $password,$email,$sodt)
	{
		# code... vao autoload de kich hoat database $autoload['libraries'] = array('database');
		$dulieu = array('username' => $username, 'password' =>$password,'email' =>$email,'sdt'=>$sodt, 'cart' => "{}" ); // dung mang dulieu arr-->tab   
		$this->db->insert('users', $dulieu); //db_insert-->tab de hien insert du lieu
		return $this->db->insert_id(); //tra ve gia tri id cua phan tu do
	}
	public function deleteDataByIdOrder($sdt)
	{
		# code...
		$this->db->where('sdt', $sdt);
		return $this->db->delete('don_hang');
	}
	public function deleteDataByIdOrderXL($id)
	{
		# code...
		$this->db->where('id', $id);
		return $this->db->delete('don_hang_dang_xl');
	}
	

}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */