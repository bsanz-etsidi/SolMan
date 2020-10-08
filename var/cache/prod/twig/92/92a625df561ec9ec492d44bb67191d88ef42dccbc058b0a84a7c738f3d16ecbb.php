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

/* gestionMantenimiento/instruccionesCompletadas.html.twig */
class __TwigTemplate_ce9757a84a4ef1d4230d84be2a14db0f6d3be8368337ee6bf3e23ca41da6f3b9 extends Template
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
        // line 1
        return "frontal/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/instruccionesCompletadas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Solicitudes";
    }

    // line 3
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container-fluid\">
  <div style=\"margin-top:50px\">
    <h1 class=\" mt-4 mb-3\">Solicitudes</<h1>
  </div>
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"table-responsive-lg\">
        <table class=\"table\">
          <thead class=\"thead-dark\">
            <tr>
              <th scope=\"col\">
                <h6>Fecha</h6>
              </th>

              <th scope=\"col\">
                <h6>Solicitud</h6>
              </th>

              <th scope=\"col\">
                <h6>Descripcion</h6>
              </th>
            </tr>
          </thead>

          <tbody>


            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["instrucciones"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "fechaFinalizacion", [], "any", false, false, false, 31) <=> twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "fechaFinalizacion", [], "any", false, false, false, 31)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["instruccion"]) {
            // line 32
            echo "            <tr>


              <td>
                <h6><small>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instruccion"], "fechaFinalizacion", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true);
            echo "</small></h6>
              </td>


              <td>
                <h5><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</a></h5>
              </td>


              <td>
                <h6><small>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instruccion"], "descripcionInstruccion", [], "any", false, false, false, 46), "html", null, true);
            echo "</small></h6>
              </td>

            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
          </tbody>
        </table>
      </div>
      <div class=\"col-md-2\">
      </div>
    </div>
  </div>
  <div style=\"margin-bottom:200px\">
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "gestionMantenimiento/instruccionesCompletadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  115 => 46,  105 => 41,  97 => 36,  91 => 32,  87 => 31,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gestionMantenimiento/instruccionesCompletadas.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\instruccionesCompletadas.html.twig");
    }
}
