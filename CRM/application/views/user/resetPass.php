<div class="reset">
    <div class="wrapper">
        <h1>Reset Password</h1>
        <div class="left">
            <p class="newPass">Type New Password</p>
            <p class="newPassw">Re-Type New Password</p>
        </div>
        <form  method="post" autocomplete=off>
        <div class="right">
            <?php 
                $attr = array("class" => "form");
                $hidden = array("resetPass" => "resetPass");
                echo form_open("user/resetPass", $attr, $hidden); 
            ?>
            <p><?php echo form_error('newPass', '<p class="errorPass">', '</p>');?>
            <input type=password placeholder="password" name="newPass"/></p>
            <?php echo form_error('newPassw', '<div class="retype"><p class="errorPass">', '</p></div>');?>
            <p><input type=password placeholder="re-type password" name="newPassw"/></p>
        </div>
        <p><input type="submit" value="Change Password"/></p>
        </form>
    </div>
</div>
<br class="clear">