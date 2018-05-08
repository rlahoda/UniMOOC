<?php

/* themes/contrib/uikit/templates/layout/page.html.twig */
class __TwigTemplate_5d328885ff51dc615ca2a6cbdaa15b0efb3cd34a152578654b49434d671ea700 extends Twig_Template
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
        $tags = array("if" => 49);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 49
        echo "<div id=\"page-wrapper\"";
        if ($this->getAttribute(($context["page"] ?? null), "offcanvas", array())) {
            echo " class=\"uk-offcanvas-content\"";
        }
        echo ">
  <header";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_attributes"] ?? null), "html", null, true));
        echo ">
    ";
        // line 51
        if ($this->getAttribute(($context["page"] ?? null), "navbar", array())) {
            // line 52
            echo "      <nav";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["navbar_attributes"] ?? null), "html", null, true));
            echo ">
        ";
            // line 53
            if ($this->getAttribute(($context["page"] ?? null), "offcanvas", array())) {
                // line 54
                echo "          <a href=\"#offcanvas\" class=\"uk-navbar-toggle uk-hidden@m\" uk-toggle uk-navbar-toggle-icon></a>
        ";
            }
            // line 56
            echo "
        ";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navbar", array()), "html", null, true));
            echo "
      </nav>
    ";
        }
        // line 60
        echo "  </header>

  <div";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_attributes"] ?? null), "html", null, true));
        echo ">
    <div id=\"page--wrapper\" class=\"uk-grid\" uk-grid>
      <main";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true));
        echo ">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
      </main>

      ";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 70
            echo "        <aside";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_attributes"] ?? null), "html", null, true));
            echo ">
          ";
            // line 71
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
        </aside>
      ";
        }
        // line 74
        echo "
      ";
        // line 75
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 76
            echo "        <aside";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_attributes"] ?? null), "html", null, true));
            echo ">
          ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
        </aside>
      ";
        }
        // line 80
        echo "    </div>
  </div>

  ";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 84
            echo "    <footer role=\"contentinfo\">
      <div class=\"uk-container uk-margin-top\">
        ";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 90
        echo "
  ";
        // line 91
        if ($this->getAttribute(($context["page"] ?? null), "offcanvas", array())) {
            // line 92
            echo "    <div id=\"offcanvas\" uk-offcanvas>
      ";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "offcanvas", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 96
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/uikit/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 96,  151 => 93,  148 => 92,  146 => 91,  143 => 90,  136 => 86,  132 => 84,  130 => 83,  125 => 80,  119 => 77,  114 => 76,  112 => 75,  109 => 74,  103 => 71,  98 => 70,  96 => 69,  90 => 66,  85 => 64,  80 => 62,  76 => 60,  70 => 57,  67 => 56,  63 => 54,  61 => 53,  56 => 52,  54 => 51,  50 => 50,  43 => 49,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/uikit/templates/layout/page.html.twig", "/app/drupal/themes/contrib/uikit/templates/layout/page.html.twig");
    }
}
