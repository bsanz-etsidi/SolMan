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

/* frontal/timeline.html.twig */
class __TwigTemplate_c1e7e68fe13a04e60a3320e65565fc198765c37e6ca36307abbc8e1b4ec3b340 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'titulo' => [$this, 'block_titulo'],
            'contenido' => [$this, 'block_contenido'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/timeline.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  </head>

  <body>
    ";
        // line 12
        $this->displayBlock('contenido', $context, $blocks);
        // line 46
        echo "
  </body>

</html>";
    }

    // line 6
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Cronograma";
    }

    // line 12
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    <div style=\"margin-top:40px\">
      <font color=\"white\">
        <h1>&nbsp&nbspCronograma de la solicitud&nbsp";
        // line 16
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "<br />
      </font>

    </div>
    <div style=\"margin-bottom:60px\">
    </div>
    ";
        // line 22
        $context["i"] = 1;
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eventos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 24
            echo "    ";
            if ((($context["i"] ?? null) % 2 == 1)) {
                // line 25
                echo "    <div class=\"timeline\">
      <div class=\"container left\">
        <div class=\"content\">
          <h2>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "tipo", [], "any", false, false, false, 28), "html", null, true);
                echo "</h2>
          <h4 style=\"font-style:italic\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "causa", [], "any", false, false, false, 29), "html", null, true);
                echo "</h4>
          <p>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "fecha", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
                echo "</p>
        </div>
      </div>
      ";
            } else {
                // line 34
                echo "      <div class=\" container right\">
        <div class=\"content\">
          <h2>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "tipo", [], "any", false, false, false, 36), "html", null, true);
                echo "
            <h4 style=\"font-style:italic\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "causa", [], "any", false, false, false, 37), "html", null, true);
                echo "</h4>
            <p>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "fecha", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
                echo "</p>
        </div>
      </div>
    </div>
    ";
            }
            // line 43
            echo "    ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    ";
    }

    public function getTemplateName()
    {
        return "frontal/timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 45,  148 => 44,  145 => 43,  137 => 38,  133 => 37,  129 => 36,  125 => 34,  118 => 30,  114 => 29,  110 => 28,  105 => 25,  102 => 24,  97 => 23,  95 => 22,  86 => 16,  81 => 13,  77 => 12,  70 => 6,  63 => 46,  61 => 12,  54 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontal/timeline.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\frontal\\timeline.html.twig");
    }
}
