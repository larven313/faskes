<div class="col-md-12">
    <h3 class="text-center">
        Daftar Mata Kuliah
    </h3>
    <table class="table" border="1" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_matkul as $matkul) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $matkul->kode ?></td>
                    <td><?= $matkul->nama ?></td>
                    <td><?= $matkul->sks ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>