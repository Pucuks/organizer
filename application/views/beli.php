	<div class="container mt-4">
	<?php foreach ($penyedia as $data) {?>
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Detail Transaksi</h6>
			</div>
			<div class="card-body">
				<form method="post" action="<?= base_url('tiket/')?>proses_beli">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Id Paket</label>
						<div class="col-sm-10">
							<input type="hidden" name="idpkt" value="<?= $data->id_pkt;?>">
							<input type="hidden" name="id" value="<?= $username['id'] ?>">
							<?= $data->id_pkt;?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nama Paket</label>
						<div class="col-sm-10">
							<?= $data->nama_pkt;?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Tipe Paket</label>
						<div class="col-sm-10">
							<?= $data->tipe;?>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Tanggal</label>
						<div class="col-sm-2">
							<input type="date" name="tanggal" class="form-control">
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Harga</label>
						<div class="col-sm-10">
							<?=  rupiah($data->harga)?>
						</div>
					</div>
					
					<a href="<?= base_url('')?>" class="btn btn-outline-primary btn-block" >
						Batal</a>
					<a href="#" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#prosesB">
						Beli</a>
					<div class="modal fade" id="prosesB" tabindex="-1" aria-labelledby="notLoginLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="prosesBLabel">Proses Bayar</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p id="hargana">Pembayaran akan segera diproses silahkan konfirmasi ulang...</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
									<button type="submit" class="btn btn-primary">Konfirmasi</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php }?>
	</div>
	</div>
