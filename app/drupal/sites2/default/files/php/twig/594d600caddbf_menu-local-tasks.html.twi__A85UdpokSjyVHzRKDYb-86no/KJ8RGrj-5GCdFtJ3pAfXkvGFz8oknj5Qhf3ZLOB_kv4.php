<?php

/* themes/contrib/uswds/templates/system/menu/menu-local-tasks.html.twig */
class __TwigTemplate_64f46994ca717392c703dc593655c0eca9e4770a8c188f5d43da92d0aeb8430a extends Twig_Template
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
        $tags = array("if" => 7);
        $filters = array("t" => 8);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 8
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Primary tabs")));
            echo "</h2>
  <ul class=\"usa-unstyled-list uswds-horizontal-list\">";
            // line 9
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true));
            echo "</ul>
";
        }
        // line 11
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 12
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Secondary tabs")));
            echo "</h2>
  <ul class=\"usa-unstyled-list uswds-horizontal-list\">";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true));
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds/templates/system/menu/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  57 => 12,  55 => 11,  50 => 9,  45 => 8,  43 => 7,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * USWDS theme implementation to display primary and secondary local tasks.
 */
#}
{% if primary %}
  <h2 class=\"visually-hidden\">{{ 'Primary tabs'|t }}</h2>
  <ul class=\"usa-unstyled-list uswds-horizontal-list\">{{ primary }}</ul>
{% endif %}
{% if secondary %}
  <h2 class=\"visually-hidden\">{{ 'Secondary tabs'|t }}</h2>
  <ul class=\"usa-unstyled-list uswds-horizontal-list\">{{ secondary }}</ul>
{% endif %}
";
    }
}
