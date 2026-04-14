<?php

class buku_model extends CI_Model {

    private $table = 'buku';

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function get_by_id($kode_buku)
    {
        
        $this->db->where('kode_buku', $kode_buku);
        return $this->db->get($this->table)->row();
    }

    public function delete($kode_buku)     
    {
        
        return $this->db->delete($this->table, ['kode_buku' => $kode_buku]);
    }

    public function update($kode_buku, $data)
    {
        
        $this->db->where('kode_buku', $kode_buku);
        return $this->db->update($this->table, $data);
    }
}