<?php

/* themes/contrib/uikit/templates/form/form-element--advanced.html.twig */
class __TwigTemplate_c9afed3a1009986835f2ced3ce65ef3284e8f90c32df9fb1f452d1fc7269bc2e extends Twig_Template
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
        $tags = array("set" => 51, "if" => 72);
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
($context["name"] ?? null))), 6 => "uk-margin", 7 => "uk-grid-small", 8 => "uk-child-width-auto");
        // line 64
        $context["description_classes"] = array(0 => (((        // line 65
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")), 1 => "uk-text-meta", 2 => "uk-margin-small-top");
        // line 70
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo " uk-grid>
  <label>
    ";
        // line 72
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 73
            echo "      <span class=\"field-prefix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "</span>
    ";
        }
        // line 75
        echo "
    ";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "

    ";
        // line 78
        if ((($context["label_display"] ?? null) != "invisible")) {
            // line 79
            echo "      <span> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label_text"] ?? null), "html", null, true));
            echo "</span>
    ";
        }
        // line 81
        echo "
    ";
        // line 82
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 83
            echo "      <span class=\"field-suffix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "</span>
    ";
        }
        // line 85
        echo "  </label>

  ";
        // line 87
        if ($this->getAttribute(($context["description"] ?? null), "content", array())) {
            // line 88
            echo "    <p";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">
      ";
            // line 89
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </p>
  ";
        }
        // line 92
        echo "
  ";
        // line 93
        if (($context["errors"] ?? null)) {
            // line 94
            echo "    <div class=\"uk-alert uk-alert-danger\">
      ";
            // line 95
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 98
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/uikit/templates/form/form-element--advanced.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 98,  118 => 95,  115 => 94,  113 => 93,  110 => 92,  104 => 89,  99 => 88,  97 => 87,  93 => 85,  87 => 83,  85 => 82,  82 => 81,  76 => 79,  74 => 78,  69 => 76,  66 => 75,  60 => 73,  58 => 72,  52 => 70,  50 => 65,  49 => 64,  47 => 57,  46 => 56,  45 => 55,  44 => 54,  43 => 51,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/uikit/templates/form/form-element--advanced.html.twig", "/app/drupal/themes/contrib/uikit/templates/form/form-element--advanced.html.twig");
    }
}
