<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class PesanController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('PesanModel', 'BayarModel');
		$this->load->model($model);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	public function pesanSpanduk()
	{
		if (isset ($_POST['keranjang'])) {
			$spandukId = 'SDK-' . substr(time(), 5);
			$panjang = $this->input->post('panjang');
			$lebar = $this->input->post('lebar');
			$bahan = $this->input->post('bahan');
			$jumlah = $this->input->post('jumlah');
			$estimasi = $this->input->post('estimasi');
			$total = 0;
			if ($bahan == 'Biasa') {
				$total = ($panjang * $lebar) * $jumlah * 20000;
			} elseif ($bahan == 'Menengah') {
				$total = ($panjang * $lebar) * $jumlah * 30000;
			} elseif ($bahan == 'Bagus') {
				$total = ($panjang * $lebar) * $jumlah * 35000;
			}

			$config['upload_path'] = './assets/images/spanduk/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('upload')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$dataSpanduk = array(
					'spanduk_id' => $spandukId,
					'spanduk_panjang' => $panjang,
					'spanduk_lebar' => $lebar,
					'spanduk_bahan' => $bahan,
					'spanduk_jumlah' => $jumlah,
					'spanduk_estimasi' => $estimasi,
					'spanduk_total' => $total,
					'spanduk_foto' => $foto,
				);

				$allCart = $this->BayarModel->lihat_keranjang();
				$undoneCart = $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'), 'belum')->row_array();

				if ($allCart == null) {
					$cartId = 'CRT-' . substr(time(), 5);
					$dataSpanduk['spanduk_keranjang_id'] = $cartId;
					$dataCart = array(
						'keranjang_id' => $cartId,
						'keranjang_pengguna_id' => $this->session->userdata('session_id'),
						'keranjang_total' => $total,
					);
					$this->PesanModel->simpan_spanduk($dataSpanduk);
					$this->BayarModel->simpan_keranjang($dataCart);
					$this->session->set_flashdata('alert', 'pesan_sukses');
					redirect('spanduk');
				} else {
					if ($undoneCart != null) {
						$cartId = $undoneCart['keranjang_id'];
						$cartTotal = $undoneCart['keranjang_total'];
						$dataSpanduk['spanduk_keranjang_id'] = $cartId;
						$dataCart['keranjang_total'] = $cartTotal + $total;

						$this->PesanModel->simpan_spanduk($dataSpanduk);
						$this->BayarModel->update_keranjang($cartId, $dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('spanduk');
					} else {
						$cartId = 'CRT-' . substr(time(), 5);
						$dataSpanduk['spanduk_keranjang_id'] = $cartId;
						$dataCart = array(
							'keranjang_id' => $cartId,
							'keranjang_pengguna_id' => $this->session->userdata('session_id'),
							'keranjang_total' => $total,
						);
						$this->PesanModel->simpan_spanduk($dataSpanduk);
						$this->BayarModel->simpan_keranjang($dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('spanduk');
					}
				}
			}
		}
		$data = array(
			'title' => 'Pesan Spanduk | Nakula Sadewa Digital'
		);
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/pesanan/spanduk');
		$this->load->view('frontend/templates/footer');
	}
	public function pesanStiker()
	{

		if (isset ($_POST['keranjang'])) {
			$stikerId = 'SKR-' . substr(time(), 5);
			$panjang = $this->input->post('panjang');
			$lebar = $this->input->post('lebar');
			$bahan = $this->input->post('bahan');
			$jumlah = $this->input->post('jumlah');
			$estimasi = $this->input->post('estimasi');
			$total = 0;
			if ($bahan == 'biasa') {
				$total = ($panjang * $lebar) * $jumlah * 75000;
			} elseif ($bahan == 'bagus') {
				$total = ($panjang * $lebar) * $jumlah * 95000;
			}

			$config['upload_path'] = './assets/images/stiker/';
			$config['allowed_types'] = 'jpg|png|jpeg|zip|rar|pdf';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('upload')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$dataStiker = array(
					'stiker_id' => $stikerId,
					'stiker_panjang' => $panjang,
					'stiker_lebar' => $lebar,
					'stiker_bahan' => $bahan,
					'stiker_jumlah' => $jumlah,
					'stiker_estimasi' => $estimasi,
					'stiker_total' => $total,
					'stiker_foto' => $foto,
				);

				$allCart = $this->BayarModel->lihat_keranjang();
				$undoneCart = $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'), 'belum')->row_array();

				if ($allCart == null) {
					$cartId = 'CRT-' . substr(time(), 5);
					$dataStiker['stiker_keranjang_id'] = $cartId;
					$dataCart = array(
						'keranjang_id' => $cartId,
						'keranjang_pengguna_id' => $this->session->userdata('session_id'),
						'keranjang_total' => $total,
					);
					$this->PesanModel->simpan_stiker($dataStiker);
					$this->BayarModel->simpan_keranjang($dataCart);
					$this->session->set_flashdata('alert', 'pesan_sukses');
					redirect('stiker');
				} else {
					if ($undoneCart != null) {
						$cartId = $undoneCart['keranjang_id'];
						$cartTotal = $undoneCart['keranjang_total'];
						$dataStiker['stiker_keranjang_id'] = $cartId;
						$dataCart['keranjang_total'] = $cartTotal + $total;

						$this->PesanModel->simpan_stiker($dataStiker);
						$this->BayarModel->update_keranjang($cartId, $dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('stiker');
					} else {
						$cartId = 'CRT-' . substr(time(), 5);
						$dataStiker['stiker_keranjang_id'] = $cartId;
						$dataCart = array(
							'keranjang_id' => $cartId,
							'keranjang_pengguna_id' => $this->session->userdata('session_id'),
							'keranjang_total' => $total,
						);
						$this->PesanModel->simpan_stiker($dataStiker);
						$this->BayarModel->simpan_keranjang($dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('stiker');
					}
				}
			}
		}
		$data = array(
			'title' => 'Pesan Stiker | Nakula Sadewa Digital'
		);
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/pesanan/stiker');
		$this->load->view('frontend/templates/footer');
	}
	public function pesanKartu()
	{

		if (isset ($_POST['keranjang'])) {
			$kartuId = 'CRD-' . substr(time(), 5);
			$bahan = $this->input->post('bahan');
			$jumlah = $this->input->post('jumlah');
			$estimasi = $this->input->post('estimasi');
			$total = 0;
			if ($bahan == 'biasa') {
				$total = $jumlah * 35000;
			} elseif ($bahan == 'bagus') {
				$total = $jumlah * 45000;
			}

			$config['upload_path'] = './assets/images/kartu/';
			$config['allowed_types'] = 'jpg|png|jpeg|zip|rar|pdf';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('upload')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$dataKartu = array(
					'kartu_id' => $kartuId,
					'kartu_bahan' => $bahan,
					'kartu_jumlah' => $jumlah,
					'kartu_estimasi' => $estimasi,
					'kartu_total' => $total,
					'kartu_foto' => $foto,
				);

				$allCart = $this->BayarModel->lihat_keranjang();
				$undoneCart = $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'), 'belum')->row_array();

				if ($allCart == null) {
					$cartId = 'CRT-' . substr(time(), 5);
					$dataKartu['kartu_keranjang_id'] = $cartId;
					$dataCart = array(
						'keranjang_id' => $cartId,
						'keranjang_pengguna_id' => $this->session->userdata('session_id'),
						'keranjang_total' => $total,
					);
					$this->PesanModel->simpan_kartu($dataKartu);
					$this->BayarModel->simpan_keranjang($dataCart);
					$this->session->set_flashdata('alert', 'pesan_sukses');
					redirect('kartu');
				} else {
					if ($undoneCart != null) {
						$cartId = $undoneCart['keranjang_id'];
						$cartTotal = $undoneCart['keranjang_total'];
						$dataKartu['kartu_keranjang_id'] = $cartId;
						$dataCart['keranjang_total'] = $cartTotal + $total;

						$this->PesanModel->simpan_kartu($dataKartu);
						$this->BayarModel->update_keranjang($cartId, $dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('kartu');
					} else {
						$cartId = 'CRT-' . substr(time(), 5);
						$dataKartu['kartu_keranjang_id'] = $cartId;
						$dataCart = array(
							'keranjang_id' => $cartId,
							'keranjang_pengguna_id' => $this->session->userdata('session_id'),
							'keranjang_total' => $total,
						);
						$this->PesanModel->simpan_kartu($dataKartu);
						$this->BayarModel->simpan_keranjang($dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('kartu');
					}
				}
			}
		}
		$data = array(
			'title' => 'Pesan Kartu Nama | Nakula Sadewa Digital'
		);
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/pesanan/kartu');
		$this->load->view('frontend/templates/footer');
	}
	public function pesanBrosur()
	{

		if (isset ($_POST['keranjang'])) {
			$brosurId = 'CRD-' . substr(time(), 5);
			$bahan = $this->input->post('bahan');
			$jumlah = $this->input->post('jumlah');
			$estimasi = $this->input->post('estimasi');
			$total = 0;
			if ($bahan == 'biasa') {
				$total = $jumlah * 15000;
			} elseif ($bahan == 'bagus') {
				$total = $jumlah * 25000;
			}

			$config['upload_path'] = './assets/images/brosur/';
			$config['allowed_types'] = 'jpg|png|jpeg|zip|rar|pdf';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('upload')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$dataBrosur = array(
					'brosur_id' => $brosurId,
					'brosur_bahan' => $bahan,
					'brosur_jumlah' => $jumlah,
					'brosur_estimasi' => $estimasi,
					'brosur_total' => $total,
					'brosur_foto' => $foto,
				);

				$allCart = $this->BayarModel->lihat_keranjang();
				$undoneCart = $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'), 'belum')->row_array();

				if ($allCart == null) {
					$cartId = 'CRT-' . substr(time(), 5);
					$dataBrosur['brosur_keranjang_id'] = $cartId;
					$dataCart = array(
						'keranjang_id' => $cartId,
						'keranjang_pengguna_id' => $this->session->userdata('session_id'),
						'keranjang_total' => $total,
					);
					$this->PesanModel->simpan_brosur($dataBrosur);
					$this->BayarModel->simpan_keranjang($dataCart);
					$this->session->set_flashdata('alert', 'pesan_sukses');
					redirect('brosur');
				} else {
					if ($undoneCart != null) {
						$cartId = $undoneCart['keranjang_id'];
						$cartTotal = $undoneCart['keranjang_total'];
						$dataBrosur['brosur_keranjang_id'] = $cartId;
						$dataCart['keranjang_total'] = $cartTotal + $total;

						$this->PesanModel->simpan_brosur($dataBrosur);
						$this->BayarModel->update_keranjang($cartId, $dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('brosur');
					} else {
						$cartId = 'CRT-' . substr(time(), 5);
						$dataBrosur['brosur_keranjang_id'] = $cartId;
						$dataCart = array(
							'keranjang_id' => $cartId,
							'keranjang_pengguna_id' => $this->session->userdata('session_id'),
							'keranjang_total' => $total,
						);
						$this->PesanModel->simpan_brosur($dataBrosur);
						$this->BayarModel->simpan_keranjang($dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('brosur');
					}
				}
			}
		}
		$data = array(
			'title' => 'Pesan Brosur Nama | Nakula Sadewa Digital'
		);
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/pesanan/brosur');
		$this->load->view('frontend/templates/footer');
	}
	public function pesanA4brosur()
	{

		if (isset ($_POST['keranjang'])) {
			$a4brosurId = 'A4B-' . substr(time(), 5);
			$bahan = $this->input->post('bahan');
			$sisi = $this->input->post('sisi');
			$laminasi = $this->input->post('laminasi');
			$lipat = $this->input->post('lipat');
			$jumlah = $this->input->post('jumlah');
			$estimasi = $this->input->post('estimasi');
			$total = 0;
			
			if ($bahan === "HVS 100") {
				if ($sisi === "1 Muka" && $lipat === "Tanpa Lipat") {
					$total = $jumlah * 380000;
				} else if ($sisi === "1 Muka" && $lipat === "Lipat") {
					$total = $jumlah * 430000;
				}
				if ($sisi === "2 Muka" && $lipat === "Tanpa Lipat") {
					$total = $jumlah * 760000;
				} else if ($sisi === "2 Muka" && $lipat === "Lipat") {
					$total = $jumlah * 810000;
				}
			}

			if ($bahan === "Art Paper 120"){
				if ($sisi === "1 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Tanpa Lipat") {
					$total = $jumlah * 400000;
				} else if ($sisi === "1 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Lipat") {
					$total = $jumlah * 450000;
			}
				if ($sisi === "2 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Tanpa Lipat") {
					$total = $jumlah * 800000;
				} else if ($sisi === "2 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Lipat") {
					$total = $jumlah * 850000;
			}
		}
			if ($bahan === "Art Paper 150"){
				if ($sisi === "1 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Tanpa Lipat") {
					$total = $jumlah * 420000;
				} else if ($sisi === "1 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Lipat") {
					$total = $jumlah * 470000;
			}
				if ($sisi === "2 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Tanpa Lipat") {
					$total = $jumlah * 840000;
				} else if ($sisi === "2 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Lipat") {
					$total = $jumlah * 890000;
			}
		}
		
			if ($bahan === "Art Carton 210") {
				if (
					$sisi === "1 Muka" &&
					$laminasi === "Tanpa Laminasi" &&
					$lipat === "Tanpa Lipat"
				) {
					$total = $jumlah * 550000;
				} else if (
					$sisi === "1 Muka" &&
					$laminasi === "Tanpa Laminasi" &&
					$lipat === "Lipat"
				) {
					$total = $jumlah * 600000;
				} else if (
					$sisi === "1 Muka" &&
					$laminasi !== "Tanpa Laminasi" &&
					$lipat === "Tanpa Lipat"
				) {
					$total = $jumlah * 675000;
				} else if (
					$sisi === "1 Muka" &&
					$laminasi !== "Tanpa Laminasi" &&
					$lipat === "Lipat"
				) {
					$total = $jumlah * 725000;
				}
				if (
					$sisi === "2 Muka" &&
					$laminasi === "Tanpa Laminasi" &&
					$lipat === "Tanpa Lipat"
				) {
					$total = $jumlah * 1100000;
				} else if (
					$sisi === "2 Muka" &&
					$laminasi === "Tanpa Laminasi" &&
					$lipat === "Lipat"
				) {
					$total = $jumlah * 1150000;
				} else if (
					$sisi === "2 Muka" &&
					$laminasi !== "Tanpa Laminasi" &&
					$lipat === "Tanpa Lipat"
				) {
					$total = $jumlah * 1350000;
				} else if (
					$sisi === "2 Muka" &&
					$laminasi !== "Tanpa Laminasi" &&
					$lipat === "Lipat"
				) {
					$total = $jumlah * 1400000;
				}
			}
		
		



			$config['upload_path'] = './assets/images/a4brosur/';
			$config['allowed_types'] = 'jpg|png|jpeg|zip|rar|pdf';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('upload')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$dataA4brosur = array(
					'a4brosur_id' => $a4brosurId,
					'a4brosur_bahan' => $bahan,
					'a4brosur_sisi' => $sisi,
					'a4brosur_laminasi' => $laminasi,
					'a4brosur_lipat' => $lipat,
					'a4brosur_jumlah' => $jumlah,
					'a4brosur_estimasi' => $estimasi,
					'a4brosur_total' => $total,
					'a4brosur_foto' => $foto,
				);

				$allCart = $this->BayarModel->lihat_keranjang();
				$undoneCart = $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'), 'belum')->row_array();

				if ($allCart == null) {
					$cartId = 'A4B-' . substr(time(), 5);
					$dataA4brosur['a4brosur_keranjang_id'] = $cartId;
					$dataCart = array(
						'keranjang_id' => $cartId,
						'keranjang_pengguna_id' => $this->session->userdata('session_id'),
						'keranjang_total' => $total,
					);
					$this->PesanModel->simpan_a4brosur($dataA4brosur);
					$this->BayarModel->simpan_keranjang($dataCart);
					$this->session->set_flashdata('alert', 'pesan_sukses');
					redirect('a4brosur');
				} else {
					if ($undoneCart != null) {
						$cartId = $undoneCart['keranjang_id'];
						$cartTotal = $undoneCart['keranjang_total'];
						$dataA4brosur['a4brosur_keranjang_id'] = $cartId;
						$dataCart['keranjang_total'] = $cartTotal + $total;

						$this->PesanModel->simpan_a4brosur($dataA4brosur);
						$this->BayarModel->update_keranjang($cartId, $dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('a4brosur');
					} else {
						$cartId = 'A4B-' . substr(time(), 5);
						$dataA4brosur['a4brosur_keranjang_id'] = $cartId;
						$dataCart = array(
							'keranjang_id' => $cartId,
							'keranjang_pengguna_id' => $this->session->userdata('session_id'),
							'keranjang_total' => $total,
						);
						$this->PesanModel->simpan_a4brosur($dataA4brosur);
						$this->BayarModel->simpan_keranjang($dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('a4brosur');
					}
				}
			}
		}
		$data = array(
			'title' => 'Pesan Brosur A4 | Nakula Sadewa Digital'
		);
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/pesanan/a4brosur');
		$this->load->view('frontend/templates/footer');
	}
	public function pesanA5brosur()
	{

		if (isset ($_POST['keranjang'])) {
			$a5brosurId = 'A4B-' . substr(time(), 5);
			$bahan = $this->input->post('bahan');
			$sisi = $this->input->post('sisi');
			$laminasi = $this->input->post('laminasi');
			$lipat = $this->input->post('lipat');
			$jumlah = $this->input->post('jumlah');
			$estimasi = $this->input->post('estimasi');
			$total = 0;
			
			if ($bahan === "HVS 100") {
				if ($sisi === "1 Muka" && $lipat === "Tanpa Lipat") {
					$total = $jumlah * 380000;
				} else if ($sisi === "1 Muka" && $lipat === "Lipat") {
					$total = $jumlah * 430000;
				}
				if ($sisi === "2 Muka" && $lipat === "Tanpa Lipat") {
					$total = $jumlah * 760000;
				} else if ($sisi === "2 Muka" && $lipat === "Lipat") {
					$total = $jumlah * 810000;
				}
			}

			if ($bahan === "Art Paper 120"){
				if ($sisi === "1 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Tanpa Lipat") {
					$total = $jumlah * 400000;
				} else if ($sisi === "1 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Lipat") {
					$total = $jumlah * 450000;
			}
				if ($sisi === "2 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Tanpa Lipat") {
					$total = $jumlah * 800000;
				} else if ($sisi === "2 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Lipat") {
					$total = $jumlah * 850000;
			}
		}
			if ($bahan === "Art Paper 150"){
				if ($sisi === "1 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Tanpa Lipat") {
					$total = $jumlah * 420000;
				} else if ($sisi === "1 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Lipat") {
					$total = $jumlah * 470000;
			}
				if ($sisi === "2 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Tanpa Lipat") {
					$total = $jumlah * 840000;
				} else if ($sisi === "2 Muka" && $laminasi === "Tanpa Laminasi" && $lipat === "Lipat") {
					$total = $jumlah * 890000;
			}
		}
		
			if ($bahan === "Art Carton 210") {
				if (
					$sisi === "1 Muka" &&
					$laminasi === "Tanpa Laminasi" &&
					$lipat === "Tanpa Lipat"
				) {
					$total = $jumlah * 550000;
				} else if (
					$sisi === "1 Muka" &&
					$laminasi === "Tanpa Laminasi" &&
					$lipat === "Lipat"
				) {
					$total = $jumlah * 600000;
				} else if (
					$sisi === "1 Muka" &&
					$laminasi !== "Tanpa Laminasi" &&
					$lipat === "Tanpa Lipat"
				) {
					$total = $jumlah * 675000;
				} else if (
					$sisi === "1 Muka" &&
					$laminasi !== "Tanpa Laminasi" &&
					$lipat === "Lipat"
				) {
					$total = $jumlah * 725000;
				}
				if (
					$sisi === "2 Muka" &&
					$laminasi === "Tanpa Laminasi" &&
					$lipat === "Tanpa Lipat"
				) {
					$total = $jumlah * 1100000;
				} else if (
					$sisi === "2 Muka" &&
					$laminasi === "Tanpa Laminasi" &&
					$lipat === "Lipat"
				) {
					$total = $jumlah * 1150000;
				} else if (
					$sisi === "2 Muka" &&
					$laminasi !== "Tanpa Laminasi" &&
					$lipat === "Tanpa Lipat"
				) {
					$total = $jumlah * 1350000;
				} else if (
					$sisi === "2 Muka" &&
					$laminasi !== "Tanpa Laminasi" &&
					$lipat === "Lipat"
				) {
					$total = $jumlah * 1400000;
				}
			}
		
		



			$config['upload_path'] = './assets/images/a5brosur/';
			$config['allowed_types'] = 'jpg|png|jpeg|zip|rar|pdf';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('upload')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$dataA5brosur = array(
					'a5brosur_id' => $a5brosurId,
					'a5brosur_bahan' => $bahan,
					'a5brosur_sisi' => $sisi,
					'a5brosur_laminasi' => $laminasi,
					'a5brosur_lipat' => $lipat,
					'a5brosur_jumlah' => $jumlah,
					'a5brosur_estimasi' => $estimasi,
					'a5brosur_total' => $total,
					'a5brosur_foto' => $foto,
				);

				$allCart = $this->BayarModel->lihat_keranjang();
				$undoneCart = $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'), 'belum')->row_array();

				if ($allCart == null) {
					$cartId = 'A4B-' . substr(time(), 5);
					$dataA5brosur['a5brosur_keranjang_id'] = $cartId;
					$dataCart = array(
						'keranjang_id' => $cartId,
						'keranjang_pengguna_id' => $this->session->userdata('session_id'),
						'keranjang_total' => $total,
					);
					$this->PesanModel->simpan_a5brosur($dataA5brosur);
					$this->BayarModel->simpan_keranjang($dataCart);
					$this->session->set_flashdata('alert', 'pesan_sukses');
					redirect('a5brosur');
				} else {
					if ($undoneCart != null) {
						$cartId = $undoneCart['keranjang_id'];
						$cartTotal = $undoneCart['keranjang_total'];
						$dataA5brosur['a5brosur_keranjang_id'] = $cartId;
						$dataCart['keranjang_total'] = $cartTotal + $total;

						$this->PesanModel->simpan_a5brosur($dataA5brosur);
						$this->BayarModel->update_keranjang($cartId, $dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('a5brosur');
					} else {
						$cartId = 'A4B-' . substr(time(), 5);
						$dataA5brosur['a5brosur_keranjang_id'] = $cartId;
						$dataCart = array(
							'keranjang_id' => $cartId,
							'keranjang_pengguna_id' => $this->session->userdata('session_id'),
							'keranjang_total' => $total,
						);
						$this->PesanModel->simpan_a5brosur($dataA5brosur);
						$this->BayarModel->simpan_keranjang($dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('a5brosur');
					}
				}
			}
		}
		$data = array(
			'title' => 'Pesan Brosur A4 | Nakula Sadewa Digital'
		);
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/pesanan/a5brosur');
		$this->load->view('frontend/templates/footer');
	}

	public function pesanKalender()
	{

		if (isset ($_POST['keranjang'])) {
			$kalenderId = 'KLD-' . substr(time(), 5);
			$bahan = $this->input->post('bahan');
			$isi = $this->input->post('isi');
			$laminasi = $this->input->post('laminasi');
			$jumlah = $this->input->post('jumlah');
			$estimasi = $this->input->post('estimasi');
			$total = 0;

			if ($bahan === "AC230") {
				if ($isi === "7 Lembar" && $laminasi === "Tanpa Laminasi") {
					$total = $jumlah * 39000;
				} else if ($isi === "13 Lembar" && $laminasi === "Tanpa Laminasi") {
					$total = $jumlah * 49500;
				}
				if ($isi === "7 Lembar" && $laminasi !== "Tanpa Laminasi") {
					$total = $jumlah * 49000;
				} else if ($isi === "13 Lembar" && $laminasi !== "Tanpa Laminasi") {
					$total = $jumlah * 69500;
				}
			}
			if ($bahan === "AC260") {
				if ($isi === "7 Lembar" && $laminasi === "Tanpa Laminasi") {
					$total = $jumlah * 40200;
				} else if ($isi === "13 Lembar" && $laminasi === "Tanpa Laminasi") {
					$total = $jumlah * 51600;
				}
				if ($isi === "7 Lembar" && $laminasi !== "Tanpa Laminasi") {
					$total = $jumlah * 50200;
				} else if ($isi === "13 Lembar" && $laminasi !== "Tanpa Laminasi") {
					$total = $jumlah * 71600;
				}
			}

			if ($bahan === "BCT" || $bahan === "B/W" || $bahan === "LINEN") {
				if ($isi === "7 Lembar") {
					$total = $jumlah * 42200;
				} else $total = $jumlah * 55100;
			}
		
			
			// if ($bahan == 'AC360' && $isi == '7 Lembar' && $laminasi == "Tanpa Laminasi") {
			// 	$total = $jumlah * 40200;
			// } else if ($bahan == 'AC360' && $isi == '7 Lembar' && $laminasi == "Doff" || $laminasi == "Glossy") {
			// 	$total = $jumlah * 50200;
			// }

			// if ($bahan == 'BCT' && $isi == '7 Lembar' && $laminasi == "Tanpa Laminasi") {
			// 	$total = $jumlah * 42200;
			// } else if ($bahan == 'BCT' && $isi == '7 Lembar' && $laminasi == "Doff" || $laminasi == "Glossy") {
			// 	$total = $jumlah * 52200;
			// }

			// if ($bahan == 'B/W' && $isi == '7 Lembar' && $laminasi == "Tanpa Laminasi") {
			// 	$total = $jumlah * 42200;
			// } else if ($bahan == 'B/W' && $isi == '7 Lembar' && $laminasi == "Doff" || $laminasi == "Glossy") {
			// 	$total = $jumlah * 52200;
			// }

			// if ($bahan == 'LINEN' && $isi == '7 Lembar' && $laminasi == "Tanpa Laminasi") {
			// 	$total = $jumlah * 42200;
			// } else if ($bahan == 'LINEN' && $isi == '7 Lembar' && $laminasi == "Doff" || $laminasi == "Glossy") {
			// 	$total = $jumlah * 52200;
			// }

			// if ($bahan == 'AC230' && $isi == '13 Lembar' && $laminasi == "Tanpa Laminasi") {
			// 	$total = $jumlah * 49500;
			// } else if ($bahan == 'AC230' && $isi == '13 Lembar' && $laminasi == "Doff" || $laminasi == "Glossy") {
			// 	$total = $jumlah * 59500;
			// }

			// if ($bahan == 'AC360' && $isi == '13 Lembar' && $laminasi == "Tanpa Laminasi") {
			// 	$total = $jumlah * 51600;
			// } else if ($bahan == 'AC360' && $isi == '13 Lembar' && $laminasi == "Doff" || $laminasi == "Glossy") {
			// 	$total = $jumlah * 61600;
			// }

			// if ($bahan == 'BCT' && $isi == '13 Lembar' && $laminasi == "Tanpa Laminasi") {
			// 	$total = $jumlah * 55100;
			// } else if ($bahan == 'BCT' && $isi == '13 Lembar' && $laminasi == "Doff" || $laminasi == "Glossy") {
			// 	$total = $jumlah * 65100;
			// }

			// if ($bahan == 'B/W' && $isi == '13 Lembar' && $laminasi == "Tanpa Laminasi") {
			// 	$total = $jumlah * 55100;
			// } else if ($bahan == 'B/W' && $isi == '13 Lembar' && $laminasi == "Doff" || $laminasi == "Glossy") {
			// 	$total = $jumlah * 65100;
			// }

			// if ($bahan == 'LINEN' && $isi == '13 Lembar' && $laminasi == "Tanpa Laminasi") {
			// 	$total = $jumlah * 55100;
			// } else if ($bahan == 'LINEN' && $isi == '13 Lembar' && $laminasi == "Doff" || $laminasi == "Glossy") {
			// 	$total = $jumlah * 65100;
			// }

			$config['upload_path'] = './assets/images/kalender/';
			$config['allowed_types'] = 'jpg|png|jpeg|zip|rar|pdf';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('upload')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$dataKalender = array(
					'kalender_id' => $kalenderId,
					'kalender_bahan' => $bahan,
					'kalender_isi' => $isi,
					'kalender_laminasi' => $laminasi,
					'kalender_jumlah' => $jumlah,
					'kalender_estimasi' => $estimasi,
					'kalender_total' => $total,
					'kalender_foto' => $foto,
				);

				$allCart = $this->BayarModel->lihat_keranjang();
				$undoneCart = $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'), 'belum')->row_array();

				if ($allCart == null) {
					$cartId = 'KLD-' . substr(time(), 5);
					$dataKalender['kalender_keranjang_id'] = $cartId;
					$dataCart = array(
						'keranjang_id' => $cartId,
						'keranjang_pengguna_id' => $this->session->userdata('session_id'),
						'keranjang_total' => $total,
					);
					$this->PesanModel->simpan_kalender($dataKalender);
					$this->BayarModel->simpan_keranjang($dataCart);
					$this->session->set_flashdata('alert', 'pesan_sukses');
					redirect('kalender');
				} else {
					if ($undoneCart != null) {
						$cartId = $undoneCart['keranjang_id'];
						$cartTotal = $undoneCart['keranjang_total'];
						$dataKalender['kalender_keranjang_id'] = $cartId;
						$dataCart['keranjang_total'] = $cartTotal + $total;

						$this->PesanModel->simpan_kalender($dataKalender);
						$this->BayarModel->update_keranjang($cartId, $dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('kalender');
					} else {
						$cartId = 'KLD-' . substr(time(), 5);
						$dataKalender['kalender_keranjang_id'] = $cartId;
						$dataCart = array(
							'keranjang_id' => $cartId,
							'keranjang_pengguna_id' => $this->session->userdata('session_id'),
							'keranjang_total' => $total,
						);
						$this->PesanModel->simpan_kalender($dataKalender);
						$this->BayarModel->simpan_keranjang($dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('kalender');
					}
				}
			}
		}


		$data = array(
			'title' => 'Pesan Kalender | Nakula Sadewa Digital'
		);
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/pesanan/kalender');
		$this->load->view('frontend/templates/footer');
	}
	public function pesanNota()
	{

		if (isset ($_POST['keranjang'])) {
			$notaId = 'NOT-' . substr(time(), 5);
			$warna = $this->input->post('warna');
			$ukuran = $this->input->post('ukuran');
			$rangkap = $this->input->post('rangkap');
			$jumlah = $this->input->post('jumlah');
			$estimasi = $this->input->post('estimasi');
			$total = 0;
				if($warna == 'Full Warna' && $ukuran == "A5" && $rangkap == 'rangkap 2'){
						$total = $jumlah * 40000;
					} 
				if ( $warna == 'Full Warna' && $ukuran == "A5" && $rangkap == 'rangkap 3'){
						$total = $jumlah * 55000;
					}
				if ( $warna == 'Full Warna' && $ukuran == "A5" && $rangkap == 'rangkap 4'){
						$total = $jumlah * 57000;
					}
			
				if($warna == 'Full Warna' && $ukuran == "A6" && $rangkap == 'rangkap 2'){
						$total = $jumlah * 25000;
					} 
				if ( $warna == 'Full Warna' && $ukuran == "A6" && $rangkap == 'rangkap 3'){
						$total = $jumlah * 32500;
					}
				if ( $warna == 'Full Warna' && $ukuran == "A6" && $rangkap == 'rangkap 4'){
						$total = $jumlah * 40000;
					}
			
				if($warna == 'Full Warna' && $ukuran == "1/3 F4" && $rangkap == 'rangkap 2'){
						$total = $jumlah * 35000;
					} 
				if ( $warna == 'Full Warna' && $ukuran == "1/3 F4" && $rangkap == 'rangkap 3'){
						$total = $jumlah * 45000;
					}
				if ( $warna == 'Full Warna' && $ukuran == "1/3 F4" && $rangkap == 'rangkap 4'){
						$total = $jumlah * 53500;
					}
			
				if($warna == 'Full Warna' && $ukuran == "F4" && $rangkap == 'rangkap 2'){
						$total = $jumlah * 80000;
					} 
				if ( $warna == 'Full Warna' && $ukuran == "F4" && $rangkap == 'rangkap 3'){
						$total = $jumlah * 110000;
					}
				if ( $warna == 'Full Warna' && $ukuran == "F4" && $rangkap == 'rangkap 4'){
						$total = $jumlah * 150000;
					}
			
				if($warna == 'Hitam Putih' && $ukuran == "A5" && $rangkap == 'rangkap 2'){
						$total = $jumlah * 30000;
					} 
				if ( $warna == 'Hitam Putih' && $ukuran == "A5" && $rangkap == 'rangkap 3'){
						$total = $jumlah * 40000;
					}
				if ( $warna == 'Hitam Putih' && $ukuran == "A5" && $rangkap == 'rangkap 4'){
						$total = $jumlah * 55000;
					}
			
				if($warna == 'Hitam Putih' && $ukuran == "A6" && $rangkap == 'rangkap 2'){
						$total = $jumlah * 18000;
					} 
				if ( $warna == 'Hitam Putih' && $ukuran == "A6" && $rangkap == 'rangkap 3'){
						$total = $jumlah * 25000;
					}
				if ( $warna == 'Hitam Putih' && $ukuran == "A6" && $rangkap == 'rangkap 4'){
						$total = $jumlah * 32500;
					}
			
				if($warna == 'Hitam Putih' && $ukuran == "1/3 F4" && $rangkap == 'rangkap 2'){
						$total = $jumlah * 24000;
					} 
				if ( $warna == 'Hitam Putih' && $ukuran == "1/3 F4" && $rangkap == 'rangkap 3'){
						$total = $jumlah * 35000;
					}
				if ( $warna == 'Hitam Putih' && $ukuran == "1/3 F4" && $rangkap == 'rangkap 4'){
						$total = $jumlah * 45000;
					}
			
				if($warna == 'Hitam Putih' && $ukuran == "F4" && $rangkap == 'rangkap 2'){
						$total = $jumlah * 60000;
					} 
				if ( $warna == 'Hitam Putih' && $ukuran == "F4" && $rangkap == 'rangkap 3'){
						$total = $jumlah * 80000;
					}
				if ( $warna == 'Hitam Putih' && $ukuran == "F4" && $rangkap == 'rangkap 4'){
						$total = $jumlah * 110000;
					}


			$config['upload_path'] = './assets/images/nota/';
			$config['allowed_types'] = 'jpg|png|jpeg|zip|rar|pdf';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('upload')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$dataNota = array(
					'nota_id' => $notaId,
					'nota_warna' => $warna,
					'nota_ukuran' => $ukuran,
					'nota_rangkap' => $rangkap,
					'nota_jumlah' => $jumlah,
					'nota_estimasi' => $estimasi,
					'nota_total' => $total,
					'nota_foto' => $foto,
				);

				$allCart = $this->BayarModel->lihat_keranjang();
				$undoneCart = $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'), 'belum')->row_array();

				if ($allCart == null) {
					$cartId = 'NOT-' . substr(time(), 5);
					$dataNota['nota_keranjang_id'] = $cartId;
					$dataCart = array(
						'keranjang_id' => $cartId,
						'keranjang_pengguna_id' => $this->session->userdata('session_id'),
						'keranjang_total' => $total,
					);
					$this->PesanModel->simpan_nota($dataNota);
					$this->BayarModel->simpan_keranjang($dataCart);
					$this->session->set_flashdata('alert', 'pesan_sukses');
					redirect('nota');
				} else {
					if ($undoneCart != null) {
						$cartId = $undoneCart['keranjang_id'];
						$cartTotal = $undoneCart['keranjang_total'];
						$dataNota['nota_keranjang_id'] = $cartId;
						$dataCart['keranjang_total'] = $cartTotal + $total;

						$this->PesanModel->simpan_nota($dataNota);
						$this->BayarModel->update_keranjang($cartId, $dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('nota');
					} else {
						$cartId = 'NOT-' . substr(time(), 5);
						$dataNota['nota_keranjang_id'] = $cartId;
						$dataCart = array(
							'keranjang_id' => $cartId,
							'keranjang_pengguna_id' => $this->session->userdata('session_id'),
							'keranjang_total' => $total,
						);
						$this->PesanModel->simpan_nota($dataNota);
						$this->BayarModel->simpan_keranjang($dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('nota');
					}
				}
			}
		}
		$data = array(
			'title' => 'Pesan Nota | Nakula Sadewa Digital'
		);
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/pesanan/nota');
		$this->load->view('frontend/templates/footer');
	}
	public function pesanDtf()
	{

		if (isset ($_POST['keranjang'])) {
			$dtfId = 'DTF-' . substr(time(), 5);
			$bahan = $this->input->post('bahan');
			$panjang = $this->input->post('panjang');
			$jumlah = $this->input->post('jumlah');
			$estimasi = $this->input->post('estimasi');
			$total = 0;

			if ($bahan == 'Lebar 60 cm'){
				if ($panjang < 80) {
					$total = $jumlah * 50000;
				} elseif ($panjang >= 80 && $panjang < 100) {
					$total = $jumlah * 65000 + ($panjang - 80) * 700;
				} elseif ($panjang >= 100 && $panjang < 150) {
					$total = $jumlah * 65000 + ($panjang - 80) * 800;
				} else {
					$total = $jumlah * 65000 + 20 * 600 + ($panjang - 100) * 600;
				}
			} 
			if ($bahan == 'Lebar 30 cm'){
				if ($panjang < 80) {
					$total = $jumlah * 30000;
				} elseif ($panjang >= 80 && $panjang < 100) {
					$total = $jumlah * 60000 + ($panjang - 80) * 800;
				} elseif ($panjang >= 100 && $panjang < 150) {
					$total = $jumlah * 60000 + ($panjang - 80) * 900;
				} else {
					$total = $jumlah * 60000 + 20 * 600 + ($panjang - 100) * 700;
				}
			} 
				
			$config['upload_path'] = './assets/images/dtf/';
			$config['allowed_types'] = 'jpg|png|jpeg|zip|rar|pdf';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('upload')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$dataDtf = array(
					'dtf_id' => $dtfId,
					'dtf_bahan' => $bahan,
					'dtf_panjang' => $panjang,
					'dtf_jumlah' => $jumlah,
					'dtf_estimasi' => $estimasi,
					'dtf_total' => $total,
					'dtf_foto' => $foto,
				);

				$allCart = $this->BayarModel->lihat_keranjang();
				$undoneCart = $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'), 'belum')->row_array();

				if ($allCart == null) {
					$cartId = 'DTF-' . substr(time(), 5);
					$dataDtf['dtf_keranjang_id'] = $cartId;
					$dataCart = array(
						'keranjang_id' => $cartId,
						'keranjang_pengguna_id' => $this->session->userdata('session_id'),
						'keranjang_total' => $total,
					);
					$this->PesanModel->simpan_dtf($dataDtf);
					$this->BayarModel->simpan_keranjang($dataCart);
					$this->session->set_flashdata('alert', 'pesan_sukses');
					redirect('dtf');
				} else {
					if ($undoneCart != null) {
						$cartId = $undoneCart['keranjang_id'];
						$cartTotal = $undoneCart['keranjang_total'];
						$dataDtf['dtf_keranjang_id'] = $cartId;
						$dataCart['keranjang_total'] = $cartTotal + $total;

						$this->PesanModel->simpan_dtf($dataDtf);
						$this->BayarModel->update_keranjang($cartId, $dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('dtf');
					} else {
						$cartId = 'DTF-' . substr(time(), 5);
						$dataDtf['dtf_keranjang_id'] = $cartId;
						$dataCart = array(
							'keranjang_id' => $cartId,
							'keranjang_pengguna_id' => $this->session->userdata('session_id'),
							'keranjang_total' => $total,
						);
						$this->PesanModel->simpan_dtf($dataDtf);
						$this->BayarModel->simpan_keranjang($dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('dtf');
					}
				}
			}
		}
		$data = array(
			'title' => 'Pesan DTF | Nakula Sadewa Digital'
		);
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/pesanan/dtf');
		$this->load->view('frontend/templates/footer');
	}
	public function pesanTdtf()
	{

		if (isset ($_POST['keranjang'])) {
			$tdtfId = 'TDTF-' . substr(time(), 5);
			$bahan = $this->input->post('bahan');
			$size = $this->input->post('size');
			$jumlah = $this->input->post('jumlah');
			$estimasi = $this->input->post('estimasi');
			$total = 0;
			
			if ($bahan != "" && $size != 'XXL'){
				$total = $jumlah * 90000;
			}else $total = $jumlah * 100000;
			
				
			$config['upload_path'] = './assets/images/tdtf/';
			$config['allowed_types'] = 'jpg|png|jpeg|zip|rar|pdf';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('upload')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$dataTdtf = array(
					'tdtf_id' => $tdtfId,
					'tdtf_bahan' => $bahan,
					'tdtf_size' => $size,
					'tdtf_jumlah' => $jumlah,
					'tdtf_estimasi' => $estimasi,
					'tdtf_total' => $total,
					'tdtf_foto' => $foto,
				);

				$allCart = $this->BayarModel->lihat_keranjang();
				$undoneCart = $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'), 'belum')->row_array();

				if ($allCart == null) {
					$cartId = 'TDTF-' . substr(time(), 5);
					$dataTdtf['tdtf_keranjang_id'] = $cartId;
					$dataCart = array(
						'keranjang_id' => $cartId,
						'keranjang_pengguna_id' => $this->session->userdata('session_id'),
						'keranjang_total' => $total,
					);
					$this->PesanModel->simpan_tdtf($dataTdtf);
					$this->BayarModel->simpan_keranjang($dataCart);
					$this->session->set_flashdata('alert', 'pesan_sukses');
					redirect('tdtf');
				} else {
					if ($undoneCart != null) {
						$cartId = $undoneCart['keranjang_id'];
						$cartTotal = $undoneCart['keranjang_total'];
						$dataTdtf['tdtf_keranjang_id'] = $cartId;
						$dataCart['keranjang_total'] = $cartTotal + $total;

						$this->PesanModel->simpan_tdtf($dataTdtf);
						$this->BayarModel->update_keranjang($cartId, $dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('tdtf');
					} else {
						$cartId = 'TDTF-' . substr(time(), 5);
						$dataTdtf['tdtf_keranjang_id'] = $cartId;
						$dataCart = array(
							'keranjang_id' => $cartId,
							'keranjang_pengguna_id' => $this->session->userdata('session_id'),
							'keranjang_total' => $total,
						);
						$this->PesanModel->simpan_tdtf($dataTdtf);
						$this->BayarModel->simpan_keranjang($dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('tdtf');
					}
				}
			}
		}
		$data = array(
			'title' => 'Pesan T-shirts | DTF | Nakula Sadewa Digital'
		);
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/pesanan/tdtf');
		$this->load->view('frontend/templates/footer');
	}
	public function pesanLbstiker()
	{

		if (isset ($_POST['keranjang'])) {
			$lbstikerId = 'LBST-' . substr(time(), 5);
			$bahan = $this->input->post('bahan');
			$cutting = $this->input->post('cutting');
			$laminasi= $this->input->post('laminasi');
			$jumlah = $this->input->post('jumlah');
			$estimasi = $this->input->post('estimasi');
			$total = 0;
			
			if ($bahan === "Stiker Chromo" || $bahan === "Stiker HVS") {
				if ($cutting === "Kiss Cut" && $laminasi === "Tanpa Laminasi"){
					$total = $jumlah * 11000;
				} else if ($cutting === "Die Cut" && $laminasi !== "Tanpa Laminasi"){
					$total = $jumlah * 17500;
				} else $total = $jumlah * 14000;
			}
			
			
			if ($bahan === "Stiker Vinyl Glossy" || $bahan === "Stiker Vinyl Doff" || $bahan === "Stiker Vinyl Transparant") {
				if ($cutting === "Kiss Cut" &&	$laminasi === "Tanpa Laminasi") {
					$total = $jumlah * 14000;
				} else if ($cutting === "Die Cut" && $laminasi !== "Tanpa Laminasi") {
					$total = $jumlah * 20500;
				} else $total = $jumlah * 17500;
			}
			
			if ($bahan === "Stiker Gold Glossy" || $bahan === "Stiker Silver Glossy") {
				if ($cutting === "Kiss Cut" && $laminasi === "Tanpa Laminasi") {
					$total = $jumlah * 17000;
				}else if ( $cutting === "Die Cut" && $laminasi !== "Tanpa Laminasi") {
					$total = $jumlah * 23500;
				} else $total = $jumlah * 20500;
			}
			
			if ($bahan === "Stiker Craft") {
				if ($cutting === "Kiss Cut" && $laminasi === "Tanpa Laminasi") {
					$total = $jumlah * 13000;
				}else if ( $cutting === "Die Cut" && $laminasi !== "Tanpa Laminasi") {
					$total = $jumlah * 16500;
				} else $total = $jumlah * 19500;
			}
			
			if ($bahan === "Stiker Hologram"){
				if ($cutting === "Kiss Cut" && $laminasi === "Tanpa Laminasi"){
					$total = $jumlah * 18000;
				} else if ($cutting === "Die Cut" && $laminasi !== "Tanpa Laminasi"){
					$total = $jumlah * 24500;
				} else $total = $jumlah * 21500;
			}
								
			$config['upload_path'] = './assets/images/lbstiker/';
			$config['allowed_types'] = 'jpg|png|jpeg|zip|rar|pdf';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('upload')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$dataLbstiker = array(
					'lbstiker_id' => $lbstikerId,
					'lbstiker_bahan' => $bahan,
					'lbstiker_cutting' => $cutting,
					'lbstiker_laminasi' => $laminasi,
					'lbstiker_jumlah' => $jumlah,
					'lbstiker_estimasi' => $estimasi,
					'lbstiker_total' => $total,
					'lbstiker_foto' => $foto,
				);

				$allCart = $this->BayarModel->lihat_keranjang();
				$undoneCart = $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'), 'belum')->row_array();

				if ($allCart == null) {
					$cartId = 'LBST-' . substr(time(), 5);
					$dataLbstiker['lbstiker_keranjang_id'] = $cartId;
					$dataCart = array(
						'keranjang_id' => $cartId,
						'keranjang_pengguna_id' => $this->session->userdata('session_id'),
						'keranjang_total' => $total,
					);
					$this->PesanModel->simpan_lbstiker($dataLbstiker);
					$this->BayarModel->simpan_keranjang($dataCart);
					$this->session->set_flashdata('alert', 'pesan_sukses');
					redirect('lbstiker');
				} else {
					if ($undoneCart != null) {
						$cartId = $undoneCart['keranjang_id'];
						$cartTotal = $undoneCart['keranjang_total'];
						$dataLbstiker['lbstiker_keranjang_id'] = $cartId;
						$dataCart['keranjang_total'] = $cartTotal + $total;

						$this->PesanModel->simpan_lbstiker($dataLbstiker);
						$this->BayarModel->update_keranjang($cartId, $dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('lbstiker');
					} else {
						$cartId = 'LBST-' . substr(time(), 5);
						$dataLbstiker['lbstiker_keranjang_id'] = $cartId;
						$dataCart = array(
							'keranjang_id' => $cartId,
							'keranjang_pengguna_id' => $this->session->userdata('session_id'),
							'keranjang_total' => $total,
						);
						$this->PesanModel->simpan_lbstiker($dataLbstiker);
						$this->BayarModel->simpan_keranjang($dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('lbstiker');
					}
				}
			}
		}
		$data = array(
			'title' => 'Pesan Label Stiker | Nakula Sadewa Digital'
		);
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/pesanan/lbstiker');
		$this->load->view('frontend/templates/footer');
	}

	public function hapusKartu($id)
	{
		$kartu = $this->PesanModel->lihat_kartu_by_id($id);
		$keranjang_id = $kartu['kartu_keranjang_id'];
		$keranjang = $this->BayarModel->lihat_keranjang_by_id($keranjang_id);
		$total = $kartu['kartu_total'];
		$data = array(
			'keranjang_total' => $keranjang['keranjang_total'] - $total
		);
		$this->PesanModel->delete('kartu_id', $id, 'sipesan_kartu');
		$this->BayarModel->update_keranjang($keranjang_id, $data);
		$this->session->set_flashdata('alert', 'pesan_hapus');
		redirect('keranjang');
	}

	public function hapusSpanduk($id)
	{
		$spanduk = $this->PesanModel->lihat_spanduk_by_id($id);
		$keranjang_id = $spanduk['spanduk_keranjang_id'];
		$keranjang = $this->BayarModel->lihat_keranjang_by_id($keranjang_id);
		$total = $spanduk['spanduk_total'];
		$data = array(
			'keranjang_total' => $keranjang['keranjang_total'] - $total
		);
		$this->PesanModel->delete('spanduk_id', $id, 'sipesan_spanduk');
		$this->BayarModel->update_keranjang($keranjang_id, $data);
		$this->session->set_flashdata('alert', 'pesan_hapus');
		redirect('keranjang');
	}

	public function hapusStiker($id)
	{
		$stiker = $this->PesanModel->lihat_stiker_by_id($id);
		$keranjang_id = $stiker['stiker_keranjang_id'];
		$keranjang = $this->BayarModel->lihat_keranjang_by_id($keranjang_id);
		$total = $stiker['stiker_total'];
		$data = array(
			'keranjang_total' => $keranjang['keranjang_total'] - $total
		);
		$this->PesanModel->delete('stiker_id', $id, 'sipesan_stiker');
		$this->BayarModel->update_keranjang($keranjang_id, $data);
		$this->session->set_flashdata('alert', 'pesan_hapus');
		redirect('keranjang');
	}

	public function hapusBrosur($id)
	{
		$brosur = $this->PesanModel->lihat_brosur_by_id($id);
		$keranjang_id = $brosur['brosur_keranjang_id'];
		$keranjang = $this->BayarModel->lihat_keranjang_by_id($keranjang_id);
		$total = $brosur['brosur_total'];
		$data = array(
			'keranjang_total' => $keranjang['keranjang_total'] - $total
		);
		$this->PesanModel->delete('brosur_id', $id, 'sipesan_brosur');
		$this->BayarModel->update_keranjang($keranjang_id, $data);
		$this->session->set_flashdata('alert', 'pesan_hapus');
		redirect('keranjang');
	}
	public function hapusA4brosur($id)
	{
		$a4brosur = $this->PesanModel->lihat_a4brosur_by_id($id);
		$keranjang_id = $a4brosur['a4brosur_keranjang_id'];
		$keranjang = $this->BayarModel->lihat_keranjang_by_id($keranjang_id);
		$total = $a4brosur['a4brosur_total'];
		$data = array(
			'keranjang_total' => $keranjang['keranjang_total'] - $total
		);
		$this->PesanModel->delete('a4brosur_id', $id, 'sipesan_a4brosur');
		$this->BayarModel->update_keranjang($keranjang_id, $data);
		$this->session->set_flashdata('alert', 'pesan_hapus');
		redirect('keranjang');
	}
	public function hapusA5brosur($id)
	{
		$a5brosur = $this->PesanModel->lihat_a5brosur_by_id($id);
		$keranjang_id = $a5brosur['a5brosur_keranjang_id'];
		$keranjang = $this->BayarModel->lihat_keranjang_by_id($keranjang_id);
		$total = $a5brosur['a5brosur_total'];
		$data = array(
			'keranjang_total' => $keranjang['keranjang_total'] - $total
		);
		$this->PesanModel->delete('a5brosur_id', $id, 'sipesan_a5brosur');
		$this->BayarModel->update_keranjang($keranjang_id, $data);
		$this->session->set_flashdata('alert', 'pesan_hapus');
		redirect('keranjang');
	}
	public function hapusKalender($id)
	{
		$kalender = $this->PesanModel->lihat_kalender_by_id($id);
		$keranjang_id = $kalender['kalender_keranjang_id'];
		$keranjang = $this->BayarModel->lihat_keranjang_by_id($keranjang_id);
		$total = $kalender['kalender_total'];
		$data = array(
			'keranjang_total' => $keranjang['keranjang_total'] - $total
		);
		$this->PesanModel->delete('kalender_id', $id, 'sipesan_kalender');
		$this->BayarModel->update_keranjang($keranjang_id, $data);
		$this->session->set_flashdata('alert', 'pesan_hapus');
		redirect('keranjang');
	}
	public function hapusNota($id)
	{
		$nota = $this->PesanModel->lihat_nota_by_id($id);
		$keranjang_id = $nota['nota_keranjang_id'];
		$keranjang = $this->BayarModel->lihat_keranjang_by_id($keranjang_id);
		$total = $nota['nota_total'];
		$data = array(
			'keranjang_total' => $keranjang['keranjang_total'] - $total
		);
		$this->PesanModel->delete('nota_id', $id, 'sipesan_nota');
		$this->BayarModel->update_keranjang($keranjang_id, $data);
		$this->session->set_flashdata('alert', 'pesan_hapus');
		redirect('keranjang');
	}
	public function hapusDtf($id)
	{
		$dtf = $this->PesanModel->lihat_dtf_by_id($id);
		$keranjang_id = $dtf['dtf_keranjang_id'];
		$keranjang = $this->BayarModel->lihat_keranjang_by_id($keranjang_id);
		$total = $dtf['dtf_total'];
		$data = array(
			'keranjang_total' => $keranjang['keranjang_total'] - $total
		);
		$this->PesanModel->delete('dtf_id', $id, 'sipesan_dtf');
		$this->BayarModel->update_keranjang($keranjang_id, $data);
		$this->session->set_flashdata('alert', 'pesan_hapus');
		redirect('keranjang');
	}
	public function hapusTdtf($id)
	{
		$tdtf = $this->PesanModel->lihat_tdtf_by_id($id);
		$keranjang_id = $tdtf['tdtf_keranjang_id'];
		$keranjang = $this->BayarModel->lihat_keranjang_by_id($keranjang_id);
		$total = $tdtf['tdtf_total'];
		$data = array(
			'keranjang_total' => $keranjang['keranjang_total'] - $total
		);
		$this->PesanModel->delete('tdtf_id', $id, 'sipesan_tdtf');
		$this->BayarModel->update_keranjang($keranjang_id, $data);
		$this->session->set_flashdata('alert', 'pesan_hapus');
		redirect('keranjang');
	}
	public function hapusLbstiker($id)
	{
		$lbstiker = $this->PesanModel->lihat_lbstiker_by_id($id);
		$keranjang_id = $lbstiker['lbstiker_keranjang_id'];
		$keranjang = $this->BayarModel->lihat_keranjang_by_id($keranjang_id);
		$total = $lbstiker['lbstiker_total'];
		$data = array(
			'keranjang_total' => $keranjang['keranjang_total'] - $total
		);
		$this->PesanModel->delete('lbstiker_id', $id, 'sipesan_lbstiker');
		$this->BayarModel->update_keranjang($keranjang_id, $data);
		$this->session->set_flashdata('alert', 'pesan_hapus');
		redirect('keranjang');
	}
}