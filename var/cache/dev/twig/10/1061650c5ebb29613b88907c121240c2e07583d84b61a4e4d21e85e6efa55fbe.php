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

/* gestionMantenimiento/solicitudesTrabajador.html.twig */
class __TwigTemplate_e2fde228681fff35a9f4a0af93791590e3a0c6716a05f8b47b5cdb438df6e491 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/solicitudesTrabajador.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/solicitudesTrabajador.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>

    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google-fonts3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google-fonts4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
  </head>

  <body>
    <nav class=\"navbar navbar-dark fixed-top navbar-expand-lg fixed-top text-right bg-danger\">
      <div class=\"container\" style=\"font-family: Saira Extra Condensed;\">
        <a class=\"navbar-brand\">
          <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_etsidi_mini_negro.png"), "html", null, true);
        echo "\" height=\"60\" alt=\"\"></a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" style=\"color:white\" ; data-target=\"#collapsibleNavbar\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
              <pre>        </pre>
            </li>
            <li class=\"nav-item\">
              <h5><a class=\"nav-link text-white\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("portadaUsuario", ["emailcrypt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "emailcrypt", [], "any", false, false, false, 32), "email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "email", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\"><small><i class=\"fas fa-home\"></i></small></a></h5>
            </li>
            ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 35
            echo "            <li class=\"nav-item\">
              <pre>         </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajador");
            echo "\" style=\"font-family: Saira Extra Condensed;\">SOLICITUDES<br />ASIGNADAS</a>
            </li>
            ";
        }
        // line 42
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 43
            echo "            <li class=\"nav-item\">
              <pre>         </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" <a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("base");
            echo "\" style=\"font-family: Saira Extra Condensed;\">GESTIÓN</a>
            </li>
            <li class=\"nav-item\">
              <pre>        </pre>
            </li>
            <li class=\"nav-item\">
              <pre>       </pre>
            </li>
            ";
        } else {
            // line 56
            echo "
            <li class=\"nav-item\">
              <pre>              </pre>
            </li>
            ";
        }
        // line 61
        echo "
            <a class=\"nav-link text-white\" <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["emailcrypt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "emailcrypt", [], "any", false, false, false, 62), "email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "email", [], "any", false, false, false, 62)]), "html", null, true);
        echo "\" style=\"font-family: Saira Extra Condensed;\">NUEVA SOLICITUD</a>
            <li class=\"nav-item\">
              <pre>               </pre>
            </li>

            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesUsuario", ["emailcrypt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "emailcrypt", [], "any", false, false, false, 68), "email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "email", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\" style=\"font-family: Saira Extra Condensed;\">MIS SOLICITUDES</a>
            </li>

            <li class=\"nav-item\">
              <pre>      </pre>
            </li>
            <li class=\"nav-item\">
              <pre>     </pre>
            <li class=\"nav-item\">
              <pre>       </pre>
            </li>

            <li class=\"nav-item\">
              <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn bg-danger\"
                style=\"border-bottom-color:#F4717C;border-top-color:#DC434F;border-left-color:#DC434F;border-right-color:#DC434F;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F54E5C), color-stop(100%,#DC434F)); margin-top:15px;color:white;height: 25px;width:70px;FONT-SIZE: 11pt;padding:0px 10px;font-family: Saira Extra Condensed\"
                role=\"button\">SALIR</a>
            </li>

            <li class=\"nav-item\">
              <pre>            </pre>
            </li>

            <li class=\"nav-item text-right\">
              <a class=\"nav-link text-warning text-right\" href=\"\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "email", [], "any", false, false, false, 91), "html", null, true);
        echo "</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!--FIN MENÚ DE NAVEGACIÓN-->

    <div class=\"container-fluid\" style=\"font-family: Saira Extra Condensed\">
      <div style=\"margin-top:50px\">
        <h1 class=\" mt-4 mb-3\">Solicitudes asignadas a ";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["nombreTrabajador"]) || array_key_exists("nombreTrabajador", $context) ? $context["nombreTrabajador"] : (function () { throw new RuntimeError('Variable "nombreTrabajador" does not exist.', 102, $this->source); })()), "html", null, true);
        echo "</<h1>
      </div>

      <div class=\"row\">

        <div class=\"col-lg-12\">
          <div class=\"table-responsive-lg\">

            <table class=\"table\">
              <thead class=\"thead-dark\">
                <tr>

                  <th scope=\"col\">
                    <h6>Referencia</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Fecha</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Estancia</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Trabajador asignado</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Instrucciones</h6>
                  </th>


                </tr>
              </thead>
              <tbody>
                ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["solicitudes"]) || array_key_exists("solicitudes", $context) ? $context["solicitudes"] : (function () { throw new RuntimeError('Variable "solicitudes" does not exist.', 134, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 134, $this->source); })()), "id", [], "any", false, false, false, 134) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 134, $this->source); })()), "id", [], "any", false, false, false, 134)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 135
            echo "                <tr>

                  <td>
                    <h5><a href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitud", ["idcrypt" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "idcrypt", [], "any", false, false, false, 138), "id" => twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 138)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 138), "html", null, true);
            echo "
                      </a></h5>
                  </td>

                  <td>
                    <h6>";
            // line 143
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "fecha", [], "any", false, false, false, 143), "Y/m/d"), "html", null, true);
            echo "</h6>
                  </td>


                  <td>
                    <h6>
                      ";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["solicitud"], "estancia", [], "any", false, false, false, 149), "html", null, true);
            echo "
                    </h6>
                  </td>


                  <td>
                    ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["solicitud"], "trabajadores", [], "any", false, false, false, 155));
            foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
                // line 156
                echo "                    <h5><small>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trabajador"], "nombre", [], "any", false, false, false, 156), "html", null, true);
                echo "</small></h5>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "                  </td>

                  <td>
                    ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["solicitud"], "trabajadores", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["trabajador"]) {
                // line 162
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trabajador"], "instrucciones", [], "any", false, false, false, 162));
                foreach ($context['_seq'] as $context["_key"] => $context["instruccion"]) {
                    // line 163
                    echo "                    ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["instruccion"], "solicitud", [], "any", false, false, false, 163), "id", [], "any", false, false, false, 163), twig_get_attribute($this->env, $this->source, $context["solicitud"], "id", [], "any", false, false, false, 163))) {
                        // line 164
                        echo "                    <h5><small>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instruccion"], "descripcionInstruccion", [], "any", false, false, false, 164), "html", null, true);
                        echo "</small></h5>
                    ";
                    }
                    // line 166
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instruccion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "
                  </td>

                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "              </tbody>
            </table>
          </div>
          <div class=\"col-md-2\">
          </div>
        </div>
      </div>
      <div style=\"margin-bottom:200px\">
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/exportacion.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/genPDF.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/downloadCanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jspdf.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

  </body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        echo "SOLICITUDES ASIGNADAS";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestionMantenimiento/solicitudesTrabajador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 6,  386 => 194,  382 => 193,  378 => 192,  374 => 191,  370 => 190,  366 => 189,  362 => 188,  358 => 187,  354 => 186,  350 => 185,  336 => 173,  326 => 168,  320 => 167,  314 => 166,  308 => 164,  305 => 163,  300 => 162,  296 => 161,  291 => 158,  282 => 156,  278 => 155,  269 => 149,  260 => 143,  250 => 138,  245 => 135,  241 => 134,  206 => 102,  192 => 91,  179 => 81,  163 => 68,  154 => 62,  151 => 61,  144 => 56,  132 => 47,  126 => 43,  123 => 42,  117 => 39,  111 => 35,  109 => 34,  104 => 32,  90 => 21,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

  <head>
    <meta charset=\"utf-8\" />
    <title>{% block titulo %}SOLICITUDES ASIGNADAS{% endblock %}</title>

    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/modern-business.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/all.css')}}\" rel=\"stylesheet\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link href=\"{{ asset('css/google-fonts3.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('css/google-fonts4.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
  </head>

  <body>
    <nav class=\"navbar navbar-dark fixed-top navbar-expand-lg fixed-top text-right bg-danger\">
      <div class=\"container\" style=\"font-family: Saira Extra Condensed;\">
        <a class=\"navbar-brand\">
          <img src=\"{{asset('img/logo_etsidi_mini_negro.png')}}\" height=\"60\" alt=\"\"></a>

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" style=\"color:white\" ; data-target=\"#collapsibleNavbar\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
              <pre>        </pre>
            </li>
            <li class=\"nav-item\">
              <h5><a class=\"nav-link text-white\" href=\"{{ path('portadaUsuario',{'emailcrypt': app.user.emailcrypt, 'email': app.user.email}) }}\"><small><i class=\"fas fa-home\"></i></small></a></h5>
            </li>
            {% if is_granted('ROLE_USER') %}
            <li class=\"nav-item\">
              <pre>         </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" <a href=\"{{path('solicitudesTrabajador')}}\" style=\"font-family: Saira Extra Condensed;\">SOLICITUDES<br />ASIGNADAS</a>
            </li>
            {% endif %}
            {% if is_granted('ROLE_ADMIN') %}
            <li class=\"nav-item\">
              <pre>         </pre>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" <a href=\"{{path('base')}}\" style=\"font-family: Saira Extra Condensed;\">GESTIÓN</a>
            </li>
            <li class=\"nav-item\">
              <pre>        </pre>
            </li>
            <li class=\"nav-item\">
              <pre>       </pre>
            </li>
            {%else%}

            <li class=\"nav-item\">
              <pre>              </pre>
            </li>
            {% endif %}

            <a class=\"nav-link text-white\" <a href=\"{{path('nuevaSolicitud',{'emailcrypt':app.user.emailcrypt, 'email':app.user.email})}}\" style=\"font-family: Saira Extra Condensed;\">NUEVA SOLICITUD</a>
            <li class=\"nav-item\">
              <pre>               </pre>
            </li>

            <li class=\"nav-item\">
              <a class=\"nav-link text-white\" href=\"{{ path('solicitudesUsuario',{'emailcrypt':app.user.emailcrypt, 'email':app.user.email}) }}\" style=\"font-family: Saira Extra Condensed;\">MIS SOLICITUDES</a>
            </li>

            <li class=\"nav-item\">
              <pre>      </pre>
            </li>
            <li class=\"nav-item\">
              <pre>     </pre>
            <li class=\"nav-item\">
              <pre>       </pre>
            </li>

            <li class=\"nav-item\">
              <a href=\"{{path('app_logout')}}\" class=\"btn bg-danger\"
                style=\"border-bottom-color:#F4717C;border-top-color:#DC434F;border-left-color:#DC434F;border-right-color:#DC434F;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F54E5C), color-stop(100%,#DC434F)); margin-top:15px;color:white;height: 25px;width:70px;FONT-SIZE: 11pt;padding:0px 10px;font-family: Saira Extra Condensed\"
                role=\"button\">SALIR</a>
            </li>

            <li class=\"nav-item\">
              <pre>            </pre>
            </li>

            <li class=\"nav-item text-right\">
              <a class=\"nav-link text-warning text-right\" href=\"\">{{app.user.email}}</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!--FIN MENÚ DE NAVEGACIÓN-->

    <div class=\"container-fluid\" style=\"font-family: Saira Extra Condensed\">
      <div style=\"margin-top:50px\">
        <h1 class=\" mt-4 mb-3\">Solicitudes asignadas a {{nombreTrabajador}}</<h1>
      </div>

      <div class=\"row\">

        <div class=\"col-lg-12\">
          <div class=\"table-responsive-lg\">

            <table class=\"table\">
              <thead class=\"thead-dark\">
                <tr>

                  <th scope=\"col\">
                    <h6>Referencia</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Fecha</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Estancia</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Trabajador asignado</h6>
                  </th>
                  <th scope=\"col\">
                    <h6>Instrucciones</h6>
                  </th>


                </tr>
              </thead>
              <tbody>
                {% for solicitud in solicitudes |sort((a, b) => b.id <=> a.id)%}
                <tr>

                  <td>
                    <h5><a href=\"{{path('solicitud',{'idcrypt':solicitud.idcrypt,'id':solicitud.id})}}\">{{solicitud.id}}
                      </a></h5>
                  </td>

                  <td>
                    <h6>{{solicitud.fecha|date('Y/m/d')}}</h6>
                  </td>


                  <td>
                    <h6>
                      {{solicitud.estancia}}
                    </h6>
                  </td>


                  <td>
                    {% for trabajador in solicitud.trabajadores %}
                    <h5><small>{{trabajador.nombre}}</small></h5>
                    {% endfor %}
                  </td>

                  <td>
                    {% for trabajador in solicitud.trabajadores %}
                    {% for instruccion in trabajador.instrucciones %}
                    {% if instruccion.solicitud.id==solicitud.id %}
                    <h5><small>{{instruccion.descripcionInstruccion}}</small></h5>
                    {% endif %}
                    {% endfor %}
                    {% endfor %}

                  </td>

                </tr>
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

    <!-- Bootstrap core JavaScript -->
    <script src=\"{{asset('js/exportacion.js')}}\"></script>
    <script src=\"{{asset('js/genPDF.js')}}\"></script>
    <script src=\"{{asset('js/downloadCanvas.js')}}\"></script>
    <script src=\"{{asset('js/html2canvas.js')}}\"></script>
    <script src=\"{{asset('js/jquery.min.js')}}\"></script>
    <script src=\"{{asset('js/jspdf.min.js')}}\"></script>
    <link href=\"{{ asset('js/bootstrap-datepicker.min.js')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('js/bootstrap-datepicker.es.min.js')}}\" rel=\"stylesheet\">
    <script src=\"{{ asset('vendor/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

  </body>

</html>", "gestionMantenimiento/solicitudesTrabajador.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\solicitudesTrabajador.html.twig");
    }
}
