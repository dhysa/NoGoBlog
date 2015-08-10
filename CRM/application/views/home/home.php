<div class="home">
    <div class="wrapper">
        <div class="dashboard">
            <ul>
                <a href="<?php echo base_url();?>customer/">
                <li>
                    <?php
                    $cust = array(
                    'src' => 'style/assets/customer.png',
                    'width' => '100',
                    'height' => '100');
                    echo img($cust);?> 
                    <br>Company
                </li>
                <?php if($this->session->userdata('stat') == 'superAdmin'){?>
                </a>
                <a href="<?php echo base_url();?>user/">
                <li>
                    <?php
                    $admin = array(
                    'src' => 'style/assets/admin.png',
                    'width' => '100',
                    'height' => '100');
                    echo img($admin);?>
                    <br>Administrator
                </li>
                </a>
                <?php }else if($this->session->userdata('stat') == 'admin'){?>
                </a>
                <a href="<?php echo base_url();?>user/changePass">
                <li>
                    <?php
                    $admin = array(
                    'src' => 'style/assets/password.png',
                    'width' => '100',
                    'height' => '100');
                    echo img($admin);?>
                    <br>Change Password
                </li>
                </a>
                <?php }?>
                <a href="<?php echo base_url();?>home/logout/">
                <li>
                    <?php
                    $logout = array(
                    'src' => 'style/assets/logout.png',
                    'width' => '100',
                    'height' => '100');
                    echo img($logout);?>
                    <br>Logout
                </li>
                </a>
            </ul>
        </div>
    </div>
    <!--<?php echo $this->session->userdata('id');?>
    <?php echo $this->session->userdata('username');?>
    <?php echo $this->session->userdata('stat');?>-->
</div>
<br class="clear">