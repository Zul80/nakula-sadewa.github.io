<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('BayarModel');
		$helper = array('tgl_indo', 'nominal');
		$this->load->model($model);
		$this->load->helper($helper);
		$this->load->library('email');
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
		$this->load->view('backend/transaksi/index', $data);
		$this->load->view('backend/templates/footer');
	}

	public function lihat($id)
	{
		$transaksi = $this->BayarModel->lihat_keranjang_faktur_admin_by_id($id)->row_array();
		$konfirmasi = $this->BayarModel->lihat_keranjang_faktur_konfirmasi_admin_by_id($id)->row_array();
//		echo '<pre>';
//		var_dump($konfirmasi);die;
		$data = array(
			'transaksi' => $transaksi,
			'konfirmasi' => $konfirmasi,
			'spanduk' => $this->BayarModel->lihat_keranjang_spanduk($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'stiker' => $this->BayarModel->lihat_keranjang_stiker($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'kartu' => $this->BayarModel->lihat_keranjang_kartu($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'brosur' => $this->BayarModel->lihat_keranjang_brosur($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'a4brosur' => $this->BayarModel->lihat_keranjang_a4brosur($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'a5brosur' => $this->BayarModel->lihat_keranjang_a5brosur($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'a6brosur' => $this->BayarModel->lihat_keranjang_a6brosur($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'flyer10x21' => $this->BayarModel->lihat_keranjang_flyer10x21($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'kalender' => $this->BayarModel->lihat_keranjang_kalender($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'nota' => $this->BayarModel->lihat_keranjang_nota($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'dtf' => $this->BayarModel->lihat_keranjang_dtf($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'lbstiker' => $this->BayarModel->lihat_keranjang_lbstiker($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
		);
		$this->load->view('backend/templates/header');
		$this->load->view('backend/transaksi/lihat', $data);
		$this->load->view('backend/templates/footer');
	}

	public function konfirmasi($id)
	{
		$data = array(
			'faktur_status' => 'sudah'
		);
		$this->BayarModel->update_faktur($id, $data);
		redirect('admin/transaksi/lihat/' . $id);
	}

	public function email($id)
	{
		$transaksi = $this->BayarModel->lihat_keranjang_faktur_admin_by_id($id)->row_array();
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "ssl://smtp.googlemail.com";
		$config['smtp_port'] = 465;
		$config['smtp_user'] = "cs@nakula-sadewa.com";
		$config['smtp_pass'] = "suryamadani123";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";

		$this->email->initialize($config);
		$this->email->from('cs@nakula-sadewa.com', 'Nakula Sadewa Digital');
		$list = array($transaksi['pengguna_email']);
		$this->email->to($list);
		$this->email->subject('Pesanan Selesai');
		$message = $transaksi['pengguna_nama'] . ', Pesanan anda sudah selesai, silahkan datang kealamat kami untuk menjemput pesanan anda';

		$data = array(
			'spanduk' => $this->BayarModel->lihat_keranjang_spanduk($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'stiker' => $this->BayarModel->lihat_keranjang_stiker($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'kartu' => $this->BayarModel->lihat_keranjang_kartu($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'brosur' => $this->BayarModel->lihat_keranjang_brosur($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'a4brosur' => $this->BayarModel->lihat_keranjang_a4brosur($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'a5brosur' => $this->BayarModel->lihat_keranjang_a5brosur($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'a6brosur' => $this->BayarModel->lihat_keranjang_a6brosur($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'flyer10x21' => $this->BayarModel->lihat_keranjang_flyer10x21($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'kalender' => $this->BayarModel->lihat_keranjang_kalender($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'nota' => $this->BayarModel->lihat_keranjang_nota($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'dtf' => $this->BayarModel->lihat_keranjang_dtf($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'tdtf' => $this->BayarModel->lihat_keranjang_tdtf($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
			'lbstiker' => $this->BayarModel->lihat_keranjang_lbstiker($transaksi['keranjang_pengguna_id'], 'bayar_menunggu', $transaksi['keranjang_id'])->result_array(),
		);

		$table = array();
		if ($data['spanduk'] != null) {
			$harga = 0;
			foreach ($data['spanduk'] as $key => $value) {
				$harga = $harga + $value['spanduk_total'];
			}
			$spanduk = array(
				'jenis' => 'Spanduk',
				'jumlah' => count($data['spanduk']),
				'harga' => $harga
			);
			array_push($table, $spanduk);
		}
		if ($data['stiker'] != null) {
			$harga = 0;
			foreach ($data['stiker'] as $key => $value) {
				$harga = $harga + $value['stiker_total'];
			}
			$stiker = array(
				'jenis' => 'Stiker',
				'jumlah' => count($data['stiker']),
				'harga' => $harga
			);
			array_push($table, $stiker);
		}
		if ($data['kartu'] != null) {
			$harga = 0;
			foreach ($data['kartu'] as $key => $value) {
				$harga = $harga + $value['kartu_total'];
			}
			$kartu = array(
				'jenis' => 'Kartu Nama',
				'jumlah' => count($data['kartu']),
				'harga' => $harga
			);
			array_push($table, $kartu);
		}
		if ($data['brosur'] != null) {
			$harga = 0;
			foreach ($data['brosur'] as $key => $value) {
				$harga = $harga + $value['brosur_total'];
			}
			$brosur = array(
				'jenis' => 'Brosur',
				'jumlah' => count($data['brosur']),
				'harga' => $harga
			);
			array_push($table, $brosur);
		}
		if ($data['a4brosur'] != null) {
			$harga = 0;
			foreach ($data['a4brosur'] as $key => $value) {
				$harga = $harga + $value['a4brosur_total'];
			}
			$a4brosur = array(
				'jenis' => 'Brosur A4',
				'jumlah' => count($data['a4brosur']),
				'harga' => $harga
			);
			array_push($table, $a4brosur);
		}
		if ($data['a5brosur'] != null) {
			$harga = 0;
			foreach ($data['a5brosur'] as $key => $value) {
				$harga = $harga + $value['a5brosur_total'];
			}
			$a5brosur = array(
				'jenis' => 'Brosur A5',
				'jumlah' => count($data['a5brosur']),
				'harga' => $harga
			);
			array_push($table, $a5brosur);
		}
		if ($data['a6brosur'] != null) {
			$harga = 0;
			foreach ($data['a6brosur'] as $key => $value) {
				$harga = $harga + $value['a6brosur_total'];
			}
			$a6brosur = array(
				'jenis' => 'Brosur A6',
				'jumlah' => count($data['a6brosur']),
				'harga' => $harga
			);
			array_push($table, $a6brosur);
		}
		if ($data['flyer10x21'] != null) {
			$harga = 0;
			foreach ($data['flyer10x21'] as $key => $value) {
				$harga = $harga + $value['flyer10x21_total'];
			}
			$flyer10x21 = array(
				'jenis' => 'Flalyer 10x21',
				'jumlah' => count($data['flyer10x21']),
				'harga' => $harga
			);
			array_push($table, $flyer10x21);
		}
		if ($data['kalender'] != null) {
			$harga = 0;
			foreach ($data['kalender'] as $key => $value) {
				$harga = $harga + $value['kalender_total'];
			}
			$kalender = array(
				'jenis' => 'Kalender',
				'jumlah' => count($data['kalender']),
				'harga' => $harga
			);
			array_push($table, $kalender);
		}
		if ($data['nota'] != null) {
			$harga = 0;
			foreach ($data['nota'] as $key => $value) {
				$harga = $harga + $value['nota_total'];
			}
			$nota = array(
				'jenis' => 'Nota',
				'jumlah' => count($data['nota']),
				'harga' => $harga
			);
			array_push($table, $nota);
		}
		if ($data['dtf'] != null) {
			$harga = 0;
			foreach ($data['dtf'] as $key => $value) {
				$harga = $harga + $value['dtf_total'];
			}
			$dtf = array(
				'jenis' => 'DTF',
				'jumlah' => count($data['dtf']),
				'harga' => $harga
			);
			array_push($table, $dtf);
		}
		if ($data['tdtf'] != null) {
			$harga = 0;
			foreach ($data['tdtf'] as $key => $value) {
				$harga = $harga + $value['tdtf_total'];
			}
			$tdtf = array(
				'jenis' => 'T-Shirt | DTF',
				'jumlah' => count($data['tdtf']),
				'harga' => $harga
			);
			array_push($table, $tdtf);
		}
		if ($data['lbstiker'] != null) {
			$harga = 0;
			foreach ($data['lbstiker'] as $key => $value) {
				$harga = $harga + $value['lbstiker_total'];
			}
			$lbstiker = array(
				'jenis' => 'Label Stiker',
				'jumlah' => count($data['lbstiker']),
				'harga' => $harga
			);
			array_push($table, $lbstiker);
		}

		$message .= '<p>Detail Pesanan</p>';

		$message .= '
			<table border="1" style="border-collapse: collapse">
					<thead>
					<tr>
						<th>Jenis</th>
						<th>Jumlah</th>
						<th style="text-align: right">Harga</th>
					</tr>
					</thead>
					<tbody>
		';

		foreach ($table as $key => $value) {
			$message .= '<tr>
			<td>' . $value['jenis'] . '</td>
			<td style="text-align: center">' . $value['jumlah'] . '</td>
			<td style="text-align: right"> Rp. ' . nominal($value['harga']) . '</td>
		</tr>
		';
		}

		$message .= '
			</tbody>
			<tfoot>
					<tr>
						<td colspan="2"><b>Total</b></td>
						<td style="text-align: right"><b>Rp. '. nominal($transaksi['keranjang_total']) .'</b></td>
					</tr>
					</tfoot>
			</table>
		';

		$this->email->message($message);
		if ($this->email->send()) {
			$this->session->set_flashdata('alert', 'notification');
			redirect('admin/transaksi/lihat/' . $id);
		} else {
			show_error($this->email->print_debugger());
			redirect('admin/transaksi/lihat/' . $id);
		}
	}
}