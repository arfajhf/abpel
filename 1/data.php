        

<div class="row">
    <?php
        //koneksi ke database
        include '../admin/config.php';
    
        //mengambil data ke tabel biodata
        $select     = mysqli_query($conn, 'select * from laporan');
    
        //melakukan looping dengan while
        while ($hasil = mysqli_fetch_array($select)) {
    ?>
    <div class="col-4">
        <!-- data ditampilkan dalam bentuk gambar -->
        <img src='upload/<?php echo $hasil['gambar'];?>' width="100%" />
        <!-- data ditampilkan dalam bentuk text  -->
        <p style="text-align:center"><?php echo $hasil['nama']; ?></p>
    </div>
    <?php } ?>
</div>