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

/* gestionMantenimiento/asignarEspecialidad.html.twig */
class __TwigTemplate_8fcc1993444fc477a4e19fbc9dee03bc4dd5ff7d113b24cdbf99de0f2d8e120a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/asignarEspecialidad.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionMantenimiento/asignarEspecialidad.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 3
        echo "
";
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), [0 => "form/baseForm.html.twig"], true);
        // line 5
        echo "
";
        // line 7
        echo "<title>";
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>
";
        // line 9
        $this->displayBlock('contenido', $context, $blocks);
        // line 148
        echo "
    <!-- Bootstrap core JS-->
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/all.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/exportacion.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/genPDF.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/downloadCanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jspdf.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.es.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/coming-soon.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

  </body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        echo "MANTENIMIENTO-ETSIDI Especialidad";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 10
        echo "<html>

  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">



    <!-- Google fonts-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google-fonts3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google-fonts4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom fonts for this template -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coming-soon.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
  </head>


  <body style=\"background-color:#E3E5E6; padding-top:30px\">

    <!-- Navigation-->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-danger fixed-top\" id=\"sideNav\">

      <a class=\"navbar-brand\">
        <span class=\"d-none d-lg-block\"><img class=\"img-fluid img-profile rounded-circle mx-auto mb-2\" style=\"vertical-align:middle;margin:125px\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo2.jpg"), "html", null, true);
        echo "\" alt=\"\" /></span>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span
          class=\"navbar-toggler-icon\"></span></button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\"><a class=\"nav-link\" style=\"text-transform:lowercase; font-size:20px; font-weight:40; color:#D6C9B6; font-family: Saira Extra Condensed\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "email", [], "any", false, false, false, 49), "html", null, true);
        echo "</a></li>

          <li class=\"nav-item\"><a class=\"nav-link text-white\" style=\"font-family: Saira Extra Condensed; font-size:25px;\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaSolicitud", ["emailcrypt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "emailcrypt", [], "any", false, false, false, 51), "email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\">NUEVA SOLICITUD</a></li>
          <li class=\"nav-item\">
            <a class=\"nav-link text-white\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solicitudesUsuario", ["emailcrypt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "emailcrypt", [], "any", false, false, false, 53), "email" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "email", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" style=\"font-family: Saira Extra Condensed; font-size:25px;\">MIS SOLICITUDES</a>
          </li>
          ";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "          <li class=\"nav-item\"><a class=\"nav-link text-white\" style=\"font-family: Saira Extra Condensed; font-size:25px;\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("base");
            echo "\">GESTIÓN</a></li>
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
      <h1 style=\"font-size:60px; font-weight: 700; font-family: Saira Extra Condensed; margin-left:100px; margin-top:30px; padding-top:0px\">
        MANTENIMIENTO
        <span class=\"text-danger\" style=\"font-size:60px; font-weight: 700; font-family: Saira Extra Condensed;\">ETSIDI <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_upm.png"), "html", null, true);
        echo "\" class=\"rounded\" height=\"80\" color=\"white\" alt=\"Responsive image\"></span>
      </h1>

      <div class=\"text-center justify-content-md-center\" style=\"margin-top:60px;\">
        <div class=\"col-lg-12 justify-content-md-center\">

          <div>
            <div style=\"margin-top:75px\">
              <h1 class=\"mt-4 mb-3 text-danger\" style=\"font-family: Saira Extra Condensed;\">
                Seleccione las especialidades requeridas en el parte <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parte", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
        echo "\" style=\"color: black;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new RuntimeError('Variable "parte" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83), "html", null, true);
        echo "</a>
              </h1>
            </div>

            <div style=\"margin-top:50px; font-family:Saira Extra Condensed; font-size:22px; font-weight: 200;\">
              <div class=\"row justify-content-md-center\">
                <div class=\"col-lg-12\">

                  ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_start');
        echo "

                  <table align=\"center\">
                    <tr>
                      <td align=\"center\">
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "especialidad", [], "any", false, false, false, 96), 'label');
        echo "
                      </td>
                    </tr>
                    <tr>
                      <td>

                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "especialidad", [], "any", false, false, false, 102), 'widget');
        echo "
                      </td>
                      <td>
                        <h1>
                          <pre></pre>
                        </h1>
                      </td>
                    </tr>


                    <tr>
                      <td>
                        <div style=\"line-height:75%;\">
                          <br />
                        </div>
                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "Asignar", [], "any", false, false, false, 117), 'label');
        echo "

                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "Asignar", [], "any", false, false, false, 119), 'widget');
        echo "
                        <div style=\"line-height:75%;\">
                          <br />
                          <a class=\"btn btn-primary\" style=\"background-color:#2D2D3B;border: none;font-size: 12.8px; font-family: 'Source Sans Pro'; font-height: 30px; font-weight: 650; letter-spacing: 0.1em\" href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partes");
        echo "\"
                            role=\"button\"> Volver </a>

                        </div>
                        <h8 style=\"font-family: Helvetica; font-size:13px\"><br /><br /><br /><br />Universidad Politécnica de Madrid ©2020</h8>

                      </td>
                    </tr>

                  </table>
                  ";
        // line 132
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'form_end');
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

    public function getTemplateName()
    {
        return "gestionMantenimiento/asignarEspecialidad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 132,  357 => 122,  351 => 119,  346 => 117,  328 => 102,  319 => 96,  311 => 91,  298 => 83,  286 => 74,  269 => 60,  265 => 59,  262 => 58,  256 => 56,  254 => 55,  249 => 53,  244 => 51,  239 => 49,  230 => 43,  215 => 31,  211 => 30,  207 => 29,  202 => 27,  197 => 25,  193 => 24,  188 => 22,  184 => 21,  171 => 10,  161 => 9,  142 => 7,  127 => 165,  123 => 164,  119 => 163,  115 => 162,  111 => 161,  107 => 160,  103 => 159,  99 => 158,  95 => 157,  91 => 156,  87 => 155,  83 => 154,  79 => 153,  75 => 152,  71 => 151,  67 => 150,  63 => 148,  61 => 9,  56 => 7,  53 => 5,  51 => 4,  48 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
{# Plantilla de nuestra aplicación#}

{% form_theme form 'form/baseForm.html.twig' %}

{#TITULO#}
<title>{% block titulo %}MANTENIMIENTO-ETSIDI Especialidad{% endblock %}</title>
{#Contenido#}
{% block contenido %}
<html>

  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">



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
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-danger fixed-top\" id=\"sideNav\">

      <a class=\"navbar-brand\">
        <span class=\"d-none d-lg-block\"><img class=\"img-fluid img-profile rounded-circle mx-auto mb-2\" style=\"vertical-align:middle;margin:125px\" src=\"{{asset('img/Logo2.jpg')}}\" alt=\"\" /></span>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span
          class=\"navbar-toggler-icon\"></span></button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\"><a class=\"nav-link\" style=\"text-transform:lowercase; font-size:20px; font-weight:40; color:#D6C9B6; font-family: Saira Extra Condensed\">{{app.user.email}}</a></li>

          <li class=\"nav-item\"><a class=\"nav-link text-white\" style=\"font-family: Saira Extra Condensed; font-size:25px;\" href=\"{{path('nuevaSolicitud',{'emailcrypt':app.user.emailcrypt, 'email':app.user.email})}}\">NUEVA SOLICITUD</a></li>
          <li class=\"nav-item\">
            <a class=\"nav-link text-white\" href=\"{{ path('solicitudesUsuario',{'emailcrypt':app.user.emailcrypt, 'email':app.user.email}) }}\" style=\"font-family: Saira Extra Condensed; font-size:25px;\">MIS SOLICITUDES</a>
          </li>
          {% if is_granted('ROLE_ADMIN') %}
          <li class=\"nav-item\"><a class=\"nav-link text-white\" style=\"font-family: Saira Extra Condensed; font-size:25px;\" href=\"{{path('base')}}\">GESTIÓN</a></li>
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
      <h1 style=\"font-size:60px; font-weight: 700; font-family: Saira Extra Condensed; margin-left:100px; margin-top:30px; padding-top:0px\">
        MANTENIMIENTO
        <span class=\"text-danger\" style=\"font-size:60px; font-weight: 700; font-family: Saira Extra Condensed;\">ETSIDI <img src=\"{{asset('img/logo_upm.png')}}\" class=\"rounded\" height=\"80\" color=\"white\" alt=\"Responsive image\"></span>
      </h1>

      <div class=\"text-center justify-content-md-center\" style=\"margin-top:60px;\">
        <div class=\"col-lg-12 justify-content-md-center\">

          <div>
            <div style=\"margin-top:75px\">
              <h1 class=\"mt-4 mb-3 text-danger\" style=\"font-family: Saira Extra Condensed;\">
                Seleccione las especialidades requeridas en el parte <a href=\"{{path('parte',{'id':parte.id})}}\" style=\"color: black;\">{{parte.id}}</a>
              </h1>
            </div>

            <div style=\"margin-top:50px; font-family:Saira Extra Condensed; font-size:22px; font-weight: 200;\">
              <div class=\"row justify-content-md-center\">
                <div class=\"col-lg-12\">

                  {{ form_start(form) }}

                  <table align=\"center\">
                    <tr>
                      <td align=\"center\">
                        {{ form_label(form.especialidad) }}
                      </td>
                    </tr>
                    <tr>
                      <td>

                        {{ form_widget(form.especialidad)}}
                      </td>
                      <td>
                        <h1>
                          <pre></pre>
                        </h1>
                      </td>
                    </tr>


                    <tr>
                      <td>
                        <div style=\"line-height:75%;\">
                          <br />
                        </div>
                        {{ form_label(form.Asignar) }}

                        {{ form_widget(form.Asignar)}}
                        <div style=\"line-height:75%;\">
                          <br />
                          <a class=\"btn btn-primary\" style=\"background-color:#2D2D3B;border: none;font-size: 12.8px; font-family: 'Source Sans Pro'; font-height: 30px; font-weight: 650; letter-spacing: 0.1em\" href=\"{{ path('partes') }}\"
                            role=\"button\"> Volver </a>

                        </div>
                        <h8 style=\"font-family: Helvetica; font-size:13px\"><br /><br /><br /><br />Universidad Politécnica de Madrid ©2020</h8>

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

</html>", "gestionMantenimiento/asignarEspecialidad.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\gestionMantenimiento\\asignarEspecialidad.html.twig");
    }
}
