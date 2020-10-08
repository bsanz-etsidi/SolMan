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

/* frontal/rellenarSatisfaccion.html.twig */
class __TwigTemplate_196831d0ee8f58637601ff9a51d3097fcbe2ac2454fefaecae9cd6bb31595705 extends Template
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
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "form/baseForm.html.twig"], true);
        // line 2
        $this->parent = $this->loadTemplate("frontal/base.html.twig", "frontal/rellenarSatisfaccion.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Valoración trabajos";
    }

    // line 8
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<!-- Page Content -->

<div class=\"container\">

  <!-- Page Heading/Breadcrumbs -->
  <div style=\"margin-top:75px\">
    <h1 class=\" mt-4 mb-3\"> Mantenimiento</h1>
    <h4>Rellenar el siguiente formulario para la valoración del servicio recibido: </h4>

  </div>
  <div class=\"row\">
  </div>


  <!-- Intro Content -->
  <div style=\"margin-bottom:90px\">
    <div class=\"row\">


      <div class=\"col-lg-6\" style=\"margin-top:30px\">


        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        ";
        // line 33
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
        return "frontal/rellenarSatisfaccion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  89 => 32,  85 => 31,  61 => 9,  57 => 8,  50 => 6,  45 => 2,  43 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontal/rellenarSatisfaccion.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\frontal\\rellenarSatisfaccion.html.twig");
    }
}
