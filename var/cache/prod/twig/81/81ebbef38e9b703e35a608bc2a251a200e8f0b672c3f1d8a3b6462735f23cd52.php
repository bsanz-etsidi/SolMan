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

/* gestionMantenimiento/seleccionaSolicitudes.html.twig */
class __TwigTemplate_c0af9aa9629b02603a322d2bb819db531ffb79ed1f8b9615147bb37bb1f3a632 extends Template
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
        $this->parent = $this->loadTemplate("frontal/baseautenticacion.html.twig", "gestionMantenimiento/seleccionaSolicitudes.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Solicitudes de trabajo";
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
    <h1 class=\" mt-4 mb-3\"> Mantenimiento
      <small>Solicitudes de trabajo</small>
      <small>Seleccione las fechas límite de las solicitudes a mostrar</small>
    </h1>
  </div>


  <!-- Intro Content -->
  <div style=\"margin-bottom:75px\">
    <div class=\"row\">


      <div class=\"col-lg-6\">

        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        ";
        // line 30
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
        return "gestionMantenimiento/seleccionaSolicitudes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  85 => 29,  81 => 28,  59 => 8,  55 => 7,  48 => 5,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "gestionMantenimiento/seleccionaSolicitudes.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\seleccionaSolicitudes.html.twig");
    }
}
