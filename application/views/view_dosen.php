<div class="col-md-12">
    <h3 class="text-center">
        Daftar Dosen
    </h3>
    <table class="table" border="1" class="table-success">
        <thead>
            <tr>
                <th>#</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_dosen as $dosen) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $dosen->nidn ?></td>
                    <td><?= $dosen->nama ?></td>
                    <td><?= $dosen->gender ?></td>
                    <td><?= $dosen->pendidikan ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>