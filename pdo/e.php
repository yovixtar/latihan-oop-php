<?php
mysqli_report(MYSQLI_REPORT_STRICT);
try {
    $pdo = new PDO("mysql:host=localhost","khazimstar","Khazimfikri3");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "CREATE DATABASE IF NOT EXISTS exercise";
    $stmt = $pdo->exec($query);
    if ($stmt !== FALSE) {
        echo "Berhasil Membuat Database exercise <br />";
    }

    $query = "use exercise";
    $stmt = $pdo->exec($query);
    if ($stmt !== FALSE) {
        echo "Berhasil Terhubung Database exercise <br />";
    }

    $query = "DROP TABLE IF EXISTS mahasiswa";
    $stmt = $pdo->exec($query);
    
    $query = "CREATE TABLE IF NOT EXISTS mahasiswa(
            nim_mhs INT PRIMARY KEY,
            nama_mhs VARCHAR(50),
            tm_lahir_mhs VARCHAR(50),
            tgl_lahir_mhs DATE,
            fakultas_mhs VARCHAR(50),
            jurusan_mhs VARCHAR(50),
            ipk_mhs DOUBLE
        )";
    $stmt = $pdo->exec($query);
    if ($stmt !== FALSE) {
        echo "Berhasil Membuat Tabel mahasiswa <br />";
    }

    $query = "INSERT INTO `mahasiswa`(`nim_mhs`, `nama_mhs`, `tm_lahir_mhs`, `tgl_lahir_mhs`, `fakultas_mhs`, `jurusan_mhs`, `ipk_mhs`) VALUES (:nim ,:nama,:tempat,:tanggal,:fakul,:jurusan,:ipk)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':nim' => "202400007",
        ':nama' => "Khazim Fikri Al-Fadhli",
        ':tempat' => "Pemalang",
        ':tanggal' => "2001-06-22",
        ':fakul' => "TI",
        ':jurusan' => "Mobile Dev",
        ':ipk' => "3.75"
    ]);
    $stmt->execute([
        ':nim' => "202400010",
        ':nama' => "Babank Chen",
        ':tempat' => "Pekalongan",
        ':tanggal' => "2002-02-12",
        ':fakul' => "TI",
        ':jurusan' => "Desain Grafis",
        ':ipk' => "3.3"
    ]);
    
    echo "<br />";
    $query = "SELECT * FROM mahasiswa";
    $stmt = $pdo->query($query);
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        echo $row[0]." | ".$row[1]." | ".$row[2]." | ".$row[3]." | ".$row[4]." | ".$row[5]." | ".$row[6];
        echo "<br />";
    }
    
    

} catch (\PDOException $e) {
    echo "Koneksi / Query Error : ".$e->getMessage()." , Kode : ".$e->getCode();
} finally { $pdo = NULL; }