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

/* gestionMantenimiento/partes.html.twig */
class __TwigTemplate_fdc6359399e55b21c8fc5e4c139272d7025ef5a3a1fe3bfe40fb749c42e53a84 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/partes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/partes.html.twig"));

        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/partes.html.twig", 1);
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

        echo "Partes de Trabajo";
        
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
        echo "<div id=\"imagen\">
  <div id=\"content\">
    <div class=\"container-fluid\">
      <div style=\"margin-top:50px\">
        <h1 class=\" mt-4 mb-3\">Partes de Trabajo</<h1>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"table-responsive-lg\">

            <table class=\"table\">
              <thead class=\"thead-dark\">
                <small>
                  <tr>
                    <th scope=\"col\">
                      <h6>Editar</h6>
                    </th>

                    <th scope=\"col\">
                      <h6>Referencia</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>localización</h6>
                    </th>

                    <th scope=\"col\">
                      <h6>Trabajador</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Especialidades</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Fecha inicio</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Fecha fin</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Solicitud</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Eliminar</h6>
                    </th>

                  </tr>
              </thead>
              <tbody>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partes"]) || array_key_exists("partes", $context) ? $context["partes"] : (function () { throw new RuntimeError('Variable "partes" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            // line 53
            echo "                <tr>
                  <th scope=\"row\">
                    <h5><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editarParte", ["id" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i>
                      </a></h5>
                  </th>
                  <th scope=\"row\">
                    <h5><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parte", ["id" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">
                        <h6>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</h6>
                      </a></h5>
                  </th>

                  <td>
                    <h6>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "localizacion", [], "any", false, false, false, 65), "html", null, true);
            echo "</h6>
                  </td>
                  <td>
                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["parte"], "solicitud", [], "any", false, false, false, 68), "trabajadores", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
                // line 69
                echo "                    <h5><small>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 69), "html", null, true);
                echo "
                    </h5>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                  </td>
                  <td>
                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["parte"], "especialidades", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["especialidad"]) {
                // line 75
                echo "                    <h7><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarEspecialidad", ["especialidadId" => twig_get_attribute($this->env, $this->source, $context["especialidad"], "id", [], "any", false, false, false, 75), "parteId" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\"><small>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["especialidad"], "tipo", [], "any", false, false, false, 75), "html", null, true);
                echo "
                          <small><i class=\"far fa-trash-alt\"></i></small></small><br /></a>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['especialidad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                      <h7><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignarEspecialidad", ["parteId" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\"><small><small><i class=\"fas fa-plus\"></i></small>Especialidad</small></a></h7>
                  </td>
                  <td>
                    <h6>";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "fechainicio", [], "any", false, false, false, 81), "d/m/Y"), "html", null, true);
            echo "</h6>
                  </td>
                  <td>
                    <h6>";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "fechafin", [], "any", false, false, false, 84), "d/m/Y"), "html", null, true);
            echo "</h6>
                  </td>
                  <td>
                    <h6>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["parte"], "solicitud", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), "html", null, true);
            echo "</h6>
                  </td>
                  <td>
                    <h7><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarParte", ["id" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\">
                        <i class=\"far fa-trash-alt\"></i></a></h7>
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class=\"col-md-2\">
</div>

<div style=\"margin-bottom:200px\"></div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/controlBorrado.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestionMantenimiento/partes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 114,  278 => 113,  268 => 112,  242 => 95,  231 => 90,  225 => 87,  219 => 84,  213 => 81,  206 => 78,  194 => 75,  190 => 74,  186 => 72,  176 => 69,  172 => 68,  166 => 65,  158 => 60,  154 => 59,  147 => 55,  143 => 53,  139 => 52,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontal/base.html.twig' %}
{% block titulo %}Partes de Trabajo{% endblock %}
{% block contenido %}
<div id=\"imagen\">
  <div id=\"content\">
    <div class=\"container-fluid\">
      <div style=\"margin-top:50px\">
        <h1 class=\" mt-4 mb-3\">Partes de Trabajo</<h1>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"table-responsive-lg\">

            <table class=\"table\">
              <thead class=\"thead-dark\">
                <small>
                  <tr>
                    <th scope=\"col\">
                      <h6>Editar</h6>
                    </th>

                    <th scope=\"col\">
                      <h6>Referencia</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>localización</h6>
                    </th>

                    <th scope=\"col\">
                      <h6>Trabajador</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Especialidades</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Fecha inicio</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Fecha fin</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Solicitud</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Eliminar</h6>
                    </th>

                  </tr>
              </thead>
              <tbody>
                {% for parte in partes %}
                <tr>
                  <th scope=\"row\">
                    <h5><a href=\"{{path('editarParte',{'id':parte.id})}}\"><i class=\"fas fa-edit\"></i>
                      </a></h5>
                  </th>
                  <th scope=\"row\">
                    <h5><a href=\"{{path('parte',{'id':parte.id})}}\">
                        <h6>{{parte.id}}</h6>
                      </a></h5>
                  </th>

                  <td>
                    <h6>{{parte.localizacion}}</h6>
                  </td>
                  <td>
                    {% for trabajador in parte.solicitud.trabajadores %}
                    <h5><small>{{trabajador.nombre}}
                    </h5>
                    {% endfor %}
                  </td>
                  <td>
                    {% for especialidad in parte.especialidades %}
                    <h7><a href=\"{{path('borrarEspecialidad',{'especialidadId':especialidad.id, 'parteId':parte.id})}}\"><small>{{especialidad.tipo}}
                          <small><i class=\"far fa-trash-alt\"></i></small></small><br /></a>
                      {% endfor %}
                      <h7><a href=\"{{ path('asignarEspecialidad',{'parteId':parte.id}) }}\"><small><small><i class=\"fas fa-plus\"></i></small>Especialidad</small></a></h7>
                  </td>
                  <td>
                    <h6>{{parte.fechainicio|date('d/m/Y')}}</h6>
                  </td>
                  <td>
                    <h6>{{parte.fechafin|date('d/m/Y')}}</h6>
                  </td>
                  <td>
                    <h6>{{parte.solicitud.id}}</h6>
                  </td>
                  <td>
                    <h7><a href=\"{{path('borrarParte',{'id':parte.id})}}\">
                        <i class=\"far fa-trash-alt\"></i></a></h7>
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class=\"col-md-2\">
</div>

<div style=\"margin-bottom:200px\"></div>
</div>
{% endblock %}
{% block javascripts %}
<script src=\"{{asset('js/sweetalert.min.js')}}\"></script>
<script src=\"{{asset('js/controlBorrado.js')}}\"></script>

{% endblock %}", "gestionMantenimiento/partes.html.twig", "C:\\symfony4LOCAL\\SolMan\\templates\\gestionMantenimiento\\partes.html.twig");
    }
}
