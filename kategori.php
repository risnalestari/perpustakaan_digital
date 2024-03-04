<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
</div>
<div class="row">
    <div class="col-md-12">
    <?php
        if ($_SESSION['user']['level'] != "peminjam") {
        ?>
        <a href="?page=kategori_tambah" class="btn btn-primary">+ Tambah Data</a>
        <?php
        }
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <?php
        if ($_SESSION['user']['level'] != "peminjam") {
        ?>
                <th>Aksi</th>
                <?php
        }
        ?>
            </tr>
            <?php
            $i = 1;
            $query = mysqli_query($koneksi, "SELECT*FROM kategori_buku");
            while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama_kategori']; ?></td>
                    <?php
        if ($_SESSION['user']['level'] != "peminjam") {
        ?>
                    <td>
                        <a href="?page=kategori_ubah&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-info">Ubah</a>
                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"href="?page=kategori_hapus&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                    <?php
        }
        ?>
                </tr>
                <?php
            }
        ?>
        </table>
    </div>
</div>