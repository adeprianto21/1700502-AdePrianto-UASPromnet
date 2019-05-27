<div class="container">
    <h1 class="mt-5">Motor</h1>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">ID Motor</th>
                <th scope="col">Tipe Motor</th>
                <th scope="col">Harga Motor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($motor as $m) : ?>
                <tr>
                    <th scope="row"><?= $m['id_motor']; ?></th>
                    <td><?= $m['tipe_motor']; ?></td>
                    <td><?= $m['harga_motor']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>