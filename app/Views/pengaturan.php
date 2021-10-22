<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pengaturan</h1>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pengaturan</h6>
        </div>
        <div class="card-body">
            <form id="form">
                    <input type="text" name="id" value="<?php echo $data['id'] ?>">
                <div class="form-group">
                    <label>Nama Perpustakaan</label>
                    <input type="text" name="nama" placeholder="Nama" class="form-control" value="<?php echo $data['nama']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Harga Denda (Per Hari)</label>
                    <input type="number" placeholder="Denda" name="denda" class="form-control" value="<?php echo $data['denda']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Tentang Perpustakaan</label>
                    <textarea name="tentang" rows="4" class="form-control" placeholder="Tentang" required><?php echo $data['tentang']; ?></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary shadow">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>
<?= $this->include('_parts/foot'); ?>

<!-- Page level plugins -->
<script src="<?php echo base_url() ?>/public/sbadmin/vendor/jquery-validation/jquery.validate.min.js"></script>

<!-- Page level custom scripts -->
<script>
    let simpan_url = '<?php echo base_url('public/pengaturan/simpan') ?>'
</script>
<script src="<?php echo base_url() ?>/public/js/pengaturan.js"></script>
<?= $this->endSection() ?>