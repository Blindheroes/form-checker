<?php
$data = getAllData('mahasiswa');
?>
<div class="container  d-flex">
    <?php if (isset($_SESSION['admin'])) : ?>
        <div class="addData">
            <h4>format: NRP Nama_lengkap angkatan</h4>
            <p>contoh: 5024211009 NABIL MAKARIM 2021</p>
            <form action="api/addData.php" method="POST">
                <textarea name="data" rows="10" cols="100"></textarea><br>
                <input type="submit" value="Insert Data">
            </form>
        </div>
</div>
<?php endif; ?>
<div class="container d-flex">
    <!-- Hoverable rows -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">NRP</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Angkatan</th>
                <th scope="col">Status</th>
                <?php if (isset($_SESSION['admin'])) : ?>
                    <th scope="col">Action</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $msh) { ?>
                <tr>
                    <td scope="row"><?php echo $msh['NRP']; ?></td>
                    <td><?php echo $msh['Nama_lengkap']; ?></td>
                    <td><?php echo $msh['angkatan']; ?></td>
                    <td><?php echo $msh['Status']; ?></td>
                    <?php if (isset($_SESSION['admin'])) : ?>
                        <td class="d-flex">
                            <form action="api\editStatus.php?NRP=<?php echo $msh['NRP']; ?>" method="post">

                                <select name="status" id="status">
                                    <option value="aktif">aktif</option>
                                    <option value="tidak aktif">tidak aktif</option>
                                    <option value="cuti">cuti</option>
                                </select>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <form action="api\deleteData.php?NRP=<?php echo $msh['NRP']; ?>" method="post">
                                <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>