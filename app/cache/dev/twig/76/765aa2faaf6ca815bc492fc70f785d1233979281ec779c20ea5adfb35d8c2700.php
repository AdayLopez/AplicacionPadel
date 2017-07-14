<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_60a67f5ae1ef506555c4044cb6746197cc3c4df52454c62ca12b17a6a15f517f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_254674fcf82b86001178dde46bcaedff31976c937b4441db2217e78deed76666 = $this->env->getExtension("native_profiler");
        $__internal_254674fcf82b86001178dde46bcaedff31976c937b4441db2217e78deed76666->enter($__internal_254674fcf82b86001178dde46bcaedff31976c937b4441db2217e78deed76666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254674fcf82b86001178dde46bcaedff31976c937b4441db2217e78deed76666->leave($__internal_254674fcf82b86001178dde46bcaedff31976c937b4441db2217e78deed76666_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ede8e9cb7a69744cc66c65bee233d1bad112c7a9596bfc8bc365f73f83ff4cca = $this->env->getExtension("native_profiler");
        $__internal_ede8e9cb7a69744cc66c65bee233d1bad112c7a9596bfc8bc365f73f83ff4cca->enter($__internal_ede8e9cb7a69744cc66c65bee233d1bad112c7a9596bfc8bc365f73f83ff4cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <section id=\"content\">
        <div class=\"content-wrap\">
            <div class=\"container clearfix\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-9\">
                        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getWebFotoPerfilRuta", array(), "method")), "html", null, true);
        echo "\" class=\"alignleft img-circle img-thumbnail notopmargin nobottommargin\" alt=\"Avatar\" style=\"max-width: 84px;\">
                        <div class=\"heading-block noborder\">
                            <h3>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h3>
                            <span>";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre", array()) . " ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "apellidos", array())), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"clear\"></div>
                        <div class=\"row clearfix\">
                            <div class=\"col-md-12\">
                                <div class=\"tabs tabs-alt clearfix\" id=\"tabs-profile\">
                                    <ul class=\"tab-nav clearfix\">
                                        <li><a href=\"#tab-info\"><i class=\"icon-rss2\"></i> Información </a></li>
                                        <li><a href=\"#tab-creadas\"><i class=\"icon-pencil2\"></i> Competiciones creadas</a></li>
                                        <li><a href=\"#tab-inscrito\"><i class=\"icon-pencil2\"></i> Competiciones inscrito</a></li>

                                    </ul>
                                    <div class=\"tab-container\">
                                        <div class=\"tab-content clearfix\" id=\"tab-info\">
                                            ";
        // line 26
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 26)->display($context);
        // line 27
        echo "                                        </div>
                                        ";
        // line 28
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PadelScheduleMainBundle:Main:competicionesDeUsuario", array("idUsuario" => $this->getAttribute(        // line 30
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getId", array(), "method"))));
        // line 31
        echo "

                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 39
        echo "                    <div class=\"line visible-xs-block\"></div>
                    <div class=\"col-sm-3 clearfix\">
                        <div class=\"list-group\">
                            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("buzon");
        echo "\" class=\"list-group-item clearfix\">
                                ";
        // line 43
        $context["mensajesNoLeidos"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getMensajesNoLeidos", array(), "method");
        // line 44
        echo "                                ";
        if ((isset($context["mensajesNoLeidos"]) ? $context["mensajesNoLeidos"] : $this->getContext($context, "mensajesNoLeidos"))) {
            // line 45
            echo "                                    <span class=\"label label-success\">!";
            echo twig_escape_filter($this->env, (isset($context["mensajesNoLeidos"]) ? $context["mensajesNoLeidos"] : $this->getContext($context, "mensajesNoLeidos")), "html", null, true);
            echo "</span>
                                ";
        }
        // line 46
        echo "                                
                                Mensajes <i class=\"icon-envelope2 pull-right\"></i></a>
                            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("listadoNotificaciones");
        echo "\" class=\"list-group-item clearfix\">
                                ";
        // line 49
        $context["notificacionesNoVistas"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getNotificacionesNoVistas", array(), "method");
        // line 50
        echo "                                ";
        if ((isset($context["notificacionesNoVistas"]) ? $context["notificacionesNoVistas"] : $this->getContext($context, "notificacionesNoVistas"))) {
            // line 51
            echo "                                    <span class=\"label label-success\">!";
            echo twig_escape_filter($this->env, (isset($context["notificacionesNoVistas"]) ? $context["notificacionesNoVistas"] : $this->getContext($context, "notificacionesNoVistas")), "html", null, true);
            echo "</span>
                                ";
        }
        // line 53
        echo "                                Notificaciones <i class=\"icon-credit-cards pull-right\"></i></a>
                            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"list-group-item clearfix\">Editar perfil <i class=\"icon-cog pull-right\"></i></a>
                            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"list-group-item clearfix\">Cerrar sesión <i class=\"icon-line2-logout pull-right\"></i></a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section><!-- #content end -->
";
        
        $__internal_ede8e9cb7a69744cc66c65bee233d1bad112c7a9596bfc8bc365f73f83ff4cca->leave($__internal_ede8e9cb7a69744cc66c65bee233d1bad112c7a9596bfc8bc365f73f83ff4cca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 55,  132 => 54,  129 => 53,  123 => 51,  120 => 50,  118 => 49,  114 => 48,  110 => 46,  104 => 45,  101 => 44,  99 => 43,  95 => 42,  90 => 39,  81 => 31,  79 => 30,  78 => 28,  75 => 27,  73 => 26,  56 => 12,  52 => 11,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <section id="content">*/
/*         <div class="content-wrap">*/
/*             <div class="container clearfix">*/
/*                 <div class="row clearfix">*/
/*                     <div class="col-sm-9">*/
/*                         <img src="{{   asset(user.getWebFotoPerfilRuta()) }}" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">*/
/*                         <div class="heading-block noborder">*/
/*                             <h3>{{ user.username }}</h3>*/
/*                             <span>{{ user.nombre ~ " " ~ user.apellidos }}</span>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                         <div class="row clearfix">*/
/*                             <div class="col-md-12">*/
/*                                 <div class="tabs tabs-alt clearfix" id="tabs-profile">*/
/*                                     <ul class="tab-nav clearfix">*/
/*                                         <li><a href="#tab-info"><i class="icon-rss2"></i> Información </a></li>*/
/*                                         <li><a href="#tab-creadas"><i class="icon-pencil2"></i> Competiciones creadas</a></li>*/
/*                                         <li><a href="#tab-inscrito"><i class="icon-pencil2"></i> Competiciones inscrito</a></li>*/
/* */
/*                                     </ul>*/
/*                                     <div class="tab-container">*/
/*                                         <div class="tab-content clearfix" id="tab-info">*/
/*                                             {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/*                                         </div>*/
/*                                         {{ render(controller(*/
/*                                             "PadelScheduleMainBundle:Main:competicionesDeUsuario",*/
/*                                             { 'idUsuario': user.getId() }*/
/*                                         )) }}*/
/* */
/*                                     </div>   */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {#                </div>#}*/
/*                     <div class="line visible-xs-block"></div>*/
/*                     <div class="col-sm-3 clearfix">*/
/*                         <div class="list-group">*/
/*                             <a href="{{path('buzon')}}" class="list-group-item clearfix">*/
/*                                 {% set mensajesNoLeidos = app.user.getMensajesNoLeidos() %}*/
/*                                 {% if mensajesNoLeidos %}*/
/*                                     <span class="label label-success">!{{mensajesNoLeidos}}</span>*/
/*                                 {% endif %}                                */
/*                                 Mensajes <i class="icon-envelope2 pull-right"></i></a>*/
/*                             <a href="{{ path('listadoNotificaciones') }}" class="list-group-item clearfix">*/
/*                                 {% set notificacionesNoVistas = app.user.getNotificacionesNoVistas() %}*/
/*                                 {% if notificacionesNoVistas %}*/
/*                                     <span class="label label-success">!{{notificacionesNoVistas}}</span>*/
/*                                 {% endif %}*/
/*                                 Notificaciones <i class="icon-credit-cards pull-right"></i></a>*/
/*                             <a href="{{ path('fos_user_profile_edit') }}" class="list-group-item clearfix">Editar perfil <i class="icon-cog pull-right"></i></a>*/
/*                             <a href="{{ path('fos_user_security_logout') }}" class="list-group-item clearfix">Cerrar sesión <i class="icon-line2-logout pull-right"></i></a>*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </section><!-- #content end -->*/
/* {% endblock fos_user_content %}*/
/* */
