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

/* estadisticas/resultadosSolicitudesDestino.html.twig */
class __TwigTemplate_82a18dfb2b3d069f5c4561043aa472f5a6d0417cf5f0df0dc6d41f1bf7bfa043 extends Template
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

    <nav class=\"navbar navbar-dark bg-info  fixed-top navbar-expand-lg fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo.png"), "html", null, true);
        echo "\" height=\"60\" alt=\"\"></a>
        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22)) {
            // line 23
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
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("basestat");
            echo "\" style=\"color: #09515E;\"><small><i class=\"fas fa-home\"></i></small></a></h5>
            </li>
            <li class=\"nav-item\">
              <pre>         </pre>
            </li>

            <li class=\"nav-item\">
              <a href=\"";
            // line 50
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
            // line 65
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
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 77), "username", [], "any", false, false, false, 77), "html", null, true);
            echo "</a>
            </li>



            <li class=\"nav-item\">
              <pre>                             </pre>
            </li>


            ";
        } else {
            // line 88
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
        // line 100
        echo "          </ul>
        </div>
      </div>
      </div>
    </nav>
    <!--FIN MENÚ DE NAVEGACIÓN-->
    ";
        // line 106
        $this->displayBlock('contenido', $context, $blocks);
        // line 154
        echo "
    <!-- Footer -->
    <footer class=\"page-footer  bg-info\">
      <div class=\"footer-copyright text-center py-3\">
        <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/upm.png"), "html", null, true);
        echo "\" style=\"margin-bottom: 0\" height=\"100\" alt=\"\">
      </div>
    </footer>
    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/exportacion.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/genPDF.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/downloadCanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jspdf.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    ";
        // line 176
        $this->displayBlock('javascripts', $context, $blocks);
        // line 178
        echo "  </body>

</html>";
    }

    // line 6
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Estadísticas";
    }

    // line 106
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "    <div class=\"container\">
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
          <div class=\"col-lg-3 mb-4 bg-light\">
            <div class=\"list-group \">
              <a href=\"\" class=\"list-group-item\" style=\" color: black;font-size:20px;font-weight:bold\">Conteos:</a>
              <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudes");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes</a>
              <a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudes", ["estado" => 0]);
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes sin asignar</a>
              <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudes", ["estado" => 1]);
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes asignadas</a>
              <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudes", ["estado" => 2]);
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes despachadas</a>
              <a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudes", ["estado" => 3]);
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes anuladas</a>
              <a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudes", ["estado" => 4]);
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes suspendidas</a>
              <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoPrioritarias");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Solicitudes prioritarias</a>
              <a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoPartesEspecialidad");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Partes por especialidad</a>
              <a href=\"\" class=\"list-group-item\" style=\" color: black;font-size:20px;font-weight:bold\">Conteos/Medias:</a>
              <a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mediaSolicitudes");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Tasa mensual de solicitudes</a>
              <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tiempoMedioSuspension");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Período medio de suspensión</a>
              <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudesTrabajador");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Conteo/Media por trabajador</a>
              <a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conteoSolicitudesDestino");
        echo "\" class=\"list-group-item\" style=\" color: grey;\">Conteo/Media por destino</a>
            </div>
          </div>
          <!-- Content Column -->
          <div class=\"col-lg-9 mb-4\">
            <h2 class=\"mt-4 mb-3\">El resultado de la consulta realizada es:
              <h3><small>";
        // line 142
        echo twig_escape_filter($this->env, ($context["totalSolicitudesDestino"] ?? null), "html", null, true);
        echo " solicitudes realizadas desde la unidad ";
        echo twig_escape_filter($this->env, ($context["destino"] ?? null), "html", null, true);
        echo ".</small></h3>
              <h3><small>La media mensual de solicitudes realizadas desde ";
        // line 143
        echo twig_escape_filter($this->env, ($context["destino"] ?? null), "html", null, true);
        echo " en este periodo es de ";
        echo twig_escape_filter($this->env, ($context["media"] ?? null), "html", null, true);
        echo " solicitudes por mes.</small></h3>
            </h2>
          </div>
        </div>

      </div>
      <!-- /.row -->
    </div>


    ";
    }

    // line 176
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "    ";
    }

    public function getTemplateName()
    {
        return "estadisticas/resultadosSolicitudesDestino.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 177,  358 => 176,  341 => 143,  335 => 142,  326 => 136,  322 => 135,  318 => 134,  314 => 133,  309 => 131,  305 => 130,  301 => 129,  297 => 128,  293 => 127,  289 => 126,  285 => 125,  281 => 124,  262 => 107,  258 => 106,  251 => 6,  245 => 178,  243 => 176,  237 => 173,  233 => 172,  229 => 171,  225 => 170,  221 => 169,  217 => 168,  213 => 167,  209 => 166,  205 => 165,  201 => 164,  192 => 158,  186 => 154,  184 => 106,  176 => 100,  162 => 88,  148 => 77,  133 => 65,  115 => 50,  105 => 43,  83 => 23,  81 => 22,  77 => 21,  66 => 13,  61 => 11,  57 => 10,  52 => 8,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "estadisticas/resultadosSolicitudesDestino.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\estadisticas\\resultadosSolicitudesDestino.html.twig");
    }
}
