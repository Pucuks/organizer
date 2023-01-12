<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Proses extends CI_Model {
  
  public function beli(){
    $id = $this->uri->segment('3');
    return $this->db->query('SELECT * FROM paket WHERE id_pkt = "'.$id.'"')->result();
  }
  
}