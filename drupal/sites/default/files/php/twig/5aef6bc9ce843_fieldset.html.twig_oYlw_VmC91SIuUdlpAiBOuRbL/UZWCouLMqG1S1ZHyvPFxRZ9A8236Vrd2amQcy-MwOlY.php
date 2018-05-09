<?php

/* themes/contrib/uikit/templates/form/fieldset.html.twig */
class __TwigTemplate_3be15a2580b7166c6505fe300b2a3fbb8faa59efd200e5f0c91804240c6aee69 extends Twig_Template
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
        $tags = array("set" => 26, "if" => 54);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
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

        // line 26
        $context["classes"] = array(0 => "js-form-item", 1 => "form-item", 2 => "js-form-wrapper", 3 => "form-wrapper", 4 => "uk-fieldset");
        // line 35
        $context["description_classes"] = array(0 => "description", 1 => "uk-text-meta", 2 => "uk-margin-small-top");
        // line 41
        echo "<fieldset";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 43
        $context["legend_span_classes"] = array(0 => "fieldset-legend", 1 => ((        // line 45
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 46
($context["required"] ?? null)) ? ("form-required") : ("")));
        // line 49
        echo "  ";
        // line 50
        echo "  <legend";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["legend"] ?? null), "attributes", array()), "addClass", array(0 => "uk-legend"), "method"), "html", null, true));
        echo ">
    <span";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["legend_span"] ?? null), "attributes", array()), "addClass", array(0 => ($context["legend_span_classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["legend"] ?? null), "title", array()), "html", null, true));
        echo "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 54
        if (($context["errors"] ?? null)) {
            // line 55
            echo "      <div>
        ";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 59
        echo "    ";
        if (($context["prefix"] ?? null)) {
            // line 60
            echo "      <span class=\"field-prefix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "</span>
    ";
        }
        // line 62
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
    ";
        // line 63
        if (($context["suffix"] ?? null)) {
            // line 64
            echo "      <span class=\"field-suffix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "</span>
    ";
        }
        // line 66
        echo "    ";
        if ($this->getAttribute(($context["description"] ?? null), "content", array())) {
            // line 67
            echo "      <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "</div>
    ";
        }
        // line 69
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/uikit/templates/form/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 69,  107 => 67,  104 => 66,  98 => 64,  96 => 63,  91 => 62,  85 => 60,  82 => 59,  76 => 56,  73 => 55,  71 => 54,  63 => 51,  58 => 50,  56 => 49,  54 => 46,  53 => 45,  52 => 43,  47 => 41,  45 => 35,  43 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/uikit/templates/form/fieldset.html.twig", "/app/drupal/themes/contrib/uikit/templates/form/fieldset.html.twig");
    }
}
