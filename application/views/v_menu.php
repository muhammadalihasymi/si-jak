

<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="<?php echo base_url();?>assets/img/logo4.png" class="user-image img-responsive"/>
                    <a>Waktu Server <span id="clock"><?php print date('H:i:s'); ?></span></a>
          </li>
        
          
                    <li>
                        <a  href="<?php echo base_url();?>index.php/dash"><i class="fa fa-home "></i> Dashboard</a>

                    </li>
                    <li>
                        <a  href="<?php echo base_url();?>index.php/info"><i class="fa fa-home "></i> Informasi </a>

                    </li>
                    <li>
                        <a  href="<?php echo base_url();?>index.php/bayar"><i class="fa fa-home "></i> Input Data Pembayaran Pajak </a>

                    </li>
                    <li>
                        <a  href="<?php echo base_url();?>index.php/lapor"><i class="fa fa-home "></i> Rekap Jenis Pajak</a>

                    </li>
                     <li>
                        <a  href="<?php echo base_url();?>index.php/files"><i class="fa fa-home "></i> Download File</a>

                    </li>
                    <li>
                        <a  href="<?php echo base_url();?>index.php/import"><i class="fa fa-home "></i> Upload File</a>

                    </li>
                     <li>
                        <a  href="<?php echo base_url();?>index.php/Jenis"><i class="fa fa-home "></i> Jenis Potongan Pajak</a>

                    </li>
                    <li>
                        <a  href="<?php echo base_url();?>index.php/home/logout"><i class="fa fa-home "></i> Logout</a>
                      </li>
                      
               
            </div>
            <script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>