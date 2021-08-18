<!-- Footer -->
<!-- Footer -->
<div class="footer">
	<div class="container">
		<div class="row align-items-center no-gutters border-top py-2">
			<!-- Desc -->
			<div class="col-md-6 col-12 text-center text-md-left">
				<span>© 2021 Team PIIB. All Rights Reserved.</span>
			</div>
			<!-- Links -->
			<div class="col-12 col-md-6">
				<nav class="nav nav-footer justify-content-center justify-content-md-end">
					<a class="nav-link active pl-0" href="#!">Privacy</a>
					<a class="nav-link" href="#!">Terms </a>
					<a class="nav-link" href="#!">Feedback</a>
					<a class="nav-link" href="#!">Support</a>
				</nav>
			</div>
		</div>
	</div>
</div>


<!-- Scripts -->
<!-- Libs JS -->
<script src="<?= base_url();?>assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url();?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url();?>assets/libs/odometer/odometer.min.js"></script>
<script src="<?= base_url();?>assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url();?>assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url();?>assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?= base_url();?>assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="<?= base_url();?>assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
<script src="<?= base_url();?>assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?= base_url();?>assets/libs/quill/dist/quill.min.js"></script>
<script src="<?= base_url();?>assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js"></script>
<script src="<?= base_url();?>assets/libs/dragula/dist/dragula.min.js"></script>
<script src="<?= base_url();?>assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script src="<?= base_url();?>assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="<?= base_url();?>assets/libs/jQuery.print/jQuery.print.js"></script>
<script src="<?= base_url();?>assets/libs/prismjs/prism.js"></script>
<script src="<?= base_url();?>assets/libs/prismjs/components/prism-scss.min.js"></script>
<script src="<?= base_url();?>assets/libs/@yaireo/tagify/dist/tagify.min.js"></script>
<script src="<?= base_url();?>assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="<?= base_url();?>assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="<?= base_url();?>assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
<script src="<?= base_url();?>assets/libs/typed.js/lib/typed.min.js"></script>
<script src="<?= base_url();?>assets/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
<script src="<?= base_url();?>assets/libs/jsvectormap/dist/maps/world.js"></script>
<script src="<?= base_url();?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url();?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url();?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>





<!-- clipboard -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


<!-- Theme JS -->
<script src="<?= base_url();?>assets/js/theme.min.js"></script>

<!-- realtime push.js -->
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('821f46f91bfa0af6f041', {
    	cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
    	alert(JSON.stringify(data));
    });
</script>
<!-- end realtime push.js -->
</body>

</html>