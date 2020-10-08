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

/* gestionMantenimiento/suspendidas.html.twig */
class __TwigTemplate_3367357829bcc5b030c1b59fe40407d8af879d8cae291c5b67cf327429c08299 extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontal/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/suspendidas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Solicitudes";
    }

    // line 3
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container\">
  <div style=\"margin-top:50px\">
    <h1 class=\" mt-4 mb-3\">Solicitudes</<h1>
  </div>

  <div class=\"row\">


    <div class=\"col-md-12\">

      <table class=\"table\">
        <thead class=\"thead-dark\">
          <tr>

            <th scope=\"col\">
              <h6>Id</h6>
            </th>
            <th scope=\"col\">
              <h6>Fecha</h6>
            </th>
            <th scope=\"col\">
              <h6>Estancia</h6>
            </th>
            <th scope=\"col\">
              <h6>Solicitante</h6>
            </th>
            <th scope=\"col\">
              <h6>Destino</h6>
            </th>
            <th scope=\"col\">
              <h6>Extensión</h6>
            </th>
            <th scope=\"col\">
              <h6>Incidencia</h6>
            </th>
            <th scope=\"col\">
              <h6>Motivo de <br /> suspensión</h6>
            </th>
            <th scope=\"col\">
              <h6>Motivo de <br /> Reactivar</h6>
            </th>
          </tr>
        </thead>
        <tbody>

          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["solicitudes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 50
            echo "
          <tr>

            <td>
              <h5><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "
                </a></h5>
            </td>


            <td>
              <h6><small>";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true);
            echo "</small></h6>
            </td>


            <td>
              <h6>
                <small>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 66), "html", null, true);
            echo "</small>
              </h6>
            </td>


            <td>
              <h6><small>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 72), "html", null, true);
            echo "</small></h6>
            </td>

            <td>
              <h6><small>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "destino", [], "any", false, false, false, 76), "html", null, true);
            echo "</small></h6>
            </td>

            <td>
              <h6><small>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "extension", [], "any", false, false, false, 80), "html", null, true);
            echo "</small></h6>
            </td>

            <td>
              <h6><small>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "descripcionIncidencia", [], "any", false, false, false, 84), "html", null, true);
            echo "</small></h6>
            </td>

            <td>
              <h6><small>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "causaAnulacion", [], "any", false, false, false, 88), "html", null, true);
            echo "</small></h6>
            </td>

            <td>
              <h7><a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reactivarSolicitudSuspendida", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\"><small>Reactivar</small></a></h7>
            </td>




            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
        </tbody>
      </table>
    </div>
    <div class=\"col-md-2\">
    </div>
  </div>
</div>
<div style=\"margin-bottom:200px\">
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "gestionMantenimiento/suspendidas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 99,  179 => 92,  172 => 88,  165 => 84,  158 => 80,  151 => 76,  144 => 72,  135 => 66,  126 => 60,  115 => 54,  109 => 50,  105 => 49,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gestionMantenimiento/suspendidas.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\suspendidas.html.twig");
    }
}
