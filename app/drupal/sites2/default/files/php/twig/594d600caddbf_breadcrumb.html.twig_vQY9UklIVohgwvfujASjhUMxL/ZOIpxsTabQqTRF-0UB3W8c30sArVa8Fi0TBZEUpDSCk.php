<?php

/* themes/contrib/uswds/templates/system/block/breadcrumb.html.twig */
class __TwigTemplate_8886f2bd665e6ac49436528e40ca2050bb76c17b2ee2d83556c2f5c346da3d3f extends Twig_Template
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
        $tags = array("if" => 7, "for" => 10);
        $filters = array("t" => 8);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('t'),
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
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 8
            echo "<h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Breadcrumb")));
            echo "</h2>
<ol class=\"usa-grid usa-breadcrumbs usa-unstyled-list uswds-horizontal-list\">
";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                echo "  <li class=\"usa-nav-secondary-links\">
    ";
                // line 12
                if ($this->getAttribute($context["item"], "url", array())) {
                    // line 13
                    echo "      <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    echo "</a>
    ";
                } else {
                    // line 15
                    echo "      ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    echo "
    ";
                }
                // line 17
                echo "  </li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "</ol>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds/templates/system/block/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  74 => 17,  68 => 15,  60 => 13,  58 => 12,  55 => 11,  51 => 10,  45 => 8,  43 => 7,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * USWDS theme implementation for a breadcrumb trail.
 */
#}
{% if breadcrumb %}
<h2 id=\"system-breadcrumb\" class=\"visually-hidden\">{{ 'Breadcrumb'|t }}</h2>
<ol class=\"usa-grid usa-breadcrumbs usa-unstyled-list uswds-horizontal-list\">
{% for item in breadcrumb %}
  <li class=\"usa-nav-secondary-links\">
    {% if item.url %}
      <a href=\"{{ item.url }}\">{{ item.text }}</a>
    {% else %}
      {{ item.text }}
    {% endif %}
  </li>
{% endfor %}
</ol>
{% endif %}
";
    }
}
