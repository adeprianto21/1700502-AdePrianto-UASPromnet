<div class="container">
    <h1 class="mt-5">Lama Cicilan</h1>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID Cicil</th>
                <th>Tenor</th>
                <th>Bunga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cicil as $m) : ?>
                <tr>
                    <th><?= $m['id_cicil']; ?></th>
                    <td><?= $m['tenor']; ?></td>
                    <td><?= $m['bunga']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>