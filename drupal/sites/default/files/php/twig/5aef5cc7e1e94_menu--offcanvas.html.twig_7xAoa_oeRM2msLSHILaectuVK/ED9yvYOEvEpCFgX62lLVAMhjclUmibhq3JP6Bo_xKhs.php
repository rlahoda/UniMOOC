<?php

/* themes/contrib/uikit/templates/navigation/menu--offcanvas.html.twig */
class __TwigTemplate_7af40f72ea3be3fd2382379f93618c4111d3e394ce75efdfd911296abfa32540 extends Twig_Template
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
        $tags = array("import" => 25, "macro" => 33, "if" => 35, "set" => 37, "for" => 46);
        $filters = array();
        $functions = array("link" => 51);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'set', 'for'),
                array(),
                array('link')
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

        // line 25
        $context["menus"] = $this;
        // line 26
        echo "
";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0)));
        echo "

";
    }

    // line 33
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "  ";
            $context["menus"] = $this;
            // line 35
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 36
                echo "    ";
                // line 37
                $context["classes"] = array(0 => (((                // line 38
($context["menu_level"] ?? null) == 0)) ? ("uk-nav") : ("")), 1 => (((                // line 39
($context["menu_level"] ?? null) == 0)) ? ("uk-nav-default") : ("")), 2 => (((                // line 40
($context["menu_level"] ?? null) == 0)) ? ("uk-nav-parent-icon") : ("")), 3 => (((                // line 41
($context["menu_level"] ?? null) > 0)) ? ("uk-nav-sub") : ("")));
                // line 44
                echo "
    <ul";
                // line 45
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                if ((($context["menu_level"] ?? null) == 0)) {
                    echo " uk-nav";
                }
                echo ">
    ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 47
                    echo "      ";
                    $context["item_classes"] = array(0 => (($this->getAttribute($context["item"], "below", array())) ? ("uk-parent") : ("")));
                    // line 48
                    echo "      ";
                    if ($this->getAttribute($context["item"], "display_item", array())) {
                        // line 49
                        echo "        <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                        echo ">
          ";
                        // line 50
                        if ($this->getAttribute($context["item"], "has_url", array())) {
                            // line 51
                            echo "            ";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                            echo "
          ";
                        } else {
                            // line 53
                            echo "            <a href=\"#\">";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                            echo "</a>
          ";
                        }
                        // line 55
                        echo "          ";
                        if ($this->getAttribute($context["item"], "below", array())) {
                            // line 56
                            echo "            ";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), $this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => ($context["classes"] ?? null)), "method"), (($context["menu_level"] ?? null) + 1))));
                            echo "
          ";
                        }
                        // line 58
                        echo "        ";
                    }
                    // line 59
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "    </ul>

  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/contrib/uikit/templates/navigation/menu--offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 61,  134 => 59,  131 => 58,  125 => 56,  122 => 55,  116 => 53,  110 => 51,  108 => 50,  103 => 49,  100 => 48,  97 => 47,  93 => 46,  86 => 45,  83 => 44,  81 => 41,  80 => 40,  79 => 39,  78 => 38,  77 => 37,  75 => 36,  72 => 35,  69 => 34,  55 => 33,  48 => 31,  45 => 26,  43 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/uikit/templates/navigation/menu--offcanvas.html.twig", "/app/drupal/themes/contrib/uikit/templates/navigation/menu--offcanvas.html.twig");
    }
}
