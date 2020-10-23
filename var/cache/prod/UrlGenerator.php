<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'home' => [[], ['_controller' => 'App\\Controller\\DefaultController::homeAction'], [], [['text', '/']], [], []],
    'cronograma' => [['idcrypt'], ['_controller' => 'App\\Controller\\DefaultController::cronogramaAction'], [], [['variable', '/', '[^/]++', 'idcrypt'], ['text', '/cronograma']], [], []],
    'nuevaSolicitud' => [['email'], ['_controller' => 'App\\Controller\\DefaultController::nuevaSolicitudAction'], ['email' => '.+'], [['variable', '/', '.+', 'email'], ['text', '/nuevaSolicitud']], [], []],
    'mensajeNoPuede' => [[], ['_controller' => 'App\\Controller\\DefaultController::mensajeNoPuedeAction'], [], [['text', '/mensajeNoPuede']], [], []],
    'mensaje' => [['emailcrypt'], ['_controller' => 'App\\Controller\\DefaultController::mensajeAction'], [], [['variable', '/', '[^/]++', 'emailcrypt'], ['text', '/mensaje']], [], []],
    'solicitudesTrabajador' => [[], ['_controller' => 'App\\Controller\\DefaultController::solicitudesTrabajadorAction'], [], [['text', '/solicitudesTrabajador']], [], []],
    'solicitudTrabajador' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\DefaultController::solicitudTrabajadorAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/solicitudTrabajador']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\DefaultController::loginAction'], [], [['text', '/login']], [], []],
    'rellenarSatisfaccion' => [['id', 'emailcrypt'], ['_controller' => 'App\\Controller\\DefaultController::rellenarSatisfaccionAction'], [], [['variable', '/', '[^/]++', 'emailcrypt'], ['variable', '/', '[^/]++', 'id'], ['text', '/rellenarSatisfaccion']], [], []],
    'base' => [[], ['_controller' => 'App\\Controller\\GestionController::baseAction'], [], [['text', '/gestionMantenimiento/base']], [], []],
    'nuevoTrabajador' => [[], ['_controller' => 'App\\Controller\\GestionController::nuevoTrabajadorAction'], [], [['text', '/gestionMantenimiento/nuevoTrabajador']], [], []],
    'bajaTrabajador' => [['trabajadorId'], ['_controller' => 'App\\Controller\\GestionController::bajaTrabajadorAction'], [], [['variable', '/', '[^/]++', 'trabajadorId'], ['text', '/gestionMantenimiento/bajaTrabajador']], [], []],
    'nuevoParte' => [['id'], ['_controller' => 'App\\Controller\\GestionController::nuevoParteAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/nuevoParte']], [], []],
    'editarParte' => [['id'], ['_controller' => 'App\\Controller\\GestionController::editarParteAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/editarParte']], [], []],
    'asignadas' => [[], ['_controller' => 'App\\Controller\\GestionController::asignadasAction'], [], [['text', '/gestionMantenimiento/asignadas']], [], []],
    'pendientesDeAsignar' => [[], ['_controller' => 'App\\Controller\\GestionController::pendientesDeAsignarAction'], [], [['text', '/gestionMantenimiento/pendientesDeAsignar']], [], []],
    'despachadas' => [[], ['_controller' => 'App\\Controller\\GestionController::despachadasAction'], [], [['text', '/gestionMantenimiento/despachadas']], [], []],
    'anuladas' => [[], ['_controller' => 'App\\Controller\\GestionController::anuladasAction'], [], [['text', '/gestionMantenimiento/anuladas']], [], []],
    'suspendidas' => [[], ['_controller' => 'App\\Controller\\GestionController::suspendidasAction'], [], [['text', '/gestionMantenimiento/suspendidas']], [], []],
    'prioritarias' => [[], ['_controller' => 'App\\Controller\\GestionController::prioritariasAction'], [], [['text', '/gestionMantenimiento/prioritarias']], [], []],
    'cronogramaGestion' => [['id'], ['_controller' => 'App\\Controller\\GestionController::cronogramaGestionAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/cronogramaGestion']], [], []],
    'anularSolicitud' => [['id'], ['_controller' => 'App\\Controller\\GestionController::anularSolicitudAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/anularSolicitud']], [], []],
    'suspenderSolicitud' => [['id'], ['_controller' => 'App\\Controller\\GestionController::suspenderSolicitudAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/suspenderSolicitud']], [], []],
    'reactivarSolicitudSuspendida' => [['id'], ['_controller' => 'App\\Controller\\GestionController::reactivarSolicitudSuspendidaAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/reactivarSolicitudSuspendida']], [], []],
    'reactivarSolicitudAnulada' => [['id'], ['_controller' => 'App\\Controller\\GestionController::reactivarSolicitudAnuladaAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/reactivarSolicitudAnulada']], [], []],
    'asignarSolicitud' => [['id'], ['_controller' => 'App\\Controller\\GestionController::asignarSolicitudAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/asignarSolicitud']], [], []],
    'editarInstruccion' => [['idInstruccion', 'idSolicitud', 'nombreTrabajador'], ['_controller' => 'App\\Controller\\GestionController::editarInstruccionAction'], [], [['variable', '/', '[^/]++', 'nombreTrabajador'], ['variable', '/', '[^/]++', 'idSolicitud'], ['variable', '/', '[^/]++', 'idInstruccion'], ['text', '/gestionMantenimiento/editarInstruccion']], [], []],
    'solicitudes' => [[], ['_controller' => 'App\\Controller\\GestionController::solicitudesAction'], [], [['text', '/gestionMantenimiento/solicitudes']], [], []],
    'solicitudesTrabajadorGestion' => [[], ['_controller' => 'App\\Controller\\GestionController::solicitudesTrabajadorGestionAction'], [], [['text', '/gestionMantenimiento/solicitudesTrabajadorGestion']], [], []],
    'partes' => [[], ['_controller' => 'App\\Controller\\GestionController::partesAction'], [], [['text', '/gestionMantenimiento/partes']], [], []],
    'seleccionaPartes' => [[], ['_controller' => 'App\\Controller\\GestionController::seleccionaPartesAction'], [], [['text', '/gestionMantenimiento/seleccionaPartes']], [], []],
    'seleccionaSolicitudes' => [[], ['_controller' => 'App\\Controller\\GestionController::seleccionaSolicitudesAction'], [], [['text', '/gestionMantenimiento/seleccionaSolicitudes']], [], []],
    'parte' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\GestionController::parteAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/parte']], [], []],
    'solicitud' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\GestionController::solicitudAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/solicitud']], [], []],
    'priorizarSolicitud' => [['id'], ['_controller' => 'App\\Controller\\GestionController::priorizarSolicitudAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/priorizarSolicitud']], [], []],
    'desPriorizarSolicitud' => [['id'], ['_controller' => 'App\\Controller\\GestionController::desPriorizarSolicitudAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/desPriorizarSolicitud']], [], []],
    'borrarAsignacion' => [['id', 'idTrabajador', 'idInstruccion'], ['_controller' => 'App\\Controller\\GestionController::borrarAsignacionAction'], [], [['variable', '/', '[^/]++', 'idInstruccion'], ['variable', '/', '[^/]++', 'idTrabajador'], ['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/borrarAsignacion']], [], []],
    'borrarParte' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\GestionController::borrarParteAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/gestionMantenimiento/borrarParte']], [], []],
    'asignarEspecialidad' => [['parteId'], ['_controller' => 'App\\Controller\\GestionController::asignarEspecialidadAction'], [], [['variable', '/', '[^/]++', 'parteId'], ['text', '/gestionMantenimiento/asignarEspecialidad']], [], []],
    'borrarEspecialidad' => [['especialidadId', 'parteId'], ['_controller' => 'App\\Controller\\GestionController::borrarEspecialidadAction'], [], [['variable', '/', '[^/]++', 'parteId'], ['variable', '/', '[^/]++', 'especialidadId'], ['text', '/gestionMantenimiento/borrarEspecialidad']], [], []],
    'completarInstruccion' => [['instruccionId'], ['_controller' => 'App\\Controller\\GestionController::completarInstruccionAction'], [], [['variable', '/', '[^/]++', 'instruccionId'], ['text', '/gestionMantenimiento/completarInstruccion']], [], []],
    'instruccionesCompletadas' => [[], ['_controller' => 'App\\Controller\\GestionController::instruccionesCompletadasAction'], [], [['text', '/gestionMantenimiento/instruccionesCompletadas']], [], []],
    'desactivarTrabajador' => [[], ['_controller' => 'App\\Controller\\GestionController::desactivarTrabajadorAction'], [], [['text', '/gestionMantenimiento/desactivarTrabajador']], [], []],
    'reactivarTrabajador' => [[], ['_controller' => 'App\\Controller\\GestionController::reactivarTrabajadorAction'], [], [['text', '/gestionMantenimiento/reactivarTrabajador']], [], []],
    'registro' => [[], ['_controller' => 'App\\Controller\\RegistroController::registroAction'], [], [['text', '/registroUsuarios/registro']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'basestat' => [[], ['_controller' => 'App\\Controller\\StatisticsController::basestatAction'], [], [['text', '/statistics/basestat']], [], []],
    'estadisticas' => [[], ['_controller' => 'App\\Controller\\StatisticsController::estadisticasAction'], [], [['text', '/statistics/estadisticas']], [], []],
    'conteoSolicitudes' => [['estado'], ['estado' => null, '_controller' => 'App\\Controller\\StatisticsController::conteoSolicitudesAction'], [], [['variable', '/', '[^/]++', 'estado'], ['text', '/statistics/conteoSolicitudes']], [], []],
    'conteoPrioritarias' => [[], ['_controller' => 'App\\Controller\\StatisticsController::conteoPrioritariasAction'], [], [['text', '/statistics/conteoPrioritarias']], [], []],
    'conteoSolicitudesTrabajador' => [[], ['_controller' => 'App\\Controller\\StatisticsController::conteoSolicitudesTrabajadorsAction'], [], [['text', '/statistics/conteoSolicitudesTrabajador/']], [], []],
    'conteoPartesEspecialidad' => [[], ['_controller' => 'App\\Controller\\StatisticsController::conteoPartesEspecialidadAction'], [], [['text', '/statistics/conteoPartesEspecialidad']], [], []],
    'mediaSolicitudes' => [[], ['_controller' => 'App\\Controller\\StatisticsController::mediaSolicitudesAction'], [], [['text', '/statistics/mediaSolicitudes']], [], []],
    'tiempoMedioSuspension' => [[], ['_controller' => 'App\\Controller\\StatisticsController::tiempoMedioSuspensionAction'], [], [['text', '/statistics/tiempoMedioSuspension']], [], []],
];
