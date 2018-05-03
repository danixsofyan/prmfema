<!--main content start-->
      <section id="main-content">
          <section class="wrapper">              
              <!--state overview start-->
              <div class="row">
                  <div class="col-lg-12" style="min-height:467px;">
                      <section class="panel">
                          <header class="panel-heading">
                              Daftar vooters
                              <a class="btn btn-success" data-toggle="modal" href="#myModal" style="float:right; margin-top:-5px;">
                                  Tambah Vooter
                              </a>
                          </header>
                          <div class="panel-body">
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                          <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/home_admin/tambah_vooter">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Tambah User</h4>
                                            </div>
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label for="jumlahVooter" class="col-lg-3 col-sm-3 control-label">Jumlah Vooter</label>
                                                    <div class="col-lg-9">
                                                        <input type="number" class="form-control" name="jumlahVooter" id="jumlahVooter" placeholder="Jumlah Vooter">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="panjangPassword" class="col-lg-3 col-sm-3 control-label">Panjang Password</label>
                                                    <div class="col-lg-9">
                                                        <input type="number" class="form-control" name="panjangPassword" id="panjangPassword" placeholder="Panjang Password">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                <button class="btn btn-success" type="submit">Tambah</button>
                                            </div>
                                          </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal -->
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Vooters</th>
                                          <th>Status</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <?php 
                                          if ($query->num_rows() > 0) {
                                            $no = 1;
                                            foreach ($query->result() as $row) {
                                              if ($row->status == 1) {
                                                $status = "Sudah Vote";
                                              }elseif ($row->status == 0) {
                                                $status = "Belum Vote";
                                              }
                                              echo '
                                                    <tr>
                                                        <td width="20px">'.$no.'</td>
                                                        <td>'.$row->password.'</td>
                                                        <td width="200px">'.$status.'</td>
                                                    </tr>
                                              ';
                                            $no++;
                                            }
                                          }
                                        ?>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>No</th>
                                          <th>Vooters</th>
                                          <th>Status</th>
                                      </tr>
                                      </tfoot>
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!--state overview end-->
          </section>
      </section>
      <!--main content end-->