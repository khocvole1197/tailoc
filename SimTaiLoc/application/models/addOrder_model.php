<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addOrder_model extends CI_Model {

	// public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function insert($so, $gia,$nhamang,$s, $g,$d)
	{
		# code... vao autoload de kich hoat database $autoload['libraries'] = array('database');
		$dulieu = array(
		'so' => $so ,
		'gia' => $gia ,
		'nhamang' => $nhamang,
		'hoten' => $s ,
		'sdt' => $g ,
		'diachi' => $d); // dung mang dulieu arr-->tab  
		 
		$this->db->insert('don_hang', $dulieu); //db_insert-->tab de hien insert du lieu
		return $this->db->insert_id(); //tra ve gia tri id cua phan tu do
	}
	//gio hang
	public function insertCart($dsCart,$ten,$sdt,$diachi){
		$dulieu = array(
		'so' => $dsCart,
		'gia' => "" ,
		'nhamang' => "",
		'hoten' => $ten ,
		'sdt' => $sdt ,
		'diachi' => $diachi); // dung mang dulieu arr-->tab  
		 
		$this->db->insert('don_hang', $dulieu); //db_insert-->tab de hien insert du lieu
		return $this->db->insert_id(); //tra ve gia tri id cua phan tu do

	}
	//them du lieu vao bang xuly
	public function insert_xuly($so, $gia,$nhamang,$s, $g,$d)
	{
		# code... vao autoload de kich hoat database $autoload['libraries'] = array('database');
		$dulieu = array('so' => $so , 'gia' => $gia , 'nhamang' => $nhamang,'hoten' => $s , 'sdt' => $g , 'diachi' => $d); // dung mang dulieu arr-->tab   
		$this->db->insert('don_hang_dang_xl', $dulieu); //db_insert-->tab de hien insert du lieu
		return $this->db->insert_id(); //tra ve gia tri id cua phan tu do
	}

  // them du lieu vao lich su don hang
	public function insert_xuly2($so, $gia,$nhamang,$s, $g,$d)
	{
		# code... vao autoload de kich hoat database $autoload['libraries'] = array('database');
		$dulieu = array('so' => $so , 'gia' => $gia , 'nhamang' => $nhamang,'hoten' => $s , 'sdt' => $g , 'diachi' => $d); // dung mang dulieu arr-->tab   
		$this->db->insert('lich_su_don_hang', $dulieu); //db_insert-->tab de hien insert du lieu
		return $this->db->insert_id(); //tra ve gia tri id cua phan tu do
	}




	///// json cart
	public function show_cart($is){

	
	$this->db->select('*');
	// $username = 'tuong_dz';
	$this->db->where('sdt',$is);
	$dulieu = $this->db->get('don_hang');
	$dulieu = $dulieu->result_array();
	foreach ($dulieu as $key => $value) {
		# code...
		$kq = $value['so'];
	}

		return $kq;
	
	}
	public function getDataBySDT($sdtt){
		$this->db->select('*');
		// $username = 'tuong_dz';
		$this->db->where('sdt',$sdtt);
		$dulieu = $this->db->get('don_hang');
		$dulieu = $dulieu->result_array();
		

			return $dulieu;
	}
}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */