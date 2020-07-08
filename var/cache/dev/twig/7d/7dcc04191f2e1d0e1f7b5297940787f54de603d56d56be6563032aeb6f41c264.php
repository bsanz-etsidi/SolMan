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

/* gestionMantenimiento/pendientes.html.twig */
class __TwigTemplate_2ce6d7f24180853000596ad968bd053cd26d12a7ca12418ad669cb071b3c508c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/pendientes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/pendientes.html.twig"));

        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/pendientes.html.twig", 1);
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
        echo "<div class=\"container\">
  <div style=\"margin-top:50px\">
    <h1 class=\" mt-4 mb-3\">Solicitudes</<h1>
  </div>

  <div class=\"row\">


    <div class=\"col-md-12\">

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
              <h6>Solicitante</h6>
            </th>
            <th scope=\"col\">
              <h6>Trabajador asignado</h6>
            </th>
            <th scope=\"col\">
              <h6>Asignar</h6>
            </th>
            <th scope=\"col\">
              <h6>Generar Parte</h6>
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
            echo "          <tr>

            <td>
              <h5><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "
                </a></h5>
            </td>


            <td>
              <h6>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 53), "Y/m/d"), "html", null, true);
            echo "</h6>
            </td>


            <td>
              <h6>
                ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 59), "html", null, true);
            echo "
              </h6>
            </td>


            <td>
              <h6>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 65), "html", null, true);
            echo "</h6>
            </td>


            <td>
              ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["solicitud"], "trabajadores", [], "any", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
                // line 71
                echo "                ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 71), 2)) {
                    // line 72
                    echo "                  <h5><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 72), "html", null, true);
                    echo "</small></h5>
                ";
                } else {
                    // line 74
                    echo "                  <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarAsignacion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 74), "idTrabajador" => twig_get_attribute($this->env, $this->source, $context["trabajador"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                    echo "\"><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 74), "html", null, true);
                    echo "
                <small><i class=\"far fa-trash-alt\"></i></small></small></a></h5>
                ";
                }
                // line 77
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "            </td>

            <th scope=\"row\">
            ";
            // line 81
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 81), 2)) {
                // line 82
                echo "                <h5><a href=\"\">
                  </a></h5>
            ";
            } else {
                // line 85
                echo "            <h5><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\"><small><small><i class=\"fas fa-plus\"></small></i> Trabajador</small></a></h5>
            ";
            }
            // line 87
            echo "            </th>


            <th scope=\"row\">
              ";
            // line 91
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 91), 2)) {
                // line 92
                echo "                <h5><a href=\"\">
                  </a></h5>
              ";
            } else {
                // line 95
                echo "              <h6><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoParte", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 95)]), "html", null, true);
                echo "\">Nuevo Parte</a></h6>
              ";
            }
            // line 97
            echo "            </th>
            
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        </tbody>
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
        return "gestionMantenimiento/pendientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 101,  240 => 97,  234 => 95,  229 => 92,  227 => 91,  221 => 87,  215 => 85,  210 => 82,  208 => 81,  203 => 78,  197 => 77,  188 => 74,  182 => 72,  179 => 71,  175 => 70,  167 => 65,  158 => 59,  149 => 53,  138 => 47,  133 => 44,  129 => 43,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontal/base.html.twig' %}
{% block titulo %}Solicitudes{% endblock %}
{% block contenido %}
<div class=\"container\">
  <div style=\"margin-top:50px\">
    <h1 class=\" mt-4 mb-3\">Solicitudes</<h1>
  </div>

  <div class=\"row\">


    <div class=\"col-md-12\">

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
              <h6>Solicitante</h6>
            </th>
            <th scope=\"col\">
              <h6>Trabajador asignado</h6>
            </th>
            <th scope=\"col\">
              <h6>Asignar</h6>
            </th>
            <th scope=\"col\">
              <h6>Generar Parte</h6>
            </th>

          </tr>
        </thead>
        <tbody>
          {% for solicitud in solicitudes %}
          <tr>

            <td>
              <h5><a href=\"{{path('solicitud',{'id':solicitud.id})}}\">{{solicitud.id}}
                </a></h5>
            </td>


            <td>
              <h6>{{solicitud.fecha|date('Y/m/d')}}</h6>
            </td>


            <td>
              <h6>
                {{solicitud.estancia}}
              </h6>
            </td>


            <td>
              <h6>{{solicitud.solicitante}}</h6>
            </td>


            <td>
              {% for trabajador in solicitud.trabajadores %}
                {% if solicitud.estado==2 %}
                  <h5><small>{{trabajador.nombre}}</small></h5>
                {% else %}
                  <h5><a href=\"{{path('borrarAsignacion',{'id':solicitud.id, 'idTrabajador':trabajador.id})}}\"><small>{{trabajador.nombre}}
                <small><i class=\"far fa-trash-alt\"></i></small></small></a></h5>
                {% endif %}
              {% endfor %}
            </td>

            <th scope=\"row\">
            {% if solicitud.estado==2 %}
                <h5><a href=\"\">
                  </a></h5>
            {% else %}
            <h5><a href=\"{{ path('asignarSolicitud',{'id':solicitud.id}) }}\"><small><small><i class=\"fas fa-plus\"></small></i> Trabajador</small></a></h5>
            {% endif %}
            </th>


            <th scope=\"row\">
              {% if solicitud.estado==2 %}
                <h5><a href=\"\">
                  </a></h5>
              {% else %}
              <h6><a href=\"{{path('nuevoParte',{'id':solicitud.id})}}\">Nuevo Parte</a></h6>
              {% endif %}
            </th>
            
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
{% endblock %}
", "gestionMantenimiento/pendientes.html.twig", "C:\\symfony4\\SolMan\\templates\\gestionMantenimiento\\pendientes.html.twig");
    }
}
