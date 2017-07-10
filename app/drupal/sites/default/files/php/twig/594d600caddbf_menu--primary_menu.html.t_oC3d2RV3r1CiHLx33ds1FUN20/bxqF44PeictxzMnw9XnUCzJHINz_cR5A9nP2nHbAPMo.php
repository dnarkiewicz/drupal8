<?php

/* themes/contrib/uswds/templates/system/menu/menu--primary_menu.html.twig */
class __TwigTemplate_3effa37e8e0d08045a7bd4bab1e6fa1719d74f9dd994d11c7e453f032ab319ef extends Twig_Template
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
        $tags = array("import" => 8, "macro" => 17, "if" => 20, "for" => 30);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 7
        echo "
";
        // line 8
        $context["menus"] = $this;
        // line 9
        echo "
";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["search_form"]) ? $context["search_form"] : null), "html", null, true));
        echo "
";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), 0, (isset($context["megamenu"]) ? $context["megamenu"] : null), 0)));
        echo "

";
    }

    // line 17
    public function getmenu_links($__items__ = null, $__menu_level__ = null, $__megamenu__ = null, $__button_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "megamenu" => $__megamenu__,
            "button_id" => $__button_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 18
            echo "  ";
            $context["menus"] = $this;
            // line 19
            echo "
  ";
            // line 20
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 21
                echo "
    ";
                // line 22
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 23
                    echo "      <ul class=\"usa-nav-primary usa-accordion\" role=\"navigation\">
    ";
                } elseif ((                // line 24
(isset($context["menu_level"]) ? $context["menu_level"] : null) == 1)) {
                    // line 25
                    echo "      <ul id=\"megamenu-";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["button_id"]) ? $context["button_id"] : null), "html", null, true));
                    echo "\" class=\"usa-nav-submenu";
                    if ((isset($context["megamenu"]) ? $context["megamenu"] : null)) {
                        echo " usa-megamenu usa-grid-full";
                    }
                    echo "\">
    ";
                } else {
                    // line 27
                    echo "      <ul>
    ";
                }
                // line 29
                echo "
    ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 31
                    echo "      <li";
                    if ((((isset($context["megamenu"]) ? $context["megamenu"] : null) && ((isset($context["menu_level"]) ? $context["menu_level"] : null) == 1)) && $this->getAttribute($context["item"], "below", array()))) {
                        echo " class=\"usa-megamenu-col\"";
                    }
                    echo ">

        ";
                    // line 33
                    if ((((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0) && $this->getAttribute($context["item"], "below", array()))) {
                        // line 34
                        echo "          <button class=\"usa-accordion-button usa-nav-link\" aria-expanded=\"false\" aria-controls=\"megamenu-";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true));
                        echo "\">
            <span>";
                        // line 35
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo "</span>
          </button>
        ";
                    }
                    // line 38
                    echo "
        ";
                    // line 39
                    if (($this->getAttribute($context["item"], "below", array()) && ((isset($context["menu_level"]) ? $context["menu_level"] : null) < 3))) {
                        // line 40
                        echo "          ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1), (isset($context["megamenu"]) ? $context["megamenu"] : null), $this->getAttribute($context["loop"], "index", array()))));
                        echo "
        ";
                    } else {
                        // line 42
                        echo "          <a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\"";
                        if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                            echo " class=\"usa-nav-link\"";
                        }
                        echo ">
            <span>";
                        // line 43
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo "</span>
          </a>
        ";
                    }
                    // line 46
                    echo "
      </li>
    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
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
        return "themes/contrib/uswds/templates/system/menu/menu--primary_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 49,  176 => 46,  170 => 43,  161 => 42,  155 => 40,  153 => 39,  150 => 38,  144 => 35,  139 => 34,  137 => 33,  129 => 31,  112 => 30,  109 => 29,  105 => 27,  95 => 25,  93 => 24,  90 => 23,  88 => 22,  85 => 21,  83 => 20,  80 => 19,  77 => 18,  62 => 17,  55 => 15,  51 => 14,  48 => 9,  46 => 8,  43 => 7,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Override of system/menu.html.twig for the primary menu.
 */
#}

{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ search_form }}
{{ menus.menu_links(items, 0, megamenu, 0) }}

{% macro menu_links(items, menu_level, megamenu, button_id) %}
  {% import _self as menus %}

  {% if items %}

    {% if menu_level == 0 %}
      <ul class=\"usa-nav-primary usa-accordion\" role=\"navigation\">
    {% elseif menu_level == 1 %}
      <ul id=\"megamenu-{{ button_id }}\" class=\"usa-nav-submenu{% if megamenu %} usa-megamenu usa-grid-full{% endif %}\">
    {% else %}
      <ul>
    {% endif %}

    {% for item in items %}
      <li{% if megamenu and menu_level == 1 and item.below %} class=\"usa-megamenu-col\"{% endif %}>

        {% if menu_level == 0 and item.below %}
          <button class=\"usa-accordion-button usa-nav-link\" aria-expanded=\"false\" aria-controls=\"megamenu-{{ loop.index }}\">
            <span>{{ item.title }}</span>
          </button>
        {% endif %}

        {% if item.below and menu_level < 3 %}
          {{ menus.menu_links(item.below, menu_level + 1, megamenu, loop.index) }}
        {% else %}
          <a href=\"{{ item.url }}\"{% if menu_level == 0 %} class=\"usa-nav-link\"{% endif %}>
            <span>{{ item.title }}</span>
          </a>
        {% endif %}

      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
";
    }
}
