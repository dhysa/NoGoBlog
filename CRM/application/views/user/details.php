<div class="user-details">
    <div class="wrapper">
        <table>
            <tr>
                <th class="username">Username</th>
                <th class="password">Password</th>
                <th class="status">Status</th>
            </tr>
            <?php
                foreach($records as $row):
            ?>
            <tr>
                <td class="username"><?=$row->user_name?></td>
                <td class="password"><?=$row->user_pass?></td>
                <td class="status"><?=$row->user_stat?></td>
                <td><button onclick="location.href='<?php echo base_url();?>user/resetPass/<?=$row->user_id?>'">Reset Password</button></td>
                <?php if($this->session->userdata('id') != $row->user_id){
                echo'<td><button onclick="delAdmin()">Delete Admin</button></td>';
                }else{
                echo'<td class="blank"></td>';}?>
            </tr>
            <?php
                endforeach;
            ?>
        </table>
        <script>
        function delAdmin()
        {
            if(confirm("Are you sure to delete admin permanently?")){
                window.location.href = "<?php echo base_url();?>user/delete/<?=$row->user_id?>";
            }else{
                return false;
            }
        }
        </script>
    </div>
</div>
<br class="clear">