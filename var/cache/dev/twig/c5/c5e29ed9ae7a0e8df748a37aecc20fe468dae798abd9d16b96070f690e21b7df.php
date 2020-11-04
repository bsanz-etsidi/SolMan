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

/* gestionMantenimiento/solicitud.html.twig */
class __TwigTemplate_02110abe69302ec1457d000cee29fb36fc8dc28faa69ba227a8534b3e57d0f1c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/solicitud.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/solicitud.html.twig"));

        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/solicitud.html.twig", 2);
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
        echo "Solicitud
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
          <h1 class=\"mt-4 mb-3\">Solicitud ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo " </h1>
          <h3 class=\"my-3\">Solicitante: <small> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 22, $this->source); })()), "solicitante", [], "any", false, false, false, 22), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Unidad de destino: <small> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 23, $this->source); })()), "destino", [], "any", false, false, false, 23), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Fecha: <small>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 24, $this->source); })()), "fecha", [], "any", false, false, false, 24), "Y/m/d"), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Extensión: <small>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 25, $this->source); })()), "extension", [], "any", false, false, false, 25), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Email: <small>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Descripción Incidencia: <small>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 27, $this->source); })()), "descripcionIncidencia", [], "any", false, false, false, 27), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Lugar Incidencia: <small>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 28, $this->source); })()), "estancia", [], "any", false, false, false, 28), "html", null, true);
        echo "</small></h3>
          ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 29, $this->source); })()), "trabajadores", [], "any", false, false, false, 29)) {
            // line 30
            echo "          <h3 class=\"my-3\">Solicitud asignada a:</h3>
          ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 31, $this->source); })()), "trabajadores", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
                // line 32
                echo "          <h3 class=\"my-3\"><small>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 32), "html", null, true);
                echo "</small></h3>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "          ";
        } else {
            // line 35
            echo "          <h3 class=\"my-3\">Solicitud pendiente de ser asignada</h3>
          ";
        }
        // line 37
        echo "          ";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 37, $this->source); })()), "estado", [], "any", false, false, false, 37), 2)) {
            // line 38
            echo "          <h3 class=\"my-3\"> Solicitud despachada</h3>
          ";
        }
        // line 40
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 40, $this->source); })()), "trabajadores", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
            // line 41
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trabajador"], "instrucciones", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["instruccion"]) {
                // line 42
                echo "          ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42))) {
                    // line 43
                    echo "          <h3 class=\"my-3\">Instrucciones para ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 43), "html", null, true);
                    echo ": <small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instruccion"], "descripcionInstruccion", [], "any", false, false, false, 43), "html", null, true);
                    echo "</small></h3>
          ";
                }
                // line 45
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruccion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        </div>
        <!-- /.row -->

      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-20\">
        <button id=\"cmd\">Generar PDF</button>
      </div>
      <div class=\"col-lg-20\">
      </div>


      <div style=\"margin-bottom:75px\">
      </div>
    </div>

  </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
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
    doc.save('Solicitud.pdf');
  });

  // This code is collected but useful, click below to jsfiddle link.
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestionMantenimiento/solicitud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 72,  234 => 71,  201 => 47,  195 => 46,  189 => 45,  181 => 43,  178 => 42,  173 => 41,  168 => 40,  164 => 38,  161 => 37,  157 => 35,  154 => 34,  145 => 32,  141 => 31,  138 => 30,  136 => 29,  132 => 28,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  112 => 23,  108 => 22,  104 => 21,  91 => 10,  81 => 9,  70 => 5,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Plantilla de nuestra aplicación#}
{%extends 'frontal/base.html.twig'%}
{#TITULO#}
{% block titulo %}
Solicitud
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
          <h1 class=\"mt-4 mb-3\">Solicitud {{solicitud.id}} </h1>
          <h3 class=\"my-3\">Solicitante: <small> {{solicitud.solicitante}}</small></h3>
          <h3 class=\"my-3\">Unidad de destino: <small> {{solicitud.destino}}</small></h3>
          <h3 class=\"my-3\">Fecha: <small>{{solicitud.fecha|date('Y/m/d')}}</small></h3>
          <h3 class=\"my-3\">Extensión: <small>{{solicitud.extension}}</small></h3>
          <h3 class=\"my-3\">Email: <small>{{solicitud.email}}</small></h3>
          <h3 class=\"my-3\">Descripción Incidencia: <small>{{solicitud.descripcionIncidencia}}</small></h3>
          <h3 class=\"my-3\">Lugar Incidencia: <small>{{solicitud.estancia}}</small></h3>
          {% if solicitud.trabajadores %}
          <h3 class=\"my-3\">Solicitud asignada a:</h3>
          {% for trabajador in solicitud.trabajadores %}
          <h3 class=\"my-3\"><small>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{trabajador.nombre}}</small></h3>
          {% endfor %}
          {% else %}
          <h3 class=\"my-3\">Solicitud pendiente de ser asignada</h3>
          {% endif %}
          {% if solicitud.estado==2 %}
          <h3 class=\"my-3\"> Solicitud despachada</h3>
          {% endif %}
          {% for trabajador in solicitud.trabajadores %}
          {% for instruccion in trabajador.instrucciones %}
          {% if instruccion.solicitud.id==solicitud.id %}
          <h3 class=\"my-3\">Instrucciones para {{trabajador.nombre}}: <small>{{instruccion.descripcionInstruccion}}</small></h3>
          {% endif %}
          {% endfor %}
          {% endfor %}

        </div>
        <!-- /.row -->

      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-20\">
        <button id=\"cmd\">Generar PDF</button>
      </div>
      <div class=\"col-lg-20\">
      </div>


      <div style=\"margin-bottom:75px\">
      </div>
    </div>

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
    doc.save('Solicitud.pdf');
  });

  // This code is collected but useful, click below to jsfiddle link.
</script>
{% endblock %}
", "gestionMantenimiento/solicitud.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\solicitud.html.twig");
    }
}
