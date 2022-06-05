<?php
// pengecekan ajax request untuk mencegah direct access file, agar file tidak bisa diakses secara langsung dari browser
// jika ada ajax request
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
  // panggil file "database.php" untuk koneksi ke database
  require_once "database.php";

  // ambil tanggal sekarang
  $tanggal = date("Y-m-d");

  // sql statement untuk menampilkan data dari tabel "tbl_antrian" berdasarkan "tanggal"
  $query = mysqli_query($mysqli, "SELECT antrian_layanan.id, antrian_layanan.no_antrian_layanan, 
  antrian_layanan.status, antrian_layanan.kehadiran, antrian_layanan.nama_loket, 
  kategori_layanan.nama_layanan 
  FROM antrian_layanan, kategori_layanan 
  WHERE antrian_layanan.id_layanan = kategori_layanan.id_layanan 
  AND antrian_layanan.tgl_antrian_layanan='$tanggal'
  AND antrian_layanan.kehadiran='hadir'")
                                  or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
  // ambil jumlah baris data hasil query
  $rows = mysqli_num_rows($query);

  // cek hasil query
  // jika data ada
  if ($rows <> 0) {
    $response = array();
    $response["data"] = array();

    // ambil data hasil query
    while ($row = mysqli_fetch_assoc($query)) {
      $data['id'] = $row["id"];
      $data['no_antrian_layanan'] = $row["no_antrian_layanan"];
      $data['nama_layanan'] = $row["nama_layanan"];
      $data['nama_loket'] = $row["nama_loket"];
      $data['status'] = $row["status"];

      array_push($response["data"], $data);
    }

    // tampilkan data
    echo json_encode($response);
  }
  // jika data tidak ada
  else {
    $response = array();
    $response["data"] = array();

    // buat data kosong untuk ditampilkan
    $data['id'] = "";
    $data['no_antrian_layanan'] = "-";
    $data['nama_layanan'] = "";
    $data['nama_loket'] = "";
    $data['status'] = "";

    array_push($response["data"], $data);

    // tampilkan data
    echo json_encode($response);
  }
}
