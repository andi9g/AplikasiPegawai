<div class="form-group row">
            <div class="col-sm-12 bg-light">
                <h5>Data Pangkat</h5>
                <hr class="my-0">
            </div>
        </div>

        <div class="form-group row">
          <label for="tamatPangkat" class="col-sm-3 form-label">Tamat Pangkat</label>
          <div class="col-sm-9">
          <select name="tamatPangkat" id="tamatPangkat" class="form-control">
              <?php 
                  $tahunLalu = date('Y',strtotime('-30 years'));
                  $tahunDepan = date('Y',strtotime('+20 years'));
                  $tahunSekarang = date('Y');
                  for ($i= $tahunLalu; $i <= $tahunDepan ; $i++) {
              ?>
                 <option value="<?php echo $i?>" <?php if ($i == $tahunSekarang) {
                   echo 'selected';
                 }?>><?php echo $i?></option>
              <?php }?>
          </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="diklatTerakhir" class="col-sm-3 form-label">Diklat Terakhir</label>
          <div class="col-sm-9">
            <input type="text" name="diklatTerakhir" class="inputku" id="diklatTerakhir" placeholder="Diklat Terakhir">
          </div>
        </div>


        <div class="form-group row">
          <label for="tahunDiklat" class="col-sm-3 form-label">Tahun Diklat</label>
          <div class="col-sm-9">
          <select name="tahunDiklat" id="tahunDiklat" class="form-control">
              <?php 
                  $tahunLalu = date('Y',strtotime('-25 years'));
                  $tahunDepan = date('Y',strtotime('+20 years'));
                  $tahunSekarang = date('Y');
                  for ($i= $tahunLalu; $i <= $tahunDepan ; $i++) {
              ?>
                 <option value="<?php echo $i?>" <?php if ($i == $tahunSekarang) {
                   echo 'selected';
                 }?>><?php echo $i?></option>
              <?php }?>
          </select>
          </div>
        </div>



        <div class="form-group row">
          <label for="noKarpeg" class="col-sm-3 form-label">No. KARPEG</label>
          <div class="col-sm-9">
            <input type="number" name="noKarpeg" class="inputku" id="noKarpeg" placeholder="Nomor Kartu Pegawai">
          </div>
        </div>


        <div class="form-group row">
          <label for="npwp" class="col-sm-3 form-label">NPWP</label>
          <div class="col-sm-9">
            <input type="number" name="npwp" class="inputku" id="npwp" placeholder="NPWP">
          </div>
        </div>


        <div class="form-group row">
          <label for="jabatan" class="col-sm-3 form-label">Jabatan</label>
          <div class="col-sm-9">
            <input type="text" name="jabatan" class="inputku" id="jabatan" placeholder="Jabatan">
          </div>
        </div>

        <div class="form-group row">
          <label for="eslonJabatan" class="col-sm-3 form-label">Eslon Jabatan</label>
          <div class="col-sm-9">
            <input type="text" name="eslonJabatan" class="inputku" id="jabatan" placeholder="Eslon Jabatan contoh: II.a">
          </div>
        </div>


        <div class="form-group row">
          <label for="tamatJabatan" class="col-sm-3 form-label">Tamat Jabatan</label>
          <div class="col-sm-9">
            <input type="date" name="tamatJabatan" class="inputDateKu" id="tamatJabatan" placeholder="Tamat Jabatan">
          </div>
        </div>

        <div class="form-group row">
          <label for="instansi" class="col-sm-3 form-label">Instansi</label>
          <div class="col-sm-9">
            <input type="text" name="instansi" class="inputDateKu" id="instansi" placeholder="Instansi">
          </div>
        </div>

        <div class="form-group row">
          <label for="unitOrganisasi" class="col-sm-3 form-label">Unit Organisasi</label>
          <div class="col-sm-9">
            <input type="date" name="unitOrganisasi" class="inputDateKu" id="unitOrganisasi" placeholder="Unit Organisasi">
          </div>
        </div>



        <div class="form-group row">
          <label for="masaKerjaGolTahun" class="col-sm-3 form-label">Masa Kerja Gol. Thn</label>
          <div class="col-sm-9">
          <select name="masaKerjaGolTahun" id="masaKerjaGolTahun" class="form-control">
              <?php 
                  $tahunLalu = date('Y',strtotime('-20 years'));
                  $tahunDepan = date('Y',strtotime('+20 years'));
                  $tahunSekarang = date('Y');
                  for ($i= $tahunLalu; $i <= $tahunDepan ; $i++) {
              ?>
                 <option value="<?php echo $i?>" <?php if ($i == $tahunSekarang) {
                   echo 'selected';
                 }?>><?php echo $i?></option>
              <?php }?>
          </select>
          </div>
        </div>


        <div class="form-group row">
          <label for="masaKerjaGolBulan" class="col-sm-3 form-label">Masa Kerja Gol. Bln</label>
          <div class="col-sm-9">
          <select name="masaKerjaGolBulan" id="masaKerjaGolBulan" class="form-control">
              <?php 
                  $j = 0;
                  for ($i= 1; $i <= 12 ; $i++) {
                      $bulan = date('F',strtotime('2020-'.$i.'-01'));
              ?>
                 <option value="<?php echo $bulan?>"><?php echo $bulan?></option>
              <?php 
                $j++;
            }?>
          </select>
          </div>
        </div>

        