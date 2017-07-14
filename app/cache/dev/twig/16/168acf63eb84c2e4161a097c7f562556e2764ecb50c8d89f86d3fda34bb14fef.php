<?php

/* PadelScheduleMainBundle:Competitions:verPartido.html.twig */
class __TwigTemplate_90c2c8405d52a5123aa2b36431e42419a4384669f72e891c27ad1a9bdd71b849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Competitions:verPartido.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'scripts' => array($this, 'block_scripts'),
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
        $__internal_ab4742672cc5b2f4ef42c70b46e0520b466562349794ebe5ef49edc28bd1b47b = $this->env->getExtension("native_profiler");
        $__internal_ab4742672cc5b2f4ef42c70b46e0520b466562349794ebe5ef49edc28bd1b47b->enter($__internal_ab4742672cc5b2f4ef42c70b46e0520b466562349794ebe5ef49edc28bd1b47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:verPartido.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab4742672cc5b2f4ef42c70b46e0520b466562349794ebe5ef49edc28bd1b47b->leave($__internal_ab4742672cc5b2f4ef42c70b46e0520b466562349794ebe5ef49edc28bd1b47b_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_b9882fc889c2e9f393410c0eea84599f27459dc5ee37f2a04d810a73ff47042f = $this->env->getExtension("native_profiler");
        $__internal_b9882fc889c2e9f393410c0eea84599f27459dc5ee37f2a04d810a73ff47042f->enter($__internal_b9882fc889c2e9f393410c0eea84599f27459dc5ee37f2a04d810a73ff47042f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        echo "    
    <!-- Bootstrap select style -->    
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/bs-select.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/bs-switches.css"), "html", null, true);
        echo "\"/>    
    <link rel=\"stylesheet\" href=\"css/components/radio-checkbox.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/responsive.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_b9882fc889c2e9f393410c0eea84599f27459dc5ee37f2a04d810a73ff47042f->leave($__internal_b9882fc889c2e9f393410c0eea84599f27459dc5ee37f2a04d810a73ff47042f_prof);

    }

    // line 11
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_0a87fd88a223fbecd261678dd77dfe9276e6a4f1607882b7427ebf38fcee2e1f = $this->env->getExtension("native_profiler");
        $__internal_0a87fd88a223fbecd261678dd77dfe9276e6a4f1607882b7427ebf38fcee2e1f->enter($__internal_0a87fd88a223fbecd261678dd77dfe9276e6a4f1607882b7427ebf38fcee2e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo "         
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/bs-select.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/bs-switches.js"), "html", null, true);
        echo "\"></script>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
";
        
        $__internal_0a87fd88a223fbecd261678dd77dfe9276e6a4f1607882b7427ebf38fcee2e1f->leave($__internal_0a87fd88a223fbecd261678dd77dfe9276e6a4f1607882b7427ebf38fcee2e1f_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_af0635934ece9c2837787dc5045c5198f8add9ac1d24c9874b9a80755d98b9f4 = $this->env->getExtension("native_profiler");
        $__internal_af0635934ece9c2837787dc5045c5198f8add9ac1d24c9874b9a80755d98b9f4->enter($__internal_af0635934ece9c2837787dc5045c5198f8add9ac1d24c9874b9a80755d98b9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partido";
        
        $__internal_af0635934ece9c2837787dc5045c5198f8add9ac1d24c9874b9a80755d98b9f4->leave($__internal_af0635934ece9c2837787dc5045c5198f8add9ac1d24c9874b9a80755d98b9f4_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_0a248425628a41d35151bc9cb44fc6c83e4f4f2b3146bd307c0905e2940059e9 = $this->env->getExtension("native_profiler");
        $__internal_0a248425628a41d35151bc9cb44fc6c83e4f4f2b3146bd307c0905e2940059e9->enter($__internal_0a248425628a41d35151bc9cb44fc6c83e4f4f2b3146bd307c0905e2940059e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
    <div class=\"content-wrap\">
        <div class=\"feature-box fbox-center fbox-plain\">
            <div class=\"fbox-icon\">
                <i class=\"icon-trophy\"></i>
            </div>
            <h3>Asignación de resultados del partido</h3>
            <p>
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "inscripcion1", array()), "jugador", array()), "username", array()), "html", null, true);
        echo " y ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "inscripcion1", array()), "nombrePareja", array()), "html", null, true);
        echo " vs ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "inscripcion2", array()), "jugador", array()), "username", array()), "html", null, true);
        echo " y ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "inscripcion2", array()), "nombrePareja", array()), "html", null, true);
        echo "
            </p>
        </div>
        <div class=\"container\"  style=\"width:30%\">       
            ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "inline-block formCalendario")));
        echo "
            <table class=\"table-striped table-bordered text-center\"  style=\"width:100%\">
                <thead>
                    <tr>
                        <th colspan=\"2\">Set 1 </th>
                        <th colspan=\"2\">Set 2</th>\t\t\t\t\t\t\t\t
";
        // line 39
        echo "                        <th colspan=\"2\">Set 3</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resultados", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["resultado"]) {
            // line 45
            echo "                            <td>                             
                                ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["resultado"], 'widget', array("attr" => array("class" => ("selectpicker resultado" . $this->getAttribute($context["loop"], "index", array())), "data-style" => "btn-success", "data-width" => "fit")));
            echo "
                            </td>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </tr>
                </tbody>
            </table>   
            
            
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "send", array()), 'widget', array("attr" => array("class" => "button button-3d button-small button-rounded button-lime"), "label" => "Guardar resultado"));
        echo "    
            ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    
        </div>
    </div>
    <script>

";
        // line 62
        echo "
        \$(function () {
          \$('.resultado5, .resultado6').prop('disabled', true);
            
            ";
        // line 74
        echo "            \$('.selectpicker').on('change', function(){
                var resultado1 = \$('.resultado1').find(\"option:selected\").val();
                var resultado2 = \$('.resultado2').find(\"option:selected\").val();
                var resultado3 = \$('.resultado3').find(\"option:selected\").val();
                var resultado4 = \$('.resultado4').find(\"option:selected\").val();
                if(((resultado1 < resultado2) && (resultado3 > resultado4))
                        || ((resultado1 > resultado2) && (resultado3 < resultado4))){
                    
                    \$('.resultado5, .resultado6').prop('disabled', false);    
                }else{
                    \$('.resultado5, .resultado6').prop('disabled', true);
                    \$('.resultado5, .resultado6').find(\"option:selected\").val(0);
                    
                }
                \$('.selectpicker').selectpicker('refresh');
            });
                        
        });

    </script>



";
        
        $__internal_0a248425628a41d35151bc9cb44fc6c83e4f4f2b3146bd307c0905e2940059e9->leave($__internal_0a248425628a41d35151bc9cb44fc6c83e4f4f2b3146bd307c0905e2940059e9_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:verPartido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 74,  199 => 62,  190 => 55,  186 => 54,  179 => 49,  162 => 46,  159 => 45,  142 => 44,  135 => 39,  126 => 32,  113 => 28,  98 => 20,  86 => 18,  76 => 13,  72 => 12,  64 => 11,  55 => 8,  50 => 6,  46 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block css %}    */
/*     <!-- Bootstrap select style -->    */
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/bs-select.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/bs-switches.css')}}"/>    */
/*     <link rel="stylesheet" href="css/components/radio-checkbox.css" type="text/css" />*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/responsive.css')}}"/>*/
/* {% endblock css %}*/
/* */
/* {% block scripts %}         */
/*     <script src="{{asset('bundles/padelschedulemain/js/components/bs-select.js')}}"></script>*/
/*     <script src="{{asset('bundles/padelschedulemain/js/components/bs-switches.js')}}"></script>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />*/
/* {% endblock %}*/
/* */
/* */
/* {% block title %}Partido{% endblock %}*/
/* */
/* {% block content %} */
/*     <div class="content-wrap">*/
/*         <div class="feature-box fbox-center fbox-plain">*/
/*             <div class="fbox-icon">*/
/*                 <i class="icon-trophy"></i>*/
/*             </div>*/
/*             <h3>Asignación de resultados del partido</h3>*/
/*             <p>*/
/*                 {{ partido.inscripcion1.jugador.username }} y {{ partido.inscripcion1.nombrePareja}} vs {{ partido.inscripcion2.jugador.username }} y {{ partido.inscripcion2.nombrePareja}}*/
/*             </p>*/
/*         </div>*/
/*         <div class="container"  style="width:30%">       */
/*             {{ form_start(form, {'attr': {'class': 'inline-block formCalendario'}}) }}*/
/*             <table class="table-striped table-bordered text-center"  style="width:100%">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th colspan="2">Set 1 </th>*/
/*                         <th colspan="2">Set 2</th>								*/
/* {#                        <th colspan="2">Set 3 <div class="pull-right set3Activator"><input class="set3 bt-switch" type="checkbox" checked data-on-text="<i class='icon-unlock'></i>" data-off-text="<i class='icon-lock3'></i>"  data-size="mini" data-off-color="warning" data-on-color="success"></div></th>	#}*/
/*                         <th colspan="2">Set 3</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         {% for resultado in form.resultados %}*/
/*                             <td>                             */
/*                                 {{ form_widget(resultado, {'attr': {'class': "selectpicker resultado#{loop.index}", 'data-style': 'btn-success', 'data-width': 'fit'} }) }}*/
/*                             </td>*/
/*                         {% endfor %}*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>   */
/*             */
/*             */
/*             {{ form_widget(form.send,  {'attr': {'class': 'button button-3d button-small button-rounded button-lime'}, 'label': 'Guardar resultado'}) }}    */
/*             {{ form_end(form) }}*/
/*                     */
/*         </div>*/
/*     </div>*/
/*     <script>*/
/* */
/* {#        jQuery(".bt-switch").bootstrapSwitch();#}*/
/* */
/*         $(function () {*/
/*           $('.resultado5, .resultado6').prop('disabled', true);*/
/*             */
/*             {#$('.set3').on('switchChange.bootstrapSwitch', function (event, state) {                */
/*                 if ($('.resultado5, .resultado6').prop('disabled')) {*/
/*                     $('.resultado5, .resultado6').prop('disabled', false);*/
/*                 } else {*/
/*                     $('.resultado5, .resultado6').prop('disabled', true);*/
/*                 }*/
/*                 $('.resultado5, .resultado6').selectpicker('refresh');*/
/*             });#}*/
/*             $('.selectpicker').on('change', function(){*/
/*                 var resultado1 = $('.resultado1').find("option:selected").val();*/
/*                 var resultado2 = $('.resultado2').find("option:selected").val();*/
/*                 var resultado3 = $('.resultado3').find("option:selected").val();*/
/*                 var resultado4 = $('.resultado4').find("option:selected").val();*/
/*                 if(((resultado1 < resultado2) && (resultado3 > resultado4))*/
/*                         || ((resultado1 > resultado2) && (resultado3 < resultado4))){*/
/*                     */
/*                     $('.resultado5, .resultado6').prop('disabled', false);    */
/*                 }else{*/
/*                     $('.resultado5, .resultado6').prop('disabled', true);*/
/*                     $('.resultado5, .resultado6').find("option:selected").val(0);*/
/*                     */
/*                 }*/
/*                 $('.selectpicker').selectpicker('refresh');*/
/*             });*/
/*                         */
/*         });*/
/* */
/*     </script>*/
/* */
/* */
/* */
/* {% endblock content %}*/
