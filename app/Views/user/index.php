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
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Level Active</th>
                                <th scope="col">Pegawai_id</th>
                                <th scope="col">Aksi</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $i => $d) {
                            ?>
                                <tr>
                                    <td width="30" class="text-center"><?= $i + 1; ?></td>
                                    <td><?= $d->username; ?></td>
                                    <td><?= $d->password; ?></td>
                                    <td><?= $d->level_active; ?></td>
                                    <td><?= $d->pegawai_id; ?></td>

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