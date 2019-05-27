<div class="container">
    <h1 class="mt-5">Uang Muka</h1>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">ID Uang Muka</th>
                <th scope="col">Uang Muka</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dp as $m) : ?>
                <tr>
                    <th scope="row"><?= $m['id_uang_muka']; ?></th>
                    <td><?= $m['uang_muka']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>