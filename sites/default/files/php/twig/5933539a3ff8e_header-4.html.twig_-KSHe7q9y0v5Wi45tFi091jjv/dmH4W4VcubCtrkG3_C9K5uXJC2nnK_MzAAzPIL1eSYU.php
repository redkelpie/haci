<?php

/* themes/gavias_charityplus/templates/page/header-4.html.twig */
class __TwigTemplate_ff0d05d4a403c4966d5d4e65e68224e2c42d084e3ff9fea5f5c2ee06efb32d2a extends Twig_Template
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
        $tags = array("if" => 3, "set" => 13);
        $filters = array("t" => 79);
        $functions = array("path" => 24);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
                array('t'),
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

        // line 1
        echo "<header id=\"header\" class=\"header-v4\">
  
  ";
        // line 3
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbar", array())) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"content\">";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbar", array()), "html", null, true));
            echo "</div> 
        </div>
      </div>
    </div>
  ";
        }
        // line 12
        echo "
  ";
        // line 13
        $context["class_sticky"] = "";
        // line 14
        echo "  ";
        if (((isset($context["sticky_menu"]) ? $context["sticky_menu"] : null) == 1)) {
            // line 15
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 16
            echo "  ";
        }
        echo "  

  <div class=\"header-main\">
    <div class=\"container\">
      <div class=\"header-inner clearfix\">
        <div class=\"row\">
          <div class=\"col-md-3 col-sm-3 col-xs-12 branding\">
            ";
        // line 23
        if (((isset($context["demo_logo"]) ? $context["demo_logo"] : null) == "enable")) {
            // line 24
            echo "              <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" class=\"site-branding-logo\"><img src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_path"]) ? $context["theme_path"] : null), "html", null, true));
            echo "/images/logo-4.png\" alt=\"home\"/></a>
            ";
        } else {
            // line 25
            echo "  
              ";
            // line 26
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array())) {
                // line 27
                echo "                ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
                echo "
              ";
            }
            // line 29
            echo "            ";
        }
        echo "  
          </div>
          <div class=\"col-md-9 col-sm-9 col-xs-12\">
            ";
        // line 32
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_right", array())) {
            // line 33
            echo "              ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_right", array()), "html", null, true));
            echo "
            ";
        }
        // line 35
        echo "          </div>  
      </div>
    </div>  
  </div>

  <div class=\"main-menu ";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["class_sticky"]) ? $context["class_sticky"] : null), "html", null, true));
        echo "\">
    <div class=\"container header-content-layout\">
      <div class=\"header-main-inner p-relative\">
        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12 p-static\">
            <div class=\"area-main-menu\">
              <div class=\"area-inner\">
                <div class=\"gva-offcanvas-mobile\">
                  <div class=\"close-offcanvas hidden\"><span class=\"zmdi zmdi-close\"></span></div>
                  <div class=\"main-menu-inner\">
                    ";
        // line 50
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 51
            echo "                      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
                    ";
        }
        // line 53
        echo "                  </div>

                  ";
        // line 55
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "quick_menu", array())) {
            // line 56
            echo "                    <div class=\"quick-menu\">
                      <div class=\"icon\"><a><span class=\"zmdi zmdi-more\"></span></a></div>
                      <div class=\"content-inner\">
                        ";
            // line 59
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "quick_menu", array()), "html", null, true));
            echo "
                      </div>  
                    </div>
                  ";
        }
        // line 62
        echo " 
                            
                  ";
        // line 64
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array())) {
            // line 65
            echo "                    <div class=\"after-offcanvas hidden\">
                      ";
            // line 66
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array()), "html", null, true));
            echo "
                    </div>
                 ";
        }
        // line 69
        echo "                </div>
                  
                <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                  <span class=\"one\"></span>
                  <span class=\"two\"></span>
                  <span class=\"three\"></span>
                </div>

                 ";
        // line 77
        if ( !twig_test_empty((isset($context["link_donation"]) ? $context["link_donation"] : null))) {
            // line 78
            echo "                 <div class=\"header-action\">
                  <a href=\"";
            // line 79
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link_donation"]) ? $context["link_donation"] : null), "html", null, true));
            echo "\" class=\"btn-theme\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Donate Now")));
            echo "</a>
                </div>
                ";
        }
        // line 82
        echo "
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/page/header-4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 82,  196 => 79,  193 => 78,  191 => 77,  181 => 69,  175 => 66,  172 => 65,  170 => 64,  166 => 62,  159 => 59,  154 => 56,  152 => 55,  148 => 53,  142 => 51,  140 => 50,  127 => 40,  120 => 35,  114 => 33,  112 => 32,  105 => 29,  99 => 27,  97 => 26,  94 => 25,  86 => 24,  84 => 23,  73 => 16,  70 => 15,  67 => 14,  65 => 13,  62 => 12,  54 => 7,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "<header id=\"header\" class=\"header-v4\">
  
  {% if page.topbar %}
    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"content\">{{ page.topbar }}</div> 
        </div>
      </div>
    </div>
  {% endif %}

  {% set class_sticky = '' %}
  {% if sticky_menu == 1 %}
    {% set class_sticky = 'gv-sticky-menu' %}
  {% endif %}  

  <div class=\"header-main\">
    <div class=\"container\">
      <div class=\"header-inner clearfix\">
        <div class=\"row\">
          <div class=\"col-md-3 col-sm-3 col-xs-12 branding\">
            {% if demo_logo == 'enable' %}
              <a href=\"{{ path('<front>') }}\" class=\"site-branding-logo\"><img src=\"{{theme_path}}/images/logo-4.png\" alt=\"home\"/></a>
            {% else %}  
              {% if page.branding %}
                {{ page.branding }}
              {% endif %}
            {% endif %}  
          </div>
          <div class=\"col-md-9 col-sm-9 col-xs-12\">
            {% if page.header_right %}
              {{ page.header_right }}
            {% endif %}
          </div>  
      </div>
    </div>  
  </div>

  <div class=\"main-menu {{ class_sticky }}\">
    <div class=\"container header-content-layout\">
      <div class=\"header-main-inner p-relative\">
        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12 p-static\">
            <div class=\"area-main-menu\">
              <div class=\"area-inner\">
                <div class=\"gva-offcanvas-mobile\">
                  <div class=\"close-offcanvas hidden\"><span class=\"zmdi zmdi-close\"></span></div>
                  <div class=\"main-menu-inner\">
                    {% if page.main_menu %}
                      {{ page.main_menu }}
                    {% endif %}
                  </div>

                  {% if page.quick_menu %}
                    <div class=\"quick-menu\">
                      <div class=\"icon\"><a><span class=\"zmdi zmdi-more\"></span></a></div>
                      <div class=\"content-inner\">
                        {{ page.quick_menu }}
                      </div>  
                    </div>
                  {% endif %} 
                            
                  {% if page.offcanvas %}
                    <div class=\"after-offcanvas hidden\">
                      {{ page.offcanvas }}
                    </div>
                 {% endif %}
                </div>
                  
                <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                  <span class=\"one\"></span>
                  <span class=\"two\"></span>
                  <span class=\"three\"></span>
                </div>

                 {% if link_donation is not empty %}
                 <div class=\"header-action\">
                  <a href=\"{{link_donation}}\" class=\"btn-theme\">{{ 'Donate Now'|t }}</a>
                </div>
                {% endif %}

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</header>
";
    }
}
