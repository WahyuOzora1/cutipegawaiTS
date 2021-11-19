
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
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin/th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Email</th>
                                <th scope="col">Aksi</th>

                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $i => $d) {
                            ?>
                                <tr>
                                    <td width="30" class="text-center"><?= $i + 1; ?></td>
                                    <td><?= $d['nama']; ?></td>
                                    <td><?= $d['jenis_kelamin']; ?></td>
                                    <td><?= $d['alamat']; ?></td>
                                    <td><?= $d['telepon']; ?></td>
                                    <td><?= $d['email']; ?></td>

                                    <td class="text-center">
                                        <a href="<?= base_url('hantu/edit/' . $d['id']) ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('hantu/destroy/' . $d['id']) ?>" class="btn btn-danger">Hapus</a>

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









