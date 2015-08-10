<div class="admin">
    <div class="wrapper">
         <ul>
            <a href="<?php echo base_url();?>home/">
            <li>
                <?php
                $cust = array(
                'src' => 'style/assets/home.png',
                'width' => '100',
                'height' => '100');
                echo img($cust);?> 
                <br>Home
            </li>
            </a>
            <a href="<?php echo base_url();?>user/details">
            <li>
                <?php
                $details = array(
                'src' => 'style/assets/details.png',
                'width' => '100',
                'height' => '100');
                echo img($details);?>
                <br>Admin Details
            </li>
            </a>
            <a href="<?php echo base_url();?>user/add">
            <li>
                <?php
                $logout = array(
                'src' => 'style/assets/add.png',
                'width' => '100',
                'height' => '100');
                echo img($logout);?>
                <br>Add Admin
            </li>
            </a>
        </ul>
        <script>
        function doconfirm()
        {
            del=confirm("Are you sure to delete permanently?");
            if(del!=true)
            {
                return false;
            }
        }
        </script>
    </div>
</div>
<br class="clear">