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

/* frontal/index.html.twig */
class __TwigTemplate_e8fdf1d14f24d191b31c37990243a20029dfd86eca54748bbcf945de02589082 extends Template
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
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "form/baseForm.html.twig"], true);
        // line 2
        $this->parent = $this->loadTemplate("frontal/baseautenticacion.html.twig", "frontal/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mantenimiento ETSIDI";
    }

    // line 9
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<!-- Page Content -->


<div class=\"container\">

  <!-- Page Heading/Breadcrumbs -->
  <div style=\"margin-top:75px;margin-bottom:23px\">
    <h1 class=\" mt-4 mb-3\">Mantenimiento ETSIDI

    </h1>

  </div>


  <!-- Intro Content -->
  <div style=\"margin-bottom:75px\">
    <div class=\"row\">


      <div class=\"col-lg-6\">

        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <table>
          <tr>
            <td>
              <h6 style=\"color: black\">Usuario</h6>
            </td>
          </tr>
          <tr>
            <td style=\"width:300px\">
              ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Usuario", [], "any", false, false, false, 40), 'widget');
        echo "</td>
            <td>
              <h6 style=\"font-style:italic;color: black\"> &nbsp@upm.es</h6>
            </td>
          </tr>
          <tr>
          <tr>
            <td><br /></td>
          </tr>
          <td>
            <h6 style=\"color: black\">Contraseña</h6>
          </td>
          </tr>
          <tr>
            <td>
              ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Password", [], "any", false, false, false, 55), 'widget');
        echo "</td>
          </tr>
          <tr>
            <td><br /></td>
          </tr>
          <tr>
            <td>
              ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Aceptar", [], "any", false, false, false, 62), 'widget');
        echo "</td>
          </tr>
        </table>
        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

      </div>
    </div>

  </div>
</div>

<!-- /.row -->
";
    }

    public function getTemplateName()
    {
        return "frontal/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 65,  124 => 62,  114 => 55,  96 => 40,  84 => 31,  61 => 10,  57 => 9,  50 => 6,  45 => 2,  43 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontal/index.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\frontal\\index.html.twig");
    }
}
