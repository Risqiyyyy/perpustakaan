<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php if($this->session->userdata('level') == 'Anggota'){ redirect(base_url('transaksi'));}?>
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <!-- Main content -->
            <div class="row">
                <div class="col-lg-3 col-xs-8">
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3><?= $count_pengguna;?></h3>

                      <p>Anggota</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-edit"></i>
                    </div>
                    <a href="user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                   <!--small box-->
                  <div class="small-box bg-blue">
                    <div class="inner">
                      <h3><?= $count_buku;?></h3>

                      <p>Jenis Buku</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-book"></i>
                    </div>
                    <a href="data" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div> 

                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3><?= $count_pinjam;?></h3>

                      <p>Pinjam</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user-plus"></i>
                    </div>
                    <a href="transaksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                  <div class="small-box bg-red">
                    <div class="inner">
                      <h3><?= $count_kembali;?></h3>

                      <p>Di Kembalikan</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-list"></i>
                    </div>
                    <a href="transaksi/kembali" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>

              </div>
            </div>
        </section>
    </div>
    <!-- /.content -->
