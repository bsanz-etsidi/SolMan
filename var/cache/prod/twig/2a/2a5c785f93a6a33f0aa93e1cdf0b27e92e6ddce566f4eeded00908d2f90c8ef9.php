<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* frontal/baseGestion.html.twig */
class __TwigTemplate_a18e8f4576b3fbc8a2409ff38c85b7b5ec436ec9f1db9e3221bfe276a8e34d8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'titulo' => [$this, 'block_titulo'],
            'contenido' => [$this, 'block_contenido'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--load all styles -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  </head>

  <body>
    <!--MENÚ DE NAVEGACIÓN-->

    <nav class=\"navbar navbar-dark bg-danger  fixed-top navbar-expand-lg fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo.png"), "html", null, true);
        echo "\" height=\"60\" alt=\"\"></a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" style=\"color:white\" ; data-target=\"#collapsibleNavbar\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
          <ul class=\"navbar-nav ml-auto\">

            ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "            <li class=\"nav-item\">
              <pre>               </pre>
            </li>
            <li class=\"nav-item\">
              <h5><a class=\"nav-link text-white\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("base");
            echo "\"><small><i class=\"fas fa-home\"></i></small></a></h5>
            </li>
            <li class=\"nav-item\">
              <pre>  </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instruccionesCompletadas");
            echo "\">Trabajos<br />completados</a>
            </li>
            <li class=\"nav-item\">
              <pre>  </pre>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Solicitudes
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 50), "username", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">Nueva</a>
                <a class=\"dropdown-item\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignadas");
            echo "\">Asignadas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pendientesDeAsignar");
            echo "\">Sin Asignar</a>
                <a class=\"dropdown-item\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("despachadas");
            echo "\">Despachadas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudes");
            echo "\">Todas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anuladas");
            echo "\">Anuladas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspendidas");
            echo "\">Suspendidas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prioritarias");
            echo "\">Prioritarias</a>
                <a class=\"dropdown-item\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaSolicitudes");
            echo "\">Por fecha</a>
                <a class=\"dropdown-item\" href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajadorGestion");
            echo "\">Por trabajador</a>
              </div>
            </li>

            <li class=\"nav-item\">
              <pre>   </pre>
            </li>

            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Partes
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"\"></a>
                <a class=\"dropdown-item\" href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaPartes");
            echo "\">Selección por fecha</a>
                <a class=\"dropdown-item\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partes");
            echo "\">Todos</a>
              </div>
            </li>

            <li class=\"nav-item\">
              <pre>    </pre>
            </li>

            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Trabajador
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoTrabajador");
            echo "\">Nuevo Trabajador</a>
                <a class=\"dropdown-item\" href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desactivarTrabajador");
            echo "\">Desactivar Trabajador</a>
                <a class=\"dropdown-item\" href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reactivarTrabajador");
            echo "\">Reactivar Trabajador</a>
              </div>
            </li>

            <li class=\"nav-item\">
              <pre>  </pre>
            </li>
            ";
            // line 96
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 97
                echo "            <li class=\"nav-item\">
              <pre></pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"";
                // line 101
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registro");
                echo "\">Nuevo Usuario</a>
            </li>
            <li class=\"nav-item\">
              <pre></pre>
            </li>
            ";
            }
            // line 107
            echo "
            <li class=\"nav-item\">
              <pre>  </pre>
            </li>

            <li class=\"nav-item\">
              <h2><a class=\"nav-link text-white\" href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estadisticas");
            echo "\"><i class=\"fas fa-chart-bar\"></i></a></h2>
            </li>

            <li class=\"nav-item\">
              <pre>  </pre>
            </li>


            <li class=\"nav-item\">
              <pre>    </pre>
            </li>


            <li class=\"nav-item\">
              <a href=\"";
            // line 127
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn bg-danger\"
                style=\"border-bottom-color:#F4717C;border-top-color:#DC434F;border-left-color:#DC434F;border-right-color:#DC434F;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F54E5C), color-stop(100%,#DC434F)); margin-top:15px;color:lightgrey;height: 25px;width:70px;FONT-SIZE: 11pt;padding:0px 10px\"
                role=\"button\">Salir</a>
            </li>


            <li class=\"nav-item\">
              <pre>      </pre>
            </li>


            <li class=\"nav-item\">
              <a class=\"nav-link text-warning\" href=\"\">";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 139), "username", [], "any", false, false, false, 139), "html", null, true);
            echo "</a>
            </li>


            <li class=\"nav-item\">
              <pre>                             </pre>
            </li>


            ";
        } else {
            // line 149
            echo "
            <ul class=\"navbar-nav ml-auto\">

              <li class=\"nav-item\">
                <a href=\"";
            // line 153
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn bg-danger\"
                  style=\"border-bottom-color:#F4717C;border-top-color:#DC434F;border-left-color:#DC434F;border-right-color:#DC434F;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F54E5C), color-stop(100%,#DC434F)); margin-top:15px;color:lightgrey;height: 25px;width:70px;FONT-SIZE: 11pt;padding:0px 10px\"
                  role=\"button\">Salir</a> </li>

              <li class=\"nav-item\">
              </li>

            </ul>
            ";
        }
        // line 162
        echo "          </ul>
        </div>
      </div>
      </div>
    </nav>
    <!--FIN MENÚ DE NAVEGACIÓN-->
    ";
        // line 168
        $this->displayBlock('contenido', $context, $blocks);
        // line 235
        echo "
    <!-- Footer -->
    <footer class=\"page-footer  bg-danger\">
      <div class=\"footer-copyright text-center py-3\">
        <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/upm.png"), "html", null, true);
        echo "\" style=\"margin-bottom: 0\" height=\"100\" alt=\"\">
      </div>
    </footer>
    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/exportacion.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/genPDF.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/downloadCanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jspdf.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    ";
        // line 257
        $this->displayBlock('javascripts', $context, $blocks);
        // line 259
        echo "  </body>

</html>";
    }

    // line 6
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mantenimiento ETSIDI";
    }

    // line 168
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "    <div class=\"container\">
      <div style=\"margin-top:50px\">

        ";
        // line 172
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 173
            echo "        <h1 class=\"mt-4 mb-3\">Mantenimiento ETSIDI
          <small>Trabajadores</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Consulta de solicitudes</li>
        </ol>
        ";
        }
        // line 180
        echo "
        ";
        // line 181
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 182
            echo "        <h1 class=\"mt-4 mb-3\">Mantenimiento ETSIDI
          <small>Gestión</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Mantenimiento</li>
        </ol>
        ";
        }
        // line 189
        echo "
        <!-- Content Row -->
        <div class=\"row\">
          <!-- Sidebar Column -->
          <div class=\"col-lg-3 mb-4 bg-light\">
            <div class=\"list-group \">
              ";
        // line 195
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 196
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajador");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes asignadas</a>
              <a href=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 197), "username", [], "any", false, false, false, 197)]), "html", null, true);
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Nueva Solicitud</a>
              <a href=\"";
            // line 198
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Salir</a>
              ";
        }
        // line 200
        echo "
              ";
        // line 201
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 202
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instruccionesCompletadas");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Trabajos completados</a>
              <a href=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 203), "username", [], "any", false, false, false, 203)]), "html", null, true);
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Nueva Solicitud</a>
              <a href=\"";
            // line 204
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudes");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Todas las solicitudes</a>
              <a href=\"";
            // line 205
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignadas");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes asignadas</a>
              <a href=\"";
            // line 206
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pendientesDeAsignar");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes sin asignar</a>
              <a href=\"";
            // line 207
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("despachadas");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes despachadas</a>
              <a href=\"";
            // line 208
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anuladas");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes anuladas</a>
              <a href=\"";
            // line 209
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspendidas");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes suspendidas</a>
              <a href=\"";
            // line 210
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prioritarias");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes prioritarias</a>
              <a href=\"";
            // line 211
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaSolicitudes");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes por fecha</a>
              <a href=\"";
            // line 212
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajadorGestion");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes por trabajador</a>
              <a href=\"";
            // line 213
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partes");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Todos los partes</a>
              <a href=\"";
            // line 214
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaPartes");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Partes por fecha</a>
              <a href=\"";
            // line 215
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoTrabajador");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Nuevo trabajador</a>
              <a href=\"";
            // line 216
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desactivarTrabajador");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Desactivar Trabajador</a>
              <a href=\"";
            // line 217
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reactivarTrabajador");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Reactivar Trabajador</a>
              <a href=\"";
            // line 218
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estadisticas");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Estadísticas</a>
              ";
        }
        // line 220
        echo "            </div>
          </div>
          <!-- Content Column -->
          <div class=\"col-lg-9 mb-4\">
            <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mantenimiento.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">
            <img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/upm.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">
          </div>
        </div>

      </div>
      <!-- /.row -->
    </div>


    ";
    }

    // line 257
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 258
        echo "    ";
    }

    public function getTemplateName()
    {
        return "frontal/baseGestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 258,  536 => 257,  522 => 225,  518 => 224,  512 => 220,  507 => 218,  503 => 217,  499 => 216,  495 => 215,  491 => 214,  487 => 213,  483 => 212,  479 => 211,  475 => 210,  471 => 209,  467 => 208,  463 => 207,  459 => 206,  455 => 205,  451 => 204,  447 => 203,  442 => 202,  440 => 201,  437 => 200,  432 => 198,  428 => 197,  423 => 196,  421 => 195,  413 => 189,  404 => 182,  402 => 181,  399 => 180,  390 => 173,  388 => 172,  383 => 169,  379 => 168,  372 => 6,  366 => 259,  364 => 257,  358 => 254,  354 => 253,  350 => 252,  346 => 251,  342 => 250,  338 => 249,  334 => 248,  330 => 247,  326 => 246,  322 => 245,  313 => 239,  307 => 235,  305 => 168,  297 => 162,  285 => 153,  279 => 149,  266 => 139,  251 => 127,  234 => 113,  226 => 107,  217 => 101,  211 => 97,  209 => 96,  199 => 89,  195 => 88,  191 => 87,  175 => 74,  171 => 73,  154 => 59,  150 => 58,  146 => 57,  142 => 56,  138 => 55,  134 => 54,  130 => 53,  126 => 52,  122 => 51,  118 => 50,  105 => 40,  96 => 34,  90 => 30,  88 => 29,  77 => 21,  66 => 13,  61 => 11,  57 => 10,  52 => 8,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontal/baseGestion.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\frontal\\baseGestion.html.twig");
    }
}
