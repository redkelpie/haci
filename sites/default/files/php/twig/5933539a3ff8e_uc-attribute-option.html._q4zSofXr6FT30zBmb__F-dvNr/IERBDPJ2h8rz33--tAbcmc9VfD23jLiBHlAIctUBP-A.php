<?php

/* themes/gavias_charityplus/templates/uc/uc-attribute-option.html.twig */
class __TwigTemplate_f276e90e4ffc5db96099ac691f2740c706a0345d4fd0bf6e7ae7e40802053e72 extends Twig_Template
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
        $tags = array("spaceless" => 14, "if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'if'),
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

        // line 14
        ob_start();
        // line 15
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 16
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["option"]) ? $context["option"] : null), "html", null, true));
            echo "
";
        } else {
            // line 18
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["option"]) ? $context["option"] : null), "html", null, true));
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/uc/uc-attribute-option.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  47 => 16,  45 => 15,  43 => 14,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display an attribute option with price.
 *
 * Available variables:
 * - option: The option name.
 * - price: The price total or adjustment, if any.
 *
 * @see _uc_attribute_alter_form()
 *
 * @ingroup themeable
#}
{% spaceless %}
{% if price %}
  {{ option }}
{% else %}
  {{ option }}
{% endif %}
{% endspaceless %}
";
    }
}
