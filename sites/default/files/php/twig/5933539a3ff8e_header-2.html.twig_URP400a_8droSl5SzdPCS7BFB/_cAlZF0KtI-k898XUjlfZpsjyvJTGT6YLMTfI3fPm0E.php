<?php

/* themes/gavias_charityplus/templates/page/header-2.html.twig */
class __TwigTemplate_64c56ead4d05a175fbdd2ed100f284629b5dbf405991e4d280b97433635c265c extends Twig_Template
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
        $tags = array("set" => 3, "if" => 4);
        $filters = array("t" => 57);
        $functions = array("path" => 15);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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
        echo "<header id=\"header\" class=\"header-v2\">

  ";
        // line 3
        $context["class_sticky"] = "";
        // line 4
        echo "  ";
        if (((isset($context["sticky_menu"]) ? $context["sticky_menu"] : null) == 1)) {
            // line 5
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 6
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["class_sticky"]) ? $context["class_sticky"] : null), "html", null, true));
        echo "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12 content-inner\">
                <div class=\"branding\">
                  ";
        // line 14
        if (((isset($context["demo_logo"]) ? $context["demo_logo"] : null) == "enable")) {
            // line 15
            echo "                    <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" class=\"site-branding-logo\"><img src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_path"]) ? $context["theme_path"] : null), "html", null, true));
            echo "/images/logo-2.png\" alt=\"home\"/></a>
                  ";
        } else {
            // line 16
            echo "  
                    ";
            // line 17
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array())) {
                // line 18
                echo "                      ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
                echo "
                    ";
            }
            // line 20
            echo "                  ";
        }
        echo "  
                </div>
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                          <div class=\"gva-offcanvas-mobile\">
                            <div class=\"close-offcanvas hidden\"><i class=\"zmdi zmdi-close\"></i></div>
                            <div class=\"main-menu-inner\">
                              ";
        // line 29
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 30
            echo "                                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
                              ";
        }
        // line 32
        echo "                            </div>

                            ";
        // line 34
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "quick_menu", array())) {
            // line 35
            echo "                              <div class=\"quick-menu\">
                                <div class=\"icon\"><a><span class=\"zmdi zmdi-more\"></span></a></div>
                                <div class=\"content-inner\">
                                  ";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "quick_menu", array()), "html", null, true));
            echo "
                                </div>  
                              </div>
                            ";
        }
        // line 42
        echo "
                            ";
        // line 43
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array())) {
            // line 44
            echo "                              <div class=\"after-offcanvas hidden\">
                                ";
            // line 45
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array()), "html", null, true));
            echo "
                              </div>
                           ";
        }
        // line 48
        echo "                          </div> 
                          <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                            <span class=\"one\"></span>
                            <span class=\"two\"></span>
                            <span class=\"three\"></span>
                          </div>
                        
                           ";
        // line 55
        if ( !twig_test_empty((isset($context["link_donation"]) ? $context["link_donation"] : null))) {
            // line 56
            echo "                          <div class=\"header-action\">
                            <a href=\"";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link_donation"]) ? $context["link_donation"] : null), "html", null, true));
            echo "\" class=\"btn-theme\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Donate Now")));
            echo "</a>
                          </div>
                        ";
        }
        // line 60
        echo "
                      </div>
                    </div>
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
        return "themes/gavias_charityplus/templates/page/header-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 60,  158 => 57,  155 => 56,  153 => 55,  144 => 48,  138 => 45,  135 => 44,  133 => 43,  130 => 42,  123 => 38,  118 => 35,  116 => 34,  112 => 32,  106 => 30,  104 => 29,  91 => 20,  85 => 18,  83 => 17,  80 => 16,  72 => 15,  70 => 14,  61 => 8,  55 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "<header id=\"header\" class=\"header-v2\">

  {% set class_sticky = '' %}
  {% if sticky_menu == 1 %}
    {% set class_sticky = 'gv-sticky-menu' %}
  {% endif %}  

   <div class=\"header-main {{ class_sticky }}\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12 content-inner\">
                <div class=\"branding\">
                  {% if demo_logo == 'enable' %}
                    <a href=\"{{ path('<front>') }}\" class=\"site-branding-logo\"><img src=\"{{theme_path}}/images/logo-2.png\" alt=\"home\"/></a>
                  {% else %}  
                    {% if page.branding %}
                      {{ page.branding }}
                    {% endif %}
                  {% endif %}  
                </div>
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                          <div class=\"gva-offcanvas-mobile\">
                            <div class=\"close-offcanvas hidden\"><i class=\"zmdi zmdi-close\"></i></div>
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
      </div>
   </div>

</header>
";
    }
}
