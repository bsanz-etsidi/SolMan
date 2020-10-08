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

/* form/baseForm.html.twig */
class __TwigTemplate_1159b4bc44904c35366f62c642b42f29461f0bc926bb6dbd289b49ca8702bd4b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_row' => [$this, 'block_form_row'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'button_widget' => [$this, 'block_button_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 19
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 23
        echo "<h6>";
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 31
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 40
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 60
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 74
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 87
        $this->displayBlock('date_widget', $context, $blocks);
        // line 101
        $this->displayBlock('time_widget', $context, $blocks);
        // line 114
        $this->displayBlock('button_widget', $context, $blocks);
    }

    // line 1
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"control-group form-group\">
  <div class=\"controls\">";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 7
        echo "</div>
</div>";
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" class=\"form-control\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo " />";
        // line 14
        if (0 === twig_compare(($context["type"] ?? null), "file")) {
            // line 15
            echo "<img id=\"tapaThumb\" class=\"img-fluid\" width=\"150px\" src=\"\" alt=\"\">";
        }
    }

    // line 19
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "<textarea class=\"form-control\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>";
    }

    // line 23
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "</h6>
";
        // line 24
        if (($context["expanded"] ?? null)) {
            // line 25
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 27
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 31
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</div>";
    }

    // line 40
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        if (((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", true, true, false, 41) || 0 >= twig_compare(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", false, false, false, 41), 1)))) {
            // line 42
            $context["required"] = false;
        }
        // line 44
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\" ";
        }
        echo ">";
        // line 45
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 46
            echo "<option value=\"\" ";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            ((0 !== twig_compare(($context["placeholder"] ?? null), "")) ? (print (twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true))) : (print ("")));
            echo "</option>";
        }
        // line 48
        if (1 === twig_compare(twig_length_filter($this->env, ($context["preferred_choices"] ?? null)), 0)) {
            // line 49
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 50
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 51
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["choices"] ?? null)), 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 52
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 55
        $context["options"] = ($context["choices"] ?? null);
        // line 56
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 57
        echo "</select>";
    }

    // line 60
    public function block_choice_widget_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 62
            if (twig_test_iterable($context["choice"])) {
                // line 63
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === true)) ? ($context["group_label"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "\">
  ";
                // line 64
                $context["options"] = $context["choice"];
                // line 65
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 66
                echo "</optgroup>";
            } else {
                // line 68
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 68), "html", null, true);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 68)) {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
                    $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["attr" => twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 68)];
                    if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 68, $this->getSourceContext());
                    }
                    $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    echo " selected=\"selected\" ";
                }
                echo ">
  ";
                // line 69
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === true)) ? (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 69)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 69), [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 74
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        if (0 === twig_compare(($context["widget"] ?? null), "single_text")) {
            // line 76
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 78
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 79), 'errors');
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 80), 'errors');
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 81), 'widget');
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 82), 'widget');
            // line 83
            echo "</div>";
        }
    }

    // line 87
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        if (0 === twig_compare(($context["widget"] ?? null), "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 92
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 93
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 93), 'widget'), "{{ month }}" =>             // line 94
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 94), 'widget'), "{{ day }}" =>             // line 95
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 95), 'widget')]);
            // line 97
            echo "</div>";
        }
    }

    // line 101
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        if (0 === twig_compare(($context["widget"] ?? null), "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            $context["vars"] = ((0 === twig_compare(($context["widget"] ?? null), "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 106
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
  ";
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 107), 'widget', ($context["vars"] ?? null));
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 107), 'widget', ($context["vars"] ?? null));
            }
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 107), 'widget', ($context["vars"] ?? null));
            }
            // line 108
            echo "</div>";
        }
    }

    // line 114
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 116
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 117
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                 // line 118
($context["name"] ?? null), "%id%" =>                 // line 119
($context["id"] ?? null)]);
            } elseif ((            // line 121
($context["label"] ?? null) === false)) {
                // line 122
                $context["translation_domain"] = false;
            } else {
                // line 124
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 127
        echo "<button style=\"background-color:#C3C3C3;border: #000;background: -moz-linear-gradient(center top , #C0C0C0 0%, #808080 100%) repeat scroll 0 0 transparent;background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #C0C0C0), color-stop(100%,#808080));
  box-shadow: 1px 1px 1px grey\" type=\"";
        // line 128
        echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        echo "\" class=\"btn btn-primary\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</button>";
    }

    public function getTemplateName()
    {
        return "form/baseForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  394 => 128,  391 => 127,  387 => 124,  384 => 122,  382 => 121,  380 => 119,  379 => 118,  378 => 117,  376 => 116,  374 => 115,  370 => 114,  365 => 108,  355 => 107,  350 => 106,  348 => 105,  345 => 103,  343 => 102,  339 => 101,  334 => 97,  332 => 95,  331 => 94,  330 => 93,  329 => 92,  325 => 91,  322 => 89,  320 => 88,  316 => 87,  311 => 83,  309 => 82,  307 => 81,  305 => 80,  303 => 79,  299 => 78,  296 => 76,  294 => 75,  290 => 74,  272 => 69,  252 => 68,  249 => 66,  247 => 65,  245 => 64,  240 => 63,  238 => 62,  221 => 61,  217 => 60,  213 => 57,  211 => 56,  209 => 55,  203 => 52,  201 => 51,  199 => 50,  197 => 49,  195 => 48,  186 => 46,  184 => 45,  177 => 44,  174 => 42,  172 => 41,  168 => 40,  164 => 37,  158 => 35,  156 => 34,  152 => 33,  148 => 32,  144 => 31,  139 => 27,  136 => 25,  134 => 24,  128 => 23,  120 => 20,  116 => 19,  111 => 15,  109 => 14,  97 => 13,  95 => 12,  91 => 11,  86 => 7,  84 => 6,  82 => 5,  80 => 4,  77 => 2,  73 => 1,  69 => 114,  67 => 101,  65 => 87,  63 => 74,  61 => 60,  59 => 40,  57 => 31,  54 => 23,  52 => 19,  50 => 11,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "form/baseForm.html.twig", "C:\\symfony4REMOTO\\SolMan\\templates\\form\\baseForm.html.twig");
    }
}
