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

/* Emails/NotificacionSolicitud.html.twig */
class __TwigTemplate_5718059622ee6dce8e6d908570d37da9bbcca4a344c048284c71013565e3dbad extends Template
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
        // line 3
        $this->displayBlock('contenido', $context, $blocks);
    }

    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<!-- Page Content -->
<div class=\"container\">
  <div style=\"margin-top:10px\">

    <!-- Page Heading/Breadcrumbs -->

    <!-- Portfolio Item Row -->
    <div id=\"content\">
      <div class=\"row\">

        <div class=\"col-lg-20\">
          <h4 class=\"mt-4 mb-3\">Ha recibido una nueva solicitud del servicio de Mantenimiento con identificador ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
        echo " </h4>
          <h4 class=\"my-3\">Solicitante: <small> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "solicitante", [], "any", false, false, false, 16), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Unidad de destino: <small> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "destino", [], "any", false, false, false, 17), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Fecha: <small>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "fecha", [], "any", false, false, false, 18), "Y/m/d"), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Extensión: <small>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "extension", [], "any", false, false, false, 19), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Email: <small>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Descripción Incidencia: <small>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "descripcionIncidencia", [], "any", false, false, false, 21), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Lugar Incidencia: <small>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "estancia", [], "any", false, false, false, 22), "html", null, true);
        echo "</small></h4>

        </div>
        <!-- /.row -->
      </div>
    </div>
  </div>
</div>
<div style=\"margin-top:90px\">
  <hr color=\"green\" size=1>
  <h4 class=\"my-3\"><small>Por favor, no responda a este mensaje. La dirección desde la que se envía no es atendida.</small></h4>
</div>

";
    }

    public function getTemplateName()
    {
        return "Emails/NotificacionSolicitud.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  45 => 4,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "Emails/NotificacionSolicitud.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\Emails\\NotificacionSolicitud.html.twig");
    }
}
