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

/* frontal/nuevaSolicitud.html.twig */
class __TwigTemplate_20822627804f75332b89c660b5fb8e58cb704712718166831ab1a1c0e98438cd extends Template
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
        $this->parent = $this->loadTemplate("frontal/base.html.twig", "frontal/nuevaSolicitud.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mantenimiento ETSIDI";
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
    <h1 class=\" mt-4 mb-3\">Mantenimiento ETSIDI - Solicitud de intervención

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
    </div>
    <div style=\"margin-top:10px\">
      <a class=\"btn btn-primary\" style=\"background-color:#C3C3C3;border: #000;background: -moz-linear-gradient(center top , #C0C0C0 0%, #808080 100%) repeat scroll 0 0 transparent;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #C0C0C0), color-stop(100%,#808080));
            box-shadow: 1px 1px 1px grey\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["email" => ($context["email"] ?? null)]), "html", null, true);
        echo "\" role=\"button\"> Limpiar </a>
    </div>

  </div>
</div>

<!-- /.row -->


";
    }

    public function getTemplateName()
    {
        return "frontal/nuevaSolicitud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 36,  90 => 30,  86 => 29,  82 => 28,  61 => 9,  57 => 8,  50 => 6,  45 => 2,  43 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontal/nuevaSolicitud.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\frontal\\nuevaSolicitud.html.twig");
    }
}
