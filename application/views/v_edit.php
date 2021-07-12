<div class="rows">
                <div class="col-md-12">
                   <h2 > Edit Data Penyaluran</h2>
                   <hr size="">
                 
                    


<form class="form-horizontal" method="POST" >

<div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Kode SKPD</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kdskpd" name="kdskpd"  placeholder="" value="<?php echo $editdata->kdskpd;?>">
    </div>
  </div>
  
<div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">SKPD</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="skpd" name="skpd"  placeholder="" value="<?php echo $editdata->skpd;?>">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">NO SPP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nospp" name="nospp" placeholder="" value="<?php echo $editdata->nospp;?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Nilai SPP</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="nilaispp" name="nilaispp" placeholder="" value="<?php echo $editdata->nilaispp;?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">NO SPM</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nospm" name="nospm" placeholder="" value="<?php echo $editdata->nospm;?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Nilai SPM</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="nilaispm" name="nilaispm" placeholder="" value="<?php echo $editdata->nilaispm;?>">
    </div>
  </div>

  
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Tanggal SPM</label>
    <div class="col-sm-10">
      <input type="DATE" class="form-control" id="tanggal" name="tanggal" placeholder="" value="<?php echo $editdata->tanggal;?>">
    </div>
  </div>
  
 
    <div class="form-group row">
     <label for="" class="col-sm-2 col-form-label">Jenis Pajak</label>
      <div class="col-sm-10">
        
          <select name="jenispjk" id="jenispjk" class="form-control" type="text" placeholder="Pilih Jenis Pajak..." style="width:;" value="<?php echo $editdata->iddak;?>" >
                          <option> -Pilih- </option>
                           <option value="411121"> 411121 </option>
                            <option value="411122"> 411122 </option>
                             <option value="411124"> 411124 </option>
                             <option value="411127"> 411127</option>
                             <option value="411128"> 411128</option>
                             <option value="411211"> 411211</option>
                        </select>
 
  </div>
</div>

<div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Nilai Pajak</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="nilaipajak" name="nilaipajak" placeholder="" value="<?php echo $editdata->nilaipajak;?>">
    </div>
  </div>


<div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">NPWP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="npwp" name="npwp" placeholder="" value="<?php echo $editdata->npwp;?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">ID Billing</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="idbilling" name="idbilling" placeholder="" value="<?php echo $editdata->idbilling;?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">NTPN </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ntpn" name="ntpn" placeholder="" value="<?php echo $editdata->ntpn;?>">
    </div>
  </div>
  

  <div class="form-group row">
    <div class="col-sm-5">
      <button   class="submit btn btn-primary col-md-0 col-md-offset-5" value="Simpan" name="simpan">Updated</button>
    </div>
  </div>
</form>
<div class="form-group row">
    <div class="col-sm-10">
      <a   class="button btn btn-success " href="<?php echo base_url();?>index.php/salur"> <== Kembali</a>
    </div>
  </div>