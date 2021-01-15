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
class __TwigTemplate_001afe0aaee11974454a9f31cc37548332ff325a2eb93a8582fd44dbe0ba3e9f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontal/timeline.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontal/timeline.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>Cronograma</title>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google-fonts-Montserrat.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google-fonts-Droid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google-fonts-Roboto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylestimeline.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
  </head>

  <body id=\"page-top\">
    ";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        // line 82
        echo "        </ul>
        <div class=\"text-center\" style=\"margin-top:50px\">
          <h8 style=\"font-family: Helvetica; font-size:13px\"><br /><br /><br /><br /><br /><br /><br />Universidad Politécnica de Madrid ©2020</h8>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scriptstimeline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/all.js"), "html", null, true);
        echo "\"></script>


  </body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 19
        echo "
    <section class=\"page-section\" id=\"about\">
      <div class=\"container\">
        <div class=\"text-center\">
          <h2 class=\"section-heading\" style=\"font-size:30px\">Mantenimiento ETSIDI</h2>
          <h3 class=\"section-subheading text-muted\" style=\"font-size:20px\">Cronograma de la solicitud&nbsp";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " realizada por ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 24, $this->source); })()), "solicitante", [], "any", false, false, false, 24), "html", null, true);
        echo "</h3>
        </div>
        <ul class=\"timeline\">
          ";
        // line 27
        $context["i"] = 1;
        // line 28
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventos"]) || array_key_exists("eventos", $context) ? $context["eventos"] : (function () { throw new RuntimeError('Variable "eventos" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 29
            echo "          ";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 29, $this->source); })()) % 2 == 1)) {
                // line 30
                echo "
          <li>
            <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["evento"], "Imagen", [], "any", false, false, false, 32)), "html", null, true);
                echo "\" alt=\"\" /></div>
            <div class=\"timeline-panel\">
              <div class=\"timeline-heading\">
                <h4 class=\"subheading\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "tipo", [], "any", false, false, false, 35), "html", null, true);
                echo "</h4>
              </div>
              ";
                // line 37
                if (0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 37, $this->source); })()), 1)) {
                    // line 38
                    echo "              <div class=\"timeline-body\">
                <p class=\"text-muted\">";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 39, $this->source); })()), "descripcionIncidencia", [], "any", false, false, false, 39), "html", null, true);
                    echo "</p>
              </div>
              ";
                }
                // line 42
                echo "              <div class=\"timeline-body\">
                <p class=\"text-muted\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "causa", [], "any", false, false, false, 43), "html", null, true);
                echo "</p>
              </div>
              <div class=\"timeline-body\">
                <p class=\"text-muted\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "rapidez", [], "any", false, false, false, 46), "html", null, true);
                echo "</p>
              </div>
              <div class=\"timeline-body\">
                <p class=\"text-muted\">";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "fecha", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
                echo "</p>
              </div>
            </div>
          </li>
          ";
            } else {
                // line 54
                echo "
          <li class=\"timeline-inverted\">
            <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["evento"], "Imagen", [], "any", false, false, false, 56)), "html", null, true);
                echo "\" alt=\"\" /></div>
            <div class=\"timeline-panel\">
              <div class=\"timeline-heading\">
                <h4 class=\"subheading\">";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "tipo", [], "any", false, false, false, 59), "html", null, true);
                echo "</h4>
              </div>
              ";
                // line 61
                if (0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 61, $this->source); })()), 1)) {
                    // line 62
                    echo "              <div class=\"timeline-body\">
                <p class=\"text-muted\">";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["solicitud"]) || array_key_exists("solicitud", $context) ? $context["solicitud"] : (function () { throw new RuntimeError('Variable "solicitud" does not exist.', 63, $this->source); })()), "descripcionIncidencia", [], "any", false, false, false, 63), "html", null, true);
                    echo "</p>
              </div>
              ";
                }
                // line 66
                echo "              <div class=\"timeline-body\">
                <p class=\"text-muted\">";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "causa", [], "any", false, false, false, 67), "html", null, true);
                echo "</p>
              </div>
              <div class=\"timeline-body\">
                <p class=\"text-muted\">";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "rapidez", [], "any", false, false, false, 70), "html", null, true);
                echo "</p>
              </div>
              <div class=\"timeline-body\">
                <p class=\"text-muted\">";
                // line 73
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "fecha", [], "any", false, false, false, 73), "d/m/Y"), "html", null, true);
                echo "</p>
              </div>

            </div>
          </li>
          ";
            }
            // line 79
            echo "          ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 79, $this->source); })()) + 1);
            // line 80
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  262 => 81,  256 => 80,  253 => 79,  244 => 73,  238 => 70,  232 => 67,  229 => 66,  223 => 63,  220 => 62,  218 => 61,  213 => 59,  207 => 56,  203 => 54,  195 => 49,  189 => 46,  183 => 43,  180 => 42,  174 => 39,  171 => 38,  169 => 37,  164 => 35,  158 => 32,  154 => 30,  151 => 29,  146 => 28,  144 => 27,  136 => 24,  129 => 19,  119 => 18,  103 => 94,  99 => 93,  95 => 92,  91 => 91,  87 => 90,  77 => 82,  75 => 18,  68 => 14,  63 => 12,  59 => 11,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>Cronograma</title>
    <link href=\"{{ asset('css/google-fonts-Montserrat.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('css/google-fonts-Droid.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('css/google-fonts-Roboto.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=\"{{ asset('css/stylestimeline.css')}}\" rel=\"stylesheet\" type=\"text/css\">
  </head>

  <body id=\"page-top\">
    {% block contenido %}

    <section class=\"page-section\" id=\"about\">
      <div class=\"container\">
        <div class=\"text-center\">
          <h2 class=\"section-heading\" style=\"font-size:30px\">Mantenimiento ETSIDI</h2>
          <h3 class=\"section-subheading text-muted\" style=\"font-size:20px\">Cronograma de la solicitud&nbsp{{id}} realizada por {{solicitud.solicitante}}</h3>
        </div>
        <ul class=\"timeline\">
          {% set i = 1 %}
          {% for evento in eventos %}
          {% if i is odd %}

          <li>
            <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"{{asset(evento.Imagen)}}\" alt=\"\" /></div>
            <div class=\"timeline-panel\">
              <div class=\"timeline-heading\">
                <h4 class=\"subheading\">{{evento.tipo}}</h4>
              </div>
              {% if i == 1 %}
              <div class=\"timeline-body\">
                <p class=\"text-muted\">{{solicitud.descripcionIncidencia}}</p>
              </div>
              {% endif %}
              <div class=\"timeline-body\">
                <p class=\"text-muted\">{{evento.causa}}</p>
              </div>
              <div class=\"timeline-body\">
                <p class=\"text-muted\">{{evento.rapidez}}</p>
              </div>
              <div class=\"timeline-body\">
                <p class=\"text-muted\">{{evento.fecha|date('d/m/Y')}}</p>
              </div>
            </div>
          </li>
          {% else %}

          <li class=\"timeline-inverted\">
            <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"{{asset(evento.Imagen)}}\" alt=\"\" /></div>
            <div class=\"timeline-panel\">
              <div class=\"timeline-heading\">
                <h4 class=\"subheading\">{{evento.tipo}}</h4>
              </div>
              {% if i == 1 %}
              <div class=\"timeline-body\">
                <p class=\"text-muted\">{{solicitud.descripcionIncidencia}}</p>
              </div>
              {% endif %}
              <div class=\"timeline-body\">
                <p class=\"text-muted\">{{evento.causa}}</p>
              </div>
              <div class=\"timeline-body\">
                <p class=\"text-muted\">{{evento.rapidez}}</p>
              </div>
              <div class=\"timeline-body\">
                <p class=\"text-muted\">{{evento.fecha|date('d/m/Y')}}</p>
              </div>

            </div>
          </li>
          {% endif %}
          {% set i = i + 1 %}
          {% endfor %}
          {% endblock %}
        </ul>
        <div class=\"text-center\" style=\"margin-top:50px\">
          <h8 style=\"font-family: Helvetica; font-size:13px\"><br /><br /><br /><br /><br /><br /><br />Universidad Politécnica de Madrid ©2020</h8>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src=\"{{ asset('vendor/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{asset('js/jquery.easing.min.js')}}\"></script>
    <script src=\"{{asset('js/scriptstimeline.js')}}\"></script>
    <script src=\"{{asset('js/all.js')}}\"></script>


  </body>

</html>", "frontal/timeline.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\frontal\\timeline.html.twig");
    }
}
