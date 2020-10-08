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

/* gestionMantenimiento/solicitudesTrabajador.html.twig */
class __TwigTemplate_5b45796b4854ac662727c7b925902fd013ea8d09138dc62cdca2106ef39fe726 extends Template
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
        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/solicitudesTrabajador.html.twig", 1);
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
    <h1 class=\" mt-4 mb-3\">Solicitudes asignadas a ";
        // line 6
        echo twig_escape_filter($this->env, ($context["nombreTrabajador"] ?? null), "html", null, true);
        echo "</<h1>
  </div>

  <div class=\"row\">

    <div class=\"col-lg-12\">
      <div class=\"table-responsive-lg\">

        <table class=\"table\">
          <thead class=\"thead-dark\">
            <tr>

              <th scope=\"col\">
                <h6>Referencia</h6>
              </th>
              <th scope=\"col\">
                <h6>Fecha</h6>
              </th>
              <th scope=\"col\">
                <h6>Estancia</h6>
              </th>
              <th scope=\"col\">
                <h6>Trabajador asignado</h6>
              </th>
              <th scope=\"col\">
                <h6>Instrucciones</h6>
              </th>


            </tr>
          </thead>
          <tbody>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["solicitudes"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "id", [], "any", false, false, false, 38) <=> twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "id", [], "any", false, false, false, 38)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 39
            echo "            <tr>

              <td>
                <h5><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudTrabajador", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "
                  </a></h5>
              </td>


              <td>
                <h6>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 48), "Y/m/d"), "html", null, true);
            echo "</h6>
              </td>


              <td>
                <h6>
                  ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 54), "html", null, true);
            echo "
                </h6>
              </td>


              <td>
                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["solicitud"], "trabajadores", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
                // line 61
                echo "                <h5><small>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 61), "html", null, true);
                echo "</small></h5>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "              </td>

              <td>
                ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["solicitud"], "trabajadores", [], "any", false, false, false, 66));
            foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
                // line 67
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trabajador"], "instrucciones", [], "any", false, false, false, 67));
                foreach ($context['_seq'] as $context["_key"] => $context["instruccion"]) {
                    // line 68
                    echo "                ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 68))) {
                        // line 69
                        echo "                <h5><small>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instruccion"], "descripcionInstruccion", [], "any", false, false, false, 69), "html", null, true);
                        echo "</small></h5>
                ";
                    }
                    // line 71
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruccion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "
              </td>

            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "          </tbody>
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
        return "gestionMantenimiento/solicitudesTrabajador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 78,  183 => 73,  177 => 72,  171 => 71,  165 => 69,  162 => 68,  157 => 67,  153 => 66,  148 => 63,  139 => 61,  135 => 60,  126 => 54,  117 => 48,  106 => 42,  101 => 39,  97 => 38,  62 => 6,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gestionMantenimiento/solicitudesTrabajador.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\solicitudesTrabajador.html.twig");
    }
}
