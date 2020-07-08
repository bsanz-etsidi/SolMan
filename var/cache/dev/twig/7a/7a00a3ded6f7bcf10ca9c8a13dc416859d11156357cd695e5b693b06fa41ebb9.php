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

/* gestionMantenimiento/partes_old.html.twig */
class __TwigTemplate_42179387275691de283dd6c1ddb7dc137c5b0748f016fbcd29ab3d5a26a79fe6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/partes_old.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/partes_old.html.twig"));

        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/partes_old.html.twig", 1);
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
    <div class=\"container\">
      <div style=\"margin-top:50px\">
        <h1 class=\" mt-4 mb-3\">Partes de Trabajo</<h1>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">


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
                    <h6>Fecha inicio</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Fecha fin</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Solicitud</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Borrar</h6>
                  </th>

                </tr>
            </thead>
            <tbody>
              ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partes"]) || array_key_exists("partes", $context) ? $context["partes"] : (function () { throw new RuntimeError('Variable "partes" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            // line 50
            echo "              <tr>
                <th scope=\"row\">
                  <h5><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editarParte", ["id" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i>
                    </a></h5>
                </th>
                <th scope=\"row\">
                  <h5><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parte", ["id" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">
                      <h6>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "</h6>
                    </a></h5>
                </th>

                <td>
                  <h6>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "localizacion", [], "any", false, false, false, 62), "html", null, true);
            echo "</h6>
                </td>
                <td>
                  <h6>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "trabajador", [], "any", false, false, false, 65), "html", null, true);
            echo "</h6>
                </td>
                <td>
                  <h6>";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "fechainicio", [], "any", false, false, false, 68), "Y/m/d h:i"), "html", null, true);
            echo "</h6>
                </td>
                <td>
                  <h6>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "fechafin", [], "any", false, false, false, 71), "Y/m/d h:i"), "html", null, true);
            echo "</h6>
                </td>
                <td>
                  <h6>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["parte"], "solicitud", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true);
            echo "</h6>
                </td>
                <th scope=\"row\">
                  <h5><a href=\"#\" onclick=\"return controlBorrado('";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarParte", ["id" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 77), "html", null, true);
            echo "');\"><i class=\"fas fa-trash-alt\"></i>
                    </a></h5>
                </th>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "            </tbody>
          </table>
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

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/controlBorrado.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestionMantenimiento/partes_old.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 100,  241 => 99,  231 => 98,  206 => 82,  193 => 77,  187 => 74,  181 => 71,  175 => 68,  169 => 65,  163 => 62,  155 => 57,  151 => 56,  144 => 52,  140 => 50,  136 => 49,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontal/base.html.twig' %}
{% block titulo %}Partes de Trabajo{% endblock %}
{% block contenido %}
<div id=\"imagen\">
  <div id=\"content\">
    <div class=\"container\">
      <div style=\"margin-top:50px\">
        <h1 class=\" mt-4 mb-3\">Partes de Trabajo</<h1>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">


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
                    <h6>Fecha inicio</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Fecha fin</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Solicitud</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Borrar</h6>
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
                  <h6>{{parte.trabajador}}</h6>
                </td>
                <td>
                  <h6>{{parte.fechainicio|date('Y/m/d h:i')}}</h6>
                </td>
                <td>
                  <h6>{{parte.fechafin|date('Y/m/d h:i')}}</h6>
                </td>
                <td>
                  <h6>{{parte.solicitud.id}}</h6>
                </td>
                <th scope=\"row\">
                  <h5><a href=\"#\" onclick=\"return controlBorrado('{{path('borrarParte',{'id':parte.id})}}','{{parte.id}}');\"><i class=\"fas fa-trash-alt\"></i>
                    </a></h5>
                </th>
              </tr>
              {% endfor %}
            </tbody>
          </table>
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

{% endblock %}
", "gestionMantenimiento/partes_old.html.twig", "C:\\symfony4\\SolMan\\templates\\gestionMantenimiento\\partes_old.html.twig");
    }
}
