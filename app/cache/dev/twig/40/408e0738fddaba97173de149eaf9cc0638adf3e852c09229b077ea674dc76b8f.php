<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_8ff73278d746f6f054633c5c4be7680f477f3c1b830ec19dd8678bd2a78db4fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c716258e7016d7354cb746ec3509042292c6ab46ab3c399abdb75b3167d7ada0 = $this->env->getExtension("native_profiler");
        $__internal_c716258e7016d7354cb746ec3509042292c6ab46ab3c399abdb75b3167d7ada0->enter($__internal_c716258e7016d7354cb746ec3509042292c6ab46ab3c399abdb75b3167d7ada0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<div class=\"clearfix\">
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("id" => "register-form", "class" => "fos_user_registration_register nobottommargin")));
        echo "
    
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    
    <div class=\"col_full\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
    </div>
    <div class=\"col_full\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
    </div>
    <div class=\"col_full\">
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'label');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'errors');
        echo "
    </div>
    <div class=\"col_full\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'errors');
        echo "        
        </div>
    <div class=\"col_full\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'label');
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'widget', array("placeholder" => "DD-MM-YYYY", "attr" => array("class" => "form-control tleft nacimiento")));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'errors');
        echo "
    </div>   

    
    <div class=\"col_full\">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fotoPerfilFichero", array()), 'label');
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fotoPerfilFichero", array()), 'widget', array("attr" => array("class" => "form-control fotoPerfil")));
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fotoPerfilFichero", array()), 'errors');
        echo "
    </div>
    
    <div class=\"col_full\">
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
    </div>
    
    <div class=\"col_full\">
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
    </div>
    
    <div class=\"col_full\">
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    
    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    
    
    <div class=\"col_full nobottommargin\">
        <input class=\"button button-rounded button-large button-lime nomargin\" type=\"submit\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

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
        \$('.nacimiento').datepicker({
            endDate: \"today\",
            format: \"yyyy-mm-dd\",
            language: \"es\",
            startView: 2,
            autoclose: true
        });
        
        \$('.fotoPerfil').fileinput({
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
        
        $__internal_c716258e7016d7354cb746ec3509042292c6ab46ab3c399abdb75b3167d7ada0->leave($__internal_c716258e7016d7354cb746ec3509042292c6ab46ab3c399abdb75b3167d7ada0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 64,  171 => 62,  164 => 58,  158 => 55,  154 => 54,  147 => 50,  143 => 49,  139 => 48,  132 => 44,  128 => 43,  124 => 42,  117 => 38,  113 => 37,  109 => 36,  101 => 31,  97 => 30,  93 => 29,  87 => 26,  83 => 25,  79 => 24,  73 => 21,  69 => 20,  65 => 19,  59 => 16,  55 => 15,  51 => 14,  45 => 11,  41 => 10,  37 => 9,  31 => 6,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="clearfix">*/
/*     {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'id': 'register-form', 'class': 'fos_user_registration_register nobottommargin'}}) }}*/
/*     */
/*     {{ form_errors(form) }}*/
/*     */
/*     <div class="col_full">*/
/*         {{ form_label(form.username) }}*/
/*         {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}*/
/*         {{ form_errors(form.username) }}*/
/*     </div>*/
/*     <div class="col_full">*/
/*         {{ form_label(form.nombre) }}*/
/*         {{ form_widget(form.nombre, {'attr': {'class': 'form-control'}}) }}*/
/*         {{ form_errors(form.nombre) }}*/
/*     </div>*/
/*     <div class="col_full">*/
/*         {{ form_label(form.apellidos) }}*/
/*         {{ form_widget(form.apellidos, {'attr': {'class': 'form-control'}}) }}*/
/*         {{ form_errors(form.apellidos) }}*/
/*     </div>*/
/*     <div class="col_full">*/
/*         {{ form_label(form.telefono) }}*/
/*         {{ form_widget(form.telefono, {'attr': {'class': 'form-control'}}) }}*/
/*         {{ form_errors(form.telefono) }}        */
/*         </div>*/
/*     <div class="col_full">*/
/*         {{ form_label(form.fechaNacimiento) }}*/
/*         {{ form_widget(form.fechaNacimiento, {'placeholder': 'DD-MM-YYYY', 'attr': {'class': 'form-control tleft nacimiento'}}) }}*/
/*         {{ form_errors(form.fechaNacimiento) }}*/
/*     </div>   */
/* */
/*     */
/*     <div class="col_full">*/
/*         {{ form_label(form.fotoPerfilFichero) }}*/
/*         {{ form_widget(form.fotoPerfilFichero, {'attr': {'class': 'form-control fotoPerfil'}}) }}*/
/*         {{ form_errors(form.fotoPerfilFichero) }}*/
/*     </div>*/
/*     */
/*     <div class="col_full">*/
/*         {{ form_label(form.email) }}*/
/*         {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/*         {{ form_errors(form.email) }}*/
/*     </div>*/
/*     */
/*     <div class="col_full">*/
/*         {{ form_label(form.plainPassword.first) }}*/
/*         {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}*/
/*         {{ form_errors(form.plainPassword.first) }}*/
/*     </div>*/
/*     */
/*     <div class="col_full">*/
/*         {{ form_label(form.plainPassword.second) }}*/
/*         {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*     */
/*     {{ form_rest(form) }}*/
/*     */
/*     */
/*     <div class="col_full nobottommargin">*/
/*         <input class="button button-rounded button-large button-lime nomargin" type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* </div>*/
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
/*         $('.nacimiento').datepicker({*/
/*             endDate: "today",*/
/*             format: "yyyy-mm-dd",*/
/*             language: "es",*/
/*             startView: 2,*/
/*             autoclose: true*/
/*         });*/
/*         */
/*         $('.fotoPerfil').fileinput({*/
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
/* </script>*/
/*     */
/* */
