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

/* gestionMantenimiento/seleccionaDestino.html.twig */
class __TwigTemplate_75f73d442c42f8159099aba52e11eaec7042f7d0df374dd4ab5a603c58ddf577 extends Template
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
        return "frontal/baseautenticacion.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "form/baseForm.html.twig"], true);
        $this->parent = $this->loadTemplate("frontal/baseautenticacion.html.twig", "gestionMantenimiento/seleccionaDestino.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Solicitudes por Destino";
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
    <h1 class=\" mt-4 mb-3\">
      <small>Seleccione una unidad de destino para mostrar sus solicitudes asignadas</small>
    </h1>
  </div>


  <!-- Intro Content -->
  <div style=\"margin-bottom:75px\">
    <div class=\"row\">


      <div class=\"col-lg-6\">

        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
      </div>
      <div class=\"col-lg-6\">
      </div>
    </div>

  </div>
</div>

<!-- /.row -->


";
    }

    public function getTemplateName()
    {
        return "gestionMantenimiento/seleccionaDestino.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  84 => 28,  80 => 27,  59 => 8,  55 => 7,  48 => 5,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "gestionMantenimiento/seleccionaDestino.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\seleccionaDestino.html.twig");
    }
}
