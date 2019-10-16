<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$data['user1'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$alamat = $this->input->post('alamat');
		$prodi = $this->input->post('prodi');
		$jk = $this->input->post('jk');
		
 
		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'alamat' => $alamat,
			'prodi' => $prodi,
			'jk' => $jk
			);
		$this->m_data->input_data($data,'user1');
		redirect('crud/index');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user1');
		redirect('crud/index');
	}
	function edit($id){
		$where = array('id' => $id);
		$data['user1'] = $this->m_data->edit_data($where,'user1')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$nim = $this->input->post('nim');
	$alamat = $this->input->post('alamat');
	$prodi = $this->input->post('prodi');
	$jk = $this->input->post('jk');


	$data = array(
		'nama' => $nama,
		'nim' => $nim,
		'alamat' => $alamat,
		'prodi' => $prodi,
		'jk' => $jk
	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'user1');
	redirect('crud/index');
}
}