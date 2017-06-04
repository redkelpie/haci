<?php

/* themes/gavias_charityplus/templates/page/header-1.html.twig */
class __TwigTemplate_5bb5e3a6e4e3ac17d8614442652b27ab7f89adec23b2d1d73a6aa5ccd37ff143 extends Twig_Template
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
        $tags = array("if" => 3, "set" => 20);
        $filters = array("t" => 72);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
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

        // line 1
        echo "<header id=\"header\" class=\"header-v1 v2\">
  
  ";
        // line 3
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbar", array())) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-11\">
              <div class=\"topbar-content\">";
            // line 9
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbar", array()), "html", null, true));
            echo "</div> 
            </div>
            <div class=\"col-lg-1\">
              <div class=\"language-box\">";
            // line 12
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "language", array()), "html", null, true));
            echo "</div>
            </div> 
          </div>   
        </div>
      </div>
    </div>
  ";
        }
        // line 19
        echo "
  ";
        // line 20
        $context["class_sticky"] = "";
        // line 21
        echo "  ";
        if (((isset($context["sticky_menu"]) ? $context["sticky_menu"] : null) == 1)) {
            // line 22
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 23
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["class_sticky"]) ? $context["class_sticky"] : null), "html", null, true));
        echo "\">
      <div class=\"header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
            
              <div class=\"col-md-12 col-sm-12 col-xs-12 content-inner\">
                <div class=\"branding\">
                  ";
        // line 32
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array())) {
            // line 33
            echo "                    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
            echo "
                  ";
        }
        // line 35
        echo "                </div>
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                        <div class=\"gva-offcanvas-mobile\">
                          <div class=\"close-offcanvas hidden\"><i class=\"zmdi zmdi-close\"></i></div>
                          <div class=\"main-menu-inner\">
                            ";
        // line 43
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 44
            echo "                              ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
                            ";
        }
        // line 46
        echo "                          </div>

                          ";
        // line 48
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "quick_menu", array())) {
            // line 49
            echo "                            <div class=\"quick-menu\">
                              <div class=\"icon\"><a><span class=\"zmdi zmdi-more\"></span></a></div>
                              <div class=\"content-inner\">
                                ";
            // line 52
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "quick_menu", array()), "html", null, true));
            echo "
                              </div>  
                            </div>
                          ";
        }
        // line 55
        echo "  
                          ";
        // line 56
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array())) {
            // line 57
            echo "                            <div class=\"after-offcanvas hidden\">
                              ";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array()), "html", null, true));
            echo "
                            </div>
                         ";
        }
        // line 61
        echo "                         
                        </div>
                        
                        <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                          <span class=\"one\"></span>
                          <span class=\"two\"></span>
                          <span class=\"three\"></span>
                        </div>
                        
                       ";
        // line 70
        if ( !twig_test_empty((isset($context["link_donation"]) ? $context["link_donation"] : null))) {
            // line 71
            echo "                          <div class=\"header-action\">
                            <a href=\"";
            // line 72
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link_donation"]) ? $context["link_donation"] : null), "html", null, true));
            echo "\" class=\"btn-theme\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Donate Now")));
            echo "</a>
                          </div>
                        ";
        }
        // line 74
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
        return "themes/gavias_charityplus/templates/page/header-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 74,  173 => 72,  170 => 71,  168 => 70,  157 => 61,  151 => 58,  148 => 57,  146 => 56,  143 => 55,  136 => 52,  131 => 49,  129 => 48,  125 => 46,  119 => 44,  117 => 43,  107 => 35,  101 => 33,  99 => 32,  89 => 25,  83 => 23,  80 => 22,  77 => 21,  75 => 20,  72 => 19,  62 => 12,  56 => 9,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "<header id=\"header\" class=\"header-v1 v2\">
  
  {% if page.topbar %}
    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-11\">
              <div class=\"topbar-content\">{{ page.topbar }}</div> 
            </div>
            <div class=\"col-lg-1\">
              <div class=\"language-box\">{{page.language}}</div>
            </div> 
          </div>   
        </div>
      </div>
    </div>
  {% endif %}

  {% set class_sticky = '' %}
  {% if sticky_menu == 1 %}
    {% set class_sticky = 'gv-sticky-menu' %}
  {% endif %}  

   <div class=\"header-main {{ class_sticky }}\">
      <div class=\"header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
            
              <div class=\"col-md-12 col-sm-12 col-xs-12 content-inner\">
                <div class=\"branding\">
                  {% if page.branding %}
                    {{ page.branding }}
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
