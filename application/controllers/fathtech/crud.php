<?php
  /**
   *
   */
  class Crud extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('M_data');
      $this->load->helper('url');
    }

    function index(){
      $data['barang'] = $this->M_data->tampil_data()->result();
      $this->load->view('v_tampil', $data);
    }

    function tambah(){
      $this->load->view('v_input');
    }

    function tambah_aksi(){
		$namabarang = $this->input->post('nama_barang');
		$stokbarang = $this->input->post('stok_barang');
    $tanggalmasuk = $this->input->post('tanggal');

		$data = array(
			'nama_barang' => $namabarang,
			'stok_barang' => $stokbarang,
      'tanggal' => $tanggalmasuk
			);

		$this->M_data->input_data($data,'barang');
		redirect('fathtech/crud/index');
	  }

    function hapus($no_barang=''){
		$where = array('no_barang' => $no_barang);
		$this->M_data->hapus_data($where,'barang');
		redirect('fathtech/crud/index');
	}

    function edit($no_barang=''){
		$where = array('no_barang' => $no_barang);
		$data['barang'] = $this->M_data->edit_data($where,'barang')->result();
		$this->load->view('v_edit',$data);
	 }

   function update(){
	$no_barang = $this->input->post('no_barang');
	$nama_barang = $this->input->post('nama_barang');
	$stok_barang = $this->input->post('stok_barang');

	$data = array(
		'nama_barang' => $nama_barang,
		'stok_barang' => $stok_barang
	);

	$where = array(
		'no_barang' => $no_barang
	);

	$this->M_data->update_data($where,$data,'barang');
	redirect('fathtech/crud/index');
  }

  function beli($no_barang=''){
    $where = array('no_barang' => $no_barang);
		$data['barang'] = $this->M_data->edit_data($where,'barang')->result();
		$this->load->view('v_beli',$data);
  }

  function hitung($barang=''){
    $stok_barang = $this->input->post('stok_barang');

    $data = array(
      'stok_barang' => $stok_barang
    );

    $where = array(
  		'stok_barang' => $stok_barang

  	);

    $data = $barang - $stok_barang;

    $this->M_data->update($where,$field,'barang');
  	redirect('fathtech/crud/index');
  }
}

 ?>
