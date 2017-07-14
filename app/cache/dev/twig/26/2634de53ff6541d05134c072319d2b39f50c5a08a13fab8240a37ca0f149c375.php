<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_10c4295d20b2d7ec38b53e672bbe95ccbc63db60cd9a167abe964b04eaa37bd9 extends Twig_Template
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
        $__internal_d9a5696c36cbe8bc9397cef53f9ae62b5007bdefc7cb97a92dd1be598b73fb04 = $this->env->getExtension("native_profiler");
        $__internal_d9a5696c36cbe8bc9397cef53f9ae62b5007bdefc7cb97a92dd1be598b73fb04->enter($__internal_d9a5696c36cbe8bc9397cef53f9ae62b5007bdefc7cb97a92dd1be598b73fb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 5
        echo "    <section id=\"content\">       
        <div class=\"container clearfix\">
            <div class=\"col_half nobottommargin\">
                <div class=\"col_full\">
                    <div class=\"fancy-title title-bottom-border title-center\"><h4><i class=\"icon-user\"></i>    Información personal</h4></div>
                    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "  
                    
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
                    
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'label');
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'errors');
        echo "  
                    
                    
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'label');
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'widget', array("placeholder" => "DD-MM-YYYY", "attr" => array("class" => "form-control tleft fecha")));
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'errors');
        echo "  
                    
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fotoPerfilFichero", array()), 'label');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fotoPerfilFichero", array()), 'widget', array("attr" => array("class" => "form-control fotoPerfil")));
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fotoPerfilFichero", array()), 'errors');
        echo "  
                    
                </div>
            </div>
                
            <div class=\"col_half col_last\">
                <div class=\"fancy-title title-bottom-border title-center\"><h4><i class=\"icon-phone\"></i>   Contacto</h4></div>
                
                    
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label');
        echo "
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'errors');
        echo "  

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
                    


                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'label');
        echo "
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'errors');
        echo "  
                    
                    
                    
                
            </div>
                    
      ";
        // line 61
        echo "        </div>
    </section>      
    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"center\">        
        <input class=\"button button-rounded button-large button-lime\" type=\"submit\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" class=\"button button-rounded button-large button-red\">Volver</a>           
        
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
        \$('.fecha').datepicker({
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
    
</form>
";
        
        $__internal_d9a5696c36cbe8bc9397cef53f9ae62b5007bdefc7cb97a92dd1be598b73fb04->leave($__internal_d9a5696c36cbe8bc9397cef53f9ae62b5007bdefc7cb97a92dd1be598b73fb04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 66,  166 => 65,  161 => 63,  157 => 61,  147 => 50,  143 => 49,  139 => 48,  132 => 44,  128 => 43,  124 => 42,  119 => 40,  115 => 39,  111 => 38,  99 => 29,  95 => 28,  91 => 27,  86 => 25,  82 => 24,  78 => 23,  72 => 20,  68 => 19,  64 => 18,  59 => 16,  55 => 15,  51 => 14,  46 => 12,  42 => 11,  38 => 10,  31 => 5,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST" class="fos_user_profile_edit">*/
/*     {#    {{ form_start(form) }}#}*/
/*     <section id="content">       */
/*         <div class="container clearfix">*/
/*             <div class="col_half nobottommargin">*/
/*                 <div class="col_full">*/
/*                     <div class="fancy-title title-bottom-border title-center"><h4><i class="icon-user"></i>    Información personal</h4></div>*/
/*                     {{ form_label(form.username) }}*/
/*                     {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}*/
/*                     {{ form_errors(form.username) }}  */
/*                     */
/*                     {{ form_label(form.nombre) }}*/
/*                     {{ form_widget(form.nombre, {'attr': {'class': 'form-control'}}) }}*/
/*                     {{ form_errors(form.nombre) }}  */
/*                     */
/*                     {{ form_label(form.apellidos) }}*/
/*                     {{ form_widget(form.apellidos, {'attr': {'class': 'form-control'}}) }}*/
/*                     {{ form_errors(form.apellidos) }}  */
/*                     */
/*                     */
/*                     {{ form_label(form.fechaNacimiento) }}*/
/*                     {{ form_widget(form.fechaNacimiento, {'placeholder': 'DD-MM-YYYY', 'attr': {'class': 'form-control tleft fecha'}}) }}*/
/*                     {{ form_errors(form.fechaNacimiento) }}  */
/*                     */
/*                     {{ form_label(form.fotoPerfilFichero) }}*/
/*                     {{ form_widget(form.fotoPerfilFichero, {'attr': {'class': 'form-control fotoPerfil'}}) }}*/
/*                     {{ form_errors(form.fotoPerfilFichero) }}  */
/*                     */
/*                 </div>*/
/*             </div>*/
/*                 */
/*             <div class="col_half col_last">*/
/*                 <div class="fancy-title title-bottom-border title-center"><h4><i class="icon-phone"></i>   Contacto</h4></div>*/
/*                 */
/*                     */
/*                     {{ form_label(form.telefono) }}*/
/*                     {{ form_widget(form.telefono, {'attr': {'class': 'form-control'}}) }}*/
/*                     {{ form_errors(form.telefono) }}  */
/* */
/*                     {{ form_label(form.email) }}*/
/*                     {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/*                     {{ form_errors(form.email) }}   */
/*                     */
/* */
/* */
/*                     {{ form_label(form.current_password) }}*/
/*                     {{ form_widget(form.current_password, {'attr': {'class': 'form-control'}}) }}*/
/*                     {{ form_errors(form.current_password) }}  */
/*                     */
/*                     */
/*                     */
/*                 */
/*             </div>*/
/*                     */
/*       {#      <div class="clearfix col_full">*/
/*                 {{ form_widget(form.submit,  {'attr': {'class': 'btn btn-success btn-block'}}) }}   */
/*             </div>*/
/*             #}*/
/*         </div>*/
/*     </section>      */
/*     {{ form_widget(form) }}*/
/*     <div class="center">        */
/*         <input class="button button-rounded button-large button-lime" type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*         <a href="{{ path('fos_user_profile_show') }}" class="button button-rounded button-large button-red">Volver</a>           */
/*         */
/*     </div>*/
/*     */
/*     <script>*/
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
/*         */
/*     });*/
/* </script>        */
/*     */
/* </form>*/
/* */
