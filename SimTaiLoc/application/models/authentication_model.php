<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Authentication_model extends CI_Model{
	
	/* Gán tên bảng cần xử lý*/
	private $_name = 'ci_user';
	private $_name_user = 'users';
	function __construct(){
        parent::__construct();
    } 
    
    /**
     * Get all users in DB
     * @param null
     * @return array
     */
    function a_fCheckUser( $a_UserInfo ){
    	$a_User	=	$this->db->select()
					    	->where('username', $a_UserInfo['username'])
					    	->where('password', $a_UserInfo['password'])
					    	->get($this->_name)
					    	->row_array();
    	if(count($a_User) >0){
    		return $a_User;
    	} else {
    		return false;
    	}
    }
      function a_fCheckUsers( $a_UserInfo ){
        $a_User =   $this->db->select()
                            ->where('username', $a_UserInfo['username'])
                            ->where('password', $a_UserInfo['password'])
                            ->get($this->_name_user)
                            ->row_array();
        if(count($a_User) >0){
            return $a_User;
        } else {
            return false;
        }
    }
  
}
?>