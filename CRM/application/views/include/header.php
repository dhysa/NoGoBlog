<html>
<head>
    <title>WE-R3</title>
    <script src="<?php echo base_url();?>style/js/jquery.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/style.css">
    <link rel="icon" href="<?=base_url()?>/style/assets/favicon.ico" type="image/gif">
</head>
<body>
<div class="header">
    <div class="wrapper">
        <div class="logo">
            <?php 
            if($this->session->userdata('id')){
                echo'<a href="'.base_url().'home/">';}
            else{
                echo'<a href="'.base_url().'">';}
 
                $logo = array(
                'src' => 'style/assets/logo.png',
                'width' => '100',
                'height' => '100',);
                echo img($logo); 
                echo'</a>';
            ?>
        </div>
        <?php if($this->session->userdata('id') AND uri_string() != "home"){ echo'
        <div class="navigation">
            <ul>
                <li>
                    <a href="'.base_url().'customer/">Company</a>
                </li>';
                if($this->session->userdata('stat') == 'superAdmin'){ echo'
                <li>
                    <a href="'.base_url().'user/">Administrator</a>
                </li>
                ';}else if($this->session->userdata('stat') == 'admin'){ echo'
                <li>
                    <a href="'.base_url().'user/changePass">Change Password</a>
                </li>
                ';} echo'
                <li>
                    <a href="'.base_url().'home/logout/">Logout</a>
                </li>
            </ul>
        </div>';}?>
    </div>
    <br class="clear">
</div>
<div class="body">