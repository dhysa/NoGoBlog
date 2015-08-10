<div class="login">
    <div class="wrapper">
        
             <?php 
                $attr = array("class" => "form");
                $hidden = array("login" => "login");
                echo form_open("verifylogin", $attr, $hidden); 
            ?>
        <form method="post" autocomplete="off">
            <h1>Login</h1>
                <p><?php echo form_error('username', '<div id="loginerror">', '</div>');?>
                <input type=text name='username' placeholder='username'/></p>
                <p><?php echo form_error('password', '<div id="loginerror">', '</div>');?>
                <input type=password name='password' placeholder='password'/></p>
            <p><input type="submit" value="Login"/></p>
        </form>
    </div>
</div>
<br class="clear">