<?php

/* PadelScheduleMainBundle:Main:crearMensaje.html.twig */
class __TwigTemplate_c175025a5c55fbd646b7405ec9ce6439e30db1415caae67884bc55b6f6c703c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Main:crearMensaje.html.twig", 1);
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
        $__internal_9a12b85b0410059fdd0d2bd93c143247bf935e527808fc34f08fd15d4e9ef6e9 = $this->env->getExtension("native_profiler");
        $__internal_9a12b85b0410059fdd0d2bd93c143247bf935e527808fc34f08fd15d4e9ef6e9->enter($__internal_9a12b85b0410059fdd0d2bd93c143247bf935e527808fc34f08fd15d4e9ef6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Main:crearMensaje.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a12b85b0410059fdd0d2bd93c143247bf935e527808fc34f08fd15d4e9ef6e9->leave($__internal_9a12b85b0410059fdd0d2bd93c143247bf935e527808fc34f08fd15d4e9ef6e9_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_26d54ed61eea547374a0c6f8bc4ca9593f7e1c46fb17c2f5c19e7de60955dda6 = $this->env->getExtension("native_profiler");
        $__internal_26d54ed61eea547374a0c6f8bc4ca9593f7e1c46fb17c2f5c19e7de60955dda6->enter($__internal_26d54ed61eea547374a0c6f8bc4ca9593f7e1c46fb17c2f5c19e7de60955dda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/select-boxes.css"), "html", null, true);
        echo "\"  type=\"text/css\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/responsive.css"), "html", null, true);
        echo "\"  type=\"text/css\" />    
";
        
        $__internal_26d54ed61eea547374a0c6f8bc4ca9593f7e1c46fb17c2f5c19e7de60955dda6->leave($__internal_26d54ed61eea547374a0c6f8bc4ca9593f7e1c46fb17c2f5c19e7de60955dda6_prof);

    }

    // line 8
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_1625f0d9bdd8c2b25a165c4d8ddc49dd177a5f7442177f5a15ab9eaa1ec13610 = $this->env->getExtension("native_profiler");
        $__internal_1625f0d9bdd8c2b25a165c4d8ddc49dd177a5f7442177f5a15ab9eaa1ec13610->enter($__internal_1625f0d9bdd8c2b25a165c4d8ddc49dd177a5f7442177f5a15ab9eaa1ec13610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " 
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/select-boxes.js"), "html", null, true);
        echo "\"></script>
\t
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    
    <script>

\t\$(document).ready(function() {
            // select Tags
            \$(\".select-tags\").select2({
                    tags: true,
                    allowClear: true
            });
                
    });

    </script>
";
        
        $__internal_1625f0d9bdd8c2b25a165c4d8ddc49dd177a5f7442177f5a15ab9eaa1ec13610->leave($__internal_1625f0d9bdd8c2b25a165c4d8ddc49dd177a5f7442177f5a15ab9eaa1ec13610_prof);

    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        $__internal_449ff0c5bae5e76a750d20b1b3918fa54cfa3f6dd918d9453d54f7d04c1afa61 = $this->env->getExtension("native_profiler");
        $__internal_449ff0c5bae5e76a750d20b1b3918fa54cfa3f6dd918d9453d54f7d04c1afa61->enter($__internal_449ff0c5bae5e76a750d20b1b3918fa54cfa3f6dd918d9453d54f7d04c1afa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Index";
        
        $__internal_449ff0c5bae5e76a750d20b1b3918fa54cfa3f6dd918d9453d54f7d04c1afa61->leave($__internal_449ff0c5bae5e76a750d20b1b3918fa54cfa3f6dd918d9453d54f7d04c1afa61_prof);

    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        $__internal_8054cc1d0929e2ef0527b95fffe1b1efa66789eb7059f0776dd55275d9fb4e59 = $this->env->getExtension("native_profiler");
        $__internal_8054cc1d0929e2ef0527b95fffe1b1efa66789eb7059f0776dd55275d9fb4e59->enter($__internal_8054cc1d0929e2ef0527b95fffe1b1efa66789eb7059f0776dd55275d9fb4e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "
";
        // line 32
        echo "    <section id=\"content\">
\t<div class=\"content-wrap\">
            <div class=\"container clearfix\">
                <div class=\"feature-box fbox-large fbox-plain fbox-dark\">
                    <div class=\"fbox-icon\">
                        <i class=\"icon-email2\"></i>
                    </div> 
                    <div class=\"form-group\">
                        ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                        <label for=\"mensaje_destinatarioMensaje\" class=\"required\">Destinatario:</label>
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinatarioMensaje", array()), 'widget', array("attr" => array("class" => "select-tags form-control", "style" => "width: 100%")));
        echo "
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinatarioMensaje", array()), 'errors');
        echo "
";
        // line 46
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cabecera", array()), 'label');
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cabecera", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cabecera", array()), 'errors');
        echo "
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuerpo", array()), 'label');
        echo "
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuerpo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuerpo", array()), 'errors');
        echo "

                        <div class=\"text-center\">    
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "button button-3d button-small button-rounded button-lime")));
        echo "    
                            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("buzon");
        echo "\" class=\"button button-3d button-small button-rounded button-red\"> <i class=\"icon-line-circle-cross\"></i>Volver al buzón</a>
                        </div>

                    ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                    </div>
                </div>
    </section>
                
                <script>
                    \$( document ).ready(function() {  
                        \$(\"span .select2\").addClass(\"form-control\");
                        \$(\".prueba\").click(function() {
                            alert(\"hola\");
                            alert( \$( \"select#mensaje_destinatarioMensaje\").val() );
                        })
                    });
                </script>
                
";
        
        $__internal_8054cc1d0929e2ef0527b95fffe1b1efa66789eb7059f0776dd55275d9fb4e59->leave($__internal_8054cc1d0929e2ef0527b95fffe1b1efa66789eb7059f0776dd55275d9fb4e59_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Main:crearMensaje.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 58,  165 => 55,  161 => 54,  155 => 51,  151 => 50,  147 => 49,  143 => 48,  139 => 47,  134 => 46,  130 => 44,  126 => 43,  120 => 40,  110 => 32,  107 => 30,  101 => 29,  89 => 27,  65 => 9,  57 => 8,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block css %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/select-boxes.css')}}"  type="text/css" /> */
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/responsive.css')}}"  type="text/css" />    */
/* {% endblock %}*/
/* */
/* {% block scripts %} */
/*     <script src="{{asset('bundles/padelschedulemain/js/components/select-boxes.js')}}"></script>*/
/* 	*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />*/
/*     */
/*     <script>*/
/* */
/* 	$(document).ready(function() {*/
/*             // select Tags*/
/*             $(".select-tags").select2({*/
/*                     tags: true,*/
/*                     allowClear: true*/
/*             });*/
/*                 */
/*     });*/
/* */
/*     </script>*/
/* {% endblock scripts %}*/
/* */
/* {% block title %}Index{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* {#    {{destinatarios}}#}*/
/*     <section id="content">*/
/* 	<div class="content-wrap">*/
/*             <div class="container clearfix">*/
/*                 <div class="feature-box fbox-large fbox-plain fbox-dark">*/
/*                     <div class="fbox-icon">*/
/*                         <i class="icon-email2"></i>*/
/*                     </div> */
/*                     <div class="form-group">*/
/*                         {{ form_start(form) }}*/
/* */
/*                         <label for="mensaje_destinatarioMensaje" class="required">Destinatario:</label>*/
/*                         {{ form_widget(form.destinatarioMensaje, {'attr': {'class': 'select-tags form-control', 'style': 'width: 100%'} }) }}*/
/*                         {{ form_errors(form.destinatarioMensaje) }}*/
/* {#                            Configurar el error para que diga que debe elegir uno de los usuarios que se muestra#}*/
/*                         {{ form_label(form.cabecera) }}*/
/*                         {{ form_widget(form.cabecera, {'attr': {'class': 'form-control'} }) }}*/
/*                         {{ form_errors(form.cabecera) }}*/
/*                         {{ form_label(form.cuerpo) }}*/
/*                         {{ form_widget(form.cuerpo, {'attr': {'class': 'form-control'} }) }}*/
/*                         {{ form_errors(form.cuerpo) }}*/
/* */
/*                         <div class="text-center">    */
/*                             {{ form_widget(form.submit,  {'attr': {'class': 'button button-3d button-small button-rounded button-lime'}}) }}    */
/*                             <a href="{{path('buzon')}}" class="button button-3d button-small button-rounded button-red"> <i class="icon-line-circle-cross"></i>Volver al buzón</a>*/
/*                         </div>*/
/* */
/*                     {{ form_end(form) }}*/
/* */
/*                     </div>*/
/*                 </div>*/
/*     </section>*/
/*                 */
/*                 <script>*/
/*                     $( document ).ready(function() {  */
/*                         $("span .select2").addClass("form-control");*/
/*                         $(".prueba").click(function() {*/
/*                             alert("hola");*/
/*                             alert( $( "select#mensaje_destinatarioMensaje").val() );*/
/*                         })*/
/*                     });*/
/*                 </script>*/
/*                 */
/* {% endblock content %}*/
