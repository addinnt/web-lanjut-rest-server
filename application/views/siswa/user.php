<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align: center;
margin-bottom:30px"> Data Siswa </h1>
    </div>
    <table class="table table-striped table-bordered" id="list_sw">
        <thead>
            <tr>
            <th>#</th>
            <th>Nama</th>
            <th>nis</th>
            <th>alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no=1;
                foreach ($siswa as $sw) {?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $sw->nama; ?></td>
                        <td><?= $sw->nim; ?></td>
                        <td><?= $sw->alamat; ?></td>
                    </tr>
                <?php }
            ?>
        </tbody>
    </table>
</div>

