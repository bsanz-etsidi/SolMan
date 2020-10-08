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

/* frontal/invalidCredentials.html.twig */
class __TwigTemplate_8502c72d332c7b887b4d395df06d521a409adb0fbcbc7fa2d710578b46dbab9b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'contenido' => [$this, 'block_contenido'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>

  <head>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <style>
      h1 {
        font-family: 'Passion One', cursive;
        color: #00b5c3;
        font-size: 150px;
        letter-spacing: 15.5px;
        font-weight: 900;
      }

      h2 {
        font-family: 'Raleway', sans-serif;
        color: #292929;
        font-size: 28px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2.2px;
    </style>
  </head>

  <body>
    <nav class=\"navbar navbar-dark bg-info  fixed-top navbar-expand-lg fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo.png"), "html", null, true);
        echo "\" height=\"60\" alt=\"\"></a>


        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" style=\"color:white\" ; data-target=\"#collapsibleNavbar\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
          <ul class=\"navbar-nav ml-auto\">

          </ul>
        </div>
      </div>
    </nav>

    ";
        // line 43
        $this->displayBlock('contenido', $context, $blocks);
        // line 64
        echo "
    <footer class=\"page-footer bg-info fixed-bottom\">
      <div class=\"footer-copyright text-center py-3\">
        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/upm.png"), "html", null, true);
        echo "\" style=\"margin-bottom: 0\" height=\"100\" alt=\"\">
      </div>
    </footer>

    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/exportacion.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/genPDF.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/downloadCanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jspdf.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>


  </body>

</html>";
    }

    // line 43
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    <div style=\"margin-top:200px; margin-left:100px\">
      <div class=\"row\">
        <!-- Sidebar Column -->
        <div class=\"col-lg-2 offset-md-2 align-self-start\">
          <h1 class=\"mt-6\">:(</h1>
        </div>

        <div class=\"col align-self-end\">
          <h2 class=\"mt-6\">ERROR DE AUTENTICACIÓN.</h2>
          <h3 class=\"mt-6\" style=\"font-weight: 400;\">Posibles causas:</h3>

          <h4 class=\"mt-6\" style=\"font-weight: lighter;\"><i>Credenciales inválidas</i></h4>

          <h4 class=\"mt-6\" style=\"font-weight: lighter;\"><i>No se pudo conectar con el servidor LDAP</i></h4>
          <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-light\" style=\"margin-top:12px;color: grey;background: #EAEDED ;height: 35px;width:100px;FONT-SIZE: 13pt; padding:0px 10px\" role=\"button\">Volver</a>

        </div>
      </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "frontal/invalidCredentials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 58,  154 => 44,  150 => 43,  138 => 80,  134 => 79,  130 => 78,  126 => 77,  122 => 76,  118 => 75,  114 => 74,  110 => 73,  106 => 72,  102 => 71,  95 => 67,  90 => 64,  88 => 43,  71 => 29,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontal/invalidCredentials.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\frontal\\invalidCredentials.html.twig");
    }
}
