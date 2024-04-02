<style>
.laporan-header {
    text-align: center;
}
</style>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="row d-print-none">
                <div class="col-6">
                    <button type="button" onclick="return window.history.back();"
                        class="btn btn-sm btn-outline-primary"><i class="fa fa-arrow-left"></i></button>
                </div>
                <div class="col-6">
                    <button style="float: right" type="button" onclick="window.print()"
                        class="btn btn-primary btn-sm"><i class="fa fa-print"></i></button>
                </div>
            </div>
            <br>
            <div>
                <div class="laporan-header">
                    <h3>Nakula Sadewa Digital</h3>
                </div>
                <div class="laporan-header">
                    <h4>Laporan Penjualan <?php
						if ($tipe != 'kartu') {
							echo ucfirst($tipe);
						} else {
							echo 'Kartu Nama';
						}
						?> <?php
						if ($tanggal != null){
							echo 'Tanggal '.date_indo($tanggal);
						} else {
							echo 'Bulan '.bulan($bulan) .' '. date('Y');
						}
						?></h4>
                </div>
                <table class="table table-bordered">
                    <?php
					if ($tipe == 'spanduk'):
						?>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Ukuran</th>
                            <th>Jenis Bahan</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$total = 0;
						$no = 1;
						foreach ($spanduk as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['pengguna_nama'] ?></td>
                            <td><?= $value['spanduk_panjang'] ?> m x <?= $value['spanduk_lebar'] ?> m</td>
                            <td>
                                <?php
									if ($value['spanduk_bahan'] == 'bagus') {
										echo '340g (Bagus)';
									} elseif ($value['spanduk_bahan'] == 'menengah') {
										echo '320g (Menengah)';
									} elseif ($value['spanduk_bahan'] == 'biasa') {
										echo '280g (Biasa)';
									}
									?>
                            </td>
                            <td><?= $value['spanduk_jumlah'] ?></td>
                            <td>Rp. <?= nominal($value['spanduk_total']) ?></td>
                        </tr>
                        <?php
							$total = $total + $value['spanduk_total'];
							$no++;
						endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">TOTAL</td>
                            <td>Rp. <?= nominal($total) ?></td>
                        </tr>
                    </tfoot>
                    <?php
					endif;
					?>

                    <?php
					if ($tipe == 'stiker'):
						?>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Ukuran</th>
                            <th>Jenis Bahan</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$total = 0;
						$no = 1;
						foreach ($stiker as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['pengguna_nama'] ?></td>
                            <td><?= $value['stiker_panjang'] ?> m x <?= $value['stiker_lebar'] ?> m</td>
                            <td>
                                <?php
									if ($value['stiker_bahan'] == 'biasa') {
										echo 'Biasa (China)';
									} elseif ($value['stiker_bahan'] == 'bagus') {
										echo 'Bagus (Ritrama)';
									}
									?>
                            </td>
                            <td><?= $value['stiker_jumlah'] ?> </td>
                            <td>Rp. <?= nominal($value['stiker_total']) ?></td>
                        </tr>
                        <?php
							$total = $total + $value['stiker_total'];
							$no++;
						endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">TOTAL</td>
                            <td>Rp. <?= nominal($total) ?></td>
                        </tr>
                    </tfoot>
                    <?php
					endif;
					?>

                    <?php
					if ($tipe == 'kartu'):
						?>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Jenis Bahan</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$total = 0;
						$no = 1;
						foreach ($kartu as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['pengguna_nama'] ?></td>
                            <td>
                                <?php
									if ($value['kartu_bahan'] == 'biasa') {
										echo 'Biasa (BCT)';
									} elseif ($value['kartu_bahan'] == 'bagus') {
										echo 'Bagus (Glossy)';
									}
									?>
                            </td>
                            <td><?= $value['kartu_jumlah'] ?> kotak</td>
                            <td>Rp. <?= nominal($value['kartu_total']) ?></td>
                        </tr>
                        <?php
							$total = $total + $value['kartu_total'];
							$no++;
						endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">TOTAL</td>
                            <td>Rp. <?= nominal($total) ?></td>
                        </tr>
                    </tfoot>
                    <?php
					endif;
					?>
                    <?php
					if ($tipe == 'brosur'):
						?>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ukuran Kertas</th>
                            <th>Nama Pemesan</th>
                            <th>Jenis Bahan</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$total = 0;
						$no = 1;
						foreach ($brosur as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['pengguna_nama'] ?></td>
                            <td><?= $value['brosur_ukuran'] ?></td>
                            <td><?= ucfirst($value['brosur_bahan']) ?></td>
                            <td><?= $value['brosur_jumlah'] ?> rim</td>
                            <td>Rp. <?= nominal($value['brosur_total']) ?></td>
                        </tr>
                        <?php
							$total = $total + $value['brosur_total'];
							$no++;
						endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">TOTAL</td>
                            <td>Rp. <?= nominal($total) ?></td>
                        </tr>
                    </tfoot>
                    <?php
					endif;
					?>
                    <?php
					if ($tipe == 'a4brosur'):
						?>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bahan</th>
                            <th>Sisi</th>
                            <th>Laminasi</th>
                            <th>Lipat</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$total = 0;
						$no = 1;
						foreach ($a4brosur as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['pengguna_nama'] ?></td>
                            <td><?= ucfirst($value['a4brosur_bahan']) ?></td>
                            <td><?= $value['a4brosur_sisi'] ?></td>
                            <td><?= $value['a4brosur_laminasi'] ?></td>
                            <td><?= $value['a4brosur_lipat'] ?></td>
                            <td><?= $value['a4brosur_jumlah'] ?> rim</td>
                            <td>Rp. <?= nominal($value['a4brosur_total']) ?></td>
                        </tr>
                        <?php
							$total = $total + $value['a4brosur_total'];
							$no++;
						endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">TOTAL</td>
                            <td>Rp. <?= nominal($total) ?></td>
                        </tr>
                    </tfoot>
                    <?php
					endif;
					?>
                    <?php
					if ($tipe == 'a5brosur'):
						?>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bahan</th>
                            <th>Sisi</th>
                            <th>Laminasi</th>
                            <th>Lipat</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$total = 0;
						$no = 1;
						foreach ($a5brosur as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['pengguna_nama'] ?></td>
                            <td><?= ucfirst($value['a5brosur_bahan']) ?></td>
                            <td><?= $value['a5brosur_sisi'] ?></td>
                            <td><?= $value['a5brosur_laminasi'] ?></td>
                            <td><?= $value['a5brosur_lipat'] ?></td>
                            <td><?= $value['a5brosur_jumlah'] ?> rim</td>
                            <td>Rp. <?= nominal($value['a5brosur_total']) ?></td>
                        </tr>
                        <?php
							$total = $total + $value['a5brosur_total'];
							$no++;
						endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">TOTAL</td>
                            <td>Rp. <?= nominal($total) ?></td>
                        </tr>
                    </tfoot>
                    <?php
					endif;
					?>
                    <?php
					if ($tipe == 'a6brosur'):
						?>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bahan</th>
                            <th>Sisi</th>
                            <th>Laminasi</th>
                            <th>Lipat</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$total = 0;
						$no = 1;
						foreach ($a6brosur as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['pengguna_nama'] ?></td>
                            <td><?= ucfirst($value['a6brosur_bahan']) ?></td>
                            <td><?= $value['a6brosur_sisi'] ?></td>
                            <td><?= $value['a6brosur_laminasi'] ?></td>
                            <td><?= $value['a6brosur_lipat'] ?></td>
                            <td><?= $value['a6brosur_jumlah'] ?> rim</td>
                            <td>Rp. <?= nominal($value['a6brosur_total']) ?></td>
                        </tr>
                        <?php
							$total = $total + $value['a6brosur_total'];
							$no++;
						endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">TOTAL</td>
                            <td>Rp. <?= nominal($total) ?></td>
                        </tr>
                    </tfoot>
                    <?php
					endif;
					?>
                    <?php
					if ($tipe == 'kalender'):
						?>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Isi</th>
                            <th>Laminasi</th>
                            <th>Orientasi</th>
                            <th>Jenis Bahan</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$total = 0;
						$no = 1;
						foreach ($kalender as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['pengguna_nama'] ?></td>
                            <td><?= $value['kalender_isi'] ?></td>
                            <td><?= $value['kalender_laminasi'] ?></td>
                            <td><?= $value['kalender_orientasi'] ?></td>
                            <td><?= ucfirst($value['kalender_bahan']) ?></td>
                            <td><?= $value['kalender_jumlah'] ?> Pcs</td>
                            <td>Rp. <?= nominal($value['kalender_total']) ?></td>
                        </tr>
                        <?php
							$total = $total + $value['kalender_total'];
							$no++;
						endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">TOTAL</td>
                            <td>Rp. <?= nominal($total) ?></td>
                        </tr>
                    </tfoot>
                    <?php
					endif;
					?>
                    <?php
					if ($tipe == 'nota'):
						?>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Ukuran Kertas</th>
                            <th>Warna Nota</th>
                            <th>Rangkap</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$total = 0;
						$no = 1;
						foreach ($nota as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['pengguna_nama'] ?></td>
                            <td><?= $value['nota_ukuran'] ?></td>
                            <td><?= $value['nota_warna'] ?></td>
                            <td><?= ucfirst($value['nota_rangkap']) ?></td>
                            <td><?= $value['nota_jumlah'] ?> pcs</td>
                            <td>Rp. <?= nominal($value['nota_total']) ?></td>
                        </tr>
                        <?php
							$total = $total + $value['nota_total'];
							$no++;
						endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">TOTAL</td>
                            <td>Rp. <?= nominal($total) ?></td>
                        </tr>
                    </tfoot>
                    <?php
					endif;
					?>
                    <?php
					if ($tipe == 'dtf'):
						?>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Jenis Bahan</th>
                            <th>Panjang </th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$total = 0;
						$no = 1;
						foreach ($dtf as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['pengguna_nama'] ?></td>
                            <td><?= $value['dtf_bahan'] ?></td>
                            <td><?= $value['dtf_panjang'] ?></td>
                            <td><?= $value['dtf_jumlah'] ?> pcs</td>
                            <td>Rp. <?= nominal($value['dtf_total']) ?></td>
                        </tr>
                        <?php
							$total = $total + $value['dtf_total'];
							$no++;
						endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">TOTAL</td>
                            <td>Rp. <?= nominal($total) ?></td>
                        </tr>
                    </tfoot>
                    <?php
					endif;
					?>
                    <?php
					if ($tipe == 'tdtf'):
						?>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Jenis Bahan</th>
                            <th>Size</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$total = 0;
						$no = 1;
						foreach ($tdtf as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['pengguna_nama'] ?></td>
                            <td><?= $value['tdtf_bahan'] ?></td>
                            <td><?= $value['tdtf_size'] ?></td>
                            <td><?= $value['tdtf_jumlah'] ?> pcs</td>
                            <td>Rp. <?= nominal($value['tdtf_total']) ?></td>
                        </tr>
                        <?php
							$total = $total + $value['tdtf_total'];
							$no++;
						endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">TOTAL</td>
                            <td>Rp. <?= nominal($total) ?></td>
                        </tr>
                    </tfoot>
                    <?php
					endif;
					?>
                </table>
                <br>
                <div class="row">
                    <div class="col-6 text-center">
                    </div>
                    <div class="col-6 text-center">
                        <p>Semarang, <?= date_indo(date('Y-m-d')) ?></p>
                        <p>Admin</p>
                        <br>
                        <br>
                        <br>
                        <p><b><u>Nakula Sadewa Digital</u></b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>