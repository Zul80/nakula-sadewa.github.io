<div class="container">
    <header class="page-header">
        <h1 class="page-title">Checkout Pesanan</h1>
    </header>
    <div class="row row-col-gap" data-gutter="60">
        <div class="col-md-4">
            <h3 class="widget-title">Info Pesanan</h3>
            <div class="box">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Jenis</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
						if ($spanduk == !null):
							?>
                            <td>Spanduk</td>
                            <td><?=count($spanduk)?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($spanduk as $key=>$value) {
									$harga = $harga + $value['spanduk_total'];
								}
								echo 'Rp. '.nominal($harga)
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
                            <td><?=count($stiker)?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($stiker as $key=>$value) {
									$harga = $harga + $value['stiker_total'];
								}
								echo 'Rp. '.nominal($harga)
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
                            <td><?=count($kartu)?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($kartu as $key=>$value) {
									$harga = $harga + $value['kartu_total'];
								}
								echo 'Rp. '.nominal($harga)
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
                            <td><?=count($brosur)?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($brosur as $key=>$value) {
									$harga = $harga + $value['brosur_total'];
								}
								echo 'Rp. '.nominal($harga)
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
                            <td><?=count($a4brosur)?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($a4brosur as $key=>$value) {
									$harga = $harga + $value['a4brosur_total'];
								}
								echo 'Rp. '.nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        <tr>
                        <tr>
                            <?php
						if ($a5brosur == !null):
							?>
                            <td>Brosur A5</td>
                            <td><?=count($a5brosur)?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($a5brosur as $key=>$value) {
									$harga = $harga + $value['a5brosur_total'];
								}
								echo 'Rp. '.nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        <tr>
                            <?php
						if ($a6brosur == !null):
							?>
                            <td>Brosur A5</td>
                            <td><?=count($a6brosur)?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($a6brosur as $key=>$value) {
									$harga = $harga + $value['a6brosur_total'];
								}
								echo 'Rp. '.nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        <tr>
                            <?php
						if ($kalender == !null):
							?>
                            <td>Kalender</td>
                            <td><?=count($kalender)?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($kalender as $key=>$value) {
									$harga = $harga + $value['kalender_total'];
								}
								echo 'Rp. '.nominal($harga)
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
                            <td>Nota</td>
                            <td><?=count($nota)?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($nota as $key=>$value) {
									$harga = $harga + $value['nota_total'];
								}
								echo 'Rp. '.nominal($harga)
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
                            <td>DTF</td>
                            <td><?=count($dtf)?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($dtf as $key=>$value) {
									$harga = $harga + $value['dtf_total'];
								}
								echo 'Rp. '.nominal($harga)
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
                            <td>T-Shirts | DTF</td>
                            <td><?=count($tdtf)?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($tdtf as $key=>$value) {
									$harga = $harga + $value['tdtf_total'];
								}
								echo 'Rp. '.nominal($harga)
								?>
                            </td>
                            <?php
						endif;
						?>
                        </tr>
                        <tr>
                            <?php
						if ($lbstiker == !null):
							?>
                            <td>Label Stiker</td>
                            <td><?=count($lbstiker)?></td>
                            <td style="text-align: right">
                                <?php
								$harga = 0;
								foreach ($lbstiker as $key=>$value) {
									$harga = $harga + $value['lbstiker_total'];
								}
								echo 'Rp. '.nominal($harga)
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
                            <td style="text-align: right"><b>Rp. <?= nominal($pesanan['keranjang_total']) ?></b></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="widget-title">Pembayaran</h3>
            <div class="box">
                <?=form_open('bayar/'.$pesanan['keranjang_id'])?>
                <p>Pilih Jenis Pembayaran</p>
                <input type="radio" name="tipebayar" value="bri" required> Transfer Bank BRI <br>
                <input type="radio" name="tipebayar" value="bni" required> Transfer Bank BNI <br>
                <br>
                <button type="submit" class="btn btn-primary" name="selesai">Selesai</button>
                <div class="gap gap-small"></div>
                <?=form_close()?>
            </div>
        </div>
    </div>
</div>