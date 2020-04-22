<?php 
class m_account extends CI_Model{
    
    public function login($data) {
            $query = $this->db->where('username', $data['username'])->where('password', $data['password'])->get('user');
            if($query->num_rows() > 0){
                return true;
            }else{
                return false;
            }
        }
	public function insert_user($data)
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
            "nohp" => $this->input->post('nohp', true),
            "level" => "Member"
		];
        return $this->db->insert('user', $data);
	}
	public function edit_profile($username,$data)
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"nohp" => $this->input->post('nohp', true),
		];
		$this->db->where('username', $username);
		return $this->db->update('user', $data);
	}
    public function get_profile($username){
		//select 1 row profile based on username (from param) and return it, if the data is not found then return false
		//delete if not necessary, it's just there to prevent error
		if($this->db->where('username', $username)){
			return $this->db->get('user')->row_array();
		}else{
			return false;
		}
	}
	public function check_username($username){
		$query = $this->db->where('username',$username)->get('user');
		$count = $query->num_rows();
		if($count > 0){
			return true;
		}else{
			return false;
		}
	}
	public function tf_saldo($username,$data)
	{	
		$data = [
			"saldo" => "saldo" + $this->input->post('saldo', true),
		];
		$this->db->where('username', $username);
		return $this->db->update('user', $data);
	}
}