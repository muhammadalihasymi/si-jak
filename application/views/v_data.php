<body>
<center><h2>Laporan Data Transaksi Pajak</h2></center>
 <br>
 <div class="row">
 <a href="<?php echo site_url('import'); ?>"class="btn btn-success">Import Data</a>
                            <div class="panel panel-default">
                        <div class="panel-heading">
                        
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                       
                                    <thead>  
                                        <tr>
                                            <th style="text-align: center;">No.</th>
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
                                             
                                        </tr>
                                    </thead>
                                    <tbody>
				<?php if ( ! empty($pelanggan)) { ?>
					<?php
						$no = 0;
						foreach ($pelanggan as $data) {
						$no++;
					?>
						<tr>
							<td><?php echo $no; ?></td>
                            <td><?php echo $data['skpd']; ?></td>
							<td><?php echo $data['nospp']; ?></td>
							<td><?php echo $data['nilaispp']; ?></td>
							<td><?php echo $data['nospm']; ?></td>
							<td><?php echo $data['nilaispm']; ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td><?php echo $data['jenispjk']; ?></td>
                            <td><?php echo $data['nilaipajak']; ?></td>
                            <td><?php echo $data['npwp']; ?></td>
                            <td><?php echo $data['idbilling']; ?></td>
                            <td><?php echo $data['ntpn']; ?></td>
						</tr>
					<?php } ?>
				<?php } else {?>
					<tr>
						<td colspan="12">Tidak ada data!</td>
					</tr>
				<?php } ?>
                </tbody>
                                   
                                   </table>
                               </div>
                               
                           </div>
                       </div>
                     </div>
                   </div>
 <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
 
    
   