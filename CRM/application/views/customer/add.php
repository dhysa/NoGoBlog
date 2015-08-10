<div class="addCompany">
    <script type="text/javascript">
        function validate(){
            var name = document.forms["add"]["cName"].value;
            if (name == null || name == "") {
                alert("Company name must be filled out");
                return false;
            }
        }
    </script>
    <div class="wrapper">
        <h1>Add New Company</h1>
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
        <form name="add" method="post" autocomplete="off" onsubmit="return validate();">
            <?php 
                $attr = array("class" => "form");
                $hidden = array("add" => "add");
                echo form_open("company/add", $attr, $hidden); 
            ?>
            <div class="right">
                <p><input type=text name="cName" placeholder="company name"/></p>
                <p><textarea name="cAddress" placeholder="company address"></textarea></p>
                <p><input type=text name="cPhone" placeholder="021-0000000"/></p>
                <p><input type=text name="cEmail" placeholder="you@example.com"/></p><br><br>
                <p><input type=text name="cCP1" placeholder="company contact person name"/></p>
                <p><input type=text name="cCPph1" placeholder="08171111111"/></p>
                <p><input type=text name="cCPe1" placeholder="you@example.com"/></p><br><br>
                <p><input type=text name="cCP2" placeholder="company contact person name"/></p>
                <p><input type=text name="cCPph2" placeholder="08171111111"/></p>
                <p><input type=text name="cCPe2" placeholder="you@example.com"/></p><br><br>
                <p><input type=text name="cCP3" placeholder="company contact person name"/></p>
                <p><input type=text name="cCPph3" placeholder="08171111111"/></p>
                <p><input type=text name="cCPe3" placeholder="you@example.com"/></p><br><br>
                <p><input type=text name="cProject" placeholder="company project"/></p>
                <p><input type=text name="cStatus" placeholder="company status"/></p>
                <p><textarea name="cUpdate" placeholder="company update"></textarea></p>
            </div>
            <p><input type="submit" value="Add Data"/></p>
        </form>
         <p><button onclick="location.href='<?php echo base_url();?>customer/'">Cancel</button></p>
    </div>
</div>
<br class="clear">