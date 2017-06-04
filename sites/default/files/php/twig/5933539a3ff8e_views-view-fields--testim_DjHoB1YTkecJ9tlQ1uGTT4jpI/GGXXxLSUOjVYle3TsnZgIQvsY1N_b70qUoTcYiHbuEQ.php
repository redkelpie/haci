<?php

/* themes/gavias_charityplus/templates/views/testimonial/views-view-fields--testimonial-v1.html.twig */
class __TwigTemplate_47a3108d6daf1dbeb71e4ff571d9d13d83e4e3f69bf1ea697681d63685dccc09 extends Twig_Template
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
        $tags = array();
        $filters = array("trim" => 5, "striptags" => 5);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('trim', 'striptags'),
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
        echo "<article class=\"testimonial-node-v1\">      
   <div class=\"testimonial-content\">
      <div class=\"content\">
         <div class=\"content-inner\">
            <div class=\"quote\">";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, trim(strip_tags($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()))), "html", null, true));
        echo "</div>  
            <div class=\"info clearfix\">
               <div class=\"title\">";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_testimonial_name", array()), "content", array()), "html", null, true));
        echo "</div>  
               <div class=\"job\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_testimonial_job", array()), "content", array()), "html", null, true));
        echo "</div>   
            </div> 
         </div>    
      </div>
   </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/views/testimonial/views-view-fields--testimonial-v1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSource()
    {
        return "<article class=\"testimonial-node-v1\">      
   <div class=\"testimonial-content\">
      <div class=\"content\">
         <div class=\"content-inner\">
            <div class=\"quote\">{{ fields.body.content|striptags|trim }}</div>  
            <div class=\"info clearfix\">
               <div class=\"title\">{{ fields.field_testimonial_name.content }}</div>  
               <div class=\"job\">{{ fields.field_testimonial_job.content }}</div>   
            </div> 
         </div>    
      </div>
   </div>
</article>
";
    }
}
