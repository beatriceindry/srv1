<?php

class Room_model extends CI_model
{
  public $table_name = 'dok_standar';
  public function __construct()
  {
    parent::__construct();
  }

  public function roomList(){
    $sql = "SELECT * FROM rooms r INNER JOIN roomtype t ON ( r.rtype = t.kode )";

    $query = $this->db->query( $sql );
    return $query->result_array();
  }
}

 ?>
