<div class="details">
    <div class="wrapper">
        <table>
            <?php
                foreach($records as $row):
            ?>
            <tr>
                <th>Company Name</th>
                <td><?=$row->company_name?></td>
            </tr>
            <tr>
                <th>Company Address</th>
                <td><?=nl2br($row->company_address)?></td>
            </tr>
            <tr>
                <th>Company Phone</th>
                <td><?=$row->company_phone?></td>
            </tr>
            <tr>
                <th>Company Email</th>
                <td><?=$row->company_email?></td>
            </tr>
            <tr>
                <th>Company Contact Person 1</th>
                <td><?=$row->company_cp1?></td>
            </tr>
            <tr>
                <th>Company CP Phone 1</th>
                <td><?=$row->company_cpPhone1?></td>
            </tr>
            <tr>
                <th>Company CP Email 1</th>
                <td><?=$row->company_cpEmail1?></td>
            </tr>
            <tr>
                <th>Company Contact Person 2</th>
                <td><?=$row->company_cp2?></td>
            </tr>
            <tr>
                <th>Company CP Phone 2<h>
                <td><?=$row->company_cpPhone2?></td>
            </tr>
            <tr>
                <th>Company CP Email 2</th>
                <td><?=$row->company_cpEmail2?></td>
            </tr>
            <tr>
                <th>Company Contact Person 3</th>
                <td><?=$row->company_cp3?></td>
            </tr>
            <tr>
                <th>Company CP Phone 3</th>
                <td><?=$row->company_cpPhone3?></td>
            </tr>
            <tr>
                <th>Company CP Email 3</th>
                <td><?=$row->company_cpEmail3?></td>
            </tr>
            <tr>
                <th>Company Project</th>
                <td><?=$row->company_project?></td>
            </tr>
            <tr>
                <th>Company Status</th>
                <td><?=$row->company_status?></td>
            </tr>
            <tr>
                <th>Company Update</th>
                <td><?=nl2br($row->company_update)?></td>
            </tr>
            <?php
                endforeach;
            ?>
        </table><br>
        <button onclick="location.href='<?php echo base_url();?>customer/'">List Company</button>
        <button onclick="location.href='<?php echo base_url();?>customer/edit/<?=$row->company_id?>'">Edit Company</button>
        <button onclick="return doconfirm();">Delete Company</button>
        <button onclick="location.href='mailto:<?=$row->company_email?>, <?=$row->company_cpEmail1?>, <?=$row->company_cpEmail2?>, <?=$row->company_cpEmail3?>'">Send Email</button>
        <script>
        function doconfirm()
        {
            del=confirm("Are you sure to delete permanently?");
            if(del!=true)
            {
                return false;
            }
            else{
                window.location.replace("<?php echo base_url();?>customer/delete/<?=$row->company_id?>");
            }
        }
        </script>
    </div>
</div>
<br class="clear">