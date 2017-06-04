<?php

/* themes/gavias_charityplus/templates/page/footer.html.twig */
class __TwigTemplate_d3c873ad47e60ff7c0d4246aa23ace4d1bcedfb2be7b4073279aff74fec4c123 extends Twig_Template
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
        $tags = array("if" => 1, "set" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
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
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "message", array())) {
            // line 2
            echo "  <div class=\"gva-drupal-message-status\">
    ";
            // line 3
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "message", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 6
        echo "  
<footer id=\"footer\" class=\"footer\">
  <div class=\"footer-inner\">
    
    ";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_footer", array())) {
            // line 11
            echo "      <div class=\"before-footer\">
        <div class=\"container\">
          <div class=\"content-inner clearfix area\">
            ";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_footer", array()), "html", null, true));
            echo "
          </div>
        </div>  
      </div>  
    ";
        }
        // line 19
        echo "     
    ";
        // line 20
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_four", array()))) {
            // line 21
            echo "        
      ";
            // line 22
            $context["footer_count"] = 0;
            // line 23
            echo "            
      ";
            // line 24
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 25
                echo "        ";
                $context["footer_count"] = ((isset($context["footer_count"]) ? $context["footer_count"] : null) + 1);
                // line 26
                echo "      ";
            }
            echo "  

      ";
            // line 28
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 29
                echo "        ";
                $context["footer_count"] = ((isset($context["footer_count"]) ? $context["footer_count"] : null) + 1);
                // line 30
                echo "      ";
            }
            echo " 

      ";
            // line 32
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 33
                echo "        ";
                $context["footer_count"] = ((isset($context["footer_count"]) ? $context["footer_count"] : null) + 1);
                // line 34
                echo "      ";
            }
            echo "  

      ";
            // line 36
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_four", array())) {
                // line 37
                echo "        ";
                $context["footer_count"] = ((isset($context["footer_count"]) ? $context["footer_count"] : null) + 1);
                // line 38
                echo "      ";
            }
            echo "   

      ";
            // line 40
            $context["col_class"] = "footer-1col col-lg-12 col-md-12 col-sm-12 col-xs-12";
            // line 41
            echo "      ";
            if (((isset($context["footer_count"]) ? $context["footer_count"] : null) == 2)) {
                // line 42
                echo "          ";
                $context["col_class"] = "footer-2col col-lg-6 col-md-6 col-sm-6 col-xs-12";
                // line 43
                echo "      ";
            } elseif (((isset($context["footer_count"]) ? $context["footer_count"] : null) == 3)) {
                echo "  
          ";
                // line 44
                $context["col_class"] = "footer-3col col-lg-4 col-md-4 col-sm-12 col-xs-12";
                // line 45
                echo "      ";
            } elseif (((isset($context["footer_count"]) ? $context["footer_count"] : null) == 4)) {
                // line 46
                echo "           ";
                $context["col_class"] = "footer-4col col-lg-3 col-md-3 col-sm-6 col-xs-12";
                // line 47
                echo "      ";
            }
            // line 48
            echo "
      <div class=\"footer-center\">
        <div class=\"container\"> 
          <div class=\"content-inner\">  
            <div class=\"row\">
              ";
            // line 53
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 54
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_class"]) ? $context["col_class"] : null), "html", null, true));
                echo " column\">
                  ";
                // line 55
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
                </div> 
              ";
            }
            // line 58
            echo "
              ";
            // line 59
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 60
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_class"]) ? $context["col_class"] : null), "html", null, true));
                echo " column\">
                  ";
                // line 61
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
                </div> 
              ";
            }
            // line 64
            echo "
              ";
            // line 65
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 66
                echo "                <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_class"]) ? $context["col_class"] : null), "html", null, true));
                echo " column\">
                  ";
                // line 67
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
                </div> 
              ";
            }
            // line 70
            echo "
              ";
            // line 71
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_four", array())) {
                // line 72
                echo "                 <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_class"]) ? $context["col_class"] : null), "html", null, true));
                echo " column\">
                  ";
                // line 73
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_four", array()), "html", null, true));
                echo "
                </div> 
              ";
            }
            // line 76
            echo "            </div>   
          </div>
        </div>  
      </div>  
    ";
        }
        // line 80
        echo "  

    ";
        // line 82
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_footer", array())) {
            // line 83
            echo "      <div class=\"after-footer\">
        <div class=\"container\">
          <div class=\"content-inner clearfix area\">
            ";
            // line 86
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_footer", array()), "html", null, true));
            echo "
          </div>
        </div>  
      </div>  
    ";
        }
        // line 91
        echo "  </div>   

  ";
        // line 93
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "copyright", array())) {
            // line 94
            echo "    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
            ";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "copyright", array()), "html", null, true));
            echo "
        </div>   
      </div>   
    </div>
  ";
        }
        // line 102
        echo " 
</footer>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/page/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 102,  261 => 97,  256 => 94,  254 => 93,  250 => 91,  242 => 86,  237 => 83,  235 => 82,  231 => 80,  224 => 76,  218 => 73,  213 => 72,  211 => 71,  208 => 70,  202 => 67,  197 => 66,  195 => 65,  192 => 64,  186 => 61,  181 => 60,  179 => 59,  176 => 58,  170 => 55,  165 => 54,  163 => 53,  156 => 48,  153 => 47,  150 => 46,  147 => 45,  145 => 44,  140 => 43,  137 => 42,  134 => 41,  132 => 40,  126 => 38,  123 => 37,  121 => 36,  115 => 34,  112 => 33,  110 => 32,  104 => 30,  101 => 29,  99 => 28,  93 => 26,  90 => 25,  88 => 24,  85 => 23,  83 => 22,  80 => 21,  78 => 20,  75 => 19,  67 => 14,  62 => 11,  60 => 10,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if page.message %}
  <div class=\"gva-drupal-message-status\">
    {{ page.message }}
  </div>
{% endif %}
  
<footer id=\"footer\" class=\"footer\">
  <div class=\"footer-inner\">
    
    {% if page.before_footer %}
      <div class=\"before-footer\">
        <div class=\"container\">
          <div class=\"content-inner clearfix area\">
            {{ page.before_footer }}
          </div>
        </div>  
      </div>  
    {% endif %}
     
    {% if page.footer_first or page.footer_second or page.footer_third or page.footer_four %}
        
      {% set footer_count = 0 %}
            
      {% if page.footer_first %}
        {% set footer_count = footer_count + 1 %}
      {% endif %}  

      {% if page.footer_second %}
        {% set footer_count = footer_count + 1 %}
      {% endif %} 

      {% if page.footer_third %}
        {% set footer_count = footer_count + 1 %}
      {% endif %}  

      {% if page.footer_four %}
        {% set footer_count = footer_count + 1 %}
      {% endif %}   

      {% set col_class = 'footer-1col col-lg-12 col-md-12 col-sm-12 col-xs-12' %}
      {% if footer_count == 2 %}
          {% set col_class = 'footer-2col col-lg-6 col-md-6 col-sm-6 col-xs-12' %}
      {% elseif footer_count == 3 %}  
          {% set col_class = 'footer-3col col-lg-4 col-md-4 col-sm-12 col-xs-12' %}
      {% elseif footer_count == 4 %}
           {% set col_class = 'footer-4col col-lg-3 col-md-3 col-sm-6 col-xs-12' %}
      {% endif %}

      <div class=\"footer-center\">
        <div class=\"container\"> 
          <div class=\"content-inner\">  
            <div class=\"row\">
              {% if page.footer_first %}
                <div class=\"{{ col_class }} column\">
                  {{ page.footer_first }}
                </div> 
              {% endif %}

              {% if page.footer_second %}
                <div class=\"{{ col_class }} column\">
                  {{ page.footer_second }}
                </div> 
              {% endif %}

              {% if page.footer_third %}
                <div class=\"{{ col_class }} column\">
                  {{ page.footer_third }}
                </div> 
              {% endif %}

              {% if page.footer_four %}
                 <div class=\"{{ col_class }} column\">
                  {{ page.footer_four }}
                </div> 
              {% endif %}
            </div>   
          </div>
        </div>  
      </div>  
    {% endif %}  

    {% if page.after_footer %}
      <div class=\"after-footer\">
        <div class=\"container\">
          <div class=\"content-inner clearfix area\">
            {{ page.after_footer }}
          </div>
        </div>  
      </div>  
    {% endif %}
  </div>   

  {% if page.copyright %}
    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
            {{ page.copyright }}
        </div>   
      </div>   
    </div>
  {% endif %}
 
</footer>

";
    }
}
