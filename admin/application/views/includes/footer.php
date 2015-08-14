	</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

    <!-- Active Class Side-Nav jQuery -->
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('ul.side-nav li a[href="'+window.location.href+'"]').parent('li').addClass('active');
        });
    </script>

	<!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="<?php echo base_url();?>js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url();?>js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>js/plugins/flot/flot-data.js"></script>

   
</body>

</html>
