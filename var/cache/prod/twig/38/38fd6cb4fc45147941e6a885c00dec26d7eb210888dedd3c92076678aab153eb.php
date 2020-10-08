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

/* gestionMantenimiento/parte.html.twig */
class __TwigTemplate_f8715e50af699efeaa0005afcee80d7f3fdd15a11dd1e3f944d012c2686359b5 extends Template
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
        // line 2
        return "frontal/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/parte.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "Parte
";
    }

    // line 9
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<!-- Page Content -->
<div class=\"container\">
  <div style=\"margin-top:75px\">

    <!-- Page Heading/Breadcrumbs -->

    <!-- Portfolio Item Row -->
    <div id=\"content\">
      <div class=\"row\">

        <div class=\"col-lg-20\">
          <h1 class=\"mt-4 mb-3\">Parte de Trabajo ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "id", [], "any", false, false, false, 21), "html", null, true);
        echo " </h1>

          <h3 class=\"my-3\">localización: <small> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "localizacion", [], "any", false, false, false, 23), "html", null, true);
        echo "</small></h3>

          <h3 class=\"my-3\">Fecha de inicio: <small>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "fechainicio", [], "any", false, false, false, 25), "Y/m/d"), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Fecha de finalización: <small>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "fechafin", [], "any", false, false, false, 26), "Y/m/d"), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">intervención realizada por:</h3>
          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "solicitud", [], "any", false, false, false, 28), "trabajadores", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
            // line 29
            echo "          <h3 class=\"my-3\"><small>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 29), "html", null, true);
            echo ":&nbsp</small></h3>
          ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trabajador"], "instrucciones", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["instruccion"]) {
                // line 31
                echo "          ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "solicitud", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "          <h3 class=\"my-3\"><small>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspInstrucciones:&nbsp";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instruccion"], "descripcionInstruccion", [], "any", false, false, false, 32), "html", null, true);
                    echo "&nbsp</small></h3>
          ";
                }
                // line 34
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruccion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "          <h3 class=\"my-3\">Trabajos realizados: <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "descripcion", [], "any", false, false, false, 36), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Solicitud que genera el parte: <small>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "solicitud", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Solicitante de la intervención: <small>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "solicitud", [], "any", false, false, false, 38), "solicitante", [], "any", false, false, false, 38), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Especialidades requeridas en la intervención:</h3>
          ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["parte"] ?? null), "especialidades", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["especialidad"]) {
            // line 41
            echo "          <h3 class=\"my-3\"><small>&nbsp&nbsp";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["especialidad"], "tipo", [], "any", false, false, false, 41), "html", null, true);
            echo "&nbsp</small></h3>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['especialidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "


        </div>
        <!-- /.row -->

      </div>
    </div>
    <div id=\"editor\" style=\"margin-top:20px\"></div>

    <button id=\"cmd\">Generar PDF</button>


  </div>
  <div style=\"margin-bottom:75px\">
  </div>


</div>

";
    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "
<script>
  var doc = new jsPDF();
  var specialElementHandlers = {
    '#editor': function(element, renderer) {
      return true;
    }
  };

  \$('#cmd').click(function() {
    doc.fromHTML(\$('#content').html(), 15, 15, {
      'width': 170,
      'elementHandlers': specialElementHandlers
    });
    doc.save('Parte.pdf');
  });

  // This code is collected but useful, click below to jsfiddle link.
</script>



";
    }

    public function getTemplateName()
    {
        return "gestionMantenimiento/parte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 65,  178 => 64,  154 => 43,  145 => 41,  141 => 40,  136 => 38,  132 => 37,  127 => 36,  121 => 35,  115 => 34,  109 => 32,  106 => 31,  102 => 30,  97 => 29,  93 => 28,  88 => 26,  84 => 25,  79 => 23,  74 => 21,  61 => 10,  57 => 9,  52 => 5,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "gestionMantenimiento/parte.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\parte.html.twig");
    }
}
