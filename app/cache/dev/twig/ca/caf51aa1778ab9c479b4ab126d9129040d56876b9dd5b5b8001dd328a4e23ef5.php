<?php

/* PadelScheduleMainBundle:Main:verNotificacion.html.twig */
class __TwigTemplate_7f4935e3d7bc1a7aa7c95cd486490ed84c61b5c547deee1d379ecb337574b51e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Main:verNotificacion.html.twig", 1);
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
        $__internal_60f648e25e6a2c23b5fa053aafe412f12c98ceff92b312d8039fc812d13283d2 = $this->env->getExtension("native_profiler");
        $__internal_60f648e25e6a2c23b5fa053aafe412f12c98ceff92b312d8039fc812d13283d2->enter($__internal_60f648e25e6a2c23b5fa053aafe412f12c98ceff92b312d8039fc812d13283d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Main:verNotificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60f648e25e6a2c23b5fa053aafe412f12c98ceff92b312d8039fc812d13283d2->leave($__internal_60f648e25e6a2c23b5fa053aafe412f12c98ceff92b312d8039fc812d13283d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6afd3b4e3ae7212bf1b471b41b67b7a6541844e03e0d55d792973c38258cc8c5 = $this->env->getExtension("native_profiler");
        $__internal_6afd3b4e3ae7212bf1b471b41b67b7a6541844e03e0d55d792973c38258cc8c5->enter($__internal_6afd3b4e3ae7212bf1b471b41b67b7a6541844e03e0d55d792973c38258cc8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Notificación";
        
        $__internal_6afd3b4e3ae7212bf1b471b41b67b7a6541844e03e0d55d792973c38258cc8c5->leave($__internal_6afd3b4e3ae7212bf1b471b41b67b7a6541844e03e0d55d792973c38258cc8c5_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_960da7a3a889a123bcd8c0cf30b0fa30bcee9fa1c4388acd1a7ac79553880667 = $this->env->getExtension("native_profiler");
        $__internal_960da7a3a889a123bcd8c0cf30b0fa30bcee9fa1c4388acd1a7ac79553880667->enter($__internal_960da7a3a889a123bcd8c0cf30b0fa30bcee9fa1c4388acd1a7ac79553880667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <section id=\"content\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("listadoNotificaciones");
        echo "\" class=\"button button-3d button-small button-rounded button-lime button-light\"> <i class=\"icon-backward\"></i>Volver al listado de notificaciones</a>
        <div class=\"content-wrap\">
            <div class=\"container clearfix\">                
                <div class=\"feature-box fbox-large fbox-plain fbox-dark\">
                    
                        <div class=\"fbox-icon\">
                                <i class=\"icon-exclamation-sign\"></i>
                        </div> ";
        // line 15
        echo "                        <h3>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notificacion"]) ? $context["notificacion"] : $this->getContext($context, "notificacion")), "cabecera", array()), "html", null, true);
        echo "</h3>
                        
                       ";
        // line 18
        echo "                        <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notificacion"]) ? $context["notificacion"] : $this->getContext($context, "notificacion")), "mensaje", array()), "html", null, true);
        echo "</p>
                        <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notificacion"]) ? $context["notificacion"] : $this->getContext($context, "notificacion")), "fecha", array()), "d/m/Y - H:i:s"), "html", null, true);
        echo "</p>
                        <div class=\"text-center\">     
                            
                            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("confirmarResultado", array("idNotificacion" => $this->getAttribute((isset($context["notificacion"]) ? $context["notificacion"] : $this->getContext($context, "notificacion")), "id", array()))), "html", null, true);
        echo "\" class=\"button button-3d button-small button-rounded button-lime button-light\"> <i class=\"icon-ok-sign\"></i>Confirmar</a>

                            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fijarResultadoAlternativo", array("idNotificacion" => $this->getAttribute((isset($context["notificacion"]) ? $context["notificacion"] : $this->getContext($context, "notificacion")), "id", array()))), "html", null, true);
        echo "\" class=\"button button-3d button-small button-rounded button-red\"> <i class=\"icon-line-circle-cross\"></i>Proponer resultado alternativo</a>
                        </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_960da7a3a889a123bcd8c0cf30b0fa30bcee9fa1c4388acd1a7ac79553880667->leave($__internal_960da7a3a889a123bcd8c0cf30b0fa30bcee9fa1c4388acd1a7ac79553880667_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Main:verNotificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  83 => 22,  77 => 19,  72 => 18,  66 => 15,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Notificación{% endblock %}*/
/* */
/* {% block content %}*/
/*     <section id="content">*/
/*         <a href="{{ path('listadoNotificaciones')}}" class="button button-3d button-small button-rounded button-lime button-light"> <i class="icon-backward"></i>Volver al listado de notificaciones</a>*/
/*         <div class="content-wrap">*/
/*             <div class="container clearfix">                */
/*                 <div class="feature-box fbox-large fbox-plain fbox-dark">*/
/*                     */
/*                         <div class="fbox-icon">*/
/*                                 <i class="icon-exclamation-sign"></i>*/
/*                         </div> {#Poner link a perfil de usuario#}*/
/*                         <h3>{{notificacion.cabecera}}</h3>*/
/*                         */
/*                        {# <h4>{{notificacion.mensaje}}</h4>#}*/
/*                         <p>{{notificacion.mensaje}}</p>*/
/*                         <p>{{notificacion.fecha|date('d/m/Y - H:i:s')}}</p>*/
/*                         <div class="text-center">     */
/*                             */
/*                             <a href="{{ path('confirmarResultado', { 'idNotificacion': notificacion.id }) }}" class="button button-3d button-small button-rounded button-lime button-light"> <i class="icon-ok-sign"></i>Confirmar</a>*/
/* */
/*                             <a href="{{ path('fijarResultadoAlternativo', { 'idNotificacion': notificacion.id }) }}" class="button button-3d button-small button-rounded button-red"> <i class="icon-line-circle-cross"></i>Proponer resultado alternativo</a>*/
/*                         </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock content %}*/
