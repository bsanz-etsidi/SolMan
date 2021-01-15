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
          <h4 class=\"mt-4 mb-3\">Desde la Subdirección de asuntos económicos y planificación de la ETSIDI le invitamos a valorar los trabajos realizados para solventar la incidencia ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 14, $this->source); })()), "solicitud", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "html", null, true);
        echo " notificada por
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 15, $this->source); })()), "solicitud", [], "any", false, false, false, 15), "solicitante", [], "any", false, false, false, 15), "html", null, true);
        echo ": </h4>
          <h4 class=\"my-3\">Incidencia notificada: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 16, $this->source); })()), "solicitud", [], "any", false, false, false, 16), "descripcionIncidencia", [], "any", false, false, false, 16), "html", null, true);
        echo " </h4>
          <h4 class=\"my-3\">Localización: ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 17, $this->source); })()), "solicitud", [], "any", false, false, false, 17), "estancia", [], "any", false, false, false, 17), "html", null, true);
        echo " </h4>
          <h4 class=\"my-3\">Fecha de la incidencia: ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 18, $this->source); })()), "solicitud", [], "any", false, false, false, 18), "fecha", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
        echo " </h4>

          <h3 class=\"mt-4 mb-3\">PARTE DE TRABAJO: </h3>

          <h4 class=\"my-3\">localización de los trabajos realizados: <small> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 22, $this->source); })()), "localizacion", [], "any", false, false, false, 22), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Fecha de inicio de los trabajos: <small>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 23, $this->source); })()), "fechainicio", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Fecha de finalización de los trabajos: <small>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 24, $this->source); })()), "fechafin", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">intervención realizada por:</h4>
          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 26, $this->source); })()), "solicitud", [], "any", false, false, false, 26), "trabajadores", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
            // line 27
            echo "          <h4 class=\"my-3\"><small>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 27), "html", null, true);
            echo "</small></h4>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "          <h4 class=\"my-3\">Trabajos realizados: <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 29, $this->source); })()), "descripcion", [], "any", false, false, false, 29), "html", null, true);
        echo "</small></h4>

        </div>
        <h4 class=\"my-3\">Si desea valorar los trabajos realizados puede hacerlo en el siguiente enlace: </h4>
        <a href=\"https://localhost:8000/rellenarSatisfaccion/";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["idcrypt"]) || array_key_exists("idcrypt", $context) ? $context["idcrypt"] : (function () { throw new RuntimeError('Variable "idcrypt" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\">Rellenar formulario de satisfacción</a>
        <hr style=\"height:1px;border-width:0;color:#70AD47;background-color:#70AD47\">
        <h4 class=\"my-3\" style=\"color: red;\"><small>Por favor, no responda a este mensaje. La dirección desde la que se envía no es atendida.</small></h4>
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
        return array (  132 => 33,  124 => 29,  115 => 27,  111 => 26,  106 => 24,  102 => 23,  98 => 22,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  63 => 4,  44 => 3,);
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
          <h4 class=\"mt-4 mb-3\">Desde la Subdirección de asuntos económicos y planificación de la ETSIDI le invitamos a valorar los trabajos realizados para solventar la incidencia {{parte.solicitud.id}} notificada por
            {{parte.solicitud.solicitante}}: </h4>
          <h4 class=\"my-3\">Incidencia notificada: {{parte.solicitud.descripcionIncidencia}} </h4>
          <h4 class=\"my-3\">Localización: {{parte.solicitud.estancia}} </h4>
          <h4 class=\"my-3\">Fecha de la incidencia: {{parte.solicitud.fecha|date('d/m/Y')}} </h4>

          <h3 class=\"mt-4 mb-3\">PARTE DE TRABAJO: </h3>

          <h4 class=\"my-3\">localización de los trabajos realizados: <small> {{parte.localizacion}}</small></h4>
          <h4 class=\"my-3\">Fecha de inicio de los trabajos: <small>{{parte.fechainicio|date('d/m/Y')}}</small></h4>
          <h4 class=\"my-3\">Fecha de finalización de los trabajos: <small>{{parte.fechafin|date('d/m/Y')}}</small></h4>
          <h4 class=\"my-3\">intervención realizada por:</h4>
          {% for trabajador in parte.solicitud.trabajadores %}
          <h4 class=\"my-3\"><small>{{trabajador.nombre}}</small></h4>
          {% endfor %}
          <h4 class=\"my-3\">Trabajos realizados: <small>{{parte.descripcion}}</small></h4>

        </div>
        <h4 class=\"my-3\">Si desea valorar los trabajos realizados puede hacerlo en el siguiente enlace: </h4>
        <a href=\"https://localhost:8000/rellenarSatisfaccion/{{idcrypt}}/{{email}}\">Rellenar formulario de satisfacción</a>
        <hr style=\"height:1px;border-width:0;color:#70AD47;background-color:#70AD47\">
        <h4 class=\"my-3\" style=\"color: red;\"><small>Por favor, no responda a este mensaje. La dirección desde la que se envía no es atendida.</small></h4>
      </div>
    </div>
  </div>
</div>

{% endblock %}", "Emails/NotificacionParte.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\Emails\\NotificacionParte.html.twig");
    }
}
