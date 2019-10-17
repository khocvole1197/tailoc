<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class khachhang_model extends CI_Model {

	// public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getDatabase($value='')
	{
		# code...
		$this->db->select('*'); //lay het du lieu
		 $ketqua = $this->db->get('so_sim1'); // lay du lieu tu bang ten la don_hang va luu vao mang $ketqua
		 // dua du lieu ket qua thanh mot mang du lieu
		 $ketqua = $ketqua->result_array(); // bien doi $ketqua thanh mot mang
		
		 return $ketqua;
		 // echo "<pre>"; // xuong dong nhin cho de
		 // var_dump($ketqua); // kiem tra xem ket qua
	}

	


	public function editById($i)
	{
		# code...
		$this->db->select('*');
		$this->db->where('id', $i);
		$dulieu = $this->db->get('so_sim1');
		$dulieu = $dulieu->result_array();
		return $dulieu;

	}

	public function deleteDataById($id)
	{
		# code...
		$this->db->where('id', $id);
		$this->db->delete('so_sim1');
		// echo "xoa thanh cong";
	}
	public function deleteDataById_xl_sosim1($sdt)
	{
		# code...
		$this->db->where('so', $sdt);
		$this->db->delete('so_sim1');
		// echo "xoa thanh cong";
	}
	public function deleteDataById_xl($id)
	{
		# code...
		$this->db->where('sdt', $id);
		return $this->db->delete('don_hang');
		// echo "xoa thanh cong";
	}
	public function deleteDataById_xl2($id)
	{
		# code...
		$this->db->where('id', $id);
		return $this->db->delete('don_hang_dang_xl');
		// echo "xoa thanh cong";
	}

	public function updateDataById($id,$so,$gia,$nhamang)
	{
		# code...
		$dulieucanupdate=array(
			'id' =>$id,
			'so' =>$so,
			'gia' =>$gia,
			'nhamang'=>$nhamang
			
		);
		$this->db->where('id', $id);
		return $this->db->update('so_sim1', $dulieucanupdate);
	}
// tim kiem
	public function dataSearchByGia($giatien)
	{
		$this->db->select('*');
		$this->db->where('gia', $giatien);
		$nhanve = $this->db->get('so_sim1');
		$nhanve = $nhanve->result_array();
		return $nhanve;
	}
	public function dataSearchBySo($sodienthoai)
	{
		$this->db->select('*');
		$this->db->where('so', $sodienthoai);
		$nhanve = $this->db->get('so_sim1');
		$nhanve = $nhanve->result_array();
		return $nhanve;
		
	}
	public function dataSearchByNhaMang($nhamang)
	{
		$this->db->select('*');
		$this->db->where('nhamang', $nhamang);
		$nhanve = $this->db->get('so_sim1');
		$nhanve = $nhanve->result_array();
		return $nhanve;
	}

	//cart
	public function insert_cart($username,$password,$email,$sdt,$dulieu){
		$mangdl = array(
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'sdt' => $sdt,
			'cart' => $dulieu, 
		);
		$this->db->insert('users',$mangdl);
		return $this->db ->insert_id();
	}
	//hien thi gio hang
	public function show_cart($is){

		
		$this->db->select('*');
		// $username = 'tuong_dz';
		$this->db->where('username',$is);
		$dulieu = $this->db->get('users');
		$dulieu = $dulieu->result_array();
		foreach ($dulieu as $key => $value) {
			# code...
			$kq = $value['cart'];
		}

			return $kq;
		
	}
	public function update_json($dulieu,$is){
		
		$this->db->where('username',$is);
		$dulieu = array(
			'username' => $is,
			'password' => 'admin',
			'email' => 'gacondibo12@gmail.com',
			'sdt' => '0395665638',
			'cart' => $dulieu, 

		);
		return $this->db->update('users',$dulieu);



	}
	// endcart

}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */