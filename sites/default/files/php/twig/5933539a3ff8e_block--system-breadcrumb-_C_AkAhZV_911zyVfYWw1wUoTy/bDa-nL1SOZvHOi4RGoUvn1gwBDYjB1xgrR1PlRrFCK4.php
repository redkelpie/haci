<?php

/* themes/gavias_charityplus/templates/block/block--system-breadcrumb-block.html.twig */
class __TwigTemplate_8a59f710c90e014caa4585f09b84e1af67116d0442d41236ca1300887b515330 extends Twig_Template
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
        $tags = array("set" => 32, "if" => 33, "block" => 57);
        $filters = array("clean_class" => 39);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
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

        // line 32
        $context["title_classes"] = "";
        // line 33
        if (((isset($context["label"]) ? $context["label"] : null) == "")) {
            // line 34
            $context["title_classes"] = "no-title";
        }
        // line 37
        $context["classes"] = array(0 => "block gva-block-breadcrumb", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 39
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 40
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))), 3 =>         // line 41
(isset($context["title_classes"]) ? $context["title_classes"] : null));
        // line 44
        echo "
<div class=\"breadcrumb-content-inner\">
  <div class=\"gva-breadcrumb-content\">
    <div";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
      <div class=\"breadcrumb-style\" style=\"";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["custom_style"]) ? $context["custom_style"] : null), "html", null, true));
        echo "\">
        <div class=\"container\">
          <div class=\"breadcrumb-content-main\">
            <h2 class=\"page-title\">";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb_title"]) ? $context["breadcrumb_title"] : null), "html", null, true));
        echo " </h2>
            ";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo " 
              ";
        // line 53
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 54
            echo "                <h2 class=\"block-title\" ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo "><span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</span></h2>
              ";
        }
        // line 56
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
            ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "          </div> 
        </div>   
      </div> 
    </div>  
  </div>  
</div>  

";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        // line 58
        echo "              <div class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["custom_classes"]) ? $context["custom_classes"] : null), "html", null, true));
        echo "\">
                <div";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content block-content"), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "</div>
              </div>  
            ";
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/block/block--system-breadcrumb-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 59,  110 => 58,  107 => 57,  96 => 62,  94 => 57,  89 => 56,  81 => 54,  79 => 53,  75 => 52,  71 => 51,  65 => 48,  61 => 47,  56 => 44,  54 => 41,  53 => 40,  52 => 39,  51 => 37,  48 => 34,  46 => 33,  44 => 32,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main content
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 *
 * @ingroup themeable
 */
#}
{% set title_classes = '' %}
{% if label == '' %}
{% set title_classes = 'no-title' %}
{% endif %}
{%
  set classes = [
    'block gva-block-breadcrumb',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    title_classes
  ]
%}

<div class=\"breadcrumb-content-inner\">
  <div class=\"gva-breadcrumb-content\">
    <div{{ attributes.addClass(classes) }}>
      <div class=\"breadcrumb-style\" style=\"{{ custom_style }}\">
        <div class=\"container\">
          <div class=\"breadcrumb-content-main\">
            <h2 class=\"page-title\">{{ breadcrumb_title }} </h2>
            {{ title_prefix }} 
              {% if label %}
                <h2 class=\"block-title\" {{ title_attributes }}><span>{{ label }}</span></h2>
              {% endif %}
            {{ title_suffix }}
            {% block content %}
              <div class=\"{{ custom_classes }}\">
                <div{{ content_attributes.addClass('content block-content') }}>{{ content }}</div>
              </div>  
            {% endblock %}
          </div> 
        </div>   
      </div> 
    </div>  
  </div>  
</div>  

";
    }
}
