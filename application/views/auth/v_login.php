
<body>
  <!-- content -->
  <div class="container mt-7">
      <div class="text-center">
          <h1 class="titleus"><?= $label ?></h1>
      </div>
      <div class="row">
          
          <div class="col-xs-9 offset-2">
            <!-- can 1 -->
            <div class="box-1 box-peserta">
                <a href="<?php echo base_url('auth/login_peserta') ?>">
                    <center>
                        <i class="fas fa-users fa-7x box-par"></i>
                        <h2 class="h4c text-center font-l">Peserta</h2>
                    </center>
                </a>
            </div>            
            <!-- can 3 -->
            <div class="box-1 box_mentor">
                <a href="<?php echo base_url('auth/login_mentor') ?>">
                    <center>
                        <i class="fas fa-user fa-7x box-par"></i>                        
                        <h2 class="h4c text-center font-l">Mentor</h2>
                    </center>
                </a>
            </div>
            <!-- can 5 -->
            <div class="box-1 box_ssl">
                <a href="<?php echo base_url('auth/login_admin') ?>">
                    <center>
                        <i class="fas fa-user-cog fa-7x box-par"></i>                        
                        <h2 class="h4c text-center font-l">Admin</h2>
                    </center>
                </a>
            </div>
            <!-- can 5 -->
            <div class="box-1 box_sula">
                <a href="<?php echo base_url('auth/login_super') ?>">
                    <center>
                        <i class="fas fa-user-shield fa-7x box-par"></i>                        
                        <h2 class="h4c text-center font-l">SU Admin</h2>
                    </center>
                </a>
            </div>            
            <!-- can 7 -->
            <div class="box-1 box_informasi">
                <a href="<?= base_url(); ?>">
                    <center>
                        <img align="right" src="<?= base_url();?>assets/images/piib/logo svg.svg" width="120" weight="120">                     
                        <p class="font-l">Pusat Inovasi & Inkubator Bisnis</p>
                    </center>
                </a>
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
</body>

</html>