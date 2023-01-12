<div class="card shadow">

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
			<div class="row">
				<div class="col-xl-12">
					<div class="card shadow mb-4">
						<div class="card-header">Ubah Data</div>
						<div class="card-body">
							<div class="container-fluid">
								<form action="<?= base_url('tiket/ubah/')?><?=$db['id_pesanan']?>" method="POST">
									<div class="form-group">
										<label for="exampleInputEmail1">ID Pesanan : </label>
										<?=$db['id_pesanan']?>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Nama Pemesan : </label>
										<?=$db['nama']?>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Nama Paket : </label>
										<?=$db['nama_pkt']?>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Tipe Paket : </label>
										<?=$db['tipe']?>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Tanggal : </label>
										<?=$db['tanggal']?>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Harga Paket : </label>
										<?= rupiah($db['harga'])?>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Status : </label>
										<select class="form-control" name="status">
											<option value="Pembayaran Sukses">Pembayaran Sukses</option>
											<option value="Dibatalkan, Dana Segera Direfund">Dibatalkan</option>
											<option value="Kehabisan Slot, Dana Segera Direfund">Kehabisan Slot</option>
											<option value="Dana Telah Direfund">Dana Direfund</option>
											<option value="Sukses, Menunggu Tanggal Berangkat">Sukses, Menunggu Tanggal
												Berangkat</option>
										</select>
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
                </div>
			</div>


		</div>
	</div>
