        <div class="form-group row">
            <div class="col-sm-12 bg-light">
                <h5>Data Pegawai</h5>
                <hr class="my-0">
            </div>
        </div>

        <div class="form-group row">
          <label for="nip" class="col-sm-3 form-label">NIP</label>
          <div class="col-sm-9">
            <input type="number" name="nip" class="inputku" id="nip" placeholder="1234xxx">
          </div>
        </div>

        <div class="form-group row">
          <label for="namaPegawai" class="col-sm-3 form-label">Nama pegawai</label>
          <div class="col-sm-9">
            <input type="text" name="namaPegawai" class="inputku" id="namaPegawai" placeholder="Nama pegawai">
          </div>
        </div>

        <div class="form-group row ">
          <label class="col-sm-3 form-label">Jenis Kelamin</label>
                <div class="form-check ml-2 mt-1">
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="lakiLaki" value="laki-laki" checked>
                    <label class="form-check-label" for="lakiLaki">
                        Laki-laki
                    </label>
                        &emsp;&emsp;
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="perempuan">
                    <label class="form-check-label" for="perempuan">
                        Perempuan
                    </label>
                </div>
        </div>

        <div class="form-group row">
          <label for="tempatLahir" class="col-sm-3 form-label">Tempat Lahir</label>
          <div class="col-sm-9">
            <input type="text" name="tempatLahir" class="inputku" id="tempatLahir" placeholder="Tempat Lahir">
          </div>
        </div>

        <div class="form-group row">
          <label for="tanggalLahir" class="col-sm-3 form-label">Tanggal Lahir</label>
          <div class="col-sm-9">
            <input type="date" name="tanggalLahir" class="inputDateKu" id="tanggalLahir" placeholder="Tanggal Lahir">
          </div>
        </div>

        <div class="form-group row">
          <label for="alamat" class="col-sm-3 form-label">Alamat</label>
          <div class="col-sm-9">
            <input type="text" name="alamat" class="inputku" id="alamat" placeholder="Alamat">
          </div>
        </div>

        <div class="form-group row">
          <label for="pendidikanTerakhir" class="col-sm-3 form-label">Pend. Terakhir</label>
          <div class="col-sm-9">
            <input type="text" name="pendidikanTerakhir" class="inputku" id="pendidikanTerakhir" placeholder="Pendidikan terakhir : SD,SMP,SMA,s1,s2,s3">
          </div>
        </div>

        <div class="form-group row">
          <label for="jurusanPendidikan" class="col-sm-3 form-label">Jurusan Pend.</label>
          <div class="col-sm-9">
            <input type="text" name="jurusanPendidikan" class="inputku" id="jurusanPendidikan" placeholder="Jurusan">
          </div>
        </div>

        <div class="form-group row">
          <label for="tahunLulus" class="col-sm-3 form-label">Tahun Lulus</label>
          <div class="col-sm-9">
          <select name="tahunLulus" id="tahunLulus" class="form-control">
              <?php 
                  $tahunLalu = date('Y',strtotime('-50 years'));
                  $tahunDepan = date('Y',strtotime('+5 years'));
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
          <label for="noHp" class="col-sm-3 form-label">No Hp</label>
          <div class="col-sm-9">
            <input type="number" name="noHp" class="inputku" id="noHp" placeholder="08123456xxx">
          </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-sm-3 form-label">Email</label>
          <div class="col-sm-9">
            <input type="email" name="email" class="inputku" id="email" placeholder="Email@mail.com">
          </div>
        </div>

        <div class="form-group row">
          <label for="agama" class="col-sm-3 form-label">Agama</label>
          <div class="col-sm-9">
              <select name="agama" id="agama" class="form-control">
                  <option value="Islam">Islam</option>
                  <option value="Kristen Protestan">Kristen Protestan</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Kong Hu Cu">Kong Hu Cu</option>
              </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="statusKawin" class="col-sm-3 form-label">Status Kawin</label>
          <div class="col-sm-9">
              <select name="statusKawin" onchange="tgl_kawin();" id="statusKawin" class="form-control">
                  <option value="belum kawin">Belum Kawin</option>
                  <option value="kawin">Kawin</option>
              </select>
            
          </div>
        </div>


        <div class="form-group row" id="tglKawin" style="display: none;">
          
        </div>

        <script>
            function tgl_kawin() {
            var kawin = document.getElementById('statusKawin').value;

                if(kawin=='kawin'){
                    document.getElementById('suamiIstri').style.display='';
                    document.getElementById('suamiIstri').innerHTML = "<div class='form-group row'><div class='col-sm-12 bg-light'><h5>Data Suami/Istri</h5><hr class='my-0'></div></div><div class='form-group row'><label for='namaSuamiAtauIstri' class='col-sm-3 form-label'>Nama Suami/istri</label><div class='col-sm-9'><input type='text' name='namaSuamiAtauIstri' class='inputku' id='namaSuamiAtauIstri' placeholder='Nama Suami/istri'></div></div><div class='form-group row'><label for='tglLahirSuamiAtauIstri' class='col-sm-3 form-label'>Tgl Lahir S/I</label><div class='col-sm-9'><input type='date' name='tglLahirSuamiAtauIstri' class='inputDateKu' id='tglLahirSuamiAtauIstri' placeholder='Tgl Lahir'></div></div><div class='form-group row'><label for='tglMeninggalAtauCerai' class='col-sm-3 form-label'>Meninggal/Cerai</label><div class='col-sm-9'><input type='date' name='tglMeninggalAtauCerai' class='inputDateKu' id='tglMeninggalAtauCerai' placeholder='Tgl Meninggal atau Cerai'></div></div><div class='form-group row'><label for='pekerjaanSuamiAtauIstri' class='col-sm-3 form-label'>Pekerjaan S/I</label><div class='col-sm-9'><input type='text' name='pekerjaanSuamiAtauIstri' class='inputku' id='pekerjaanSuamiAtauIstri' placeholder='Pekerjaan S/I'></div></div><div class='form-group row'><label for='penghasilanSuamiAtauIstri' class='col-sm-3 form-label'>Peng.Bulanan</label><div class='col-sm-9'><input type='number' name='penghasilanSuamiAtauIstri' class='inputku' id='penghasilanSuamiAtauIstri' placeholder='Penghasilan Bulanan'></div></div>";

                    document.getElementById('tglKawin').style.display='';
                    document.getElementById('tglKawin').innerHTML = "<label for='tglPerkawinan' class='col-sm-3 form-label'>Tgl Perkawinan</label><div class='col-sm-9'><input type='date' name='tglPerkawinan' class='inputDateKu' id='tglPerkawinan' placeholder='Tgl Perkawinan'></div>";
                }else {
                    document.getElementById('tglKawin').style.display='none';
                    document.getElementById('tglKawin').innerHTML = "";
                    document.getElementById('suamiIstri').style.display='none';
                    document.getElementById('suamiIstri').innerHTML = "";
                }
            }
        </script>

        <div class="form-group row">
          <label for="statusPegawai" class="col-sm-3 form-label">Status Pegawai</label>
          <div class="col-sm-9">
            <input type="text" name="statusPegawai" class="inputku" id="statusPegawai" placeholder="Status Pegawai">
          </div>
        </div>

        <div class="form-group row">
          <label for="golongan" class="col-sm-3 form-label">Golongan</label>
          <div class="col-sm-9">
            <input type="text" name="golongan" class="inputku" id="golongan" placeholder="Golongan">
          </div>
        </div>


        <div class="form-group row">
          <label for="catatanMutasi" class="col-sm-3 form-label">Catatan Mutasi</label>
          <div class="col-sm-9">
            <input type="text" name="catatanMutasi" class="inputku" id="catatanMutasi" placeholder="catatan mutasi">
          </div>
        </div>


        <div class="form-group row">
          <label for="jumlahJamDiklat" class="col-sm-3 form-label">Jml Jam Dilat</label>
          <div class="col-sm-9">
            <input type="number" name="jumlahJamDiklat" class="inputku" id="jumlahJamDiklat" placeholder="Jumlah jam diklat">
          </div>
        </div>

        


        <div class="form-group row">
          <label for="gajiPokok" class="col-sm-3 form-label">Gaji Pokok</label>
          <div class="col-sm-9">
            <input type="number" name="gajiPokok" class="inputku" id="gajiPokok" placeholder="Gaji Pokok">
          </div>
        </div>