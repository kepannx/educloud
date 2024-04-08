<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Dashboard Header -->
    <-->
        <?php include 'inc/widgets/HeaderIndex.php'; ?>

    <!-- END Dashboard Header -->

    <!-- Mini Top indicadores -->
    <div class="row">
        

        <?php   include 'inc/widgets/estudiantesInscritos.php';
               
                include 'inc/widgets/estudiantessinCerrarMatricula.php';
                include 'inc/widgets/aspirantesInteresados.php';
                include 'inc/widgets/estudiantesDocumentosPendientes.php';
                include 'inc/widgets/estudiantesSinCerrarCicloDeMatricula.php';
        ?>


    </div>
    <!-- END Mini Top indicadores-->

    <!-- Widgets Row -->
    <div class="row">
        <div class="block full">
            <?php include 'inc/tablas/estudiantesInscritos.php'; ?>
        </div>
        
    </div>
    <!-- END Widgets Row -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>



<!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
<!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->

<script src="js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/index.js"></script>
<script>$(function(){ Index.init(); });</script>


