<?php

class Halaman extends CI_Model{
    
    var $judul = "";
    var $isi = "";
    var $aktif = "";
    var $slug = "";
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function all()
    {
        $query = $this->db->get("halaman");
        return $query->result();
    }
    
    function get_by($value,$by)
    {
        $query = $this->db->get_where("halaman", array($by => $value));
        return $query;
    }
    
    function get_by_multi($array)
    {
        $query = $this->db->get_where("halaman", $array);
        return $query;
    }
    
}
?>