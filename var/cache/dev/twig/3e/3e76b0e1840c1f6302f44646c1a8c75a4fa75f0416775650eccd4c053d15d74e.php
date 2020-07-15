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
class __TwigTemplate_89ab5a594d3964930928ba415becf8ab933d9bca4f53cce30bc07dcb5297a03c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontal/baseGestion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontal/baseGestion.html.twig"));

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
              <pre>                         </pre>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Solicitudes
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">Nueva</a>
                <a class=\"dropdown-item\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignadas");
            echo "\">Asignadas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pendientesDeAsignar");
            echo "\">Sin Asignar</a>
                <a class=\"dropdown-item\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("despachadas");
            echo "\">Despachadas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudes");
            echo "\">Todas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anuladas");
            echo "\">Anuladas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspendidas");
            echo "\">Suspendidas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prioritarias");
            echo "\">Prioritarias</a>
                <a class=\"dropdown-item\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaSolicitudes");
            echo "\">Por fecha</a>
                <a class=\"dropdown-item\" href=\"";
            // line 47
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
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaPartes");
            echo "\">Selección por fecha</a>
                <a class=\"dropdown-item\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partes");
            echo "\">Todos</a>

              </div>
            </li>

            <li class=\"nav-item\">
              <pre>    </pre>
            </li>

            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoTrabajador");
            echo "\">Nuevo Trabajador</a>
            </li>

            <li class=\"nav-item\">
              <pre>  </pre>
            </li>
            ";
            // line 78
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 79
                echo "            <li class=\"nav-item\">
              <pre></pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"";
                // line 83
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registro");
                echo "\">Nuevo Usuario</a>
            </li>
            <li class=\"nav-item\">
              <pre></pre>
            </li>
            ";
            }
            // line 89
            echo "
            <li class=\"nav-item\">
              <pre>  </pre>
            </li>

            <li class=\"nav-item\">
              <h2><a class=\"nav-link text-white\" href=\"";
            // line 95
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
            // line 109
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
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "username", [], "any", false, false, false, 121), "html", null, true);
            echo "</a>
            </li>


            <li class=\"nav-item\">
              <pre>                             </pre>
            </li>


            ";
        } else {
            // line 131
            echo "
            <ul class=\"navbar-nav ml-auto\">

              <li class=\"nav-item\">
                <a href=\"";
            // line 135
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn bg-danger\"
                  style=\"border-bottom-color:#F4717C;border-top-color:#DC434F;border-left-color:#DC434F;border-right-color:#DC434F;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F54E5C), color-stop(100%,#DC434F)); margin-top:15px;color:lightgrey;height: 25px;width:70px;FONT-SIZE: 11pt;padding:0px 10px\"
                  role=\"button\">Salir</a> </li>

              <li class=\"nav-item\">
              </li>

            </ul>
            ";
        }
        // line 144
        echo "          </ul>
        </div>
      </div>
      </div>
    </nav>
    <!--FIN MENÚ DE NAVEGACIÓN-->
    ";
        // line 150
        $this->displayBlock('contenido', $context, $blocks);
        // line 213
        echo "
    <!-- Footer -->
    <footer class=\"page-footer  bg-danger\">
      <div class=\"footer-copyright text-center py-3\">
        <img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/upm.png"), "html", null, true);
        echo "\" style=\"margin-bottom: 0\" height=\"100\" alt=\"\">
      </div>
    </footer>
    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/exportacion.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/genPDF.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/downloadCanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jspdf.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    ";
        // line 235
        $this->displayBlock('javascripts', $context, $blocks);
        // line 237
        echo "  </body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        echo "Mantenimiento ETSIDI";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 150
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 151
        echo "    <div class=\"container\">
      <div style=\"margin-top:50px\">

        ";
        // line 154
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 155
            echo "        <h1 class=\"mt-4 mb-3\">Mantenimiento ETSIDI
          <small>Trabajadores</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Consulta de solicitudes</li>
        </ol>
        ";
        }
        // line 162
        echo "
        ";
        // line 163
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 164
            echo "        <h1 class=\"mt-4 mb-3\">Mantenimiento ETSIDI
          <small>Gestión</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Mantenimiento</li>
        </ol>
        ";
        }
        // line 171
        echo "
        <!-- Content Row -->
        <div class=\"row\">
          <!-- Sidebar Column -->
          <div class=\"col-lg-3 mb-4 bg-light\">
            <div class=\"list-group \">
              ";
        // line 177
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 178
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajador");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes asignadas</a>
              <a href=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "user", [], "any", false, false, false, 179), "username", [], "any", false, false, false, 179)]), "html", null, true);
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Nueva Solicitud</a>
              <a href=\"";
            // line 180
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Salir</a>
              ";
        }
        // line 182
        echo "
              ";
        // line 183
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 184
            echo "              <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184), "username", [], "any", false, false, false, 184)]), "html", null, true);
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Nueva Solicitud</a>
              <a href=\"";
            // line 185
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudes");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Todas las solicitudes</a>
              <a href=\"";
            // line 186
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignadas");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes asignadas</a>
              <a href=\"";
            // line 187
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pendientesDeAsignar");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes sin asignar</a>
              <a href=\"";
            // line 188
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("despachadas");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes despachadas</a>
              <a href=\"";
            // line 189
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anuladas");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes anuladas</a>
              <a href=\"";
            // line 190
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspendidas");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes suspendidas</a>
              <a href=\"";
            // line 191
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prioritarias");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes prioritarias</a>
              <a href=\"";
            // line 192
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaSolicitudes");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes por fecha</a>
              <a href=\"";
            // line 193
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajadorGestion");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes por trabajador</a>
              <a href=\"";
            // line 194
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partes");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Todos los partes</a>
              <a href=\"";
            // line 195
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaPartes");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Partes por fecha</a>
              <a href=\"";
            // line 196
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoTrabajador");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Nuevo trabajador</a>
              <a href=\"";
            // line 197
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estadisticas");
            echo "\" class=\"list-group-item\" style=\" color: grey;\">Estadísticas</a>
              ";
        }
        // line 199
        echo "            </div>
          </div>
          <!-- Content Column -->
          <div class=\"col-lg-9 mb-4\">
            <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mantenimiento.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">
          </div>
        </div>

      </div>
      <!-- /.row -->
    </div>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 235
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 236
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  536 => 236,  526 => 235,  506 => 203,  500 => 199,  495 => 197,  491 => 196,  487 => 195,  483 => 194,  479 => 193,  475 => 192,  471 => 191,  467 => 190,  463 => 189,  459 => 188,  455 => 187,  451 => 186,  447 => 185,  442 => 184,  440 => 183,  437 => 182,  432 => 180,  428 => 179,  423 => 178,  421 => 177,  413 => 171,  404 => 164,  402 => 163,  399 => 162,  390 => 155,  388 => 154,  383 => 151,  373 => 150,  354 => 6,  342 => 237,  340 => 235,  334 => 232,  330 => 231,  326 => 230,  322 => 229,  318 => 228,  314 => 227,  310 => 226,  306 => 225,  302 => 224,  298 => 223,  289 => 217,  283 => 213,  281 => 150,  273 => 144,  261 => 135,  255 => 131,  242 => 121,  227 => 109,  210 => 95,  202 => 89,  193 => 83,  187 => 79,  185 => 78,  176 => 72,  163 => 62,  159 => 61,  142 => 47,  138 => 46,  134 => 45,  130 => 44,  126 => 43,  122 => 42,  118 => 41,  114 => 40,  110 => 39,  106 => 38,  96 => 30,  94 => 29,  83 => 21,  72 => 13,  67 => 11,  63 => 10,  58 => 8,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"UTF-8\" />
    <title>{% block titulo %}Mantenimiento ETSIDI{% endblock %}</title>
    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/modern-business.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/all.css')}}\" rel=\"stylesheet\">
    <!--load all styles -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
  </head>

  <body>
    <!--MENÚ DE NAVEGACIÓN-->

    <nav class=\"navbar navbar-dark bg-danger  fixed-top navbar-expand-lg fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\"><img src=\"{{asset('img/Logo.png')}}\" height=\"60\" alt=\"\"></a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" style=\"color:white\" ; data-target=\"#collapsibleNavbar\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
          <ul class=\"navbar-nav ml-auto\">

            {% if is_granted('ROLE_ADMIN') %}
            <li class=\"nav-item\">
              <pre>                         </pre>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Solicitudes
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"{{ path('nuevaSolicitud',{'email': app.user.username}) }}\">Nueva</a>
                <a class=\"dropdown-item\" href=\"{{ path('asignadas') }}\">Asignadas</a>
                <a class=\"dropdown-item\" href=\"{{ path('pendientesDeAsignar') }}\">Sin Asignar</a>
                <a class=\"dropdown-item\" href=\"{{ path('despachadas') }}\">Despachadas</a>
                <a class=\"dropdown-item\" href=\"{{ path('solicitudes') }}\">Todas</a>
                <a class=\"dropdown-item\" href=\"{{ path('anuladas') }}\">Anuladas</a>
                <a class=\"dropdown-item\" href=\"{{ path('suspendidas') }}\">Suspendidas</a>
                <a class=\"dropdown-item\" href=\"{{ path('prioritarias') }}\">Prioritarias</a>
                <a class=\"dropdown-item\" href=\"{{ path('seleccionaSolicitudes') }}\">Por fecha</a>
                <a class=\"dropdown-item\" href=\"{{ path('solicitudesTrabajadorGestion') }}\">Por trabajador</a>
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
                <a class=\"dropdown-item\" href=\"{{ path('seleccionaPartes') }}\">Selección por fecha</a>
                <a class=\"dropdown-item\" href=\"{{ path('partes') }}\">Todos</a>

              </div>
            </li>

            <li class=\"nav-item\">
              <pre>    </pre>
            </li>

            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"{{ path('nuevoTrabajador') }}\">Nuevo Trabajador</a>
            </li>

            <li class=\"nav-item\">
              <pre>  </pre>
            </li>
            {% if is_granted('ROLE_SUPER_ADMIN')%}
            <li class=\"nav-item\">
              <pre></pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"{{ path('registro') }}\">Nuevo Usuario</a>
            </li>
            <li class=\"nav-item\">
              <pre></pre>
            </li>
            {% endif %}

            <li class=\"nav-item\">
              <pre>  </pre>
            </li>

            <li class=\"nav-item\">
              <h2><a class=\"nav-link text-white\" href=\"{{ path('estadisticas') }}\"><i class=\"fas fa-chart-bar\"></i></a></h2>
            </li>

            <li class=\"nav-item\">
              <pre>  </pre>
            </li>


            <li class=\"nav-item\">
              <pre>    </pre>
            </li>


            <li class=\"nav-item\">
              <a href=\"{{path('app_logout')}}\" class=\"btn bg-danger\"
                style=\"border-bottom-color:#F4717C;border-top-color:#DC434F;border-left-color:#DC434F;border-right-color:#DC434F;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F54E5C), color-stop(100%,#DC434F)); margin-top:15px;color:lightgrey;height: 25px;width:70px;FONT-SIZE: 11pt;padding:0px 10px\"
                role=\"button\">Salir</a>
            </li>


            <li class=\"nav-item\">
              <pre>      </pre>
            </li>


            <li class=\"nav-item\">
              <a class=\"nav-link text-warning\" href=\"\">{{app.user.username}}</a>
            </li>


            <li class=\"nav-item\">
              <pre>                             </pre>
            </li>


            {% else %}

            <ul class=\"navbar-nav ml-auto\">

              <li class=\"nav-item\">
                <a href=\"{{path('app_logout')}}\" class=\"btn bg-danger\"
                  style=\"border-bottom-color:#F4717C;border-top-color:#DC434F;border-left-color:#DC434F;border-right-color:#DC434F;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F54E5C), color-stop(100%,#DC434F)); margin-top:15px;color:lightgrey;height: 25px;width:70px;FONT-SIZE: 11pt;padding:0px 10px\"
                  role=\"button\">Salir</a> </li>

              <li class=\"nav-item\">
              </li>

            </ul>
            {% endif %}
          </ul>
        </div>
      </div>
      </div>
    </nav>
    <!--FIN MENÚ DE NAVEGACIÓN-->
    {% block contenido %}
    <div class=\"container\">
      <div style=\"margin-top:50px\">

        {% if is_granted('ROLE_USER') %}
        <h1 class=\"mt-4 mb-3\">Mantenimiento ETSIDI
          <small>Trabajadores</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Consulta de solicitudes</li>
        </ol>
        {% endif %}

        {% if is_granted('ROLE_ADMIN') %}
        <h1 class=\"mt-4 mb-3\">Mantenimiento ETSIDI
          <small>Gestión</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Mantenimiento</li>
        </ol>
        {% endif %}

        <!-- Content Row -->
        <div class=\"row\">
          <!-- Sidebar Column -->
          <div class=\"col-lg-3 mb-4 bg-light\">
            <div class=\"list-group \">
              {% if is_granted('ROLE_USER') %}
              <a href=\"{{ path('solicitudesTrabajador') }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes asignadas</a>
              <a href=\"{{ path('nuevaSolicitud',{'email':app.user.username}) }}\" class=\"list-group-item\" style=\" color: grey;\">Nueva Solicitud</a>
              <a href=\"{{path('app_logout')}}\" class=\"list-group-item\" style=\" color: grey;\">Salir</a>
              {% endif %}

              {% if is_granted('ROLE_ADMIN') %}
              <a href=\"{{ path('nuevaSolicitud',{'email':app.user.username}) }}\" class=\"list-group-item\" style=\" color: grey;\">Nueva Solicitud</a>
              <a href=\"{{ path('solicitudes') }}\" class=\"list-group-item\" style=\" color: grey;\">Todas las solicitudes</a>
              <a href=\"{{ path('asignadas') }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes asignadas</a>
              <a href=\"{{ path('pendientesDeAsignar') }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes sin asignar</a>
              <a href=\"{{ path('despachadas') }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes despachadas</a>
              <a href=\"{{ path('anuladas') }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes anuladas</a>
              <a href=\"{{ path('suspendidas') }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes suspendidas</a>
              <a href=\"{{ path('prioritarias') }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes prioritarias</a>
              <a href=\"{{ path('seleccionaSolicitudes') }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes por fecha</a>
              <a href=\"{{ path('solicitudesTrabajadorGestion') }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes por trabajador</a>
              <a href=\"{{ path('partes') }}\" class=\"list-group-item\" style=\" color: grey;\">Todos los partes</a>
              <a href=\"{{ path('seleccionaPartes') }}\" class=\"list-group-item\" style=\" color: grey;\">Partes por fecha</a>
              <a href=\"{{ path('nuevoTrabajador') }}\" class=\"list-group-item\" style=\" color: grey;\">Nuevo trabajador</a>
              <a href=\"{{ path('estadisticas') }}\" class=\"list-group-item\" style=\" color: grey;\">Estadísticas</a>
              {% endif %}
            </div>
          </div>
          <!-- Content Column -->
          <div class=\"col-lg-9 mb-4\">
            <img src=\"{{asset('img/mantenimiento.jpg')}}\" class=\"img-fluid\" alt=\"Responsive image\">
          </div>
        </div>

      </div>
      <!-- /.row -->
    </div>


    {% endblock %}

    <!-- Footer -->
    <footer class=\"page-footer  bg-danger\">
      <div class=\"footer-copyright text-center py-3\">
        <img src=\"{{asset('img/upm.png')}}\" style=\"margin-bottom: 0\" height=\"100\" alt=\"\">
      </div>
    </footer>
    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src=\"{{asset('js/exportacion.js')}}\"></script>
    <script src=\"{{asset('js/genPDF.js')}}\"></script>
    <script src=\"{{asset('js/downloadCanvas.js')}}\"></script>
    <script src=\"{{asset('js/html2canvas.js')}}\"></script>
    <script src=\"{{asset('js/jquery.min.js')}}\"></script>
    <script src=\"{{asset('js/jspdf.min.js')}}\"></script>
    <link href=\"{{ asset('js/bootstrap-datepicker.min.js')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('js/bootstrap-datepicker.es.min.js')}}\" rel=\"stylesheet\">
    <script src=\"{{ asset('vendor/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    {% block javascripts %}
    {% endblock %}
  </body>

</html>", "frontal/baseGestion.html.twig", "C:\\symfony4\\SolMan\\templates\\frontal\\baseGestion.html.twig");
    }
}
