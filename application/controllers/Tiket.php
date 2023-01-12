<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Proses');
		$this->load->library('form_validation');
		
	}

	public function index() {
		$data['judul']="Codingku| Home";
		$data['username']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('templates/index_header.php', $data);
		$this->load->view('index.php', $data);
		$this->load->view('templates/index_footer.php', $data);
	}
	public function aboutus() {
		$data['judul']="Codingku | About Us";
		$data['username']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('templates/index_header.php', $data);
		$this->load->view('aboutus.php', $data);
		$this->load->view('templates/index_footer.php', $data);
	}
	public function kontak() {
		$data['judul']="Codingku | Kontak";
		$data['username']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('templates/index_header.php', $data);
		$this->load->view('kontak.php', $data);
		$this->load->view('templates/index_footer.php', $data);
	}
	public function paket() {
		$data['username']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
		$data['judul']="Codingku | Daftar Paket";
		$this->load->view('templates/index_header.php', $data);
		$this->load->view('index.php', $data);
		$this->load->view('templates/index_footer.php', $data);
	}
	public function admin() {
		$data['judul']="Codingku | Admin Page";
		$data['tp']=$this->db->get_where('pesanan')->result();
        $data['usersite']=$this->db->get_where('user')->result();
		$data['tdana'] = $this->db->query('SELECT sum(harga) as qq FROM pesanan JOIN user ON pesanan.id = user.id JOIN paket ON pesanan.id_pkt = paket.id_pkt')->result();
		$email=$this->session->userdata('email');
		$data['pesanan']=$this->db->query('SELECT * FROM pesanan JOIN user ON pesanan.id = user.id JOIN paket ON pesanan.id_pkt = paket.id_pkt')->result();
		$data['username']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin_header.php', $data);
		$this->load->view('admin/admin.php', $data);
		$this->load->view('templates/admin_footer.php', $data);
	}
	public function rencanap() {
		$data['judul']="Codingku | Rencana Perjalanan";
		$email=$this->session->userdata('email');
		$data['pesanan']=$this->db->query('SELECT * FROM pesanan JOIN user ON pesanan.id = user.id JOIN paket ON pesanan.id_pkt = paket.id_pkt where user.email = "'.$email.'"')->result();
		$data['username']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin_header.php', $data);
		$this->load->view('rencanap.php', $data);
		$this->load->view('templates/admin_footer.php', $data);
	}
	public function beli() {
		$data['judul']="Codingku | Beli";
		$data['username']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
		$data['penyedia']=$this->Proses->beli();
		
		$this->load->view('templates/index_header.php', $data);
		$this->load->view('beli.php', $data);
		$this->load->view('templates/index_footer.php', $data);
	}
	public function proses_beli() {
		$data['username']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
		$id=$_POST['id'];
		$idpkt=$_POST['idpkt'];
		$tgl=$_POST['tanggal'];
		$this->db->query('INSERT INTO `pesanan` (`id_pesanan`, `id`, `id_pkt`, `tanggal`, `status`) VALUES (NULL, "'.$id.'", "'.$idpkt.'", "'.$tgl.'", "Pembayaran Sukses")');
		redirect('tiket');
	}
	public function batalp(){
		$id = $this->uri->segment('3');
		$this->db->query('UPDATE `pesanan` SET `status` = "Dibatalkan, Menuggu Refund" WHERE `pesanan`.`id_pesanan` = "'.$id.'"');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil dibatalkan!</div>');
		redirect('tiket/rencanap');
	}
	public function ubahdt() {
		$data['judul']="Codingku | Ubah Data";
		$data['tp']=$this->db->get_where('pesanan')->result();
        $data['usersite']=$this->db->get_where('user')->result();
		$data['tdana'] = $this->db->query('SELECT sum(harga) as qq FROM pesanan JOIN user ON pesanan.id = user.id JOIN paket ON pesanan.id_pkt = paket.id_pkt')->result();
		$data['username']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
		$id = $this->uri->segment('3');
		$data['db']=$this->db->query('SELECT * FROM pesanan JOIN user ON pesanan.id = user.id JOIN paket ON pesanan.id_pkt = paket.id_pkt where id_pesanan = "'.$id.'"')->row_array();
		$this->load->view('templates/admin_header.php', $data);
		$this->load->view('admin/ubahdt.php', $data);
		$this->load->view('templates/admin_footer.php', $data);
	}
	public function ubah(){
		$id = $this->uri->segment('3');
		$status = $_POST['status'];
		$this->db->query('UPDATE `pesanan` SET `status` = "'.$status.'" WHERE `pesanan`.`id_pesanan` = "'.$id.'"');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Status berhasil dirubah!</div>');
		redirect('tiket/admin');
	}
	
    }


