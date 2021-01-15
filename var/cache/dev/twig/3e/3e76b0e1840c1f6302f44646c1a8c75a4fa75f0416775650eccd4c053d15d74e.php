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
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google-fonts.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google-fonts2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google-fonts3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google-fonts4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!--load all styles -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  </head>

  <body>
    <!--MENÚ DE NAVEGACIÓN-->

    <nav class=\"navbar navbar-dark bg-danger  fixed-top navbar-expand-lg fixed-top\">
      <div class=\"container\" style=\"font-family: Saira Extra Condensed\">
        <a class=\"navbar-brand\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_etsidi_mini_negro.png"), "html", null, true);
        echo "\" height=\"60\" alt=\"\"></a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" style=\"color:white\" ; data-target=\"#collapsibleNavbar\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
          <ul class=\"navbar-nav ml-auto\">
            ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 35
            echo "            <li class=\"nav-item\">
              <pre>         </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajador");
            echo "\" style=\"font-family: Saira Extra Condensed;\">SOLICITUDES<br />ASIGNADAS</a>
            </li>
            ";
        }
        // line 42
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 43
            echo "            <li class=\"nav-item\">
              <pre>           </pre>
            </li>
            <li class=\"nav-item\">
              <h5><a class=\"nav-link text-white\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("portadaUsuario", ["emailcrypt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "emailcrypt", [], "any", false, false, false, 47), "email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "username", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\"><small><i class=\"fas fa-home\"></i></small></a></h5>
            </li>
            <li class=\"nav-item\">
              <pre>      </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instruccionesCompletadas");
            echo "\" style=\"font-family: Saira Extra Condensed;\">TRABAJOS<br />COMPLETADOS</a>
            </li>
            <li class=\"nav-item\">
              <pre>    </pre>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"font-family: Saira Extra Condensed;\">
                SOLICITUDES
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["emailcrypt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "emailcrypt", [], "any", false, false, false, 63), "email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "username", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" style=\"font-family: Saira Extra Condensed;\">NUEVA</a>
                <a class=\"dropdown-item\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignadas");
            echo "\" style=\"font-family: Saira Extra Condensed;\">ASIGNADAS</a>
                <a class=\"dropdown-item\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pendientesDeAsignar");
            echo "\" style=\"font-family: Saira Extra Condensed;\">SIN ASIGNAR</a>
                <a class=\"dropdown-item\" href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("despachadas");
            echo "\" style=\"font-family: Saira Extra Condensed;\">DESPACHADAS</a>
                <a class=\"dropdown-item\" href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudes");
            echo "\" style=\"font-family: Saira Extra Condensed;\">TODAS</a>
                <a class=\"dropdown-item\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anuladas");
            echo "\" style=\"font-family: Saira Extra Condensed;\">ANULADAS</a>
                <a class=\"dropdown-item\" href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspendidas");
            echo "\" style=\"font-family: Saira Extra Condensed;\">SUSPENDIDAS</a>
                <a class=\"dropdown-item\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prioritarias");
            echo "\" style=\"font-family: Saira Extra Condensed;\">PRIORITARIAS</a>
                <a class=\"dropdown-item\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaSolicitudes");
            echo "\" style=\"font-family: Saira Extra Condensed;\">POR FECHA</a>
                <a class=\"dropdown-item\" href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajadorGestion");
            echo "\" style=\"font-family: Saira Extra Condensed;\">POR TRABAJADOR</a>
                <a class=\"dropdown-item\" href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesUnidadDestino");
            echo "\" style=\"font-family: Saira Extra Condensed;\">POR DESTINO SOLICITANTE</a>
              </div>
            </li>

            <li class=\"nav-item\">
              <pre>     </pre>
            </li>

            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"font-family: Saira Extra Condensed;\">
                PARTES
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"\"></a>
                <a class=\"dropdown-item\" href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaPartes");
            echo "\" style=\"font-family: Saira Extra Condensed;\">SELECCIÓN POR FECHA</a>
                <a class=\"dropdown-item\" href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partes");
            echo "\" style=\"font-family: Saira Extra Condensed;\">TODOS</a>
              </div>
            </li>

            <li class=\"nav-item\">
              <pre>     </pre>
            </li>

            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"font-family: Saira Extra Condensed;\">
                TRABAJADOR
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoTrabajador");
            echo "\" style=\"font-family: Saira Extra Condensed;\">NUEVO TRABAJADOR</a>
                <a class=\"dropdown-item\" href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desactivarTrabajador");
            echo "\" style=\"font-family: Saira Extra Condensed;\">DESACTIVAR TRABAJADOR</a>
                <a class=\"dropdown-item\" href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reactivarTrabajador");
            echo "\" style=\"font-family: Saira Extra Condensed;\">REACTIVAR TRABAJADOR</a>
              </div>
            </li>

            <li class=\"nav-item\">
              <pre>   </pre>
            </li>
            ";
            // line 110
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 111
                echo "            <li class=\"nav-item\">
              <pre>  </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"";
                // line 115
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registro");
                echo "\" style=\"font-family: Saira Extra Condensed;\">NUEVO USUARIO</a>
            </li>
            <li class=\"nav-item\">
              <pre>  </pre>
            </li>
            ";
            }
            // line 121
            echo "
            <li class=\"nav-item\">
              <pre>    </pre>
            </li>

            <li class=\"nav-item\">
              <h2><a class=\"nav-link text-white\" href=\"";
            // line 127
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estadisticas");
            echo "\"><i class=\"fas fa-chart-bar\"></i></a></h2>
            </li>

            <li class=\"nav-item\">
              <pre>   </pre>
            </li>


            <li class=\"nav-item\">
              <pre>    </pre>
            </li>


            <li class=\"nav-item\">
              <a href=\"";
            // line 141
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn bg-danger\"
                style=\"border-bottom-color:#F4717C;border-top-color:#DC434F;border-left-color:#DC434F;border-right-color:#DC434F;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F54E5C), color-stop(100%,#DC434F)); margin-top:15px;color:white;height: 25px;width:70px;font-family: Saira Extra Condensed;FONT-SIZE: 11pt;padding:0px 10px\"
                role=\"button\">SALIR</a>
            </li>


            <li class=\"nav-item\">
              <pre>       </pre>
            </li>


            <li class=\"nav-item\">
              <a class=\"nav-link text-warning\" href=\"\">";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "username", [], "any", false, false, false, 153), "html", null, true);
            echo "</a>
            </li>


            <li class=\"nav-item\">
              <pre>                            </pre>
            </li>


            ";
        } else {
            // line 163
            echo "
            <ul class=\"navbar-nav ml-auto\">

              <li class=\"nav-item\">
                <a href=\"";
            // line 167
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn bg-danger\"
                  style=\"border-bottom-color:#F4717C;border-top-color:#DC434F;border-left-color:#DC434F;border-right-color:#DC434F;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F54E5C), color-stop(100%,#DC434F)); margin-top:15px;color:white;height: 25px;width:70px;font-family: Saira Extra Condensed;FONT-SIZE: 11pt;padding:0px 10px\"
                  role=\"button\">SALIR</a> </li>

              <li class=\"nav-item\">
              </li>

            </ul>
            ";
        }
        // line 176
        echo "          </ul>
        </div>
      </div>
      </div>
    </nav>
    <!--FIN MENÚ DE NAVEGACIÓN-->
    ";
        // line 182
        $this->displayBlock('contenido', $context, $blocks);
        // line 250
        echo "
    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/exportacion.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/genPDF.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/downloadCanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jspdf.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    ";
        // line 264
        $this->displayBlock('javascripts', $context, $blocks);
        // line 266
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

    // line 182
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 183
        echo "    <div class=\"container\" style=\"font-family: Saira Extra Condensed\">
      <div style=\"margin-top:50px\">

        ";
        // line 186
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 187
            echo "        <h1 class=\"mt-4 mb-3\" style=\"font-family: Saira Extra Condensed;\">Mantenimiento ETSIDI
          <small>Trabajadores</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\" style=\"font-family: Saira Extra Condensed;\">Consulta de solicitudes</li>
        </ol>
        ";
        }
        // line 194
        echo "
        ";
        // line 195
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 196
            echo "        <h1 class=\"mt-4 mb-3\" style=\"font-family: Saira Extra Condensed;\">Mantenimiento ETSIDI
          <small>Gestión</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\" style=\"font-family: Saira Extra Condensed;\">Mantenimiento</li>
        </ol>
        ";
        }
        // line 203
        echo "
        <!-- Content Row -->
        <div class=\"row\">
          <!-- Sidebar Column -->
          <div class=\"col-lg-3 mb-4\" style=\"background-color: #EBECEE\">
            <div class=\"list-group \">
              ";
        // line 209
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 210
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajador");
            echo "\" class=\"list-group-item\" style=\" color: grey;\" style=\"font-family: Saira Extra Condensed;\">Solicitudes asignadas</a>
              <a href=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["emailcrypt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "user", [], "any", false, false, false, 211), "emailcrypt", [], "any", false, false, false, 211), "email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "user", [], "any", false, false, false, 211), "username", [], "any", false, false, false, 211)]), "html", null, true);
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Nueva Solicitud</a>
              <a href=\"";
            // line 212
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Salir</a>
              ";
        }
        // line 214
        echo "
              ";
        // line 215
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 216
            echo "              <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instruccionesCompletadas");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Trabajos completados</a>
              <a href=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["emailcrypt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "user", [], "any", false, false, false, 217), "emailcrypt", [], "any", false, false, false, 217), "email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "user", [], "any", false, false, false, 217), "username", [], "any", false, false, false, 217)]), "html", null, true);
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Nueva Solicitud</a>
              <a href=\"";
            // line 218
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudes");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Todas las solicitudes</a>
              <a href=\"";
            // line 219
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignadas");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes asignadas</a>
              <a href=\"";
            // line 220
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pendientesDeAsignar");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes sin asignar</a>
              <a href=\"";
            // line 221
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("despachadas");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes despachadas</a>
              <a href=\"";
            // line 222
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anuladas");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes anuladas</a>
              <a href=\"";
            // line 223
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspendidas");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes suspendidas</a>
              <a href=\"";
            // line 224
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prioritarias");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes prioritarias</a>
              <a href=\"";
            // line 225
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaSolicitudes");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes por fecha</a>
              <a href=\"";
            // line 226
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajadorGestion");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes por trabajador</a>
              <a href=\"";
            // line 227
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesUnidadDestino");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Por destino solicitante</a>
              <a href=\"";
            // line 228
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partes");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Todos los partes</a>
              <a href=\"";
            // line 229
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaPartes");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Partes por fecha</a>
              <a href=\"";
            // line 230
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoTrabajador");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Nuevo trabajador</a>
              <a href=\"";
            // line 231
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desactivarTrabajador");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Desactivar Trabajador</a>
              <a href=\"";
            // line 232
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reactivarTrabajador");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Reactivar Trabajador</a>
              <a href=\"";
            // line 233
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estadisticas");
            echo "\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Estadísticas</a>
              ";
        }
        // line 235
        echo "            </div>
          </div>
          <!-- Content Column -->
          <div class=\"col-lg-9 mb-4\">
            <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mantenimiento.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">
            <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/upm.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">
            <div class=\"col text-center\">
              <h8 style=\"font-family: Helvetica; font-size:13px\"><br /><br /><br /><br /><br />Universidad Politécnica de Madrid ©2020</h8>
            </div>
          </div>
        </div>
      </div>
    </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 264
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 265
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
        return array (  614 => 265,  604 => 264,  584 => 240,  580 => 239,  574 => 235,  569 => 233,  565 => 232,  561 => 231,  557 => 230,  553 => 229,  549 => 228,  545 => 227,  541 => 226,  537 => 225,  533 => 224,  529 => 223,  525 => 222,  521 => 221,  517 => 220,  513 => 219,  509 => 218,  505 => 217,  500 => 216,  498 => 215,  495 => 214,  490 => 212,  486 => 211,  481 => 210,  479 => 209,  471 => 203,  462 => 196,  460 => 195,  457 => 194,  448 => 187,  446 => 186,  441 => 183,  431 => 182,  412 => 6,  400 => 266,  398 => 264,  392 => 261,  388 => 260,  384 => 259,  380 => 258,  376 => 257,  372 => 256,  368 => 255,  364 => 254,  360 => 253,  356 => 252,  352 => 250,  350 => 182,  342 => 176,  330 => 167,  324 => 163,  311 => 153,  296 => 141,  279 => 127,  271 => 121,  262 => 115,  256 => 111,  254 => 110,  244 => 103,  240 => 102,  236 => 101,  220 => 88,  216 => 87,  199 => 73,  195 => 72,  191 => 71,  187 => 70,  183 => 69,  179 => 68,  175 => 67,  171 => 66,  167 => 65,  163 => 64,  159 => 63,  146 => 53,  137 => 47,  131 => 43,  128 => 42,  122 => 39,  116 => 35,  114 => 34,  104 => 27,  93 => 19,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  58 => 8,  53 => 6,  46 => 1,);
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
    <link href=\"{{ asset('css/google-fonts.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/google-fonts2.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/google-fonts3.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/google-fonts4.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">

    <!--load all styles -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
  </head>

  <body>
    <!--MENÚ DE NAVEGACIÓN-->

    <nav class=\"navbar navbar-dark bg-danger  fixed-top navbar-expand-lg fixed-top\">
      <div class=\"container\" style=\"font-family: Saira Extra Condensed\">
        <a class=\"navbar-brand\"><img src=\"{{asset('img/logo_etsidi_mini_negro.png')}}\" height=\"60\" alt=\"\"></a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" style=\"color:white\" ; data-target=\"#collapsibleNavbar\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
          <ul class=\"navbar-nav ml-auto\">
            {% if is_granted('ROLE_USER') %}
            <li class=\"nav-item\">
              <pre>         </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" <a href=\"{{path('solicitudesTrabajador')}}\" style=\"font-family: Saira Extra Condensed;\">SOLICITUDES<br />ASIGNADAS</a>
            </li>
            {% endif %}
            {% if is_granted('ROLE_ADMIN') %}
            <li class=\"nav-item\">
              <pre>           </pre>
            </li>
            <li class=\"nav-item\">
              <h5><a class=\"nav-link text-white\" href=\"{{ path('portadaUsuario',{'emailcrypt': app.user.emailcrypt, 'email': app.user.username}) }}\"><small><i class=\"fas fa-home\"></i></small></a></h5>
            </li>
            <li class=\"nav-item\">
              <pre>      </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"{{ path('instruccionesCompletadas') }}\" style=\"font-family: Saira Extra Condensed;\">TRABAJOS<br />COMPLETADOS</a>
            </li>
            <li class=\"nav-item\">
              <pre>    </pre>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"font-family: Saira Extra Condensed;\">
                SOLICITUDES
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"{{ path('nuevaSolicitud',{'emailcrypt': app.user.emailcrypt, 'email': app.user.username}) }}\" style=\"font-family: Saira Extra Condensed;\">NUEVA</a>
                <a class=\"dropdown-item\" href=\"{{ path('asignadas') }}\" style=\"font-family: Saira Extra Condensed;\">ASIGNADAS</a>
                <a class=\"dropdown-item\" href=\"{{ path('pendientesDeAsignar') }}\" style=\"font-family: Saira Extra Condensed;\">SIN ASIGNAR</a>
                <a class=\"dropdown-item\" href=\"{{ path('despachadas') }}\" style=\"font-family: Saira Extra Condensed;\">DESPACHADAS</a>
                <a class=\"dropdown-item\" href=\"{{ path('solicitudes') }}\" style=\"font-family: Saira Extra Condensed;\">TODAS</a>
                <a class=\"dropdown-item\" href=\"{{ path('anuladas') }}\" style=\"font-family: Saira Extra Condensed;\">ANULADAS</a>
                <a class=\"dropdown-item\" href=\"{{ path('suspendidas') }}\" style=\"font-family: Saira Extra Condensed;\">SUSPENDIDAS</a>
                <a class=\"dropdown-item\" href=\"{{ path('prioritarias') }}\" style=\"font-family: Saira Extra Condensed;\">PRIORITARIAS</a>
                <a class=\"dropdown-item\" href=\"{{ path('seleccionaSolicitudes') }}\" style=\"font-family: Saira Extra Condensed;\">POR FECHA</a>
                <a class=\"dropdown-item\" href=\"{{ path('solicitudesTrabajadorGestion') }}\" style=\"font-family: Saira Extra Condensed;\">POR TRABAJADOR</a>
                <a class=\"dropdown-item\" href=\"{{ path('solicitudesUnidadDestino') }}\" style=\"font-family: Saira Extra Condensed;\">POR DESTINO SOLICITANTE</a>
              </div>
            </li>

            <li class=\"nav-item\">
              <pre>     </pre>
            </li>

            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"font-family: Saira Extra Condensed;\">
                PARTES
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"\"></a>
                <a class=\"dropdown-item\" href=\"{{ path('seleccionaPartes') }}\" style=\"font-family: Saira Extra Condensed;\">SELECCIÓN POR FECHA</a>
                <a class=\"dropdown-item\" href=\"{{ path('partes') }}\" style=\"font-family: Saira Extra Condensed;\">TODOS</a>
              </div>
            </li>

            <li class=\"nav-item\">
              <pre>     </pre>
            </li>

            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"font-family: Saira Extra Condensed;\">
                TRABAJADOR
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"{{ path('nuevoTrabajador') }}\" style=\"font-family: Saira Extra Condensed;\">NUEVO TRABAJADOR</a>
                <a class=\"dropdown-item\" href=\"{{ path('desactivarTrabajador') }}\" style=\"font-family: Saira Extra Condensed;\">DESACTIVAR TRABAJADOR</a>
                <a class=\"dropdown-item\" href=\"{{ path('reactivarTrabajador') }}\" style=\"font-family: Saira Extra Condensed;\">REACTIVAR TRABAJADOR</a>
              </div>
            </li>

            <li class=\"nav-item\">
              <pre>   </pre>
            </li>
            {% if is_granted('ROLE_SUPER_ADMIN')%}
            <li class=\"nav-item\">
              <pre>  </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"{{ path('registro') }}\" style=\"font-family: Saira Extra Condensed;\">NUEVO USUARIO</a>
            </li>
            <li class=\"nav-item\">
              <pre>  </pre>
            </li>
            {% endif %}

            <li class=\"nav-item\">
              <pre>    </pre>
            </li>

            <li class=\"nav-item\">
              <h2><a class=\"nav-link text-white\" href=\"{{ path('estadisticas') }}\"><i class=\"fas fa-chart-bar\"></i></a></h2>
            </li>

            <li class=\"nav-item\">
              <pre>   </pre>
            </li>


            <li class=\"nav-item\">
              <pre>    </pre>
            </li>


            <li class=\"nav-item\">
              <a href=\"{{path('app_logout')}}\" class=\"btn bg-danger\"
                style=\"border-bottom-color:#F4717C;border-top-color:#DC434F;border-left-color:#DC434F;border-right-color:#DC434F;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F54E5C), color-stop(100%,#DC434F)); margin-top:15px;color:white;height: 25px;width:70px;font-family: Saira Extra Condensed;FONT-SIZE: 11pt;padding:0px 10px\"
                role=\"button\">SALIR</a>
            </li>


            <li class=\"nav-item\">
              <pre>       </pre>
            </li>


            <li class=\"nav-item\">
              <a class=\"nav-link text-warning\" href=\"\">{{app.user.username}}</a>
            </li>


            <li class=\"nav-item\">
              <pre>                            </pre>
            </li>


            {% else %}

            <ul class=\"navbar-nav ml-auto\">

              <li class=\"nav-item\">
                <a href=\"{{path('app_logout')}}\" class=\"btn bg-danger\"
                  style=\"border-bottom-color:#F4717C;border-top-color:#DC434F;border-left-color:#DC434F;border-right-color:#DC434F;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F54E5C), color-stop(100%,#DC434F)); margin-top:15px;color:white;height: 25px;width:70px;font-family: Saira Extra Condensed;FONT-SIZE: 11pt;padding:0px 10px\"
                  role=\"button\">SALIR</a> </li>

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
    <div class=\"container\" style=\"font-family: Saira Extra Condensed\">
      <div style=\"margin-top:50px\">

        {% if is_granted('ROLE_USER') %}
        <h1 class=\"mt-4 mb-3\" style=\"font-family: Saira Extra Condensed;\">Mantenimiento ETSIDI
          <small>Trabajadores</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\" style=\"font-family: Saira Extra Condensed;\">Consulta de solicitudes</li>
        </ol>
        {% endif %}

        {% if is_granted('ROLE_ADMIN') %}
        <h1 class=\"mt-4 mb-3\" style=\"font-family: Saira Extra Condensed;\">Mantenimiento ETSIDI
          <small>Gestión</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\" style=\"font-family: Saira Extra Condensed;\">Mantenimiento</li>
        </ol>
        {% endif %}

        <!-- Content Row -->
        <div class=\"row\">
          <!-- Sidebar Column -->
          <div class=\"col-lg-3 mb-4\" style=\"background-color: #EBECEE\">
            <div class=\"list-group \">
              {% if is_granted('ROLE_USER') %}
              <a href=\"{{ path('solicitudesTrabajador') }}\" class=\"list-group-item\" style=\" color: grey;\" style=\"font-family: Saira Extra Condensed;\">Solicitudes asignadas</a>
              <a href=\"{{ path('nuevaSolicitud',{'emailcrypt':app.user.emailcrypt,'email':app.user.username}) }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Nueva Solicitud</a>
              <a href=\"{{path('app_logout')}}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Salir</a>
              {% endif %}

              {% if is_granted('ROLE_ADMIN') %}
              <a href=\"{{ path('instruccionesCompletadas') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Trabajos completados</a>
              <a href=\"{{ path('nuevaSolicitud',{'emailcrypt': app.user.emailcrypt, 'email': app.user.username}) }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Nueva Solicitud</a>
              <a href=\"{{ path('solicitudes') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Todas las solicitudes</a>
              <a href=\"{{ path('asignadas') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes asignadas</a>
              <a href=\"{{ path('pendientesDeAsignar') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes sin asignar</a>
              <a href=\"{{ path('despachadas') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes despachadas</a>
              <a href=\"{{ path('anuladas') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes anuladas</a>
              <a href=\"{{ path('suspendidas') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes suspendidas</a>
              <a href=\"{{ path('prioritarias') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes prioritarias</a>
              <a href=\"{{ path('seleccionaSolicitudes') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes por fecha</a>
              <a href=\"{{ path('solicitudesTrabajadorGestion') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Solicitudes por trabajador</a>
              <a href=\"{{ path('solicitudesUnidadDestino') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Por destino solicitante</a>
              <a href=\"{{ path('partes') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Todos los partes</a>
              <a href=\"{{ path('seleccionaPartes') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Partes por fecha</a>
              <a href=\"{{ path('nuevoTrabajador') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Nuevo trabajador</a>
              <a href=\"{{ path('desactivarTrabajador') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Desactivar Trabajador</a>
              <a href=\"{{ path('reactivarTrabajador') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Reactivar Trabajador</a>
              <a href=\"{{ path('estadisticas') }}\" class=\"list-group-item\" style=\" color: grey;font-family: Saira Extra Condensed\">Estadísticas</a>
              {% endif %}
            </div>
          </div>
          <!-- Content Column -->
          <div class=\"col-lg-9 mb-4\">
            <img src=\"{{asset('img/mantenimiento.jpg')}}\" class=\"img-fluid\" alt=\"Responsive image\">
            <img src=\"{{asset('img/upm.png')}}\" class=\"img-fluid\" alt=\"Responsive image\">
            <div class=\"col text-center\">
              <h8 style=\"font-family: Helvetica; font-size:13px\"><br /><br /><br /><br /><br />Universidad Politécnica de Madrid ©2020</h8>
            </div>
          </div>
        </div>
      </div>
    </div>

    {% endblock %}

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

</html>", "frontal/baseGestion.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\frontal\\baseGestion.html.twig");
    }
}
