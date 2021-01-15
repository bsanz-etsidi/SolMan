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

/* estadisticas/resultados.html.twig */
class __TwigTemplate_8313c66dda21fb5f28b2085f4083ff7997a16a4930d1aadaaa7c87753c0d3eb6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "estadisticas/resultados.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "estadisticas/resultados.html.twig"));

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

    <nav class=\"navbar navbar-dark bg-info  fixed-top navbar-expand-lg fixed-top\">
      <div class=\"container\" style=\"font-family: Saira Extra Condensed\">
        <a class=\"navbar-brand\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo.png"), "html", null, true);
        echo "\" height=\"60\" alt=\"\"></a>
        ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" style=\"color:white\" ; data-target=\"#collapsibleNavbar\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
          <ul class=\"navbar-nav ml-auto\">


            <li class=\"nav-item\">
              <pre>               </pre>
            </li>

            <li class=\"nav-item\">
              <pre>               </pre>
            </li>

            <li class=\"nav-item\">
              <pre>                   </pre>
            </li>
            <li class=\"nav-item\">
              <h5><a class=\"nav-link text-black\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("basestat");
            echo "\" style=\"color: #09515E;\"><small><i class=\"fas fa-home\"></i></small></a></h5>
            </li>
            <li class=\"nav-item\">
              <pre>         </pre>
            </li>

            <li class=\"nav-item\">
              <a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("base");
            echo "\" class=\"btn bg-info\"
                style=\"margin-top:12px;color:DARKSLATEGRAY;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #3EB7CF), color-stop(100%,#399BAE));height: 25px;width:70px;FONT-SIZE: 11pt;padding:0px 10px\"
                role=\"button\">Gestión</a>
            </li>

            <li class=\"nav-item\">
            </li>


            <li class=\"nav-item\">
              <pre>       </pre>
            </li>


            <li class=\"nav-item\">
              <a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn \"
                style=\"margin-top:12px;color:DARKSLATEGRAY;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #3EB7CF), color-stop(100%,#399BAE));height: 25px;width:70px;FONT-SIZE: 11pt;padding:0px 10px\"
                role=\"button\">Salir</a>
            </li>


            <li class=\"nav-item\">
              <pre>         </pre>
            </li>


            <li class=\"nav-item\">
              <a class=\"nav-link text-warning\" href=\"\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "username", [], "any", false, false, false, 81), "html", null, true);
            echo "</a>
            </li>



            <li class=\"nav-item\">
              <pre>                             </pre>
            </li>


            ";
        } else {
            // line 92
            echo "
            <ul class=\"navbar-nav ml-auto\">

              <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"javascript:history.back(-1);\" style=\" color: #FFCDD2;font-size:20px;font-weight: 600;\">Salir</a>
              </li>

              <li class=\"nav-item\">
              </li>

            </ul>
            ";
        }
        // line 104
        echo "          </ul>
        </div>
      </div>
      </div>
    </nav>
    <!--FIN MENÚ DE NAVEGACIÓN-->
    ";
        // line 110
        $this->displayBlock('contenido', $context, $blocks);
        // line 157
        echo "
    <!-- Footer -->
    <footer class=\" page-footer bg-info\">
      <div class=\"footer-copyright text-center py-3\">
        <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/upm.png"), "html", null, true);
        echo "\" style=\"margin-bottom: 0\" height=\"100\" alt=\"\">
      </div>
    </footer>
    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/exportacion.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/genPDF.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/downloadCanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jspdf.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    ";
        // line 179
        $this->displayBlock('javascripts', $context, $blocks);
        // line 181
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

        echo "Estadísticas";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 111
        echo "    <div class=\"container\" style=\"font-family: Saira Extra Condensed\">
      <div style=\"margin-top:50px\">

        <h1 class=\"mt-4 mb-3\">Mantenimiento ETSIDI
          <small>Gestión</small>
        </h1>

        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Estadísticas</li>
        </ol>

        <!-- Content Row -->
        <div class=\"row\">
          <!-- Sidebar Column -->
          <div class=\"col-lg-3 mb-4\" style=\"background-color: #EBECEE\">
            <div class=\"list-group \">
              <a href=\"\" class=\"list-group-item\" style=\" color: black;font-size:20px;font-weight:bold\">Conteos:</a>
              <a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudes");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes</a>
              <a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudes", ["estado" => 0]);
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes sin asignar</a>
              <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudes", ["estado" => 1]);
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes asignadas</a>
              <a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudes", ["estado" => 2]);
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes despachadas</a>
              <a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudes", ["estado" => 3]);
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes anuladas</a>
              <a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudes", ["estado" => 4]);
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes suspendidas</a>
              <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoPrioritarias");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes prioritarias</a>
              <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoPartesEspecialidad");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Partes por especialidad</a>
              <a href=\"\" class=\"list-group-item\" style=\" color: black;font-size:20px;font-weight:bold\">Conteos/Medias:</a>
              <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mediaSolicitudes");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Tasa mensual de solicitudes</a>
              <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tiempoMedioSuspension");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Período medio de suspensión</a>
              <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudesTrabajador");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Conteo/Media por trabajador</a>
              <a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudesDestino");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Conteo/Media por destino</a>
            </div>
          </div>
          <!-- Content Column -->
          <div class=\"col-lg-9 mb-4\">
            <h2 class=\"mt-4 mb-3\">El resultado de la consulta realizada es:
              <h3><small>";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "&nbsp";
        echo twig_escape_filter($this->env, (isset($context["variable"]) || array_key_exists("variable", $context) ? $context["variable"] : (function () { throw new RuntimeError('Variable "variable" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "</small></h3>
            </h2>
          </div>
        </div>

      </div>
      <!-- /.row -->
    </div>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 179
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 180
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "estadisticas/resultados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 180,  404 => 179,  381 => 146,  372 => 140,  368 => 139,  364 => 138,  360 => 137,  355 => 135,  351 => 134,  347 => 133,  343 => 132,  339 => 131,  335 => 130,  331 => 129,  327 => 128,  308 => 111,  298 => 110,  279 => 6,  267 => 181,  265 => 179,  259 => 176,  255 => 175,  251 => 174,  247 => 173,  243 => 172,  239 => 171,  235 => 170,  231 => 169,  227 => 168,  223 => 167,  214 => 161,  208 => 157,  206 => 110,  198 => 104,  184 => 92,  170 => 81,  155 => 69,  137 => 54,  127 => 47,  105 => 27,  103 => 26,  99 => 25,  88 => 17,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  58 => 8,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"UTF-8\" />
    <title>{% block titulo %}Estadísticas{% endblock %}</title>
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

    <nav class=\"navbar navbar-dark bg-info  fixed-top navbar-expand-lg fixed-top\">
      <div class=\"container\" style=\"font-family: Saira Extra Condensed\">
        <a class=\"navbar-brand\"><img src=\"{{asset('img/Logo.png')}}\" height=\"60\" alt=\"\"></a>
        {% if app.user %}

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" style=\"color:white\" ; data-target=\"#collapsibleNavbar\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
          <ul class=\"navbar-nav ml-auto\">


            <li class=\"nav-item\">
              <pre>               </pre>
            </li>

            <li class=\"nav-item\">
              <pre>               </pre>
            </li>

            <li class=\"nav-item\">
              <pre>                   </pre>
            </li>
            <li class=\"nav-item\">
              <h5><a class=\"nav-link text-black\" href=\"{{ path('basestat') }}\" style=\"color: #09515E;\"><small><i class=\"fas fa-home\"></i></small></a></h5>
            </li>
            <li class=\"nav-item\">
              <pre>         </pre>
            </li>

            <li class=\"nav-item\">
              <a href=\"{{path('base')}}\" class=\"btn bg-info\"
                style=\"margin-top:12px;color:DARKSLATEGRAY;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #3EB7CF), color-stop(100%,#399BAE));height: 25px;width:70px;FONT-SIZE: 11pt;padding:0px 10px\"
                role=\"button\">Gestión</a>
            </li>

            <li class=\"nav-item\">
            </li>


            <li class=\"nav-item\">
              <pre>       </pre>
            </li>


            <li class=\"nav-item\">
              <a href=\"{{path('app_logout')}}\" class=\"btn \"
                style=\"margin-top:12px;color:DARKSLATEGRAY;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #3EB7CF), color-stop(100%,#399BAE));height: 25px;width:70px;FONT-SIZE: 11pt;padding:0px 10px\"
                role=\"button\">Salir</a>
            </li>


            <li class=\"nav-item\">
              <pre>         </pre>
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
                <a class=\"nav-link \" href=\"javascript:history.back(-1);\" style=\" color: #FFCDD2;font-size:20px;font-weight: 600;\">Salir</a>
              </li>

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

        <h1 class=\"mt-4 mb-3\">Mantenimiento ETSIDI
          <small>Gestión</small>
        </h1>

        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Estadísticas</li>
        </ol>

        <!-- Content Row -->
        <div class=\"row\">
          <!-- Sidebar Column -->
          <div class=\"col-lg-3 mb-4\" style=\"background-color: #EBECEE\">
            <div class=\"list-group \">
              <a href=\"\" class=\"list-group-item\" style=\" color: black;font-size:20px;font-weight:bold\">Conteos:</a>
              <a href=\"{{ path('conteoSolicitudes') }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes</a>
              <a href=\"{{ path('conteoSolicitudes',{'estado': 0}) }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes sin asignar</a>
              <a href=\"{{ path('conteoSolicitudes',{'estado': 1}) }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes asignadas</a>
              <a href=\"{{ path('conteoSolicitudes',{'estado': 2}) }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes despachadas</a>
              <a href=\"{{ path('conteoSolicitudes',{'estado': 3}) }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes anuladas</a>
              <a href=\"{{ path('conteoSolicitudes',{'estado': 4}) }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes suspendidas</a>
              <a href=\"{{ path('conteoPrioritarias') }}\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes prioritarias</a>
              <a href=\"{{ path('conteoPartesEspecialidad') }}\" class=\"list-group-item\" style=\" color: grey;\">Partes por especialidad</a>
              <a href=\"\" class=\"list-group-item\" style=\" color: black;font-size:20px;font-weight:bold\">Conteos/Medias:</a>
              <a href=\"{{ path('mediaSolicitudes') }}\" class=\"list-group-item\" style=\" color: grey;\">Tasa mensual de solicitudes</a>
              <a href=\"{{ path('tiempoMedioSuspension') }}\" class=\"list-group-item\" style=\" color: grey;\">Período medio de suspensión</a>
              <a href=\"{{ path('conteoSolicitudesTrabajador') }}\" class=\"list-group-item\" style=\" color: grey;\">Conteo/Media por trabajador</a>
              <a href=\"{{ path('conteoSolicitudesDestino') }}\" class=\"list-group-item\" style=\" color: grey;\">Conteo/Media por destino</a>
            </div>
          </div>
          <!-- Content Column -->
          <div class=\"col-lg-9 mb-4\">
            <h2 class=\"mt-4 mb-3\">El resultado de la consulta realizada es:
              <h3><small>{{total}}&nbsp{{variable}}</small></h3>
            </h2>
          </div>
        </div>

      </div>
      <!-- /.row -->
    </div>


    {% endblock %}

    <!-- Footer -->
    <footer class=\" page-footer bg-info\">
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

</html>", "estadisticas/resultados.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\estadisticas\\resultados.html.twig");
    }
}
