<?php include '../inc/config.php'; ?>
<?php include '../inc/template_start.php'; ?>
<?php include '../inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Dashboard Header -->
    <-->
        <?php include '../inc/widgets/HeaderBreadcrumb.php'; ?>

    <!-- END Dashboard Header -->

    <!-- Mini Top indicadores -->
    <div class="row">
        


    </div>
    <!-- END Mini Top indicadores-->

    <!-- Widgets Row -->
    <div class="row">
        <div class="block full">
            <!-- BLOQUE DE WIDGEETS INFORMATIVVOS-->
            <div class="col-lg-12">
                <div class="col-xs-4 row text-center animation-fadeIn">
                    <strong class="btn btn-warning"><h2>$45.670.000</h2>
                        <small><?php echo MONEDA ?> recogidos durante los últimos 30 días</small>
                    </strong>
                </div>

                <div class="col-xs-4">
                    <div class="col-xs-12 row text-center animation-fadeIn">
                        <strong class="btn btn-danger"><h2>23</h2>
                            <small>Estudiantes que estan en mora</small>
                        </strong>
                    </div>
                </div>


                <div class="col-xs-4">
                    <div class="col-xs-12 row text-center animation-fadeIn">
                        <strong class="btn btn-info"><h2>$32.000.000</h2>
                            <small><?php echo MONEDA ?> estimados en recoger en los proximos 30 días</small>
                        </strong>
                    </div>
                </div>


            </div>
            <!-- FIN BLOQUE DE WIDGETS INFORMATIVOS-->
            
            <?php include '../inc/tablas/aspirantes.php'; ?>
        </div>
        
    </div>
    <!-- END Widgets Row -->
</div>
<!-- END Page Content -->

<?php include '../inc/page_footer.php'; ?>
<?php include '../inc/template_scripts.php'; ?>




<script src="<?php echo BASEPATH; ?>js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>

<!-- Load and execute javascript code used only in this page -->
<script src="<?php echo BASEPATH; ?>js/pages/index.js"></script>
<script>$(function(){ Index.init(); });</script>


