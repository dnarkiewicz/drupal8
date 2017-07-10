<?php

/* themes/contrib/uswds/templates/system/block/status-messages.html.twig */
class __TwigTemplate_972016532193007d2affc49be5fe36cbdb286e784c4ed436741f926af3be17f3 extends Twig_Template
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
        $tags = array("for" => 7, "if" => 9);
        $filters = array("without" => 8, "length" => 20, "first" => 28);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array('without', 'length', 'first'),
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 8
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["attributes"]) ? $context["attributes"] : null), "role", "aria-label"), "html", null, true));
            echo ">
    ";
            // line 9
            if (($context["type"] == "error")) {
                // line 10
                echo "      <div class=\"usa-alert usa-alert-error\">
    ";
            } elseif ((            // line 11
$context["type"] == "warning")) {
                // line 12
                echo "      <div class=\"usa-alert usa-alert-warning\">
    ";
            } elseif ((            // line 13
$context["type"] == "status")) {
                // line 14
                echo "      <div class=\"usa-alert usa-alert-success\">
    ";
            }
            // line 16
            echo "      <div class=\"usa-alert-body\">
      ";
            // line 17
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 18
                echo "        <h3 class=\"usa-alert-heading\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "</h3>
      ";
            }
            // line 20
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 21
                echo "        <ul>
          ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 23
                    echo "            <li class=\"usa-alert-text\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        </ul>
      ";
            } else {
                // line 27
                echo "        <p class=\"usa-alert-text\">
          ";
                // line 28
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "
        </p>
      ";
            }
            // line 31
            echo "    ";
            if (((($context["type"] == "error") || ($context["type"] == "warning")) || ($context["type"] == "status"))) {
                // line 32
                echo "      </div>
    ";
            }
            // line 34
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds/templates/system/block/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  116 => 32,  113 => 31,  107 => 28,  104 => 27,  100 => 25,  91 => 23,  87 => 22,  84 => 21,  81 => 20,  75 => 18,  73 => 17,  70 => 16,  66 => 14,  64 => 13,  61 => 12,  59 => 11,  56 => 10,  54 => 9,  47 => 8,  43 => 7,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * USWDS theme implementation for status messages.
 */
#}
{% for type, messages in message_list %}
  <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\"{{ attributes|without('role', 'aria-label') }}>
    {% if type == 'error' %}
      <div class=\"usa-alert usa-alert-error\">
    {% elseif type == 'warning' %}
      <div class=\"usa-alert usa-alert-warning\">
    {% elseif type == 'status' %}
      <div class=\"usa-alert usa-alert-success\">
    {% endif %}
      <div class=\"usa-alert-body\">
      {% if status_headings[type] %}
        <h3 class=\"usa-alert-heading\">{{ status_headings[type] }}</h3>
      {% endif %}
      {% if messages|length > 1 %}
        <ul>
          {% for message in messages %}
            <li class=\"usa-alert-text\">{{ message }}</li>
          {% endfor %}
        </ul>
      {% else %}
        <p class=\"usa-alert-text\">
          {{ messages|first }}
        </p>
      {% endif %}
    {% if type == 'error' or type == 'warning' or type == 'status' %}
      </div>
    {% endif %}
  </div>
{% endfor %}
";
    }
}
