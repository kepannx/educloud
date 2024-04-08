<?php
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Configuration file. It contains variables used in the template as well as the primary navigation array from which the navigation is created
 *
 */
define('BASEPATH', "http://".$_SERVER['HTTP_HOST']."/indecap/"); //directorio raiz
define('MONEDA', '  USD');
//define('TEMPLATE_START', __DIR__ . '/inc/template_start.php');
//define('PAGE_HEAD', __DIR__ . '/inc/page_head.php');



/* Template variables */
$template = array(
    'name'              => 'EduCloud',
    'version'           => '0.1 Beta',
    'author'            => 'Codream',
    'robots'            => 'noindex, nofollow',
    'title'             => 'EduCloud Indecap, Panel de Control',
    'description'       => 'Software en nube para administracion de centros educativos.',
    // true                     enable page preloader
    // false                    disable page preloader
    'page_preloader'    => false,
    // true                     enable main menu auto scrolling when opening a submenu
    // false                    disable main menu auto scrolling when opening a submenu
    'menu_scroll'       => true,
    // 'navbar-default'         for a light header
    // 'navbar-inverse'         for a dark header
    'header_navbar'     => 'navbar-default',
    // ''                       empty for a static layout
    // 'navbar-fixed-top'       for a top fixed header / fixed sidebars
    // 'navbar-fixed-bottom'    for a bottom fixed header / fixed sidebars
    'header'            => '',
    // ''                                               for a full main and alternative sidebar hidden by default (> 991px)
    // 'sidebar-visible-lg'                             for a full main sidebar visible by default (> 991px)
    // 'sidebar-partial'                                for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
    // 'sidebar-partial sidebar-visible-lg'             for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
    // 'sidebar-mini sidebar-visible-lg-mini'           for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
    // 'sidebar-mini sidebar-visible-lg'                for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)
    // 'sidebar-alt-visible-lg'                         for a full alternative sidebar visible by default (> 991px)
    // 'sidebar-alt-partial'                            for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
    // 'sidebar-alt-partial sidebar-alt-visible-lg'     for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)
    // 'sidebar-partial sidebar-alt-partial'            for both sidebars partial which open on mouse hover, hidden by default (> 991px)
    // 'sidebar-no-animations'                          add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!
    'sidebar'           => 'sidebar-partial sidebar-visible-lg sidebar-no-animations',
    // ''                       empty for a static footer
    // 'footer-fixed'           for a fixed footer
    'footer'            => '',
    // ''                       empty for default style
    // 'style-alt'              for an alternative main style (affects main page background as well as blocks style)
    'main_style'        => '',
    // ''                           Disable cookies (best for setting an active color theme from the next variable)
    // 'enable-cookies'             Enables cookies for remembering active color theme when changed from the sidebar links (the next color theme variable will be ignored)
    'cookies'           => '',
    // 'night', 'amethyst', 'modern', 'autumn', 'flatie', 'spring', 'fancy', 'fire', 'coral', 'lake',
    // 'forest', 'waterlily', 'emerald', 'blackberry' or '' leave empty for the Default Blue theme
    'theme'             => '',
    // ''                       for default content in header
    // 'horizontal-menu'        for a horizontal menu in header
    // This option is just used for feature demostration and you can remove it if you like. You can keep or alter header's content in page_head.php
    'header_content'    => '',
    'active_page'       => basename($_SERVER['PHP_SELF'])
);

/* Matriz de navegación principal (la navegación principal se creará automáticamente en base a esta matriz, con hasta 3 niveles de profundidad)" */
$primary_nav = array(
    array(
        'name'  => 'Dashboard',
        'url'   => BASEPATH.'index.php',
        'icon'  => 'gi gi-stopwatch'
    ),
        
   
    array(
        'name'=> 'Estudiantes',
       // 'url'=> 'estudiantes/',
        'icon' => 'gi gi-girl',
        'sub' => array(
            array (
                'name'=> 'Aspirantes',
                'url' => BASEPATH.'estudiantes/aspirantes.php'
            ),
            array (
                'name'=> 'Matriculados',
                'url' => BASEPATH.'estudiantes/matriculados.php',
            )

        )

    ),
    array(
        'name'  => 'Administrativo',
        'url'   => 'Administrativo/',
        'icon'  => 'gi gi-charts',
        'sub' => array(
            array (
                'name'=> 'Informes',
                'url' => 'informes/',
                'sub' => array(
                    array (
                        'name'=> 'Informes Financieros',
                        'url' => BASEPATH.'informes/financieros.php'
                    ),
                    array (
                        'name'=> 'Matriculas y Formularios',
                        'url' => BASEPATH.'informes/matriculados.php',
                    )

                )
            ),
            array (
                'name'=> 'Precios y Costos',
                'url' => BASEPATH.'preciosCostos/',
            )

        )
    ),

);





//**********************************[FUNCIONES PROPIAS]******************************//






//Funcion que me genera frases random para el usuario
function fraseRandom() {
    $frases = [
        "Hoy sera un gran dia!",
        "Te vez asombrosa!  ",
    ];
    $indice = array_rand($frases);
    return $frases[$indice];
}


//Funcion Breadcrumb, me indica en que pagina estoy y me saca el nombre
function showBreadcrumb() {
    $pagina_actual = $_SERVER['PHP_SELF'];
    $pagina_nombre = basename($pagina_actual);
    $breadcrumb = '<nav aria-label="breadcrumb">';
    $breadcrumb .= '<ol class="breadcrumb">';
    $breadcrumb .= '<li class="breadcrumb-item"><a href="'.BASEPATH.'index.php">Inicio</a></li>';

    if ($pagina_nombre !== 'index.php') {
        $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">' . ucfirst(str_replace('.php', '', $pagina_nombre)) . '</li>';
    }

    $breadcrumb .= '</ol>';
    $breadcrumb .= '</nav>';

    echo $breadcrumb;
}











/*Funcion que me genera noombres y apellidos aleatoreoos,, esto solo es para la muestra del UX,
NO ES FUNCIONAL PARA LA APLICACION */

function generarNombresAleatorios($cantidad) {
    $nombres = [
        'Juan', 'Pedro', 'María', 'Ana', 'Luis', 'Carlos', 'Laura', 'Sofía', 'Diego', 'Andrés', 'Elena', 'Lucía', 'Marta', 'Roberto', 'Daniel', 'Fernando', 'Isabel', 'Rosa', 'Carmen', 'Javier', 'Rafael', 'Alejandro', 'Patricia', 'Rocío', 'Manuel', 'Miguel', 'José', 'David', 'Pablo', 'Francisco', 'Jorge', 'Antonio', 'Gonzalo', 'Ricardo', 'Emilia', 'Victoria', 'Teresa', 'Diana', 'Giselle', 'Olivia', 'Irene', 'Adrián', 'Mateo', 'Nicolás', 'Óscar', 'Santiago', 'Gabriel', 'Felipe', 'Ángela', 'Beatriz', 'Claudia', 'Vanessa', 'Bárbara', 'Camila', 'Carolina', 'Gabriela', 'Jessica', 'Natalia', 'Valentina', 'Verónica'
    ];

    $apellidos = [
        'García', 'Fernández', 'González', 'Rodríguez', 'López', 'Martínez', 'Sánchez', 'Pérez', 'Gómez', 'Díaz', 'Hernández', 'Alvarez', 'Jiménez', 'Ruiz', 'Moreno', 'Molina', 'Navarro', 'Rojas', 'Delgado', 'Torres', 'Castro', 'Ortega', 'Serrano', 'Ramírez', 'Cortés', 'Reyes', 'Morales', 'Iglesias', 'Gutiérrez', 'Flores', 'Aguilar', 'Romero', 'Vargas', 'Santiago', 'Méndez', 'Guerrero', 'Cruz', 'Pardo', 'Calderón', 'Arias', 'Vega', 'Mora', 'Solís', 'Bermúdez', 'Bustos', 'Fuentes', 'Paz', 'Peña', 'Salas', 'Castañeda', 'Gallardo', 'Ramos', 'Giménez', 'Valenzuela', 'Pacheco', 'Cabrera', 'Herrera', 'Vargas', 'Suárez', 'Blanco', 'Duarte', 'Acosta'
    ];

    $nombresAleatorios = [];
    for ($i = 0; $i < $cantidad; $i++) {
        $nombre = $nombres[array_rand($nombres)];
        $apellido = $apellidos[array_rand($apellidos)];
        $nombresAleatorios[] = "$nombre $apellido";
    }

    return $nombresAleatorios;
}



//GENERO FECHAS ALEATORIAS
function generarFechasAleatorias() {
    $fechas = [];
    $fechaInicio = strtotime('2024-01-01');
    $fechaFin = strtotime('2024-01-25');

    for ($i = 0; $i < 10; $i++) { // Cambia 10 por el número de fechas aleatorias que deseas generar
        $fechaAleatoria = mt_rand($fechaInicio, $fechaFin);
        $fechas[] = date('Y-F-d', $fechaAleatoria);
    }

    return $fechas[rand(0,4)];
}

// Uso de la función para obtener las fechas aleatorias










