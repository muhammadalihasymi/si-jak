<html>

<head>

  <title>DOWNLOAD LAPORAN PAJAK</title>   

  

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

</head>

<body>

 <div class="container ">

  <h3 align="center">DOWNLOAD LAPORAN PAJAK</h3>

  <div class="table-responsive">

   <table class="table table-bordered">

    <tr>
    <th>Kode SKPD</th>
     <th>SKPD</th>
     <th>No SPP</th>
     <th>Nilai SPP</th>
     <th>No SPM</th>
     <th>Nilai SPM</th>
     <th>Tanggal</th>
     <th>Jenis Pajak</th>
     <th>Nilai Pajak</th>
     <th>NPWP</th>
     <th>ID Billing</th>
     <th>NTPN</th>
     
    </tr>

    <?php foreach($employee_data as $row){

     echo '

     <tr>
     <td>'.$row->kdskpd.'</td>
      <td>'.$row->skpd.'</td>
      <td>'.$row->nospp.'</td>
      <td>'.$row->nilaispp.'</td>
      <td>'.$row->nospm.'</td>
      <td>'.$row->nilaispm.'</td>
      <td>'.$row->tanggal.'</td>
      <td>'.$row->jenispjk.'</td>
      <td>'.$row->nilaipajak.'</td>  
      <td>'.$row->npwp.'</td>
      <td>'.$row->idbilling.'</td>
      <td>'.$row->ntpn.'</td>

     </tr>

     ';

    } ?>

   </table>

   <div align="center">

    <form method="post" action="<?php echo base_url();?>index.php/files/action">

     <input type="submit" name="export" class="btn btn-success" value="Export" />

    </form>

   </div>

   <br />

   <br />

  </div>

 </div>

</body>

</html>