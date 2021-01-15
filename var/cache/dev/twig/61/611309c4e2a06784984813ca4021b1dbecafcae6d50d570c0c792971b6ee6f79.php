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
class __TwigTemplate_3464c873c1eac89d433f5a11244be69fb4f049ce4f62765dda04c6a266e3b482 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/anuladas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/anuladas.html.twig"));

        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/anuladas.html.twig", 1);
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
    <h1 class=\" mt-4 mb-3\">Solicitudes Anuladas</<h1>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"table-responsive-lg\">
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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) || array_key_exists("solicitudes", $context) ? $context["solicitudes"] : (function () { throw new RuntimeError('Variable "solicitudes" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 44
            echo "
            <tr>

              <td>
                <h5><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 48), "id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "
                  </a></h5>
              </td>


              <td>
                <h6><small>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
            echo "</small></h6>
              </td>


              <td>
                <h6>
                  <small>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 60), "html", null, true);
            echo "</small>
                </h6>
              </td>


              <td>
                <h6><small>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 66), "html", null, true);
            echo "</small></h6>
              </td>

              <td>
                <h6><small>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "destino", [], "any", false, false, false, 70), "html", null, true);
            echo "</small></h6>
              </td>

              <td>
                <h6><small>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "extension", [], "any", false, false, false, 74), "html", null, true);
            echo "</small></h6>
              </td>

              <td>
                <h6><small>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "descripcionIncidencia", [], "any", false, false, false, 78), "html", null, true);
            echo "</small></h6>
              </td>

              <td>
                <h6><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reactivarSolicitudAnulada", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\"><small>Reactivar</small></a></h6>
              </td>


              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
          </tbody>
        </table>
      </div>
      <div class=\"col text-center\">
        <h8 style=\"font-family: Helvetica; font-size:13px\"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />Universidad Politécnica de Madrid ©2020</h8>
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
        return "gestionMantenimiento/anuladas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 87,  196 => 82,  189 => 78,  182 => 74,  175 => 70,  168 => 66,  159 => 60,  150 => 54,  139 => 48,  133 => 44,  129 => 43,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontal/base.html.twig' %}
{% block titulo %}Solicitudes{% endblock %}
{% block contenido %}
<div class=\"container-fluid\" style=\"font-family: Saira Extra Condensed\">
  <div style=\"margin-top:50px\">
    <h1 class=\" mt-4 mb-3\">Solicitudes Anuladas</<h1>
  </div>

  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"table-responsive-lg\">
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

            {% for solicitud in solicitudes %}

            <tr>

              <td>
                <h5><a href=\"{{path('solicitud',{'idcrypt':solicitud.idcrypt, 'id':solicitud.id})}}\">{{solicitud.id}}
                  </a></h5>
              </td>


              <td>
                <h6><small>{{solicitud.fecha|date('d/m/Y')}}</small></h6>
              </td>


              <td>
                <h6>
                  <small>{{solicitud.estancia}}</small>
                </h6>
              </td>


              <td>
                <h6><small>{{solicitud.solicitante}}</small></h6>
              </td>

              <td>
                <h6><small>{{solicitud.destino}}</small></h6>
              </td>

              <td>
                <h6><small>{{solicitud.extension}}</small></h6>
              </td>

              <td>
                <h6><small>{{solicitud.descripcionIncidencia}}</small></h6>
              </td>

              <td>
                <h6><a href=\"{{path('reactivarSolicitudAnulada',{'id':solicitud.id})}}\"><small>Reactivar</small></a></h6>
              </td>


              {% endfor %}

          </tbody>
        </table>
      </div>
      <div class=\"col text-center\">
        <h8 style=\"font-family: Helvetica; font-size:13px\"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />Universidad Politécnica de Madrid ©2020</h8>
      </div>
    </div>
  </div>
  <div style=\"margin-bottom:200px\">
  </div>
</div>
{% endblock %}
", "gestionMantenimiento/anuladas.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\anuladas.html.twig");
    }
}
