<?php


class PesananController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('PenggunaModel','BayarModel','PesanModel');
		$helper = array('nominal','tgl_indo');
		$this->load->helper($helper);
		$this->load->model($model);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('admin/login'));
		}
	}

	public function index()
	{
		$data = array(
			'transaksi' => $this->BayarModel->lihat_keranjang_faktur_admin()->result_array()
		);
		$this->load->view('backend/templates/header');
		$this->load->view('backend/pesanan/index', $data);
		$this->load->view('backend/templates/footer');
	}
	public function lihat($id){
		$transaksi = $this->BayarModel->lihat_keranjang_faktur_admin_by_id($id)->row_array();
		$konfirmasi = $this->BayarModel->lihat_keranjang_faktur_konfirmasi_admin_by_id($id)->row_array();
//		echo '<pre>';
//		var_dump($konfirmasi);die;
		$data = array(
			'transaksi' => $transaksi,
			'konfirmasi' => $konfirmasi,
			'spanduk' => $this->BayarModel->lihat_keranjang_spanduk($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'stiker' => $this->BayarModel->lihat_keranjang_stiker($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'kartu' => $this->BayarModel->lihat_keranjang_kartu($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'brosur' => $this->BayarModel->lihat_keranjang_brosur($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'a4brosur' => $this->BayarModel->lihat_keranjang_a4brosur($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'a5brosur' => $this->BayarModel->lihat_keranjang_a5brosur($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'a6brosur' => $this->BayarModel->lihat_keranjang_a6brosur($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'kalender' => $this->BayarModel->lihat_keranjang_kalender($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'nota' => $this->BayarModel->lihat_keranjang_nota($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'dtf' => $this->BayarModel->lihat_keranjang_dtf($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'tdtf' => $this->BayarModel->lihat_keranjang_tdtf($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'lbstiker' => $this->BayarModel->lihat_keranjang_lbstiker($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
		);
		$this->load->view('backend/templates/header');
		$this->load->view('backend/pesanan/lihat',$data);
		$this->load->view('backend/templates/footer');
	}
	public function foto($id){
		$data = array(
			'spanduk' => $this->PesanModel->lihat_spanduk_by_id($id),
			'stiker' => $this->PesanModel->lihat_stiker_by_id($id),
			'kartu' => $this->PesanModel->lihat_kartu_by_id($id),
			'brosur' => $this->PesanModel->lihat_brosur_by_id($id),
			'a4brosur' => $this->PesanModel->lihat_a4brosur_by_id($id),
			'a5brosur' => $this->PesanModel->lihat_a5brosur_by_id($id),
			'a6brosur' => $this->PesanModel->lihat_a6brosur_by_id($id),
			'kalender' => $this->PesanModel->lihat_kalender_by_id($id),
			'nota' => $this->PesanModel->lihat_nota_by_id($id),
			'dtf' => $this->PesanModel->lihat_dtf_by_id($id),
			'tdtf' => $this->PesanModel->lihat_tdtf_by_id($id),
			'lbstiker' => $this->PesanModel->lihat_lbstiker_by_id($id),
		);
		$this->load->view('backend/templates/header');
		$this->load->view('backend/pesanan/foto',$data);
		$this->load->view('backend/templates/footer');
	}
	public function desain($id){
		if (isset($_POST['desain'])){
			$desainId = 'DSN-' . substr(time(), 5);

			$config['upload_path'] = './assets/images/desain/';
			$config['allowed_types'] = 'jpg|png|jpeg|zip|rar|pdf';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$desain = $this->upload->data('file_name');

				$data = array(
					'desain_id' => $desainId,
					'desain_produk_id' => $id,
					'desain_foto' => $desain,
					'desain_status' => 'belum',
				);

				$this->PesanModel->simpan('sipesan_desain',$data);
				redirect('admin/pesanan/desain/'.$id);
			}
		} else {
			$data = array(
				'produk' => $this->PesanModel->lihat_desain('sipesan_desain','desain_produk_id',$id),
				'id' => $id
			);
			$this->load->view('backend/templates/header');
			$this->load->view('backend/pesanan/desain',$data);
			$this->load->view('backend/templates/footer');
		}
	}
	public function selesai($id){
		$data = array(
			'desain_status' => 'selesai'
		);
		$this->PesanModel->update('sipesan_desain','desain_produk_id',$id,$data);
		redirect('admin/pesanan/desain/'.$id);
	}
}