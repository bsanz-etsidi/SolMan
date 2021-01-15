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
        echo "<div class=\"container-fluid\" style=\"font-family: Saira Extra Condensed\">
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
              <th scope=\"col\" style=\"width:200px\">
                <h6>Descripción</h6>
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
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["solicitudes"]) || array_key_exists("solicitudes", $context) ? $context["solicitudes"] : (function () { throw new RuntimeError('Variable "solicitudes" does not exist.', 51, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)); }));
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 58), "id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 58)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 61), "id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 61)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 64), "id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 64)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 67), "id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 67)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 70), "id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 70)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 73), "id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 73)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 76), "id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 76)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronograma", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 82)]), "html", null, true);
                    echo "\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                ";
                }
                // line 84
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 84), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 84), 0))) {
                    // line 85
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronograma", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 85)]), "html", null, true);
                    echo "\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                ";
                }
                // line 87
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 87), 1) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 87), 4))) {
                    // line 88
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronograma", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 88)]), "html", null, true);
                    echo "\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                ";
                }
                // line 90
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 90), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 90), 1))) {
                    // line 91
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronograma", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 91)]), "html", null, true);
                    echo "\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                ";
                }
                // line 93
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 93), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 93), 0))) {
                    // line 94
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronograma", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 94)]), "html", null, true);
                    echo "\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                ";
                }
                // line 96
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "prioritaria", [], "any", false, false, false, 96), 0) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 96), 4))) {
                    // line 97
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronograma", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 97)]), "html", null, true);
                    echo "\" style=\"color: fuchsia;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                ";
                }
                // line 99
                echo "                ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["solicitud"], "estado", [], "any", false, false, false, 99), 2)) {
                    // line 100
                    echo "                <h5><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronograma", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 100)]), "html", null, true);
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
        return array (  961 => 355,  955 => 354,  949 => 350,  944 => 348,  939 => 347,  936 => 346,  930 => 344,  927 => 343,  922 => 341,  918 => 340,  913 => 339,  910 => 338,  905 => 336,  901 => 335,  896 => 334,  893 => 333,  888 => 331,  884 => 330,  879 => 329,  876 => 328,  871 => 326,  867 => 325,  862 => 324,  860 => 323,  854 => 319,  850 => 317,  847 => 316,  843 => 314,  840 => 313,  834 => 311,  831 => 310,  825 => 308,  823 => 307,  817 => 303,  814 => 302,  808 => 300,  805 => 299,  799 => 297,  796 => 296,  792 => 294,  790 => 293,  781 => 286,  775 => 285,  771 => 283,  765 => 282,  759 => 279,  752 => 278,  749 => 277,  744 => 276,  742 => 275,  738 => 273,  735 => 272,  729 => 271,  723 => 268,  716 => 267,  713 => 266,  708 => 265,  706 => 264,  702 => 262,  699 => 261,  693 => 260,  687 => 257,  680 => 256,  677 => 255,  672 => 254,  670 => 253,  666 => 251,  663 => 250,  657 => 249,  651 => 246,  644 => 245,  641 => 244,  636 => 243,  634 => 242,  630 => 240,  624 => 238,  621 => 237,  617 => 236,  611 => 232,  605 => 230,  602 => 229,  596 => 226,  593 => 225,  590 => 224,  584 => 222,  581 => 221,  575 => 219,  572 => 218,  566 => 215,  563 => 214,  560 => 213,  554 => 210,  551 => 209,  548 => 208,  542 => 205,  539 => 204,  537 => 203,  532 => 200,  526 => 198,  523 => 197,  517 => 194,  514 => 193,  511 => 192,  505 => 190,  502 => 189,  496 => 187,  493 => 186,  487 => 183,  484 => 182,  481 => 181,  475 => 178,  472 => 177,  469 => 176,  463 => 173,  460 => 172,  458 => 171,  452 => 167,  446 => 165,  443 => 164,  437 => 161,  434 => 160,  431 => 159,  425 => 157,  422 => 156,  416 => 154,  413 => 153,  407 => 150,  404 => 149,  401 => 148,  395 => 145,  392 => 144,  389 => 143,  383 => 140,  380 => 139,  378 => 138,  372 => 134,  366 => 132,  363 => 131,  357 => 128,  354 => 127,  351 => 126,  345 => 124,  342 => 123,  336 => 121,  333 => 120,  327 => 117,  324 => 116,  321 => 115,  315 => 112,  312 => 111,  309 => 110,  303 => 107,  300 => 106,  298 => 105,  293 => 102,  287 => 100,  284 => 99,  278 => 97,  275 => 96,  269 => 94,  266 => 93,  260 => 91,  257 => 90,  251 => 88,  248 => 87,  242 => 85,  239 => 84,  233 => 82,  231 => 81,  226 => 78,  218 => 76,  215 => 75,  207 => 73,  204 => 72,  196 => 70,  193 => 69,  185 => 67,  182 => 66,  174 => 64,  171 => 63,  163 => 61,  160 => 60,  152 => 58,  150 => 57,  144 => 53,  141 => 52,  137 => 51,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontal/base.html.twig' %}
{% block titulo %}Solicitudes{% endblock %}
{% block contenido %}
<div class=\"container-fluid\" style=\"font-family: Saira Extra Condensed\">
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
              <th scope=\"col\" style=\"width:200px\">
                <h6>Descripción</h6>
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

            {% for solicitud in solicitudes|sort((a, b) => b.id <=> a.id) %}
            {% if solicitud.estado!=3 %}

            <tr>

              <td>
                {% if solicitud.prioritaria==1 and solicitud.estado==1 %}
                <h5><a href=\"{{path('solicitud',{'idcrypt':solicitud.idcrypt, 'id':solicitud.id})}}\" style=\"color: red;\">{{solicitud.id}}</a></h5>
                {% endif %}
                {% if solicitud.prioritaria==1 and solicitud.estado==0 %}
                <h5><a href=\"{{path('solicitud',{'idcrypt':solicitud.idcrypt,'id':solicitud.id})}}\" style=\"color: red;\">{{solicitud.id}}</a></h5>
                {% endif %}
                {% if solicitud.prioritaria==1 and solicitud.estado==4 %}
                <h5><a href=\"{{path('solicitud',{'idcrypt':solicitud.idcrypt,'id':solicitud.id})}}\" style=\"color: red;\">{{solicitud.id}}</a></h5>
                {% endif %}
                {% if solicitud.prioritaria==0 and solicitud.estado==1 %}
                <h5><a href=\"{{path('solicitud',{'idcrypt':solicitud.idcrypt,'id':solicitud.id})}}\">{{solicitud.id}}</a></h5>
                {% endif %}
                {% if solicitud.prioritaria==0 and solicitud.estado==0 %}
                <h5><a href=\"{{path('solicitud',{'idcrypt':solicitud.idcrypt,'id':solicitud.id})}}\">{{solicitud.id}}</a></h5>
                {% endif %}
                {% if solicitud.prioritaria==0 and solicitud.estado==4 %}
                <h5><a href=\"{{path('solicitud',{'idcrypt':solicitud.idcrypt,'id':solicitud.id})}}\" style=\"color: fuchsia;\">{{solicitud.id}}</a></h5>
                {% endif %}
                {% if solicitud.estado==2 %}
                <h5><a href=\"{{path('solicitud',{'idcrypt':solicitud.idcrypt,'id':solicitud.id})}}\">{{solicitud.id}}</a></h5>
                {% endif %}
              </td>

              <td>
                {% if solicitud.prioritaria==1 and solicitud.estado==1 %}
                <h5><a href=\"{{path('cronograma',{'idcrypt':solicitud.idcrypt})}}\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                {% endif %}
                {% if solicitud.prioritaria==1 and solicitud.estado==0 %}
                <h5><a href=\"{{path('cronograma',{'idcrypt':solicitud.idcrypt})}}\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                {% endif %}
                {% if solicitud.prioritaria==1 and solicitud.estado==4 %}
                <h5><a href=\"{{path('cronograma',{'idcrypt':solicitud.idcrypt})}}\" style=\"color: red;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                {% endif %}
                {% if solicitud.prioritaria==0 and solicitud.estado==1 %}
                <h5><a href=\"{{path('cronograma',{'idcrypt':solicitud.idcrypt})}}\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                {% endif %}
                {% if solicitud.prioritaria==0 and solicitud.estado==0 %}
                <h5><a href=\"{{path('cronograma',{'idcrypt':solicitud.idcrypt})}}\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                {% endif %}
                {% if solicitud.prioritaria==0 and solicitud.estado==4 %}
                <h5><a href=\"{{path('cronograma',{'idcrypt':solicitud.idcrypt})}}\" style=\"color: fuchsia;\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
                {% endif %}
                {% if solicitud.estado==2 %}
                <h5><a href=\"{{path('cronograma',{'idcrypt':solicitud.idcrypt})}}\"><small><i class=\"far fa-hourglass\"></i></small></a></h5>
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
                {% if solicitud.prioritaria==1 and solicitud.estado==1%}
                <font color=\"red\">
                  <h6><small>{{solicitud.descripcionIncidencia}}</small></h6>
                </font>
                {% endif %}
                {% if solicitud.prioritaria==1 and solicitud.estado==0%}
                <font color=\"red\">
                  <h6><small>{{solicitud.descripcionIncidencia}}</small></h6>
                </font>
                {% endif %}
                {% if solicitud.prioritaria==1 and solicitud.estado==4%}
                <font color=\"red\">
                  <h6><small>{{solicitud.descripcionIncidencia}}</small></h6>
                </font>
                {% endif %}
                {% if solicitud.prioritaria==0 and solicitud.estado==1%}
                <h6><small>{{solicitud.descripcionIncidencia}}</small></h6>
                {% endif %}
                {% if solicitud.prioritaria==0 and solicitud.estado==0%}
                <h6><small>{{solicitud.descripcionIncidencia}}</small></h6>
                {% endif %}
                {% if solicitud.prioritaria==0 and solicitud.estado==4 %}
                <font color=\"fuchsia\">
                  <h6><small>{{solicitud.descripcionIncidencia}}</small></h6>
                </font>
                {% endif %}
                {% if solicitud.estado==2 %}
                <h6><small>{{solicitud.descripcionIncidencia}}</small></h6>
                {% endif %}
              </td>


              <td>
                {% for trabajador in solicitud.trabajadores %}
                {% if solicitud.estado==2 %}
                <h7><small>{{trabajador.nombre}}<br /></small></h7>
                {% endif %}


                {% if solicitud.estado==4 and solicitud.prioritaria==1 %}
                {% for instruccion in trabajador.instrucciones %}
                {% if instruccion.solicitud.id==solicitud.id %}
                <h7><a href=\"{{path('borrarAsignacion',{'id':solicitud.id, 'idTrabajador':trabajador.id, 'idInstruccion':instruccion.id})}}\" style=\" color: red;\"><small>{{trabajador.nombre}}
                      <small><i class=\"far fa-trash-alt\"></i></small></small></a>&nbsp&nbsp<a href=\"{{path('editarInstruccion',{'idInstruccion':instruccion.id, 'idSolicitud':solicitud.id, 'nombreTrabajador':trabajador.nombre})}}\"
                    style=\" color: red;\"><small><i class=\"fas fa-info\"></i></small></a><br /></h7>
                {% endif %}
                {% endfor %}
                {% endif %}


                {% if solicitud.estado==4 and solicitud.prioritaria==0 %}
                {% for instruccion in trabajador.instrucciones %}
                {% if instruccion.solicitud.id==solicitud.id %}
                <h7><a href=\"{{path('borrarAsignacion',{'id':solicitud.id, 'idTrabajador':trabajador.id, 'idInstruccion':instruccion.id})}}\" style=\" color: fuchsia;\"><small>{{trabajador.nombre}}
                      <small><i class=\"far fa-trash-alt\"></i></small></small></a>&nbsp&nbsp<a href=\"{{path('editarInstruccion',{'idInstruccion':instruccion.id, 'idSolicitud':solicitud.id, 'nombreTrabajador':trabajador.nombre})}}\"
                    style=\" color: fuchsia;\"><small><i class=\"fas fa-info\"></i></small></a><br /></h7>
                {% endif %}
                {% endfor %}
                {% endif %}


                {% if solicitud.estado==1 and solicitud.prioritaria==1 %}
                {% for instruccion in trabajador.instrucciones %}
                {% if instruccion.solicitud.id==solicitud.id %}
                <h7><a href=\"{{path('borrarAsignacion',{'id':solicitud.id, 'idTrabajador':trabajador.id, 'idInstruccion':instruccion.id})}}\" style=\" color: red;\"><small>{{trabajador.nombre}}
                      <small><i class=\"far fa-trash-alt\"></i></small></small></a>&nbsp&nbsp<a href=\"{{path('editarInstruccion',{'idInstruccion':instruccion.id, 'idSolicitud':solicitud.id, 'nombreTrabajador':trabajador.nombre})}}\"
                    style=\" color: red;\"><small><i class=\"fas fa-info\"></i></small></a><br /></h7>
                {% endif %}
                {% endfor %}
                {% endif %}


                {% if solicitud.estado==1 and solicitud.prioritaria==0 %}
                {% for instruccion in trabajador.instrucciones %}
                {% if instruccion.solicitud.id==solicitud.id %}
                <h7><a href=\"{{path('borrarAsignacion',{'id':solicitud.id, 'idTrabajador':trabajador.id, 'idInstruccion':instruccion.id})}}\"><small>{{trabajador.nombre}}
                      <small><i class=\"far fa-trash-alt\"></i></small></small></a>&nbsp&nbsp<a href=\"{{path('editarInstruccion',{'idInstruccion':instruccion.id, 'idSolicitud':solicitud.id, 'nombreTrabajador':trabajador.nombre})}}\"><small><i
                        class=\"fas fa-info\"></i></small></a><br /></h7>
                {% endif %}
                {% endfor %}

                {% endif %}
                {% endfor %}
              </td>





              <td>
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
              </td>


              <td>
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
              </td>


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
{% endblock %}", "gestionMantenimiento/pendientes.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\pendientes.html.twig");
    }
}
