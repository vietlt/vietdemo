<?php

class Model extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllBook()
    {
        $query = $this->db->get('tblbooks');
        return $query->result();
    }

    public  function insert($data)
    {
        if($this->db->insert('tblbooks', $data))
            return true;
        else
            return false;
    }

    public function delete($id)
    {
        if($this->db->delete('tblbooks', array('bookId' => $id)))
            return true;
        else
            return false;
    }

    public function get_by($id)
    {
        $this->db->from('tblbooks')->where('bookId', $id);
        return $this->db->get()->result();
    }
}