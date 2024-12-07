<br><br>
<div class="footer">
<p>MADE by pranjal <a href="pranjalpandit@.com">pranjalpandit@.com</a>&nbsp; &nbsp;
  <a href="https://www.facebook.com/profile.php?id=100075735465879" class="rounded-circle"><i class="fa fa-facebook"></i></a>&nbsp; 
  <a href="https://instagram.com/pranjalpandit904?igshid=MzNlNGNkZWQ4Mg=="class="rounded-circle"><i class="fa fa-instagram"></i></a>&nbsp; 
  <!-- <a href="https://www.google.com/" class="google"><i class="fa fa-google"></i></a>  -->
  <a href="https://www.linkedin.com/in/pranjal-pandit-38b193254" class="rounded-circle"><i class="fa fa-linkedin"></i></a>&nbsp;
  <a href="https://www.youtube.com/@pranjalpandit4778/about" class="rounded-circle"><i class="fa fa-youtube"></i></a> </p>
</div>


<script src="<?php echo base_url();?>js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
		<script type="text/javascript">	
				$(document).ready( function () {
    $('#Table').DataTable({

      'paging'      : true,

      'searching'   : true,

      });
});
		</script>
	<!--scrolling js-->
	<script src="<?php echo base_url();?>js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url();?>js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url();?>js/bootstrap.js"> </script>
   <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   <!--validator js-->
	<script src="<?php echo base_url();?>js/validator.min.js"></script>
	<!--//validator js-->
</body>
</html>
