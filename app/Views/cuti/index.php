<?= $this->extend('layout/master.php') ?>

<?= $this->section('content') ?>
<div id="content">
    <?= $this->include('layout/navbar.php') ?>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                    </div>
                    <h5 class="card-title">Default Table</h5>
                    <table class="table" id="tabel">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pegawai ID</th>
                                <th scope="col">Jenis Cuti ID</th>
                                <th scope="col">Tanggal Mulai</th>
                                <th scope="col">Tanggal Selesai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Bukti</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tanggal Approval</th>
                                <th scope="col">Tanggal Pengajuan</th>
                                <th scope="col">Aksi</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $i => $d) {
                            ?>
                                <tr>
                                    <td width="30" class="text-center"><?= $i + 1; ?></td>
                                    <td><?= $d->pegawai_id; ?></td>
                                    <td><?= $d->jenis_cuti_id; ?></td>
                                    <td><?= $d->tanggal_mulai; ?></td>
                                    <td><?= $d->tanggal_selesai; ?></td>
                                    <td><?= $d->keterangan; ?></td>
                                    <td><?= $d->bukti; ?></td>
                                    <td><?= $d->status; ?></td>
                                    <td><?= $d->tanggal_approval; ?></td>
                                    <td><?= $d->tanggal_pengajuan; ?></td>

                                    <td class="text-center">
                                        <a href="<?= base_url('hantu/edit/' . $d->id) ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('hantu/destroy/' . $d->id) ?>" class="btn btn-danger">Hapus</a>

                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- End of Main Content -->

<?= $this->endSection() ?>