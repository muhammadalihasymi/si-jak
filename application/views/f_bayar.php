<div class="rows">
  <div class="col-md-12">
    <h2> Tambah Data Pajak</h2>
    <hr size="">
    <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/bayar/insert">
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Kode Skpd</label>
        <div class="col-sm-6">
          <select id="kdskpd" class="form-control" name="kdskpd" required>
            <option value="">-- Pilih Kode SKPD --</option>
            <?php
            foreach ($yes as $row) {
              echo "<option value='" . $row->kdskpd . "'>" . $row->kdskpd . " " . $row->nmskpd . "</option>";
            }
            echo "
		</select>"
            ?>
        </div>
      </div>

      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">SKPD</label>
        <div class="col-sm-6">
          <select id="skpd" class="form-control" name="skpd" required>
            <option value="">-- Pilih SKPD --</option>
            <?php
            foreach ($yes as $row) {
              echo "<option value='" . $row->nmskpd . "'> " . $row->nmskpd . "</option>";
            }
            echo "
		</select>"
            ?>
        </div>
      </div>

      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">NO SPM</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="nospp" name="nospp" placeholder="" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nilai SPM</label>
        <div class="col-sm-5">
          <input name="nilaispp" id="nilaispp" class="form-control" type="number" placeholder="Nilai SPP" style="width:;" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">NO SP2D</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="nospm" name="nospm" placeholder="" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nilai SP2D</label>
        <div class="col-sm-5">
          <input name="nilaispm" id="nilaispm" class="form-control" type="number" placeholder="Nilai SPM" style="width:;" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Tanggal SPM</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Jenis Pajak</label>
        <div class="col-sm-5">
          <select name="jenispjk" id="jenispjk" class="form-control" type="text" placeholder="Pilih pajak..." style="width:;" required>
            <option> -Pilih- </option>
            <option value="411121"> Pajak Penghasilan Ps 21 </option>
            <option value="411122"> Pajak Penghasilan Ps 22 </option>
            <option value="411123"> Pajak Penghasilan Ps 23 </option>
            <option value="411126"> Pajak Penghasilan Ps 26</option>
            <option value="411128"> Pajak Penghasilan Ps 28</option>
            <option value="411211"> Pajak Pertambahan Nilai</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nilai Pajak</label>
        <div class="col-sm-5">
          <input name="nilaipajak" id="nilaipajak" class="form-control" type="number" placeholder="Nilai Pajak" style="width:;" required>
        </div>
      </div>


      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">NPWP Bendahara/Rekanan</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="npwp" name="npwp" placeholder="isi dengan NPWP">
        </div>
      </div>

      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">ID Billing Pajak</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="idbilling" name="idbilling" placeholder="isi dengan id billing pajak" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">NTPN</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="ntpn" name="ntpn" placeholder="isi dengan kode NTPN pajak" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-5">
          <button class="submit btn btn-primary col-md-0 col-md-offset-5" value="Simpan" nama="simpan">SIMPAN DATA</button>
          <a class="button btn btn-success " href="<?php echo base_url(); ?>index.php/bayar"> Kembali</a>
        </div>
      </div>
    </form>