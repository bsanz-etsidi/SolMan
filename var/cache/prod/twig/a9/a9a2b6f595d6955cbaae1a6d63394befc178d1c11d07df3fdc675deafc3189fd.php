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

/* estadisticas/basestatistics.html.twig */
class __TwigTemplate_d558ebc2876731902f4834a3ed025ac4f62982f83a58c950a1d8c31b6aeec687 extends Template
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
              <pre>                     </pre>
            </li>

            <li class=\"nav-item\">
              <pre>               </pre>
            </li>

            <li class=\"nav-item\">
              <pre>               </pre>
            </li>

            <li class=\"nav-item\">
              <h5><a class=\"nav-link text-black\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("basestat");
            echo "\" style=\"color: #09515E;\"><small><i class=\"fas fa-home\"></i></small></a></h5>
            </li>
            <li class=\"nav-item\">
              <pre>         </pre>
            </li>

            <li class=\"nav-item\">
              <a href=\"";
            // line 49
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
            // line 64
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
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 76), "username", [], "any", false, false, false, 76), "html", null, true);
            echo "</a>
            </li>



            <li class=\"nav-item\">
              <pre>                             </pre>
            </li>


            ";
        } else {
            // line 87
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
        // line 99
        echo "          </ul>
        </div>
      </div>
      </div>
    </nav>

    ";
        // line 105
        $this->displayBlock('contenido', $context, $blocks);
        // line 108
        echo "
    <footer class=\"page-footer bg-info\">
      <div class=\"footer-copyright text-center py-3\">
        <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/upm.png"), "html", null, true);
        echo "\" style=\"margin-bottom: 0\" height=\"100\" alt=\"\">
      </div>
    </footer>
    <!-- Footer -->

    <!-- /.container -->
    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/exportacion.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/genPDF.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/downloadCanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jspdf.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    ";
        // line 130
        $this->displayBlock('javascripts', $context, $blocks);
        // line 132
        echo "  </body>

</html>";
    }

    // line 6
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Estadísticas";
    }

    // line 105
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "
    ";
    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "    ";
    }

    public function getTemplateName()
    {
        return "estadisticas/basestatistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 131,  266 => 130,  261 => 106,  257 => 105,  250 => 6,  244 => 132,  242 => 130,  236 => 127,  232 => 126,  228 => 125,  224 => 124,  220 => 123,  216 => 122,  212 => 121,  208 => 120,  204 => 119,  200 => 118,  190 => 111,  185 => 108,  183 => 105,  175 => 99,  161 => 87,  147 => 76,  132 => 64,  114 => 49,  104 => 42,  83 => 23,  81 => 22,  77 => 21,  66 => 13,  61 => 11,  57 => 10,  52 => 8,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "estadisticas/basestatistics.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\estadisticas\\basestatistics.html.twig");
    }
}
