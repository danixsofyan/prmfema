        <?php
        if ($this->uri->segment(4) === FALSE)
        {
            $page = $this->uri->segment(3);
            $pageChild = "";
        }else{
            $page = $this->uri->segment(2);
            $pageChild = $this->uri->segment(2);
        }
       ?>

<section id="container" >
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo base_url(); ?>admin/home_admin/dashboard" class="logo"><?php if(!empty(logoadmin())){echo logoadmin();}else{echo "Seru <span>Terus</span>";}?></a>
            <!--logo end-->

            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="<?php echo base_url(); ?>assets/img/smile.jpg" width="29px" height="29px">
                            <span class="username"><?=$this->session->userdata('username')?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>                            
                            <li><a href="<?php echo base_url(); ?>logout"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="<?php if ($page == 'dashboard'): ?> active<?php endif; ?>" href="<?php echo base_url(); ?>admin/home_admin/dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li>
                      <a class="<?php if ($page == 'calon_pemimpin'): ?> active<?php endif; ?>" href="<?php echo base_url(); ?>admin/home_admin/calon_pemimpin">
                          <i class="fa fa-user"></i>
                          <span>Calon Pemimpin</span>
                      </a>
                  </li>

                  <li>
                      <a class="<?php if ($page == 'vooters'): ?> active<?php endif; ?>" href="<?php echo base_url(); ?>admin/home_admin/vooters">
                          <i class="fa fa-group"></i>
                          <span>Lihat Vooters</span>
                      </a>
                  </li>

                  <li>
                      <a class="<?php if ($page == 'pengaturan'): ?> active<?php endif; ?>" href="<?php echo base_url(); ?>admin/home_admin/pengaturan">
                          <i class="fa fa-wrench"></i>
                          <span>Pengaturan</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->