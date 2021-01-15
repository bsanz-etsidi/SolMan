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

/* frontal/rellenarSatisfaccion.html.twig */
class __TwigTemplate_056b255c7c37df1fd27e6e3d2743c90f6a124aab8ebe1621e4f9f705204ed0bb extends Template
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
            'titulo' => [$this, 'block_titulo'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontal/rellenarSatisfaccion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontal/rellenarSatisfaccion.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 3
        echo "
";
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), [0 => "baseForm.html.twig"], true);
        // line 5
        $this->displayBlock('contenido', $context, $blocks);
        // line 154
        echo "



    <!-- Bootstrap core JS-->
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/all.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/exportacion.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/genPDF.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/downloadCanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jspdf.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/coming-soon.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

  </body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 6
        echo "
<html>

  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>";
        // line 14
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>


    <!-- Google fonts-->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google-fonts3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google-fonts4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom fonts for this template -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coming-soon.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
  </head>


  <body style=\"background-color:#E3E5E6; padding-top:30px\">

    <!-- Navigation-->
    <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top bg-danger\" id=\"sideNav\">

      <a class=\"navbar-brand\">
        <span class=\"d-none d-lg-block\"><img class=\"img-fluid img-profile rounded-circle mx-auto mb-2\" style=\"vertical-align:middle;margin:125px\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo2.jpg"), "html", null, true);
        echo "\" alt=\"\" /></span>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span
          class=\"navbar-toggler-icon\"></span></button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\"><a class=\"nav-link\" style=\"text-transform:lowercase; font-size:20px; font-weight:40; color:#D6C9B6; font-family: Saira Extra Condensed\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "</a></li>

          <li class=\"nav-item\"><a class=\"nav-link text-white\" style=\"font-family: Saira Extra Condensed; font-size:25px;\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["emailcrypt" => (isset($context["emailcrypt"]) || array_key_exists("emailcrypt", $context) ? $context["emailcrypt"] : (function () { throw new RuntimeError('Variable "emailcrypt" does not exist.', 48, $this->source); })()), "email" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 48, $this->source); })())]), "html", null, true);
        echo "\">NUEVA SOLICITUD</a></li>
          <li class=\"nav-item\">
            <a class=\"nav-link text-white\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesUsuario", ["emailcrypt" => (isset($context["emailcrypt"]) || array_key_exists("emailcrypt", $context) ? $context["emailcrypt"] : (function () { throw new RuntimeError('Variable "emailcrypt" does not exist.', 50, $this->source); })()), "email" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 50, $this->source); })())]), "html", null, true);
        echo "\" style=\"font-family: Saira Extra Condensed; font-size:25px;\">MIS SOLICITUDES</a>
          </li>
          ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 53
            echo "          <li class=\"nav-item\"><a class=\"nav-link text-white\" style=\"font-family: Saira Extra Condensed; font-size:25px;\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("base");
            echo "\">GESTIÓN</a></li>
          ";
        }
        // line 55
        echo "          ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 56
            echo "          <li class=\"nav-item\"><a class=\"nav-link text-white\" style=\"font-family: Saira Extra Condensed; font-size:25px;\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesTrabajador");
            echo "\">SOLICITUDES ASIGNADAS</a></li>
          ";
        }
        // line 58
        echo "          <li class=\"nav-item\">
            <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-primary\"
              style=\"margin-top:50px; height: 25px; width:70px; background-color: #2D2D3B ; border: none;font-size:15px; font-weight:550; letter-spacing: 0.09em; font-family: Saira Extra Condensed; padding:3px 5px\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"
              role=\"button\">SALIR</a>
          </li>
          <li class=\"nav-item\"><a class=\"nav-link text-white\"><br /></a></li>
          <li class=\"nav-item\"><a class=\"nav-link text-white\"><br /></a></li>
          <li class=\"nav-item\"><a class=\"nav-link text-white\"><br /><br /></a></li>

        </ul>
      </div>
    </nav>
    <!-- Page Content-->
    <div class=\"container-fluid\">
      <h1 style=\"font-size:90px; font-weight: 700; font-family: Saira Extra Condensed; margin-left:100px; margin-top:30px; padding-top:0px\">
        SSII
        <span class=\"text-danger\" style=\"font-size:90px; font-weight: 700; font-family: Saira Extra Condensed;\">ETSIDI <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_upm.png"), "html", null, true);
        echo "\" class=\"rounded\" height=\"80\" color=\"white\" alt=\"Responsive image\"></span>
      </h1>
      <h5 style=\"line-height:0; font-family: Saira Extra Condensed;  margin-left:100px;\">MANTENIMIENTO-ETSIDI-UPM</h5>

      <div class=\"text-center justify-content-md-center\" style=\"margin-top:60px;\">
        <div class=\"col-lg-12 justify-content-md-center\">

          <div>

            <div style=\"margin-top:75px\">
              <h2 class=\"mt-4 mb-3 text-danger\" style=\"font-family: Saira Extra Condensed;\">
                RELLENE EL SIGUIENTE FORMULARIO PARA LA VALORACIÓN DE LOS TRABAJOS:
              </h2>
            </div>

            <div style=\"margin-top:50px; font-family:Saira Extra Condensed; font-size:22px; font-weight: 200;\">
              <div class=\"row justify-content-md-center\">
                <div class=\"col-lg-12\">
                  ";
        // line 92
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), [0 => "form/baseForm.html.twig"], true);
        // line 93
        echo "                  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_start');
        echo "

                  <table align=\"center\">
                    <tr>
                      <td align=\"center\">
                        <div style=\"line-height:75%;\">
                          <br /><br /><br />
                        </div>
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "satisfaccion", [], "any", false, false, false, 101), 'label');
        echo "
                      </td>
                    </tr>
                    <tr>
                      <td>

                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "satisfaccion", [], "any", false, false, false, 107), 'widget');
        echo "
                      </td>
                      <td>
                        <h1>
                          <pre></pre>
                        </h1>
                      </td>
                    </tr>
                    <tr>
                      <td align=\"center\">
                        <div style=\"line-height:75%;\">
                          <br /><br /><br />
                        </div>
                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "rapidez", [], "any", false, false, false, 120), 'label');
        echo "
                      </td>
                    </tr>
                    <tr>
                      <td>
                        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "rapidez", [], "any", false, false, false, 125), 'widget');
        echo "
                      </td>
                    </tr>
                    <tr>

                    <tr>
                      <td>
                        <div style=\"line-height:75%;\">
                          <br /><br /><br />
                        </div>
                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "Aceptar", [], "any", false, false, false, 135), 'label');
        echo "

                        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "Aceptar", [], "any", false, false, false, 137), 'widget');
        echo "
                        <h8 style=\"font-family: Helvetica; font-size:13px\"><br /><br /><br /><br /><br /><br />Universidad Politécnica de Madrid ©2020</h8>

                      </td>
                    </tr>

                  </table>
                  ";
        // line 144
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), 'form_end');
        echo "

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        echo "CAU MANTENIMIENTO ETSIDI";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontal/rellenarSatisfaccion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 14,  371 => 144,  361 => 137,  356 => 135,  343 => 125,  335 => 120,  319 => 107,  310 => 101,  298 => 93,  296 => 92,  275 => 74,  258 => 60,  254 => 59,  251 => 58,  245 => 56,  242 => 55,  236 => 53,  234 => 52,  229 => 50,  224 => 48,  219 => 46,  210 => 40,  195 => 28,  191 => 27,  187 => 26,  182 => 24,  177 => 22,  173 => 21,  168 => 19,  164 => 18,  157 => 14,  147 => 6,  137 => 5,  122 => 174,  118 => 173,  114 => 172,  110 => 171,  106 => 170,  102 => 169,  98 => 168,  94 => 167,  90 => 166,  86 => 165,  82 => 164,  78 => 163,  74 => 162,  70 => 161,  66 => 160,  62 => 159,  55 => 154,  53 => 5,  51 => 4,  48 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
{# Plantilla de nuestra aplicación#}

{% form_theme form 'baseForm.html.twig' %}
{% block contenido %}

<html>

  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>{% block titulo %}CAU MANTENIMIENTO ETSIDI{% endblock %}</title>


    <!-- Google fonts-->
    <link href=\"{{ asset('css/google-fonts3.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('css/google-fonts4.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=\"{{ asset('css/styles.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/all.css')}}\" rel=\"stylesheet\">
    <!-- Custom fonts for this template -->
    <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('css/coming-soon.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/shop-homepage.css')}}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
  </head>


  <body style=\"background-color:#E3E5E6; padding-top:30px\">

    <!-- Navigation-->
    <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top bg-danger\" id=\"sideNav\">

      <a class=\"navbar-brand\">
        <span class=\"d-none d-lg-block\"><img class=\"img-fluid img-profile rounded-circle mx-auto mb-2\" style=\"vertical-align:middle;margin:125px\" src=\"{{asset('img/Logo2.jpg')}}\" alt=\"\" /></span>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span
          class=\"navbar-toggler-icon\"></span></button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\"><a class=\"nav-link\" style=\"text-transform:lowercase; font-size:20px; font-weight:40; color:#D6C9B6; font-family: Saira Extra Condensed\">{{email}}</a></li>

          <li class=\"nav-item\"><a class=\"nav-link text-white\" style=\"font-family: Saira Extra Condensed; font-size:25px;\" href=\"{{path('nuevaSolicitud',{'emailcrypt':emailcrypt, 'email':email})}}\">NUEVA SOLICITUD</a></li>
          <li class=\"nav-item\">
            <a class=\"nav-link text-white\" href=\"{{ path('solicitudesUsuario',{'emailcrypt':emailcrypt, 'email':email}) }}\" style=\"font-family: Saira Extra Condensed; font-size:25px;\">MIS SOLICITUDES</a>
          </li>
          {% if is_granted('ROLE_ADMIN') %}
          <li class=\"nav-item\"><a class=\"nav-link text-white\" style=\"font-family: Saira Extra Condensed; font-size:25px;\" href=\"{{path('base')}}\">GESTIÓN</a></li>
          {% endif %}
          {% if is_granted('ROLE_USER') %}
          <li class=\"nav-item\"><a class=\"nav-link text-white\" style=\"font-family: Saira Extra Condensed; font-size:25px;\" href=\"{{path('solicitudesTrabajador')}}\">SOLICITUDES ASIGNADAS</a></li>
          {% endif %}
          <li class=\"nav-item\">
            <a href=\"{{path('app_logout')}}\" class=\"btn btn-primary\"
              style=\"margin-top:50px; height: 25px; width:70px; background-color: #2D2D3B ; border: none;font-size:15px; font-weight:550; letter-spacing: 0.09em; font-family: Saira Extra Condensed; padding:3px 5px\" href=\"{{ path('home') }}\"
              role=\"button\">SALIR</a>
          </li>
          <li class=\"nav-item\"><a class=\"nav-link text-white\"><br /></a></li>
          <li class=\"nav-item\"><a class=\"nav-link text-white\"><br /></a></li>
          <li class=\"nav-item\"><a class=\"nav-link text-white\"><br /><br /></a></li>

        </ul>
      </div>
    </nav>
    <!-- Page Content-->
    <div class=\"container-fluid\">
      <h1 style=\"font-size:90px; font-weight: 700; font-family: Saira Extra Condensed; margin-left:100px; margin-top:30px; padding-top:0px\">
        SSII
        <span class=\"text-danger\" style=\"font-size:90px; font-weight: 700; font-family: Saira Extra Condensed;\">ETSIDI <img src=\"{{asset('img/logo_upm.png')}}\" class=\"rounded\" height=\"80\" color=\"white\" alt=\"Responsive image\"></span>
      </h1>
      <h5 style=\"line-height:0; font-family: Saira Extra Condensed;  margin-left:100px;\">MANTENIMIENTO-ETSIDI-UPM</h5>

      <div class=\"text-center justify-content-md-center\" style=\"margin-top:60px;\">
        <div class=\"col-lg-12 justify-content-md-center\">

          <div>

            <div style=\"margin-top:75px\">
              <h2 class=\"mt-4 mb-3 text-danger\" style=\"font-family: Saira Extra Condensed;\">
                RELLENE EL SIGUIENTE FORMULARIO PARA LA VALORACIÓN DE LOS TRABAJOS:
              </h2>
            </div>

            <div style=\"margin-top:50px; font-family:Saira Extra Condensed; font-size:22px; font-weight: 200;\">
              <div class=\"row justify-content-md-center\">
                <div class=\"col-lg-12\">
                  {% form_theme form 'form/baseForm.html.twig' %}
                  {{ form_start(form) }}

                  <table align=\"center\">
                    <tr>
                      <td align=\"center\">
                        <div style=\"line-height:75%;\">
                          <br /><br /><br />
                        </div>
                        {{ form_label(form.satisfaccion) }}
                      </td>
                    </tr>
                    <tr>
                      <td>

                        {{ form_widget(form.satisfaccion)}}
                      </td>
                      <td>
                        <h1>
                          <pre></pre>
                        </h1>
                      </td>
                    </tr>
                    <tr>
                      <td align=\"center\">
                        <div style=\"line-height:75%;\">
                          <br /><br /><br />
                        </div>
                        {{ form_label(form.rapidez) }}
                      </td>
                    </tr>
                    <tr>
                      <td>
                        {{ form_widget(form.rapidez)}}
                      </td>
                    </tr>
                    <tr>

                    <tr>
                      <td>
                        <div style=\"line-height:75%;\">
                          <br /><br /><br />
                        </div>
                        {{ form_label(form.Aceptar) }}

                        {{ form_widget(form.Aceptar)}}
                        <h8 style=\"font-family: Helvetica; font-size:13px\"><br /><br /><br /><br /><br /><br />Universidad Politécnica de Madrid ©2020</h8>

                      </td>
                    </tr>

                  </table>
                  {{ form_end(form) }}

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {% endblock %}




    <!-- Bootstrap core JS-->
    <script src=\"{{asset('js/all.js')}}\"></script>
    <script src=\"{{asset('js/exportacion.js')}}\"></script>
    <script src=\"{{asset('js/genPDF.js')}}\"></script>
    <script src=\"{{asset('js/downloadCanvas.js')}}\"></script>
    <script src=\"{{asset('js/html2canvas.js')}}\"></script>
    <script src=\"{{asset('js/jquery.min.js')}}\"></script>
    <script src=\"{{asset('js/jspdf.min.js')}}\"></script>
    <script src=\"{{asset('js/bootstrap-datepicker.min.js')}}\"></script>
    <script src=\"{{asset('js/bootstrap-datepicker.es.min.js')}}\"></script>
    <script src=\"{{asset('vendor/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{asset('vendor/bootstrap/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('js/scripts.js')}}\"></script>
    <script src=\"{{asset('js/coming-soon.min.js')}}\"></script>
    <script src=\"{{asset('js/jquery-1.11.1.min.js')}}\"></script>
    <script src=\"{{asset('js/jquery.easing.min.js')}}\"></script>

  </body>

</html>", "frontal/rellenarSatisfaccion.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\frontal\\rellenarSatisfaccion.html.twig");
    }
}
