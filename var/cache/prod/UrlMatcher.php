<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\DefaultController::homeAction'], null, null, null, false, false, null]],
        '/mensajeNoPuede' => [[['_route' => 'mensajeNoPuede', '_controller' => 'App\\Controller\\DefaultController::mensajeNoPuedeAction'], null, null, null, false, false, null]],
        '/solicitudesTrabajador' => [[['_route' => 'solicitudesTrabajador', '_controller' => 'App\\Controller\\DefaultController::solicitudesTrabajadorAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\DefaultController::loginAction'], null, null, null, false, false, null]],
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
        '/statistics/conteoSolicitudesTrabajador' => [[['_route' => 'conteoSolicitudesTrabajador', '_controller' => 'App\\Controller\\StatisticsController::conteoSolicitudesTrabajadorsAction'], null, null, null, true, false, null]],
        '/statistics/conteoPartesEspecialidad' => [[['_route' => 'conteoPartesEspecialidad', '_controller' => 'App\\Controller\\StatisticsController::conteoPartesEspecialidadAction'], null, null, null, false, false, null]],
        '/statistics/mediaSolicitudes' => [[['_route' => 'mediaSolicitudes', '_controller' => 'App\\Controller\\StatisticsController::mediaSolicitudesAction'], null, null, null, false, false, null]],
        '/statistics/tiempoMedioSuspension' => [[['_route' => 'tiempoMedioSuspension', '_controller' => 'App\\Controller\\StatisticsController::tiempoMedioSuspensionAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/cronograma/(.+)(*:23)'
                .'|/nuevaSolicitud/(.+)(*:50)'
                .'|/mensaje/(.+)(*:70)'
                .'|/s(?'
                    .'|olicitudTrabajador(?:/([^/]++))?(*:114)'
                    .'|tatistics/conteoSolicitudes(?:/([^/]++))?(*:163)'
                .')'
                .'|/rellenarSatisfaccion/(.+)/([^/]++)(*:207)'
                .'|/gestionMantenimiento/(?'
                    .'|b(?'
                        .'|ajaTrabajador/([^/]++)(*:266)'
                        .'|orrar(?'
                            .'|Asignacion/([^/]++)/([^/]++)/([^/]++)(*:319)'
                            .'|Parte(?:/([^/]++))?(*:346)'
                            .'|Especialidad/([^/]++)/([^/]++)(*:384)'
                        .')'
                    .')'
                    .'|nuevoParte/(.+)(*:409)'
                    .'|editar(?'
                        .'|Parte/([^/]++)(*:440)'
                        .'|Instruccion/([^/]++)/([^/]++)/([^/]++)(*:486)'
                    .')'
                    .'|c(?'
                        .'|ronogramaGestion/([^/]++)(*:524)'
                        .'|ompletarInstruccion/([^/]++)(*:560)'
                    .')'
                    .'|a(?'
                        .'|nularSolicitud/([^/]++)(*:596)'
                        .'|signar(?'
                            .'|Solicitud/([^/]++)(*:631)'
                            .'|Especialidad/([^/]++)(*:660)'
                        .')'
                    .')'
                    .'|s(?'
                        .'|uspenderSolicitud/([^/]++)(*:700)'
                        .'|olicitud(?:/([^/]++))?(*:730)'
                    .')'
                    .'|reactivarSolicitud(?'
                        .'|Suspendida/([^/]++)(*:779)'
                        .'|Anulada/([^/]++)(*:803)'
                    .')'
                    .'|p(?'
                        .'|arte(?:/([^/]++))?(*:834)'
                        .'|riorizarSolicitud/([^/]++)(*:868)'
                    .')'
                    .'|desPriorizarSolicitud/([^/]++)(*:907)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'cronograma', '_controller' => 'App\\Controller\\DefaultController::cronogramaAction'], ['idcrypt'], null, null, false, true, null]],
        50 => [[['_route' => 'nuevaSolicitud', '_controller' => 'App\\Controller\\DefaultController::nuevaSolicitudAction'], ['email'], null, null, false, true, null]],
        70 => [[['_route' => 'mensaje', '_controller' => 'App\\Controller\\DefaultController::mensajeAction'], ['emailcrypt'], null, null, false, true, null]],
        114 => [[['_route' => 'solicitudTrabajador', 'id' => null, '_controller' => 'App\\Controller\\DefaultController::solicitudTrabajadorAction'], ['id'], null, null, false, true, null]],
        163 => [[['_route' => 'conteoSolicitudes', 'estado' => null, '_controller' => 'App\\Controller\\StatisticsController::conteoSolicitudesAction'], ['estado'], null, null, false, true, null]],
        207 => [[['_route' => 'rellenarSatisfaccion', '_controller' => 'App\\Controller\\DefaultController::rellenarSatisfaccionAction'], ['id', 'email'], null, null, false, true, null]],
        266 => [[['_route' => 'bajaTrabajador', '_controller' => 'App\\Controller\\GestionController::bajaTrabajadorAction'], ['trabajadorId'], null, null, false, true, null]],
        319 => [[['_route' => 'borrarAsignacion', '_controller' => 'App\\Controller\\GestionController::borrarAsignacionAction'], ['id', 'idTrabajador', 'idInstruccion'], null, null, false, true, null]],
        346 => [[['_route' => 'borrarParte', 'id' => null, '_controller' => 'App\\Controller\\GestionController::borrarParteAction'], ['id'], null, null, false, true, null]],
        384 => [[['_route' => 'borrarEspecialidad', '_controller' => 'App\\Controller\\GestionController::borrarEspecialidadAction'], ['especialidadId', 'parteId'], null, null, false, true, null]],
        409 => [[['_route' => 'nuevoParte', '_controller' => 'App\\Controller\\GestionController::nuevoParteAction'], ['id'], null, null, false, true, null]],
        440 => [[['_route' => 'editarParte', '_controller' => 'App\\Controller\\GestionController::editarParteAction'], ['id'], null, null, false, true, null]],
        486 => [[['_route' => 'editarInstruccion', '_controller' => 'App\\Controller\\GestionController::editarInstruccionAction'], ['idInstruccion', 'idSolicitud', 'nombreTrabajador'], null, null, false, true, null]],
        524 => [[['_route' => 'cronogramaGestion', '_controller' => 'App\\Controller\\GestionController::cronogramaGestionAction'], ['id'], null, null, false, true, null]],
        560 => [[['_route' => 'completarInstruccion', '_controller' => 'App\\Controller\\GestionController::completarInstruccionAction'], ['instruccionId'], null, null, false, true, null]],
        596 => [[['_route' => 'anularSolicitud', '_controller' => 'App\\Controller\\GestionController::anularSolicitudAction'], ['id'], null, null, false, true, null]],
        631 => [[['_route' => 'asignarSolicitud', '_controller' => 'App\\Controller\\GestionController::asignarSolicitudAction'], ['id'], null, null, false, true, null]],
        660 => [[['_route' => 'asignarEspecialidad', '_controller' => 'App\\Controller\\GestionController::asignarEspecialidadAction'], ['parteId'], null, null, false, true, null]],
        700 => [[['_route' => 'suspenderSolicitud', '_controller' => 'App\\Controller\\GestionController::suspenderSolicitudAction'], ['id'], null, null, false, true, null]],
        730 => [[['_route' => 'solicitud', 'id' => null, '_controller' => 'App\\Controller\\GestionController::solicitudAction'], ['id'], null, null, false, true, null]],
        779 => [[['_route' => 'reactivarSolicitudSuspendida', '_controller' => 'App\\Controller\\GestionController::reactivarSolicitudSuspendidaAction'], ['id'], null, null, false, true, null]],
        803 => [[['_route' => 'reactivarSolicitudAnulada', '_controller' => 'App\\Controller\\GestionController::reactivarSolicitudAnuladaAction'], ['id'], null, null, false, true, null]],
        834 => [[['_route' => 'parte', 'id' => null, '_controller' => 'App\\Controller\\GestionController::parteAction'], ['id'], null, null, false, true, null]],
        868 => [[['_route' => 'priorizarSolicitud', '_controller' => 'App\\Controller\\GestionController::priorizarSolicitudAction'], ['id'], null, null, false, true, null]],
        907 => [
            [['_route' => 'desPriorizarSolicitud', '_controller' => 'App\\Controller\\GestionController::desPriorizarSolicitudAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
