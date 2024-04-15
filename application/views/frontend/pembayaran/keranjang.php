<?php
if ($keranjang['keranjang_total'] == '0'):
	?>
<div class="container">
    <div class="text-center"><i class="fa fa-cart-arrow-down empty-cart-icon"></i>
        <p class="lead">Keranjang Kamu Kosong</p><a class="btn btn-primary btn-lg" href="<?= base_url() ?>">Pesan
            Sekarang <i class="fa fa-long-arrow-right"></i></a>
    </div>
</div>
<?php
elseif ($keranjang == !null):
	?>
<div class="container">
    <header class="page-header">
        <h1 class="page-title">Keranjang</h1>
    </header>
    <div class="row">
        <div class="col-md-10">
            <?php
				if ($stiker != null):
					?>
            <h4>Stiker</h4>
            <table class="table table-bordered table-shopping-cart">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Panjang</th>
                        <th>Lebar</th>
                        <th>Bahan</th>
                        <th>Jumlah</th>
                        <th>Estimasi</th>
                        <th>Total</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
						foreach ($stiker as $key => $value):
							?>
                    <tr>
                        <td><img src="<?= base_url('assets/images/stiker/') . $value['stiker_foto'] ?>" alt="foto"
                                style="width: 100%"></td>
                        <td><?= $value['stiker_panjang'] ?> m</td>
                        <td><?= $value['stiker_lebar'] ?> m</td>
                        <td><?= $value['stiker_bahan'] ?></td>
                        <td><?= $value['stiker_jumlah'] ?> </td>
                        <td><?= $value['stiker_estimasi'] ?> Hari</td>
                        <td style="text-align: right"> Rp.<?= nominal($value['stiker_total']) ?></td>
                        <td><a class="fa fa-close table-shopping-remove"
                                href="<?= base_url('hapus/stiker/' . $value['stiker_id']) ?>"
                                onclick="return confirm('Hapus Pesanan? ')"></a></td>
                    </tr>
                    <?php
						endforeach;
						?>
                </tbody>
            </table>
            <div class="gap gap-small"></div>
            <?php
				endif;
				?>
            <?php
				if ($spanduk != null):
					?>
            <h4>Spanduk</h4>
            <table class="table table-bordered table-shopping-cart">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Panjang</th>
                        <th>Lebar</th>
                        <th>Bahan</th>
                        <th>Jumlah</th>
                        <th>Estimasi</th>
                        <th>Total</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
						foreach ($spanduk as $key => $value):
							?>
                    <tr>
                        <td><img src="<?= base_url('assets/images/spanduk/') . $value['spanduk_foto'] ?>" alt="foto"
                                style="width: 100%"></td>
                        <td><?= $value['spanduk_panjang'] ?> m</td>
                        <td><?= $value['spanduk_lebar'] ?> m</td>
                        <td><?= $value['spanduk_bahan'] ?></td>
                        <td><?= $value['spanduk_jumlah'] ?> </td>
                        <td><?= $value['spanduk_estimasi'] ?> Hari</td>
                        <td style="text-align: right"> Rp.<?= nominal($value['spanduk_total']) ?></td>
                        <td><a class="fa fa-close table-shopping-remove"
                                href="<?= base_url('hapus/spanduk/' . $value['spanduk_id']) ?>"
                                onclick="return confirm('Hapus Pesanan? ')"></a></td>
                    </tr>
                    <?php
						endforeach;
						?>
                </tbody>
            </table>
            <div class="gap gap-small"></div>
            <?php
				endif;
				?>
            <?php
				if ($kartu != null):
					?>
            <h4>Kartu Nama</h4>
            <table class="table table-bordered table-shopping-cart">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Bahan</th>
                        <th>Jumlah</th>
                        <th>Estimasi</th>
                        <th>Total</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
						foreach ($kartu as $key => $value):
							?>
                    <tr>
                        <td><img src="<?= base_url('assets/images/kartu/') . $value['kartu_foto'] ?>" alt="foto"
                                style="width: 100%"></td>
                        <td><?= $value['kartu_bahan'] ?></td>
                        <td><?= $value['kartu_jumlah'] ?> </td>
                        <td><?= $value['kartu_estimasi'] ?> Hari</td>
                        <td style="text-align: right"> Rp.<?= nominal($value['kartu_total']) ?></td>
                        <td><a class="fa fa-close table-shopping-remove"
                                href="<?= base_url('hapus/kartu/' . $value['kartu_id']) ?>"
                                onclick="return confirm('Hapus Pesanan? ')"></a></td>
                    </tr>
                    <?php
						endforeach;
						?>
                </tbody>
            </table>
            <div class="gap gap-small"></div>
            <?php
				endif;
				?>
            <?php
				if ($brosur != null):
					?>
            <h4>Brosur</h4>
            <table class="table table-bordered table-shopping-cart">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Bahan</th>
                        <th>Jumlah</th>
                        <th>Estimasi</th>
                        <th>Total</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
						foreach ($brosur as $key => $value):
							?>
                    <tr>
                        <td><img src="<?= base_url('assets/images/brosur/') . $value['brosur_foto'] ?>" alt="foto"
                                style="width: 100%"></td>
                        <td><?= $value['brosur_bahan'] ?></td>
                        <td><?= $value['brosur_jumlah'] ?> </td>
                        <td><?= $value['brosur_estimasi'] ?> Hari</td>
                        <td style="text-align: right"> Rp.<?= nominal($value['brosur_total']) ?></td>
                        <td><a class="fa fa-close table-shopping-remove"
                                href="<?= base_url('hapus/brosur/' . $value['brosur_id']) ?>"
                                onclick="return confirm('Hapus Pesanan? ')"></a></td>
                    </tr>
                    <?php
						endforeach;
						?>
                </tbody>
            </table>
            <div class="gap gap-small"></div>
            <?php
				endif;
				?>
            <?php
				if ($kalender != null):
					?>
            <h4>Kalender</h4>
            <table class="table table-bordered table-shopping-cart">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Bahan</th>
                        <th>Jumlah</th>
                        <th>Estimasi</th>
                        <th>Total</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
						foreach ($kalender as $key => $value):
							?>
                    <tr>
                        <td><img src="<?= base_url('assets/images/kalender/') . $value['kalender_foto'] ?>" alt="foto"
                                style="width: 100%"></td>
                        <td><?= $value['kalender_bahan'] ?></td>
                        <td><?= $value['kalender_jumlah'] ?> </td>
                        <td><?= $value['kalender_estimasi'] ?> Hari</td>
                        <td style="text-align: right"> Rp.<?= nominal($value['kalender_total']) ?></td>
                        <td><a class="fa fa-close table-shopping-remove"
                                href="<?= base_url('hapus/kalender/' . $value['kalender_id']) ?>"
                                onclick="return confirm('Hapus Pesanan? ')"></a></td>
                    </tr>
                    <?php
						endforeach;
						?>
                </tbody>
            </table>
            <div class="gap gap-small"></div>
            <?php
				endif;
				?>
            <?php
				if ($nota != null):
					?>
            <h4>Nota</h4>
            <table class="table table-bordered table-shopping-cart">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Warna</th>
                        <th>Ukuran</th>
                        <th>Isi</th>
                        <th>Jumlah</th>
                        <th>Estimasi</th>
                        <th>Total</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
						foreach ($nota as $key => $value):
							?>
                    <tr>
                        <td><img src="<?= base_url('assets/images/nota/') . $value['nota_foto'] ?>" alt="foto"
                                style="width: 100%"></td>
                        <td><?= $value['nota_warna'] ?></td>
                        <td><?= $value['nota_ukuran'] ?></td>
                        <td><?= $value['nota_rangkap'] ?></td>
                        <td><?= $value['nota_jumlah'] ?> </td>
                        <td><?= $value['nota_estimasi'] ?> Hari</td>
                        <td style="text-align: right"> Rp.<?= nominal($value['nota_total']) ?></td>
                        <td><a class="fa fa-close table-shopping-remove"
                                href="<?= base_url('hapus/nota/' . $value['nota_id']) ?>"
                                onclick="return confirm('Hapus Pesanan? ')"></a></td>
                    </tr>
                    <?php
						endforeach;
						?>
                </tbody>
            </table>
            <div class="gap gap-small"></div>
            <?php
				endif;
				?>
            <?php
				if ($dtf != null):
					?>
            <h4>DTF</h4>
            <table class="table table-bordered table-shopping-cart">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Bahan</th>
                        <th>Panjang</th>
                        <th>Jumlah</th>
                        <th>Estimasi</th>
                        <th>Total</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
						foreach ($dtf as $key => $value):
					?>
                    <tr>
                        <td><img src="<?= base_url('assets/images/dtf/') . $value['dtf_foto'] ?>" alt="foto"
                                style="width: 100%"></td>
                        <td><?= $value['dtf_bahan'] ?> m</td>
                        <td><?= $value['dtf_panjang'] ?> m</td>
                        <td><?= $value['dtf_jumlah'] ?> </td>
                        <td><?= $value['dtf_estimasi'] ?> Hari</td>
                        <td style="text-align: right"> Rp.<?= nominal($value['dtf_total']) ?></td>
                        <td><a class="fa fa-close table-shopping-remove"
                                href="<?= base_url('hapus/dtf/' . $value['dtf_id']) ?>"
                                onclick="return confirm('Hapus Pesanan? ')"></a></td>
                    </tr>
                    <?php
						endforeach;
						?>
                </tbody>
            </table>
            <div class="gap gap-small"></div>
            <?php
				endif;
				?>
            <?php
				if ($tdtf != null):
					?>
            <h4>T-Shirts | DTF</h4>
            <table class="table table-bordered table-shopping-cart">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Bahan</th>
                        <th>Size</th>
                        <th>Jumlah</th>
                        <th>Estimasi</th>
                        <th>Total</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
						foreach ($tdtf as $key => $value):
					?>
                    <tr>
                        <td><img src="<?= base_url('assets/images/tdtf/') . $value['tdtf_foto'] ?>" alt="foto"
                                style="width: 100%"></td>
                        <td><?= $value['tdtf_bahan'] ?> m</td>
                        <td><?= $value['tdtf_size'] ?> m</td>
                        <td><?= $value['tdtf_jumlah'] ?> </td>
                        <td><?= $value['tdtf_estimasi'] ?> Hari</td>
                        <td style="text-align: right"> Rp.<?= nominal($value['tdtf_total']) ?></td>
                        <td><a class="fa fa-close table-shopping-remove"
                                href="<?= base_url('hapus/tdtf/' . $value['tdtf_id']) ?>"
                                onclick="return confirm('Hapus Pesanan? ')"></a></td>
                    </tr>
                    <?php
						endforeach;
						?>
                </tbody>
            </table>
            <div class="gap gap-small"></div>
            <?php
				endif;
				?>
            <?php
				if ($lbstiker != null):
					?>
            <h4>Label Stiker</h4>
            <table class="table table-bordered table-shopping-cart">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Bahan</th>
                        <th>Cutting</th>
                        <th>Laminasi</th>
                        <th>Jumlah</th>
                        <th>Estimasi</th>
                        <th>Total</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
						foreach ($lbstiker as $key => $value):
					?>
                    <tr>
                        <td><img src="<?= base_url('assets/images/lbstiker/') . $value['lbstiker_foto'] ?>" alt="foto"
                                style="width: 100%"></td>
                        <td><?= $value['lbstiker_bahan'] ?> m</td>
                        <td><?= $value['lbstiker_cutting'] ?> m</td>
                        <td><?= $value['lbstiker_laminasi'] ?> m</td>
                        <td><?= $value['lbstiker_jumlah'] ?> </td>
                        <td><?= $value['lbstiker_estimasi'] ?> Hari</td>
                        <td style="text-align: right"> Rp.<?= nominal($value['lbstiker_total']) ?></td>
                        <td><a class="fa fa-close table-shopping-remove"
                                href="<?= base_url('hapus/lbstiker/' . $value['lbstiker_id']) ?>"
                                onclick="return confirm('Hapus Pesanan? ')"></a></td>
                    </tr>
                    <?php
						endforeach;
						?>
                </tbody>
            </table>
            <div class="gap gap-small"></div>
            <?php
				endif;
				?>
        </div>
        <div class="col-md-2">
            <h4>Total</h4>
            <h3>Rp. <?= nominal($keranjang['keranjang_total']) ?></h3>
            <a class="btn btn-primary" href="<?= base_url('bayar/' . $keranjang['keranjang_id']) ?>">Bayar</a>
        </div>
    </div>
</div>
<?php
else:
	?>
<div class="container">
    <div class="text-center"><i class="fa fa-cart-arrow-down empty-cart-icon"></i>
        <p class="lead">Keranjang Kamu Kosong</p><a class="btn btn-primary btn-lg" href="<?= base_url() ?>">Pesan
            Sekarang <i class="fa fa-long-arrow-right"></i></a>
    </div>
</div>
<?php
endif;
?>