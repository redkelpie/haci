<?php

/* themes/gavias_charityplus/templates/page/main.html.twig */
class __TwigTemplate_1d35954f2c2821f66bd0b0f4121362c94511701876e2f4a322717adecc9b6d81 extends Twig_Template
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
        $tags = array("set" => 4, "if" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 1
        echo "<div class=\"content-main-inner\">
\t<div class=\"row\">
\t\t
\t\t";
        // line 4
        $context["cl_main"] = "col-md-12 col-xs-12";
        // line 5
        echo "\t\t";
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()))) {
            echo "\t
\t\t\t";
            // line 6
            $context["cl_main"] = "col-xs-12 col-md-6 col-md-push-3 sb-r sb-l ";
            // line 7
            echo "\t\t";
        } elseif (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()))) {
            echo "\t
\t\t\t";
            // line 8
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array())) {
                // line 9
                echo "\t\t\t \t";
                $context["cl_main"] = "col-xs-12 col-md-8 sb-r ";
                // line 10
                echo "\t\t\t";
            }
            echo " \t\t
\t\t\t";
            // line 11
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array())) {
                // line 12
                echo "\t\t\t\t";
                $context["cl_main"] = "col-xs-12 col-md-8 col-md-push-4 sb-l ";
                // line 13
                echo "\t\t\t";
            }
            echo "\t\t\t\t
      ";
        }
        // line 14
        echo " 

\t\t<div id=\"page-main-content\" class=\"main-content ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["cl_main"]) ? $context["cl_main"] : null), "html", null, true));
        echo "\">

\t\t\t<div class=\"main-content-inner\">
\t\t\t\t
\t\t\t\t";
        // line 20
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 21
            echo "\t\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t\t";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 25
        echo "
\t\t\t\t";
        // line 26
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 27
            echo "\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 31
        echo "
\t\t\t\t";
        // line 32
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 33
            echo "\t\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t\t";
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 37
        echo "\t\t\t</div>

\t\t</div>

\t\t<!-- Sidebar Left -->
\t\t";
        // line 42
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array())) {
            // line 43
            echo "\t\t\t";
            $context["cl_left"] = "col-md-4 col-md-pull-8 col-sm-12 col-xs-12";
            // line 44
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array())) {
                // line 45
                echo "\t\t\t \t";
                $context["cl_left"] = "col-md-3 col-md-pull-6 col-sm-12 col-xs-12";
                // line 46
                echo "\t\t\t";
            }
            echo " \t\t
\t\t\t
\t\t\t<div class=\"";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["cl_left"]) ? $context["cl_left"] : null), "html", null, true));
            echo " sidebar sidebar-left\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 50
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 54
        echo "\t\t<!-- End Sidebar Left -->

\t\t<!-- Sidebar Right -->
\t\t";
        // line 57
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array())) {
            // line 58
            echo "\t\t\t";
            $context["cl_right"] = "col-lg-4 col-md-4 col-sm-12 col-xs-12";
            // line 59
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array())) {
                // line 60
                echo "\t\t\t\t";
                $context["cl_right"] = "col-lg-3 col-md-3 col-sm-12 col-xs-12";
                // line 61
                echo "\t\t\t";
            }
            echo "\t 

\t\t\t<div class=\"";
            // line 63
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["cl_right"]) ? $context["cl_right"] : null), "html", null, true));
            echo " sidebar sidebar-right theiaStickySidebar\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 65
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 69
        echo "\t\t<!-- End Sidebar Right -->
\t\t
\t</div>
</div>

";
        // line 74
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "cart", array())) {
            // line 75
            echo "\t<div class=\"quick-cart\">
\t\t<div class=\"icon\"><a><span class=\"zmdi zmdi-shopping-cart\"></span></a></div>
\t\t<div class=\"content-inner\">";
            // line 77
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "cart", array()), "html", null, true));
            echo "</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/page/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 77,  212 => 75,  210 => 74,  203 => 69,  196 => 65,  191 => 63,  185 => 61,  182 => 60,  179 => 59,  176 => 58,  174 => 57,  169 => 54,  162 => 50,  157 => 48,  151 => 46,  148 => 45,  145 => 44,  142 => 43,  140 => 42,  133 => 37,  127 => 34,  124 => 33,  122 => 32,  119 => 31,  113 => 28,  110 => 27,  108 => 26,  105 => 25,  99 => 22,  96 => 21,  94 => 20,  87 => 16,  83 => 14,  77 => 13,  74 => 12,  72 => 11,  67 => 10,  64 => 9,  62 => 8,  57 => 7,  55 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"content-main-inner\">
\t<div class=\"row\">
\t\t
\t\t{% set cl_main = 'col-md-12 col-xs-12' %}
\t\t{% if page.sidebar_right and page.sidebar_left %}\t
\t\t\t{% set cl_main = 'col-xs-12 col-md-6 col-md-push-3 sb-r sb-l ' %}
\t\t{% elseif page.sidebar_right or page.sidebar_left %}\t
\t\t\t{% if page.sidebar_right %}
\t\t\t \t{% set cl_main = 'col-xs-12 col-md-8 sb-r ' %}
\t\t\t{% endif %} \t\t
\t\t\t{% if page.sidebar_left %}
\t\t\t\t{% set cl_main = 'col-xs-12 col-md-8 col-md-push-4 sb-l ' %}
\t\t\t{% endif %}\t\t\t\t
      {% endif %} 

\t\t<div id=\"page-main-content\" class=\"main-content {{ cl_main }}\">

\t\t\t<div class=\"main-content-inner\">
\t\t\t\t
\t\t\t\t{% if page.content_top %}
\t\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t\t{{ page.content_top }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if page.content %}
\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if page.content_bottom %}
\t\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t\t{{ page.content_bottom }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>

\t\t</div>

\t\t<!-- Sidebar Left -->
\t\t{% if page.sidebar_left %}
\t\t\t{% set cl_left = 'col-md-4 col-md-pull-8 col-sm-12 col-xs-12' %}
\t\t\t{%\tif page.sidebar_right %}
\t\t\t \t{% set cl_left = 'col-md-3 col-md-pull-6 col-sm-12 col-xs-12' %}
\t\t\t{% endif %} \t\t
\t\t\t
\t\t\t<div class=\"{{ cl_left }} sidebar sidebar-left\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t{{ page.sidebar_left }}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t<!-- End Sidebar Left -->

\t\t<!-- Sidebar Right -->
\t\t{% if page.sidebar_right %}
\t\t\t{% set cl_right = 'col-lg-4 col-md-4 col-sm-12 col-xs-12'  %}
\t\t\t{% if page.sidebar_left %}
\t\t\t\t{% set cl_right = 'col-lg-3 col-md-3 col-sm-12 col-xs-12' %}
\t\t\t{% endif %}\t 

\t\t\t<div class=\"{{ cl_right }} sidebar sidebar-right theiaStickySidebar\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t{{ page.sidebar_right }}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t<!-- End Sidebar Right -->
\t\t
\t</div>
</div>

{% if page.cart %}
\t<div class=\"quick-cart\">
\t\t<div class=\"icon\"><a><span class=\"zmdi zmdi-shopping-cart\"></span></a></div>
\t\t<div class=\"content-inner\">{{ page.cart }}</div>
\t</div>
{% endif %}
";
    }
}
