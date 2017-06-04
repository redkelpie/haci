<?php

/* themes/gavias_charityplus/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_7d1130f211bd1d0c03826546710f11e99f7c443cd6adca8f66669f9b0fe09d7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 16, "block" => 17, "if" => 18);
        $filters = array("t" => 19, "replace" => 26);
        $functions = array("path" => 19);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('t', 'replace'),
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

        // line 15
        echo "
";
        // line 16
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "site-branding"), "method");
        // line 17
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "  ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 19
            echo "    <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\" class=\"site-branding-logo\">
      ";
            // line 20
            if ((isset($context["logo_demo"]) ? $context["logo_demo"] : null)) {
                // line 21
                echo "        ";
                if (((isset($context["logo_demo"]) ? $context["logo_demo"] : null) == "logo-2")) {
                    // line 22
                    echo "          <img src=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
                    echo "/images/logo-2.png\" alt=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                    echo "\" />
        ";
                }
                // line 24
                echo "      ";
            } else {
                // line 25
                echo "        ";
                if ((isset($context["setting_logo"]) ? $context["setting_logo"] : null)) {
                    // line 26
                    echo "           <img src=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_replace_filter((isset($context["site_logo"]) ? $context["site_logo"] : null), array(".svg" => ".png")), "html", null, true));
                    echo "\" alt=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                    echo "\" />
        ";
                } else {
                    // line 27
                    echo "  
          <img src=\"";
                    // line 28
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
                    echo "\" alt=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                    echo "\" />
        ";
                }
                // line 29
                echo "  
      ";
            }
            // line 30
            echo "  
    </a>
  ";
        }
        // line 33
        echo "  ";
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 34
            echo "    <div class=\"site-branding__text\">
      ";
            // line 35
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 36
                echo "        <div class=\"site-branding__name\">
          <a href=\"";
                // line 37
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
        </div>
      ";
            }
            // line 40
            echo "      ";
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 41
                echo "        <div class=\"site-branding__slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
      ";
            }
            // line 43
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  135 => 41,  132 => 40,  122 => 37,  119 => 36,  117 => 35,  114 => 34,  111 => 33,  106 => 30,  102 => 29,  95 => 28,  92 => 27,  84 => 26,  81 => 25,  78 => 24,  70 => 22,  67 => 21,  65 => 20,  58 => 19,  55 => 18,  49 => 17,  47 => 16,  44 => 15,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Bartik's theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}

{% set attributes = attributes.addClass('site-branding') %}
{% block content %}
  {% if site_logo %}
    <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\" class=\"site-branding-logo\">
      {% if logo_demo %}
        {% if logo_demo == \"logo-2\" %}
          <img src=\"{{ base_path ~ directory }}/images/logo-2.png\" alt=\"{{ 'Home'|t }}\" />
        {% endif %}
      {% else %}
        {% if setting_logo %}
           <img src=\"{{ site_logo|replace({'.svg': '.png'}) }}\" alt=\"{{ 'Home'|t }}\" />
        {% else %}  
          <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
        {% endif %}  
      {% endif %}  
    </a>
  {% endif %}
  {% if site_name or site_slogan %}
    <div class=\"site-branding__text\">
      {% if site_name %}
        <div class=\"site-branding__name\">
          <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
        </div>
      {% endif %}
      {% if site_slogan %}
        <div class=\"site-branding__slogan\">{{ site_slogan }}</div>
      {% endif %}
    </div>
  {% endif %}
{% endblock %}
";
    }
}
