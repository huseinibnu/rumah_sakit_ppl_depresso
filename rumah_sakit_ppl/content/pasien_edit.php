<?php
if (!defined('INDEX')) die("");

$query = mysqli_query($con, "SELECT * FROM pasien WHERE id = '$_GET[id]'");
$data = mysqli_fetch_array($query);
?>
<br>
<h2 class="judul">Ubah Data Pasien</h2>
<form method="post" action="?hal=pasien_update" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" id="foto" name="foto">
        <img src="images/<?php echo $data['foto']; ?>" width="150">
    </div>

    <div class="form-group">
        <label for="nama">Nama Pasien</label>
        <div class="input"><input type="text" name="nama" id="nama" value="<?php echo $data['nama_pasien']; ?>"></div>
    </div>

    <div class="form-group">
        <label for="link">Alamat Pasien</label>
        <div class="input"><input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat_pasien']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="link">Kontak Keluarga</label>
        <div class="input"><input type="text" name="kontak" id="kontak" value="<?php echo $data['kontak_keluarga']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <div class="input">
            <textarea style="width: 100%;" rows="5" id="keterangan"
                name="keterangan"><?php echo $data['keterangan']; ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary tombol-detail" value="Simpan" class="tombol_simpan">
        <input type="reset" class="btn btn-primary tombol-detail" value="Batal" class="tombol_reset">
    </div>
</form>