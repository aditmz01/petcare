<?php 
class m_product extends CI_Model{

    public function get_all_obat(){

		$this->db->select('*');
		$this->db->from('obat');
		$query = $this->db->get();
		return $query->result();
    }
    public function get_all_makanan(){
        
		$this->db->select('*');
		$this->db->from('makanan');
		$query = $this->db->get();
		return $query->result();
    }

    //obat
    public function tambah_obat($data)
	{
        $data = array(
            'id_obat' => '',
            'nama_obat' => $this->input->post('nama_obat'),
            'deskripsi' => $this->input->post('deskripsi'),
            'stok_obat' => $this->input->post('stok_obat'),
            'harga' => $this->input->post('harga', true),
            'untuk' => $this->input->post('untuk')
        );
  		return $this->db->insert('obat', $data);
    }
    public function edit_obat($id_obat,$data)
	{
		 $data = [
   			"id_obat" => $this->input->post('id_obat', true),
   			"nama_obat" => $this->input->post('nama_obat', true),
   			"deskripsi" => $this->input->post('deskripsi', true),
            "stok_obat" => $this->input->post('stok_obat', true),
            'harga' => $this->input->post('harga', true),
            "untuk" => $this->input->post('untuk', true),
  		];
  		$this->db->where('id_obat', $id_obat);
        return $this->db->update('obat', $data);
	}
    public function hapus_obat($id_obat)
	{
	    $this->db->where('id_obat', $id_obat);
        return $this->db->delete('obat');
    }
    //makanan
    public function tambah_makanan($data)
	{
        $data = array(
            'id_makanan' => '',
            'nama_makanan' => $this->input->post('nama_makanan'),
            'rasa' => $this->input->post('rasa'),
            "untuk" => $this->input->post('untuk', true),
            'harga' => $this->input->post('harga'),
        );
  		return $this->db->insert('makanan', $data);
    }
    public function edit_makanan($id_makanan,$data)
	{
		 $data = [
   			'id_makanan' => $this->input->post('id_makanan', true),
            'nama_makanan' => $this->input->post('nama_makanan'),
            'rasa' => $this->input->post('rasa'),
            "untuk" => $this->input->post('untuk', true),
            'harga' => $this->input->post('harga'),
  		];
  		$this->db->where('id_makanan', $id_makanan);
        return $this->db->update('makanan', $data);
	}
    public function hapus_makanan($id_makanan)
	{
	    $this->db->where('id_makanan', $id_makanan);
        return $this->db->delete('makanan');
	}
}