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

/* Emails/NotificacionRegistroSolicitud.html.twig */
class __TwigTemplate_0537a364ec7bf6583dbbde468ea3fbdd4ed4a201739ad355b791e3c77de1eb77 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificacionRegistroSolicitud.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/NotificacionRegistroSolicitud.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

  <body>
    ";
        // line 6
        echo "    ";
        $this->displayBlock('contenido', $context, $blocks);
        // line 33
        echo "  </body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 7
        echo "
    <div class=\"container\">
      <div style=\"margin-top:10px\">
        <div id=\"content\">
          <div class=\"row\">
            <div class=\"col-lg-20\">
              <h4 class=\"mt-4 mb-3\">Usted ha realizado una solicitud al servicio de Mantenimiento con identificador ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo " </h4>
              <h4 class=\"my-3\">Solicitante: <small> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 14, $this->source); })()), "solicitante", [], "any", false, false, false, 14), "html", null, true);
        echo "</small></h4>
              <h4 class=\"my-3\">Unidad de destino: <small> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 15, $this->source); })()), "destino", [], "any", false, false, false, 15), "html", null, true);
        echo "</small></h4>
              <h4 class=\"my-3\">Fecha: <small>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 16, $this->source); })()), "fecha", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
        echo "</small></h4>
              <h4 class=\"my-3\">Extensión: <small>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 17, $this->source); })()), "extension", [], "any", false, false, false, 17), "html", null, true);
        echo "</small></h4>
              <h4 class=\"my-3\">Email: <small>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), "html", null, true);
        echo "</small></h4>
              <h4 class=\"my-3\">Descripción Incidencia: <small>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 19, $this->source); })()), "descripcionIncidencia", [], "any", false, false, false, 19), "html", null, true);
        echo "</small></h4>
              <h4 class=\"my-3\">Lugar Incidencia: <small>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 20, $this->source); })()), "estancia", [], "any", false, false, false, 20), "html", null, true);
        echo "</small></h4>
              <h4 class=\"my-3\">Si desea consultar la evolución de los trabajos puede hacerlo en el siguiente enlace: </h4>
              <a href=\"https://localhost:8000/cronograma/";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["idcrypt"]) || array_key_exists("idcrypt", $context) ? $context["idcrypt"] : (function () { throw new RuntimeError('Variable "idcrypt" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">Estado de los trabajos</a>
            </div>
          </div>
        </div>
      </div>
      <div style=\"margin-top:90px;\">
        <hr style=\"height:1px;border-width:0;color:#70AD47;background-color:#70AD47\">
        <h4 class=\"my-3\" style=\"color: red;\"><small>Por favor, no responda a este mensaje. La dirección desde la que se envía no es atendida.</small></h4>
      </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Emails/NotificacionRegistroSolicitud.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 22,  111 => 20,  107 => 19,  103 => 18,  99 => 17,  95 => 16,  91 => 15,  87 => 14,  83 => 13,  75 => 7,  65 => 6,  53 => 33,  50 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

  <body>
    {#Contenido#}
    {% block contenido %}

    <div class=\"container\">
      <div style=\"margin-top:10px\">
        <div id=\"content\">
          <div class=\"row\">
            <div class=\"col-lg-20\">
              <h4 class=\"mt-4 mb-3\">Usted ha realizado una solicitud al servicio de Mantenimiento con identificador {{solicitud.id}} </h4>
              <h4 class=\"my-3\">Solicitante: <small> {{solicitud.solicitante}}</small></h4>
              <h4 class=\"my-3\">Unidad de destino: <small> {{solicitud.destino}}</small></h4>
              <h4 class=\"my-3\">Fecha: <small>{{solicitud.fecha|date('d/m/Y')}}</small></h4>
              <h4 class=\"my-3\">Extensión: <small>{{solicitud.extension}}</small></h4>
              <h4 class=\"my-3\">Email: <small>{{solicitud.email}}</small></h4>
              <h4 class=\"my-3\">Descripción Incidencia: <small>{{solicitud.descripcionIncidencia}}</small></h4>
              <h4 class=\"my-3\">Lugar Incidencia: <small>{{solicitud.estancia}}</small></h4>
              <h4 class=\"my-3\">Si desea consultar la evolución de los trabajos puede hacerlo en el siguiente enlace: </h4>
              <a href=\"https://localhost:8000/cronograma/{{idcrypt}}\">Estado de los trabajos</a>
            </div>
          </div>
        </div>
      </div>
      <div style=\"margin-top:90px;\">
        <hr style=\"height:1px;border-width:0;color:#70AD47;background-color:#70AD47\">
        <h4 class=\"my-3\" style=\"color: red;\"><small>Por favor, no responda a este mensaje. La dirección desde la que se envía no es atendida.</small></h4>
      </div>
    </div>
    {% endblock %}
  </body>

</html>", "Emails/NotificacionRegistroSolicitud.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\Emails\\NotificacionRegistroSolicitud.html.twig");
    }
}
