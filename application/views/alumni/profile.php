<?php
  require_once(__DIR__.'/../_partials/header.php');
?>
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
<?php
  require_once(__DIR__.'/../_partials/head.php');
?>
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
<?php
  require_once(__DIR__.'/../_partials/sidebar.php');
?>
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <!-- /col-md-4 -->
              <div class="col-md-7 col-md-offset-1 profile-text">
                <h3><?php echo $username; ?></h3>
                <!-- <h6>Alumni Jurusan TKJ 2011-2014</h6> -->
                <p>Alumni Jurusan TKJ 2011-2014.</p>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="<?php echo base_url('assets/img/ui-sam.jpg'); ?>" class="img-circle"></p>
                  <p>
                    <button class="btn btn-theme"><i class="fa fa-check"></i> Follow</button>
                    <button class="btn btn-theme02">Add</button>
                  </p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview">Overview</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#edit">Edit Profile</a>
                  </li>
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="overview" class="tab-pane active">
                    <div class="row">
                      <!-- Content -->
                      <div class="col-md-10 col-md-offset-2 detailed">
                        <p>
                          <b>Username</b> : <?php echo $username; ?><br><br>
                          <b>Nama Lengkap</b> : egin10<br><br>
                          <b>Tempat dan Tanggal Lahir </b>: Pochinki, 20 Maret 2010<br><br>
                          <b>Jenis Kelamin </b>: Laki-Laki<br><br>
                          <b>Alamat Sekarang </b>: Pochinki Block A No.50<br><br>
                          <b>Status </b>: -<br><br>
                          <b>Jurusan </b>: Teknik Komputer dan Jaringan<br><br>
                          <b>Tahun Lulus SMK </b>: 2014<br><br>
                          <b>Pendidikan Terakhir </b>: Univ Pochinki, Teknik Informatika D3<br><br>
                          <b>Pekerjaan </b>: Freelance<br><br>
                          <b>Instansi/Perusahaan </b>: DevCat<br><br>
                          <b>No HP </b>: 08222222222 (admin)<br><br>
                          <b>No Whatsapp </b>: 08222222222 (admin)<br><br>
                        </p>
                      </div>
                    </div>
                    <!-- /OVERVIEW -->
                  </div>
                  <!-- /tab-pane -->
                  <div id="contact" class="tab-pane">
                    <div class="row">
                      <div class="col-md-10 col-md-offset-1 detailed">
                        <div class="col-md-8 col-md-offset-2 mt">
                          <p>
                            <i class="fa fa-facebook-square"></i> <b>Facebook</b> : https://www.facebook.com/testing1
                            <br/>
                            <i class="fa fa-instagram"></i> <b>Instagram</b> : https://www.instagram.com/testing1
                            <br/>
                          </p>
                          <br>
                          <p>
                            <i class="fa fa-envelope"></i> <b>Email</b> : <?php echo $email; ?>
                            <br/>
                            <i class="fa fa-linkedin-square"></i> <b>LinkedIn</b> : https://www.linkedin.com/testing1
                            <br/>
                            <i class="fa fa-globe"></i> <b>Website</b> : https://www.testing1.com
                          </p>
                        </div>
                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2 detailed">
                        <h4 class="mb">Personal Information</h4>
                        <form role="form" class="form-horizontal">
                          <!-- <div class="form-group">
                            <label class="col-lg-2 control-label"> Avatar</label>
                            <div class="col-lg-6">
                              <input type="file" id="exampleInputFile" class="file-pos">
                            </div>
                          </div> -->
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Avatar</label>
                            <div class="col-md-9">
                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                  <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                  <span class="btn btn-theme02 btn-file">
                                  <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                  <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                  <input type="file" class="default" />
                                  </span>
                                  <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                </div>
                              </div>
                              <span class="label label-info">NOTE!</span>
                              <span>
                                Attached image thumbnail is
                                supported in Latest Firefox, Chrome, Opera,
                                Safari and Internet Explorer 10 only
                                </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nama Lengkap</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="Nama Lengkap" id="namaLengkap" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Tempat Lahir</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="Tempat Lahir" id="tmptLahir" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Tanggal lahir</label>
                            <div class="col-lg-6">
                            <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="Tempat dan Tanggal Lahir" id="tglLahir">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Jenis Kelamin</label>
                            <div class="col-lg-6">
                              <select name="" id="jk" class="form-control">
                                <option value="l">Laki-Laki</option>
                                <option value="p">Perempuan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Status</label>
                            <div class="col-lg-6">
                              <select name="" id="status" class="form-control">
                                <option value="lajang">Lajang</option>
                                <option value="menikah">Menikah</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Jurusan</label>
                            <div class="col-lg-6">
                              <select name="" id="jurusan" class="form-control">
                                <option value="tkj">TKJ</option>
                                <option value="tkr">TKR</option>
                                <option value="tab">TAB</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Tahun Lulus SMK</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="cth: 2014" id="thLulus" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Pendidikan Terakhir</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="cth: Univ Pochinki, Teknik Informatika D3" id="pendTerakhir" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Pekerjaan</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="cth: Staff IT" id="posisi_kerja" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Alamat Sekarang</label>
                            <div class="col-lg-10">
                              <textarea style="resize:none;" rows="8" cols="15" class="form-control" id="" name="" placeholder="Jl. Pochinki Block A No.50"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Save</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Contact Information</h4>
                        <form role="form" class="form-horizontal">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">No HP</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="085555555555" id="noHP" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">No Whatsapp</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="085555555555" id="noWA" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input type="email" placeholder="example@mail.com" id="email" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Save</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Setting Account</h4>
                        <form role="form" class="form-horizontal">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Username</label>
                            <div class="col-lg-6">
                              <p class="form-control-static">egin10</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Password Lama</label>
                            <div class="col-lg-6">
                              <input type="password" placeholder="password" id="passLama" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Password Baru</label>
                            <div class="col-lg-6">
                              <input type="password" placeholder="password" id="passBaru" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Save</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

<?php
  require_once(__DIR__.'/../_partials/footer.php');
?>