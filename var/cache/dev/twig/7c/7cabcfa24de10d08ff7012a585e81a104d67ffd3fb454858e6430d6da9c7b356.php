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
class __TwigTemplate_e12d83e9293f04ca0a989103d0e3a46775dd38c8301ef966e93653efb7457e1e extends Template
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
          <h2 class=\"mt-4 mb-3\">Desde la Subdirección de asuntos económicos y planificación de la ETSIDI le invitamos a valorar los trabajos realizados para solventar la incidencia notificada por ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 14, $this->source); })()), "solicitud", [], "any", false, false, false, 14), "solicitante", [], "any", false, false, false, 14), "html", null, true);
        echo ": </h2>
          <h2 class=\"mt-4 mb-3\">Parte de Trabajo ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo " </h2>

          <h3 class=\"my-3\">localización: <small> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 17, $this->source); })()), "localizacion", [], "any", false, false, false, 17), "html", null, true);
        echo "</small></h3>

          <h3 class=\"my-3\">Fecha de inicio: <small>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 19, $this->source); })()), "fechainicio", [], "any", false, false, false, 19), "Y/m/d"), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Fecha de finalización: <small>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 20, $this->source); })()), "fechafin", [], "any", false, false, false, 20), "Y/m/d"), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">intervención realizada por: <small>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 21, $this->source); })()), "trabajador", [], "any", false, false, false, 21), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Trabajos realizados: <small>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 22, $this->source); })()), "descripcion", [], "any", false, false, false, 22), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Solicitud que genera el parte: <small>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 23, $this->source); })()), "solicitud", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "</small></h3>


        </div>
        <h3 class=\"my-3\">Si desea realizar la valoración puede hacerlo en el siguiente enlace: http://localhost:8000/rellenarSatisfaccion/";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "</h3>


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
        return array (  112 => 27,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  89 => 19,  84 => 17,  79 => 15,  75 => 14,  63 => 4,  44 => 3,);
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
          <h2 class=\"mt-4 mb-3\">Desde la Subdirección de asuntos económicos y planificación de la ETSIDI le invitamos a valorar los trabajos realizados para solventar la incidencia notificada por {{parte.solicitud.solicitante}}: </h2>
          <h2 class=\"mt-4 mb-3\">Parte de Trabajo {{parte.id}} </h2>

          <h3 class=\"my-3\">localización: <small> {{parte.localizacion}}</small></h3>

          <h3 class=\"my-3\">Fecha de inicio: <small>{{parte.fechainicio|date('Y/m/d')}}</small></h3>
          <h3 class=\"my-3\">Fecha de finalización: <small>{{parte.fechafin|date('Y/m/d')}}</small></h3>
          <h3 class=\"my-3\">intervención realizada por: <small>{{parte.trabajador}}</small></h3>
          <h3 class=\"my-3\">Trabajos realizados: <small>{{parte.descripcion}}</small></h3>
          <h3 class=\"my-3\">Solicitud que genera el parte: <small>{{parte.solicitud.id}}</small></h3>


        </div>
        <h3 class=\"my-3\">Si desea realizar la valoración puede hacerlo en el siguiente enlace: http://localhost:8000/rellenarSatisfaccion/{{parte.id}}</h3>


        <!-- /.row -->

      </div>
    </div>
  </div>

</div>

{% endblock %}
", "Emails/NotificacionParte.html.twig", "C:\\symfony4\\SolMan\\templates\\Emails\\NotificacionParte.html.twig");
    }
}
