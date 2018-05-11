<?php

/* themes/contrib/uikit/templates/form/form-element.html.twig */
class __TwigTemplate_e04d0d6d3e2849a76a64d9d837048d9c11aed1979ec8afc83df01d1d32919f67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 51, "if" => 69);
        $filters = array("clean_class" => 54);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 51
        $context["classes"] = array(0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 54
($context["type"] ?? null))), 3 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 55
($context["type"] ?? null))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 56
($context["name"] ?? null))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 57
($context["name"] ?? null))), 6 => "uk-margin");
        // line 62
        $context["description_classes"] = array(0 => (((        // line 63
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")), 1 => "uk-text-meta", 2 => "uk-margin-small-top");
        // line 68
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 69
        if (twig_in_filter(($context["label_display"] ?? null), array(0 => "before", 1 => "invisible"))) {
            // line 70
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 72
        echo "
  ";
        // line 73
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 74
            echo "    <p";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">
      ";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </p>
  ";
        }
        // line 78
        echo "
  <div class=\"uk-form-controls\">
    ";
        // line 80
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 81
            echo "      <span class=\"field-prefix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "</span>
    ";
        }
        // line 83
        echo "
    ";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "

    ";
        // line 86
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 87
            echo "      <span class=\"field-suffix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "</span>
    ";
        }
        // line 89
        echo "  </div>

  ";
        // line 91
        if ((($context["label_display"] ?? null) == "after")) {
            // line 92
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 94
        echo "
  ";
        // line 95
        if (($context["errors"] ?? null)) {
            // line 96
            echo "    <div class=\"uk-alert uk-alert-danger\">
      ";
            // line 97
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 100
        echo "
  ";
        // line 101
        if ((twig_in_filter(($context["description_display"] ?? null), array(0 => "after", 1 => "invisible")) && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 102
            echo "    <p";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">
      ";
            // line 103
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </p>
  ";
        }
        // line 106
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/uikit/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 106,  145 => 103,  140 => 102,  138 => 101,  135 => 100,  129 => 97,  126 => 96,  124 => 95,  121 => 94,  115 => 92,  113 => 91,  109 => 89,  103 => 87,  101 => 86,  96 => 84,  93 => 83,  87 => 81,  85 => 80,  81 => 78,  75 => 75,  70 => 74,  68 => 73,  65 => 72,  59 => 70,  57 => 69,  52 => 68,  50 => 63,  49 => 62,  47 => 57,  46 => 56,  45 => 55,  44 => 54,  43 => 51,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/uikit/templates/form/form-element.html.twig", "/app/drupal/themes/contrib/uikit/templates/form/form-element.html.twig");
    }
}
