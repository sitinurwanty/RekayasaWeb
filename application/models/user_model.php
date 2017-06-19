<?php
class User_model extends CI_Model{

    function simpan_user()
    {
        $simpan_data=array(
            'nama'  => $this->input->post('nama'),
            'ttl'      => $this->input->post('ttl'),
            'nim'      => md5($this->input->post('nim')),
            'jeniskelamin'         => $this->input->post('jeniskelamin'),
            'alamat'        => $this->input->post('alamat'),
            'email'        => $this->input->post('email'),
       );
        $simpan = $this->db->insert('tampildata', $simpan_data);
        return $simpan;
    }
 
    function get_user_all()
    {
        $query=$this->db->query("SELECT * FROM nama ORDER BY nama DESC");
        return $query->result();
    }

    function delete_user($nama)
    {
        $query=$this->db->query("DELETE FROM nama WHERE nama='$nama'");
    }
 
    function edit_user($nama)
    {
        $q="SELECT * FROM  nama WHERE nama='$nama'";
        $query=$this->db->query($q);
        return $query->row();
    }
 
    function simpan_edit_user($id_user, $nama_lengkap, $username, $password, $email, $alamat)
    {
        $data = array(
            'nama'        => $nama,
            'ttl'   => $ttl,
            'nim'       => $nim,
            'jeniskelamin'       => $jeniskelamin,
            'alamat'          => $alamat,     
            'email'         => $email
        );
        $this->db->where('nama', $id_user);
        $this->db->update('nama', $data);    
    }

    function validate()
        { 
            $this->db->where('username', $this->input->post('username'));
            $this->db->where('password', m23($this->input->post('password')));
            $query = $this->db->get('user');
 
            if($query->num_rows == 1)
            {
                return TRUE;
            }
    }
}