<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_617774e86afce84188e630fa464cf1939221931c4335c633fed8696b25a9448a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ffdf5d8dc073daf8ea40c07f6297b05446731b0cbbadfeb6f0ca9793f787269 = $this->env->getExtension("native_profiler");
        $__internal_8ffdf5d8dc073daf8ea40c07f6297b05446731b0cbbadfeb6f0ca9793f787269->enter($__internal_8ffdf5d8dc073daf8ea40c07f6297b05446731b0cbbadfeb6f0ca9793f787269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ffdf5d8dc073daf8ea40c07f6297b05446731b0cbbadfeb6f0ca9793f787269->leave($__internal_8ffdf5d8dc073daf8ea40c07f6297b05446731b0cbbadfeb6f0ca9793f787269_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_021ced80f79c6599e4bb34ebc18331dce7a97258a4319e1ae5aa11664e5f7d57 = $this->env->getExtension("native_profiler");
        $__internal_021ced80f79c6599e4bb34ebc18331dce7a97258a4319e1ae5aa11664e5f7d57->enter($__internal_021ced80f79c6599e4bb34ebc18331dce7a97258a4319e1ae5aa11664e5f7d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    
    <!-- Formulario de inicio de sesión
    ============================================= -->
    <section id=\"content\">
       
        <div class=\"content-wrap\">            
            <div class=\"container clearfix divcenter\" style=\"max-width: 550px;\">                
                <div class=\"fancy-title title-bottom-border title-center\">
                    <h2><i class=\"icon-unlock\"></i>  Inicia sesión en tu cuenta</h2>
\t\t</div>
                ";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "                    <div class=\"style-msg errormsg\">
                        <div class=\"sb-msg\"><i class=\"icon-remove\"></i>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    </div>
                ";
        }
        // line 21
        echo "
                <form id=\"login-form\" name=\"login-form\" class=\"nobottommargin\" action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    <div class=\"col_2\"> <!-- Nombre de usuario -->                                                          
                        <label for=\"username\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" />
                    </div>

                    <div class=\"col_full\"> <!-- Contraseña -->   
                        <label for=\"password\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
                    </div>
                    <div class=\"col_full\"> <!-- Casilla de 'Recuérdame' -->   
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        <label for=\"remember_me\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"col_full nobottommargin\"> <!-- Botón de envío -->   
                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"button button-rounded button-large button-lime nomargin\" />
                        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"fright\">¿Olvidó su contraseña?</a>
                    </div>
                </form>                 \t\t\t\t\t\t
            </div>
        </div>    
    </section><!-- #content end -->
    


";
        
        $__internal_021ced80f79c6599e4bb34ebc18331dce7a97258a4319e1ae5aa11664e5f7d57->leave($__internal_021ced80f79c6599e4bb34ebc18331dce7a97258a4319e1ae5aa11664e5f7d57_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  100 => 38,  94 => 35,  86 => 30,  79 => 26,  75 => 25,  70 => 23,  66 => 22,  63 => 21,  57 => 18,  54 => 17,  52 => 16,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     */
/*     <!-- Formulario de inicio de sesión*/
/*     ============================================= -->*/
/*     <section id="content">*/
/*        */
/*         <div class="content-wrap">            */
/*             <div class="container clearfix divcenter" style="max-width: 550px;">                */
/*                 <div class="fancy-title title-bottom-border title-center">*/
/*                     <h2><i class="icon-unlock"></i>  Inicia sesión en tu cuenta</h2>*/
/* 		</div>*/
/*                 {% if error %}*/
/*                     <div class="style-msg errormsg">*/
/*                         <div class="sb-msg"><i class="icon-remove"></i>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <form id="login-form" name="login-form" class="nobottommargin" action="{{ path("fos_user_security_check") }}" method="post">*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                     <div class="col_2"> <!-- Nombre de usuario -->                                                          */
/*                         <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                         <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-control" />*/
/*                     </div>*/
/* */
/*                     <div class="col_full"> <!-- Contraseña -->   */
/*                         <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                         <input type="password" id="password" name="_password" required="required" class="form-control" />*/
/*                     </div>*/
/*                     <div class="col_full"> <!-- Casilla de 'Recuérdame' -->   */
/*                         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                         <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                     </div>*/
/*                     <div class="col_full nobottommargin"> <!-- Botón de envío -->   */
/*                         <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="button button-rounded button-large button-lime nomargin" />*/
/*                         <a href="{{ path('fos_user_resetting_request') }}" class="fright">¿Olvidó su contraseña?</a>*/
/*                     </div>*/
/*                 </form>                 						*/
/*             </div>*/
/*         </div>    */
/*     </section><!-- #content end -->*/
/*     */
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
