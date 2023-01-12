<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Detail Transaksi</h6>
	</div>
	<div class="card-body">
    <div class="container-fluid">
	<div class="row">
	<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-primary shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
										Total User</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800">
										<?= count($usersite) ?>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-user fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Earnings (Monthly) Card Example -->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-info shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
										Total Pesanan</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800">
										<?= count($tp) ?>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-clock fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
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
								<th>Nama Pemesan</th>
								<th>Email Pemesan</th>
                                <th>Tipe</th>
								<th>Tanggal Keberangkatan</th>
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
								<td><?= $data->nama ?></td>
								<td><?= $data->email ?></td>
                                <td><?= $data->tipe ?></td>
								<td><?= $data->tanggal ?></td>
								<td><?= rupiah($data->harga) ?></td>
								<td><?= $data->status ?></td>
                                <td><a href="<?= base_url('tiket/ubahdt/')?><?=$data->id_pesanan ?>" class="btn btn-warning">Ubah Status</a></td>
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
