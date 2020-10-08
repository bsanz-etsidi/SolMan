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

/* Emails/NotificacionParte.html.twig */
class __TwigTemplate_3e97f22edd0170593b21b547f74a958dbd6651c6292fb238c340afd123e7a728 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'contenido' => [$this, 'block_contenido'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificacionParte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificacionParte.html.twig"));

        // line 3
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<!-- Page Content -->
<div class=\"container\">
  <div style=\"margin-top:10px\">

    <!-- Page Heading/Breadcrumbs -->

    <!-- Portfolio Item Row -->
    <div id=\"content\">
      <div class=\"row\">
        <div class=\"col-lg-20\">
          <h4 class=\"mt-4 mb-3\">Desde la Subdirección de asuntos económicos y planificación de la ETSIDI le invitamos a valorar los trabajos realizados para solventar la incidencia notificada por ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 14, $this->source); })()), "solicitud", [], "any", false, false, false, 14), "solicitante", [], "any", false, false, false, 14), "html", null, true);
        echo ": </h4>
          <h4 class=\"mt-4 mb-3\">Parte de Trabajo ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo " </h4>

          <h4 class=\"my-3\">localización: <small> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 17, $this->source); })()), "localizacion", [], "any", false, false, false, 17), "html", null, true);
        echo "</small></h4>

          <h4 class=\"my-3\">Fecha de inicio: <small>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 19, $this->source); })()), "fechainicio", [], "any", false, false, false, 19), "Y/m/d"), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Fecha de finalización: <small>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 20, $this->source); })()), "fechafin", [], "any", false, false, false, 20), "Y/m/d"), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">intervención realizada por:</h4>
          ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 22, $this->source); })()), "solicitud", [], "any", false, false, false, 22), "trabajadores", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
            // line 23
            echo "          <h4 class=\"my-3\"><small>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 23), "html", null, true);
            echo "</small></h4>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "          <h4 class=\"my-3\">Trabajos realizados: <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 25, $this->source); })()), "descripcion", [], "any", false, false, false, 25), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Solicitud que genera el parte: <small>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 26, $this->source); })()), "solicitud", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "</small></h4>


        </div>
        <h4 class=\"my-3\">Si desea realizar la valoración puede hacerlo en el siguiente enlace: </h4>
        <a href=\"localhost:8000/rellenarSatisfaccion/";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["parametro"]) || array_key_exists("parametro", $context) ? $context["parametro"] : (function () { throw new RuntimeError('Variable "parametro" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["emailcrypt"]) || array_key_exists("emailcrypt", $context) ? $context["emailcrypt"] : (function () { throw new RuntimeError('Variable "emailcrypt" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\">Rellenar formulario de satisfacción</a>
        <hr color=\"green\" size=1>
        <h4 class=\"my-3\"><small>Por favor, no responda a este mensaje. La dirección desde la que se envía no es atendida.</small></h4>



        <!-- /.row -->

      </div>
    </div>
  </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Emails/NotificacionParte.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  116 => 26,  111 => 25,  102 => 23,  98 => 22,  93 => 20,  89 => 19,  84 => 17,  79 => 15,  75 => 14,  63 => 4,  44 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# Plantilla de nuestra aplicación#}
{#Contenido#}
{% block contenido %}
<!-- Page Content -->
<div class=\"container\">
  <div style=\"margin-top:10px\">

    <!-- Page Heading/Breadcrumbs -->

    <!-- Portfolio Item Row -->
    <div id=\"content\">
      <div class=\"row\">
        <div class=\"col-lg-20\">
          <h4 class=\"mt-4 mb-3\">Desde la Subdirección de asuntos económicos y planificación de la ETSIDI le invitamos a valorar los trabajos realizados para solventar la incidencia notificada por {{parte.solicitud.solicitante}}: </h4>
          <h4 class=\"mt-4 mb-3\">Parte de Trabajo {{parte.id}} </h4>

          <h4 class=\"my-3\">localización: <small> {{parte.localizacion}}</small></h4>

          <h4 class=\"my-3\">Fecha de inicio: <small>{{parte.fechainicio|date('Y/m/d')}}</small></h4>
          <h4 class=\"my-3\">Fecha de finalización: <small>{{parte.fechafin|date('Y/m/d')}}</small></h4>
          <h4 class=\"my-3\">intervención realizada por:</h4>
          {% for trabajador in parte.solicitud.trabajadores %}
          <h4 class=\"my-3\"><small>{{trabajador.nombre}}</small></h4>
          {% endfor %}
          <h4 class=\"my-3\">Trabajos realizados: <small>{{parte.descripcion}}</small></h4>
          <h4 class=\"my-3\">Solicitud que genera el parte: <small>{{parte.solicitud.id}}</small></h4>


        </div>
        <h4 class=\"my-3\">Si desea realizar la valoración puede hacerlo en el siguiente enlace: </h4>
        <a href=\"localhost:8000/rellenarSatisfaccion/{{parametro}}/{{emailcrypt}}\">Rellenar formulario de satisfacción</a>
        <hr color=\"green\" size=1>
        <h4 class=\"my-3\"><small>Por favor, no responda a este mensaje. La dirección desde la que se envía no es atendida.</small></h4>



        <!-- /.row -->

      </div>
    </div>
  </div>

</div>

{% endblock %}", "Emails/NotificacionParte.html.twig", "C:\\symfony4LOCAL\\SolMan\\templates\\Emails\\NotificacionParte.html.twig");
    }
}
