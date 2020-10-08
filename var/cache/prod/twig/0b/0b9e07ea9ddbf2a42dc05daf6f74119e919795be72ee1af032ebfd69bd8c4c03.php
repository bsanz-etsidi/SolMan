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

/* frontal/mensaje.html.twig */
class __TwigTemplate_2e0afc6e6f4bdafe05c6da75e16652ceebeb29b5fcfd2d2379f862ca96fbb631 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titulo' => [$this, 'block_titulo'],
            'contenido' => [$this, 'block_contenido'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "frontal/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("frontal/base.html.twig", "frontal/mensaje.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Solicitud registrada";
    }

    // line 7
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<!-- Page Content -->

<div class=\"container\">

  <!-- Page Heading/Breadcrumbs -->
  <div style=\"margin-top:75px;margin-bottom:30px\">
    <h1 class=\" mt-4 mb-3\">Mantenimiento ETSIDI

    </h1>
  </div>


  <!-- Intro Content -->
  <div style=\"margin-bottom:130px\">
    <h3 style=\"font-style:italic\"><small>Su solicitud ha sido registrada. Le iremos informando sobre el progreso de los trabajos para solventar la incidencia.</small>
    </h3>
    <a class=\"btn btn-primary\" style=\"margin-top:70px;background-color:#C3C3C3;border: #000;background: -moz-linear-gradient(center top , #C0C0C0 0%, #808080 100%) repeat scroll 0 0 transparent;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #C0C0C0), color-stop(100%,#808080));
        box-shadow: 1px 1px 1px grey\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["email" => ($context["email"] ?? null)]), "html", null, true);
        echo "\" role=\"button\">Nueva Solicitud</a>
  </div>
</div>

<!-- /.row -->


";
    }

    public function getTemplateName()
    {
        return "frontal/mensaje.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  58 => 8,  54 => 7,  47 => 5,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontal/mensaje.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\frontal\\mensaje.html.twig");
    }
}
