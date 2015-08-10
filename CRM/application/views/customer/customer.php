<link href="<?php echo base_url();?>style/css/jquery-ui.css" rel="stylesheet">
<script src="<?php echo base_url();?>style/js/jquery-ui.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $("#top").css('opacity', 0);
    $("#bottom").css('opacity', 1);
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $("#top").css('opacity', 1);
                $("#bottom").css('opacity', 0);
            } else {
                $("#top").css('opacity', 0);
                $("#bottom").css('opacity', 1);
            }
        });
        $('#top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        $('#bottom').click(function () {
            $("html, body").animate({ scrollTop: $(document).height() }, 1200);
            return false;
        });
    });

});
</script>
<div class="customer">
    <a href="#top" id="top"></a>
    <a href="#bottom" id="bottom"></a>
    <div class="wrapper">
        <a class="add" href="<?php echo base_url();?>customer/add">Add Company</a>
        <br class="clear">
        <br class="clear">
        <form method="post" autocomplete="off" action="<?php echo base_url();?>customer/search">
            <input type="submit" value="Search">
            <input type="text" placeholder="Search" name="search">
        </form>
        <p>Sort company name by : <select id="selectmenu">
        <option value="0">Sort by</option>
        <option value="ascending">Ascending</option>
        <option value="descending">Descending</option>
        <option value="lastUpdated">Last Updated</option>
        </select>
        <script>
            $( "#selectmenu" ).selectmenu({
            change: function() {
                var val =  $(this).val();
                $.ajax({
                    url: '<?php echo base_url();?>customer/'+val,
                    success: function (data) {
                        $('.table').html(data);
                        //$('#selectmenu').val(value);
                    }
                }).error(function() {
                    alert ('An error occured');
                });
                $(this).val("0");
            }
        });
        </script>
        </p>
        <br class="clear">
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
    </div>
</div>
<br class="clear">