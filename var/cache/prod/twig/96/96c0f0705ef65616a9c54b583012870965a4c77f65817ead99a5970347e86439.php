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

/* gestionMantenimiento/solicitud.html.twig */
class __TwigTemplate_69b8595dcc4a674e3e2cfd804a49c4b7debeb6f42e2297c2e6035f58a202790c extends Template
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
        $this->parent = $this->loadTemplate("frontal/base.html.twig", "gestionMantenimiento/solicitud.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "Solicitud
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
          <h1 class=\"mt-4 mb-3\">Solicitud ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "id", [], "any", false, false, false, 21), "html", null, true);
        echo " </h1>
          <h3 class=\"my-3\">Solicitante: <small> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "solicitante", [], "any", false, false, false, 22), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Unidad de destino: <small> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "destino", [], "any", false, false, false, 23), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Fecha: <small>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "fecha", [], "any", false, false, false, 24), "Y/m/d"), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Extensión: <small>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "extension", [], "any", false, false, false, 25), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Email: <small>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Descripción Incidencia: <small>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "descripcionIncidencia", [], "any", false, false, false, 27), "html", null, true);
        echo "</small></h3>
          <h3 class=\"my-3\">Lugar Incidencia: <small>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "estancia", [], "any", false, false, false, 28), "html", null, true);
        echo "</small></h3>
          ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "trabajadores", [], "any", false, false, false, 29)) {
            // line 30
            echo "          <h3 class=\"my-3\">Solicitud asignada a:</h3>
          ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "trabajadores", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
                // line 32
                echo "          <h3 class=\"my-3\"><small>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 32), "html", null, true);
                echo "</small></h3>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "          ";
        } else {
            // line 35
            echo "          <h3 class=\"my-3\">Solicitud pendiente de ser asignada</h3>
          ";
        }
        // line 37
        echo "          ";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "estado", [], "any", false, false, false, 37), 2)) {
            // line 38
            echo "          <h3 class=\"my-3\"> Solicitud despachada</h3>
          ";
        }
        // line 40
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "trabajadores", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
            // line 41
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trabajador"], "instrucciones", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["instruccion"]) {
                // line 42
                echo "          ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, ($context["solicitud"] ?? null), "id", [], "any", false, false, false, 42))) {
                    // line 43
                    echo "          <h3 class=\"my-3\">Instrucciones para ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 43), "html", null, true);
                    echo ": <small>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instruccion"], "descripcionInstruccion", [], "any", false, false, false, 43), "html", null, true);
                    echo "</small></h3>
          ";
                }
                // line 45
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruccion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        </div>
        <!-- /.row -->

      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-20\">
        <button id=\"cmd\">Generar PDF</button>
      </div>
      <div class=\"col-lg-20\">
      </div>


      <div style=\"margin-bottom:75px\">
      </div>
    </div>

  </div>

</div>

";
    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
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
    doc.save('Solicitud.pdf');
  });

  // This code is collected but useful, click below to jsfiddle link.
</script>
";
    }

    public function getTemplateName()
    {
        return "gestionMantenimiento/solicitud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 72,  198 => 71,  171 => 47,  165 => 46,  159 => 45,  151 => 43,  148 => 42,  143 => 41,  138 => 40,  134 => 38,  131 => 37,  127 => 35,  124 => 34,  115 => 32,  111 => 31,  108 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  61 => 10,  57 => 9,  52 => 5,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "gestionMantenimiento/solicitud.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\solicitud.html.twig");
    }
}
