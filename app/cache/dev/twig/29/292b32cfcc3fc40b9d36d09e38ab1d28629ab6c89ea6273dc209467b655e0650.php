<?php

/* PadelScheduleMainBundle:Main:verMensaje.html.twig */
class __TwigTemplate_70c58b76183aed1dec87fd5aa675bb994b6277cdbe8a2d0d2b704434d6403e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Main:verMensaje.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cbdd8cf842206a21397fe9ab695c07edc164ac44dbde2d9a66b5d593cf69bd7 = $this->env->getExtension("native_profiler");
        $__internal_8cbdd8cf842206a21397fe9ab695c07edc164ac44dbde2d9a66b5d593cf69bd7->enter($__internal_8cbdd8cf842206a21397fe9ab695c07edc164ac44dbde2d9a66b5d593cf69bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Main:verMensaje.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cbdd8cf842206a21397fe9ab695c07edc164ac44dbde2d9a66b5d593cf69bd7->leave($__internal_8cbdd8cf842206a21397fe9ab695c07edc164ac44dbde2d9a66b5d593cf69bd7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1779e3044a026637cd55acfecc71c35b066b3330c3d154a9d7a01066bdc2cac2 = $this->env->getExtension("native_profiler");
        $__internal_1779e3044a026637cd55acfecc71c35b066b3330c3d154a9d7a01066bdc2cac2->enter($__internal_1779e3044a026637cd55acfecc71c35b066b3330c3d154a9d7a01066bdc2cac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Buzon";
        
        $__internal_1779e3044a026637cd55acfecc71c35b066b3330c3d154a9d7a01066bdc2cac2->leave($__internal_1779e3044a026637cd55acfecc71c35b066b3330c3d154a9d7a01066bdc2cac2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_d6e5a53a60c4d41c1e7fd37b8021dc977e4a47b3e0d66d57c62270294b8fba4a = $this->env->getExtension("native_profiler");
        $__internal_d6e5a53a60c4d41c1e7fd37b8021dc977e4a47b3e0d66d57c62270294b8fba4a->enter($__internal_d6e5a53a60c4d41c1e7fd37b8021dc977e4a47b3e0d66d57c62270294b8fba4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <section id=\"content\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("buzon");
        echo "\" class=\"button button-3d button-small button-rounded button-lime button-light\"> <i class=\"icon-line-inbox\"></i>Volver al buzón de entrada</a>
        <div class=\"content-wrap\">
            <div class=\"container clearfix\">                
                <div class=\"feature-box fbox-large fbox-plain fbox-dark\">
                    
                        <div class=\"fbox-icon\">
                                <i class=\"icon-email\"></i>
                        </div> ";
        // line 15
        echo "                        <h3>Mensaje de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "creadorMensaje", array()), "username", array()), "html", null, true);
        echo "</h3>
                        
                        <h4>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "cabecera", array()), "html", null, true);
        echo "</h4>
                        <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "cuerpo", array()), "html", null, true);
        echo "</p>
                        <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "fecha", array()), "d/m/Y - H:i:s"), "html", null, true);
        echo "</p>
                        <div class=\"text-center\">     
                            
                            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nuevoMensaje", array("usuario" => $this->getAttribute($this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "creadorMensaje", array()), "username", array()))), "html", null, true);
        echo "\" class=\"button button-3d button-small button-rounded button-lime button-light\"> <i class=\"icon-line-reply\"></i>Responder</a>

                            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eliminarMensaje", array("idMensaje" => $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "id", array()))), "html", null, true);
        echo "\" class=\"button button-3d button-small button-rounded button-red\"> <i class=\"icon-line-circle-cross\"></i>Eliminar mensaje</a>
                        </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_d6e5a53a60c4d41c1e7fd37b8021dc977e4a47b3e0d66d57c62270294b8fba4a->leave($__internal_d6e5a53a60c4d41c1e7fd37b8021dc977e4a47b3e0d66d57c62270294b8fba4a_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Main:verMensaje.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  86 => 22,  80 => 19,  76 => 18,  72 => 17,  66 => 15,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Buzon{% endblock %}*/
/* */
/* {% block content %}*/
/*     <section id="content">*/
/*         <a href="{{ path('buzon')}}" class="button button-3d button-small button-rounded button-lime button-light"> <i class="icon-line-inbox"></i>Volver al buzón de entrada</a>*/
/*         <div class="content-wrap">*/
/*             <div class="container clearfix">                */
/*                 <div class="feature-box fbox-large fbox-plain fbox-dark">*/
/*                     */
/*                         <div class="fbox-icon">*/
/*                                 <i class="icon-email"></i>*/
/*                         </div> {#Poner link a perfil de usuario#}*/
/*                         <h3>Mensaje de {{mensaje.creadorMensaje.username}}</h3>*/
/*                         */
/*                         <h4>{{mensaje.cabecera}}</h4>*/
/*                         <p>{{mensaje.cuerpo}}</p>*/
/*                         <p>{{mensaje.fecha|date('d/m/Y - H:i:s')}}</p>*/
/*                         <div class="text-center">     */
/*                             */
/*                             <a href="{{ path('nuevoMensaje', {'usuario': mensaje.creadorMensaje.username}) }}" class="button button-3d button-small button-rounded button-lime button-light"> <i class="icon-line-reply"></i>Responder</a>*/
/* */
/*                             <a href="{{ path('eliminarMensaje', { 'idMensaje': mensaje.id }) }}" class="button button-3d button-small button-rounded button-red"> <i class="icon-line-circle-cross"></i>Eliminar mensaje</a>*/
/*                         </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock content %}*/
