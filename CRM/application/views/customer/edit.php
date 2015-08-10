<div class="editCompany">
    <script type="text/javascript">
        function validate(){
            var name = document.forms["edit"]["cName"].value;
            if (name == null || name == "") {
                alert("Company name must be filled out");
                return false;
            }
        }
    </script>
    <div class="wrapper">
        <h1>Edit Company</h1>
            <div class="left">
                <p id="cName">Company Name</p>
                <p id="cAddress">Company Address</p><br>
                <p id="cPhone">Company Phone</p>
                <p id="cEmail">Company Email</p><br><br>
                <p id="cCP1">Company Contact Person 1</p>
                <p id="cCPph1">Company Contact Person Phone 1</p>
                <p id="cCPe1">Company Contact Person Email 1</p><br><br>
                <p id="cCP2">Company Contact Person 2</p>
                <p id="cCPph2">Company Contact Person Phone 2</p>
                <p id="cCpe2">Company Contact Person Email 2</p><br><br>
                <p id="cCP3">Company Contact Person 3</p>
                <p id="cCPph3">Company Contact Person Phone 3</p>
                <p id="cCPe3">Company Contact Person Email 3</p><br><br>
                <p id="cProject">Company Project</p>
                <p id="cStatus">Company Status</p>
                <p id="cUpdate">Company Update</p>
            </div>
        <form name="edit" method="post" autocomplete="off" onsubmit="return validate();">
            <?php 
                $attr = array("class" => "form");
                $hidden = array("edit" => "edit");
                echo form_open("company/edit", $attr, $hidden); 
                foreach($records as $row):
            ?>
            <div class="right">
                <p><input type="text" name="cName" placeholder="company name" value="<?=$row->company_name?>"/></p>
                <p><textarea name="cAddress" placeholder="company address"><?=$row->company_address?></textarea></p>
                <p><input type=text name="cPhone" placeholder="021-00000000" value="<?=$row->company_phone?>"/></p>
                <p><input type=text name="cEmail" placeholder="you@example.com" value="<?=$row->company_email?>"/></p><br><br>
                <p><input type=text name="cCP1" placeholder="company contact person name" value="<?=$row->company_cp1?>"/></p>
                <p><input type=text name="cCPph1" placeholder="08171111111" value="<?=$row->company_cpPhone1?>"/></p>
                <p><input type=text name="cCPe1" placeholder="you@example.com"value="<?=$row->company_cpEmail1?>"/></p><br><br>
                <p><input type=text name="cCP2" placeholder="company contact person name" value="<?=$row->company_cp2?>"/></p>
                <p><input type=text name="cCPph2" placeholder="08171111111" value="<?=$row->company_cpPhone2?>"/></p>
                <p><input type=text name="cCPe2" placeholder="you@example.com" value="<?=$row->company_cpEmail2?>"/></p><br><br>
                <p><input type=text name="cCP3" placeholder="company contact person name" value="<?=$row->company_cp3?>"/></p>
                <p><input type=text name="cCPph3" placeholder="08171111111" value="<?=$row->company_cpPhone3?>"/></p>
                <p><input type=text name="cCPe3" placeholder="you@example.com"value="<?=$row->company_cpEmail3?>"/></p><br><br>
                <p><input type=text name="cProject" placeholder="company project" value="<?=$row->company_project?>"/></p>
                <p><input type=text name="cStatus" placeholder="company status" value="<?=$row->company_status?>"/></p>
                <p><textarea name="cUpdate" placeholder="company update"><?=$row->company_update?></textarea></p>
            </div>
             <?php
                endforeach;
            ?>
        <p><input type="submit" value="Update Data"/><button onclick="location.href='<?php echo base_url();?>customer/'">Cancel</button></p>
        </form>
    </div>
</div>
<br class="clear">