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

/* gestionMantenimiento/partes.html.twig */
class __TwigTemplate_9e2a0ad36179a424967c334ce5ced7189eb02b8c955cf8dde06f852dfb6249dc extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/partes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Partes de Trabajo";
    }

    // line 3
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div id=\"imagen\">
  <div id=\"content\">
    <div class=\"container-fluid\">
      <div style=\"margin-top:50px\">
        <h1 class=\" mt-4 mb-3\">Partes de Trabajo</<h1>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"table-responsive-lg\">

            <table class=\"table\">
              <thead class=\"thead-dark\">
                <small>
                  <tr>
                    <th scope=\"col\">
                      <h6>Editar</h6>
                    </th>

                    <th scope=\"col\">
                      <h6>Referencia</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>localización</h6>
                    </th>

                    <th scope=\"col\">
                      <h6>Trabajador</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Especialidades</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Fecha inicio</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Fecha fin</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Solicitud</h6>
                    </th>
                    <th scope=\"col\">
                      <h6>Eliminar</h6>
                    </th>

                  </tr>
              </thead>
              <tbody>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            // line 53
            echo "                <tr>
                  <th scope=\"row\">
                    <h5><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editarParte", ["id" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i>
                      </a></h5>
                  </th>
                  <th scope=\"row\">
                    <h5><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parte", ["id" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">
                        <h6>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</h6>
                      </a></h5>
                  </th>

                  <td>
                    <h6>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "localizacion", [], "any", false, false, false, 65), "html", null, true);
            echo "</h6>
                  </td>
                  <td>
                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["parte"], "solicitud", [], "any", false, false, false, 68), "trabajadores", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
                // line 69
                echo "                    <h5><small>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 69), "html", null, true);
                echo "
                    </h5>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                  </td>
                  <td>
                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["parte"], "especialidades", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["especialidad"]) {
                // line 75
                echo "                    <h7><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarEspecialidad", ["especialidadId" => twig_get_attribute($this->env, $this->source, $context["especialidad"], "id", [], "any", false, false, false, 75), "parteId" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\"><small>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["especialidad"], "tipo", [], "any", false, false, false, 75), "html", null, true);
                echo "
                          <small><i class=\"far fa-trash-alt\"></i></small></small><br /></a>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['especialidad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                      <h7><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignarEspecialidad", ["parteId" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\"><small><small><i class=\"fas fa-plus\"></i></small>Especialidad</small></a></h7>
                  </td>
                  <td>
                    <h6>";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "fechainicio", [], "any", false, false, false, 81), "d/m/Y"), "html", null, true);
            echo "</h6>
                  </td>
                  <td>
                    <h6>";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parte"], "fechafin", [], "any", false, false, false, 84), "d/m/Y"), "html", null, true);
            echo "</h6>
                  </td>
                  <td>
                    <h6>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["parte"], "solicitud", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), "html", null, true);
            echo "</h6>
                  </td>
                  <td>
                    <h7><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarParte", ["id" => twig_get_attribute($this->env, $this->source, $context["parte"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\">
                        <i class=\"far fa-trash-alt\"></i></a></h7>
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class=\"col-md-2\">
</div>

<div style=\"margin-bottom:200px\"></div>
</div>
";
    }

    // line 112
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/controlBorrado.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "gestionMantenimiento/partes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 114,  236 => 113,  232 => 112,  212 => 95,  201 => 90,  195 => 87,  189 => 84,  183 => 81,  176 => 78,  164 => 75,  160 => 74,  156 => 72,  146 => 69,  142 => 68,  136 => 65,  128 => 60,  124 => 59,  117 => 55,  113 => 53,  109 => 52,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gestionMantenimiento/partes.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\partes.html.twig");
    }
}
