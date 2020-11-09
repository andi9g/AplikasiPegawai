        <div class="form-group row">
            <div class="col-sm-9 bg-light">
                <h5>Riwayat Pendidikan Pegawai</h5>
                <hr class="my-0">
            </div>
            <div class="col-sm-3 bg-light">
                <h5>Tahun</h5>
                <hr class="my-0">
            </div>
        </div>


        <div class="form-group row my-0">
            <label for="tk" class="col-sm-2 form-label">TK</label>
            <div class="col-sm-7">
                <input type="text" name="tk" class="form-control" id="tk" placeholder="Taman Kanak-Kanak">
            </div>
            <div class="col-3">
            <div class="form-group row">
                <select name="tahunLulusTk" id="tahunLulusTk" class="form-control">
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
        </div>


        <div class="form-group row my-0">
            <label for="sd" class="col-sm-2 form-label">SD</label>
            <div class="col-sm-7">
                <input type="text" name="sd" class="form-control" id="sd" placeholder="Sekolah Dasar">
            </div>
            <div class="col-3">
            <div class="form-group row">
                <select name="tahunLulusSd" id="tahunLulusSd" class="form-control">
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
        </div>


        <div class="form-group row my-0">
            <label for="smp" class="col-sm-2 form-label">SMP</label>
            <div class="col-sm-7">
                <input type="text" name="smp" class="form-control" id="smp" placeholder="Sekolah Menengah Pertama">
            </div>
            <div class="col-3">
            <div class="form-group row">
                <select name="tahunLulusSmp" id="tahunLulusSmp" class="form-control">
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
        </div>



        <div class="form-group row my-0">
            <label for="sma" class="col-sm-2 form-label">SMA</label>
            <div class="col-sm-7">
                <input type="text" name="sma" class="form-control" id="sma" placeholder="Sekolah Menengah Atas">
            </div>
            <div class="col-3">
            <div class="form-group row">
                <select name="tahunLulusSma" id="tahunLulusSma" class="form-control">
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
        </div>



        <div class="form-group row my-0">
            <label for="perguruanTinggi" class="col-sm-2 form-label">Perguruan Tinggi</label>
            <div class="col-sm-7">
                <input type="text" name="perguruanTinggi" class="form-control" id="perguruanTinggi" placeholder="Perguruan Tinggi">
            </div>
            <div class="col-3">
            <div class="form-group row">
                <select name="tahunLulusPerguruanTinggi" id="tahunLulusPerguruanTinggi" class="form-control">
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
        </div>