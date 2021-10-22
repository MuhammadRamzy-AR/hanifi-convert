<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Buku</h1>
        <a href="<?php echo site_url('buku/cetak') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak</a>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header align-items-center py-6 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
            <div class="col d-flex p-0 justify-content-end">
                <div>
                    <button class="btn btn-primary shadow-sm btn-sm" id="tambah">Tambah</button>
                    <button class="btn btn-danger shadow-sm btn-sm action d-none" id="hapus">Hapus</button>
                    <button class="btn btn-success shadow-sm btn-sm action d-none" id="edit">Edit</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="table" class="table table-bordered" width="100%" cellpadding="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>id</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Jumlah</th>
                            <th>Dipinjam</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Add -->
    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="form">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah</h5>
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kode</label>
                            <input type="text" name="kode" placeholder="Kode" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select id="kategoriSelect" name="kategori" class="select2 form-control" required>
                                <option value="" selected disabled>-- SELECT --</option>
                                <?php foreach($data_kategori as $data): ?>
                                    <option id="<?= $data['id'] ?>" value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="number" name="jumlah" placeholder="Jumlah" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary shadow" type="submit">Tambah</button>
                        <button class="btn btn-danger shadow" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->include('_parts/foot'); ?>

<script>
    let add_url = '<?php echo base_url('public/buku/add') ?>'
    let read_url = '<?php echo base_url('public/buku/read') ?>'
    let edit_url = '<?php echo base_url('public/buku/edit') ?>'
    let delete_url = '<?php echo base_url('public/buku/delete') ?>'

</script>

<script src="<?php echo base_url() ?>/public/js/buku.js"></script>
<?= $this->endSection() ?>