        
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        Webcam.snap(function(data_uri) {
                image = data_uri;
        });

    </script>
</body>
</html> -->
<?php
        //mendefinisikan folder
        define('UPLOAD_DIR', 'upload/');
    
        //koneksi ke database
        $conn = mysqli_connect('localhost', 'root', '', 'abma');
        
        date_default_timezone_set('Asia/Jakarta');
        //menangkap variabel
        $img        = $_POST['image'];
        $name       = $_POST['name'];
        $jurusan    = $_POST['jurusan'];
        $pljr       = $_POST['pelajaran'];
        $tgl        = date('Y-m-d');
        $time       = date('H:i:s');
    
        $img        = str_replace('data:image/jpeg;base64,', '', $img);
        $img        = str_replace(' ', '+', $img);
    
        //resource gambar diubah dari encode
        $data       = base64_decode($img);
    
        //menamai file, file dinamai secara random dengan unik
        $file       = uniqid() . '.png';
        
        //memindahkan file ke folder upload
        file_put_contents(UPLOAD_DIR.$file, $data);
    
        //memasukkan data ke dalam tabel biodata
        // $sql = mysqli_query($conn, "insert into laporan set nama='$name',jurusan='$jurusan', gambar='$file', tanggal_masuk='$tgl', jam_masuk='$time'");
        
        $sql = mysqli_query($conn, "INSERT INTO laporan (nama, jurusan, pelajaran, gambar, tanggal_masuk, jam_masuk) values ('$name', '$jurusan', '$pljr', '$file', '$tgl', '$time')");
    
        if($sql){
            header('location: htm.php?status=sukses');
        }

    ?>