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

/* Emails/NotificacionReactivacionAnulada.html.twig */
class __TwigTemplate_c6f06281da93d62606eab1e1a71f51ff97f6e142f8ce9cb80f6f07152c2af5d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificacionReactivacionAnulada.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificacionReactivacionAnulada.html.twig"));

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

          <h2 class=\"mt-4 mb-3\">Notificación de la reactivación de la solicitud: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo " </h2>
          <h4 class=\"my-3\"> El servicio de mantenimiento de la ETSIDI le comunica la reactivación de su solicitud formulada con fecha ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 17, $this->source); })()), "fecha", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
        echo "</h4>
          <h4 class=\"my-3\">
            <pre>     </pre>Descripción Incidencia: <small>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 19, $this->source); })()), "descripcionIncidencia", [], "any", false, false, false, 19), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">
            <pre></pre>Lugar Incidencia: <small>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 21, $this->source); })()), "estancia", [], "any", false, false, false, 21), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">
            <pre></pre>Los motivos que causaron la anulación ya se han resuelto. Le seguiremos informando sobre la evolución de los trabajos para ateneder su solicitud.</h4>

        </div>
        <!-- /.row -->
      </div>
    </div>
  </div>
</div>
<div style=\"margin-top:100px\">
  <hr style=\"height:1px;border-width:0;color:#70AD47;background-color:#70AD47\">
  <h4 class=\"my-3\" style=\"color: red;\"><small>Por favor, no responda a este mensaje. La dirección desde la que se envía no es atendida.</small></h4>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Emails/NotificacionReactivacionAnulada.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 21,  86 => 19,  81 => 17,  77 => 16,  63 => 4,  44 => 3,);
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

          <h2 class=\"mt-4 mb-3\">Notificación de la reactivación de la solicitud: {{solicitud.id}} </h2>
          <h4 class=\"my-3\"> El servicio de mantenimiento de la ETSIDI le comunica la reactivación de su solicitud formulada con fecha {{solicitud.fecha|date('d/m/Y')}}</h4>
          <h4 class=\"my-3\">
            <pre>     </pre>Descripción Incidencia: <small>{{solicitud.descripcionIncidencia}}</small></h4>
          <h4 class=\"my-3\">
            <pre></pre>Lugar Incidencia: <small>{{solicitud.estancia}}</small></h4>
          <h4 class=\"my-3\">
            <pre></pre>Los motivos que causaron la anulación ya se han resuelto. Le seguiremos informando sobre la evolución de los trabajos para ateneder su solicitud.</h4>

        </div>
        <!-- /.row -->
      </div>
    </div>
  </div>
</div>
<div style=\"margin-top:100px\">
  <hr style=\"height:1px;border-width:0;color:#70AD47;background-color:#70AD47\">
  <h4 class=\"my-3\" style=\"color: red;\"><small>Por favor, no responda a este mensaje. La dirección desde la que se envía no es atendida.</small></h4>
</div>

{% endblock %}", "Emails/NotificacionReactivacionAnulada.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\Emails\\NotificacionReactivacionAnulada.html.twig");
    }
}
