<div class="container">
    <h1 class="mt-5">Tambah Penjualan</h1>
    <form class="mt-5" action="<?= base_url() . 'home/pushPenjualan'; ?>" method="post">
        <div class="form-group">
            <label>ID Motor</label>
            <input type="number" class="form-control" name="id_motor">
        </div>
        <div class="form-group">
            <label>ID Cicil</label>
            <input type="number" class="form-control" name="id_cicil">
        </div>
        <div class="form-group">
            <label>ID Uang Muka</label>
            <input type="number" class="form-control" name="id_uang_muka">
        </div>
        <div class="form-group">
            <label>Cicilan Pokok</label>
            <input type="number" class="form-control" name="cicilan_pokok">
        </div>
        <div class="form-group">
            <label>Cicilan Bunga</label>
            <input type="number" class="form-control" name="cicilan_bunga">
        </div>
        <div class="form-group">
            <label>Cicilan Total</label>
            <input type="number" class="form-control" name="cicilan_total">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>