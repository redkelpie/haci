<?php

/* themes/gavias_charityplus/templates/page/page.html.twig */
class __TwigTemplate_b10b0735c6f26107fa9c54a6478b8ea82d53f92699ad1443cd0b6c1a96f6a287 extends Twig_Template
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
        $tags = array("include" => 7, "if" => 12);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
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

        // line 7
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/parts/message.html.twig"), "themes/gavias_charityplus/templates/page/page.html.twig", 7)->display($context);
        // line 8
        echo "<div class=\"body-page gva-body-page\">
\t";
        // line 9
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/parts/preloader.html.twig"), "themes/gavias_charityplus/templates/page/page.html.twig", 9)->display($context);
        // line 10
        echo "   ";
        $this->loadTemplate((isset($context["header_skin"]) ? $context["header_skin"] : null), "themes/gavias_charityplus/templates/page/page.html.twig", 10)->display($context);
        // line 11
        echo "\t
   ";
        // line 12
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumbs", array())) {
            // line 13
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumbs", array()), "html", null, true));
            echo "
\t\t</div>
\t";
        }
        // line 17
        echo "\t
\t<div role=\"main\" class=\"main main-page\">
\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 21
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow_content", array())) {
            // line 22
            echo "\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 25
        echo "\t

\t\t";
        // line 27
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 28
            echo "\t\t\t<div class=\"help show\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 36
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 38
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array())) {
            // line 39
            echo "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 49
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 54
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/main.html.twig"), "themes/gavias_charityplus/templates/page/page.html.twig", 54)->display($context);
        // line 55
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 58
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 59
            echo "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 61
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 65
        echo "
\t\t";
        // line 66
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array())) {
            // line 67
            echo "\t\t\t<div class=\"area after-content\">
\t\t\t\t<div class=\"container\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t ";
            // line 70
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
            echo "
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 75
        echo "\t\t
\t</div>
</div>

";
        // line 79
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/footer.html.twig"), "themes/gavias_charityplus/templates/page/page.html.twig", 79)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 79,  169 => 75,  161 => 70,  156 => 67,  154 => 66,  151 => 65,  144 => 61,  140 => 59,  138 => 58,  133 => 55,  131 => 54,  124 => 49,  115 => 43,  109 => 39,  107 => 38,  103 => 36,  95 => 31,  90 => 28,  88 => 27,  84 => 25,  78 => 23,  75 => 22,  73 => 21,  67 => 17,  61 => 14,  58 => 13,  56 => 12,  53 => 11,  50 => 10,  48 => 9,  45 => 8,  43 => 7,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Gavias's theme implementation to display a single Drupal page.
 */
#}
{% include directory ~ '/templates/page/parts/message.html.twig' %}
<div class=\"body-page gva-body-page\">
\t{% include directory ~ '/templates/page/parts/preloader.html.twig' %}
   {% include header_skin %}
\t
   {% if page.breadcrumbs %}
\t\t<div class=\"breadcrumbs\">
\t\t\t{{ page.breadcrumbs }}
\t\t</div>
\t{% endif %}
\t
\t<div role=\"main\" class=\"main main-page\">
\t
\t\t<div class=\"clearfix\"></div>
\t\t{% if page.slideshow_content %}
\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t{{ page.slideshow_content }}
\t\t\t</div>
\t\t{% endif %}\t

\t\t{% if page.help %}
\t\t\t<div class=\"help show\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t{{ page.help }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t
\t\t<div class=\"clearfix\"></div>
\t\t{% if page.before_content %}
\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t{{ page.before_content }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container\">
\t\t\t\t{% include directory ~ '/templates/page/main.html.twig' %}
\t\t\t</div>
\t\t</div>

\t\t{% if page.highlighted %}
\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t{{ page.highlighted }}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}

\t\t{% if page.after_content %}
\t\t\t<div class=\"area after-content\">
\t\t\t\t<div class=\"container\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t {{ page.after_content }}
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t
\t</div>
</div>

{% include directory ~ '/templates/page/footer.html.twig' %}
";
    }
}
