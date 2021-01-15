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
        '/rellenarSolicitudes' => [[['_route' => 'rellenarSolicitudes', '_controller' => 'App\\Controller\\DefaultController::rellenarSolicitudesAction'], null, null, null, false, false, null]],
        '/rellenarUsuarios' => [[['_route' => 'rellenarUsuarios', '_controller' => 'App\\Controller\\DefaultController::rellenarUsuariosAction'], null, null, null, false, false, null]],
        '/rellenarEventos' => [[['_route' => 'rellenarEventos', '_controller' => 'App\\Controller\\DefaultController::rellenarEventosAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/base' => [[['_route' => 'base', '_controller' => 'App\\Controller\\GestionController::baseAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/nuevoTrabajador' => [[['_route' => 'nuevoTrabajador', '_controller' => 'App\\Controller\\GestionController::nuevoTrabajadorAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/asignadas' => [[['_route' => 'asignadas', '_controller' => 'App\\Controller\\GestionController::asignadasAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/pendientesDeAsignar' => [[['_route' => 'pendientesDeAsignar', '_controller' => 'App\\Controller\\GestionController::pendientesDeAsignarAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/despachadas' => [[['_route' => 'despachadas', '_controller' => 'App\\Controller\\GestionController::despachadasAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/anuladas' => [[['_route' => 'anuladas', '_controller' => 'App\\Controller\\GestionController::anuladasAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/suspendidas' => [[['_route' => 'suspendidas', '_controller' => 'App\\Controller\\GestionController::suspendidasAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/prioritarias' => [[['_route' => 'prioritarias', '_controller' => 'App\\Controller\\GestionController::prioritariasAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/solicitudes' => [[['_route' => 'solicitudes', '_controller' => 'App\\Controller\\GestionController::solicitudesAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/solicitudesTrabajadorGestion' => [[['_route' => 'solicitudesTrabajadorGestion', '_controller' => 'App\\Controller\\GestionController::solicitudesTrabajadorGestionAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/solicitudesUnidadDestino' => [[['_route' => 'solicitudesUnidadDestino', '_controller' => 'App\\Controller\\GestionController::solicitudesUnidadDestinoAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/partes' => [[['_route' => 'partes', '_controller' => 'App\\Controller\\GestionController::partesAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/seleccionaPartes' => [[['_route' => 'seleccionaPartes', '_controller' => 'App\\Controller\\GestionController::seleccionaPartesAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/seleccionaSolicitudes' => [[['_route' => 'seleccionaSolicitudes', '_controller' => 'App\\Controller\\GestionController::seleccionaSolicitudesAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/instruccionesCompletadas' => [[['_route' => 'instruccionesCompletadas', '_controller' => 'App\\Controller\\GestionController::instruccionesCompletadasAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/desactivarTrabajador' => [[['_route' => 'desactivarTrabajador', '_controller' => 'App\\Controller\\GestionController::desactivarTrabajadorAction'], null, null, null, false, false, null]],
        '/gestionMantenimiento/reactivarTrabajador' => [[['_route' => 'reactivarTrabajador', '_controller' => 'App\\Controller\\GestionController::reactivarTrabajadorAction'], null, null, null, false, false, null]],
        '/registroUsuarios/registro' => [[['_route' => 'registro', '_controller' => 'App\\Controller\\RegistroController::registroAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/statistics/basestat' => [[['_route' => 'basestat', '_controller' => 'App\\Controller\\StatisticsController::basestatAction'], null, null, null, false, false, null]],
        '/statistics/estadisticas' => [[['_route' => 'estadisticas', '_controller' => 'App\\Controller\\StatisticsController::estadisticasAction'], null, null, null, false, false, null]],
        '/statistics/conteoPrioritarias' => [[['_route' => 'conteoPrioritarias', '_controller' => 'App\\Controller\\StatisticsController::conteoPrioritariasAction'], null, null, null, false, false, null]],
        '/statistics/conteoSolicitudesTrabajador' => [[['_route' => 'conteoSolicitudesTrabajador', '_controller' => 'App\\Controller\\StatisticsController::conteoSolicitudesTrabajadorAction'], null, null, null, true, false, null]],
        '/statistics/conteoSolicitudesDestino' => [[['_route' => 'conteoSolicitudesDestino', '_controller' => 'App\\Controller\\StatisticsController::conteoSolicitudesDestinoAction'], null, null, null, false, false, null]],
        '/statistics/conteoPartesEspecialidad' => [[['_route' => 'conteoPartesEspecialidad', '_controller' => 'App\\Controller\\StatisticsController::conteoPartesEspecialidadAction'], null, null, null, false, false, null]],
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
                .'|/cronograma/(.+)(*:185)'
                .'|/nuevaSolicitud/([^/]++)/(.+)(*:222)'
                .'|/otroDestino/([^/]++)/(.+)/([^/]++)(*:265)'
                .'|/s(?'
                    .'|olicitud(?'
                        .'|/([^/]++)/([^/]++)(*:307)'
                        .'|Trabajador(?:/([^/]++))?(*:339)'
                        .'|esUsuario/([^/]++)/([^/]++)(*:374)'
                    .')'
                    .'|tatistics/conteoSolicitudes(?:/([^/]++))?(*:424)'
                .')'
                .'|/mensaje/(.+)/([^/]++)(*:455)'
                .'|/portadaUsuario/(.+)/([^/]++)(*:492)'
                .'|/rellenarSatisfaccion/([^/]++)/([^/]++)(*:539)'
                .'|/gestionMantenimiento/(?'
                    .'|b(?'
                        .'|ajaTrabajador/([^/]++)(*:598)'
                        .'|orrar(?'
                            .'|Asignacion/([^/]++)/([^/]++)/([^/]++)(*:651)'
                            .'|Parte(?:/([^/]++))?(*:678)'
                            .'|Especialidad/([^/]++)/([^/]++)(*:716)'
                        .')'
                    .')'
                    .'|nuevoParte/(.+)(*:741)'
                    .'|editar(?'
                        .'|Parte/([^/]++)(*:772)'
                        .'|Instruccion/([^/]++)/([^/]++)/([^/]++)(*:818)'
                    .')'
                    .'|a(?'
                        .'|nularSolicitud/([^/]++)(*:854)'
                        .'|signar(?'
                            .'|Solicitud/([^/]++)(*:889)'
                            .'|Especialidad/([^/]++)(*:918)'
                        .')'
                    .')'
                    .'|suspenderSolicitud/([^/]++)(*:955)'
                    .'|reactivarSolicitud(?'
                        .'|Suspendida/([^/]++)(*:1003)'
                        .'|Anulada/([^/]++)(*:1028)'
                    .')'
                    .'|p(?'
                        .'|arte(?:/([^/]++))?(*:1060)'
                        .'|riorizarSolicitud/([^/]++)(*:1095)'
                    .')'
                    .'|desPriorizarSolicitud/([^/]++)(*:1135)'
                    .'|completarInstruccion/([^/]++)(*:1173)'
                .')'
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
        185 => [[['_route' => 'cronograma', '_controller' => 'App\\Controller\\DefaultController::cronogramaAction'], ['idcrypt'], null, null, false, true, null]],
        222 => [[['_route' => 'nuevaSolicitud', '_controller' => 'App\\Controller\\DefaultController::nuevaSolicitudAction'], ['emailcrypt', 'email'], null, null, false, true, null]],
        265 => [[['_route' => 'otroDestino', '_controller' => 'App\\Controller\\DefaultController::otroDestinoAction'], ['emailcrypt', 'email', 'id'], null, null, false, true, null]],
        307 => [[['_route' => 'solicitud', '_controller' => 'App\\Controller\\DefaultController::solicitudAction'], ['idcrypt', 'id'], null, null, false, true, null]],
        339 => [[['_route' => 'solicitudTrabajador', 'id' => null, '_controller' => 'App\\Controller\\DefaultController::solicitudTrabajadorAction'], ['id'], null, null, false, true, null]],
        374 => [[['_route' => 'solicitudesUsuario', '_controller' => 'App\\Controller\\DefaultController::solicitudesUsuarioAction'], ['emailcrypt', 'email'], null, null, false, true, null]],
        424 => [[['_route' => 'conteoSolicitudes', 'estado' => null, '_controller' => 'App\\Controller\\StatisticsController::conteoSolicitudesAction'], ['estado'], null, null, false, true, null]],
        455 => [[['_route' => 'mensaje', '_controller' => 'App\\Controller\\DefaultController::mensajeAction'], ['emailcrypt', 'email'], null, null, false, true, null]],
        492 => [[['_route' => 'portadaUsuario', '_controller' => 'App\\Controller\\DefaultController::portadaUsuarioAction'], ['emailcrypt', 'email'], null, null, false, true, null]],
        539 => [[['_route' => 'rellenarSatisfaccion', '_controller' => 'App\\Controller\\DefaultController::rellenarSatisfaccionAction'], ['idcrypt', 'email'], null, null, false, true, null]],
        598 => [[['_route' => 'bajaTrabajador', '_controller' => 'App\\Controller\\GestionController::bajaTrabajadorAction'], ['trabajadorId'], null, null, false, true, null]],
        651 => [[['_route' => 'borrarAsignacion', '_controller' => 'App\\Controller\\GestionController::borrarAsignacionAction'], ['id', 'idTrabajador', 'idInstruccion'], null, null, false, true, null]],
        678 => [[['_route' => 'borrarParte', 'id' => null, '_controller' => 'App\\Controller\\GestionController::borrarParteAction'], ['id'], null, null, false, true, null]],
        716 => [[['_route' => 'borrarEspecialidad', '_controller' => 'App\\Controller\\GestionController::borrarEspecialidadAction'], ['especialidadId', 'parteId'], null, null, false, true, null]],
        741 => [[['_route' => 'nuevoParte', '_controller' => 'App\\Controller\\GestionController::nuevoParteAction'], ['id'], null, null, false, true, null]],
        772 => [[['_route' => 'editarParte', '_controller' => 'App\\Controller\\GestionController::editarParteAction'], ['id'], null, null, false, true, null]],
        818 => [[['_route' => 'editarInstruccion', '_controller' => 'App\\Controller\\GestionController::editarInstruccionAction'], ['idInstruccion', 'idSolicitud', 'nombreTrabajador'], null, null, false, true, null]],
        854 => [[['_route' => 'anularSolicitud', '_controller' => 'App\\Controller\\GestionController::anularSolicitudAction'], ['id'], null, null, false, true, null]],
        889 => [[['_route' => 'asignarSolicitud', '_controller' => 'App\\Controller\\GestionController::asignarSolicitudAction'], ['id'], null, null, false, true, null]],
        918 => [[['_route' => 'asignarEspecialidad', '_controller' => 'App\\Controller\\GestionController::asignarEspecialidadAction'], ['parteId'], null, null, false, true, null]],
        955 => [[['_route' => 'suspenderSolicitud', '_controller' => 'App\\Controller\\GestionController::suspenderSolicitudAction'], ['id'], null, null, false, true, null]],
        1003 => [[['_route' => 'reactivarSolicitudSuspendida', '_controller' => 'App\\Controller\\GestionController::reactivarSolicitudSuspendidaAction'], ['id'], null, null, false, true, null]],
        1028 => [[['_route' => 'reactivarSolicitudAnulada', '_controller' => 'App\\Controller\\GestionController::reactivarSolicitudAnuladaAction'], ['id'], null, null, false, true, null]],
        1060 => [[['_route' => 'parte', 'id' => null, '_controller' => 'App\\Controller\\GestionController::parteAction'], ['id'], null, null, false, true, null]],
        1095 => [[['_route' => 'priorizarSolicitud', '_controller' => 'App\\Controller\\GestionController::priorizarSolicitudAction'], ['id'], null, null, false, true, null]],
        1135 => [[['_route' => 'desPriorizarSolicitud', '_controller' => 'App\\Controller\\GestionController::desPriorizarSolicitudAction'], ['id'], null, null, false, true, null]],
        1173 => [
            [['_route' => 'completarInstruccion', '_controller' => 'App\\Controller\\GestionController::completarInstruccionAction'], ['instruccionId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
