<?php 
$title = "Daftar Wisata Kab Trenggalek";
include_once "header.php";
include_once "koneksi.php"; ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
                <div class="dataTables_length" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> baris data tiap halaman</label></div>
                <div class="col-xs-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Cari: <input type="search" class="form-control input-sm" placeholder="Masukkan Kata Kunci" aria-controls="DataTables_Table_0"></label></div></div>
              <thead>
                <tr>
                  <th width="10%">No.</th>
                  <th width="30%">Nama Wisata</th>
                  <th width="10%">Kategori</th>
                  <th width="13%">Kecamatan</th>
                  <th width="20%">Fasilitas</th>
                  <th width="27%">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                 $data = file_get_contents('http://localhost:8080/webgis/ambildata.php');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
              ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item->nama_wisata; ?></td>
                <td><?php echo $item->kategori; ?></td>
                <td><?php echo $item->kecamatan; ?></td>
                <td><?php echo $item->fasilitas; ?></td>
                <td class="ctr">
                  <div class="btn-group">
                    <a target="_blank" href="detail.php?id=<?php echo $item->id_wisata; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                    <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                  </div>
                </td>
              </tr>
              <?php $no++; }}

              else{
                echo "data tidak ada.";
                } ?>
              
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php" ?>