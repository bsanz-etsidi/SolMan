<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\DefaultController::homeAction'], null, null, null, false, false, null]],
        '/mensajeNoPuede' => [[['_route' => 'mensajeNoPuede', '_controller' => 'App\\Controller\\DefaultController::mensajeNoPuedeAction'], null, null, null, false, false, null]],
        '/solicitudesTrabajador' => [[['_route' => 'solicitudesTrabajador', '_controller' => 'App\\Controller\\DefaultController::solicitudesTrabajadorAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\DefaultController::loginAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/nuevoTrabajador' => [[['_route' => 'nuevoTrabajador', '_controller' => 'App\\Controller\\GestionController::nuevoTrabajadorAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/asignadas' => [[['_route' => 'asignadas', '_controller' => 'App\\Controller\\GestionController::asignadasAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/pendientesDeAsignar' => [[['_route' => 'pendientesDeAsignar', '_controller' => 'App\\Controller\\GestionController::pendientesDeAsignarAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/despachadas' => [[['_route' => 'despachadas', '_controller' => 'App\\Controller\\GestionController::despachadasAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/anuladas' => [[['_route' => 'anuladas', '_controller' => 'App\\Controller\\GestionController::anuladasAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/suspendidas' => [[['_route' => 'suspendidas', '_controller' => 'App\\Controller\\GestionController::suspendidasAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/prioritarias' => [[['_route' => 'prioritarias', '_controller' => 'App\\Controller\\GestionController::prioritariasAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/solicitudes' => [[['_route' => 'solicitudes', '_controller' => 'App\\Controller\\GestionController::solicitudesAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/solicitudesTrabajadorGestion' => [[['_route' => 'solicitudesTrabajadorGestion', '_controller' => 'App\\Controller\\GestionController::solicitudesTrabajadorGestionAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/partes' => [[['_route' => 'partes', '_controller' => 'App\\Controller\\GestionController::partesAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/seleccionaPartes' => [[['_route' => 'seleccionaPartes', '_controller' => 'App\\Controller\\GestionController::seleccionaPartesAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/seleccionaSolicitudes' => [[['_route' => 'seleccionaSolicitudes', '_controller' => 'App\\Controller\\GestionController::seleccionaSolicitudesAction'], null, null, null, false, false, null]],
        '/registroUsuarios/registro' => [[['_route' => 'registro', '_controller' => 'App\\Controller\\RegistroController::registroAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/statistics/estadisticas' => [[['_route' => 'estadisticas', '_controller' => 'App\\Controller\\StatisticsController::estadisticasAction'], null, null, null, false, false, null]],
        '/statistics/conteoPrioritarias' => [[['_route' => 'conteoPrioritarias', '_controller' => 'App\\Controller\\StatisticsController::conteoPrioritariasAction'], null, null, null, false, false, null]],
        '/statistics/conteoSolicitudesTrabajador' => [[['_route' => 'conteoSolicitudesTrabajador', '_controller' => 'App\\Controller\\StatisticsController::conteoSolicitudesTrabajadorsAction'], null, null, null, true, false, null]],
        '/statistics/mediaSolicitudes' => [[['_route' => 'mediaSolicitudes', '_controller' => 'App\\Controller\\StatisticsController::mediaSolicitudesAction'], null, null, null, false, false, null]],
        '/statistics/tiempoMedioSuspension' => [[['_route' => 'tiempoMedioSuspension', '_controller' => 'App\\Controller\\StatisticsController::tiempoMedioSuspensionAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/cronograma/([^/]++)(*:189)'
                .'|/nuevaSolicitud/([^/]++)(*:221)'
                .'|/mensaje/([^/]++)(*:246)'
                .'|/rellenarSatisfaccion/([^/]++)/([^/]++)(*:293)'
                .'|/gestionMantenimiento/(?'
                    .'|nuevoParte/([^/]++)(*:345)'
                    .'|editarParte/([^/]++)(*:373)'
                    .'|cronogramaGestion/([^/]++)(*:407)'
                    .'|a(?'
                        .'|nularSolicitud/([^/]++)(*:442)'
                        .'|signarSolicitud/([^/]++)(*:474)'
                    .')'
                    .'|s(?'
                        .'|uspenderSolicitud/([^/]++)(*:513)'
                        .'|olicitud(?:/([^/]++))?(*:543)'
                    .')'
                    .'|reactivarSolicitud(?'
                        .'|Suspendida/([^/]++)(*:592)'
                        .'|Anulada/([^/]++)(*:616)'
                    .')'
                    .'|p(?'
                        .'|arte(?:/([^/]++))?(*:647)'
                        .'|riorizarSolicitud/([^/]++)(*:681)'
                    .')'
                    .'|desPriorizarSolicitud/([^/]++)(*:720)'
                    .'|borrar(?'
                        .'|Asignacion/([^/]++)/([^/]++)(*:765)'
                        .'|Parte(?:/([^/]++))?(*:792)'
                    .')'
                .')'
                .'|/statistics/conteoSolicitudes(?:/([^/]++))?(*:845)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'cronograma', '_controller' => 'App\\Controller\\DefaultController::cronogramaAction'], ['idcrypt'], null, null, false, true, null]],
        221 => [[['_route' => 'nuevaSolicitud', '_controller' => 'App\\Controller\\DefaultController::nuevaSolicitudAction'], ['email'], null, null, false, true, null]],
        246 => [[['_route' => 'mensaje', '_controller' => 'App\\Controller\\DefaultController::mensajeAction'], ['emailcrypt'], null, null, false, true, null]],
        293 => [[['_route' => 'rellenarSatisfaccion', '_controller' => 'App\\Controller\\DefaultController::rellenarSatisfaccionAction'], ['id', 'emailcrypt'], null, null, false, true, null]],
        345 => [[['_route' => 'nuevoParte', '_controller' => 'App\\Controller\\GestionController::nuevoParteAction'], ['id'], null, null, false, true, null]],
        373 => [[['_route' => 'editarParte', '_controller' => 'App\\Controller\\GestionController::editarParteAction'], ['id'], null, null, false, true, null]],
        407 => [[['_route' => 'cronogramaGestion', '_controller' => 'App\\Controller\\GestionController::cronogramaGestionAction'], ['id'], null, null, false, true, null]],
        442 => [[['_route' => 'anularSolicitud', '_controller' => 'App\\Controller\\GestionController::anularSolicitudAction'], ['id'], null, null, false, true, null]],
        474 => [[['_route' => 'asignarSolicitud', '_controller' => 'App\\Controller\\GestionController::asignarSolicitudAction'], ['id'], null, null, false, true, null]],
        513 => [[['_route' => 'suspenderSolicitud', '_controller' => 'App\\Controller\\GestionController::suspenderSolicitudAction'], ['id'], null, null, false, true, null]],
        543 => [[['_route' => 'solicitud', 'id' => null, '_controller' => 'App\\Controller\\GestionController::solicitudAction'], ['id'], null, null, false, true, null]],
        592 => [[['_route' => 'reactivarSolicitudSuspendida', '_controller' => 'App\\Controller\\GestionController::reactivarSolicitudSuspendidaAction'], ['id'], null, null, false, true, null]],
        616 => [[['_route' => 'reactivarSolicitudAnulada', '_controller' => 'App\\Controller\\GestionController::reactivarSolicitudAnuladaAction'], ['id'], null, null, false, true, null]],
        647 => [[['_route' => 'parte', 'id' => null, '_controller' => 'App\\Controller\\GestionController::parteAction'], ['id'], null, null, false, true, null]],
        681 => [[['_route' => 'priorizarSolicitud', '_controller' => 'App\\Controller\\GestionController::priorizarSolicitudAction'], ['id'], null, null, false, true, null]],
        720 => [[['_route' => 'desPriorizarSolicitud', '_controller' => 'App\\Controller\\GestionController::desPriorizarSolicitudAction'], ['id'], null, null, false, true, null]],
        765 => [[['_route' => 'borrarAsignacion', '_controller' => 'App\\Controller\\GestionController::borrarAsignacionAction'], ['id', 'idTrabajador'], null, null, false, true, null]],
        792 => [[['_route' => 'borrarParte', 'id' => null, '_controller' => 'App\\Controller\\GestionController::borrarParteAction'], ['id'], null, null, false, true, null]],
        845 => [
            [['_route' => 'conteoSolicitudes', 'estado' => null, '_controller' => 'App\\Controller\\StatisticsController::conteoSolicitudesAction'], ['estado'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
