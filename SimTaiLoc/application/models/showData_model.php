<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	// public $variable;

	public function __construct()
	{
		parent::__construct();
			$this->load->database();
	}

// phan trang
		function list_all(){
				$this->db->select('*');
	            $query =  $this->db->get('so_sim1');
	            return $query->result_array();
	        }

 	// function list_all($number, $offset){
 	// 	$this->db->select('*');
  //       $query =  $this->db->get('so_sim1',$number,$offset);
  //       return $query->result_array();
  //       }
        
        // đếm tổng số record trong table book
        function count_all(){
            return $this->db->count_all('so_sim1');
        }

//




	public function getDatabase($value='')
	{
		# code...
		$this->db->select('*'); //lay het du lieu
		 $ketqua = $this->db->get('so_sim1'); // lay du lieu tu bang ten la so_sim1 va luu vao mang $ketqua
		 // dua du lieu ket qua thanh mot mang du lieu
		 $ketqua = $ketqua->result_array(); // bien doi $ketqua thanh mot mang
		
		 return $ketqua;


		 // echo "<pre>"; // xuong dong nhin cho de
		 // var_dump($ketqua); // kiem tra xem ket qua
	}
	//don hang dang doi 

	public function getDatabaseOrder($value='')
	{
		# code...
		$this->db->select('*'); //lay het du lieu
		 $ketqua = $this->db->get('don_hang'); // lay du lieu tu bang ten la don_hang1 va luu vao mang $ketqua
		 // dua du lieu ket qua thanh mot mang du lieu
		 $ketqua = $ketqua->result_array(); // bien doi $ketqua thanh mot mang

		 	

		 return $ketqua;
	}

	public function getSDT(){
		$this->db->select('sdt');
		 $ketqua = $this->db->get('don_hang'); // lay du lieu tu bang ten la don_hang1 va luu vao mang $ketqua
		 // dua du lieu ket qua thanh mot mang du lieu
		 $ketqua = $ketqua->result_array(); // bien doi $ketqua thanh mot mang	
		 return $ketqua;
	}
	public function getCartOder(){
		$this->db->select('so');
		
		
		$dulieu = $this->db->get('don_hang');
		$dulieu = $dulieu->result_array();
		// foreach ($dulieu as $key => $value) {
		// 	# code...
		// 	$kq = $value['so'];
		// }

			return $dulieu;
	}


	//don hang dang duoc xuly
	public function getDatabaseOrder_xl($value='')
	{
		# code...
		$this->db->select('*'); //lay het du lieu
		 $ketqua = $this->db->get('don_hang_dang_xl'); // lay du lieu tu bang ten la don_hang1 va luu vao mang $ketqua
		 // dua du lieu ket qua thanh mot mang du lieu
		 $ketqua = $ketqua->result_array(); // bien doi $ketqua thanh mot mang	
		 return $ketqua;
	}
//lich su don hang
	public function getDatabaseOrder_lichsu($value='')
	{
		# code...
		$this->db->select('*'); //lay het du lieu
		 $ketqua = $this->db->get('lich_su_don_hang'); // lay du lieu tu bang ten la don_hang1 va luu vao mang $ketqua
		 // dua du lieu ket qua thanh mot mang du lieu
		 $ketqua = $ketqua->result_array(); // bien doi $ketqua thanh mot mang	
		 return $ketqua;
	}


// xoa don hang
	public function deleteDataById_xuly($id)
	{
		# code...
		$this->db->where('id', $id);
		$this->db->delete('don_hang');
		$this->load->view('thongbaoxoathanhcong_dh');
	}
	// xoa don hang bi loi khi xuly

	public function deleteDataById($id)
	{
		# code...
		$this->db->where('id', $id);
		return $this->db->delete('so_sim1');

		// $this->load->view('thongbaoxoathanhcong');
	}
	public function updateDataById($id,$so,$gia,$nhamang)
	{
		# code...
		$dulieucanupdate=array(
			'id' =>$id,
			'so' =>$so,
			'gia' =>$gia,
			'nhamang' =>$nhamang
		);
		$this->db->where('id', $id);
		return $this->db->update('so_sim1', $dulieucanupdate);
	}
}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */