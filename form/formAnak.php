<div class="form-group row">
            <div class="col-sm-12 bg-light">
                <h5>Data Anak</h5>
                <hr class="my-0">
            </div>
        </div>

        <div class="form-group row">
          <label for="jumlahAnakKandung" class="col-sm-3 form-label">Anak Kandung</label>
          <div class="col-sm-9">
            <input type="text" maxlength="2" name="jumlahAnakKandung" onkeyup="anakKandung();" class="inputku" id="jumlahAnakKandung" placeholder="Jumlah anak kandung">
          </div>
        </div>

        <div class="form-group row">
          <label for="jumlahAnakAngkat" class="col-sm-3 form-label">Anak Angkat</label>
          <div class="col-sm-9">
            <input type="text" maxlength="2" onkeyup="anakAngkat();" name="jumlahAnakAngkat" class="inputku" id="jumlahAnakAngkat" placeholder="Jumlah anak Angkat">
          </div>
        </div>

        <div class="form-group row">
          <label for="jumlahAnakTiri" class="col-sm-3 form-label">Anak Tiri</label>
          <div class="col-sm-9">
            <input type="text" maxlength="2" onkeyup="anakTiri();" name="jumlahAnakTiri" class="inputku" id="jumlahAnakTiri" placeholder="Jumlah anak Tiri">
          </div>
        </div>




        <div id="anakKandungOpen" style="display: none;">
            <div id="anakKandungJudul">
            </div>
            <div id="anakKandung">
            </div>
        </div>


        <div id="anakAngkatOpen" style="display: none;">
            <div id="anakAngkatJudul">
            </div>
            <div id="anakAngkat">
            </div>
        </div>

        <div id="anakTiriOpen" style="display: none;">
            <div id="anakTiriJudul">
            </div>
            <div id="anakTiri">
            </div>
        </div>



        <script>
            function anakKandung() {
                var jumlah = document.getElementById('jumlahAnakKandung').value;

                if(jumlah > 0){
                    document.getElementById('anakKandungOpen').style.display='';
                    document.getElementById('anakKandungJudul').innerHTML = "<div class='form-group row'><div class='col-sm-12 bg-light'><h5>Anak Kandung</h5><hr class='my-0'></div></div>";
                    var tampilIsi = [];
                    var j = 0;
                    for (let i = 0; i < jumlah; i++) {
                        j = j + 1;
                        tampilIsi[i] = "<div class='form-group row'><div class='col-sm-12'><h5>AK : "+ j+"</h5></div></div><div class='form-group row'><label for='statusAnakKandung"+ j +"' class='col-sm-3 form-label'>Status Anak"+ j +"</label><div class='col-sm-9'><input type='text' name='statusAnakKandung"+ j +"' class='inputku' id='statusAnakKandung"+ j +"' value='AK' readonly></div></div><div class='form-group row'><label for='namaAnakKandung"+ j +"' class='col-sm-3 form-label'>Nama Anak"+ j +"</label><div class='col-sm-9'><input type='text' name='namaAnakKandung"+ j +"' class='inputku' id='namaAnakKandung"+ j +"' placeholder='Nama Anak Kandung'></div></div><div class='form-group row'><label for='tglLahirAnakKandung"+ j +"' class='col-sm-3 form-label'>Tgl Lahir Anak"+ j +"</label><div class='col-sm-9'><input type='date' name='tglLahirAnakKandung"+ j +"' class='inputDateKu' id='tglLahirAnakKandung"+ j +"' placeholder='Tgl Lahir'></div></div><div class='form-group row'><label for='tempatSekolahAnakKandung"+ j +"' class='col-sm-3 form-label'>Tempat Sekolah</label><div class='col-sm-9'><input type='text' name='tempatSekolahAnakKandung"+ j +"' class='inputku' id='tempatSekolahAnakKandung"+ j +"' placeholder='Nama Sekolah'></div></div>";

                    }
                    document.getElementById('anakKandung').innerHTML = tampilIsi;
                }else{
                    document.getElementById('anakKandungOpen').style.display='none';
                }
                
            }


            function anakAngkat() {
                var jumlah = document.getElementById('jumlahAnakAngkat').value;

                if(jumlah > 0){
                    document.getElementById('anakAngkatOpen').style.display='';
                    document.getElementById('anakAngkatJudul').innerHTML = "<div class='form-group row'><div class='col-sm-12 bg-light'><h5>Anak Angkat</h5><hr class='my-0'></div></div>";
                    var tampilIsi = [];
                    var j = 0;
                    for (let i = 0; i < jumlah; i++) {
                        j = j + 1;
                        tampilIsi[i] = "<div class='form-group row'><div class='col-sm-12'><h5>AA : "+ j+"</h5></div></div><div class='form-group row'><label for='statusAnakAngkat"+ j +"' class='col-sm-3 form-label'>Status Anak"+ j +"</label><div class='col-sm-9'><input type='text' name='statusAnakAngkat"+ j +"' class='inputku' id='statusAnakAngkat"+ j +"' value='AK' readonly></div></div><div class='form-group row'><label for='namaAnakAngkat"+ j +"' class='col-sm-3 form-label'>Nama Anak"+ j +"</label><div class='col-sm-9'><input type='text' name='namaAnakAngkat"+ j +"' class='inputku' id='namaAnakAngkat"+ j +"' placeholder='Nama Anak Kandung'></div></div><div class='form-group row'><label for='tglLahirAnakAngkat"+ j +"' class='col-sm-3 form-label'>Tgl Lahir Anak"+ j +"</label><div class='col-sm-9'><input type='date' name='tglLahirAnakAngkat"+ j +"' class='inputDateKu' id='tglLahirAnakAngkat"+ j +"' placeholder='Tgl Lahir'></div></div><div class='form-group row'><label for='tempatSekolahAnakAngkat"+ j +"' class='col-sm-3 form-label'>Tempat Sekolah</label><div class='col-sm-9'><input type='text' name='tempatSekolahAnakAngkat"+ j +"' class='inputku' id='tempatSekolahAnakAngkat"+ j +"' placeholder='Nama Sekolah'></div></div>";

                    }
                    document.getElementById('anakAngkat').innerHTML = tampilIsi;
                }else{
                    document.getElementById('anakAngkatOpen').style.display='none';
                }
                
            }

            function anakTiri() {
                var jumlah = document.getElementById('jumlahAnakTiri').value;

                if(jumlah > 0){
                    document.getElementById('anakTiriOpen').style.display='';
                    document.getElementById('anakTiriJudul').innerHTML = "<div class='form-group row'><div class='col-sm-12 bg-light'><h5>Anak Tiri</h5><hr class='my-0'></div></div>";
                    var tampilIsi = [];
                    var j = 0;
                    for (let i = 0; i < jumlah; i++) {
                        j = j + 1;
                        tampilIsi[i] = "<div class='form-group row'><div class='col-sm-12'><h5>AT : "+ j+"</h5></div></div><div class='form-group row'><label for='statusAnakTiri"+ j +"' class='col-sm-3 form-label'>Status Anak"+ j +"</label><div class='col-sm-9'><input type='text' name='statusAnakTiri"+ j +"' class='inputku' id='statusAnakTiri"+ j +"' value='AK' readonly></div></div><div class='form-group row'><label for='namaAnakTiri"+ j +"' class='col-sm-3 form-label'>Nama Anak"+ j +"</label><div class='col-sm-9'><input type='text' name='namaAnakTiri"+ j +"' class='inputku' id='namaAnakTiri"+ j +"' placeholder='Nama Anak Kandung'></div></div><div class='form-group row'><label for='tglLahirAnakTiri"+ j +"' class='col-sm-3 form-label'>Tgl Lahir Anak"+ j +"</label><div class='col-sm-9'><input type='date' name='tglLahirAnakTiri"+ j +"' class='inputDateKu' id='tglLahirAnakTiri"+ j +"' placeholder='Tgl Lahir'></div></div><div class='form-group row'><label for='tempatSekolahAnakTiri"+ j +"' class='col-sm-3 form-label'>Tempat Sekolah</label><div class='col-sm-9'><input type='text' name='tempatSekolahAnakTiri"+ j +"' class='inputku' id='tempatSekolahAnakTiri"+ j +"' placeholder='Nama Sekolah'></div></div>";

                    }
                    document.getElementById('anakTiri').innerHTML = tampilIsi;
                }else{
                    document.getElementById('anakTiriOpen').style.display='none';
                }
                
            }

        </script>