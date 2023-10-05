<!-- Card -->
<div id="foods">
    <div class="judul-card">
        <h1 class="display-4 text-center font-weight-normal">Our Patient</h1>
    </div>
    <a href="?hal=pasien_tambah" class="btn btn-primary tombol-detail">Tambah</a>
    <div class="row row-cols-1 row-cols-md-2">
        <?php
        $query = mysqli_query($con, "SELECT * FROM pasien");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <div class="col mb-4">
            <div class="card">
                <img src="images/<?php echo $data['foto']; ?>" class="card-img-top" alt="pasien">
                <div class="card-body">
                <h5 class="card-title"><?php echo $data['nama_pasien']; ?></h5>
                <p class="card-text"><?php echo $data['alamat_pasien']; ?></p>
                <p class="card-text"><?php echo $data['kontak_keluarga']; ?></p>
                <p class="card-text"><?php echo $data['keterangan']; ?></p>
                <a class="btn btn-primary tombol-detail" href="?hal=pasien_edit&id=<?php echo $data['id']; ?>">Edit</a>
                <a class="btn btn-primary tombol-detail"
                    href="?hal=pasien_hapus&id=<?php echo $data['id']; ?>&foto=<?php echo $data['foto']; ?>">Hapus</a>
            </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<!-- Akhir Card -->