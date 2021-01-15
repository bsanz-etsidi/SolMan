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

/* Emails/NotificacionRevocacion.html.twig */
class __TwigTemplate_64ff87530eba1068d1205a9730faf7fdf0689f70901338743f6d0f9c7201f66b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificacionRevocacion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificacionRevocacion.html.twig"));

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
          <h4 class=\"mt-4 mb-3\">Ha sido revocada su asignación a la solicitud del servicio de Mantenimiento con identificador ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo " </h4>
          <h4 class=\"my-3\">Solicitante: <small> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 16, $this->source); })()), "solicitante", [], "any", false, false, false, 16), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Unidad de destino: <small> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 17, $this->source); })()), "destino", [], "any", false, false, false, 17), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Fecha: <small>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 18, $this->source); })()), "fecha", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Extensión: <small>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 19, $this->source); })()), "extension", [], "any", false, false, false, 19), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Email: <small>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Descripción Incidencia: <small>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 21, $this->source); })()), "descripcionIncidencia", [], "any", false, false, false, 21), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Lugar Incidencia: <small>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 22, $this->source); })()), "estancia", [], "any", false, false, false, 22), "html", null, true);
        echo "</small></h4>
        </div>
        <!-- /.row -->
      </div>
    </div>
  </div>
</div>
<div style=\"margin-top:90px\">
  <hr style=\"height:1px;border-width:0;color:#70AD47;background-color:#70AD47\">
  <h4 class=\"my-3\" style=\"color: red;\"><small>Por favor, no responda a este mensaje. La dirección desde la que se envía no es atendida.</small></h4>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Emails/NotificacionRevocacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 22,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  63 => 4,  44 => 3,);
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
          <h4 class=\"mt-4 mb-3\">Ha sido revocada su asignación a la solicitud del servicio de Mantenimiento con identificador {{solicitud.id}} </h4>
          <h4 class=\"my-3\">Solicitante: <small> {{solicitud.solicitante}}</small></h4>
          <h4 class=\"my-3\">Unidad de destino: <small> {{solicitud.destino}}</small></h4>
          <h4 class=\"my-3\">Fecha: <small>{{solicitud.fecha|date('d/m/Y')}}</small></h4>
          <h4 class=\"my-3\">Extensión: <small>{{solicitud.extension}}</small></h4>
          <h4 class=\"my-3\">Email: <small>{{solicitud.email}}</small></h4>
          <h4 class=\"my-3\">Descripción Incidencia: <small>{{solicitud.descripcionIncidencia}}</small></h4>
          <h4 class=\"my-3\">Lugar Incidencia: <small>{{solicitud.estancia}}</small></h4>
        </div>
        <!-- /.row -->
      </div>
    </div>
  </div>
</div>
<div style=\"margin-top:90px\">
  <hr style=\"height:1px;border-width:0;color:#70AD47;background-color:#70AD47\">
  <h4 class=\"my-3\" style=\"color: red;\"><small>Por favor, no responda a este mensaje. La dirección desde la que se envía no es atendida.</small></h4>
</div>

{% endblock %}", "Emails/NotificacionRevocacion.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\Emails\\NotificacionRevocacion.html.twig");
    }
}
