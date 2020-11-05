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
                .'|/cronograma/(.+)(*:23)'
                .'|/nuevaSolicitud/(.+)(*:50)'
                .'|/otroDestino/([^/]++)/([^/]++)(*:87)'
                .'|/mensaje/(.+)(*:107)'
                .'|/s(?'
                    .'|olicitudTrabajador(?:/([^/]++))?(*:152)'
                    .'|tatistics/conteoSolicitudes(?:/([^/]++))?(*:201)'
                .')'
                .'|/rellenarSatisfaccion/(.+)/([^/]++)(*:245)'
                .'|/gestionMantenimiento/(?'
                    .'|b(?'
                        .'|ajaTrabajador/([^/]++)(*:304)'
                        .'|orrar(?'
                            .'|Asignacion/([^/]++)/([^/]++)/([^/]++)(*:357)'
                            .'|Parte(?:/([^/]++))?(*:384)'
                            .'|Especialidad/([^/]++)/([^/]++)(*:422)'
                        .')'
                    .')'
                    .'|nuevoParte/(.+)(*:447)'
                    .'|editar(?'
                        .'|Parte/([^/]++)(*:478)'
                        .'|Instruccion/([^/]++)/([^/]++)/([^/]++)(*:524)'
                    .')'
                    .'|c(?'
                        .'|ronogramaGestion/([^/]++)(*:562)'
                        .'|ompletarInstruccion/([^/]++)(*:598)'
                    .')'
                    .'|a(?'
                        .'|nularSolicitud/([^/]++)(*:634)'
                        .'|signar(?'
                            .'|Solicitud/([^/]++)(*:669)'
                            .'|Especialidad/([^/]++)(*:698)'
                        .')'
                    .')'
                    .'|s(?'
                        .'|uspenderSolicitud/([^/]++)(*:738)'
                        .'|olicitud(?:/([^/]++))?(*:768)'
                    .')'
                    .'|reactivarSolicitud(?'
                        .'|Suspendida/([^/]++)(*:817)'
                        .'|Anulada/([^/]++)(*:841)'
                    .')'
                    .'|p(?'
                        .'|arte(?:/([^/]++))?(*:872)'
                        .'|riorizarSolicitud/([^/]++)(*:906)'
                    .')'
                    .'|desPriorizarSolicitud/([^/]++)(*:945)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'cronograma', '_controller' => 'App\\Controller\\DefaultController::cronogramaAction'], ['idcrypt'], null, null, false, true, null]],
        50 => [[['_route' => 'nuevaSolicitud', '_controller' => 'App\\Controller\\DefaultController::nuevaSolicitudAction'], ['email'], null, null, false, true, null]],
        87 => [[['_route' => 'otroDestino', '_controller' => 'App\\Controller\\DefaultController::otroDestinoAction'], ['emailcrypt', 'id'], null, null, false, true, null]],
        107 => [[['_route' => 'mensaje', '_controller' => 'App\\Controller\\DefaultController::mensajeAction'], ['emailcrypt'], null, null, false, true, null]],
        152 => [[['_route' => 'solicitudTrabajador', 'id' => null, '_controller' => 'App\\Controller\\DefaultController::solicitudTrabajadorAction'], ['id'], null, null, false, true, null]],
        201 => [[['_route' => 'conteoSolicitudes', 'estado' => null, '_controller' => 'App\\Controller\\StatisticsController::conteoSolicitudesAction'], ['estado'], null, null, false, true, null]],
        245 => [[['_route' => 'rellenarSatisfaccion', '_controller' => 'App\\Controller\\DefaultController::rellenarSatisfaccionAction'], ['id', 'email'], null, null, false, true, null]],
        304 => [[['_route' => 'bajaTrabajador', '_controller' => 'App\\Controller\\GestionController::bajaTrabajadorAction'], ['trabajadorId'], null, null, false, true, null]],
        357 => [[['_route' => 'borrarAsignacion', '_controller' => 'App\\Controller\\GestionController::borrarAsignacionAction'], ['id', 'idTrabajador', 'idInstruccion'], null, null, false, true, null]],
        384 => [[['_route' => 'borrarParte', 'id' => null, '_controller' => 'App\\Controller\\GestionController::borrarParteAction'], ['id'], null, null, false, true, null]],
        422 => [[['_route' => 'borrarEspecialidad', '_controller' => 'App\\Controller\\GestionController::borrarEspecialidadAction'], ['especialidadId', 'parteId'], null, null, false, true, null]],
        447 => [[['_route' => 'nuevoParte', '_controller' => 'App\\Controller\\GestionController::nuevoParteAction'], ['id'], null, null, false, true, null]],
        478 => [[['_route' => 'editarParte', '_controller' => 'App\\Controller\\GestionController::editarParteAction'], ['id'], null, null, false, true, null]],
        524 => [[['_route' => 'editarInstruccion', '_controller' => 'App\\Controller\\GestionController::editarInstruccionAction'], ['idInstruccion', 'idSolicitud', 'nombreTrabajador'], null, null, false, true, null]],
        562 => [[['_route' => 'cronogramaGestion', '_controller' => 'App\\Controller\\GestionController::cronogramaGestionAction'], ['id'], null, null, false, true, null]],
        598 => [[['_route' => 'completarInstruccion', '_controller' => 'App\\Controller\\GestionController::completarInstruccionAction'], ['instruccionId'], null, null, false, true, null]],
        634 => [[['_route' => 'anularSolicitud', '_controller' => 'App\\Controller\\GestionController::anularSolicitudAction'], ['id'], null, null, false, true, null]],
        669 => [[['_route' => 'asignarSolicitud', '_controller' => 'App\\Controller\\GestionController::asignarSolicitudAction'], ['id'], null, null, false, true, null]],
        698 => [[['_route' => 'asignarEspecialidad', '_controller' => 'App\\Controller\\GestionController::asignarEspecialidadAction'], ['parteId'], null, null, false, true, null]],
        738 => [[['_route' => 'suspenderSolicitud', '_controller' => 'App\\Controller\\GestionController::suspenderSolicitudAction'], ['id'], null, null, false, true, null]],
        768 => [[['_route' => 'solicitud', 'id' => null, '_controller' => 'App\\Controller\\GestionController::solicitudAction'], ['id'], null, null, false, true, null]],
        817 => [[['_route' => 'reactivarSolicitudSuspendida', '_controller' => 'App\\Controller\\GestionController::reactivarSolicitudSuspendidaAction'], ['id'], null, null, false, true, null]],
        841 => [[['_route' => 'reactivarSolicitudAnulada', '_controller' => 'App\\Controller\\GestionController::reactivarSolicitudAnuladaAction'], ['id'], null, null, false, true, null]],
        872 => [[['_route' => 'parte', 'id' => null, '_controller' => 'App\\Controller\\GestionController::parteAction'], ['id'], null, null, false, true, null]],
        906 => [[['_route' => 'priorizarSolicitud', '_controller' => 'App\\Controller\\GestionController::priorizarSolicitudAction'], ['id'], null, null, false, true, null]],
        945 => [
            [['_route' => 'desPriorizarSolicitud', '_controller' => 'App\\Controller\\GestionController::desPriorizarSolicitudAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
