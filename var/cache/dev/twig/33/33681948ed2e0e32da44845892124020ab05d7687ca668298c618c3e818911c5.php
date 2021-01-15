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
class __TwigTemplate_f0bf54293970248976ee723139ba6daa128df1cbb243c771a2f06c82c0adc5ca extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/instruccionesCompletadas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/instruccionesCompletadas.html.twig"));

        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/instruccionesCompletadas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        echo "Solicitudes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<div class=\"container-fluid\" style=\"font-family: Saira Extra Condensed\">
  <div style=\"margin-top:50px\">
    <h1 class=\" mt-4 mb-3\">Trabajos parciales completados</<h1>
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
              <th scope=\"col\">
                <h6>Trabajador</h6>
              </th>
            </tr>
          </thead>

          <tbody>


            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["instrucciones"]) || array_key_exists("instrucciones", $context) ? $context["instrucciones"] : (function () { throw new RuntimeError('Variable "instrucciones" does not exist.', 34, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 34, $this->source); })()), "fechaFinalizacion", [], "any", false, false, false, 34) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 34, $this->source); })()), "fechaFinalizacion", [], "any", false, false, false, 34)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["instruccion"]) {
            // line 35
            echo "            <tr>


              <td>
                <h6><small>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instruccion"], "fechaFinalizacion", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true);
            echo "</small></h6>
              </td>


              <td>
                <h5><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["idcrypt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 44), "idcrypt", [], "any", false, false, false, 44), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</a></h5>
              </td>


              <td>
                <h6><small>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instruccion"], "descripcionInstruccion", [], "any", false, false, false, 49), "html", null, true);
            echo "</small></h6>
              </td>

              <td>
                <h6><small>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "trabajador", [], "any", false, false, false, 53), "nombre", [], "any", false, false, false, 53), "html", null, true);
            echo "</small></h6>
              </td>

            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  166 => 58,  155 => 53,  148 => 49,  138 => 44,  130 => 39,  124 => 35,  120 => 34,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontal/base.html.twig' %}
{% block titulo %}Solicitudes{% endblock %}
{% block contenido %}
<div class=\"container-fluid\" style=\"font-family: Saira Extra Condensed\">
  <div style=\"margin-top:50px\">
    <h1 class=\" mt-4 mb-3\">Trabajos parciales completados</<h1>
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
              <th scope=\"col\">
                <h6>Trabajador</h6>
              </th>
            </tr>
          </thead>

          <tbody>


            {% for instruccion in instrucciones|sort((a, b) => b.fechaFinalizacion <=> a.fechaFinalizacion) %}
            <tr>


              <td>
                <h6><small>{{instruccion.fechaFinalizacion|date('d/m/Y')}}</small></h6>
              </td>


              <td>
                <h5><a href=\"{{path('solicitud',{'idcrypt':instruccion.solicitud.idcrypt, 'id':instruccion.solicitud.id})}}\">{{instruccion.solicitud.id}}</a></h5>
              </td>


              <td>
                <h6><small>{{instruccion.descripcionInstruccion}}</small></h6>
              </td>

              <td>
                <h6><small>{{instruccion.trabajador.nombre}}</small></h6>
              </td>

            </tr>
            {% endfor %}

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
{% endblock %}", "gestionMantenimiento/instruccionesCompletadas.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\instruccionesCompletadas.html.twig");
    }
}
