<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-12">
            <form method="post">
            <?php
            if(isset($_POST['submit'])) {
                $kategori = $_POST['kategori'];
                $query= mysqli_query($koneksi, "INSERT INTO kategori_buku(nama_kategori) values('$kategori')");

                if($query) {
                    echo '<script>alert("Tambah data berhasil");location.href = "index.php?page=kategori";</script>';
                }else{
                    echo '<script>alert("Tambah data gagal.");</script>';
                }
            }
            ?>
            <div class="row mb-3">
                <div class="col-md-2">Nama Kategori</div>
                <div class="col-nd-10"><input type="text" class="form-control" name="kategori"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</div>

        

            
        