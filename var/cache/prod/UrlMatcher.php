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
                .'|/cronograma/([^/]++)(*:27)'
                .'|/nuevaSolicitud/([^/]++)(*:58)'
                .'|/mensaje/([^/]++)(*:82)'
                .'|/s(?'
                    .'|olicitudTrabajador(?:/([^/]++))?(*:126)'
                    .'|tatistics/conteoSolicitudes(?:/([^/]++))?(*:175)'
                .')'
                .'|/rellenarSatisfaccion/([^/]++)/([^/]++)(*:223)'
                .'|/gestionMantenimiento/(?'
                    .'|b(?'
                        .'|ajaTrabajador/([^/]++)(*:282)'
                        .'|orrar(?'
                            .'|Asignacion/([^/]++)/([^/]++)/([^/]++)(*:335)'
                            .'|Parte(?:/([^/]++))?(*:362)'
                            .'|Especialidad/([^/]++)/([^/]++)(*:400)'
                        .')'
                    .')'
                    .'|nuevoParte/([^/]++)(*:429)'
                    .'|editar(?'
                        .'|Parte/([^/]++)(*:460)'
                        .'|Instruccion/([^/]++)/([^/]++)/([^/]++)(*:506)'
                    .')'
                    .'|c(?'
                        .'|ronogramaGestion/([^/]++)(*:544)'
                        .'|ompletarInstruccion/([^/]++)(*:580)'
                    .')'
                    .'|a(?'
                        .'|nularSolicitud/([^/]++)(*:616)'
                        .'|signar(?'
                            .'|Solicitud/([^/]++)(*:651)'
                            .'|Especialidad/([^/]++)(*:680)'
                        .')'
                    .')'
                    .'|s(?'
                        .'|uspenderSolicitud/([^/]++)(*:720)'
                        .'|olicitud(?:/([^/]++))?(*:750)'
                    .')'
                    .'|reactivarSolicitud(?'
                        .'|Suspendida/([^/]++)(*:799)'
                        .'|Anulada/([^/]++)(*:823)'
                    .')'
                    .'|p(?'
                        .'|arte(?:/([^/]++))?(*:854)'
                        .'|riorizarSolicitud/([^/]++)(*:888)'
                    .')'
                    .'|desPriorizarSolicitud/([^/]++)(*:927)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'cronograma', '_controller' => 'App\\Controller\\DefaultController::cronogramaAction'], ['idcrypt'], null, null, false, true, null]],
        58 => [[['_route' => 'nuevaSolicitud', '_controller' => 'App\\Controller\\DefaultController::nuevaSolicitudAction'], ['email'], null, null, false, true, null]],
        82 => [[['_route' => 'mensaje', '_controller' => 'App\\Controller\\DefaultController::mensajeAction'], ['emailcrypt'], null, null, false, true, null]],
        126 => [[['_route' => 'solicitudTrabajador', 'id' => null, '_controller' => 'App\\Controller\\DefaultController::solicitudTrabajadorAction'], ['id'], null, null, false, true, null]],
        175 => [[['_route' => 'conteoSolicitudes', 'estado' => null, '_controller' => 'App\\Controller\\StatisticsController::conteoSolicitudesAction'], ['estado'], null, null, false, true, null]],
        223 => [[['_route' => 'rellenarSatisfaccion', '_controller' => 'App\\Controller\\DefaultController::rellenarSatisfaccionAction'], ['id', 'emailcrypt'], null, null, false, true, null]],
        282 => [[['_route' => 'bajaTrabajador', '_controller' => 'App\\Controller\\GestionController::bajaTrabajadorAction'], ['trabajadorId'], null, null, false, true, null]],
        335 => [[['_route' => 'borrarAsignacion', '_controller' => 'App\\Controller\\GestionController::borrarAsignacionAction'], ['id', 'idTrabajador', 'idInstruccion'], null, null, false, true, null]],
        362 => [[['_route' => 'borrarParte', 'id' => null, '_controller' => 'App\\Controller\\GestionController::borrarParteAction'], ['id'], null, null, false, true, null]],
        400 => [[['_route' => 'borrarEspecialidad', '_controller' => 'App\\Controller\\GestionController::borrarEspecialidadAction'], ['especialidadId', 'parteId'], null, null, false, true, null]],
        429 => [[['_route' => 'nuevoParte', '_controller' => 'App\\Controller\\GestionController::nuevoParteAction'], ['id'], null, null, false, true, null]],
        460 => [[['_route' => 'editarParte', '_controller' => 'App\\Controller\\GestionController::editarParteAction'], ['id'], null, null, false, true, null]],
        506 => [[['_route' => 'editarInstruccion', '_controller' => 'App\\Controller\\GestionController::editarInstruccionAction'], ['idInstruccion', 'idSolicitud', 'nombreTrabajador'], null, null, false, true, null]],
        544 => [[['_route' => 'cronogramaGestion', '_controller' => 'App\\Controller\\GestionController::cronogramaGestionAction'], ['id'], null, null, false, true, null]],
        580 => [[['_route' => 'completarInstruccion', '_controller' => 'App\\Controller\\GestionController::completarInstruccionAction'], ['instruccionId'], null, null, false, true, null]],
        616 => [[['_route' => 'anularSolicitud', '_controller' => 'App\\Controller\\GestionController::anularSolicitudAction'], ['id'], null, null, false, true, null]],
        651 => [[['_route' => 'asignarSolicitud', '_controller' => 'App\\Controller\\GestionController::asignarSolicitudAction'], ['id'], null, null, false, true, null]],
        680 => [[['_route' => 'asignarEspecialidad', '_controller' => 'App\\Controller\\GestionController::asignarEspecialidadAction'], ['parteId'], null, null, false, true, null]],
        720 => [[['_route' => 'suspenderSolicitud', '_controller' => 'App\\Controller\\GestionController::suspenderSolicitudAction'], ['id'], null, null, false, true, null]],
        750 => [[['_route' => 'solicitud', 'id' => null, '_controller' => 'App\\Controller\\GestionController::solicitudAction'], ['id'], null, null, false, true, null]],
        799 => [[['_route' => 'reactivarSolicitudSuspendida', '_controller' => 'App\\Controller\\GestionController::reactivarSolicitudSuspendidaAction'], ['id'], null, null, false, true, null]],
        823 => [[['_route' => 'reactivarSolicitudAnulada', '_controller' => 'App\\Controller\\GestionController::reactivarSolicitudAnuladaAction'], ['id'], null, null, false, true, null]],
        854 => [[['_route' => 'parte', 'id' => null, '_controller' => 'App\\Controller\\GestionController::parteAction'], ['id'], null, null, false, true, null]],
        888 => [[['_route' => 'priorizarSolicitud', '_controller' => 'App\\Controller\\GestionController::priorizarSolicitudAction'], ['id'], null, null, false, true, null]],
        927 => [
            [['_route' => 'desPriorizarSolicitud', '_controller' => 'App\\Controller\\GestionController::desPriorizarSolicitudAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
