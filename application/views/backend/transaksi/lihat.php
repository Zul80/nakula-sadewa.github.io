<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">
                Detail Transaksi
            </h3>
            <div>
                <table>
                    <tr>
                        <td>Nomor Faktur</td>
                        <td> :</td>
                        <td>&nbsp;&nbsp;<?= $transaksi['faktur_id'] ?></td>
                    </tr>
                    <tr>
                        <td>Status Pemesanan &nbsp;</td>
                        <td> :</td>
                        <td>&nbsp;
                            <?php if ($transaksi['faktur_status'] == 'belum'): ?>
                            <label class="badge badge-warning">Belum bayar</label>
                            <?php elseif ($transaksi['faktur_status'] == 'sudah'): ?>
                            <label class="badge badge-success">Selesai</label>
                            <a href="<?=base_url('admin/transaksi/email/'.$transaksi['faktur_id'])?>"
                                class="badge badge-primary">Kirim Notifikasi</a>
                            <?php elseif ($transaksi['faktur_status'] == 'tunggu'): ?>
                            <label class="badge badge-primary">Menunggu</label>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Pemesan</td>
                        <td> :</td>
                        <td>&nbsp;
                            <?= $transaksi['pengguna_nama'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor HP</td>
                        <td> :</td>
                        <td>&nbsp;
                            <?= $transaksi['pengguna_nomor_hp'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Waktu Pemesanan</td>
                        <td> :</td>
                        <td>&nbsp;
                            <?php
							$tanggal = explode(" ", $transaksi['faktur_date_created']);
							echo $tanggal[1] . ', ' . date_indo($tanggal[0]);
							?>
                        </td>
                    </tr>
                </table>
                <hr>
                <table width="100%">
                    <tr>
                        <td><b>Status Pembayaran &nbsp; :</b>
                            <?php if ($transaksi['faktur_status'] == 'belum'): ?>
                            <label class="badge badge-warning">Belum Lunas</label>
                            <?php elseif ($transaksi['faktur_status'] == 'sudah'): ?>
                            <label class="badge badge-success">Lunas</label>
                            <?php elseif ($transaksi['faktur_status'] == 'tunggu'): ?>
                            <label class="badge badge-success">Lunas</label>
                            <?php endif; ?>
                        </td>
                        <td style="float: right"><b>Total Pembayaran :
                                Rp. <?= nominal($transaksi['keranjang_total']) ?></b></td>
                    </tr>
                </table>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Jenis</th>
                            <th>Jumlah</th>
                            <th style="text-align: right">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
						if ($spanduk == !null):
							?>
                            <td>Spanduk</td>
                            <td><?= count($spanduk) ?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($spanduk as $key => $value) {
									$harga = $harga + $value['spanduk_total'];
								}
								echo 'Rp. ' . nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        </tr>
                        <tr>
                            <?php
						if ($stiker == !null):
							?>
                            <td>Stiker</td>
                            <td><?= count($stiker) ?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($stiker as $key => $value) {
									$harga = $harga + $value['stiker_total'];
								}
								echo 'Rp. ' . nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        </tr>

                        <tr>
                            <?php
						if ($kartu == !null):
							?>
                            <td>Kartu Nama</td>
                            <td><?= count($kartu) ?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($kartu as $key => $value) {
									$harga = $harga + $value['kartu_total'];
								}
								echo 'Rp. ' . nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        </tr>
                        <tr>
                            <?php
						if ($brosur == !null):
							?>
                            <td>Brosur</td>
                            <td><?= count($brosur) ?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($brosur as $key => $value) {
									$harga = $harga + $value['brosur_total'];
								}
								echo 'Rp. ' . nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        </tr>
                        <tr>
                            <?php
						if ($a4brosur == !null):
							?>
                            <td>Brosur A4</td>
                            <td><?= count($a4brosur) ?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($a4brosur as $key => $value) {
									$harga = $harga + $value['a4brosur_total'];
								}
								echo 'Rp. ' . nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        </tr>
                        <tr>
                            <?php
						if ($a5brosur == !null):
							?>
                            <td>Brosur A5</td>
                            <td><?= count($a5brosur) ?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($a5brosur as $key => $value) {
									$harga = $harga + $value['a5brosur_total'];
								}
								echo 'Rp. ' . nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        </tr>
                        <tr>
                            <?php
						if ($a6brosur == !null):
							?>
                            <td>Brosur A6</td>
                            <td><?= count($a6brosur) ?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($a6brosur as $key => $value) {
									$harga = $harga + $value['a6brosur_total'];
								}
								echo 'Rp. ' . nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        </tr>
                        <tr>
                            <?php
						if ($flyer10x21 == !null):
							?>
                            <td>Flayer 10x21</td>
                            <td><?= count($flyer10x21) ?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($flyer10x21 as $key => $value) {
									$harga = $harga + $value['flyer10x21_total'];
								}
								echo 'Rp. ' . nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        </tr>
                        <tr>
                            <?php
						if ($kalender == !null):
							?>
                            <td>kalender</td>
                            <td><?= count($kalender) ?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($kalender as $key => $value) {
									$harga = $harga + $value['kalender_total'];
								}
								echo 'Rp. ' . nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        </tr>
                        <tr>
                            <?php
						if ($nota == !null):
							?>
                            <td>nota</td>
                            <td><?= count($nota) ?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($nota as $key => $value) {
									$harga = $harga + $value['nota_total'];
								}
								echo 'Rp. ' . nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        </tr>
                        <tr>
                            <?php
						if ($dtf == !null):
							?>
                            <td>dtf</td>
                            <td><?= count($dtf) ?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($dtf as $key => $value) {
									$harga = $harga + $value['dtf_total'];
								}
								echo 'Rp. ' . nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        </tr>
                        <tr>
                            <?php
						if ($tdtf == !null):
							?>
                            <td>tdtf</td>
                            <td><?= count($tdtf) ?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($tdtf as $key => $value) {
									$harga = $harga + $value['tdtf_total'];
								}
								echo 'Rp. ' . nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"><b>Total</b></td>
                            <td style="text-align: right"><b>Rp. <?= nominal($transaksi['keranjang_total']) ?></b></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-12"><br></div>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">
                Detail Konfirmasi
            </h3>
            <?php
			if ($konfirmasi != null):
				?>

            <div>
                <table width="100%">
                    <tr>
                        <td width="20%">Nomor Rekening</td>
                        <td> :</td>
                        <td>&nbsp;&nbsp;<?= $konfirmasi['konfirmasi_rekening'] ?></td>
                    </tr>
                    <tr>
                        <td>Atas Nama</td>
                        <td> :</td>
                        <td>&nbsp;&nbsp;<?= $konfirmasi['konfirmasi_atas_nama'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nominal</td>
                        <td> :</td>
                        <td>&nbsp;
                            Rp. <?= nominal($konfirmasi['konfirmasi_nominal']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Struk</td>
                        <td> :</td>
                        <td>&nbsp;
                            <img src="<?= base_url('assets/images/struk/' . $konfirmasi['konfirmasi_struk']) ?>"
                                width="70%" alt="Struk">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php
								if ($konfirmasi['konfirmasi_nominal'] == $transaksi['keranjang_total']):
									if ($transaksi['faktur_status'] != 'sudah'): ?>
                            <a href="<?= base_url('admin/transaksi/konfirmasi/' . $transaksi['faktur_id']) ?>"
                                class="btn btn-primary ml-2" onclick="return confirm('Konfirmasi Pembayaran? ')"><i
                                    class="fa fa-check"></i> Konfirmasi</a>
                            <?php
									else:
										?>
                            <div class="alert alert-success alert-dismissible animated fadeInDown round" style=""
                                id="feedback" role="alert">
                                Pesanan sudah dikonfirmasi
                            </div><?php
									endif;
								else :?>
                            <button type="button" disabled class="btn btn-warning ml-2"><i class="fa fa-warning"></i>
                                Nominal transfer dan total belanja tidak
                                sama
                            </button>
                            <?php
								endif; ?>
                        </td>
                    </tr>
                </table>
            </div>
            <?php
			else:
				?>
            <div class="alert alert-warning alert-dismissible animated fadeInDown round" style="" id="feedback"
                role="alert">
                Pemesan belum melakukan konfirmasi pembayaran.
            </div>
            <?php
			endif;
			?>
        </div>
    </div>
</div>