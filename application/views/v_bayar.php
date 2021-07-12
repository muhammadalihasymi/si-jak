<body>
<center><h2>Laporan Data Transaksi Pajak</h2></center>
 <br>
 <div class="row">
                        <div class="col-md-12">
                            <?php if($this->session->flashdata('info')):?>
                  <div class="alert alert-danger"><?php echo $this->session->flashdata('info');?></div>
                <?php endif;?>
                            <div class="panel panel-default">
                        <div class="panel-heading">
                                   
                                   
                                  
                                   <a href="<?php echo base_url();?>index.php/bayar/tambah" class="btn btn-success"> Tambah Data </a> 
                                </div>
                               
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>  
                                        <tr>
                                            <th style="text-align: center;">No.</th>
                                            <th style="text-align: center;">Kode SKPD.</th>
                                            <th style="text-align: center;">Perangkat Daerah</th>
                                            <th style="text-align: center;">Nomor SPM</th>
                                            <th style="text-align: center;">Nilai SPM</th>
                                            <th style="text-align: center;">Nomor SP2D</th>
                                             <th style="text-align: center;">Nilai SP2D</th>
                                            <th style="text-align: center;">Tanggal SP2D</th>
                                            <th style="text-align: center;">Keterangan Pajak</th>
                                            <th style="text-align: center;">Nilai Pajak</th>
                                             <th style="text-align: center;">NPWP</th>
                                             <th style="text-align: center;">Id Billing</th>
                                             <th style="text-align: center;">NTPN</th>  
                                             <th style="text-align: center;">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                        
                                        $no=1;
                                        foreach ($data as $i){                         
                                        ?>
                                        <tr class="odd gradeX">
                                            <td style="text-align: center;"><?php echo $no++;?></td>
                                            <td><?php echo $i->kdskpd;?></td>
                                            <td><?php echo $i->skpd;?></td>
                                            <td><?php echo $i->nospp;?></td>
                                            <td style="text-align: right;"><?php echo number_format($i->nilaispp,2, ',', '.');?></td>
                                            <td><?php echo $i->nospm;?></td>
                                            <td style="text-align: right;"><?php echo number_format($i->nilaispm,2, ',', '.');?></td>
                                            <td style="text-align: center;"><?php echo date('d-m-Y', strtotime($i->tanggal));?></td>
                                             <td><?php echo $i->jenispjk;?></td>
                                             <td style="text-align: right;"><?php echo number_format($i->nilaipajak,2, ',', '.');?></td>
                                             <td><?php echo $i->npwp;?></td>
                                             <td><?php echo $i->idbilling;?></td>
                                             <td><?php echo $i->ntpn;?></td>
                                            <td >
                                                <a href="<?php echo base_url()?>index.php/bayar/edit/<?php echo $i->idx ?>" class="btn btn-success btn-xs" > Edit</a>
                                                <a href="<?php echo base_url()?>index.php/bayar/hapus/<?php echo $i->kdskpd?>" class="btn btn-danger btn-xs"> Hapus</a>
                                            </td>
                                            <?php
                                           
                                        }
                                        ?>
                                        </tr>
                                        
                                    </tbody>
                                   
                                </table>
                            </div>
                            
                        </div>
                    </div>
                  </div>
                </div>
             
                    <!--End Advanced Tables -->
                       
         
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
   
     <!-- DATA TABLE SCRIPTS -->
   <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables/dataTables.bootstrap.js"></script>
       <script type="text/javascript">
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
                responsive: true
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    
   
                     
  </body>      
