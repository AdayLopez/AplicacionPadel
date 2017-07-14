<?php

/* PadelScheduleMainBundle:Main:verPerfil.html.twig */
class __TwigTemplate_dc8a6c8f19ca2f670ec2c1367aba6f6ffd00ecae71bfba7e62c8e93d5a577bbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Main:verPerfil.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34c741dba15298a35f4c36d6a41fa6f40377e850f1409486c1600e573d5d987a = $this->env->getExtension("native_profiler");
        $__internal_34c741dba15298a35f4c36d6a41fa6f40377e850f1409486c1600e573d5d987a->enter($__internal_34c741dba15298a35f4c36d6a41fa6f40377e850f1409486c1600e573d5d987a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Main:verPerfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34c741dba15298a35f4c36d6a41fa6f40377e850f1409486c1600e573d5d987a->leave($__internal_34c741dba15298a35f4c36d6a41fa6f40377e850f1409486c1600e573d5d987a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4eb9128c49b626efc9d5b8a4e6197f0d2d6b124090f42798308ca3de9b7a274b = $this->env->getExtension("native_profiler");
        $__internal_4eb9128c49b626efc9d5b8a4e6197f0d2d6b124090f42798308ca3de9b7a274b->enter($__internal_4eb9128c49b626efc9d5b8a4e6197f0d2d6b124090f42798308ca3de9b7a274b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <section id=\"content\">
        <div class=\"content-wrap\">
            <div class=\"container clearfix\">
                <div class=\"row clearfix\">
                    <div>
                        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getWebFotoPerfilRuta", array(), "method")), "html", null, true);
        echo "\" class=\"alignleft img-circle img-thumbnail notopmargin nobottommargin\" alt=\"Avatar\" style=\"max-width: 84px;\">
                        <div class=\"heading-block noborder\">
                            <h3>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "</h3>
                            <span>";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()) . " ") . $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellidos", array())), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"clear\"></div>
                        <div class=\"row clearfix\">
                            <div>
                                <div class=\"tabs tabs-alt clearfix\" id=\"tabs-profile\">
                                    <ul class=\"tab-nav clearfix\">
                                        <li><a href=\"#tab-info\"><i class=\"icon-rss2\"></i> Información </a></li>
                                        <li><a href=\"#tab-creadas\"><i class=\"icon-pencil2\"></i> Competiciones creadas</a></li>
                                        <li><a href=\"#tab-inscrito\"><i class=\"icon-pencil2\"></i> Competiciones en las que juega</a></li>
                                    </ul>
                                    <div class=\"tab-container\">
                                        <div class=\"tab-content clearfix\" id=\"tab-info\">
                                            <p><b>Nombre de usuario:</b> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "</p>
                                            <p><b>Email:</b> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email", array()), "html", null, true);
        echo "</p>
                                            <p><b>Nombre:</b> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</p>
                                            <p><b>Apellidos:</b> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellidos", array()), "html", null, true);
        echo "</p>
                                            <p><b>Fecha de nacimiento:</b> ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "fechaNacimiento", array()), "d/m/Y"), "html", null, true);
        echo "</p>
                                            <p><b>Teléfono:</b> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "telefono", array()), "html", null, true);
        echo "</p>
                                        </div>
                                        ";
        // line 32
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PadelScheduleMainBundle:Main:competicionesDeUsuario", array("idUsuario" => $this->getAttribute(        // line 34
(isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getId", array(), "method"))));
        // line 35
        echo "
                                        
                                        ";
        // line 100
        echo "                                     
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"line visible-xs-block\"></div>


            </div>

        </div>

    </div>

</section><!-- #content end -->    
";
        
        $__internal_4eb9128c49b626efc9d5b8a4e6197f0d2d6b124090f42798308ca3de9b7a274b->leave($__internal_4eb9128c49b626efc9d5b8a4e6197f0d2d6b124090f42798308ca3de9b7a274b_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Main:verPerfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 100,  100 => 35,  98 => 34,  97 => 32,  92 => 30,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  56 => 12,  52 => 11,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <section id="content">*/
/*         <div class="content-wrap">*/
/*             <div class="container clearfix">*/
/*                 <div class="row clearfix">*/
/*                     <div>*/
/*                         <img src="{{   asset(usuario.getWebFotoPerfilRuta()) }}" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">*/
/*                         <div class="heading-block noborder">*/
/*                             <h3>{{ usuario.username }}</h3>*/
/*                             <span>{{ usuario.nombre ~ " " ~ usuario.apellidos }}</span>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                         <div class="row clearfix">*/
/*                             <div>*/
/*                                 <div class="tabs tabs-alt clearfix" id="tabs-profile">*/
/*                                     <ul class="tab-nav clearfix">*/
/*                                         <li><a href="#tab-info"><i class="icon-rss2"></i> Información </a></li>*/
/*                                         <li><a href="#tab-creadas"><i class="icon-pencil2"></i> Competiciones creadas</a></li>*/
/*                                         <li><a href="#tab-inscrito"><i class="icon-pencil2"></i> Competiciones en las que juega</a></li>*/
/*                                     </ul>*/
/*                                     <div class="tab-container">*/
/*                                         <div class="tab-content clearfix" id="tab-info">*/
/*                                             <p><b>Nombre de usuario:</b> {{ usuario.username}}</p>*/
/*                                             <p><b>Email:</b> {{ usuario.email}}</p>*/
/*                                             <p><b>Nombre:</b> {{ usuario.nombre}}</p>*/
/*                                             <p><b>Apellidos:</b> {{ usuario.apellidos}}</p>*/
/*                                             <p><b>Fecha de nacimiento:</b> {{ usuario.fechaNacimiento | date('d/m/Y')}}</p>*/
/*                                             <p><b>Teléfono:</b> {{ usuario.telefono}}</p>*/
/*                                         </div>*/
/*                                         {{ render(controller(*/
/*                                             "PadelScheduleMainBundle:Main:competicionesDeUsuario",*/
/*                                             { 'idUsuario': usuario.getId() }*/
/*                                         )) }}*/
/*                                         */
/*                                         {#<div class="tab-content clearfix" id="tab-creadas">*/
/*                                             <div id="posts" class="events small-thumbs">*/
/*                                                 {% for competicion in competicionesCreadas %}*/
/*                                                     <div class="entry clearfix">*/
/*                                                         <div class="entry-image">*/
/*                                                             <a href="#">*/
/*                                                                 <img src="{{asset('bundles/padelschedulemain/images/default.png')}}" alt="Inventore voluptates velit totam ipsa tenetur">*/
/*                                                                 <div class="entry-date">{{competicion.fechaInicio|date("d")}}<span>{{competicion.fechaInicio|date("M")}}</span></div>                            */
/*                                                             </a>*/
/*                                                         </div>*/
/*                                                         <div class="entry-c">*/
/*                                                             <div class="entry-title">*/
/*                                                                 <h2><a href="#">{{ competicion.nombre }}</a></h2>*/
/*                                                             </div>*/
/*                                                             <ul class="entry-meta clearfix">*/
/*                                                                 {%if competicion.estado == "Cerrada" %}*/
/*                                                                     <li><span class="label label-danger">{{ competicion.estado }}</span></li>*/
/*                                                                     {% else %}*/
/*                                                                     <li><span class="label label-success">{{ competicion.estado }}</span></li>*/
/*                                                                     {% endif %}*/
/*                                                                 <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>*/
/*                                                                 <li><a href="#"><i class="icon-map-marker2"></i> Lorem Ipsum </a></li>*/
/*                                                             </ul>*/
/*                                                             <div class="entry-content">*/
/*                                                                 <p>{{ competicion.descripcion }}</p>*/
/*                                                                 <a href= "{{ path('competicion', {'idCompeticion': competicion.id }) }}" class="btn btn-danger">Acceder</a>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endfor %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="tab-content clearfix" id="tab-inscrito">*/
/*                                             <div id="posts" class="events small-thumbs">*/
/*                                                 {% for competicion in competicionesInscrito %}*/
/*                                                     <div class="entry clearfix">*/
/*                                                         <div class="entry-image">*/
/*                                                             <a href="#">*/
/*                                                                 <img src="{{asset('bundles/padelschedulemain/images/default.png')}}" alt="Inventore voluptates velit totam ipsa tenetur">*/
/*                                                                 <div class="entry-date">{{competicion.fechaInicio|date("d")}}<span>{{competicion.fechaInicio|date("M")}}</span></div>                            */
/*                                                             </a>*/
/*                                                         </div>*/
/*                                                         <div class="entry-c">*/
/*                                                             <div class="entry-title">*/
/*                                                                 <h2><a href="#">{{ competicion.nombre }}</a></h2>*/
/*                                                             </div>*/
/*                                                             <ul class="entry-meta clearfix">*/
/*                                                                 {%if competicion.estado == "Cerrada" %}*/
/*                                                                     <li><span class="label label-danger">{{ competicion.estado }}</span></li>*/
/*                                                                     {% else %}*/
/*                                                                     <li><span class="label label-success">{{ competicion.estado }}</span></li>*/
/*                                                                     {% endif %}*/
/*                                                                 <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>*/
/*                                                                 <li><a href="#"><i class="icon-map-marker2"></i> Lorem Ipsum </a></li>*/
/*                                                             </ul>*/
/*                                                             <div class="entry-content">*/
/*                                                                 <p>{{ competicion.descripcion }}</p>*/
/*                                                                 <a href= "{{ path('competicion', {'idCompeticion': competicion.id }) }}" class="btn btn-danger">Acceder</a>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endfor %}*/
/*                                             </div>*/
/*                                         </div>  #}                                     */
/*                                     </div>   */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="line visible-xs-block"></div>*/
/* */
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </section><!-- #content end -->    */
/* {% endblock content %}*/
