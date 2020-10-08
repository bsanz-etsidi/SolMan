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

/* Emails/NotificacionSuspensionSolicitud.html.twig */
class __TwigTemplate_845b3d75ef62f84c38672db2ff4031560113c839a1a9496f88b2be5563be3038 extends Template
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

          <h2 class=\"mt-4 mb-3\">Notificación de suspensión de la solicitud: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true);
        echo " </h2>
          <h4 class=\"my-3\"> El servicio de mantenimiento de la ETSIDI le comunica la suspensión temporal de su solicitud formulada con fecha ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "fecha", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
        echo " </h4>
          <h4 class=\"my-3\">
            <pre>     </pre>Descripción Incidencia: <small>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "descripcionIncidencia", [], "any", false, false, false, 19), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">
            <pre></pre>Lugar Incidencia: <small>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "estancia", [], "any", false, false, false, 21), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">
            <pre></pre>Motivos de la suspensión: <small>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "causa", [], "any", false, false, false, 23), "html", null, true);
        echo "</small></h4>
          <h4>
            <pre>     </pre>Cuando se resuelva el motivo que origina este retraso en abordar su solicitud se le notificará.</h4>
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
        return "Emails/NotificacionSuspensionSolicitud.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  73 => 21,  68 => 19,  63 => 17,  59 => 16,  45 => 4,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "Emails/NotificacionSuspensionSolicitud.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\Emails\\NotificacionSuspensionSolicitud.html.twig");
    }
}
