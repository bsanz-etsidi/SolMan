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
class __TwigTemplate_22fd9a68608cabb46f3f5368df5ce6936983c56c68477f77ef0584979750e56f extends Template
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
            <a class=\"nav-link text-white\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instruccionesCompletadas");
            echo "\">Trabajos<br />completados</a>
            <li class=\"nav-item\">
              <pre>  </pre>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Solicitudes
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 48), "username", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">Nueva</a>
                <a class=\"dropdown-item\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignadas");
            echo "\">Asignadas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pendientesDeAsignar");
            echo "\">Sin Asignar</a>
                <a class=\"dropdown-item\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("despachadas");
            echo "\">Despachadas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudes");
            echo "\">Todas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anuladas");
            echo "\">Anuladas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspendidas");
            echo "\">Suspendidas</a>
                <a class=\"dropdown-item\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prioritarias");
            echo "\">Prioritarias</a>
                <a class=\"dropdown-item\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaSolicitudes");
            echo "\">Por fecha</a>
                <a class=\"dropdown-item\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajadorGestion");
            echo "\">Por trabajador</a>
                <a class=\"dropdown-item\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesUnidadDestino");
            echo "\">Por destino solicitante</a>
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
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seleccionaPartes");
            echo "\">Selección por fecha</a>
                <a class=\"dropdown-item\" href=\"";
            // line 73
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
        // line 197
        echo "
    <footer class=\"page-footer  bg-danger\">
      <div class=\"footer-copyright text-center py-3\">
        <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/upm.png"), "html", null, true);
        echo "\" style=\"margin-bottom: 0\" height=\"100\" alt=\"\">
      </div>
    </footer>
    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/exportacion.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/genPDF.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/downloadCanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jspdf.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    ";
        // line 218
        $this->displayBlock('javascripts', $context, $blocks);
        // line 220
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
        echo "

    <div class=\"container\">

      <!-- Page Heading/Breadcrumbs -->
      <div style=\"margin-top:75px\">
        <h1 class=\" mt-4 mb-3\">Mantenimiento ETSIDI
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
    }

    // line 218
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 219
        echo "    ";
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
        return array (  420 => 219,  416 => 218,  385 => 169,  381 => 168,  374 => 6,  368 => 220,  366 => 218,  360 => 215,  356 => 214,  352 => 213,  348 => 212,  344 => 211,  340 => 210,  336 => 209,  332 => 208,  328 => 207,  324 => 206,  315 => 200,  310 => 197,  308 => 168,  300 => 162,  288 => 153,  282 => 149,  269 => 139,  254 => 127,  237 => 113,  229 => 107,  220 => 101,  214 => 97,  212 => 96,  202 => 89,  198 => 88,  194 => 87,  177 => 73,  173 => 72,  156 => 58,  152 => 57,  148 => 56,  144 => 55,  140 => 54,  136 => 53,  132 => 52,  128 => 51,  124 => 50,  120 => 49,  116 => 48,  104 => 39,  96 => 34,  90 => 30,  88 => 29,  77 => 21,  66 => 13,  61 => 11,  57 => 10,  52 => 8,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontal/base.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\frontal\\base.html.twig");
    }
}
