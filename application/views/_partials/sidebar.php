<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="<?php echo base_url().'alumni/profile'; ?>"><img src="<?php echo base_url('assets/img/ui-sam.jpg'); ?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $username; ?></h5>
          <li class="mt">
            <a class="active" href="<?php echo base_url().'alumni'; ?>">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tags"></i>
              <span>Alumni</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url(); ?>"><i class="fa fa-laptop"></i>TKJ</a></li>
              <li><a href="<?php echo base_url(); ?>"><i class="fa fa-cogs"></i>TKR</a></li>
              <li><a href="<?php echo base_url(); ?>"><i class="fa fa-chain"></i>TKJ</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-rss"></i>
              <span>Info</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url(); ?>"><i class="fa fa-file-text"></i>Artikel</a></li>
              <li><a href="<?php echo base_url(); ?>"><i class="fa fa-folder-o"></i>Loker</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->