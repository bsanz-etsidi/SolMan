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

/* gestionMantenimiento/anuladas.html.twig */
class __TwigTemplate_8f3f72ce665a1c5613210744e95eaafd61a94e04f9964361afdbedc26e744d29 extends Template
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
        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/anuladas.html.twig", 1);
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
        echo "<div class=\"container\">
  <div style=\"margin-top:50px\">
    <h1 class=\" mt-4 mb-3\">Solicitudes Anuladas</<h1>
  </div>

  <div class=\"row\">


    <div class=\"col-md-12\">

      <table class=\"table\">
        <thead class=\"thead-dark\">
          <tr>

            <th scope=\"col\">
              <h6>Id</h6>
            </th>
            <th scope=\"col\">
              <h6>Fecha</h6>
            </th>
            <th scope=\"col\">
              <h6>Estancia</h6>
            </th>
            <th scope=\"col\">
              <h6>Solicitante</h6>
            </th>
            <th scope=\"col\">
              <h6>Destino</h6>
            </th>
            <th scope=\"col\">
              <h6>Extensión</h6>
            </th>
            <th scope=\"col\">
              <h6>Incidencia</h6>
            </th>
            <th scope=\"col\">
              <h6>Reactivar</h6>
            </th>
          </tr>
        </thead>
        <tbody>

          ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["solicitudes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 47
            echo "
          <tr>

            <td>
              <h5><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "
                </a></h5>
            </td>


            <td>
              <h6><small>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true);
            echo "</small></h6>
            </td>


            <td>
              <h6>
                <small>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 63), "html", null, true);
            echo "</small>
              </h6>
            </td>


            <td>
              <h6><small>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 69), "html", null, true);
            echo "</small></h6>
            </td>

            <td>
              <h6><small>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "destino", [], "any", false, false, false, 73), "html", null, true);
            echo "</small></h6>
            </td>

            <td>
              <h6><small>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "extension", [], "any", false, false, false, 77), "html", null, true);
            echo "</small></h6>
            </td>

            <td>
              <h6><small>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "descripcionIncidencia", [], "any", false, false, false, 81), "html", null, true);
            echo "</small></h6>
            </td>

            <td>
              <h7><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reactivarSolicitudAnulada", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\"><small>Reactivar</small></a></h7>
            </td>


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
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
        return "gestionMantenimiento/anuladas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 90,  169 => 85,  162 => 81,  155 => 77,  148 => 73,  141 => 69,  132 => 63,  123 => 57,  112 => 51,  106 => 47,  102 => 46,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gestionMantenimiento/anuladas.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\anuladas.html.twig");
    }
}
