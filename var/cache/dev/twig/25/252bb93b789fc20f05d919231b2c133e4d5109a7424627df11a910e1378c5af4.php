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

/* frontal/base.html.twig */
class __TwigTemplate_0e29da0311e4252f83c47c2e3a5740a069d59e93ebdf27d38f0ea43e2688ffbd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontal/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontal/base.html.twig"));

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
    <!--load all styles -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  </head>

  <body>
    <!--MENÚ DE NAVEGACIÓN-->

    <nav class=\"navbar navbar-dark bg-danger  fixed-top navbar-expand-lg fixed-top\">
      <div class=\"container\" style=\"font-family: Saira Extra Condensed\">
        <a class=\"navbar-brand\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_etsidi_mini_negro.png"), "html", null, true);
        echo "\" height=\"60\" alt=\"\"></a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" style=\"color:white\" ; data-target=\"#collapsibleNavbar\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
          <ul class=\"navbar-nav ml-auto\">
            ";
        // line 32
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 33
            echo "            <li class=\"nav-item\">
              <pre>         </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajador");
            echo "\" style=\"font-family: Saira Extra Condensed;\">SOLICITUDES<br />ASIGNADAS</a>
            </li>
            ";
        }
        // line 40
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 41
            echo "            <li class=\"nav-item\">
              <pre>           </pre>
            </li>
            <li class=\"nav-item\">
              <h5><a class=\"nav-link text-white\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("portadaUsuario", ["emailcrypt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "emailcrypt", [], "any", false, false, false, 45), "email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "username", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><small><i class=\"fas fa-home\"></i></small></a></h5>
            </li>
            <li class=\"nav-item\">
              <pre>      </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"";
            // line 51
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
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["emailcrypt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "emailcrypt", [], "any", false, false, false, 61), "email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "username", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" style=\"font-family: Saira Extra Condensed;\">NUEVA</a>
                <a class=\"dropdown-item\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignadas");
            echo "\" style=\"font-family: Saira Extra Condensed;\">ASIGNADAS</a>
                <a class=\"dropdown-item\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pendientesDeAsignar");
            echo "\" style=\"font-family: Saira Extra Condensed;\">SIN ASIGNAR</a>
                <a class=\"dropdown-item\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("despachadas");
            echo "\" style=\"font-family: Saira Extra Condensed;\">DESPACHADAS</a>
                <a class=\"dropdown-item\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudes");
            echo "\" style=\"font-family: Saira Extra Condensed;\">TODAS</a>
                <a class=\"dropdown-item\" href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anuladas");
            echo "\" style=\"font-family: Saira Extra Condensed;\">ANULADAS</a>
                <a class=\"dropdown-item\" href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspendidas");
            echo "\" style=\"font-family: Saira Extra Condensed;\">SUSPENDIDAS</a>
                <a class=\"dropdown-item\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prioritarias");
            echo "\" style=\"font-family: Saira Extra Condensed;\">PRIORITARIAS</a>
                <a class=\"dropdown-item\" href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaSolicitudes");
            echo "\" style=\"font-family: Saira Extra Condensed;\">POR FECHA</a>
                <a class=\"dropdown-item\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajadorGestion");
            echo "\" style=\"font-family: Saira Extra Condensed;\">POR TRABAJADOR</a>
                <a class=\"dropdown-item\" href=\"";
            // line 71
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
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaPartes");
            echo "\" style=\"font-family: Saira Extra Condensed;\">SELECCIÓN POR FECHA</a>
                <a class=\"dropdown-item\" href=\"";
            // line 86
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
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoTrabajador");
            echo "\" style=\"font-family: Saira Extra Condensed;\">NUEVO TRABAJADOR</a>
                <a class=\"dropdown-item\" href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desactivarTrabajador");
            echo "\" style=\"font-family: Saira Extra Condensed;\">DESACTIVAR TRABAJADOR</a>
                <a class=\"dropdown-item\" href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reactivarTrabajador");
            echo "\" style=\"font-family: Saira Extra Condensed;\">REACTIVAR TRABAJADOR</a>
              </div>
            </li>

            <li class=\"nav-item\">
              <pre>   </pre>
            </li>
            ";
            // line 108
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 109
                echo "            <li class=\"nav-item\">
              <pre>  </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"";
                // line 113
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registro");
                echo "\" style=\"font-family: Saira Extra Condensed;\">NUEVO USUARIO</a>
            </li>
            <li class=\"nav-item\">
              <pre>  </pre>
            </li>
            ";
            }
            // line 119
            echo "
            <li class=\"nav-item\">
              <pre>    </pre>
            </li>

            <li class=\"nav-item\">
              <h2><a class=\"nav-link text-white\" href=\"";
            // line 125
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
            // line 139
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
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "username", [], "any", false, false, false, 151), "html", null, true);
            echo "</a>
            </li>


            <li class=\"nav-item\">
              <pre>                            </pre>
            </li>


            ";
        } else {
            // line 161
            echo "
            <ul class=\"navbar-nav ml-auto\">

              <li class=\"nav-item\">
                <a href=\"";
            // line 165
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn bg-danger\"
                  style=\"border-bottom-color:#F4717C;border-top-color:#DC434F;border-left-color:#DC434F;border-right-color:#DC434F;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F54E5C), color-stop(100%,#DC434F)); margin-top:15px;color:white;height: 25px;width:70px;font-family: Saira Extra Condensed;FONT-SIZE: 11pt;padding:0px 10px\"
                  role=\"button\">SALIR</a> </li>

              <li class=\"nav-item\">
              </li>

            </ul>
            ";
        }
        // line 174
        echo "          </ul>
        </div>
      </div>
      </div>
    </nav>
    <!--FIN MENÚ DE NAVEGACIÓN-->
    ";
        // line 180
        $this->displayBlock('contenido', $context, $blocks);
        // line 209
        echo "



    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/exportacion.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/genPDF.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/downloadCanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jspdf.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    ";
        // line 226
        $this->displayBlock('javascripts', $context, $blocks);
        // line 228
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

    // line 180
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 181
        echo "

    <div class=\"container\" style=\"font-family: Saira Extra Condensed\">

      <!-- Page Heading/Breadcrumbs -->
      <div style=\"margin-top:75px\">
        <h1 class=\" mt-4 mb-3\" style=\"font-family: Saira Extra Condensed;\">Mantenimiento ETSIDI
        </h1>
      </div>


      <!-- Intro Content -->
      <div style=\"margin-bottom:200px\">
        <div class=\"row\">


          <div class=\"col-lg-6\">


          </div>
          <div class=\"col-lg-6\">
          </div>
        </div>

      </div>
    </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 226
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 227
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontal/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 227,  476 => 226,  439 => 181,  429 => 180,  410 => 6,  398 => 228,  396 => 226,  390 => 223,  386 => 222,  382 => 221,  378 => 220,  374 => 219,  370 => 218,  366 => 217,  362 => 216,  358 => 215,  354 => 214,  347 => 209,  345 => 180,  337 => 174,  325 => 165,  319 => 161,  306 => 151,  291 => 139,  274 => 125,  266 => 119,  257 => 113,  251 => 109,  249 => 108,  239 => 101,  235 => 100,  231 => 99,  215 => 86,  211 => 85,  194 => 71,  190 => 70,  186 => 69,  182 => 68,  178 => 67,  174 => 66,  170 => 65,  166 => 64,  162 => 63,  158 => 62,  154 => 61,  141 => 51,  132 => 45,  126 => 41,  123 => 40,  117 => 37,  111 => 33,  109 => 32,  99 => 25,  88 => 17,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  58 => 8,  53 => 6,  46 => 1,);
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

      <!-- Page Heading/Breadcrumbs -->
      <div style=\"margin-top:75px\">
        <h1 class=\" mt-4 mb-3\" style=\"font-family: Saira Extra Condensed;\">Mantenimiento ETSIDI
        </h1>
      </div>


      <!-- Intro Content -->
      <div style=\"margin-bottom:200px\">
        <div class=\"row\">


          <div class=\"col-lg-6\">


          </div>
          <div class=\"col-lg-6\">
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

</html>", "frontal/base.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\frontal\\base.html.twig");
    }
}
