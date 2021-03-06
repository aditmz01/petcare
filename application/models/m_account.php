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
		if($this->db->where('username', $username)){
			return $this->db->get('user')->row_array();
		}else{
			return false;
		}
	}
	public function history($username){
		$this->db->select('product');
		$this->db->select('jenis');
		$this->db->select('jumlah');
		$this->db->select('total_transaksi');
		$this->db->from('transaksi');
		$this->db->where('username',$username);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function history_all(){
		$this->db->select('username');
		$this->db->select('product');
		$this->db->select('jenis');
		$this->db->select('jumlah');
		$this->db->select('total_transaksi');
		$this->db->from('transaksi');
		$query = $this->db->get();
		return $query->result_array();
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
		return $this->db->query("UPDATE user SET saldo= saldo + $data WHERE username='$username'");
	}

	public function change_password($username,$data)
	{
		$data = [
			"password" => $this->input->post('passbaru', true),
         ];
		$this->db->where('username', $username);
		return $this->db->update('user', $data);
	}
}