<?php

/* modules/ubercart/uc_cart/templates/uc-cart-block-title.html.twig */
class __TwigTemplate_ce07a9e8536dd9ca79f5279fd132150a8b556b6e7148ab7d39c4e65af680d930 extends Twig_Template
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

        // line 19
        if (((isset($context["show_icon"]) ? $context["show_icon"] : null) && (isset($context["cart_empty"]) ? $context["cart_empty"] : null))) {
            // line 20
            echo "  <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["cart_url"]) ? $context["cart_url"] : null), "html", null, true));
            echo "\"><span class=\"cart-block-icon empty\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("View your shopping cart.")));
            echo "\"></span></a>
";
        } elseif (        // line 21
(isset($context["show_icon"]) ? $context["show_icon"] : null)) {
            // line 22
            echo "  <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["cart_url"]) ? $context["cart_url"] : null), "html", null, true));
            echo "\"><span class=\"cart-block-icon\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("View your shopping cart.")));
            echo "\"></span></a>
";
        }
        // line 24
        echo "
";
        // line 25
        if (((isset($context["collapsible"]) ? $context["collapsible"] : null) && (isset($context["collapsed"]) ? $context["collapsed"] : null))) {
            // line 26
            echo "  <span class=\"cart-block-arrow collapsed\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Show/hide shopping cart contents.")));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</span>
";
        } elseif (        // line 27
(isset($context["collapsible"]) ? $context["collapsible"] : null)) {
            // line 28
            echo "  <span class=\"cart-block-arrow\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Show/hide shopping cart contents.")));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</span>
";
        } else {
            // line 30
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/ubercart/uc_cart/templates/uc-cart-block-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  76 => 28,  74 => 27,  67 => 26,  65 => 25,  62 => 24,  54 => 22,  52 => 21,  45 => 20,  43 => 19,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display the shopping cart block title.
 *
 * Available variables:
 * - title: The text to use for the title of the block.
 * - show_icon: TRUE if the cart icon is to be displayed.
 * - empty: TRUE if the cart is empty.
 * - collapsible: TRUE if the cart block is collapsible.
 * - collapsed: TRUE if the cart block is collapsed initially.
 * - cart_url: The URL of the cart page.
 *
 * @see uc_cart_preprocess_block()
 * @see template_preprocess_uc_cart_block_title()
 *
 * @ingroup themeable
#}
{% if show_icon and cart_empty %}
  <a href=\"{{ cart_url }}\"><span class=\"cart-block-icon empty\" title=\"{{ 'View your shopping cart.'|t }}\"></span></a>
{% elseif show_icon %}
  <a href=\"{{ cart_url }}\"><span class=\"cart-block-icon\" title=\"{{ 'View your shopping cart.'|t }}\"></span></a>
{% endif %}

{% if collapsible and collapsed %}
  <span class=\"cart-block-arrow collapsed\" title=\"{{ 'Show/hide shopping cart contents.'|t }}\">{{ title }}</span>
{% elseif collapsible %}
  <span class=\"cart-block-arrow\" title=\"{{ 'Show/hide shopping cart contents.'|t }}\">{{ title }}</span>
{% else %}
  {{ title }}
{% endif %}
";
    }
}
