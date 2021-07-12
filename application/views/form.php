<html>
<head>
  <title>Form Import</title>
  <!-- Load File jquery.min.js yang ada difolder js -->
  <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
  <script>
  $(document).ready(function(){
    // Sembunyikan alert validasi kosong
    $("#kosong").hide();
  });
  </script>
</head>
<body>
  <h3>Form Import</h3>
  <hr>
  <a href="<?php echo base_url("csv/format.csv"); ?>">Download Format</a>
  <br>
  <br>
  <!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
  <form method="post" action="<?php echo base_url("index.php/Siswa/form"); ?>" enctype="multipart/form-data">
    <!--
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->
    <input type="file" name="file">
    <!--
    -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
    -->
    <input type="submit" name="preview" value="Preview">
  </form>
  <?php
  if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
    if(isset($upload_error)){ // Jika proses upload gagal
      echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
      die; // stop skrip
    }
    // Buat sebuah tag form untuk proses import data ke database
    echo "<form method='post' action='".base_url("index.php/import/import")."'>";
    // Buat sebuah div untuk alert validasi kosong
    echo "<div style='color: red;' id='kosong'>
    Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum terisi semua.
    </div>";
    echo "<table border='1' cellpadding='8'>
    <tr>
      <th colspan='5'>Preview Data</th>
    </tr>
    <tr>
    <th style="text-align: center;">Perangkat Daerah</th>
    <th style="text-align: center;">Nomor SPP</th>
    <th style="text-align: center;">Nilai SPP</th>
    <th style="text-align: center;">Nomor SPM</th>
     <th style="text-align: center;">Nilai SPM</th>
    <th style="text-align: center;">Tanggal SPM</th>
    <th style="text-align: center;">Keterangan Pajak</th>
    <th style="text-align: center;">Nilai Pajak</th>
     <th style="text-align: center;">NPWP</th>
     <th style="text-align: center;">Id Billing</th>
     <th style="text-align: center;">NTPN</th>
    </tr>";
    $numrow = 1;
    $kosong = 0;
    // Lakukan perulangan dari data yang ada di csv
    // $sheet adalah variabel yang dikirim dari controller
    foreach($sheet as $row){
      // START -->
      // Skrip untuk mengambil value nya
      $cellIterator = $row->getCellIterator();
      $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
      $get = array(); // Valuenya akan di simpan kedalam array,dimulai dari index ke 0
      foreach ($cellIterator as $cell) {
        array_push($get, $cell->getValue()); // Menambahkan value ke variabel array $get
      }
      // <-- END
      // Ambil data value yang telah di ambil dan dimasukkan ke variabel $get
      $skpd = $get[0]; // Ambil data NIS
      $nospp = $get[1]; // Ambil data nama
      $nilaispp = $get[2]; // Ambil data jenis kelamin
      $nospm = $get[3]; // Ambil data alamat
      $nilaispm = $get[4];
      $tanggal = $get[5];
      $jenispjk = $get[6];
      $nilaipajak = $get[7];
      $npwp = $get[8];
      $idbilling = $get9;
      $ntpn = $get[10];
      // Cek jika semua data tidak diisi
      if($skpd == "" && $nospp == "" && $nilaispp == "" && $nospm == "" && $nilaispm == "" && $tanggal == "" && $jenispjk == "" && $nilaipajak == ""
      && $npwp == "" && $idbilling == "" && $ntpn == "")
        continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
      // Cek $numrow apakah lebih dari 1
      // Artinya karena baris pertama adalah nama-nama kolom
      // Jadi dilewat saja, tidak usah diimport
      if($numrow > 1){
        // Validasi apakah semua data telah diisi
        $skpd_td = ($skpd == "")? " style='background: #E07171;'" : ""; // Jika NIS kosong, beri warna merah
        $nospp_td = ($nospp == "")? " style='background: #E07171;'" : ""; // Jika Nama kosong, beri warna merah
        $nilaispp_td = ($nilaispm == "")? " style='background: #E07171;'" : ""; // Jika Jenis Kelamin kosong, beri warna merah
        $nospm_td = ($nospm == "")? " style='background: #E07171;'" : ""; // Jika Alamat kosong, beri warna merah
        $nilaispm_td = ($nilaispm == "")? " style='background: #E07171;'" : ""; 
        $tanggal_td = ($tanggal == "")? " style='background: #E07171;'" : ""; 
        $jenispjk_td = ($jenispjk == "")? " style='background: #E07171;'" : ""; 
        $nilaipajak_td = ($nilaipajak == "")? " style='background: #E07171;'" : ""; 
        $npwp_td = ($npwp == "")? " style='background: #E07171;'" : ""; 
        $idbilling_td = ($idbilling == "")? " style='background: #E07171;'" : ""; 
        $ntpn_td = ($ntpn == "")? " style='background: #E07171;'" : ""; 
        // Jika salah satu data ada yang kosong
        iif($skpd == "" && $nospp == "" && $nilaispp == "" && $nospm == "" && $nilaispm == "" && $tanggal == "" && $jenispjk == "" && $nilaipajak == ""
        && $npwp == "" && $idbilling == "" && $ntpn == ""){
          $kosong++; // Tambah 1 variabel $kosong
        }
        echo "<tr>";
        echo "<td".$skpd.">".$skpd."</td>";
        echo "<td".$nospp.">".$nospp."</td>";
        echo "<td".$nilaispp.">".$nilaispp."</td>";
        echo "<td".$nospm.">".$nospm."</td>";
        echo "<td".$nilaispm.">".$nilaispm."</td>";
        echo "<td".$tanggal.">".$tanggal."</td>";
        echo "<td".$jenispjk.">".$jenispjk."</td>";
        echo "<td".$nilaipajak.">".$nilaipajak."</td>";
        echo "<td".$npwp.">".$npwp."</td>";
        echo "<td".$idbilling.">".$idbilling."</td>";
        echo "<td".$ntpn.">".$ntpn."</td>";
        echo "</tr>";
      }
      $numrow++; // Tambah 1 setiap kali looping
    }
    echo "</table>";
    // Cek apakah variabel kosong lebih dari 1
    // Jika lebih dari 1, berarti ada data yang masih kosong
    if($kosong > 1){
    ?>
      <script>
      $(document).ready(function(){
        // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
        $("#jumlah_kosong").html('<?php echo $kosong; ?>');
        $("#kosong").show(); // Munculkan alert validasi kosong
      });
      </script>
    <?php
    }else{ // Jika semua data sudah diisi
      echo "<hr>";
      // Buat sebuah tombol untuk mengimport data ke database
      echo "<button type='submit' name='import'>Import</button> ";
      echo "<a href='".base_url("index.php/import")."'>Cancel</a>";
    }
    echo "</form>";
  }
  ?>
</body>
</html>