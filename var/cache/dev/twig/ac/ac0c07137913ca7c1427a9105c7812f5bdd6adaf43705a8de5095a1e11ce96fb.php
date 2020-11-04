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

/* gestionMantenimiento/parte.html.twig */
class __TwigTemplate_733617e0b0dc150a090185b7e052072d4a8400575d2663c6e472c81bb6dbf351 extends Template
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
        // line 2
        return "frontal/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/parte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/parte.html.twig"));

        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/parte.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        // line 5
        echo "Parte
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 10
        echo "<!-- Page Content -->
<div class=\"container\">
  <div style=\"margin-top:75px\">

    <!-- Page Heading/Breadcrumbs -->

    <!-- Portfolio Item Row -->
    <div id=\"content\">
      <div class=\"row\">

        <div class=\"col-lg-20\">
          <h1 class=\"mt-4 mb-3\">Parte de Trabajo ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo " </h1>

          <h3 class=\"my-3\">localización: <small> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 23, $this->source); })()), "localizacion", [], "any", false, false, false, 23), "html", null, true);
        echo "</small></h3>

          <h3 class=\"my-3\">Fecha de inicio: <small>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 25, $this->source); })()), "fechainicio", [], "any", false, false, false, 25), "Y/m/d"), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Fecha de finalización: <small>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 26, $this->source); })()), "fechafin", [], "any", false, false, false, 26), "Y/m/d"), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">intervención realizada por:</h3>
          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 28, $this->source); })()), "solicitud", [], "any", false, false, false, 28), "trabajadores", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
            // line 29
            echo "          <h3 class=\"my-3\"><small>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 29), "html", null, true);
            echo ":&nbsp</small></h3>
          ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trabajador"], "instrucciones", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["instruccion"]) {
                // line 31
                echo "          ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 31, $this->source); })()), "solicitud", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "          <h3 class=\"my-3\"><small>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspInstrucciones:&nbsp";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instruccion"], "descripcionInstruccion", [], "any", false, false, false, 32), "html", null, true);
                    echo "&nbsp</small></h3>
          ";
                }
                // line 34
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruccion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "          <h3 class=\"my-3\">Trabajos realizados: <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 36, $this->source); })()), "descripcion", [], "any", false, false, false, 36), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Solicitud que genera el parte: <small>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 37, $this->source); })()), "solicitud", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Solicitante de la intervención: <small>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 38, $this->source); })()), "solicitud", [], "any", false, false, false, 38), "solicitante", [], "any", false, false, false, 38), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Especialidades requeridas en la intervención:</h3>
          ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 40, $this->source); })()), "especialidades", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["especialidad"]) {
            // line 41
            echo "          <h3 class=\"my-3\"><small>&nbsp&nbsp";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["especialidad"], "tipo", [], "any", false, false, false, 41), "html", null, true);
            echo "&nbsp</small></h3>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['especialidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "


        </div>
        <!-- /.row -->

      </div>
    </div>
    <div id=\"editor\" style=\"margin-top:20px\"></div>

    <button id=\"cmd\">Generar PDF</button>


  </div>
  <div style=\"margin-bottom:75px\">
  </div>


</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "
<script>
  var doc = new jsPDF();
  var specialElementHandlers = {
    '#editor': function(element, renderer) {
      return true;
    }
  };

  \$('#cmd').click(function() {
    doc.fromHTML(\$('#content').html(), 15, 15, {
      'width': 170,
      'elementHandlers': specialElementHandlers
    });
    doc.save('Parte.pdf');
  });

  // This code is collected but useful, click below to jsfiddle link.
</script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestionMantenimiento/parte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 65,  214 => 64,  184 => 43,  175 => 41,  171 => 40,  166 => 38,  162 => 37,  157 => 36,  151 => 35,  145 => 34,  139 => 32,  136 => 31,  132 => 30,  127 => 29,  123 => 28,  118 => 26,  114 => 25,  109 => 23,  104 => 21,  91 => 10,  81 => 9,  70 => 5,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Plantilla de nuestra aplicación#}
{%extends 'frontal/base.html.twig'%}
{#TITULO#}
{% block titulo %}
Parte
{% endblock %}

{#Contenido#}
{% block contenido %}
<!-- Page Content -->
<div class=\"container\">
  <div style=\"margin-top:75px\">

    <!-- Page Heading/Breadcrumbs -->

    <!-- Portfolio Item Row -->
    <div id=\"content\">
      <div class=\"row\">

        <div class=\"col-lg-20\">
          <h1 class=\"mt-4 mb-3\">Parte de Trabajo {{parte.id}} </h1>

          <h3 class=\"my-3\">localización: <small> {{parte.localizacion}}</small></h3>

          <h3 class=\"my-3\">Fecha de inicio: <small>{{parte.fechainicio|date('Y/m/d')}}</small></h3>
          <h3 class=\"my-3\">Fecha de finalización: <small>{{parte.fechafin|date('Y/m/d')}}</small></h3>
          <h3 class=\"my-3\">intervención realizada por:</h3>
          {% for trabajador in parte.solicitud.trabajadores %}
          <h3 class=\"my-3\"><small>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{trabajador.nombre}}:&nbsp</small></h3>
          {% for instruccion in trabajador.instrucciones %}
          {% if instruccion.solicitud.id==parte.solicitud.id %}
          <h3 class=\"my-3\"><small>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspInstrucciones:&nbsp{{instruccion.descripcionInstruccion}}&nbsp</small></h3>
          {% endif %}
          {% endfor %}
          {% endfor %}
          <h3 class=\"my-3\">Trabajos realizados: <small>{{parte.descripcion}}</small></h3>
          <h3 class=\"my-3\">Solicitud que genera el parte: <small>{{parte.solicitud.id}}</small></h3>
          <h3 class=\"my-3\">Solicitante de la intervención: <small>{{parte.solicitud.solicitante}}</small></h3>
          <h3 class=\"my-3\">Especialidades requeridas en la intervención:</h3>
          {% for especialidad in parte.especialidades %}
          <h3 class=\"my-3\"><small>&nbsp&nbsp{{especialidad.tipo}}&nbsp</small></h3>
          {% endfor %}



        </div>
        <!-- /.row -->

      </div>
    </div>
    <div id=\"editor\" style=\"margin-top:20px\"></div>

    <button id=\"cmd\">Generar PDF</button>


  </div>
  <div style=\"margin-bottom:75px\">
  </div>


</div>

{% endblock %}
{% block javascripts %}

<script>
  var doc = new jsPDF();
  var specialElementHandlers = {
    '#editor': function(element, renderer) {
      return true;
    }
  };

  \$('#cmd').click(function() {
    doc.fromHTML(\$('#content').html(), 15, 15, {
      'width': 170,
      'elementHandlers': specialElementHandlers
    });
    doc.save('Parte.pdf');
  });

  // This code is collected but useful, click below to jsfiddle link.
</script>



{% endblock %}", "gestionMantenimiento/parte.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\parte.html.twig");
    }
}
