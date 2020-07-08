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

/* gestionMantenimiento/pendientes.html.twig */
class __TwigTemplate_b135d1e11ded8d223c48a5afe7fe9666ea0924635cf6b37df406dc168e4a08c1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/pendientes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/pendientes.html.twig"));

        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/pendientes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        echo "Solicitudes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

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
              <h6><i class=\"far fa-hourglass\"></i></h6>
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
              <h6>Trabajador<br /> asignado</h6>
            </th>
            <th scope=\"col\">
              <h6>Asignar<br />trabajador</h6>
            </th>
            <th scope=\"col\">
              <h6>Generar<br /> Parte</h6>
            </th>
            <th scope=\"col\">
              <h6>Anular<br />Suspender<br />Priorizar</h6>
            </th>


          </tr>
        </thead>
        <tbody>

          ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) || array_key_exists("solicitudes", $context) ? $context["solicitudes"] : (function () { throw new RuntimeError('Variable "solicitudes" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 52
            echo "          ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 52), 3)) {
                // line 53
                echo "
          <tr>

            <td>
              ";
                // line 57
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 57), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 57), 1))) {
                    // line 58
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                    echo "\" style=\"color: red;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 58), "html", null, true);
                    echo "</a></h5>
              ";
                }
                // line 60
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 60), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 60), 0))) {
                    // line 61
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                    echo "\" style=\"color: red;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 61), "html", null, true);
                    echo "</a></h5>
              ";
                }
                // line 63
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 63), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 63), 4))) {
                    // line 64
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                    echo "\" style=\"color: red;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 64), "html", null, true);
                    echo "</a></h5>
              ";
                }
                // line 66
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 66), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 66), 1))) {
                    // line 67
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 67), "html", null, true);
                    echo "</a></h5>
              ";
                }
                // line 69
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 69), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 69), 0))) {
                    // line 70
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 70), "html", null, true);
                    echo "</a></h5>
              ";
                }
                // line 72
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 72), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 72), 4))) {
                    // line 73
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                    echo "\" style=\"color: fuchsia;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 73), "html", null, true);
                    echo "</a></h5>
              ";
                }
                // line 75
                echo "              ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 75), 2)) {
                    // line 76
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 76), "html", null, true);
                    echo "</a></h5>
              ";
                }
                // line 78
                echo "            </td>

            <td>
              ";
                // line 81
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 81), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 81), 1))) {
                    // line 82
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                    echo "\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              ";
                }
                // line 84
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 84), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 84), 0))) {
                    // line 85
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                    echo "\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              ";
                }
                // line 87
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 87), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 87), 4))) {
                    // line 88
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                    echo "\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              ";
                }
                // line 90
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 90), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 90), 1))) {
                    // line 91
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                    echo "\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              ";
                }
                // line 93
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 93), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 93), 0))) {
                    // line 94
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                    echo "\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              ";
                }
                // line 96
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 96), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 96), 4))) {
                    // line 97
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                    echo "\" style=\"color: fuchsia;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              ";
                }
                // line 99
                echo "              ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 99), 2)) {
                    // line 100
                    echo "              <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 100)]), "html", null, true);
                    echo "\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              ";
                }
                // line 102
                echo "            </td>

            <td>
              ";
                // line 105
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 105), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 105), 1))) {
                    // line 106
                    echo "              <font color=\"red\">
                <h6><small>";
                    // line 107
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 107), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
              </font>
              ";
                }
                // line 110
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 110), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 110), 0))) {
                    // line 111
                    echo "              <font color=\"red\">
                <h6><small>";
                    // line 112
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 112), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
              </font>
              ";
                }
                // line 115
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 115), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 115), 4))) {
                    // line 116
                    echo "              <font color=\"red\">
                <h6><small>";
                    // line 117
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 117), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
              </font>
              ";
                }
                // line 120
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 120), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 120), 1))) {
                    // line 121
                    echo "              <h6><small>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 121), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
              ";
                }
                // line 123
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 123), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 123), 0))) {
                    // line 124
                    echo "              <h6><small>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 124), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
              ";
                }
                // line 126
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 126), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 126), 4))) {
                    // line 127
                    echo "              <font color=\"fuchsia\">
                <h6><small>";
                    // line 128
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 128), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
              </font>
              ";
                }
                // line 131
                echo "              ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 131), 2)) {
                    // line 132
                    echo "              <h6><small>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 132), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
              ";
                }
                // line 134
                echo "            </td>


            <td>
              ";
                // line 138
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 138), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 138), 1))) {
                    // line 139
                    echo "              <font color=\"red\">
                <h6><small>";
                    // line 140
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 140), "html", null, true);
                    echo "</small></h6>
              </font>
              ";
                }
                // line 143
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 143), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 143), 0))) {
                    // line 144
                    echo "              <font color=\"red\">
                <h6><small>";
                    // line 145
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 145), "html", null, true);
                    echo "</small></h6>
              </font>
              ";
                }
                // line 148
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 148), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 148), 4))) {
                    // line 149
                    echo "              <font color=\"red\">
                <h6><small>";
                    // line 150
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 150), "html", null, true);
                    echo "</small></h6>
              </font>
              ";
                }
                // line 153
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 153), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 153), 1))) {
                    // line 154
                    echo "              <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 154), "html", null, true);
                    echo "</small></h6>
              ";
                }
                // line 156
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 156), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 156), 0))) {
                    // line 157
                    echo "              <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 157), "html", null, true);
                    echo "</small></h6>
              ";
                }
                // line 159
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 159), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 159), 4))) {
                    // line 160
                    echo "              <font color=\"fuchsia\">
                <h6><small>";
                    // line 161
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 161), "html", null, true);
                    echo "</small></h6>
              </font>
              ";
                }
                // line 164
                echo "              ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 164), 2)) {
                    // line 165
                    echo "              <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 165), "html", null, true);
                    echo "</small></h6>
              ";
                }
                // line 167
                echo "            </td>


            <td>
              ";
                // line 171
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 171), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 171), 1))) {
                    // line 172
                    echo "              <font color=\"red\">
                <h6><small>";
                    // line 173
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 173), "html", null, true);
                    echo "</small></h6>
              </font>
              ";
                }
                // line 176
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 176), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 176), 0))) {
                    // line 177
                    echo "              <font color=\"red\">
                <h6><small>";
                    // line 178
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 178), "html", null, true);
                    echo "</small></h6>
              </font>
              ";
                }
                // line 181
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 181), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 181), 4))) {
                    // line 182
                    echo "              <font color=\"red\">
                <h6><small>";
                    // line 183
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 183), "html", null, true);
                    echo "</small></h6>
              </font>
              ";
                }
                // line 186
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 186), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 186), 1))) {
                    // line 187
                    echo "              <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 187), "html", null, true);
                    echo "</small></h6>
              ";
                }
                // line 189
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 189), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 189), 0))) {
                    // line 190
                    echo "              <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 190), "html", null, true);
                    echo "</small></h6>
              ";
                }
                // line 192
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 192), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 192), 4))) {
                    // line 193
                    echo "              <font color=\"fuchsia\">
                <h6><small>";
                    // line 194
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 194), "html", null, true);
                    echo "</small></h6>
              </font>
              ";
                }
                // line 197
                echo "              ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 197), 2)) {
                    // line 198
                    echo "              <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 198), "html", null, true);
                    echo "</small></h6>
              ";
                }
                // line 200
                echo "            </td>


            <td>
              ";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["solicitud"], "trabajadores", [], "any", false, false, false, 204));
                foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
                    // line 205
                    echo "              ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 205), 2)) {
                        // line 206
                        echo "              <h7><small>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 206), "html", null, true);
                        echo "<br /></small></h7>
              ";
                    }
                    // line 208
                    echo "              ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 208), 4) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 208), 1))) {
                        // line 209
                        echo "              <h7><a href=\"\" style=\"color: red;\"><small>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 209), "html", null, true);
                        echo "</small><br /></a></h7>
              ";
                    }
                    // line 211
                    echo "              ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 211), 4) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 211), 0))) {
                        // line 212
                        echo "              <h7><a href=\"\" style=\"color: fuchsia;\"><small>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 212), "html", null, true);
                        echo "</small><br /></a></h7>
              ";
                    }
                    // line 214
                    echo "              ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 214), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 214), 1))) {
                        // line 215
                        echo "              <h7><a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarAsignacion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 215), "idTrabajador" => twig_get_attribute($this->env, $this->source, $context["trabajador"], "id", [], "any", false, false, false, 215)]), "html", null, true);
                        echo "\" style=\" color: red;\"><small>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 215), "html", null, true);
                        echo "
                    <small><i class=\"far fa-trash-alt\"></i></small></small><br /></a></h7>
              ";
                    }
                    // line 218
                    echo "              ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 218), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 218), 0))) {
                        // line 219
                        echo "              <h7><a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarAsignacion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 219), "idTrabajador" => twig_get_attribute($this->env, $this->source, $context["trabajador"], "id", [], "any", false, false, false, 219)]), "html", null, true);
                        echo "\"><small>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 219), "html", null, true);
                        echo "
                    <small><i class=\"far fa-trash-alt\"></i></small></small><br /></a></h7>
              ";
                    }
                    // line 222
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 223
                echo "            </td>


            <th scope=\"row\">
              ";
                // line 227
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 227), 2) || 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 227), 4))) {
                    // line 228
                    echo "              <h5><a href=\"\"></a></h5>
              ";
                } else {
                    // line 230
                    echo "              ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 230), 1)) {
                        // line 231
                        echo "              <h7><a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 231)]), "html", null, true);
                        echo "\" style=\" color: red;\"><small><small><i class=\"fas fa-plus\"></i></small></small><small> Trabajador</small></a></h7>
              ";
                    }
                    // line 233
                    echo "              ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 233), 0)) {
                        // line 234
                        echo "              <h7><a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 234)]), "html", null, true);
                        echo "\"><small><small><i class=\"fas fa-plus\"></i></small></small><small> Trabajador</small></a></h7>
              ";
                    }
                    // line 236
                    echo "              ";
                }
                // line 237
                echo "
            </th>

            <th scope=\"row\">
              ";
                // line 241
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 241), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 241), 0))) {
                    // line 242
                    echo "              <h6><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoParte", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 242)]), "html", null, true);
                    echo "\"><small><small><i class=\"fas fa-plus\"></i></small></small><small> Parte</small></a></h6>
              ";
                }
                // line 244
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 244), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 244), 1))) {
                    // line 245
                    echo "              <h6><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoParte", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 245)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small><small><i class=\"fas fa-plus\"></i></small></small><small> Parte</small></a></h6>
              ";
                }
                // line 247
                echo "              ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 247), 0)) {
                    // line 248
                    echo "              <h6><a href=\"\"></a></h6>
              ";
                }
                // line 250
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 250), 4) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 250), 1))) {
                    // line 251
                    echo "              <h6><a href=\"\"></a></h6>
              ";
                }
                // line 253
                echo "
            </th>

            <td>
              ";
                // line 257
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 257), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 257), 0))) {
                    // line 258
                    echo "              <h7><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anularSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 258)]), "html", null, true);
                    echo "\"><small>Anular<br /> </small> </a> </h7>
              <h7><a href=\"";
                    // line 259
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspenderSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 259)]), "html", null, true);
                    echo "\"><small>Suspender<br /></small></a></h7>
              <h7><a href=\"";
                    // line 260
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("priorizarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 260)]), "html", null, true);
                    echo "\"><small>Priorizar</small></a></h7>
              ";
                }
                // line 262
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 262), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 262), 0))) {
                    // line 263
                    echo "              <h7><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anularSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 263)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small>Anular<br /> </small> </a> </h7>
              <h7><a href=\"";
                    // line 264
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspenderSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 264)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small>Suspender<br /></small></a></h7>
              <h7><a href=\"";
                    // line 265
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desPriorizarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 265)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small>Despriorizar</small></a></h7>
              ";
                }
                // line 267
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 267), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 267), 1))) {
                    // line 268
                    echo "              <h7><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anularSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 268)]), "html", null, true);
                    echo "\"><small>Anular<br /> </small> </a> </h7>
              <h7><a href=\"";
                    // line 269
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspenderSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 269)]), "html", null, true);
                    echo "\"><small>Suspender<br /></small></a></h7>
              <h7><a href=\"";
                    // line 270
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("priorizarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 270)]), "html", null, true);
                    echo "\"><small>Priorizar</small></a></h7>
              ";
                }
                // line 272
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 272), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 272), 1))) {
                    // line 273
                    echo "              <h7><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anularSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 273)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small>Anular<br /> </small> </a> </h7>
              <h7><a href=\"";
                    // line 274
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspenderSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 274)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small>Suspender<br /></small></a></h7>
              <h7><a href=\"";
                    // line 275
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desPriorizarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 275)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small>Despriorizar</small></a></h7>
              ";
                }
                // line 277
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 277), 4) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 277), 0))) {
                    // line 278
                    echo "              <h7><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reactivarSolicitudSuspendida", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 278)]), "html", null, true);
                    echo "\" style=\"color: fuchsia;\"><small>Reactivar</small></a></h7>
              ";
                }
                // line 280
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 280), 4) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 280), 1))) {
                    // line 281
                    echo "              <h7><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reactivarSolicitudSuspendida", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 281)]), "html", null, true);
                    echo "\" style=\"color: red;\"><small>Reactivar<br /></small></a></h7>
              <h7><a href=\"";
                    // line 282
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desPriorizarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 282)]), "html", null, true);
                    echo "\" style=\"color: red;\"><small>Despriorizar</small></a></h7>
              ";
                }
                // line 284
                echo "            </td>

          </tr>
          ";
            }
            // line 288
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestionMantenimiento/pendientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  776 => 289,  770 => 288,  764 => 284,  759 => 282,  754 => 281,  751 => 280,  745 => 278,  742 => 277,  737 => 275,  733 => 274,  728 => 273,  725 => 272,  720 => 270,  716 => 269,  711 => 268,  708 => 267,  703 => 265,  699 => 264,  694 => 263,  691 => 262,  686 => 260,  682 => 259,  677 => 258,  675 => 257,  669 => 253,  665 => 251,  662 => 250,  658 => 248,  655 => 247,  649 => 245,  646 => 244,  640 => 242,  638 => 241,  632 => 237,  629 => 236,  623 => 234,  620 => 233,  614 => 231,  611 => 230,  607 => 228,  605 => 227,  599 => 223,  593 => 222,  584 => 219,  581 => 218,  572 => 215,  569 => 214,  563 => 212,  560 => 211,  554 => 209,  551 => 208,  545 => 206,  542 => 205,  538 => 204,  532 => 200,  526 => 198,  523 => 197,  517 => 194,  514 => 193,  511 => 192,  505 => 190,  502 => 189,  496 => 187,  493 => 186,  487 => 183,  484 => 182,  481 => 181,  475 => 178,  472 => 177,  469 => 176,  463 => 173,  460 => 172,  458 => 171,  452 => 167,  446 => 165,  443 => 164,  437 => 161,  434 => 160,  431 => 159,  425 => 157,  422 => 156,  416 => 154,  413 => 153,  407 => 150,  404 => 149,  401 => 148,  395 => 145,  392 => 144,  389 => 143,  383 => 140,  380 => 139,  378 => 138,  372 => 134,  366 => 132,  363 => 131,  357 => 128,  354 => 127,  351 => 126,  345 => 124,  342 => 123,  336 => 121,  333 => 120,  327 => 117,  324 => 116,  321 => 115,  315 => 112,  312 => 111,  309 => 110,  303 => 107,  300 => 106,  298 => 105,  293 => 102,  287 => 100,  284 => 99,  278 => 97,  275 => 96,  269 => 94,  266 => 93,  260 => 91,  257 => 90,  251 => 88,  248 => 87,  242 => 85,  239 => 84,  233 => 82,  231 => 81,  226 => 78,  218 => 76,  215 => 75,  207 => 73,  204 => 72,  196 => 70,  193 => 69,  185 => 67,  182 => 66,  174 => 64,  171 => 63,  163 => 61,  160 => 60,  152 => 58,  150 => 57,  144 => 53,  141 => 52,  137 => 51,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontal/base.html.twig' %}
{% block titulo %}Solicitudes{% endblock %}
{% block contenido %}
<div class=\"container\">
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
              <h6><i class=\"far fa-hourglass\"></i></h6>
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
              <h6>Trabajador<br /> asignado</h6>
            </th>
            <th scope=\"col\">
              <h6>Asignar<br />trabajador</h6>
            </th>
            <th scope=\"col\">
              <h6>Generar<br /> Parte</h6>
            </th>
            <th scope=\"col\">
              <h6>Anular<br />Suspender<br />Priorizar</h6>
            </th>


          </tr>
        </thead>
        <tbody>

          {% for solicitud in solicitudes %}
          {% if solicitud.estado!=3 %}

          <tr>

            <td>
              {% if solicitud.prioritaria==1 and solicitud.estado==1 %}
              <h5><a href=\"{{path('solicitud',{'id':solicitud.id})}}\" style=\"color: red;\">{{solicitud.id}}</a></h5>
              {% endif %}
              {% if solicitud.prioritaria==1 and solicitud.estado==0 %}
              <h5><a href=\"{{path('solicitud',{'id':solicitud.id})}}\" style=\"color: red;\">{{solicitud.id}}</a></h5>
              {% endif %}
              {% if solicitud.prioritaria==1 and solicitud.estado==4 %}
              <h5><a href=\"{{path('solicitud',{'id':solicitud.id})}}\" style=\"color: red;\">{{solicitud.id}}</a></h5>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==1 %}
              <h5><a href=\"{{path('solicitud',{'id':solicitud.id})}}\">{{solicitud.id}}</a></h5>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==0 %}
              <h5><a href=\"{{path('solicitud',{'id':solicitud.id})}}\">{{solicitud.id}}</a></h5>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==4 %}
              <h5><a href=\"{{path('solicitud',{'id':solicitud.id})}}\" style=\"color: fuchsia;\">{{solicitud.id}}</a></h5>
              {% endif %}
              {% if solicitud.estado==2 %}
              <h5><a href=\"{{path('solicitud',{'id':solicitud.id})}}\">{{solicitud.id}}</a></h5>
              {% endif %}
            </td>

            <td>
              {% if solicitud.prioritaria==1 and solicitud.estado==1 %}
              <h5><a href=\"{{path('cronogramaGestion',{'id':solicitud.id})}}\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              {% endif %}
              {% if solicitud.prioritaria==1 and solicitud.estado==0 %}
              <h5><a href=\"{{path('cronogramaGestion',{'id':solicitud.id})}}\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              {% endif %}
              {% if solicitud.prioritaria==1 and solicitud.estado==4 %}
              <h5><a href=\"{{path('cronogramaGestion',{'id':solicitud.id})}}\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==1 %}
              <h5><a href=\"{{path('cronogramaGestion',{'id':solicitud.id})}}\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==0 %}
              <h5><a href=\"{{path('cronogramaGestion',{'id':solicitud.id})}}\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==4 %}
              <h5><a href=\"{{path('cronogramaGestion',{'id':solicitud.id})}}\" style=\"color: fuchsia;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              {% endif %}
              {% if solicitud.estado==2 %}
              <h5><a href=\"{{path('cronogramaGestion',{'id':solicitud.id})}}\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
              {% endif %}
            </td>

            <td>
              {% if solicitud.prioritaria==1 and solicitud.estado==1 %}
              <font color=\"red\">
                <h6><small>{{solicitud.fecha|date('d/m/Y')}}</small></h6>
              </font>
              {% endif %}
              {% if solicitud.prioritaria==1 and solicitud.estado==0 %}
              <font color=\"red\">
                <h6><small>{{solicitud.fecha|date('d/m/Y')}}</small></h6>
              </font>
              {% endif %}
              {% if solicitud.prioritaria==1 and solicitud.estado==4 %}
              <font color=\"red\">
                <h6><small>{{solicitud.fecha|date('d/m/Y')}}</small></h6>
              </font>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==1 %}
              <h6><small>{{solicitud.fecha|date('d/m/Y')}}</small></h6>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==0 %}
              <h6><small>{{solicitud.fecha|date('d/m/Y')}}</small></h6>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==4 %}
              <font color=\"fuchsia\">
                <h6><small>{{solicitud.fecha|date('d/m/Y')}}</small></h6>
              </font>
              {% endif %}
              {% if solicitud.estado==2 %}
              <h6><small>{{solicitud.fecha|date('d/m/Y')}}</small></h6>
              {% endif %}
            </td>


            <td>
              {% if solicitud.prioritaria==1 and solicitud.estado==1 %}
              <font color=\"red\">
                <h6><small>{{solicitud.estancia}}</small></h6>
              </font>
              {% endif %}
              {% if solicitud.prioritaria==1 and solicitud.estado==0 %}
              <font color=\"red\">
                <h6><small>{{solicitud.estancia}}</small></h6>
              </font>
              {% endif %}
              {% if solicitud.prioritaria==1 and solicitud.estado==4 %}
              <font color=\"red\">
                <h6><small>{{solicitud.estancia}}</small></h6>
              </font>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==1 %}
              <h6><small>{{solicitud.estancia}}</small></h6>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==0 %}
              <h6><small>{{solicitud.estancia}}</small></h6>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==4 %}
              <font color=\"fuchsia\">
                <h6><small>{{solicitud.estancia}}</small></h6>
              </font>
              {% endif %}
              {% if solicitud.estado==2 %}
              <h6><small>{{solicitud.estancia}}</small></h6>
              {% endif %}
            </td>


            <td>
              {% if solicitud.prioritaria==1 and solicitud.estado==1%}
              <font color=\"red\">
                <h6><small>{{solicitud.solicitante}}</small></h6>
              </font>
              {% endif %}
              {% if solicitud.prioritaria==1 and solicitud.estado==0%}
              <font color=\"red\">
                <h6><small>{{solicitud.solicitante}}</small></h6>
              </font>
              {% endif %}
              {% if solicitud.prioritaria==1 and solicitud.estado==4%}
              <font color=\"red\">
                <h6><small>{{solicitud.solicitante}}</small></h6>
              </font>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==1%}
              <h6><small>{{solicitud.solicitante}}</small></h6>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==0%}
              <h6><small>{{solicitud.solicitante}}</small></h6>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==4 %}
              <font color=\"fuchsia\">
                <h6><small>{{solicitud.solicitante}}</small></h6>
              </font>
              {% endif %}
              {% if solicitud.estado==2 %}
              <h6><small>{{solicitud.solicitante}}</small></h6>
              {% endif %}
            </td>


            <td>
              {% for trabajador in solicitud.trabajadores %}
              {% if solicitud.estado==2 %}
              <h7><small>{{trabajador.nombre}}<br /></small></h7>
              {% endif %}
              {% if solicitud.estado==4 and solicitud.prioritaria==1 %}
              <h7><a href=\"\" style=\"color: red;\"><small>{{trabajador.nombre}}</small><br /></a></h7>
              {% endif %}
              {% if solicitud.estado==4 and solicitud.prioritaria==0 %}
              <h7><a href=\"\" style=\"color: fuchsia;\"><small>{{trabajador.nombre}}</small><br /></a></h7>
              {% endif %}
              {% if solicitud.estado==1 and solicitud.prioritaria==1 %}
              <h7><a href=\"{{path('borrarAsignacion',{'id':solicitud.id, 'idTrabajador':trabajador.id})}}\" style=\" color: red;\"><small>{{trabajador.nombre}}
                    <small><i class=\"far fa-trash-alt\"></i></small></small><br /></a></h7>
              {% endif %}
              {% if solicitud.estado==1 and solicitud.prioritaria==0 %}
              <h7><a href=\"{{path('borrarAsignacion',{'id':solicitud.id, 'idTrabajador':trabajador.id})}}\"><small>{{trabajador.nombre}}
                    <small><i class=\"far fa-trash-alt\"></i></small></small><br /></a></h7>
              {% endif %}
              {% endfor %}
            </td>


            <th scope=\"row\">
              {% if solicitud.estado==2 or solicitud.estado==4 %}
              <h5><a href=\"\"></a></h5>
              {% else %}
              {% if solicitud.prioritaria==1 %}
              <h7><a href=\"{{ path('asignarSolicitud',{'id':solicitud.id}) }}\" style=\" color: red;\"><small><small><i class=\"fas fa-plus\"></i></small></small><small> Trabajador</small></a></h7>
              {% endif %}
              {% if solicitud.prioritaria==0 %}
              <h7><a href=\"{{ path('asignarSolicitud',{'id':solicitud.id}) }}\"><small><small><i class=\"fas fa-plus\"></i></small></small><small> Trabajador</small></a></h7>
              {% endif %}
              {% endif %}

            </th>

            <th scope=\"row\">
              {% if solicitud.estado==1 and solicitud.prioritaria==0 %}
              <h6><a href=\"{{path('nuevoParte',{'id':solicitud.id})}}\"><small><small><i class=\"fas fa-plus\"></i></small></small><small> Parte</small></a></h6>
              {% endif %}
              {% if solicitud.estado==1 and solicitud.prioritaria==1 %}
              <h6><a href=\"{{path('nuevoParte',{'id':solicitud.id})}}\" style=\" color: red;\"><small><small><i class=\"fas fa-plus\"></i></small></small><small> Parte</small></a></h6>
              {% endif %}
              {% if solicitud.estado==0  %}
              <h6><a href=\"\"></a></h6>
              {% endif %}
              {% if solicitud.estado==4 and solicitud.prioritaria==1 %}
              <h6><a href=\"\"></a></h6>
              {% endif %}

            </th>

            <td>
              {% if solicitud.prioritaria==0 and solicitud.estado==0 %}
              <h7><a href=\"{{path('anularSolicitud',{'id':solicitud.id})}}\"><small>Anular<br /> </small> </a> </h7>
              <h7><a href=\"{{path('suspenderSolicitud',{'id':solicitud.id})}}\"><small>Suspender<br /></small></a></h7>
              <h7><a href=\"{{path('priorizarSolicitud',{'id':solicitud.id})}}\"><small>Priorizar</small></a></h7>
              {% endif %}
              {% if solicitud.prioritaria==1 and solicitud.estado==0 %}
              <h7><a href=\"{{path('anularSolicitud',{'id':solicitud.id})}}\" style=\" color: red;\"><small>Anular<br /> </small> </a> </h7>
              <h7><a href=\"{{path('suspenderSolicitud',{'id':solicitud.id})}}\" style=\" color: red;\"><small>Suspender<br /></small></a></h7>
              <h7><a href=\"{{path('desPriorizarSolicitud',{'id':solicitud.id})}}\" style=\" color: red;\"><small>Despriorizar</small></a></h7>
              {% endif %}
              {% if solicitud.prioritaria==0 and solicitud.estado==1 %}
              <h7><a href=\"{{path('anularSolicitud',{'id':solicitud.id})}}\"><small>Anular<br /> </small> </a> </h7>
              <h7><a href=\"{{path('suspenderSolicitud',{'id':solicitud.id})}}\"><small>Suspender<br /></small></a></h7>
              <h7><a href=\"{{path('priorizarSolicitud',{'id':solicitud.id})}}\"><small>Priorizar</small></a></h7>
              {% endif %}
              {% if solicitud.prioritaria==1 and solicitud.estado==1 %}
              <h7><a href=\"{{path('anularSolicitud',{'id':solicitud.id})}}\" style=\" color: red;\"><small>Anular<br /> </small> </a> </h7>
              <h7><a href=\"{{path('suspenderSolicitud',{'id':solicitud.id})}}\" style=\" color: red;\"><small>Suspender<br /></small></a></h7>
              <h7><a href=\"{{path('desPriorizarSolicitud',{'id':solicitud.id})}}\" style=\" color: red;\"><small>Despriorizar</small></a></h7>
              {% endif %}
              {% if solicitud.estado==4 and solicitud.prioritaria==0 %}
              <h7><a href=\"{{path('reactivarSolicitudSuspendida',{'id':solicitud.id})}}\" style=\"color: fuchsia;\"><small>Reactivar</small></a></h7>
              {% endif %}
              {% if solicitud.estado==4 and solicitud.prioritaria==1 %}
              <h7><a href=\"{{path('reactivarSolicitudSuspendida',{'id':solicitud.id})}}\" style=\"color: red;\"><small>Reactivar<br /></small></a></h7>
              <h7><a href=\"{{path('desPriorizarSolicitud',{'id':solicitud.id})}}\" style=\"color: red;\"><small>Despriorizar</small></a></h7>
              {% endif %}
            </td>

          </tr>
          {% endif %}
          {% endfor %}

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
{% endblock %}", "gestionMantenimiento/pendientes.html.twig", "C:\\symfony4\\SolMan\\templates\\gestionMantenimiento\\pendientes.html.twig");
    }
}
