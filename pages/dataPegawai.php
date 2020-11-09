<div class="row mx-1">
    <div class="col-md">
    <div class="card collapsed-card">
        <div class="card-header py-1">
        <h3 class="card-title">Aksi Tambahan</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
        </div>
        <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body my-0 py-1">
            <a href="" class="btn btn-info my-1">Cetak Total Data Keseluruhan</a>
            <a href="" class="btn btn-info my-1">Cetak Berdasarkan Gol</a>
            <a href="" class="btn btn-info my-1">Cetak Berdasarkan Tingkat</a>


        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
</div>




<div class="card mx-2">
    <div class="card-header">
    <h3 class="card-title">
        <a href="index.php?pages=data_pegawai&aksi=tambah_data_pegawai" class="btn btn-primary">
            Tambah Data
        </a>
            &emsp;
        <font color="red" style="font-size: 13px;"><i> *Edit | Hapus | Cek Profil => Klik data Baris pada Table</i></font>
    </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body " style="overflow-x: scroll">
    <table id="example1" class="table-striped borderPegawai mr-2 pr-2">
        <thead>
        <tr >
            <th rowspan="2" valign="center">Nip</th>
            <th rowspan="2" valign="center">Nama</th>
            <th rowspan="2" valign="center">L/P</th>
            <th rowspan="2" valign="center">Status Kepegawaian</th>
            <th rowspan="2" valign="center">GOL.</th>
            <th rowspan="2" valign="center">TMT GOL/Pangkat Terakhir</th>
            <th rowspan="2" valign="center">Pendidikan Terakhir</th>
            <th colspan="2">Diklat Penjenjangan</th>
            <th rowspan="2" valign="center">No Seri KARPEG</th>
            <th rowspan="2" valign="center">Jabatan</th>
            <th rowspan="2" valign="center">TMT Jabatan Terakhir</th>
            <th rowspan="2" valign="center">Instansi</th>
            <th colspan="2">TTL</th>
            <th rowspan="2" valign="center">Status Perkawinan</th>
            <th rowspan="2" valign="center">Nama S/I</th>
            <th rowspan="2" valign="center">Alamat</th>
            <th rowspan="2" valign="center">Agama</th>

        </tr>
        <tr>
            
            <th>Nama</th>
            <th>Tahun</th>
            <th>Tempat</th>
            <th>Tgl Lahir</th>
        </tr>
        </thead>
        <tbody>
       
        <tr type="button" data-toggle="modal" data-target="#modal-default">
            <td>2101059232232</td>
            <td nowrap style="padding-right: 10px;">lorem lorem</td>
            <td nowrap>lorem3 </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
            <td nowrap>ada </td>
        </tr>
        </tbody>

        <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <a href="" class="btn btn-info my-1 mx-1">Cek Profil</a>
              <a href="" class="btn btn-info my-1 mx-1">Ubah Data</a>
              <a href="" class="btn btn-danger my-1 mx-1"> hapus data</a>


            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </table>
    </div>
</div>