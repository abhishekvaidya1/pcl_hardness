<body style="font-family: Calibri; font-size: 15px;">
    <div class="page-sidebar">
        <!-- START X-NAVIGATION -->
        <ul class="x-navigation">
            <li class="xn-logo">
                <a href="#"><?php echo $username = $this->session->userdata('user_name'); ?></a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-profile">
                <a href="#" class="profile-mini">
                    <img src="assets/images/users/avatar.png" alt="John Doe"/>
                </a>
                <div class="profile">
                    <div class="profile-image">
                        <img src="assets/images/users/avatar.png" alt="John Doe"/>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name"><?php echo $username = $this->session->userdata('user_name'); ?></div>
                    </div>

                </div>                                                                        
            </li>
            <li class="xn-title" style="font-size:14px;">Quality Form</li>

            <?php
            if ($this->session->userdata('access') == "5" || $this->session->userdata('access') == "4") {
                ?>
                <li <?php if($this->uri->segment(1)=="add_hardness_item"){echo 'class="active"';}?>>
                    <a href="<?php echo base_url(); ?>add_hardness_item"><span class="fa fa-envelope"></span> <span class="xn-text" style="font-size:14px;">Hardness & Chilldepth</span></a>                        
                </li>
                <li class="xn-openable">
                    <a href="#" style="font-size:14px;"><span class="fa fa-sort-amount-desc"></span> Quality Reports</a>
                    <ul>                                    

                        <li <?php if($this->uri->segment(1)=="report_hardeness"){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>report_hardeness" style="font-size:14px;"><span class="fa fa-download"></span>Hardness & Chilldepth Report</a></li>
                        <li <?php if($this->uri->segment(1)=="report_x_bar_r_bar"){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>report_x_bar_r_bar" style="font-size:14px;"><span class="fa fa-download"></span>Control Chart ( X Bar - R) Report</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>summary_report_form"><span class="fa fa-envelope"></span> <span class="xn-text" style="font-size:14px;">Summary Report</span></a>                        
                </li>
            <?php } else {
                ?>
                <li class="">
                    <a href="<?php echo base_url(); ?>check_hardness_form"><span class="fa fa-dashboard"></span> <span class="xn-text">Check Hardness Form</span></a>                        
                </li> <?php } ?>


        </ul>
        <!-- END X-NAVIGATION -->
    </div>