        <div class="table">
            <table>
                <tr>
                    <th>Last Updated</th>
                    <th>Company Name</th>
                    <th class="companyAddress">Company Address</th>
                    <th class="companyCP">Company Contact Person</th>
                </tr>
                <?php
                    foreach($records as $row):
                ?>
                <tr>
                    <td class="lastUpdate"><?php echo $row->company_created;?></td>
                    <td class="companyName"><?php if (strlen($row->company_name) > 40) {
                        echo substr($row->company_name, 0, 40)."...";
                    } else {
                        echo $row->company_name;}?></td>
                    <td class="companyAddress"><?php if (strlen($row->company_address) > 100) {
                        echo substr($row->company_address, 0, 100)."...";
                    } else {
                        echo $row->company_address;}?></td>
                    <td class="companyCP"><?php if (strlen($row->company_cp1) > 30) {
                        echo substr($row->company_cp1, 0, 30)."...";
                    } else {
                        echo $row->company_cp1;}?></td>
                    <td class="details">
                    <a href="<?php echo base_url();?>customer/details/<?=$row->company_id?>">
                    <div id="details">See Details</div>
                    </a>
                    </td>
                </tr>
                <?php
                    endforeach;
                ?>
            </table>
        </div>