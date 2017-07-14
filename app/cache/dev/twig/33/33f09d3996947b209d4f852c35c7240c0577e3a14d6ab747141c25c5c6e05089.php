<?php

/* PadelScheduleMainBundle:Main:notificacionesEntrantes.html.twig */
class __TwigTemplate_5e9e427115bebba3cc151dc5236adf0ef0c997b228918d9d6997c3d0be2ee45e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Main:notificacionesEntrantes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'scripts' => array($this, 'block_scripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51c5352602fb4a272b719958b135a4853c4e76402639d93ca8d8a2f7989de769 = $this->env->getExtension("native_profiler");
        $__internal_51c5352602fb4a272b719958b135a4853c4e76402639d93ca8d8a2f7989de769->enter($__internal_51c5352602fb4a272b719958b135a4853c4e76402639d93ca8d8a2f7989de769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Main:notificacionesEntrantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51c5352602fb4a272b719958b135a4853c4e76402639d93ca8d8a2f7989de769->leave($__internal_51c5352602fb4a272b719958b135a4853c4e76402639d93ca8d8a2f7989de769_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26d01b9d1ac2741fc5a50f1043851f07567c0d70d875712b4b6436f21b28fbb2 = $this->env->getExtension("native_profiler");
        $__internal_26d01b9d1ac2741fc5a50f1043851f07567c0d70d875712b4b6436f21b28fbb2->enter($__internal_26d01b9d1ac2741fc5a50f1043851f07567c0d70d875712b4b6436f21b28fbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Index";
        
        $__internal_26d01b9d1ac2741fc5a50f1043851f07567c0d70d875712b4b6436f21b28fbb2->leave($__internal_26d01b9d1ac2741fc5a50f1043851f07567c0d70d875712b4b6436f21b28fbb2_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_24f7f56620e012a492ce5f93efb4f1cee7f41dc8a40184e6aadb722a5b452f48 = $this->env->getExtension("native_profiler");
        $__internal_24f7f56620e012a492ce5f93efb4f1cee7f41dc8a40184e6aadb722a5b452f48->enter($__internal_24f7f56620e012a492ce5f93efb4f1cee7f41dc8a40184e6aadb722a5b452f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/bs-datatable.css"), "html", null, true);
        echo "\"  type=\"text/css\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/responsive.css"), "html", null, true);
        echo "\"  type=\"text/css\" />

    <style>
        .notificacion:hover {
            cursor: pointer;
            background-color: #CCFF99;
        }
        .notificacion.odd:hover {
            cursor: pointer;
            background-color: #CCFF99;
        }
        .col-vista {
            width: 10px;
        }

    </style>
";
        
        $__internal_24f7f56620e012a492ce5f93efb4f1cee7f41dc8a40184e6aadb722a5b452f48->leave($__internal_24f7f56620e012a492ce5f93efb4f1cee7f41dc8a40184e6aadb722a5b452f48_prof);

    }

    // line 25
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_48c5d9635ec1096124c67c77e0e2bdce5a099625476b36470f4cd9d40b75a31f = $this->env->getExtension("native_profiler");
        $__internal_48c5d9635ec1096124c67c77e0e2bdce5a099625476b36470f4cd9d40b75a31f->enter($__internal_48c5d9635ec1096124c67c77e0e2bdce5a099625476b36470f4cd9d40b75a31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " 
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/bs-datatable.js"), "html", null, true);
        echo "\"></script>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <!--[if lt IE 9]>
        <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <![endif]-->

    <script>

        \$(document).ready(function () {
            \$('#datatable1').dataTable({
                \"language\": {
                    \"url\": \"//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json\",
                    \"info\": \"Mostrando notificaciones del _START_ al _END_ de un total de _TOTAL_\"
                },
                \"order\": [[0, \"desc\"]],
                \"aoColumnDefs\": [
                    {'bSortable': false, 'aTargets': [3]}
                ]
            });

            \$('.notificacion').click(function () {
                window.location.href = Routing.generate('verNotificacion', {idNotificacion: \$(this).data(\"idnotificacion\")});
            });

        });

    </script>
";
        
        $__internal_48c5d9635ec1096124c67c77e0e2bdce5a099625476b36470f4cd9d40b75a31f->leave($__internal_48c5d9635ec1096124c67c77e0e2bdce5a099625476b36470f4cd9d40b75a31f_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_65fed78b8b913c1149a043108ccc2f74f38ad037980757a53a98d0981be5c086 = $this->env->getExtension("native_profiler");
        $__internal_65fed78b8b913c1149a043108ccc2f74f38ad037980757a53a98d0981be5c086->enter($__internal_65fed78b8b913c1149a043108ccc2f74f38ad037980757a53a98d0981be5c086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 57
        echo "
    <section id=\"page-title\">
        <div class=\"container clearfix\">
            <h1>Notificaciones entrantes</h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Principal</a></li>                            
                <li class=\"active\">Notificaciones entrantes</li>
            </ol>
        </div>
    </section>

    ";
        // line 69
        echo "
    <section id=\"content\">

        <div class=\"content-wrap notoppadding\">

            <div class=\"container clearfix\">
               ";
        // line 78
        echo "                <div class=\"table-responsive\">

                    <table id=\"datatable1\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Competicion</th>
                                <th>Cabecera</th>\t\t\t\t\t\t\t\t\t
                                <th class=\"text-center\"></th>\t\t\t\t\t\t\t\t
                                \t\t\t\t\t\t\t\t
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Fecha</th>
                                <th>Competicion</th>
                                <th>Cabecera</th>\t\t\t\t\t\t\t\t\t
                                <th class=\"text-center\"></th>\t\t\t\t\t\t
                            </tr>
                        </tfoot>
                        <tbody>
                            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notificaciones"]) ? $context["notificaciones"] : $this->getContext($context, "notificaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["notificacion"]) {
            // line 100
            echo "
                                <tr class=\"notificacion\" data-idnotificacion=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "id", array()), "html", null, true);
            echo "\">
                                    <td> ";
            // line 102
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notificacion"], "fecha", array()), "d/m/Y - H:i:s"), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["notificacion"], "competicionAsociada", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["notificacion"], "cabecera", array()), "html", null, true);
            echo " </td>
                                    <td class=\"text-center col-vista\">                                      
                                            <span class=\"icon-exclamation-sign\"></span>
                                    </td>
                                </tr>   

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

    ";
        // line 124
        echo "

    ";
        // line 133
        echo "




";
        
        $__internal_65fed78b8b913c1149a043108ccc2f74f38ad037980757a53a98d0981be5c086->leave($__internal_65fed78b8b913c1149a043108ccc2f74f38ad037980757a53a98d0981be5c086_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Main:notificacionesEntrantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 133,  227 => 124,  213 => 111,  200 => 104,  196 => 103,  192 => 102,  188 => 101,  185 => 100,  181 => 99,  158 => 78,  150 => 69,  141 => 62,  134 => 57,  128 => 56,  92 => 26,  84 => 25,  60 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Index{% endblock %}*/
/* */
/* {% block css %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/bs-datatable.css')}}"  type="text/css" /> */
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/responsive.css')}}"  type="text/css" />*/
/* */
/*     <style>*/
/*         .notificacion:hover {*/
/*             cursor: pointer;*/
/*             background-color: #CCFF99;*/
/*         }*/
/*         .notificacion.odd:hover {*/
/*             cursor: pointer;*/
/*             background-color: #CCFF99;*/
/*         }*/
/*         .col-vista {*/
/*             width: 10px;*/
/*         }*/
/* */
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block scripts %} */
/*     <script src="{{asset('bundles/padelschedulemain/js/components/bs-datatable.js')}}"></script>*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />*/
/*     <!--[if lt IE 9]>*/
/*         <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <script>*/
/* */
/*         $(document).ready(function () {*/
/*             $('#datatable1').dataTable({*/
/*                 "language": {*/
/*                     "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json",*/
/*                     "info": "Mostrando notificaciones del _START_ al _END_ de un total de _TOTAL_"*/
/*                 },*/
/*                 "order": [[0, "desc"]],*/
/*                 "aoColumnDefs": [*/
/*                     {'bSortable': false, 'aTargets': [3]}*/
/*                 ]*/
/*             });*/
/* */
/*             $('.notificacion').click(function () {*/
/*                 window.location.href = Routing.generate('verNotificacion', {idNotificacion: $(this).data("idnotificacion")});*/
/*             });*/
/* */
/*         });*/
/* */
/*     </script>*/
/* {% endblock scripts %}*/
/* */
/* {% block content %}*/
/* */
/*     <section id="page-title">*/
/*         <div class="container clearfix">*/
/*             <h1>Notificaciones entrantes</h1>*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="{{ path('home') }}">Principal</a></li>                            */
/*                 <li class="active">Notificaciones entrantes</li>*/
/*             </ol>*/
/*         </div>*/
/*     </section>*/
/* */
/*     {#    ////////#}*/
/* */
/*     <section id="content">*/
/* */
/*         <div class="content-wrap notoppadding">*/
/* */
/*             <div class="container clearfix">*/
/*                {# <div class="text-center">*/
/*                     <a href="{{ path('nuevoMensaje')}}" class="button button-3d button-small button-rounded button-lime button-light"> <i class="icon-line-outbox"></i>Nuevo mensaje</a>*/
/*                 </div>#}*/
/*                 <div class="table-responsive">*/
/* */
/*                     <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Fecha</th>*/
/*                                 <th>Competicion</th>*/
/*                                 <th>Cabecera</th>									*/
/*                                 <th class="text-center"></th>								*/
/*                                 								*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tfoot>*/
/*                             <tr>*/
/*                                 <th>Fecha</th>*/
/*                                 <th>Competicion</th>*/
/*                                 <th>Cabecera</th>									*/
/*                                 <th class="text-center"></th>						*/
/*                             </tr>*/
/*                         </tfoot>*/
/*                         <tbody>*/
/*                             {% for notificacion in notificaciones %}*/
/* */
/*                                 <tr class="notificacion" data-idnotificacion="{{notificacion.id}}">*/
/*                                     <td> {{notificacion.fecha|date('d/m/Y - H:i:s')}} </td>*/
/*                                     <td> {{notificacion.competicionAsociada.nombre }}</td>*/
/*                                     <td> {{notificacion.cabecera}} </td>*/
/*                                     <td class="text-center col-vista">                                      */
/*                                             <span class="icon-exclamation-sign"></span>*/
/*                                     </td>*/
/*                                 </tr>   */
/* */
/*                             {% endfor %}*/
/* */
/*                         </tbody>*/
/*                     </table>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </section><!-- #content end -->*/
/* */
/*     {#    /////////#}*/
/* */
/* */
/*     {# {% for mensaje in mensajes %}*/
/*      */
/*          <div>*/
/*              {{mensaje.cuerpo}}*/
/*          </div>*/
/*          */
/*      {% endfor %}#}*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock content %}*/
