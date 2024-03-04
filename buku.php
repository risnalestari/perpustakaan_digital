<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
</div>
<div class="row">
    <div class="col-md-12">
        <?php
        if ($_SESSION['user']['level'] != "peminjam") {
        ?>
        <a href="?page=Buku_tambah" class="btn btn-primary">+ Tambah Data</a>
        <?php
        }
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
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
            $query = mysqli_query($koneksi, "SELECT*FROM buku LEFT JOIN kategori_buku on buku.id_kategori = kategori_buku.id_kategori");
            while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama_kategori']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['penulis']; ?></td>
                    <td><?php echo $data['penerbit']; ?></td>
                    <td><?php echo $data['tahun_terbit']; ?></td>
                    <?php
        if ($_SESSION['user']['level'] != "peminjam") {
        ?>
                    <td>
                        <a href="?page=buku_ubah&&id=<?php echo $data['id_buku']; ?>" class="btn btn-info">Ubah</a>
                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"href="?page=buku_hapus&&id=<?php echo $data['id_buku']; ?>" class="btn btn-danger">Hapus</a>
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