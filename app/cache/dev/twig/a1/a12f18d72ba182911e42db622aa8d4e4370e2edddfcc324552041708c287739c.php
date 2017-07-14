<?php

/* PadelScheduleMainBundle:Competitions:elegirResultado.html.twig */
class __TwigTemplate_ababb26d8fa8dacd84405d3402750e2148908d888ba10aca4d976b1ff5d75b9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Competitions:elegirResultado.html.twig", 1);
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
        $__internal_7154d968babd49093c0fa7108cc2262bdbd0f8ed83582320d4525177b1427df6 = $this->env->getExtension("native_profiler");
        $__internal_7154d968babd49093c0fa7108cc2262bdbd0f8ed83582320d4525177b1427df6->enter($__internal_7154d968babd49093c0fa7108cc2262bdbd0f8ed83582320d4525177b1427df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:elegirResultado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7154d968babd49093c0fa7108cc2262bdbd0f8ed83582320d4525177b1427df6->leave($__internal_7154d968babd49093c0fa7108cc2262bdbd0f8ed83582320d4525177b1427df6_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_6ecae01193ffd7b71bb8b30cc11d9dfc0dcddd73950114f018bbb9d79e79b1c8 = $this->env->getExtension("native_profiler");
        $__internal_6ecae01193ffd7b71bb8b30cc11d9dfc0dcddd73950114f018bbb9d79e79b1c8->enter($__internal_6ecae01193ffd7b71bb8b30cc11d9dfc0dcddd73950114f018bbb9d79e79b1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        echo "    
    <!-- Bootstrap select style -->    
 
    <link rel=\"stylesheet\" href=\"css/components/radio-checkbox.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/responsive.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6ecae01193ffd7b71bb8b30cc11d9dfc0dcddd73950114f018bbb9d79e79b1c8->leave($__internal_6ecae01193ffd7b71bb8b30cc11d9dfc0dcddd73950114f018bbb9d79e79b1c8_prof);

    }

    // line 10
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_c7ad9c78f20265c71706a45fd3ec9168b7f24cb28a2500881f3ba4b2a6d88ed0 = $this->env->getExtension("native_profiler");
        $__internal_c7ad9c78f20265c71706a45fd3ec9168b7f24cb28a2500881f3ba4b2a6d88ed0->enter($__internal_c7ad9c78f20265c71706a45fd3ec9168b7f24cb28a2500881f3ba4b2a6d88ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo "         
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
";
        
        $__internal_c7ad9c78f20265c71706a45fd3ec9168b7f24cb28a2500881f3ba4b2a6d88ed0->leave($__internal_c7ad9c78f20265c71706a45fd3ec9168b7f24cb28a2500881f3ba4b2a6d88ed0_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_eadb34d004c320de12c74c5876431b7464ec919e442bc13d22b72cafb49b1442 = $this->env->getExtension("native_profiler");
        $__internal_eadb34d004c320de12c74c5876431b7464ec919e442bc13d22b72cafb49b1442->enter($__internal_eadb34d004c320de12c74c5876431b7464ec919e442bc13d22b72cafb49b1442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Selección de resultado";
        
        $__internal_eadb34d004c320de12c74c5876431b7464ec919e442bc13d22b72cafb49b1442->leave($__internal_eadb34d004c320de12c74c5876431b7464ec919e442bc13d22b72cafb49b1442_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_ba0ffc5f5b8b7538542df2b61b94e7fab86e768e572638bf29395aecd4c29e25 = $this->env->getExtension("native_profiler");
        $__internal_ba0ffc5f5b8b7538542df2b61b94e7fab86e768e572638bf29395aecd4c29e25->enter($__internal_ba0ffc5f5b8b7538542df2b61b94e7fab86e768e572638bf29395aecd4c29e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
    <div class=\"content-wrap\">
        <div class=\"feature-box fbox-center fbox-plain\">
            <div class=\"fbox-icon\">
                <i class=\"icon-trophy\"></i>
            </div>
            <h3>Asignación de resultados del partido</h3>
            <p>
                ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "inscripcion1", array()), "jugador", array()), "username", array()), "html", null, true);
        echo " y ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "inscripcion1", array()), "nombrePareja", array()), "html", null, true);
        echo " vs ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "inscripcion2", array()), "jugador", array()), "username", array()), "html", null, true);
        echo " y ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "inscripcion2", array()), "nombrePareja", array()), "html", null, true);
        echo "
            </p>
        
            <h4>Resultados propuestos</h4>
            <table class=\"table\" style=\"margin: 0 auto; float: none; width: 50%\">
                <tr>
                    <th colspan=\"3\" class=\"text-center\"> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "inscripcion1", array()), "jugador", array()), "username", array()), "html", null, true);
        echo " y ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "inscripcion1", array()), "nombrePareja", array()), "html", null, true);
        echo " </th>
                    <th colspan=\"3\" class=\"text-center\"> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "inscripcion2", array()), "jugador", array()), "username", array()), "html", null, true);
        echo " y ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "inscripcion2", array()), "nombrePareja", array()), "html", null, true);
        echo " </th>
                </tr>
                <tr>
                    <td>Set 1</td>
                    <td>Set 2</td>
                    <td>Set 3</td>
                    <td>Set 1</td>
                    <td>Set 2</td>
                    <td>Set 3</td>
                </tr>
                <tr>
                    ";
        // line 43
        if ( !twig_test_empty($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto1", array()))) {
            // line 44
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto1", array()), 0, array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto1", array()), 1, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto1", array()), 2, array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto1", array()), 3, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto1", array()), 4, array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto1", array()), 5, array(), "array"), "html", null, true);
            echo "</td>
                    ";
        } else {
            // line 48
            echo "                        <td></td>
                        <td></td>
                        <td></td>   
                    ";
        }
        // line 52
        echo "                    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto2", array()))) {
            // line 53
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto2", array()), 0, array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto2", array()), 1, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto2", array()), 2, array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto2", array()), 3, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto2", array()), 4, array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto2", array()), 5, array(), "array"), "html", null, true);
            echo "</td>
                    ";
        } else {
            // line 57
            echo "                        <td></td>
                        <td></td> 
                       <td></td>   
                    ";
        }
        // line 61
        echo "                </tr>
            </table>
          
            ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "inline-block")));
        echo "
            <div class=\"btn-group\" data-toggle=\"buttons\">
                ";
        // line 66
        if (twig_test_empty($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto1", array()))) {
            // line 67
            echo "                    <label class=\"btn btn-success btn-sm button-leaf\" disabled style=\"pointer-events: none\">
                    ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resultados", array()), 0, array(), "array"), 'widget', array("attr" => array("disabled" => "disabled")));
            echo " Resultado 1
                ";
        } else {
            // line 70
            echo "                    <label class=\"btn btn-success btn-sm button-leaf\">
                    ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resultados", array()), 0, array(), "array"), 'widget');
            echo " Resultado 1
                ";
        }
        // line 73
        echo "                </label>    
                ";
        // line 74
        if (twig_test_empty($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "resultadoPropuesto2", array()))) {
            // line 75
            echo "                    <label class=\"btn btn-success btn-sm button-leaf\" disabled style=\"pointer-events: none\">
                    ";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resultados", array()), 1, array(), "array"), 'widget', array("attr" => array("disabled" => "disabled")));
            echo " Resultado 2
                ";
        } else {
            // line 78
            echo "                    <label class=\"btn btn-success btn-sm button-leaf\">
                    ";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resultados", array()), 1, array(), "array"), 'widget');
            echo " Resultado 2
                ";
        }
        // line 80
        echo "                    
                </label>    
                
            </div>
            </div> 
                
                <div class=\"text-center\">                    
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "send", array()), 'widget', array("attr" => array("class" => "button button-3d button-small button-rounded button-lime"), "label" => "Guardar resultado"));
        echo "    
                    <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($this->getAttribute((isset($context["partido"]) ? $context["partido"] : $this->getContext($context, "partido")), "competicion", array()), "id", array()))), "html", null, true);
        echo "\" class=\"button button-3d button-small button-rounded button-red\"> <i class=\"icon-reload\"></i>Volver</a>
                </div>
                
                
            ";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                
    </div>
             
            
            
            
";
        
        $__internal_ba0ffc5f5b8b7538542df2b61b94e7fab86e768e572638bf29395aecd4c29e25->leave($__internal_ba0ffc5f5b8b7538542df2b61b94e7fab86e768e572638bf29395aecd4c29e25_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:elegirResultado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 92,  254 => 88,  250 => 87,  241 => 80,  236 => 79,  233 => 78,  228 => 76,  225 => 75,  223 => 74,  220 => 73,  215 => 71,  212 => 70,  207 => 68,  204 => 67,  202 => 66,  197 => 64,  192 => 61,  186 => 57,  179 => 55,  173 => 54,  166 => 53,  163 => 52,  157 => 48,  150 => 46,  144 => 45,  137 => 44,  135 => 43,  119 => 32,  113 => 31,  98 => 25,  83 => 17,  71 => 15,  57 => 10,  48 => 7,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block css %}    */
/*     <!-- Bootstrap select style -->    */
/*  */
/*     <link rel="stylesheet" href="css/components/radio-checkbox.css" type="text/css" />*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/responsive.css')}}"/>*/
/* {% endblock css %}*/
/* */
/* {% block scripts %}         */
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />*/
/* {% endblock %}*/
/* */
/* */
/* {% block title %}Selección de resultado{% endblock %}*/
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
/*         */
/*             <h4>Resultados propuestos</h4>*/
/*             <table class="table" style="margin: 0 auto; float: none; width: 50%">*/
/*                 <tr>*/
/*                     <th colspan="3" class="text-center"> {{ partido.inscripcion1.jugador.username }} y {{ partido.inscripcion1.nombrePareja}} </th>*/
/*                     <th colspan="3" class="text-center"> {{ partido.inscripcion2.jugador.username }} y {{ partido.inscripcion2.nombrePareja}} </th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Set 1</td>*/
/*                     <td>Set 2</td>*/
/*                     <td>Set 3</td>*/
/*                     <td>Set 1</td>*/
/*                     <td>Set 2</td>*/
/*                     <td>Set 3</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     {% if partido.resultadoPropuesto1 is not empty %}*/
/*                         <td>{{partido.resultadoPropuesto1[0]}} - {{partido.resultadoPropuesto1[1]}}</td>*/
/*                         <td>{{partido.resultadoPropuesto1[2]}} - {{partido.resultadoPropuesto1[3]}}</td>*/
/*                         <td>{{partido.resultadoPropuesto1[4]}} - {{partido.resultadoPropuesto1[5]}}</td>*/
/*                     {% else %}*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>   */
/*                     {% endif %}*/
/*                     {% if partido.resultadoPropuesto2 is not empty %}*/
/*                         <td>{{partido.resultadoPropuesto2[0]}} - {{partido.resultadoPropuesto2[1]}}</td>*/
/*                         <td>{{partido.resultadoPropuesto2[2]}} - {{partido.resultadoPropuesto2[3]}}</td>*/
/*                         <td>{{partido.resultadoPropuesto2[4]}} - {{partido.resultadoPropuesto2[5]}}</td>*/
/*                     {% else %}*/
/*                         <td></td>*/
/*                         <td></td> */
/*                        <td></td>   */
/*                     {% endif %}*/
/*                 </tr>*/
/*             </table>*/
/*           */
/*             {{ form_start(form, {'attr': {'class': 'inline-block'}}) }}*/
/*             <div class="btn-group" data-toggle="buttons">*/
/*                 {% if partido.resultadoPropuesto1 is empty %}*/
/*                     <label class="btn btn-success btn-sm button-leaf" disabled style="pointer-events: none">*/
/*                     {{ form_widget(form.resultados[0], {'attr': {'disabled': 'disabled'}}  )}} Resultado 1*/
/*                 {% else %}*/
/*                     <label class="btn btn-success btn-sm button-leaf">*/
/*                     {{ form_widget(form.resultados[0]) }} Resultado 1*/
/*                 {% endif %}*/
/*                 </label>    */
/*                 {% if partido.resultadoPropuesto2 is empty %}*/
/*                     <label class="btn btn-success btn-sm button-leaf" disabled style="pointer-events: none">*/
/*                     {{ form_widget(form.resultados[1], {'attr': {'disabled': 'disabled'}}  )}} Resultado 2*/
/*                 {% else %}*/
/*                     <label class="btn btn-success btn-sm button-leaf">*/
/*                     {{ form_widget(form.resultados[1]) }} Resultado 2*/
/*                 {% endif %}                    */
/*                 </label>    */
/*                 */
/*             </div>*/
/*             </div> */
/*                 */
/*                 <div class="text-center">                    */
/*                     {{ form_widget(form.send,  {'attr': {'class': 'button button-3d button-small button-rounded button-lime'}, 'label': 'Guardar resultado'}) }}    */
/*                     <a href="{{ path('competicion', {'idCompeticion': partido.competicion.id }) }}" class="button button-3d button-small button-rounded button-red"> <i class="icon-reload"></i>Volver</a>*/
/*                 </div>*/
/*                 */
/*                 */
/*             {{ form_end(form) }}*/
/*                 */
/*     </div>*/
/*              */
/*             */
/*             */
/*             */
/* {%endblock %}*/
/* */
