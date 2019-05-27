<div class="container">
    <h1 class="mt-5">Penjualan</h1>
    <a href="<?= base_url() . 'home/addPenjualan' ?>" class="btn btn-primary mt-5">Tambah Penjualan</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">ID Penjualan</th>
                <th scope="col">Tipe Motor</th>
                <th scope="col">Harga Motor</th>
                <th scope="col">Tenor</th>
                <th scope="col">Uang Muka</th>
                <th scope="col">Cicilan Pokok</th>
                <th scope="col">Cicilan Bunga</th>
                <th scope="col">Cicilan Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($penjualan as $m) : ?>
                <tr>
                    <th scope="row"><?= $m['id_penjualan']; ?></th>
                    <td><?= $m['tipe_motor']; ?></td>
                    <td><?= $m['harga_motor']; ?></td>
                    <td><?= $m['tenor']; ?></td>
                    <td><?= $m['uang_muka']; ?></td>
                    <td><?= $m['cicilan_pokok']; ?></td>
                    <td><?= $m['cicilan_bunga']; ?></td>
                    <td><?= $m['cicilan_total']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>