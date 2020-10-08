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
class __TwigTemplate_aa381ae05e45eea16486e27f72bcc2d54bd91fefa4d742099723b5771ff755ed extends Template
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
        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/pendientes.html.twig", 1);
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
        echo "<div class=\"container-fluid\">
  <div style=\"margin-top:50px\">
    <h1 class=\" mt-4 mb-3\">Solicitudes</<h1>
  </div>
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"table-responsive-lg\">
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
                <h6>Descripcion</h6>
              </th>
              <th style=\"width:25%\">
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
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["solicitudes"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "id", [], "any", false, false, false, 51) <=> twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "id", [], "any", false, false, false, 51)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 52
            echo "            ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 52), 3)) {
                // line 53
                echo "
            <tr>

              <td>
                ";
                // line 57
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 57), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 57), 1))) {
                    // line 58
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                    echo "\" style=\"color: red;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 58), "html", null, true);
                    echo "</a></h5>
                ";
                }
                // line 60
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 60), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 60), 0))) {
                    // line 61
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                    echo "\" style=\"color: red;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 61), "html", null, true);
                    echo "</a></h5>
                ";
                }
                // line 63
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 63), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 63), 4))) {
                    // line 64
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                    echo "\" style=\"color: red;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 64), "html", null, true);
                    echo "</a></h5>
                ";
                }
                // line 66
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 66), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 66), 1))) {
                    // line 67
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 67), "html", null, true);
                    echo "</a></h5>
                ";
                }
                // line 69
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 69), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 69), 0))) {
                    // line 70
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 70), "html", null, true);
                    echo "</a></h5>
                ";
                }
                // line 72
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 72), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 72), 4))) {
                    // line 73
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                    echo "\" style=\"color: fuchsia;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 73), "html", null, true);
                    echo "</a></h5>
                ";
                }
                // line 75
                echo "                ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 75), 2)) {
                    // line 76
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 76), "html", null, true);
                    echo "</a></h5>
                ";
                }
                // line 78
                echo "              </td>

              <td>
                ";
                // line 81
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 81), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 81), 1))) {
                    // line 82
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                    echo "\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                ";
                }
                // line 84
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 84), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 84), 0))) {
                    // line 85
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                    echo "\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                ";
                }
                // line 87
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 87), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 87), 4))) {
                    // line 88
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                    echo "\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                ";
                }
                // line 90
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 90), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 90), 1))) {
                    // line 91
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                    echo "\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                ";
                }
                // line 93
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 93), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 93), 0))) {
                    // line 94
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                    echo "\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                ";
                }
                // line 96
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 96), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 96), 4))) {
                    // line 97
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                    echo "\" style=\"color: fuchsia;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                ";
                }
                // line 99
                echo "                ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 99), 2)) {
                    // line 100
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronogramaGestion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 100)]), "html", null, true);
                    echo "\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                ";
                }
                // line 102
                echo "              </td>

              <td>
                ";
                // line 105
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 105), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 105), 1))) {
                    // line 106
                    echo "                <font color=\"red\">
                  <h6><small>";
                    // line 107
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 107), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 110
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 110), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 110), 0))) {
                    // line 111
                    echo "                <font color=\"red\">
                  <h6><small>";
                    // line 112
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 112), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 115
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 115), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 115), 4))) {
                    // line 116
                    echo "                <font color=\"red\">
                  <h6><small>";
                    // line 117
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 117), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 120
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 120), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 120), 1))) {
                    // line 121
                    echo "                <h6><small>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 121), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
                ";
                }
                // line 123
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 123), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 123), 0))) {
                    // line 124
                    echo "                <h6><small>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 124), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
                ";
                }
                // line 126
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 126), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 126), 4))) {
                    // line 127
                    echo "                <font color=\"fuchsia\">
                  <h6><small>";
                    // line 128
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 128), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 131
                echo "                ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 131), 2)) {
                    // line 132
                    echo "                <h6><small>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 132), "d/m/Y"), "html", null, true);
                    echo "</small></h6>
                ";
                }
                // line 134
                echo "              </td>


              <td>
                ";
                // line 138
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 138), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 138), 1))) {
                    // line 139
                    echo "                <font color=\"red\">
                  <h6><small>";
                    // line 140
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 140), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 143
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 143), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 143), 0))) {
                    // line 144
                    echo "                <font color=\"red\">
                  <h6><small>";
                    // line 145
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 145), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 148
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 148), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 148), 4))) {
                    // line 149
                    echo "                <font color=\"red\">
                  <h6><small>";
                    // line 150
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 150), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 153
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 153), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 153), 1))) {
                    // line 154
                    echo "                <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 154), "html", null, true);
                    echo "</small></h6>
                ";
                }
                // line 156
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 156), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 156), 0))) {
                    // line 157
                    echo "                <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 157), "html", null, true);
                    echo "</small></h6>
                ";
                }
                // line 159
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 159), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 159), 4))) {
                    // line 160
                    echo "                <font color=\"fuchsia\">
                  <h6><small>";
                    // line 161
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 161), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 164
                echo "                ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 164), 2)) {
                    // line 165
                    echo "                <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 165), "html", null, true);
                    echo "</small></h6>
                ";
                }
                // line 167
                echo "              </td>


              <td>
                ";
                // line 171
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 171), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 171), 1))) {
                    // line 172
                    echo "                <font color=\"red\">
                  <h6><small>";
                    // line 173
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 173), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 176
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 176), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 176), 0))) {
                    // line 177
                    echo "                <font color=\"red\">
                  <h6><small>";
                    // line 178
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 178), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 181
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 181), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 181), 4))) {
                    // line 182
                    echo "                <font color=\"red\">
                  <h6><small>";
                    // line 183
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 183), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 186
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 186), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 186), 1))) {
                    // line 187
                    echo "                <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 187), "html", null, true);
                    echo "</small></h6>
                ";
                }
                // line 189
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 189), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 189), 0))) {
                    // line 190
                    echo "                <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 190), "html", null, true);
                    echo "</small></h6>
                ";
                }
                // line 192
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 192), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 192), 4))) {
                    // line 193
                    echo "                <font color=\"fuchsia\">
                  <h6><small>";
                    // line 194
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 194), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 197
                echo "                ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 197), 2)) {
                    // line 198
                    echo "                <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "solicitante", [], "any", false, false, false, 198), "html", null, true);
                    echo "</small></h6>
                ";
                }
                // line 200
                echo "              </td>

              <td>
                ";
                // line 203
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 203), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 203), 1))) {
                    // line 204
                    echo "                <font color=\"red\">
                  <h6><small>";
                    // line 205
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "descripcionIncidencia", [], "any", false, false, false, 205), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 208
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 208), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 208), 0))) {
                    // line 209
                    echo "                <font color=\"red\">
                  <h6><small>";
                    // line 210
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "descripcionIncidencia", [], "any", false, false, false, 210), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 213
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 213), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 213), 4))) {
                    // line 214
                    echo "                <font color=\"red\">
                  <h6><small>";
                    // line 215
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "descripcionIncidencia", [], "any", false, false, false, 215), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 218
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 218), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 218), 1))) {
                    // line 219
                    echo "                <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "descripcionIncidencia", [], "any", false, false, false, 219), "html", null, true);
                    echo "</small></h6>
                ";
                }
                // line 221
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 221), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 221), 0))) {
                    // line 222
                    echo "                <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "descripcionIncidencia", [], "any", false, false, false, 222), "html", null, true);
                    echo "</small></h6>
                ";
                }
                // line 224
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 224), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 224), 4))) {
                    // line 225
                    echo "                <font color=\"fuchsia\">
                  <h6><small>";
                    // line 226
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "descripcionIncidencia", [], "any", false, false, false, 226), "html", null, true);
                    echo "</small></h6>
                </font>
                ";
                }
                // line 229
                echo "                ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 229), 2)) {
                    // line 230
                    echo "                <h6><small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "descripcionIncidencia", [], "any", false, false, false, 230), "html", null, true);
                    echo "</small></h6>
                ";
                }
                // line 232
                echo "              </td>


              <td>
                ";
                // line 236
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["solicitud"], "trabajadores", [], "any", false, false, false, 236));
                foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
                    // line 237
                    echo "                ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 237), 2)) {
                        // line 238
                        echo "                <h7><small>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 238), "html", null, true);
                        echo "<br /></small></h7>
                ";
                    }
                    // line 240
                    echo "

                ";
                    // line 242
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 242), 4) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 242), 1))) {
                        // line 243
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trabajador"], "instrucciones", [], "any", false, false, false, 243));
                        foreach ($context['_seq'] as $context["_key"] => $context["instruccion"]) {
                            // line 244
                            echo "                ";
                            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 244), "id", [], "any", false, false, false, 244), twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 244))) {
                                // line 245
                                echo "                <h7><a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarAsignacion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 245), "idTrabajador" => twig_get_attribute($this->env, $this->source, $context["trabajador"], "id", [], "any", false, false, false, 245), "idInstruccion" => twig_get_attribute($this->env, $this->source, $context["instruccion"], "id", [], "any", false, false, false, 245)]), "html", null, true);
                                echo "\" style=\" color: red;\"><small>";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 245), "html", null, true);
                                echo "
                      <small><i class=\"far fa-trash-alt\"></i></small></small></a>&nbsp&nbsp<a href=\"";
                                // line 246
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editarInstruccion", ["idInstruccion" => twig_get_attribute($this->env, $this->source, $context["instruccion"], "id", [], "any", false, false, false, 246), "idSolicitud" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 246), "nombreTrabajador" => twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 246)]), "html", null, true);
                                echo "\"
                    style=\" color: red;\"><small><i class=\"fas fa-info\"></i></small></a><br /></h7>
                ";
                            }
                            // line 249
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruccion'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 250
                        echo "                ";
                    }
                    // line 251
                    echo "

                ";
                    // line 253
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 253), 4) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 253), 0))) {
                        // line 254
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trabajador"], "instrucciones", [], "any", false, false, false, 254));
                        foreach ($context['_seq'] as $context["_key"] => $context["instruccion"]) {
                            // line 255
                            echo "                ";
                            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 255), "id", [], "any", false, false, false, 255), twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 255))) {
                                // line 256
                                echo "                <h7><a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarAsignacion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 256), "idTrabajador" => twig_get_attribute($this->env, $this->source, $context["trabajador"], "id", [], "any", false, false, false, 256), "idInstruccion" => twig_get_attribute($this->env, $this->source, $context["instruccion"], "id", [], "any", false, false, false, 256)]), "html", null, true);
                                echo "\" style=\" color: fuchsia;\"><small>";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 256), "html", null, true);
                                echo "
                      <small><i class=\"far fa-trash-alt\"></i></small></small></a>&nbsp&nbsp<a href=\"";
                                // line 257
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editarInstruccion", ["idInstruccion" => twig_get_attribute($this->env, $this->source, $context["instruccion"], "id", [], "any", false, false, false, 257), "idSolicitud" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 257), "nombreTrabajador" => twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 257)]), "html", null, true);
                                echo "\"
                    style=\" color: fuchsia;\"><small><i class=\"fas fa-info\"></i></small></a><br /></h7>
                ";
                            }
                            // line 260
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruccion'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 261
                        echo "                ";
                    }
                    // line 262
                    echo "

                ";
                    // line 264
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 264), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 264), 1))) {
                        // line 265
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trabajador"], "instrucciones", [], "any", false, false, false, 265));
                        foreach ($context['_seq'] as $context["_key"] => $context["instruccion"]) {
                            // line 266
                            echo "                ";
                            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 266), "id", [], "any", false, false, false, 266), twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 266))) {
                                // line 267
                                echo "                <h7><a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarAsignacion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 267), "idTrabajador" => twig_get_attribute($this->env, $this->source, $context["trabajador"], "id", [], "any", false, false, false, 267), "idInstruccion" => twig_get_attribute($this->env, $this->source, $context["instruccion"], "id", [], "any", false, false, false, 267)]), "html", null, true);
                                echo "\" style=\" color: red;\"><small>";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 267), "html", null, true);
                                echo "
                      <small><i class=\"far fa-trash-alt\"></i></small></small></a>&nbsp&nbsp<a href=\"";
                                // line 268
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editarInstruccion", ["idInstruccion" => twig_get_attribute($this->env, $this->source, $context["instruccion"], "id", [], "any", false, false, false, 268), "idSolicitud" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 268), "nombreTrabajador" => twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 268)]), "html", null, true);
                                echo "\"
                    style=\" color: red;\"><small><i class=\"fas fa-info\"></i></small></a><br /></h7>
                ";
                            }
                            // line 271
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruccion'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 272
                        echo "                ";
                    }
                    // line 273
                    echo "

                ";
                    // line 275
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 275), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 275), 0))) {
                        // line 276
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trabajador"], "instrucciones", [], "any", false, false, false, 276));
                        foreach ($context['_seq'] as $context["_key"] => $context["instruccion"]) {
                            // line 277
                            echo "                ";
                            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 277), "id", [], "any", false, false, false, 277), twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 277))) {
                                // line 278
                                echo "                <h7><a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarAsignacion", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 278), "idTrabajador" => twig_get_attribute($this->env, $this->source, $context["trabajador"], "id", [], "any", false, false, false, 278), "idInstruccion" => twig_get_attribute($this->env, $this->source, $context["instruccion"], "id", [], "any", false, false, false, 278)]), "html", null, true);
                                echo "\"><small>";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 278), "html", null, true);
                                echo "
                      <small><i class=\"far fa-trash-alt\"></i></small></small></a>&nbsp&nbsp<a href=\"";
                                // line 279
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editarInstruccion", ["idInstruccion" => twig_get_attribute($this->env, $this->source, $context["instruccion"], "id", [], "any", false, false, false, 279), "idSolicitud" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 279), "nombreTrabajador" => twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 279)]), "html", null, true);
                                echo "\"><small><i
                        class=\"fas fa-info\"></i></small></a><br /></h7>
                ";
                            }
                            // line 282
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruccion'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 283
                        echo "
                ";
                    }
                    // line 285
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 286
                echo "              </td>





              <td>
                ";
                // line 293
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 293), 2) || 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 293), 4))) {
                    // line 294
                    echo "                <h5><a href=\"\"></a></h5>
                ";
                } else {
                    // line 296
                    echo "                ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 296), 1)) {
                        // line 297
                        echo "                <h7><a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 297)]), "html", null, true);
                        echo "\" style=\" color: red;\"><small><small><i class=\"fas fa-plus\"></i></small></small><small> Trabajador</small></a></h7>
                ";
                    }
                    // line 299
                    echo "                ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 299), 0)) {
                        // line 300
                        echo "                <h7><a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 300)]), "html", null, true);
                        echo "\"><small><small><i class=\"fas fa-plus\"></i></small></small><small> Trabajador</small></a></h7>
                ";
                    }
                    // line 302
                    echo "                ";
                }
                // line 303
                echo "              </td>


              <td>
                ";
                // line 307
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 307), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 307), 0))) {
                    // line 308
                    echo "                <h6><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoParte", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 308)]), "html", null, true);
                    echo "\"><small><small><i class=\"fas fa-plus\"></i></small></small><small> Parte</small></a></h6>
                ";
                }
                // line 310
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 310), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 310), 1))) {
                    // line 311
                    echo "                <h6><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoParte", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 311)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small><small><i class=\"fas fa-plus\"></i></small></small><small> Parte</small></a></h6>
                ";
                }
                // line 313
                echo "                ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 313), 0)) {
                    // line 314
                    echo "                <h6><a href=\"\"></a></h6>
                ";
                }
                // line 316
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 316), 4) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 316), 1))) {
                    // line 317
                    echo "                <h6><a href=\"\"></a></h6>
                ";
                }
                // line 319
                echo "              </td>


              <td>
                ";
                // line 323
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 323), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 323), 0))) {
                    // line 324
                    echo "                <h7><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anularSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 324)]), "html", null, true);
                    echo "\"><small>Anular<br /> </small> </a> </h7>
                <h7><a href=\"";
                    // line 325
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspenderSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 325)]), "html", null, true);
                    echo "\"><small>Suspender<br /></small></a></h7>
                <h7><a href=\"";
                    // line 326
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("priorizarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 326)]), "html", null, true);
                    echo "\"><small>Priorizar</small></a></h7>
                ";
                }
                // line 328
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 328), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 328), 0))) {
                    // line 329
                    echo "                <h7><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anularSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 329)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small>Anular<br /> </small> </a> </h7>
                <h7><a href=\"";
                    // line 330
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspenderSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 330)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small>Suspender<br /></small></a></h7>
                <h7><a href=\"";
                    // line 331
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desPriorizarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 331)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small>Despriorizar</small></a></h7>
                ";
                }
                // line 333
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 333), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 333), 1))) {
                    // line 334
                    echo "                <h7><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anularSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 334)]), "html", null, true);
                    echo "\"><small>Anular<br /> </small> </a> </h7>
                <h7><a href=\"";
                    // line 335
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspenderSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 335)]), "html", null, true);
                    echo "\"><small>Suspender<br /></small></a></h7>
                <h7><a href=\"";
                    // line 336
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("priorizarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 336)]), "html", null, true);
                    echo "\"><small>Priorizar</small></a></h7>
                ";
                }
                // line 338
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 338), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 338), 1))) {
                    // line 339
                    echo "                <h7><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anularSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 339)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small>Anular<br /> </small> </a> </h7>
                <h7><a href=\"";
                    // line 340
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suspenderSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 340)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small>Suspender<br /></small></a></h7>
                <h7><a href=\"";
                    // line 341
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desPriorizarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 341)]), "html", null, true);
                    echo "\" style=\" color: red;\"><small>Despriorizar</small></a></h7>
                ";
                }
                // line 343
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 343), 4) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 343), 0))) {
                    // line 344
                    echo "                <h7><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reactivarSolicitudSuspendida", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 344)]), "html", null, true);
                    echo "\" style=\"color: fuchsia;\"><small>Reactivar</small></a></h7>
                ";
                }
                // line 346
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 346), 4) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 346), 1))) {
                    // line 347
                    echo "                <h7><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reactivarSolicitudSuspendida", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 347)]), "html", null, true);
                    echo "\" style=\"color: red;\"><small>Reactivar<br /></small></a></h7>
                <h7><a href=\"";
                    // line 348
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desPriorizarSolicitud", ["id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 348)]), "html", null, true);
                    echo "\" style=\"color: red;\"><small>Despriorizar</small></a></h7>
                ";
                }
                // line 350
                echo "              </td>

            </tr>
            ";
            }
            // line 354
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 355
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
        return "gestionMantenimiento/pendientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  931 => 355,  925 => 354,  919 => 350,  914 => 348,  909 => 347,  906 => 346,  900 => 344,  897 => 343,  892 => 341,  888 => 340,  883 => 339,  880 => 338,  875 => 336,  871 => 335,  866 => 334,  863 => 333,  858 => 331,  854 => 330,  849 => 329,  846 => 328,  841 => 326,  837 => 325,  832 => 324,  830 => 323,  824 => 319,  820 => 317,  817 => 316,  813 => 314,  810 => 313,  804 => 311,  801 => 310,  795 => 308,  793 => 307,  787 => 303,  784 => 302,  778 => 300,  775 => 299,  769 => 297,  766 => 296,  762 => 294,  760 => 293,  751 => 286,  745 => 285,  741 => 283,  735 => 282,  729 => 279,  722 => 278,  719 => 277,  714 => 276,  712 => 275,  708 => 273,  705 => 272,  699 => 271,  693 => 268,  686 => 267,  683 => 266,  678 => 265,  676 => 264,  672 => 262,  669 => 261,  663 => 260,  657 => 257,  650 => 256,  647 => 255,  642 => 254,  640 => 253,  636 => 251,  633 => 250,  627 => 249,  621 => 246,  614 => 245,  611 => 244,  606 => 243,  604 => 242,  600 => 240,  594 => 238,  591 => 237,  587 => 236,  581 => 232,  575 => 230,  572 => 229,  566 => 226,  563 => 225,  560 => 224,  554 => 222,  551 => 221,  545 => 219,  542 => 218,  536 => 215,  533 => 214,  530 => 213,  524 => 210,  521 => 209,  518 => 208,  512 => 205,  509 => 204,  507 => 203,  502 => 200,  496 => 198,  493 => 197,  487 => 194,  484 => 193,  481 => 192,  475 => 190,  472 => 189,  466 => 187,  463 => 186,  457 => 183,  454 => 182,  451 => 181,  445 => 178,  442 => 177,  439 => 176,  433 => 173,  430 => 172,  428 => 171,  422 => 167,  416 => 165,  413 => 164,  407 => 161,  404 => 160,  401 => 159,  395 => 157,  392 => 156,  386 => 154,  383 => 153,  377 => 150,  374 => 149,  371 => 148,  365 => 145,  362 => 144,  359 => 143,  353 => 140,  350 => 139,  348 => 138,  342 => 134,  336 => 132,  333 => 131,  327 => 128,  324 => 127,  321 => 126,  315 => 124,  312 => 123,  306 => 121,  303 => 120,  297 => 117,  294 => 116,  291 => 115,  285 => 112,  282 => 111,  279 => 110,  273 => 107,  270 => 106,  268 => 105,  263 => 102,  257 => 100,  254 => 99,  248 => 97,  245 => 96,  239 => 94,  236 => 93,  230 => 91,  227 => 90,  221 => 88,  218 => 87,  212 => 85,  209 => 84,  203 => 82,  201 => 81,  196 => 78,  188 => 76,  185 => 75,  177 => 73,  174 => 72,  166 => 70,  163 => 69,  155 => 67,  152 => 66,  144 => 64,  141 => 63,  133 => 61,  130 => 60,  122 => 58,  120 => 57,  114 => 53,  111 => 52,  107 => 51,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gestionMantenimiento/pendientes.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\pendientes.html.twig");
    }
}
