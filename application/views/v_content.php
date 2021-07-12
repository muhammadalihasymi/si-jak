<meta http-equiv=”refresh” content=”60″>
                <div class="row">
                    <div class="col-md-12">
                    <marquee> <h3>SELAMAT DATANG............. DI APLIKASI LAPORAN PAJAK TAHUN 2021</h3> </marquee>  
                       <hr> 
                    </div>
                </div>              
                 <!-- /. ROW  -->
                
                 <marquee> </marquee>
            
                
                      
                
                
            
                            
                           <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="text-muted">Jumlah Pajak dilaporkan</p>
                    <p class="text-muted"><h3><strong>Rp. <?php echo number_format($sum,2, ',', '.');?></strong></h3></p>
                </div>
             </div>
		     </div>
                    

                   
             </div>
             </div>
          <hr/>
                 
          <script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>         


           
