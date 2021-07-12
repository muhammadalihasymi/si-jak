<center><h2>REKAPITULASI JENIS PAJAK</h2></center>
<br>
 <br>
 <div class="container">  
                       
                                </div>
                               
                               <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No.</th>
                                            <th style="text-align: center;">Kode SKPD</th>
                                            <th style="text-align: center;">Jenis Pajak</th>
                                             <th style="text-align: center;">Nilai Pajak</th>
                                            
                                            
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
                                             <td><?php echo $i->jenispjk;?></td>
                                             <td style="text-align: right;"><?php echo number_format($i->nilaipajak,2, ',', '.');?></td>
                                             
                                            <?php
                                           
                                        }
                                        ?>
                                        </tr>
                                        
                                    </tbody>
                                    
                                </table>
                            </div>
                            
                        </div>
                    </div>
                   
   