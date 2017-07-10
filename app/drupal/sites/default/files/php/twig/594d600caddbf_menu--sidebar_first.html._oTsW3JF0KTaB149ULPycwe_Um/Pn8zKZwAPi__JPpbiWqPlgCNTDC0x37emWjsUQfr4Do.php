<?php

/* themes/contrib/uswds/templates/system/menu/menu--sidebar_first.html.twig */
class __TwigTemplate_17026a8e545b4e3880eb071d84016f7e87107bc3b9e69eaf3b4096881132b178 extends Twig_Template
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
        $tags = array("import" => 8, "macro" => 16, "if" => 19, "for" => 27);
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), 0)));
        echo "

";
    }

    // line 16
    public function getmenu_links($__items__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "  ";
            $context["menus"] = $this;
            // line 18
            echo "
  ";
            // line 19
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 20
                echo "
    ";
                // line 21
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 22
                    echo "      <ul class=\"usa-sidenav-list\">
    ";
                } else {
                    // line 24
                    echo "      <ul class=\"usa-sidenav-sub_list\">
    ";
                }
                // line 26
                echo "
    ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    echo "      <li>
        <a href=\"";
                    // line 29
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\"";
                    if ($this->getAttribute($context["item"], "in_active_trail", array())) {
                        echo " class=\"usa-current\"";
                    }
                    echo ">
          <span>";
                    // line 30
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo "</span>
        </a>

        ";
                    // line 33
                    if ((($this->getAttribute($context["item"], "in_active_trail", array()) && $this->getAttribute($context["item"], "below", array())) && ((isset($context["menu_level"]) ? $context["menu_level"] : null) < 3))) {
                        // line 34
                        echo "          ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
        ";
                    }
                    // line 36
                    echo "
      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
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
        return "themes/contrib/uswds/templates/system/menu/menu--sidebar_first.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  124 => 36,  118 => 34,  116 => 33,  110 => 30,  102 => 29,  99 => 28,  95 => 27,  92 => 26,  88 => 24,  84 => 22,  82 => 21,  79 => 20,  77 => 19,  74 => 18,  71 => 17,  58 => 16,  51 => 14,  48 => 9,  46 => 8,  43 => 7,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Override of system/menu.html.twig for a sidebar menu.
 */
#}

{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, 0) }}

{% macro menu_links(items, menu_level) %}
  {% import _self as menus %}

  {% if items %}

    {% if menu_level == 0 %}
      <ul class=\"usa-sidenav-list\">
    {% else %}
      <ul class=\"usa-sidenav-sub_list\">
    {% endif %}

    {% for item in items %}
      <li>
        <a href=\"{{ item.url }}\"{% if item.in_active_trail %} class=\"usa-current\"{% endif %}>
          <span>{{ item.title }}</span>
        </a>

        {% if item.in_active_trail and item.below and menu_level < 3 %}
          {{ menus.menu_links(item.below, menu_level + 1) }}
        {% endif %}

      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
";
    }
}
