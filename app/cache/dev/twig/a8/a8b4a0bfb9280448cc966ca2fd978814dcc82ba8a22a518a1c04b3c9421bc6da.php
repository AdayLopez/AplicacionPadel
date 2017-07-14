<?php

/* PadelScheduleMainBundle:Competitions:modificarCompeticion.html.twig */
class __TwigTemplate_65f0a712709aba277ea66e885ab513b4c0d27fb33934f0553c358479083c1e66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Competitions:modificarCompeticion.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'title' => array($this, 'block_title'),
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
        $__internal_5e7c7c302c7b515a3c8a0c845e6300864d2addaa30dbe6b477e327a6546757f1 = $this->env->getExtension("native_profiler");
        $__internal_5e7c7c302c7b515a3c8a0c845e6300864d2addaa30dbe6b477e327a6546757f1->enter($__internal_5e7c7c302c7b515a3c8a0c845e6300864d2addaa30dbe6b477e327a6546757f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:modificarCompeticion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e7c7c302c7b515a3c8a0c845e6300864d2addaa30dbe6b477e327a6546757f1->leave($__internal_5e7c7c302c7b515a3c8a0c845e6300864d2addaa30dbe6b477e327a6546757f1_prof);

    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        $__internal_311f6f40cf734ebaa56c780db2794e50a232a94416d9cc8bbf85d252180bcb8a = $this->env->getExtension("native_profiler");
        $__internal_311f6f40cf734ebaa56c780db2794e50a232a94416d9cc8bbf85d252180bcb8a->enter($__internal_311f6f40cf734ebaa56c780db2794e50a232a94416d9cc8bbf85d252180bcb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/datepicker.css"), "html", null, true);
        echo "\"/>    
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/bs-filestyle.css"), "html", null, true);
        echo "\"/>        
    <style>

        input::-webkit-inner-spin-button,
        input::-webkit-calendar-picker-indicator {
            display: none;
            -webkit-appearance: none;
        }
    </style>
";
        
        $__internal_311f6f40cf734ebaa56c780db2794e50a232a94416d9cc8bbf85d252180bcb8a->leave($__internal_311f6f40cf734ebaa56c780db2794e50a232a94416d9cc8bbf85d252180bcb8a_prof);

    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c7a252bbf0b0625f9e7183a455130e2ab174d7b098361c27eef539f6b762859 = $this->env->getExtension("native_profiler");
        $__internal_2c7a252bbf0b0625f9e7183a455130e2ab174d7b098361c27eef539f6b762859->enter($__internal_2c7a252bbf0b0625f9e7183a455130e2ab174d7b098361c27eef539f6b762859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Modificación de competición";
        
        $__internal_2c7a252bbf0b0625f9e7183a455130e2ab174d7b098361c27eef539f6b762859->leave($__internal_2c7a252bbf0b0625f9e7183a455130e2ab174d7b098361c27eef539f6b762859_prof);

    }

    // line 19
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_35927a0d4295609d7153b826168cd16b844d5ea0ea8343a070f0ed82e0337e53 = $this->env->getExtension("native_profiler");
        $__internal_35927a0d4295609d7153b826168cd16b844d5ea0ea8343a070f0ed82e0337e53->enter($__internal_35927a0d4295609d7153b826168cd16b844d5ea0ea8343a070f0ed82e0337e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " 
     
     <!-- Include Date Range Picker -->
     <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/moment.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/datepicker.js"), "html", null, true);
        echo "\"></script>
     
     <!-- Upload js -->
     <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/bs-filestyle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_35927a0d4295609d7153b826168cd16b844d5ea0ea8343a070f0ed82e0337e53->leave($__internal_35927a0d4295609d7153b826168cd16b844d5ea0ea8343a070f0ed82e0337e53_prof);

    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        $__internal_a643a56b244ded5437ed35353724fd0f350febc9e989b24340858002f7f99047 = $this->env->getExtension("native_profiler");
        $__internal_a643a56b244ded5437ed35353724fd0f350febc9e989b24340858002f7f99047->enter($__internal_a643a56b244ded5437ed35353724fd0f350febc9e989b24340858002f7f99047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "    <section id=\"page-title\" class=\"page-title-center page-title-pattern\">
            <div class=\"container clearfix\">
                    <h1>Modificar competición</h1>
                    <ol class=\"breadcrumb\">
                            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Inicio</a></li>
                            <li class=\"active\">Modificar competición</li>
                    </ol>
            </div>                                               
    </section>
    ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <section id=\"content\">       
        <div class=\"container clearfix\">
            <div class=\"col_half nobottommargin\">
                <div class=\"col_full\">
                    <div class=\"fancy-title title-bottom-border title-center\"><h4><i class=\"icon-file-text\"></i>   Información general</h4></div>
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "  
                    
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo "
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "  
                    
                    
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'label');
        echo "
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'widget', array("placeholder" => "DD-MM-YYYY", "attr" => array("class" => "form-control tleft fecha")));
        echo "
                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'errors');
        echo "  
                    
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localizacion", array()), 'label');
        echo "
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localizacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localizacion", array()), 'errors');
        echo "  
                    
                        
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fotoCompeticionFichero", array()), 'label');
        echo "
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fotoCompeticionFichero", array()), 'widget', array("attr" => array("class" => "form-control fotoCompeticion")));
        echo "
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fotoCompeticionFichero", array()), 'errors');
        echo "
    
                </div>
            </div>
            <div class=\"col_half col_last\">
                <div class=\"fancy-title title-bottom-border title-center\"><h4><i class=\"icon-settings\"></i>   Características</h4></div>
                
                    <div class=\"col_half\">
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosPorGanar", array()), 'label');
        echo "
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosPorGanar", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosPorGanar", array()), 'errors');
        echo "  
                    </div>
                    
                    <div class=\"col_half col_last\">
                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosPorPerder", array()), 'label');
        echo "
                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosPorPerder", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosPorPerder", array()), 'errors');
        echo "  
                    </div>                                       
                    
                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maxInscripciones", array()), 'label');
        echo "
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maxInscripciones", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maxInscripciones", array()), 'errors');
        echo "  
                    
                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normas", array()), 'label');
        echo "
                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normas", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "normas", array()), 'errors');
        echo "  
                
            </div>
                    
            <div class=\"clearfix col_full center\">
                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "button button-lime button-3d button-rounded")));
        echo "   
            </div>
            
        </div>
    </section>   
";
        // line 100
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "    

<script>
    \$(function() {
        \$.fn.datepicker.dates['en'] = {
            days: [\"Domingo\", \"Lunes\", \"Martes\", \"Miércoles\", \"Jueves\", \"Viernes\", \"Sábado\"],
            daysShort: [\"Dom\", \"Lun\", \"Mar\", \"Mié\", \"Jue\", \"Vie\", \"Sáb\"],
            daysMin: [\"D\", \"L\", \"M\", \"X\", \"J\", \"V\", \"S\"],
            months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthsShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            today: \"Hoy\",
            clear: \"Vaciar\",
            format: \"yyyy-mm-dd\",
            titleFormat: \"MM yyyy\", /* Leverages same syntax as 'format' */
            weekStart: 1
        };
        \$('.fecha').datepicker({
            startDate: \"today\",
            format: \"yyyy-mm-dd\",
            language: \"es\",
            startView: 2,
            autoclose: true
        });
         \$('.fotoCompeticion').fileinput({
            maxFileCount: 1,
            showUpload: false, 
            allowedFileTypes: [\"image\"],
            previewFileType: \"image\",
            elErrorContainer: \"#errorBlock\",
            browseClass: \"btn btn-success\",
            browseLabel: \"Seleccionar imagen\",
            browseIcon: \"<i class=\\\"icon-picture\\\"></i> \",
            removeClass: \"btn btn-danger\",
            removeLabel: \"Eliminar\",
            removeIcon: \"<i class=\\\"icon-trash\\\"></i> \",
        });
    });
</script>        

";
        
        $__internal_a643a56b244ded5437ed35353724fd0f350febc9e989b24340858002f7f99047->leave($__internal_a643a56b244ded5437ed35353724fd0f350febc9e989b24340858002f7f99047_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:modificarCompeticion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 100,  266 => 95,  258 => 90,  254 => 89,  250 => 88,  245 => 86,  241 => 85,  237 => 84,  231 => 81,  227 => 80,  223 => 79,  216 => 75,  212 => 74,  208 => 73,  197 => 65,  193 => 64,  189 => 63,  183 => 60,  179 => 59,  175 => 58,  170 => 56,  166 => 55,  162 => 54,  156 => 51,  152 => 50,  148 => 49,  143 => 47,  139 => 46,  135 => 45,  126 => 39,  118 => 34,  112 => 30,  106 => 29,  97 => 26,  91 => 23,  87 => 22,  77 => 19,  65 => 17,  48 => 6,  43 => 5,  37 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block css %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/datepicker.css')}}"/>    */
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/bs-filestyle.css')}}"/>        */
/*     <style>*/
/* */
/*         input::-webkit-inner-spin-button,*/
/*         input::-webkit-calendar-picker-indicator {*/
/*             display: none;*/
/*             -webkit-appearance: none;*/
/*         }*/
/*     </style>*/
/* {% endblock css %}*/
/* */
/* {% block title %}Modificación de competición{% endblock %}*/
/* */
/* {% block scripts %} */
/*      */
/*      <!-- Include Date Range Picker -->*/
/*      <script src="{{asset('bundles/padelschedulemain/js/components/moment.js')}}"></script>*/
/*      <script src="{{asset('bundles/padelschedulemain/js/components/datepicker.js')}}"></script>*/
/*      */
/*      <!-- Upload js -->*/
/*      <script src="{{asset('bundles/padelschedulemain/js/components/bs-filestyle.js')}}"></script>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <section id="page-title" class="page-title-center page-title-pattern">*/
/*             <div class="container clearfix">*/
/*                     <h1>Modificar competición</h1>*/
/*                     <ol class="breadcrumb">*/
/*                             <li><a href="{{ path('home') }}">Inicio</a></li>*/
/*                             <li class="active">Modificar competición</li>*/
/*                     </ol>*/
/*             </div>                                               */
/*     </section>*/
/*     {{ form_start(form) }}*/
/*     <section id="content">       */
/*         <div class="container clearfix">*/
/*             <div class="col_half nobottommargin">*/
/*                 <div class="col_full">*/
/*                     <div class="fancy-title title-bottom-border title-center"><h4><i class="icon-file-text"></i>   Información general</h4></div>*/
/*                     {{ form_label(form.nombre) }}*/
/*                     {{ form_widget(form.nombre, {'attr': {'class': 'form-control'}}) }}*/
/*                     {{ form_errors(form.nombre) }}  */
/*                     */
/*                     {{ form_label(form.descripcion) }}*/
/*                     {{ form_widget(form.descripcion, {'attr': {'class': 'form-control'}}) }}*/
/*                     {{ form_errors(form.descripcion) }}  */
/*                     */
/*                     */
/*                     {{ form_label(form.fechaInicio) }}*/
/*                     {{ form_widget(form.fechaInicio, {'placeholder': 'DD-MM-YYYY', 'attr': {'class': 'form-control tleft fecha'}}) }}*/
/*                     {{ form_errors(form.fechaInicio) }}  */
/*                     */
/*                     {{ form_label(form.localizacion) }}*/
/*                     {{ form_widget(form.localizacion, {'attr': {'class': 'form-control'}}) }}*/
/*                     {{ form_errors(form.localizacion) }}  */
/*                     */
/*                         */
/*                     {{ form_label(form.fotoCompeticionFichero) }}*/
/*                     {{ form_widget(form.fotoCompeticionFichero, {'attr': {'class': 'form-control fotoCompeticion'}}) }}*/
/*                     {{ form_errors(form.fotoCompeticionFichero) }}*/
/*     */
/*                 </div>*/
/*             </div>*/
/*             <div class="col_half col_last">*/
/*                 <div class="fancy-title title-bottom-border title-center"><h4><i class="icon-settings"></i>   Características</h4></div>*/
/*                 */
/*                     <div class="col_half">*/
/*                         {{ form_label(form.puntosPorGanar) }}*/
/*                         {{ form_widget(form.puntosPorGanar, {'attr': {'class': 'form-control'}}) }}*/
/*                         {{ form_errors(form.puntosPorGanar) }}  */
/*                     </div>*/
/*                     */
/*                     <div class="col_half col_last">*/
/*                         {{ form_label(form.puntosPorPerder) }}*/
/*                         {{ form_widget(form.puntosPorPerder, {'attr': {'class': 'form-control'}}) }}*/
/*                         {{ form_errors(form.puntosPorPerder) }}  */
/*                     </div>                                       */
/*                     */
/*                     {{ form_label(form.maxInscripciones) }}*/
/*                     {{ form_widget(form.maxInscripciones, {'attr': {'class': 'form-control'}}) }}*/
/*                     {{ form_errors(form.maxInscripciones) }}  */
/*                     */
/*                     {{ form_label(form.normas) }}*/
/*                     {{ form_widget(form.normas, {'attr': {'class': 'form-control'}}) }}*/
/*                     {{ form_errors(form.normas) }}  */
/*                 */
/*             </div>*/
/*                     */
/*             <div class="clearfix col_full center">*/
/*                 {{ form_widget(form.submit,  {'attr': {'class': 'button button-lime button-3d button-rounded'}}) }}   */
/*             </div>*/
/*             */
/*         </div>*/
/*     </section>   */
/* {{ form_end(form) }}    */
/* */
/* <script>*/
/*     $(function() {*/
/*         $.fn.datepicker.dates['en'] = {*/
/*             days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],*/
/*             daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],*/
/*             daysMin: ["D", "L", "M", "X", "J", "V", "S"],*/
/*             months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],*/
/*             monthsShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],*/
/*             today: "Hoy",*/
/*             clear: "Vaciar",*/
/*             format: "yyyy-mm-dd",*/
/*             titleFormat: "MM yyyy", /* Leverages same syntax as 'format' *//* */
/*             weekStart: 1*/
/*         };*/
/*         $('.fecha').datepicker({*/
/*             startDate: "today",*/
/*             format: "yyyy-mm-dd",*/
/*             language: "es",*/
/*             startView: 2,*/
/*             autoclose: true*/
/*         });*/
/*          $('.fotoCompeticion').fileinput({*/
/*             maxFileCount: 1,*/
/*             showUpload: false, */
/*             allowedFileTypes: ["image"],*/
/*             previewFileType: "image",*/
/*             elErrorContainer: "#errorBlock",*/
/*             browseClass: "btn btn-success",*/
/*             browseLabel: "Seleccionar imagen",*/
/*             browseIcon: "<i class=\"icon-picture\"></i> ",*/
/*             removeClass: "btn btn-danger",*/
/*             removeLabel: "Eliminar",*/
/*             removeIcon: "<i class=\"icon-trash\"></i> ",*/
/*         });*/
/*     });*/
/* </script>        */
/* */
/* {% endblock content %}*/
/* */
