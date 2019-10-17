<?php
class phantrang extends CI_Controller{
   function __construct()
   {
    parent::__construct();
}
function index(){


   $this->load->library('pagination');
   $this->db->select('*');                  
   $this->db->from('lich_su_don_hang');
   $this->db->order_by('id');          
   $offset=$this->uri->segment(2);    
   $limit= 10;        
   $this->db->limit($limit, $offset);
   $query_poster = $this->db->get();   
// pagination        
   $config['base_url'] = site_url() . '/phantrang/';
   $config['total_rows'] = $this->db->count_all('lich_su_don_hang');
   $config['uri_segment']  = 2;
   $config['per_page'] = $limit;
   $config['prev_link']  = '&lt;';
   $config['next_link']  = '&gt;';
   $config['last_link']  = 'Cuối';
   $config['first_link'] = 'Đầu';
   $this->pagination->initialize($config);
   $paginator=$this->pagination->create_links();  
// End pagination                      
   $ndata = array(
    'paginator'     =>$paginator,
    'post'          =>$query_poster,

); 
   $this->load->view('admin/adminOrder_history',$ndata);             
}


}?>