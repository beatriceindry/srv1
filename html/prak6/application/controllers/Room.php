<?php

/**
 *
 */
class Room extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('room_model');
  }

  public function roomlist()
  {
    $data['judul'] = "PWeb Hotel - Room List";
    $data['rooms'] = $this->room_model->roomList();
    $this->load->view("roomlist", $data);
  }
}
