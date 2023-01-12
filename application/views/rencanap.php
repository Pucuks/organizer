<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Detail Transaksi</h6>
	</div>
	<div class="card-body">
		<div class="container-fluid">
			<a href="<?= base_url()?>" class="btn btn-success mb-1">Beli Paket Lainnnya</a>
			<div class="row">
				<!-- Earnings (Monthly) Card Example -->
				</div>
			</div>
			<div class="card shadow mb-4">
				<div class="card-body">
					<div class="container-fluid">
						<?= $this->session->flashdata('message'); ?>
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID Pesanan</th>
										<th>Nama Paket</th>
										<th>Tipe</th>
										<th>Tanggal</th>
										<th>Harga</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
	foreach($pesanan as $data) {
	?>
									<tr>
										<td><?= $data->id_pesanan ?></td>
										<td><?= $data->nama_pkt ?></td>
										<td><?= $data->tipe ?></td>
										<td><?= $data->tanggal ?></td>
										<td><?= rupiah($data->harga) ?></td>
										<td><?= $data->status ?></td>
										<?php if($data->status == "Pembayaran Sukses")  {?>
										<td><a href="<?= base_url('tiket/batalp/')?><?=$data->id_pesanan ?>"
												class="btn btn-danger">Batalkan Pesanan</a></td>
										<?php } else {?>
										<td><button class="btn btn-danger" disabled>Batalkan Pesanan</button></td>
										<?php }?>
									</tr>
						</div>
						<?php }?>
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>
</div>
