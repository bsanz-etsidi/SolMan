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
class __TwigTemplate_7682c966d76e488a2610337faac109c0acaad055384850d018820691ec65b8f4 extends Template
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
          <h4 class=\"mt-4 mb-3\">Desde la Subdirección de asuntos económicos y planificación de la ETSIDI le invitamos a valorar los trabajos realizados para solventar la incidencia notificada por ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "solicitud", [], "any", false, false, false, 14), "solicitante", [], "any", false, false, false, 14), "html", null, true);
        echo ": </h4>
          <h4 class=\"mt-4 mb-3\">Parte de Trabajo ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
        echo " </h4>

          <h4 class=\"my-3\">localización: <small> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "localizacion", [], "any", false, false, false, 17), "html", null, true);
        echo "</small></h4>

          <h4 class=\"my-3\">Fecha de inicio: <small>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "fechainicio", [], "any", false, false, false, 19), "Y/m/d"), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Fecha de finalización: <small>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "fechafin", [], "any", false, false, false, 20), "Y/m/d"), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">intervención realizada por:</h4>
          ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "solicitud", [], "any", false, false, false, 22), "trabajadores", [], "any", false, false, false, 22));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "descripcion", [], "any", false, false, false, 25), "html", null, true);
        echo "</small></h4>
          <h4 class=\"my-3\">Solicitud que genera el parte: <small>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "solicitud", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "</small></h4>


        </div>
        <h4 class=\"my-3\">Si desea realizar la valoración puede hacerlo en el siguiente enlace: </h4>
        <a href=\"http://138.100.103.25/rellenarSatisfaccion/";
        // line 31
        echo twig_escape_filter($this->env, ($context["parametro"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["emailcrypt"] ?? null), "html", null, true);
        echo "\">Rellenar formulario de satisfacción</a>
        <hr color=\"green\" size=1>
        <h4 class=\"my-3\"><small>Por favor, no responda a este mensaje. La dirección desde la que se envía no es atendida.</small></h4>



        <!-- /.row -->

      </div>
    </div>
  </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "Emails/NotificacionParte.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  98 => 26,  93 => 25,  84 => 23,  80 => 22,  75 => 20,  71 => 19,  66 => 17,  61 => 15,  57 => 14,  45 => 4,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "Emails/NotificacionParte.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\Emails\\NotificacionParte.html.twig");
    }
}
