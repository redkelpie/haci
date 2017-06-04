<?php

/* themes/gavias_charityplus/templates/views/banner/views-view-gvaowl--banner-2.html.twig */
class __TwigTemplate_77a7c303302862d9d4024c9ecc8c2c968b6566b94c792c710354a0627ee3f816 extends Twig_Template
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
        $tags = array("if" => 1, "set" => 9, "for" => 11);
        $filters = array("raw" => 14, "length" => 15);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('raw', 'length'),
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
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 2
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">
";
        }
        // line 4
        echo "   
   ";
        // line 5
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 6
            echo "      <h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
   ";
        }
        // line 8
        echo "
    ";
        // line 9
        $context["i"] = 0;
        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 12
            echo "      ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 13
            echo "      ";
            if ((((isset($context["i"]) ? $context["i"] : null) % 2) == 1)) {
                echo "<div class=\"item\">";
            }
            // line 14
            echo "        <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($context["row"], "content", array())));
            echo "</div>
      ";
            // line 15
            if (((((isset($context["i"]) ? $context["i"] : null) % 2) == 0) || ((isset($context["i"]) ? $context["i"] : null) == twig_length_filter($this->env, (isset($context["rows"]) ? $context["rows"] : null))))) {
                echo "</div>";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 19
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/views/banner/views-view-gvaowl--banner-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 19,  102 => 18,  99 => 17,  93 => 16,  89 => 15,  82 => 14,  77 => 13,  74 => 12,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  56 => 6,  54 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if attributes -%}
   <div{{ attributes }}>
{% endif %}
   
   {% if title %}
      <h3>{{ title }}</h3>
   {% endif %}

    {% set i = 0 %}

    {% for row in rows %}
      {% set i = i + 1 %}
      {% if i % 2 == 1 %}<div class=\"item\">{% endif %}
        <div{{ row.attributes }}>{{ row.content|raw }}</div>
      {% if i % 2 == 0 or i == rows|length %}</div>{% endif %}
    {% endfor %}

{% if attributes -%}
    </div>
{% endif %}
";
    }
}
