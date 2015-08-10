<link href="<?php echo base_url();?>style/css/jquery-ui.css" rel="stylesheet">
<script src="<?php echo base_url();?>style/js/jquery.js"></script>
<script src="<?php echo base_url();?>style/js/jquery-ui.js"></script>
<div class="add">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <div class="left">
            <p class="username">Username</p>
            <p class="password">Password</p>
            <p class="password2">Re-Type Password</p>
            <p class="stat">Status</p>
        </div>
        <form  method="post" autocomplete=off>
        <div class="right">
            <?php 
                $attr = array("class" => "form");
                $hidden = array("add" => "add");
                echo form_open("user/add", $attr, $hidden); 
            ?>
            <p><?php echo form_error('username', '<p class="errorPass">', '</p>');?>
            <input type=text placeholder="username" name="username"/></p>
            <p><?php echo form_error('password', '<p class="errorPass">', '</p>');?>
            <input type=password placeholder="password" name="password"/></p>
            <?php echo form_error('password2', '<p class="errorPass">', '</p>');?>
            <p><input type=password placeholder="password" name="password2"/></p>
            <p><?php echo form_error('status', '<p class="errorPass">', '</p>');
            ?>
            <select id="selectmenu" name="status">
                <option value="none">--select--</option>
                <option value="superAdmin">Super Admin</option>
                <option value="admin">Admin</option>
                </select>
            <script>
            $( "#selectmenu" ).selectmenu();
            </script>
            </p>
        </div>
        <p><input type="submit" value="Add Admin"/></p>
        </form>
    </div>
</div>
<br class="clear">