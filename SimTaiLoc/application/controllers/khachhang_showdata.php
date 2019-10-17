<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class khachhang_showdata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("khachhang_model");
	}

	// public function index()
	// {
	// //	$this->load->view('showData_view'); 
	// 	//load cai model
	// 	$this->load->model('khachhang_model');
	// 	// goi ham getdatabase trong model
	// 	$dulieu = $this->khachhang_model->getDatabase();
	// 	$dulieu = array('dulieutucontroller' =>  $dulieu ); // bien du lieu thanh mang voi key = dulieutucontroller 
	// 	// echo "<pre>";
	// 	// var_dump($dulieu);
	// 	$this->load->view('khachhang/khachhang_view', $dulieu, FALSE);

	
 //    }\
	function index(){
        $this->load->library('pagination');
        $this->db->select('*');                  
        $this->db->from('so_sim1');
        $this->db->order_by('id ');          
        $offset=$this->uri->segment(2);    
        $limit= 5;        
        $this->db->limit($limit, $offset);
        $query_poster = $this->db->get();   
// pagination        
        $config['base_url'] = site_url() . '/khachhang_showdata/';
        $config['total_rows'] = $this->db->count_all('so_sim1');
        $config['uri_segment']  = 2;
        $config['per_page'] = $limit;
        $config['prev_link']  = '&lt;';
        $config['next_link']  = '&gt;';
        $config['last_link']  = 'Cuối';
        $config['first_link'] = 'Đầu';
        $this->pagination->initialize($config);
        $paginator=$this->pagination->create_links();  
// End pagination
   		
		$info = $this->session->userdata('user');
		$is = $info['username'];
		$ketqua="";


		// echo "<pre>";
		// var_dump($is);
		// echo "<pre>";
		if ($is) {
   			# code...
   			$ketqua =  $this->khachhang_model->show_cart($is);
			$ketqua = json_decode($ketqua);
   		}


		

		
	

         $ndata = array(
            'paginator'     =>$paginator,
            'post'          =>$query_poster,
            'mangketqua' => $ketqua
            
            );

		// echo "<pre>";
		// var_dump($ketqua);
		// echo "<pre>";
		// $ketqua = array( );
		// $this->load->view('user_/user_shopping/cart_view.php',$ketqua,FALSE);
		// $this->load->view('user_/user_shopping/cart_view.php',$ketqua,FALSE);


  		 $this->load->view('khachhang/khachhang_view_phantrang',$ndata);


  //       $info = $this->session->userdata('user');
		// $is = $info['username'];

		// // echo "<pre>";
		// // var_dump($is);
		// // echo "<pre>";



		
		// $ketqua =  $this->khachhang_model->show_cart($is);
		// $ketqua = json_decode($ketqua);
		// // echo "<pre>";
		// // var_dump($ketqua);
		// // echo "<pre>";
		// $ketqua = array('mangketqua' => $ketqua );
		// $this->load->view('user_/user_shopping/cart_view.php',$ketqua,FALSE); 


                 
        }

	
// them moi gio hang
	public function thanhtoan()

	{




		//
		

			$info = $this->session->userdata('user');
			$is = $info['username'];



			$sdt = $this->input->post('so');

		
			$gia = $this->input->post('gia');
			$nhamang = $this->input->post('nhamang');
			$username = $this->input->post('username');	
			// echo "<pre>";
			// var_dump($sdt);
			// var_dump($gia);
			// var_dump($username);
			// echo "<pre>";


			$dulieu = $this->khachhang_model->show_cart($is);
			//giai ma json thanh mot mang ,true chuyen tu object sang mang
			$dulieu = json_decode($dulieu,true);	
			$con = array(
				'gia'		=>		$gia,
				'sdt' 		=> 		$sdt,
				'nhamang'	=>		$nhamang,
				 );

			// //dua phan tu con vao mang dl
			array_push($dulieu,$con);

			// echo "<pre>";
			// var_dump($dulieu);
			// echo "<pre>";
			$dulieu = json_encode($dulieu);

			if($this->khachhang_model->update_json($dulieu,$is)){
				echo("bạn đã thêm vào giỏ hàng hành công... chờ xử lý!!!");
				echo "<meta http-equiv='refresh' content='1.8;url=http://localhost:8080/simtailoc/index.php/khachhang_showData/cart'>";


			}
		


			
		}



		

		
	
	//view Sim Vietell
	

	public function editsim($idlayve)
	{
		# code...
		$this->load->model('khachhang_model');
		$ketqua = $this->khachhang_model->editById($idlayve);
		$ketqua = array('mangketqua'=>$ketqua);

		$this->load->view('khachhang/addOrder_view', $ketqua, FALSE);
	}
	// 
// tim kiem khach hang
	public function dataSearchUser()
	{
		$gtchon = $this->input->post('cachtimkiem');
		if ($gtchon == 'timso') {




			$so = $this->input->post('gttimkiem');
			$this->load->model('khachhang_model');

			$kqtimkiem = $this->khachhang_model->dataSearchBySo($so);
			// var_dump($kqtimkiem);
			if (empty($kqtimkiem)) {
			// echo 'k tim dc';
				$this->load->view('khachhang/userSearchNull_view');
			}
			else {



				$kqtimkiem = array ('mangkqtimkiem' => $kqtimkiem);
				$this->load->view('khachhang/userSearchOk_view', $kqtimkiem, FALSE);
			}
		}
		else if ($gtchon == 'timgia') {
			$gt = $this->input->post('gttimkiem');
			$this->load->model('khachhang_model');

			$kqtimkiem = $this->khachhang_model->dataSearchByGia($gt);
			//var_dump($kqtimkiem);
			if (empty($kqtimkiem)) {
			//echo 'k tim dc';
				$this->load->view('khachhang/userSearchNull_view');
			}
			else {
				$kqtimkiem = array ('mangkqtimkiem' => $kqtimkiem);
				$this->load->view('khachhang/userSearchOk_view', $kqtimkiem, FALSE);
			}
		}
		elseif ($gtchon == 'timnhamang') {
			$this->load->model('khachhang_model');


			$nm = $this->input->post('gttimkiem');
			$viettel = "http://simthainguyen.vn/images/network/1.gif";
			$mobiphone = "http://simthainguyen.vn/images/network/2.gif";
			$vinaphone = "http://simthainguyen.vn/images/network/3.gif";


			


			if ($nm == 'viettel') {


				// $nm = "http://simthainguyen.vn/images/network/1.gif";
				$this->load->model('khachhang_model');

				$kqtimkiem = $this->khachhang_model->dataSearchByNhaMang($viettel);
				//var_dump($kqtimkiem);
				if (empty($kqtimkiem)) {
				//echo 'k tim dc';
					$this->load->view('khachhang/userSearchNull_view');
				}
				else {
					$kqtimkiem = array ('mangkqtimkiem' => $kqtimkiem);
					$this->load->view('khachhang/viewSimviettell', $kqtimkiem, FALSE);
				}
			}

			if($nm == 'mobiphone') {

			$this->load->model('khachhang_model');
				
				$kqtimkiem = $this->khachhang_model->dataSearchByNhaMang($mobiphone);
				//var_dump($kqtimkiem);
				if (empty($kqtimkiem)) {
				//echo 'k tim dc';
					$this->load->view('khachhang/userSearchNull_view');
				}
				else {
					$kqtimkiem = array ('mangkqtimkiem' => $kqtimkiem);
					$this->load->view('khachhang/userSearchOk_view', $kqtimkiem, FALSE);
			}
			}
			if ($nm == "vinaphone") {
				# code...
				$kqtimkiem = $this->khachhang_model->dataSearchByNhaMang($vinaphone);
			//var_dump($kqtimkiem);
			if (empty($kqtimkiem)) {
			//echo 'k tim dc';
				$this->load->view('khachhang/userSearchNull_view');
			}
			else {
				$kqtimkiem = array ('mangkqtimkiem' => $kqtimkiem);
				$this->load->view('khachhang/viewSimvinaphone', $kqtimkiem, FALSE);
			}
			}

			

			
		}
	}

	public function viewSimviettell()
	{
			
			$nm = "http://simthainguyen.vn/images/network/1.gif";
			$this->load->model('khachhang_model');

			$kqtimkiem = $this->khachhang_model->dataSearchByNhaMang($nm);
			//var_dump($kqtimkiem);
			if (empty($kqtimkiem)) {
			//echo 'k tim dc';
				$this->load->view('khachhang/userSearchNull_view');
			}
			else {
				$kqtimkiem = array ('mangkqtimkiem' => $kqtimkiem);
				$this->load->view('khachhang/viewSimviettell', $kqtimkiem, FALSE);
			}
		
	}
	public function viewSimvinaphone()
	{
			
			$nm = "http://simthainguyen.vn/images/network/3.gif";
			$this->load->model('khachhang_model');

			$kqtimkiem = $this->khachhang_model->dataSearchByNhaMang($nm);
			//var_dump($kqtimkiem);
			if (empty($kqtimkiem)) {
			//echo 'k tim dc';
				$this->load->view('khachhang/userSearchNull_view');
			}
			else {
				$kqtimkiem = array ('mangkqtimkiem' => $kqtimkiem);
				$this->load->view('khachhang/viewSimvinaphone', $kqtimkiem, FALSE);
			}
		
	}
		
	public function viewSimmobifone()
	{
			
			$nm = "http://simthainguyen.vn/images/network/2.gif";
			$this->load->model('khachhang_model');

			$kqtimkiem = $this->khachhang_model->dataSearchByNhaMang($nm);
			//var_dump($kqtimkiem);
			if (empty($kqtimkiem)) {
			//echo 'k tim dc';
				$this->load->view('khachhang/userSearchNull_view');
			}
			else {
				$kqtimkiem = array ('mangkqtimkiem' => $kqtimkiem);
				$this->load->view('khachhang/viewSimmobifone', $kqtimkiem, FALSE);
			}
			
			// var_dump($kqtimkiem);
		
	}

	public function viewSiimVN()
	{
			
			$nm = "http://simthainguyen.vn/images/network/4.gif";
			$this->load->model('khachhang_model');

			$kqtimkiem = $this->khachhang_model->dataSearchByNhaMang($nm);
			//var_dump($kqtimkiem);
			if (empty($kqtimkiem)) {
			//echo 'k tim dc';
				$this->load->view('khachhang/userSearchNull_view');
			}
			else {
				$kqtimkiem = array ('mangkqtimkiem' => $kqtimkiem);
				$this->load->view('khachhang/viewSimVNmobi', $kqtimkiem, FALSE);
			}

	}
	public function viewLienhe(){
		$this->load->view('khachhang/viewLienhe');
	}

	public function viewslide1(){
		$this->load->view('khachhang/viewslide1');
	}
	public function viewslide2(){
		$this->load->view('khachhang/viewslide2');
	}


//cart
	public function cart(){
		// $con = array(
		// 	'ten' => 'tuong',
		// 	'sdt' => '0395',
		// 	 );
		// $con1 = array(
		// 	'ten' => 'long',
		// 	'sdt' => '0396',
		// 	 );

		// //dua phan tu con vao mang dl
		// $dulieu = array();
	
		// array_push($dulieu,$con);
		// array_push($dulieu,$con1);

		// $dulieu = json_encode($dulieu);
		// $this->khachhang_model->update_json($dulieu);
		// echo "<pre>";
		// var_dump($dulieu);
		// echo "<pre>";
		


		$info = $this->session->userdata('user');
		$is = $info['username'];

		// echo "<pre>";
		// var_dump($is);
		// echo "<pre>";



		
		$ketqua =  $this->khachhang_model->show_cart($is);
		$ketqua = json_decode($ketqua);
		// echo "<pre>";
		// var_dump($ketqua);
		// echo "<pre>";
		$ketqua = array('mangketqua' => $ketqua );
		// $this->load->view('user_/user_shopping/cart_view.php',$ketqua,FALSE);
		$this->load->view('user_/user_shopping/cart_view.php',$ketqua,FALSE);


	}
	public function delete_json($sdt){
		//dem do dai cua mang...
		$info = $this->session->userdata('user');
		$username = $info['username'];
			


		$dulieu = $this->khachhang_model->show_cart($username);
		//chuyen object -> array . them true vao sau,
		$dulieu = json_decode($dulieu,true); // chuyen du lieu thanh mang
		// duyet cac phan tu thang mang, so sanh phan tu trung voi $sdt.
		//trung thi dung ham unser(ten mang, key) de xoa no di.
		// echo "<pre>";
		// var_dump($dulieu);
		// echo "<pre>";
		foreach ($dulieu as $key => $value) {
			# code...
			// echo "<pre>";
			// 	var_dump($value);
			// 	echo "<pre>";
			if ($value['sdt'] == $sdt) {
				# code...	

				// echo "<pre>";
				// var_dump($value['sdt']);
				// echo "<pre>";
					// tao ra mang thi value[key]
				//tao ra object thi value->key

				unset($dulieu[$key]);//xoa noi dung neu trung

				
				$dulieu = json_encode($dulieu);
				// return $this->khachhang_model->update_json($dulieu);
				if($this->khachhang_model->update_json($dulieu,$username)){
			header('Location: http://localhost:8080/simtailoc/index.php/khachhang_showdata');
			
		}
				
			}			
		}
		
		//xoa song can cap nhap lai du lieu.
		//viet model cap nhat du lieu.
		
		// echo "<pre>";
		// var_dump($dulieu);
		// echo "<pre>";
		// if($this->khachhang_model->update_json($dulieu)){
			// header('Location: http://localhost:8080/simtailoc/index.php/khachhang_showdata/cart');
			// header('Location: http://localhost/learnphpmvc/bai2dulieu/index.php/ShowData/show');
		// }
	
	}
	//add cart
	public function add_cart(){
		$ten = $this->input->post('ten');
		$sdt = $this->input->post('sdt');
		

		$info = $this->session->userdata('user');
		$is = $info['username'];

		
		// lay du lieu json ra bang cai ham  show_cart
		$dulieu = $this->khachhang_model->show_cart();
		//giai ma json thanh mot mang ,true chuyen tu object sang mang
		$dulieu = json_decode($dulieu,true);

		
		$con = array(
			'ten' => $ten,
			'sdt' => $sdt,
			 );

		//dua phan tu con vao mang dl

	
		array_push($dulieu,$con);

		

		//ma hoa va update csdl
		$dulieu = json_encode($dulieu);
		if($this->khachhang_model->update_json($dulieu,$is)){
			// header('Location: http://localhost:8080/simtailoc/index.php/khachhang_showdata/cart');
			$dulieu = json_decode($dulieu);
			echo "<pre>";
			var_dump($dulieu);
			var_dump($username);
			echo "<pre>";
		}
		
		// $this->khachhang_model->update_json($dulieu);
	}

// thanh toan don hang...//
	public function pay_oder(){
		// dung seesion de lay mang so sim.
		$info = $this->session->userdata('user');
		$is = $info['username'];

	
		
		$ketqua =  $this->khachhang_model->show_cart($is);
		$ketqua = json_decode($ketqua);
		
		$ketqua = array('mangketqua' => $ketqua );
		// $this->load->view('user_/user_shopping/cart_view.php',$ketqua,FALSE);
		// $this->load->view('user_/user_shopping/pay_oder.php',$ketqua,FALSE);
		// lay thong tin khach hang ve

		$ten = $this->input->post('ten');
		$sdt =$info['sdt'];
		$diachi =  $this->input->post('diachi');
		// echo "<pre>";
		// var_dump($ten);
		// echo "<pre>";
		// echo "<pre>";
		// var_dump($is);
		// var_dump($sdt);
		// var_dump($is);
		// echo "<pre>";


		// luu thong tin vao bang don hang va xoa sim tren he thong...
		$this->load->model('addOrder_model');
		$dsCart =  $this->khachhang_model->show_cart($is);
		// $dsCart = json_encode($dsCart);

		if($this ->addOrder_model->insertCart($dsCart,$ten,$sdt,$diachi)){
			$this->load->view('khachhang/order_thanhcong');
					}
		else
		{
			echo "đặt hàng that bai roi";
		}
	}


	//endcart

	

}

/* End of file showData.php */
/* Location: ./application/controllers/showData.php */