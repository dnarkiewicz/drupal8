<?php

/* themes/contrib/uswds/templates/system/layout/page.html.twig */
class __TwigTemplate_0fb4918ec4b555d8ecb94838c6d57058a2ae3f3ea05afdfe5b28a0fa22cdb802 extends Twig_Template
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
        $tags = array("if" => 9);
        $filters = array("t" => 28, "trim" => 62, "render" => 62);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t', 'trim', 'render'),
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
        echo "<header class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_classes"]) ? $context["header_classes"] : null), "html", null, true));
        echo "\" id=\"header\" role=\"banner\">

  ";
        // line 9
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top", array()) || (isset($context["government_banner"]) ? $context["government_banner"] : null))) {
            // line 10
            echo "  <section class=\"usa-banner\">

    ";
            // line 12
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["government_banner"]) ? $context["government_banner"] : null), "html", null, true));
            echo "

    ";
            // line 14
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top", array())) {
                // line 15
                echo "    <div class=\"usa-banner-inner\">
      ";
                // line 16
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top", array()), "html", null, true));
                echo "
    </div>
    ";
            }
            // line 19
            echo "
  </section>
  ";
        }
        // line 22
        echo "
  ";
        // line 23
        if ((isset($context["header_basic"]) ? $context["header_basic"] : null)) {
            // line 24
            echo "  <div class=\"usa-nav-container\">
  ";
        }
        // line 26
        echo "
  <div class=\"usa-navbar\">
    <button class=\"usa-menu-btn\">";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Menu")));
        echo "</button>
    ";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  </div>

  <div class=\"usa-nav\" role=\"navigation\">
    <div class=\"usa-nav-inner\">

      ";
        // line 35
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 36
            echo "      <button class=\"usa-nav-close\">
        <img src=\"";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["active_theme_path"]) ? $context["active_theme_path"] : null), "html", null, true));
            echo "/assets/img/close.svg\" alt=\"close\" />
      </button>
      ";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
      ";
        }
        // line 41
        echo "
      ";
        // line 42
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array())) {
            // line 43
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
            echo "
      ";
        }
        // line 45
        echo "
    </div>
  </div>

  ";
        // line 49
        if ((isset($context["header_basic"]) ? $context["header_basic"] : null)) {
            // line 50
            echo "  </div>
  ";
        }
        // line 52
        echo "
</header>

<section class=\"usa-section uswds-middle-section\">
  <div class=\"usa-grid\">
    <div class=\"usa-width-full\">
      ";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "

      ";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

      ";
        // line 62
        if (trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())))) {
            // line 63
            echo "      <div class=\"usa-alert usa-alert-info\">
        <div class=\"usa-alert-body\">
          <p class=\"usa-alert-text\">
            ";
            // line 66
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
          </p>
        </div>
      </div>
      ";
        }
        // line 71
        echo "
    </div>
  </div>

  <div class=\"uswds-main-content-wrapper usa-grid\">
    <a id=\"main-content\" tabindex=\"-1\"></a>

    ";
        // line 78
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 79
            echo "    <aside class=\"region-sidebar-first usa-width-one-fourth\">
      ";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
    </aside>
    ";
        }
        // line 83
        echo "
    <div class=\"region-content ";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_class"]) ? $context["content_class"] : null), "html", null, true));
        echo "\">
      ";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    </div>

    ";
        // line 88
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 89
            echo "    <aside class=\"region-sidebar-second usa-width-one-fourth\">
      ";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
    </aside>
    ";
        }
        // line 93
        echo "
  </div>
</section>

<footer class=\"";
        // line 97
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_classes"]) ? $context["footer_classes"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
  <div class=\"usa-grid usa-footer-return-to-top\">
    <a href=\"#\">Return to top</a>
  </div>

  ";
        // line 102
        if ((isset($context["display_footer_primary"]) ? $context["display_footer_primary"] : null)) {
            // line 103
            echo "  <div class=\"usa-footer-primary-section\">
    <div class=\"usa-grid\">
      <nav class=\"usa-footer-nav ";
            // line 105
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_menu_width"]) ? $context["footer_menu_width"] : null), "html", null, true));
            echo "\">

        ";
            // line 107
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
                // line 108
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
                echo "
        ";
            }
            // line 110
            echo "
      </nav>

      ";
            // line 113
            if (((isset($context["footer_slim"]) ? $context["footer_slim"] : null) && ((isset($context["phone"]) ? $context["phone"] : null) || (isset($context["email"]) ? $context["email"] : null)))) {
                // line 114
                echo "      <div class=\"usa-width-one-third\">

        ";
                // line 116
                if ((isset($context["phone"]) ? $context["phone"] : null)) {
                    // line 117
                    echo "        <div class=\"usa-footer-primary-content usa-footer-contact_info\">
          <p><a href=\"tel:";
                    // line 118
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true));
                    echo "</a></p>
        </div>
        ";
                }
                // line 121
                echo "
        ";
                // line 122
                if ((isset($context["email"]) ? $context["email"] : null)) {
                    // line 123
                    echo "        <div class=\"usa-footer-primary-content usa-footer-contact_info\">
          <p><a href=\"mailto:";
                    // line 124
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true));
                    echo "</a></p>
        </div>
        ";
                }
                // line 127
                echo "
      </div>
      ";
            }
            // line 130
            echo "
      ";
            // line 131
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
                // line 132
                echo "      <div class=\"usa-grid\">
        ";
                // line 133
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
                echo "
      </div>
      ";
            }
            // line 136
            echo "
    </div>
  </div>
  ";
        }
        // line 140
        echo "
  ";
        // line 141
        if ((isset($context["display_footer_secondary"]) ? $context["display_footer_secondary"] : null)) {
            // line 142
            echo "  <div class=\"usa-footer-secondary_section\">

    ";
            // line 144
            if ((isset($context["display_footer_agency"]) ? $context["display_footer_agency"] : null)) {
                // line 145
                echo "    <div class=\"usa-grid\">
      <div class=\"usa-footer-logo
        ";
                // line 147
                if ( !(isset($context["footer_slim"]) ? $context["footer_slim"] : null)) {
                    echo "usa-width-one-half";
                }
                echo "\">

        ";
                // line 149
                if ((isset($context["footer_agency_url"]) ? $context["footer_agency_url"] : null)) {
                    // line 150
                    echo "        <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_agency_url"]) ? $context["footer_agency_url"] : null), "html", null, true));
                    echo "\">
        ";
                }
                // line 152
                echo "
        ";
                // line 153
                if ((isset($context["footer_agency_logo"]) ? $context["footer_agency_logo"] : null)) {
                    // line 154
                    echo "        <img class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_agency_logo_class"]) ? $context["footer_agency_logo_class"] : null), "html", null, true));
                    echo "\" src=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_agency_logo"]) ? $context["footer_agency_logo"] : null), "html", null, true));
                    echo "\" alt=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Agency logo")));
                    echo "\">
        ";
                }
                // line 156
                echo "
        ";
                // line 157
                if ((isset($context["footer_agency_name"]) ? $context["footer_agency_name"] : null)) {
                    // line 158
                    echo "        <h3 class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_agency_heading_class"]) ? $context["footer_agency_heading_class"] : null), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_agency_name"]) ? $context["footer_agency_name"] : null), "html", null, true));
                    echo "</h3>
        ";
                }
                // line 160
                echo "
        ";
                // line 161
                if ((isset($context["footer_agency_url"]) ? $context["footer_agency_url"] : null)) {
                    // line 162
                    echo "        </a>
        ";
                }
                // line 164
                echo "
      </div>

      ";
                // line 167
                if ( !(isset($context["footer_slim"]) ? $context["footer_slim"] : null)) {
                    // line 168
                    echo "      <div class=\"usa-footer-contact-links usa-width-one-half\">

        ";
                    // line 170
                    if ((isset($context["facebook"]) ? $context["facebook"] : null)) {
                        // line 171
                        echo "        <a class=\"usa-link-facebook\" href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook"]) ? $context["facebook"] : null), "html", null, true));
                        echo "\">
          <span>Facebook</span>
        </a>
        ";
                    }
                    // line 175
                    echo "
        ";
                    // line 176
                    if ((isset($context["twitter"]) ? $context["twitter"] : null)) {
                        // line 177
                        echo "        <a class=\"usa-link-twitter\" href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter"]) ? $context["twitter"] : null), "html", null, true));
                        echo "\">
          <span>Twitter</span>
        </a>
        ";
                    }
                    // line 181
                    echo "
        ";
                    // line 182
                    if ((isset($context["youtube"]) ? $context["youtube"] : null)) {
                        // line 183
                        echo "        <a class=\"usa-link-youtube\" href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["youtube"]) ? $context["youtube"] : null), "html", null, true));
                        echo "\">
          <span>YouTube</span>
        </a>
        ";
                    }
                    // line 187
                    echo "
        ";
                    // line 188
                    if ((isset($context["rss"]) ? $context["rss"] : null)) {
                        // line 189
                        echo "        <a class=\"usa-link-rss\" href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss"]) ? $context["rss"] : null), "html", null, true));
                        echo "\">
          <span>RSS</span>
        </a>
        ";
                    }
                    // line 193
                    echo "
        <address>

          ";
                    // line 196
                    if ((isset($context["contact_center"]) ? $context["contact_center"] : null)) {
                        // line 197
                        echo "          <h3 class=\"usa-footer-contact-heading\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contact_center"]) ? $context["contact_center"] : null), "html", null, true));
                        echo "</h3>
          ";
                    }
                    // line 199
                    echo "
          ";
                    // line 200
                    if ((isset($context["phone"]) ? $context["phone"] : null)) {
                        // line 201
                        echo "          <p><a href=\"tel:";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true));
                        echo "</a></p>
          ";
                    }
                    // line 203
                    echo "
          ";
                    // line 204
                    if ((isset($context["email"]) ? $context["email"] : null)) {
                        // line 205
                        echo "          <a href=\"mailto:";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true));
                        echo "</a>
          ";
                    }
                    // line 207
                    echo "
        </address>
      </div>
      ";
                }
                // line 211
                echo "
    </div>
    ";
            }
            // line 214
            echo "
    ";
            // line 215
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_secondary", array())) {
                // line 216
                echo "    <div class=\"usa-grid\">
      ";
                // line 217
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_secondary", array()), "html", null, true));
                echo "
    </div>
    ";
            }
            // line 220
            echo "
  </div>
  ";
        }
        // line 223
        echo "
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds/templates/system/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 223,  506 => 220,  500 => 217,  497 => 216,  495 => 215,  492 => 214,  487 => 211,  481 => 207,  473 => 205,  471 => 204,  468 => 203,  460 => 201,  458 => 200,  455 => 199,  449 => 197,  447 => 196,  442 => 193,  434 => 189,  432 => 188,  429 => 187,  421 => 183,  419 => 182,  416 => 181,  408 => 177,  406 => 176,  403 => 175,  395 => 171,  393 => 170,  389 => 168,  387 => 167,  382 => 164,  378 => 162,  376 => 161,  373 => 160,  365 => 158,  363 => 157,  360 => 156,  350 => 154,  348 => 153,  345 => 152,  339 => 150,  337 => 149,  330 => 147,  326 => 145,  324 => 144,  320 => 142,  318 => 141,  315 => 140,  309 => 136,  303 => 133,  300 => 132,  298 => 131,  295 => 130,  290 => 127,  282 => 124,  279 => 123,  277 => 122,  274 => 121,  266 => 118,  263 => 117,  261 => 116,  257 => 114,  255 => 113,  250 => 110,  244 => 108,  242 => 107,  237 => 105,  233 => 103,  231 => 102,  223 => 97,  217 => 93,  211 => 90,  208 => 89,  206 => 88,  200 => 85,  196 => 84,  193 => 83,  187 => 80,  184 => 79,  182 => 78,  173 => 71,  165 => 66,  160 => 63,  158 => 62,  153 => 60,  148 => 58,  140 => 52,  136 => 50,  134 => 49,  128 => 45,  122 => 43,  120 => 42,  117 => 41,  112 => 39,  107 => 37,  104 => 36,  102 => 35,  93 => 29,  89 => 28,  85 => 26,  81 => 24,  79 => 23,  76 => 22,  71 => 19,  65 => 16,  62 => 15,  60 => 14,  55 => 12,  51 => 10,  49 => 9,  43 => 7,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * USWDS theme implementation to display a single page.
 */
#}
<header class=\"{{ header_classes }}\" id=\"header\" role=\"banner\">

  {% if page.header_top or government_banner %}
  <section class=\"usa-banner\">

    {{ government_banner }}

    {% if page.header_top %}
    <div class=\"usa-banner-inner\">
      {{ page.header_top }}
    </div>
    {% endif %}

  </section>
  {% endif %}

  {% if header_basic %}
  <div class=\"usa-nav-container\">
  {% endif %}

  <div class=\"usa-navbar\">
    <button class=\"usa-menu-btn\">{{ 'Menu'|t }}</button>
    {{ page.header }}
  </div>

  <div class=\"usa-nav\" role=\"navigation\">
    <div class=\"usa-nav-inner\">

      {% if page.primary_menu %}
      <button class=\"usa-nav-close\">
        <img src=\"{{ active_theme_path }}/assets/img/close.svg\" alt=\"close\" />
      </button>
      {{ page.primary_menu }}
      {% endif %}

      {% if page.secondary_menu %}
      {{ page.secondary_menu }}
      {% endif %}

    </div>
  </div>

  {% if header_basic %}
  </div>
  {% endif %}

</header>

<section class=\"usa-section uswds-middle-section\">
  <div class=\"usa-grid\">
    <div class=\"usa-width-full\">
      {{ page.breadcrumb }}

      {{ page.highlighted }}

      {% if page.help|render|trim %}
      <div class=\"usa-alert usa-alert-info\">
        <div class=\"usa-alert-body\">
          <p class=\"usa-alert-text\">
            {{ page.help }}
          </p>
        </div>
      </div>
      {% endif %}

    </div>
  </div>

  <div class=\"uswds-main-content-wrapper usa-grid\">
    <a id=\"main-content\" tabindex=\"-1\"></a>

    {% if page.sidebar_first %}
    <aside class=\"region-sidebar-first usa-width-one-fourth\">
      {{ page.sidebar_first }}
    </aside>
    {% endif %}

    <div class=\"region-content {{ content_class }}\">
      {{ page.content }}
    </div>

    {% if page.sidebar_second %}
    <aside class=\"region-sidebar-second usa-width-one-fourth\">
      {{ page.sidebar_second }}
    </aside>
    {% endif %}

  </div>
</section>

<footer class=\"{{ footer_classes }}\" role=\"contentinfo\">
  <div class=\"usa-grid usa-footer-return-to-top\">
    <a href=\"#\">Return to top</a>
  </div>

  {% if display_footer_primary %}
  <div class=\"usa-footer-primary-section\">
    <div class=\"usa-grid\">
      <nav class=\"usa-footer-nav {{ footer_menu_width }}\">

        {% if page.footer_menu %}
        {{ page.footer_menu }}
        {% endif %}

      </nav>

      {% if footer_slim and (phone or email) %}
      <div class=\"usa-width-one-third\">

        {% if phone %}
        <div class=\"usa-footer-primary-content usa-footer-contact_info\">
          <p><a href=\"tel:{{ phone }}\">{{ phone }}</a></p>
        </div>
        {% endif %}

        {% if email %}
        <div class=\"usa-footer-primary-content usa-footer-contact_info\">
          <p><a href=\"mailto:{{ email }}\">{{ email }}</a></p>
        </div>
        {% endif %}

      </div>
      {% endif %}

      {% if page.footer %}
      <div class=\"usa-grid\">
        {{ page.footer }}
      </div>
      {% endif %}

    </div>
  </div>
  {% endif %}

  {% if display_footer_secondary %}
  <div class=\"usa-footer-secondary_section\">

    {% if display_footer_agency %}
    <div class=\"usa-grid\">
      <div class=\"usa-footer-logo
        {% if not footer_slim %}usa-width-one-half{% endif %}\">

        {% if footer_agency_url %}
        <a href=\"{{ footer_agency_url }}\">
        {% endif %}

        {% if footer_agency_logo %}
        <img class=\"{{ footer_agency_logo_class }}\" src=\"{{ footer_agency_logo }}\" alt=\"{{ 'Agency logo'|t }}\">
        {% endif %}

        {% if footer_agency_name %}
        <h3 class=\"{{ footer_agency_heading_class }}\">{{ footer_agency_name }}</h3>
        {% endif %}

        {% if footer_agency_url %}
        </a>
        {% endif %}

      </div>

      {% if not footer_slim %}
      <div class=\"usa-footer-contact-links usa-width-one-half\">

        {% if facebook %}
        <a class=\"usa-link-facebook\" href=\"{{ facebook }}\">
          <span>Facebook</span>
        </a>
        {% endif %}

        {% if twitter %}
        <a class=\"usa-link-twitter\" href=\"{{ twitter }}\">
          <span>Twitter</span>
        </a>
        {% endif %}

        {% if youtube %}
        <a class=\"usa-link-youtube\" href=\"{{ youtube }}\">
          <span>YouTube</span>
        </a>
        {% endif %}

        {% if rss %}
        <a class=\"usa-link-rss\" href=\"{{ rss }}\">
          <span>RSS</span>
        </a>
        {% endif %}

        <address>

          {% if contact_center %}
          <h3 class=\"usa-footer-contact-heading\">{{ contact_center }}</h3>
          {% endif %}

          {% if phone %}
          <p><a href=\"tel:{{ phone }}\">{{ phone }}</a></p>
          {% endif %}

          {% if email %}
          <a href=\"mailto:{{ email }}\">{{ email }}</a>
          {% endif %}

        </address>
      </div>
      {% endif %}

    </div>
    {% endif %}

    {% if page.footer_secondary %}
    <div class=\"usa-grid\">
      {{ page.footer_secondary }}
    </div>
    {% endif %}

  </div>
  {% endif %}

</footer>
";
    }
}
