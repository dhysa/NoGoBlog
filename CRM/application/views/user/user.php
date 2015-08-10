<div class="user">
    <div class="wrapper">
        <h1>Change Password</h1>
        <div class="left">
            <p>Type Old Password</p>
            <p>Type New Password</p>
            <p>Re-Type New Password</p>
        </div>
        <form  method="post" autocomplete=off>
        <div class="right">
            <?php 
                $attr = array("class" => "form");
                $hidden = array("changePass" => "changePass");
                echo form_open("user/changePass", $attr, $hidden); 
            ?>
            <p><?php echo form_error('oldPass', '<p class="errorPass">', '</p>');?>
            <input type=password placeholder="old password" name="oldPass"/></p>
            <p><?php echo form_error('newPass', '<p class="errorPass">', '</p>');?>
            <input type=password placeholder="new password" name="newPass"/></p>
            <?php echo form_error('newPassw', '<p class="errorPass">', '</p>');?>
            <p><input type=password placeholder="re-type new password" name="newPassw"/></p>
        </div>
        <p><input type="submit" value="Change Password"/></p>
        </form>
    </div>
</div>
<br class="clear">