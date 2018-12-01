<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pengguna_model extends CI_Model
{
    public $table = 'daftar_pengguna';
    public $id = 'id_pengguna';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by('level ASC');
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_pengguna', $q);
        $this->db->or_like('nama_depan', $q);
        $this->db->or_like('nama_belakang', $q);
        $this->db->or_like('email', $q);
        $this->db->or_like('username', $q);
        $this->db->or_like('password', $q);
        $this->db->or_like('level', $q);
    	$this->db->or_like('photo', $q);
    	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_pengguna', $q);
        $this->db->or_like('nama_depan', $q);
        $this->db->or_like('nama_belakang', $q);
        $this->db->or_like('email', $q);
        $this->db->or_like('username', $q);
        $this->db->or_like('password', $q);
        $this->db->or_like('level', $q);
        $this->db->or_like('photo', $q);
    	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        return $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->delete($this->table);
    }
    
}
