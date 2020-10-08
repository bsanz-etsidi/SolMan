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

/* frontal/mensajeNoCorresponde.html.twig */
class __TwigTemplate_31a22d3ebbcfd1c878293f7e97361184361675c76946e8f1c8ee4f6a43f92a5a extends Template
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
        $this->parent = $this->loadTemplate("frontal/base.html.twig", "frontal/mensajeNoCorresponde.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Valoración trabajos";
    }

    // line 7
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<!-- Page Content -->

<div class=\"container\">

  <!-- Page Heading/Breadcrumbs -->
  <div style=\"margin-top:75px\">
    <h1 class=\" mt-4 mb-3\">Mantenimiento ETSIDI

    </h1>
  </div>


  <!-- Intro Content -->
  <div style=\"margin-bottom:190px\">
    <h3 style=\"font-style:italic\"><br /><small>Lo sentimos. Estos trabajos han de ser valorados por el solicitante. No se permite valorar una intervención por un usuario distinto al solicitante.</small>
    </h3>

  </div>

</div>

<!-- /.row -->


";
    }

    public function getTemplateName()
    {
        return "frontal/mensajeNoCorresponde.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  54 => 7,  47 => 5,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontal/mensajeNoCorresponde.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\frontal\\mensajeNoCorresponde.html.twig");
    }
}
