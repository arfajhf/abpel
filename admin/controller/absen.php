        

<?php
        //mendefinisikan folder
        define('UPLOAD_DIR', 'upload/');
    
        //koneksi ke database
        include '../config.php';
        //menangkap variabel
        date_default_timezone_get('asia/jakarta');
        $img        = $_POST['image'];
        $name       = $_POST['name'];
        $jurusa     = $_POST['jurusan'];
        $tgl        = date('YYYY-MM-DD');
        $time       = time('H:M:I');
    
        $img        = str_replace('data:image/jpeg;base64,', '', $img);
        $img        = str_replace(' ', '+', $img);
    
        //resource gambar diubah dari encode
        $data       = base64_decode($img);
    
        //menamai file, file dinamai secara random dengan unik
        $file       = uniqid() . '.png';
        
        //memindahkan file ke folder upload
        file_put_contents(UPLOAD_DIR.$file, $data);
    
        //memasukkan data ke dalam tabel biodata
        mysqli_query($conn, "INSERT INTO laporan (nama, jurusan, gambar, tanggal_absen, jam_absen) values ('$name', '$jurusa', '$file', '$tgl', '$time')");
    ?>