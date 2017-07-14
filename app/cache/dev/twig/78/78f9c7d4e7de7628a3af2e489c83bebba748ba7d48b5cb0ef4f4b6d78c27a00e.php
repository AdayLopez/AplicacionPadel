<?php

/* PadelScheduleMainBundle:Competitions:crearCompeticion.html.twig */
class __TwigTemplate_688011345d119ee8082a46f48223fa91d41182eba25d3cf1cbba188eccb6d022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Competitions:crearCompeticion.html.twig", 1);
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
        $__internal_167c4e59e10b88b707bc04b0272269c43351c13f835a8b4d8593559d17b0c3bc = $this->env->getExtension("native_profiler");
        $__internal_167c4e59e10b88b707bc04b0272269c43351c13f835a8b4d8593559d17b0c3bc->enter($__internal_167c4e59e10b88b707bc04b0272269c43351c13f835a8b4d8593559d17b0c3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:crearCompeticion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_167c4e59e10b88b707bc04b0272269c43351c13f835a8b4d8593559d17b0c3bc->leave($__internal_167c4e59e10b88b707bc04b0272269c43351c13f835a8b4d8593559d17b0c3bc_prof);

    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        $__internal_cb09dfb5ffab3fae7018a304c8dbb341d1f1a2882f957df7c8a987b62b8c6228 = $this->env->getExtension("native_profiler");
        $__internal_cb09dfb5ffab3fae7018a304c8dbb341d1f1a2882f957df7c8a987b62b8c6228->enter($__internal_cb09dfb5ffab3fae7018a304c8dbb341d1f1a2882f957df7c8a987b62b8c6228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_cb09dfb5ffab3fae7018a304c8dbb341d1f1a2882f957df7c8a987b62b8c6228->leave($__internal_cb09dfb5ffab3fae7018a304c8dbb341d1f1a2882f957df7c8a987b62b8c6228_prof);

    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        $__internal_d33cc00b43eac8abcae9f7fcba2537e5e85bec62af4bed86216ca558b74054d4 = $this->env->getExtension("native_profiler");
        $__internal_d33cc00b43eac8abcae9f7fcba2537e5e85bec62af4bed86216ca558b74054d4->enter($__internal_d33cc00b43eac8abcae9f7fcba2537e5e85bec62af4bed86216ca558b74054d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creación de competición";
        
        $__internal_d33cc00b43eac8abcae9f7fcba2537e5e85bec62af4bed86216ca558b74054d4->leave($__internal_d33cc00b43eac8abcae9f7fcba2537e5e85bec62af4bed86216ca558b74054d4_prof);

    }

    // line 19
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_a8268adf91fc3d2d6d2e3eb3947c5395ed720a9d9d07abb514d8617c38266662 = $this->env->getExtension("native_profiler");
        $__internal_a8268adf91fc3d2d6d2e3eb3947c5395ed720a9d9d07abb514d8617c38266662->enter($__internal_a8268adf91fc3d2d6d2e3eb3947c5395ed720a9d9d07abb514d8617c38266662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

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
        
        $__internal_a8268adf91fc3d2d6d2e3eb3947c5395ed720a9d9d07abb514d8617c38266662->leave($__internal_a8268adf91fc3d2d6d2e3eb3947c5395ed720a9d9d07abb514d8617c38266662_prof);

    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        $__internal_348a2ea912dcdaef0000a8348979ea46b7a2bc84558c63ccf7a730128a661bc3 = $this->env->getExtension("native_profiler");
        $__internal_348a2ea912dcdaef0000a8348979ea46b7a2bc84558c63ccf7a730128a661bc3->enter($__internal_348a2ea912dcdaef0000a8348979ea46b7a2bc84558c63ccf7a730128a661bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "    <section id=\"page-title\" class=\"page-title-center page-title-pattern\">
            <div class=\"container clearfix\">
                    <h1>Crear nueva competición</h1>
                    <ol class=\"breadcrumb\">
                            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Inicio</a></li>
                            <li class=\"active\">Creación de nueva competición</li>
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
        
        $__internal_348a2ea912dcdaef0000a8348979ea46b7a2bc84558c63ccf7a730128a661bc3->leave($__internal_348a2ea912dcdaef0000a8348979ea46b7a2bc84558c63ccf7a730128a661bc3_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:crearCompeticion.html.twig";
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
/* {% block title %}Creación de competición{% endblock %}*/
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
/*                     <h1>Crear nueva competición</h1>*/
/*                     <ol class="breadcrumb">*/
/*                             <li><a href="{{ path('home') }}">Inicio</a></li>*/
/*                             <li class="active">Creación de nueva competición</li>*/
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
