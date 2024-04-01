<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">
                Detail Pesanan
            </h3>
            <div>
                <table>
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
                <?php
				if ($spanduk == !null):
					?>
                <h5>Spanduk</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ukuran (m)</th>
                            <th>Jenis Bahan</th>
                            <th>Jumlah</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						foreach ($spanduk as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['spanduk_panjang'] ?> x <?= $value['spanduk_lebar'] ?> </td>
                            <td><?= $value['spanduk_bahan'] ?></td>
                            <td><?= $value['spanduk_jumlah'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/pesanan/foto/' . $value['spanduk_id']) ?>"
                                    class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
                            </td>
                        </tr>
                        <?php
							$no++;
						endforeach;
						?>
                    </tbody>
                </table>
                <?php
				endif;
				?>
                <hr>
                <?php
				if ($stiker == !null):
					?>
                <h5>Stiker</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ukuran (m)</th>
                            <th>Jenis Bahan</th>
                            <th>Jumlah</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						foreach ($stiker as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['stiker_panjang'] ?> x <?= $value['stiker_lebar'] ?> </td>
                            <td><?= $value['stiker_bahan'] ?></td>
                            <td><?= $value['stiker_jumlah'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/pesanan/foto/' . $value['stiker_id']) ?>"
                                    class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
                            </td>
                        </tr>
                        <?php
							$no++;
						endforeach;
						?>
                    </tbody>
                </table>
                <?php
				endif;
				?>
                <hr>
                <?php
				if ($kartu == !null):
					?>
                <h5>Kartu Nama</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Bahan</th>
                            <th>Jumlah</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						foreach ($kartu as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['kartu_bahan'] ?></td>
                            <td><?= $value['kartu_jumlah'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/pesanan/foto/' . $value['kartu_id']) ?>"
                                    class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
                            </td>
                        </tr>
                        <?php
							$no++;
						endforeach;
						?>
                    </tbody>
                </table>
                <?php
				endif;
				?>
                <hr>
                <?php
				if ($brosur == !null):
					?>
                <h5>Brosur</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ukuran</th>
                            <th>Jenis Bahan</th>
                            <th>Jumlah</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						foreach ($brosur as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['brosur_ukuran'] ?></td>
                            <td><?= $value['brosur_bahan'] ?></td>
                            <td><?= $value['brosur_jumlah'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/pesanan/foto/' . $value['brosur_id']) ?>"
                                    class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
                            </td>
                        </tr>
                        <?php
							$no++;
						endforeach;
						?>
                    </tbody>
                </table>
                <?php
				endif;
				?>
                <hr>
                <?php
				if ($a4brosur == !null):
					?>
                <h5>Brosur A4</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bahan</th>
                            <th>Sisi</th>
                            <th>Laminasi</th>
                            <th>Lipat</th>
                            <th>Jumlah</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						foreach ($a4brosur as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['a4brosur_bahan'] ?></td>
                            <td><?= $value['a4brosur_sisi'] ?></td>
                            <td><?= $value['a4brosur_laminasi'] ?></td>
                            <td><?= $value['a4brosur_lipat'] ?></td>
                            <td><?= $value['a4brosur_jumlah'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/pesanan/foto/' . $value['a4brosur_id']) ?>"
                                    class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
                            </td>
                        </tr>
                        <?php
							$no++;
						endforeach;
						?>
                    </tbody>
                </table>
                <?php
				endif;
				?>
                <hr>
                <?php
				if ($a5brosur == !null):
					?>
                <h5>Brosur A5</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bahan</th>
                            <th>Sisi</th>
                            <th>Laminasi</th>
                            <th>Lipat</th>
                            <th>Jumlah</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						foreach ($a5brosur as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['a5brosur_bahan'] ?></td>
                            <td><?= $value['a5brosur_sisi'] ?></td>
                            <td><?= $value['a5brosur_laminasi'] ?></td>
                            <td><?= $value['a5brosur_lipat'] ?></td>
                            <td><?= $value['a5brosur_jumlah'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/pesanan/foto/' . $value['a5brosur_id']) ?>"
                                    class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
                            </td>
                        </tr>
                        <?php
							$no++;
						endforeach;
						?>
                    </tbody>
                </table>
                <?php
				endif;
				?>
                <hr>
                <?php
				if ($kalender == !null):
					?>
                <h5>Kalender</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Bahan</th>
                            <th>Isi</th>
                            <th>Laminasi</th>
                            <th>Orientasi</th>
                            <th>Jumlah</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						foreach ($kalender as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['kalender_bahan'] ?></td>
                            <td><?= $value['kalender_isi'] ?></td>
                            <td><?= $value['kalender_laminasi'] ?></td>
                            <td><?= $value['kalender_orientasi'] ?></td>
                            <td><?= $value['kalender_jumlah'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/pesanan/foto/' . $value['kalender_id']) ?>"
                                    class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
                            </td>
                        </tr>
                        <?php
							$no++;
						endforeach;
						?>
                    </tbody>
                </table>
                <?php
				endif;
				?>
                <hr>
                <?php
				if ($nota == !null):
					?>
                <h5>Nota</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Warna</th>
                            <th>Ukuran</th>
                            <th>Isi</th>
                            <th>Jumlah</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						foreach ($nota as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['nota_warna'] ?></td>
                            <td><?= $value['nota_ukuran'] ?></td>
                            <td><?= $value['nota_rangkap'] ?></td>
                            <td><?= $value['nota_jumlah'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/pesanan/foto/' . $value['nota_id']) ?>"
                                    class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
                            </td>
                        </tr>
                        <?php
							$no++;
						endforeach;
						?>
                    </tbody>
                </table>
                <?php
				endif;
				?>
                <hr>
                <?php
				if ($dtf == !null):
					?>
                <h5>DTF</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bahan</th>
                            <th>Panjang</th>
                            <th>Jumlah</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						foreach ($dtf as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['dtf_bahan'] ?></td>
                            <td><?= $value['dtf_panjang'] ?></td>
                            <td><?= $value['dtf_jumlah'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/pesanan/foto/' . $value['dtf_id']) ?>"
                                    class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
                            </td>
                        </tr>
                        <?php
							$no++;
						endforeach;
						?>
                    </tbody>
                </table>
                <?php
				endif;
				?>
                <hr>
                <?php
				if ($tdtf == !null):
					?>
                <h5>T-Shirts | DTF</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bahan</th>
                            <th>Size</th>
                            <th>Jumlah</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						foreach ($tdtf as $key => $value):
							?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $value['tdtf_bahan'] ?></td>
                            <td><?= $value['tdtf_size'] ?></td>
                            <td><?= $value['tdtf_jumlah'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/pesanan/foto/' . $value['tdtf_id']) ?>"
                                    class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
                            </td>
                        </tr>
                        <?php
							$no++;
						endforeach;
						?>
                    </tbody>
                </table>
                <?php
				endif;
				?>
                <hr>

            </div>
        </div>
    </div>
</div>