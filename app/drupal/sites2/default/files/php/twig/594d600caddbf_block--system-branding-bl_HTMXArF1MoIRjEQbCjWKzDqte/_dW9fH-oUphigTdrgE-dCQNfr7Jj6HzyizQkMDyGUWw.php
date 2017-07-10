<?php

/* themes/contrib/uswds/templates/system/block/block--system-branding-block.html.twig */
class __TwigTemplate_581fe38584557250184da252a619e8699f63a0ae7831c0a3a08444d8c4a06cb8 extends Twig_Template
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
        $tags = array("if" => 19);
        $filters = array("t" => 20);
        $functions = array("path" => 20);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path')
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

        // line 17
        echo "<div class=\"usa-logo\" id=\"logo\">

  ";
        // line 19
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 20
            echo "  <a class=\"logo-img\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" accesskey=\"1\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" aria-label=\"Home\">
    <img src=\"";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
  </a>
  ";
        }
        // line 24
        echo "
  ";
        // line 25
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 26
            echo "  <em class=\"usa-logo-text\">
    <a href=\"";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" accesskey=\"1\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" aria-label=\"Home\">
      ";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo "
    </a>
  </em>
  ";
        }
        // line 32
        echo "
  ";
        // line 33
        if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
            // line 34
            echo "    <h2 class=\"usa-font-lead\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 36
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds/templates/system/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 36,  90 => 34,  88 => 33,  85 => 32,  78 => 28,  72 => 27,  69 => 26,  67 => 25,  64 => 24,  56 => 21,  49 => 20,  47 => 19,  43 => 17,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 *
 * @ingroup themeable
 */
#}
<div class=\"usa-logo\" id=\"logo\">

  {% if site_logo %}
  <a class=\"logo-img\" href=\"{{ path('<front>') }}\" accesskey=\"1\" title=\"{{ 'Home'|t }}\" aria-label=\"Home\">
    <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
  </a>
  {% endif %}

  {% if site_name %}
  <em class=\"usa-logo-text\">
    <a href=\"{{ path('<front>') }}\" accesskey=\"1\" title=\"{{ 'Home'|t }}\" aria-label=\"Home\">
      {{ site_name }}
    </a>
  </em>
  {% endif %}

  {% if site_slogan %}
    <h2 class=\"usa-font-lead\">{{ site_slogan }}</h2>
  {% endif %}

</div>
";
    }
}
