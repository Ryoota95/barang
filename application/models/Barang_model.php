
<?php

class Barang_model extends CI_Model {
    
	function __construct()
    {
        parent::__construct();
    }   
    function get_data($start, $length, $search){
        
        return [$start,$length,$search];
    }
}