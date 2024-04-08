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
                <?php 
                    include '../inc/widgets/totalRecogidoxdias.php';
                    include '../inc/widgets/numeroEstudiantesEnMora.php';
                    include '../inc/widgets/estimadoRecogerDineroProximasFechas.php'
                   
                ?>

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


