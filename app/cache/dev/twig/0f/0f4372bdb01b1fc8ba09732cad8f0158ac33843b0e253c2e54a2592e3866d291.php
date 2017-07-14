<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_e64cf8c4fbb6e0276a9439579ba0c773f3201f885b87403159e807a015ff6584 extends Twig_Template
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
        $__internal_fd2086c2ec4f5db05f1e6f13ffa3b6b46c20d5b883a412b12a48243d9750e70e = $this->env->getExtension("native_profiler");
        $__internal_fd2086c2ec4f5db05f1e6f13ffa3b6b46c20d5b883a412b12a48243d9750e70e->enter($__internal_fd2086c2ec4f5db05f1e6f13ffa3b6b46c20d5b883a412b12a48243d9750e70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "

<section id=\"content\">
       
        <div class=\"content-wrap\">            
            <div class=\"container clearfix divcenter col_full\" style=\"max-width: 550px;\">                
                <div class=\"fancy-title title-bottom-border title-center\">
                    <h2><i class=\"icon-question-sign\"></i>  ¿Olvidó su contraseña?</h2>
\t\t</div>
                ";
        // line 11
        if (array_key_exists("invalid_username", $context)) {
            // line 12
            echo "                <div class=\"alert alert-danger fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                    <strong>Error</strong> ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "
                </div>
                ";
        }
        // line 17
        echo "                <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                    <div class=\"form-group\">
                        <label class=\"control-label\" for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                   
                        <input class=\"form-control\" id=\"username\" name=\"username\" required=\"required\" type=\"text\" />
                        
                    </div>
                    <div class=\"form-group\">
                        <button class=\"btn btn-primary btn-success btn-block\"type=\"submit\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                    </div>
                </form>
    
             </div>
        </div>
    </section>

";
        
        $__internal_fd2086c2ec4f5db05f1e6f13ffa3b6b46c20d5b883a412b12a48243d9750e70e->leave($__internal_fd2086c2ec4f5db05f1e6f13ffa3b6b46c20d5b883a412b12a48243d9750e70e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 25,  51 => 19,  45 => 17,  39 => 14,  35 => 12,  33 => 11,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* <section id="content">*/
/*        */
/*         <div class="content-wrap">            */
/*             <div class="container clearfix divcenter col_full" style="max-width: 550px;">                */
/*                 <div class="fancy-title title-bottom-border title-center">*/
/*                     <h2><i class="icon-question-sign"></i>  ¿Olvidó su contraseña?</h2>*/
/* 		</div>*/
/*                 {% if invalid_username is defined %}*/
/*                 <div class="alert alert-danger fade in">*/
/*                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                     <strong>Error</strong> {{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*                     <div class="form-group">*/
/*                         <label class="control-label" for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*                    */
/*                         <input class="form-control" id="username" name="username" required="required" type="text" />*/
/*                         */
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <button class="btn btn-primary btn-success btn-block"type="submit">{{ 'resetting.request.submit'|trans }}</button>*/
/*                     </div>*/
/*                 </form>*/
/*     */
/*              </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* {#<form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*     <div>*/
/*         {% if invalid_username is defined %}*/
/*             <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>*/
/*         {% endif %}*/
/*         <label for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*         <input type="text" id="username" name="username" required="required" />*/
/*     </div>*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.request.submit'|trans }}" />*/
/*     </div>*/
/* </form>#}*/
/* */
