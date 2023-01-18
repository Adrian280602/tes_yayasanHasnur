<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<div class="info">
				<center>
					<h2><i class="fas fa-th-list"></i>&nbsp;&nbsp;Project Monitoring</h2>
				</center>
				<hr style="border: 1px grey solid;">
			</div><br>

			<?php if (session()->getFlashdata('Pesan')) : ?>
				<div class="alert alert-success" role="alert">
					<?= session()->getFlashdata('Pesan'); ?>
				</div>
			<?php endif; ?>

			<nav class="navbar navbar-light bg-info justify-content-between">
				<form action="" method="POST" class="form-inline" style="margin-top: 10px; margin-bottom: 10px;">
					<form class=" form-inline">
						<div class="input-group">
							<div class="btn-group mr-2" role="group" aria-label="cari">
								<input class="form-control mr-sm-2" type="search" placeholder="Cari Project Leader..." aria-label="Search" name="keyword">
							</div>
							<div class="btn-group" role="group" aria-label="tombolCari">
								<button class="btn btn-primary" type="submit" name="submit">Cari</button>
							</div>
						</div>
					</form>
				</form>
				<form class="form-inline">
					<?= $pager->links('semnas', 'semnas_pagination') ?>
				</form>
			</nav>

			<div style="overflow-x:auto;">
				<table id="table_id" class="table table-striped table-dark mydatatable" width="100%">
					<thead>
						<tr>
							<th scope="col">Project Name</th>
							<th scope="col">Client</th>
							<th scope="col">Project leader</th>
							<th scope="col">Start Date</th>
							<th scope="col">End Date</th>
							<th scope="col">Progress</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1 + (5 * ($curpage - 1)); ?>
						<?php foreach ($semnas as $dt) : ?>
							<tr>
								<td><?= $dt['project_name']; ?></td>
								<td><?= $dt['client']; ?></td>
								<td><?= $dt['nama']; ?></td>
								<td><?= $dt['start_date']; ?></td>
								<td><?= $dt['end_date']; ?></td>
								<td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
					  <td><button type="submit">Hapus</button><button type="submit">Update</button></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<?= $this->endSection(); ?>