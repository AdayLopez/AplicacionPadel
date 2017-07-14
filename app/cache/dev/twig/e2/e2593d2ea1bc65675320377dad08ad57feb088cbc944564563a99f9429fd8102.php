<?php

/* PadelScheduleMainBundle:Competitions:generacionHorario.html.twig */
class __TwigTemplate_ce34cf274e506d8c51012a171da785dbe17f3959627c0f8e5f9211d293a15ceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Competitions:generacionHorario.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'estilo' => array($this, 'block_estilo'),
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
        $__internal_0f769229d81027a6489f726e1c999d5067c21feee2a17dcf61ca8e18157915a3 = $this->env->getExtension("native_profiler");
        $__internal_0f769229d81027a6489f726e1c999d5067c21feee2a17dcf61ca8e18157915a3->enter($__internal_0f769229d81027a6489f726e1c999d5067c21feee2a17dcf61ca8e18157915a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:generacionHorario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f769229d81027a6489f726e1c999d5067c21feee2a17dcf61ca8e18157915a3->leave($__internal_0f769229d81027a6489f726e1c999d5067c21feee2a17dcf61ca8e18157915a3_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a69af8f80cbfcbc8c3cf39b3a04f0f868885cae3946715065e6904720c8460d6 = $this->env->getExtension("native_profiler");
        $__internal_a69af8f80cbfcbc8c3cf39b3a04f0f868885cae3946715065e6904720c8460d6->enter($__internal_a69af8f80cbfcbc8c3cf39b3a04f0f868885cae3946715065e6904720c8460d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Competicion";
        
        $__internal_a69af8f80cbfcbc8c3cf39b3a04f0f868885cae3946715065e6904720c8460d6->leave($__internal_a69af8f80cbfcbc8c3cf39b3a04f0f868885cae3946715065e6904720c8460d6_prof);

    }

    // line 6
    public function block_estilo($context, array $blocks = array())
    {
        $__internal_98dc72d23c60e7be3b8a487249f8b7ce194896ab8df60fa25feb73e020e90b40 = $this->env->getExtension("native_profiler");
        $__internal_98dc72d23c60e7be3b8a487249f8b7ce194896ab8df60fa25feb73e020e90b40->enter($__internal_98dc72d23c60e7be3b8a487249f8b7ce194896ab8df60fa25feb73e020e90b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilo"));

        // line 7
        echo "    <style>
        p {
            font-size: 11px;
        }
        
        .overflow {
            overflow-x: scroll;
        }
        
        .calendario {
            border: 1px solid black;
            ";
        // line 19
        echo "            table-layout: fixed;
        }
        .calendario-header {
            font-size: 11px;
        }
    
        .wc-time-column-header {
            border: 1px solid black;
            width: 45px;
        }
       
        .wc-day-column-header {
            border: 1px solid black;
            width: 120px;
        }
       
        .wc-scrollbar-shim {
            border: 1px solid black;
            width: 20px;
        }
        
        .ui-droppable {
            background-color: #AEE239;
        }
        
        .preferenciaPareja {
            background-color: #fcf8e3;
        }
        
        .ui-droppable.preferenciaPareja { background-color: #46a310; }
        
        .celda_horario {
            height: 20px;            
        }
        
        .vistaDetalladaTabla {
            border: 1px solid black;
            text-align: center;
            table-layout: fixed;
            ";
        // line 59
        echo "        }
        
        .celda_vistaDetallada {
            width: 20px;
            height: 20px;
            font-size: xx-small;
        }
        
        .partido {
            margin-bottom: 0px;
            background-color: #fcf8e3;
        }
        
        .hover {
            background-color: #CC0000;
        }
        
        .celdaOcupada {
            background-color: #E38686;
        }
        
        .celdaLibre {
            background-color: #AEE239;
        }
        
        .celdaConPartidos {
            background-color:  #ffeb72;
        }
        
        .ui-droppable.preferenciaPareja.hover { background-color: #CC0000; }
        
        .cal-header {            
            background: rgba(235,233,249,1);
            background: -moz-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 0%, rgba(156,156,156,1) 0%, rgba(193,191,234,1) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(235,233,249,1)), color-stop(0%, rgba(216,208,239,1)), color-stop(0%, rgba(156,156,156,1)), color-stop(100%, rgba(193,191,234,1)));
            background: -webkit-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 0%, rgba(156,156,156,1) 0%, rgba(193,191,234,1) 100%);
            background: -o-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 0%, rgba(156,156,156,1) 0%, rgba(193,191,234,1) 100%);
            background: -ms-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 0%, rgba(156,156,156,1) 0%, rgba(193,191,234,1) 100%);
            background: linear-gradient(to bottom, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 0%, rgba(156,156,156,1) 0%, rgba(193,191,234,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ebe9f9', endColorstr='#c1bfea', GradientType=0 );
            padding-top: 20px;
        }
        
        
    </style>
";
        
        $__internal_98dc72d23c60e7be3b8a487249f8b7ce194896ab8df60fa25feb73e020e90b40->leave($__internal_98dc72d23c60e7be3b8a487249f8b7ce194896ab8df60fa25feb73e020e90b40_prof);

    }

    // line 106
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_9ad1fa20aebda7ee2d8f44c7825a0a29164494b18b42794ba937499678255a1f = $this->env->getExtension("native_profiler");
        $__internal_9ad1fa20aebda7ee2d8f44c7825a0a29164494b18b42794ba937499678255a1f->enter($__internal_9ad1fa20aebda7ee2d8f44c7825a0a29164494b18b42794ba937499678255a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " 
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/stingermomentjs/js/moment-with-locales.min.js"), "html", null, true);
        echo "\"></script>    
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/moment-range.min.js"), "html", null, true);
        echo "\"></script>    
";
        
        $__internal_9ad1fa20aebda7ee2d8f44c7825a0a29164494b18b42794ba937499678255a1f->leave($__internal_9ad1fa20aebda7ee2d8f44c7825a0a29164494b18b42794ba937499678255a1f_prof);

    }

    // line 111
    public function block_content($context, array $blocks = array())
    {
        $__internal_4829f482ad08ec361cbae8d11dd93af8b9f970d275c3655b199ad4e700356ff2 = $this->env->getExtension("native_profiler");
        $__internal_4829f482ad08ec361cbae8d11dd93af8b9f970d275c3655b199ad4e700356ff2->enter($__internal_4829f482ad08ec361cbae8d11dd93af8b9f970d275c3655b199ad4e700356ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
    

<div class=\"clearfix calendario \">
    <div class=\"cal-header text-center\">
        
        <div class=\"btn-group inline-block\">
            <button type=\"button\" class=\"btn btn-primary cal-semanaAnterior\"><i class=\"icon-line-rewind\"></i></button>
            <button type=\"button\" class=\"btn btn-primary cal-hoy\"><i class=\"icon-home2\"></i></button>
            <button type=\"button\" class=\"btn btn-primary cal-proximaSemana\"><i class=\"icon-line-fast-forward\"></i></button>
        </div>
        <h2 class=\"inline-block nobottommargin\">Calendario semanal - </h2>
        <h2 class=\"inline-block nobottommargin\" id=\"calendario-head-fecha\"></h2>
        
        

    ";
        // line 127
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "inline-block formCalendario")));
        echo "
    ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "send", array()), 'widget', array("attr" => array("class" => "button button-3d button-small button-rounded button-lime"), "label" => "Guardar calendario"));
        echo "    
    ";
        // line 129
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
    
    
    
    <div class=\"col_two_fifth overflow\">
        <table border=\"1\" class=\"calendario nobottommargin\" style=\"width: 100%\">
            <tbody>
                <tr>
                    <th class=\"calendario-header wc-time-column-header\"></th>
                    <th class=\"text-center calendario-header columna-dia-cabecera dia-0\">
                        Lunes<br><p id=\"L\" class=\"nobottommargin cabecera-dia-fecha\">Feb 21, 2016</p>
                        <input id=\"radioLunes\" type='radio' name='diaVistaDetallada' value='0' class=\"Lunes radio-style\"><label for=\"radioLunes\" class=\"radio-style-3-label radio-small\"></label>
                    </th>
                    <th class=\"text-center calendario-header columna-dia-cabecera dia-1\">
                        Martes<br><p id=\"M\" class=\"nobottommargin cabecera-dia-fecha\">Feb 22, 2016</p>
                        <input id=\"radioMartes\" type='radio' name='diaVistaDetallada' value='1' class=\"Martes radio-style\"><label for=\"radioMartes\" class=\"radio-style-3-label radio-small\"></label>
                    </th>
                    <th class=\"text-center calendario-header columna-dia-cabecera dia-2\">
                        Miércoles<br><p id=\"X\" class=\"nobottommargin cabecera-dia-fecha\">Feb 23, 2016</p>
                        <input id=\"radioMiercoles\" type='radio' name='diaVistaDetallada' value='2' class=\"Miércoles radio-style\"><label for=\"radioMiercoles\" class=\"radio-style-3-label radio-small\"></label>
                    </th>
                    <th class=\"text-center calendario-header columna-dia-cabecera dia-3\">
                        Jueves<br><p id=\"J\" class=\"nobottommargin cabecera-dia-fecha\">Feb 24, 2016</p>
                        <input id=\"radioJueves\" type='radio' name='diaVistaDetallada' value='3' class=\"Jueves radio-style\"><label for=\"radioJueves\" class=\"radio-style-3-label radio-small\"></label>
                    </th>
                    <th class=\"text-center calendario-header columna-dia-cabecera dia-4\">
                        Viernes<br><p id=\"V\" class=\"nobottommargin cabecera-dia-fecha\">Feb 25, 2016</p>
                        <input id=\"radioViernes\" type='radio' name='diaVistaDetallada' value='4' class=\"Viernes radio-style\"><label for=\"radioViernes\" class=\"radio-style-3-label radio-small\"></label>
                    </th>
                    <th class=\"text-center calendario-header columna-dia-cabecera dia-5\">
                        Sabado<br><p id=\"S\" class=\"nobottommargin cabecera-dia-fecha\">Feb 26, 2016</p>
                        <input id=\"radioSabado\" type='radio' name='diaVistaDetallada' value='5' class=\"Sábado radio-style\"><label for=\"radioSabado\" class=\"radio-style-3-label radio-small\"></label>
                    </th>
                    <th class=\"text-center calendario-header columna-dia-cabecera dia-6\">
                        Domingo<br><p id=\"D\" class=\"nobottommargin cabecera-dia-fecha\">Feb 27, 2016</p>
                        <input id=\"radioDomingo\" type='radio' name='diaVistaDetallada' value='6' class=\"Domingo radio-style\"><label for=\"radioDomingo\" class=\"radio-style-3-label radio-small\"></label>
                    </th>
                    
                </tr>
                ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(8, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 171
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ":00\"> ";
            // line 172
            echo "                    <td rowspan=\"2\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ":00</td>
                    <td class=\"celda_horario celda0 Lunes\">a</td>
                    <td class=\"celda_horario celda1 Martes\"></td>
                    <td class=\"celda_horario celda2 Miércoles\"></td>
                    <td class=\"celda_horario celda3 Jueves\"></td>
                    <td class=\"celda_horario celda4 Viernes\"></td>
                    <td class=\"celda_horario celda5 Sábado\"></td>
                    <td class=\"celda_horario celda6 Domingo\"></td>
                    
                </tr>
                <tr class=\"";
            // line 182
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ":30\">
                    <td class=\"celda_horario celda0 Lunes\">a</td>
                    <td class=\"celda_horario celda1 Martes\"></td>
                    <td class=\"celda_horario celda2 Miércoles\"></td>
                    <td class=\"celda_horario celda3 Jueves\"></td>
                    <td class=\"celda_horario celda4 Viernes\"></td>
                    <td class=\"celda_horario celda5 Sábado\"></td>
                    <td class=\"celda_horario celda6 Dómingo\"></td>                 
                </tr>            
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "            </tbody>
        </table>
         
    </div>
            
            <div class=\"vistaDetallada col_one_fifth center overflow\" >
                
                <h4 class=\"nobottommargin\"> Vista detallada </h4>
                <p class = \"nobottommargin diaVistaDetallada\"> </p>
                <table border=\"1\" class=\"vistaDetalladaTabla nobottommargin\">
                    <tr>
                        <th class=\"calendario-header wc-time-column-header\"></th>
                        
                        ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recursos"]) ? $context["recursos"] : $this->getContext($context, "recursos")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["recurso"]) {
            // line 206
            echo "                            <th class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "                        
                    </tr>
                    <tbody>
                        ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(8, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 211
            echo "                        <tr class=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ":00\"> ";
            // line 212
            echo "                            <td rowspan=\"2\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ":00</td>
                            ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recursos"]) ? $context["recursos"] : $this->getContext($context, "recursos")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["recurso"]) {
                // line 214
                echo "                                <td class=\"celda_vistaDetallada ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"></td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurso'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "  
                        </tr>
                        <tr class=\"";
            // line 217
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ":30\">
                            ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recursos"]) ? $context["recursos"] : $this->getContext($context, "recursos")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["recurso"]) {
                // line 219
                echo "                                <td class=\"celda_vistaDetallada ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"></td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurso'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "  
                        </tr>            
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "                    </tbody>
                </table>

            </div>
            <div class=\"col_two_fifth col_last center\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"><h4 class=\"nobottommargin\">Recursos</h4></div>
                    <div class=\"panel-body\">
                        <ol class=\"recursos nobottommargin\">
                        ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recursos"]) ? $context["recursos"] : $this->getContext($context, "recursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["recurso"]) {
            // line 233
            echo "                            <li class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "club", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "cancha", array()), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "                        </ol>

                        ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recursos"]) ? $context["recursos"] : $this->getContext($context, "recursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["recurso"]) {
            // line 238
            echo "                            <div id=\"recurso";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "id", array()), "html", null, true);
            echo "\" style=\"display: none;\">
                                <p class=\"horarioLunes\"> ";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "horarioLunes", array()), "html", null, true);
            echo " </p>
                                <p class=\"horarioMartes\"> ";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "horarioMartes", array()), "html", null, true);
            echo " </p>
                                <p class=\"horarioMiércoles\"> ";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "horarioMiercoles", array()), "html", null, true);
            echo " </p>
                                <p class=\"horarioJueves\"> ";
            // line 242
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "horarioJueves", array()), "html", null, true);
            echo " </p>
                                <p class=\"horarioViernes\"> ";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "horarioViernes", array()), "html", null, true);
            echo " </p>
                                <p class=\"horarioSábado\"> ";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "horarioSabado", array()), "html", null, true);
            echo " </p>
                                <p class=\"horarioDomingo\"> ";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "horarioDomingo", array()), "html", null, true);
            echo " </p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "                    </div>
                </div>
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"><h4 class=\"nobottommargin\">Partidos</h4></div>
                    <div class=\"panel-body\">
                        <table id=\"listaPartidos\" class=\"table\">
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th>Pareja 1</th>
                                    <th>Pareja 2</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Recurso</th>
                                </tr>
 
                                ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            // line 265
            echo "                        <tr class=\"partido";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partido"], "id", array()), "html", null, true);
            echo " partido\">  
                            <td class=\"indicePartido\"> ";
            // line 266
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " </td>
                            <td class=\"nombrePareja1\"> ";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "jugador", array()), "username", array()), "html", null, true);
            echo " </td>
                            <td class=\"nombrePareja2\"> ";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "jugador", array()), "username", array()), "html", null, true);
            echo " </td>
                            <td class=\"fechaPartido\"></td>
                            <td class=\"horaPartido\"></td>
                            <td class=\"recursoPartido\"></td>
                            
                            <td class=\"preferenciaParejas\" style=\"display: none;\"> 
                                <p class=\"preferenciaJugador1Lunes\"> ";
            // line 274
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "horarioLunes", array()), "html", null, true);
            echo " </p>
                                <p class=\"preferenciaJugador1Martes\"> ";
            // line 275
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "horarioMartes", array()), "html", null, true);
            echo " </p>
                                <p class=\"preferenciaJugador1Miércoles\"> ";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "horarioMiercoles", array()), "html", null, true);
            echo " </p>
                                <p class=\"preferenciaJugador1Jueves\"> ";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "horarioJueves", array()), "html", null, true);
            echo " </p>
                                <p class=\"preferenciaJugador1Viernes\"> ";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "horarioViernes", array()), "html", null, true);
            echo " </p>
                                <p class=\"preferenciaJugador1Sábado\"> ";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "horarioSabado", array()), "html", null, true);
            echo " </p>
                                <p class=\"preferenciaJugador1Domingo\"> ";
            // line 280
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "horarioDomingo", array()), "html", null, true);
            echo " </p>
                                
                                <p class=\"preferenciaJugador2Lunes\"> ";
            // line 282
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "horarioLunes", array()), "html", null, true);
            echo " </p>
                                <p class=\"preferenciaJugador2Martes\"> ";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "horarioMartes", array()), "html", null, true);
            echo " </p>
                                <p class=\"preferenciaJugador2Miércoles\"> ";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "horarioMiercoles", array()), "html", null, true);
            echo " </p>
                                <p class=\"preferenciaJugador2Jueves\"> ";
            // line 285
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "horarioJueves", array()), "html", null, true);
            echo " </p>
                                <p class=\"preferenciaJugador2Viernes\"> ";
            // line 286
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "horarioViernes", array()), "html", null, true);
            echo " </p>
                                <p class=\"preferenciaJugador2Sábado\"> ";
            // line 287
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "horarioSabado", array()), "html", null, true);
            echo " </p>
                                <p class=\"preferenciaJugador2Domingo\"> ";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "horarioDomingo", array()), "html", null, true);
            echo " </p>
                            </td>
                        </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
    
</div>
    
    <script>
        var inicioSemana;
        var diaVistaDetallada;
        
        (function ( \$ ) {            
            \$.fn.siguienteCelda = function( )
            {
                indexCelda = \$(this).attr(\"class\").split(' ')[1];
                return \$(this).closest('tr').next().children(\".\"+indexCelda);
            };        
            \$.fn.hacerDraggable = function(idPartido) {
                this.draggable({
                    appendTo: \"body\",
                    helper: function(event, ui) {
                        var foo = \$('<div style=\"height:60px;width:20px;background-color:#ffeb72;\"></div>'); 
                        return foo;
                    },
                    cursorAt: { top: 0, left: 0},
                    delay: 200,
                    start: function(event, ui) {
                            

                        var pref1 = \$(\"#listaPartidos\").find(\".\"+idPartido).find(\".preferenciaJugador1\"+diaVistaDetallada.format(\"dddd\")).text();  
                        var pref2 = \$(\"#listaPartidos\").find(\".\"+idPartido).find(\".preferenciaJugador2\"+diaVistaDetallada.format(\"dddd\")).text();  
        
                        ";
        // line 329
        echo "
                        interseccion = buscarInterseccion(pref1, pref2);

                        var i;
                        //Para cada rango horario
                        for(i = 0; i < interseccion.length; i++) {

                            //Obtenemos el limite inferior y superior
                            var rangoInf = interseccion[i].start; 
                            var rangoSup = interseccion[i].end; 

                            while(rangoInf.isBefore(rangoSup)){
                                rangoString = rangoInf.format(\"H:mm\");        
                            //Buscamos la fila en la que la pareja ha elegido jugar

                                //       clase tabla    > tbody >          clase TR (hora)                 >  celda de recurso
                                filaHora = \$(\".vistaDetalladaTabla > tbody > .\" + rangoString.replace(\":\", \"\\\\:\") + \" > .celda_vistaDetallada\" ).addClass(\"preferenciaPareja\");
                                //Seguimos recorriendo las celdas del rango
                                rangoInf.add(30, 'm');
                            }
                        }

                    },
                    stop: function(event, ui) {                    
                        \$(\".vistaDetalladaTabla > tbody > tr > td\").removeClass(\"preferenciaPareja\");
                    }
                }); 
            };
            \$.fn.hacerDroppableVD = function( ) {
                this.droppable({
                    accept: \".partido\",
                    activeClass: \"ui-state-highlight\",
                    hoverClass: \"hover\",
                    tolerance: \"pointer\",
                    drop: function( event, ui ){ 
                        
                          //Comprobar las dos casillas inferiores antes de soltar el evento   
                        if(\$(this).siguienteCelda().hasClass(\"ui-droppable\") && \$(this).siguienteCelda().siguienteCelda().hasClass(\"ui-droppable\")){
                            idPartido = ui.draggable.attr(\"class\").split(' ')[0];
                            var fechaPartidoAnterior = moment(\$(\"#listaPartidos\").find(\".\"+idPartido).find(\".fechaPartido\").text(), \"D/M/YYYY\");                            
                            var horaPartidoAnterior = moment(\$(\"#listaPartidos\").find(\".\"+idPartido).find(\".horaPartido\").text(), \"H:mm\");
                            if( fechaPartidoAnterior.isValid() && moment(inicioSemana).isSame(moment(fechaPartidoAnterior).weekday(0), 'day')){                                                                
                                eliminarPartidoCalendario(fechaPartidoAnterior.format('dddd'), horaPartidoAnterior);
                            }
                            //Comprobar si el partido ya existía en el mismo día para eliminarlo de la vista detallada
                            
                            var casillaAnterior = \$(\".vistaDetalladaTabla\").find(\".\"+idPartido).closest('td');
                            if(casillaAnterior.length){
                                //Si ya existía lo eliminamos de la tabla
                                casillaAnterior.siguienteCelda().siguienteCelda().hacerDroppableVD();                
                                casillaAnterior.siguienteCelda().hacerDroppableVD();
                                casillaAnterior.hacerDroppableVD(); 
                                casillaAnterior.empty();    
                            }
                            //Hay hueco en la celda para meter el partido
                            var filaPartido = \$(\"#listaPartidos\").find(\".\"+ui.draggable.attr(\"class\").split(' ')[0]);
                            var \$divPartido = \$(\"<div>\");
                            var cellPos = \$(this).position();
                            \$divPartido.addClass(ui.draggable.attr(\"class\").split(' ')[0]+' partido');
                                                        
                            \$divPartido.css({
                               position:'absolute',
                               top: cellPos.top+1,
                               left: cellPos.left+1,
                               backgroundColor: '#ffeb72',
                               width: \$(this).width()+1,
                               height: \$(this).height()*3+5
                            });
                            
                            \$divPartido.append('<p>'+filaPartido.find(\".indicePartido\").text()+' <i class=\"icon-line-cross eliminarPartido\"></i></p>');
                            
                            \$(this).append(\$divPartido);
                            \$(this).droppable('destroy');
                            \$(this).find('div').hacerDraggable(idPartido);
                             \$(this).siguienteCelda().droppable('destroy');
                            \$(this).siguienteCelda().siguienteCelda().droppable('destroy');
                            
                            \$(this).find('.eliminarPartido').click(function() {
                                
                                \$(this).closest('td').siguienteCelda().siguienteCelda().hacerDroppableVD();
                                \$(this).closest('td').siguienteCelda().hacerDroppableVD();
                                \$(this).closest('td').hacerDroppableVD(); 
                                var hora = moment(\$(this).closest('tr').attr(\"class\"), \"H:mm\");
                                \$(this).closest('td').empty();
                                filaPartido.find(\".fechaPartido\").empty();                                             
                                filaPartido.find(\".horaPartido\").empty();
                                filaPartido.find(\".recursoPartido\").empty();
                                filaPartido.removeClass(\"success\");
                                //Eliminamos la info del partido del calendario general
                                eliminarPartidoCalendario(diaVistaDetallada.format(\"dddd\"), hora);
                                
                            });
                            //Actualizamos la información en la tabla para dejar asociada la hora,recurso y fecha al partido
                            filaPartido.find(\".fechaPartido\").text(diaVistaDetallada.format(\"D/M/YYYY\"));
                            filaPartido.find(\".horaPartido\").text(\$(this).closest('tr').attr(\"class\"));
                            filaPartido.find(\".recursoPartido\").text(\$(this).attr(\"class\").split(' ')[1]);
                            filaPartido.addClass(\"success\");
                            añadirPartidoCalendario(diaVistaDetallada.format(\"dddd\"), moment(\$(this).closest('tr').attr(\"class\"), \"H:mm\"))
                            
                        }                                         
                    }                   
                });
            };
            
            
        }( jQuery ));
        
        function añadirPartidoCalendario(diaPartido, horaPartido){
            //Recorremos las tres celdas que ocupa el partido
            var i;
            for(i = 0; i < 3; i++){
                //Obtenemos la celda en el calendario general
                celda = \$(\".calendario\").find(\".\" + horaPartido.format('H:mm').replace(\":\", \"\\\\:\")).find(\".\" + diaPartido);
                celda.removeClass(\"celdaLibre\");
                celda.removeClass(\"celdaConPartidos\");
                partidos = celda.data(\"partidos\");
                //Actualizamos la clase de la celda dependiendo de la información actualizada
                if(typeof partidos === \"undefined\"){
                    celda.data(\"partidos\", 1);
                    partidos = 1;
                } else {                    
                    celda.data(\"partidos\", ++partidos);
                }
                
                var recursosLibres = celda.data(\"recursosLibres\");

                if(recursosLibres > partidos) {                    
                    celda.addClass(\"celdaConPartidos\");
                }else{
                    celda.addClass(\"celdaOcupada\");
                }
                horaPartido.add(30, 'm');
            }
        }
        
        function eliminarPartidoCalendario(diaPartido, horaPartido){
            //Recorremos las tres celdas que ocupa el partido
            for(i = 0; i < 3; i++){
                //Obtenemos la celda en el calendario general
                celda = \$(\".calendario\").find(\".\" + horaPartido.format('H:mm').replace(\":\", \"\\\\:\")).find(\".\" + diaPartido);
                celda.removeClass(\"celdaOcupada\");
                celda.removeClass(\"celdaConPartidos\");
                partidos = celda.data(\"partidos\")-1;                
                //Actualizamos la clase de la celda dependiendo de la información actualizada
                if(partidos === 0){                    
                    celda.removeData(\"partidos\");
                    celda.addClass(\"celdaLibre\");
                } else {
                    celda.data(\"partidos\", partidos);
                    celda.addClass(\"celdaConPartidos\");
                }
                horaPartido.add(30, 'm');
            }
        }
        
        /**
         * Actualiza el calendario cuando se cambie de semana o para mostrarlo inicialmente
         * 
         * @returns {undefined}
         */
        function actualizarCalendario() {
            finSemana = moment(inicioSemana).endOf('week');
            \$(\"#calendario-head-fecha\").text(inicioSemana.format(\"ll\") + \"/\" + finSemana.format(\"ll\"));

            var dia = moment(inicioSemana);
";
        // line 495
        echo "            //Actualizamos la cabecera del calendario para que coincida con los días de la semana que estamos viendo
            \$(\".cabecera-dia-fecha\").each(function() {
                \$(this).text(dia.format(\"l\"));
                if(dia.startOf('day').isSame(moment().startOf('day'))) { ";
        // line 499
        echo "                    \$(this).parent().addClass(\"hoy\");
                } else {
                    \$(this).parent().removeClass(\"hoy\");
                }

                dia = dia.add(1, \"days\");
            });
            
            \$('.calendario .celda_horario:not(:empty)').empty();   
            actualizarDisponibilidad();
        }
        
        /**
        * A cada uno de las celdas sobre las que se puede soltar un recurso se le añade dicha funcionalidad

         * @param int index: Nos dirá sobre que día de la semana nos encontramos
         * @param string horario: El horario del recurso que estamos actualizando
         * @returns {undefined}         */
        function asignarDisponibilidadRecurso( index, horario ){
            //Dividimos la ristra para tener cada uno de los rangos por separado
            var horas = horario.substring(1).split(\", \"); 
            
            var i;
            for(i = 0; i < horas.length; i++) {
                rango = horas[i].split(\"-\");
                //Obtenemos el limite inferior y superior del rango
                var rangoInf = moment(rango[0], \"H:mm\");
                var rangoSup = moment(rango[1], \"H:mm\");

                while(rangoInf.isBefore(rangoSup)){
                    rangoString = rangoInf.format(\"H:mm\");
                    //Buscamos la celda dentro del rango y le añadimos la funcionalidad de poder mover eventos a esta casilla
                     \$(\".calendario > tbody > .\" + rangoString.replace(\":\", \"\\\\:\") + \" > .celda\" + index).hacerDroppable(index);
                    rangoInf.add(30, 'm'); //Seguimos recorriendo las celdas del rango
                }
            }
        }
        
        /**
        * Al cambiar de recurso, se actualiza sobre que celdas se puede soltar un evento recorriendo el rango de horas

         * @returns {undefined}         */
        function actualizarDisponibilidad() {
            
            \$(\".calendario\").find(\".celda_horario\").removeData();
            \$(\".calendario\").find(\".celdaLibre\").removeClass(\"celdaLibre\");
            \$(\".calendario\").find(\".celdaOcupada\").removeClass(\"celdaOcupada\");
            \$(\".calendario\").find(\".celdaConPartidos\").removeClass(\"celdaConPartidos\");
            
            //Recorremos cada uno de los recursos disponibles para asignar disponibilidad
            \$(\".recursos\").find('li').each(function(){
               var recursoId = \$(this).attr('class');
               //Recorremos el horario de cada día de cada recurso
               \$(\"#recurso\"+recursoId+\" > p\").each(function( index ) {
                   var horario = \$(this).text();
                   var horas = horario.substring(1).split(\", \"); 
                   
                   var i;
                   for(i = 0; i < horas.length; i++) {
                        rango = horas[i].split(\"-\");
                        //Obtenemos el limite inferior y superior del rango
                        var rangoInf = moment(rango[0], \"H:mm\");
                        var rangoSup = moment(rango[1], \"H:mm\");
                        while(rangoInf.isBefore(rangoSup)){
                            rangoString = rangoInf.format(\"H:mm\");
                            //Buscamos la celda dentro del rango y le añadimos la funcionalidad de poder mover eventos a esta casilla
                            var celda = \$(\".calendario > tbody > .\" + rangoString.replace(\":\", \"\\\\:\") + \" > .celda\" + index);
                            recursosLibres = celda.data(\"recursosLibres\");
                            if(typeof recursosLibres === \"undefined\"){
                                celda.data(\"recursosLibres\", 1);
                            } else {
                                celda.data(\"recursosLibres\", recursosLibres+1);
                            }
                            rangoInf.add(30, 'm'); //Seguimos recorriendo las celdas del rango
                        }                        
                   }
               });
            });
            
            //Recorremos los partidos asignados para comprobar los recursos ocupados
            \$(\"#listaPartidos\").find(\".partido\").each(function() {
                var fechaPartido = \$(this).find(\".fechaPartido\").text();
                //Comprobamos si el partido se encuentra en la semana actual                 
                if( moment(inicioSemana).isSame(moment(fechaPartido, \"D/M/YYYY\").weekday(0), 'day')){
                    var horaPartido = moment(\$(this).find(\".horaPartido\").text(), 'H:mm');
                    var dia = moment(fechaPartido, \"D-M-YYYY\").format(\"dddd\");
                    var i;
                    for(i = 0; i < 3; i++){
                        var celda = \$(\".calendario > tbody > .\" + horaPartido.format('H:mm').replace(\":\", \"\\\\:\") + \" > .\" + dia);
                        partidos = celda.data(\"partidos\");
                        if(typeof partidos === \"undefined\"){
                            celda.data(\"partidos\", 1);
                        } else {
                            celda.data(\"partidos\", partidos+1);
                        }
                        horaPartido.add(30, 'm');
                    }
                }
                
            });
            //Añadimos las clases necesarias para la visualización CSS
            \$(\".calendario\").find(\".celda_horario\").each(function() {
                var recursosLibres = \$(this).data(\"recursosLibres\");
                if(typeof recursosLibres !== \"undefined\"){
                    var numPartidos = \$(this).data(\"partidos\");
                    if(typeof numPartidos !== \"undefined\"){
                        if (numPartidos === recursosLibres) {
                            \$(this).addClass(\"celdaOcupada\");
                        } else {
                            \$(this).addClass(\"celdaConPartidos\");
                        }
                    } else {
                        \$(this).addClass(\"celdaLibre\");
                    }
                }
            });
           
            
            

        }
        
        function actualizarDisponibilidadDetallada() {
            //Actualizamos la cabecera para mostrar la fecha correcta
            \$(\".vistaDetallada > .diaVistaDetallada\").html(diaVistaDetallada.format(\"dddd<br>D/M/YYYY\"));
            //Destruimos la disponibilidad mostrada anteriormente en caso de que exista
            \$(\".vistaDetalladaTabla .ui-droppable\").droppable('destroy');
            //Borramos los partidos que se puedan encontrar en la vista detallada
            \$('.vistaDetalladaTabla .celda_vistaDetallada:not(:empty)').empty();
            ";
        // line 628
        echo "   
            \$(\".recursos > li\").each(function(index) {  
                //Obtenemos el horario del recurso y del día que se encuentra señalado
                var horarioRecurso = \$(\"#recurso\"+\$(this).attr(\"class\")+\" > .horario\"+ diaVistaDetallada.format(\"dddd\") ).text();
                //Dividimos los distintos rangos horarios dentro del día
                var rangosHorarios = horarioRecurso.substring(1).split(\", \"); 
                var i;
                //Para cada rango horario
                for(i = 0; i < rangosHorarios.length; i++) {
                    rango = rangosHorarios[i].split(\"-\");
                    //Obtenemos el limite inferior y superior
                    var rangoInf = moment(rango[0], \"H:mm\");
                    var rangoSup = moment(rango[1], \"H:mm\");
                    while(rangoInf.isBefore(rangoSup)){
                        rangoString = rangoInf.format(\"H:mm\");                        
                        //Buscamos la celda dentro del rango y le añadimos la funcionalidad de poder mover eventos a esta casilla
                         
                        //       clase tabla    > tbody >          clase TR (hora)                 >  celda de recurso
                        \$(\".vistaDetalladaTabla > tbody > .\" + rangoString.replace(\":\", \"\\\\:\") + \" > .\" + (index+1)).hacerDroppableVD();
                        //Seguimos recorriendo las celdas del rango
                        rangoInf.add(30, 'm');
                    }
                }
                index++;
            });
            
            //Buscamos si hay algún partido asignado al día detallado
            \$(\"#listaPartidos .partido\").each(function(index) {
                
                if(\$(this).find(\".fechaPartido\").text() === diaVistaDetallada.format(\"D/M/YYYY\")) {

                    var horaPartido = \$(this).find(\".horaPartido\").text().replace(\":\", \"\\\\:\");
                    var recursoPartido = \$(this).find(\".recursoPartido\").text();
                    var celdaPartido = \$(\".vistaDetalladaTabla > tbody > .\" + horaPartido + \" > .\" + recursoPartido);
                    var indicePartido = \$(this).find(\".indicePartido\").text();
                           
            //////////////////////////
            
                    var \$divPartido = \$(\"<div>\");
                    var cellPos = celdaPartido.position();
                    \$divPartido.addClass(\$(this).attr(\"class\").split(' ')[0]+' partido');
                                                       
                    \$divPartido.css({
                       position:'absolute',
                       top: cellPos.top+1,
                       left: cellPos.left+1,
                       backgroundColor: '#ffeb72',
                       width: celdaPartido.width()+1,
                       height: celdaPartido.height()*3+5
                    });
                            
                    \$divPartido.append('<p>'+indicePartido+' <i class=\"icon-line-cross eliminarPartido\"></i></p>');
                            
                    celdaPartido.append(\$divPartido);

                    celdaPartido.droppable('destroy');
                    
                    celdaPartido.find('div').hacerDraggable(\$(this).attr(\"class\").split(' ')[0]);
                            
                    celdaPartido.siguienteCelda().droppable('destroy');
                    celdaPartido.siguienteCelda().siguienteCelda().droppable('destroy');
                            
                    celdaPartido.find('.eliminarPartido').click(function() {
                        var filaPartido = \$(\"#listaPartidos .\" + \$(this).closest('div').attr(\"class\").split(' ')[0]); 
                        \$(this).closest('td').siguienteCelda().siguienteCelda().hacerDroppableVD();
                        \$(this).closest('td').siguienteCelda().hacerDroppableVD();
                        \$(this).closest('td').hacerDroppableVD(); 

                        \$(this).closest('td').empty();
                        filaPartido.find(\".fechaPartido\").empty();                                             
                        filaPartido.find(\".horaPartido\").empty();
                        filaPartido.find(\".recursoPartido\").empty();
                    });
            
            ////////////////////////////
            
               
                }
               
            });
            
        }
        
        function buscarInterseccion ( pref1, pref2){
             //Dividimos los distintos rangos horarios dentro del día
            var rangos1 = pref1.substring(1).split(\", \"); 
            var rangos2 = pref2.substring(1).split(\", \"); 
            var rangosMoment1  = [];
            var rangosMoment2  = [];
            
            var i, j;            
            for(i = 0; i < rangos1.length; i++) {
                rango = rangos1[i].split(\"-\");
                //Obtenemos el limite inferior y superior
                var inicio = moment(rango[0], \"H:mm\");
                var fin = moment(rango[1], \"H:mm\");
                rangosMoment1[i] = moment.range(inicio, fin)
            }
            for(i = 0; i < rangos2.length; i++) {
                rango = rangos2[i].split(\"-\");
                //Obtenemos el limite inferior y superior
                var inicio = moment(rango[0], \"H:mm\");
                var fin = moment(rango[1], \"H:mm\");
                rangosMoment2[i] = moment.range(inicio, fin)
            }
            var aux = 0;
            var rangosFinales = [];
            for(i = 0; i < rangosMoment1.length; i++){
                
                for(j = 0; j < rangosMoment2.length; j++){
                    nuevoRango = rangosMoment1[i].intersect(rangosMoment2[j]);
                    if(nuevoRango != null){
                        rangosFinales[aux] = nuevoRango;
                        aux++;
                    }
                }
            }
            
            return rangosFinales;            
        }
        
        function autoGenerarHorario(){
            //Dia a partir del cual empezamos a autocolocar partidos (¿¿MAÑANA??))
            
            var dia = moment(\"";
        // line 752
        echo twig_escape_filter($this->env, (isset($context["fechaInicio"]) ? $context["fechaInicio"] : $this->getContext($context, "fechaInicio")), "html", null, true);
        echo "\", \"DD-MM-YYYY\");
            var diaFin = moment(\"";
        // line 753
        echo twig_escape_filter($this->env, (isset($context["fechaFin"]) ? $context["fechaFin"] : $this->getContext($context, "fechaFin")), "html", null, true);
        echo "\", \"DD-MM-YYYY\");
            var diasJornada = diaFin.diff(dia, 'days');
            var partidos = [];
            \$(\"#listaPartidos\").find(\".partido\").each( function( index ) {
                partidos.push(\$(this).attr(\"class\").split(' ')[0]);
            });                        
            var partidosOrdenados = [];            
            //Recorremos todos los partidos que se van a jugar en dicha jornada para ordenarlos de menor a mayor disponibilidad
            for(j = 0; j < partidos.length; j++){
                partidosOrdenados[j] = [];
                partidosOrdenados[j][0] = partidos[j];
                partidosOrdenados[j][1] = 0;                
                
                var diaSemana = moment().day(\"Lunes\");
                //Para cada partido, obtenemos en total como de disponible se encuentra la pareja
                //Almacenamos la disponibilidad de cada día de la pareja
                do {
                    diaRistra = diaSemana.format(\"dddd\");
                    var p1 = \$(\"#listaPartidos\").find(\".\"+partidos[j]).find(\".preferenciaJugador1\"+diaRistra).text();  
                    var p2 = \$(\"#listaPartidos\").find(\".\"+partidos[j]).find(\".preferenciaJugador2\"+diaRistra).text();  
                    //Cruzamos la preferencia de las parejas involucradas en el partido
                    prefPareja = buscarInterseccion(p1, p2);                    
                    var minutosDisponibles = 0;
                    for(i = 0; i < prefPareja.length; i++){
                        minutosDisponibles = minutosDisponibles + prefPareja[i].diff('minutes');
                    }
                    partidosOrdenados[j][1] += minutosDisponibles/30;                                        
                    diaSemana.add(1, \"days\");                    
                } while(diaRistra !== \"Domingo\");
                
            }
            //Ordenamos los partidos de disponibilidad más restrictiva a menos restrictiva
            partidosOrdenados.sort(function(a,b){
                if (a[0] === b[0]) {
                    return 0;
                }
                else {
                    return (a[0] > b[0]) ? -1 : 1;
                }
            }); 
            
            //Almacenamos los rangos disponibles en cada recurso y cada día disponible
            var rangosRecursos = [];
            auxDia = dia;
            for(var i = 0; i < diasJornada; i++){
                rangosRecursos[i] = [];
                diaRistra = auxDia.format(\"dddd\");
                \$(\".recursos\").find(\"li\").each( function( index ) {      
                    rangosRecursos[i][index] = stringToRango(\$(\"#recurso\" + \$(this).attr(\"class\") + \" > .horario\" + diaRistra).text());
                });
                
                auxDia.add(1, \"days\");                
            } 
                        
            //Tomando los partidos por orden de restricción, se van colocando
            
            
            ";
        // line 811
        echo "            for(partidoActual = 0; partidoActual < partidosOrdenados.length; partidoActual++){
                //Recorremos día a día intentando colocar el partido
                var diaActual = 0;
                var dia = moment(\"";
        // line 814
        echo twig_escape_filter($this->env, (isset($context["fechaInicio"]) ? $context["fechaInicio"] : $this->getContext($context, "fechaInicio")), "html", null, true);
        echo "\", \"DD-MM-YYYY\");
                var control = true;
                while((diaActual < diasJornada) && control){
                    diaRistra = dia.format(\"dddd\");                    
                    //Recorremos recurso a recurso de ese día intentando colocar el partido
                    var recursoActual = 0;
                    while((recursoActual < rangosRecursos[diaActual].length) && control ){
                    
                        var p1 = \$(\"#listaPartidos\").find(\".\"+partidosOrdenados[partidoActual][0]).find(\".preferenciaJugador1\"+diaRistra).text();  
                        var p2 = \$(\"#listaPartidos\").find(\".\"+partidosOrdenados[partidoActual][0]).find(\".preferenciaJugador2\"+diaRistra).text();  
                        var prefPareja = buscarInterseccion(p1, p2);                        
                        var disponibilidad = buscarInterseccion(rangoToString(rangosRecursos[diaActual][recursoActual]), rangoToString(prefPareja), true);
                        
                        var i = 0;
                        while((i < disponibilidad.length) && control){
                        ";
        // line 829
        echo "                            
                            if(disponibilidad[i].valueOf() >= 5400000) {                                                                    
                                    //Colocamos partido al inicio del rango
                                    var filaPartido = \$(\"#listaPartidos\").find(\".\"+partidosOrdenados[partidoActual][0]);
                                    filaPartido.find(\".fechaPartido\").text(dia.format(\"D/M/YYYY\"));
                                    filaPartido.find(\".horaPartido\").text(disponibilidad[i].start.format(\"H:mm\"));
                                    filaPartido.find(\".recursoPartido\").text(recursoActual+1);
                                    filaPartido.addClass(\"success\");
                                    
                                    //Modificamos la disponibilidad en el recurso en el que hemos colocado el partido
                                    var rangoInicio = moment(disponibilidad[i].start);
                                    var rangoFin = moment(disponibilidad[i].start).add(90, 'm');
                                    var rangoPartido = moment.range(moment(rangoInicio), moment(rangoFin));
                                    
                                    for(j = 0; j < rangosRecursos[diaActual][recursoActual].length; j++){
                                        //Eliminamos de la disponibilidad del recurso el tiempo cogido para el partido colocado
                                        if(rangoPartido.overlaps(rangosRecursos[diaActual][recursoActual][j])){                                            
                                            rangosRecursos[diaActual][recursoActual][j] = rangosRecursos[diaActual][recursoActual][j].subtract(rangoPartido);
                                            var nuevosRangos = rangosRecursos[diaActual][recursoActual][j].toString().split(\",\");                                            
                                            rangosRecursos[diaActual][recursoActual].splice(j, 1);
                                            if(nuevosRangos[0].length !== 0){
                                                for(k = 0; k < nuevosRangos.length; k++){
                                                    rangosRecursos[diaActual][recursoActual].splice(j + k, 0, moment.range(nuevosRangos[k]));
                                                }                                            
                                            }    
                                        }
                                    }                                                     
                                    
                                    control = false;                                    
                            }
                            i++;
                        
                        }
                        recursoActual++;
                    }
                    diaRistra = dia.add(1, \"days\").format(\"dddd\");
                    diaActual++;
                }
                
            }             
        
        }
        
        function stringToRango(string) {
            if(string.charAt(0) === \" \"){
                var rangos = string.substring(1);
            }
            rangos = rangos.split(\", \");
            rangosMoment = [];
            for(var i = 0; i < rangos.length; i++){
                aux = rangos[i].split(\"-\");
                rangosMoment[i] = moment.range(moment(aux[0], \"H:mm\"), moment(aux[1], \"H:mm\"));
            }
            return rangosMoment;
            

        }
        
        function rangoToString(rangos) {
            var rango = \" \";
            for(var i = 0; i < rangos.length; i++) {
                rango = rango.concat(rangos[i].start.format(\"H:mm\")+\"-\"+rangos[i].end.format(\"H:mm\")+\", \");                
            }
            rango = rango.substring(0, rango.length-2);
            return rango;
        }
        
        \$(function() {
            moment.locale('es');
            //Preguntar si se pueden empezar a poner partidos hoy o a partir de X día
            diaVistaDetallada = moment().add(1, \"days\");            
            inicioSemana = moment(diaVistaDetallada).startOf('week'); 
            autoGenerarHorario();
            \$(\".cal-semanaAnterior\").attr(\"disabled\", true);
            actualizarCalendario();
        
            \$( \"input[name=diaVistaDetallada]:radio.\" + diaVistaDetallada.format(\"dddd\") ).prop(\"checked\", true);
            actualizarDisponibilidadDetallada();
          


            \$('input[name=diaVistaDetallada]:radio').change(function() {
                diaVistaDetallada = moment(inicioSemana).weekday(\$(\"input[name=diaVistaDetallada]:checked\").val());                
                actualizarDisponibilidadDetallada();
            });           
            \$(\".cal-semanaAnterior\").click(function() {
                inicioSemana = inicioSemana.weekday(-7);
                diaVistaDetallada = moment(inicioSemana).weekday(\$(\"input[name=diaVistaDetallada]:checked\").val());                
                if( moment(inicioSemana).isSame(moment().weekday(0), 'day')){
                    \$(\".cal-semanaAnterior\").attr(\"disabled\", true);
                }
                actualizarDisponibilidadDetallada();
                actualizarCalendario();
            });
            \$(\".cal-hoy\").click(function() {
                inicioSemana = moment()";
        // line 924
        echo ".startOf('week');
                diaVistaDetallada = moment()";
        // line 925
        echo ";
                \$(\".cal-semanaAnterior\").attr(\"disabled\", true);
                \$( \"input[name=diaVistaDetallada]:radio.\" + diaVistaDetallada.format(\"dddd\") ).prop(\"checked\", true);
                actualizarDisponibilidadDetallada();
                actualizarCalendario();
            });
            \$(\".cal-proximaSemana\").click(function() {
                inicioSemana.weekday(7);
                diaVistaDetallada = moment(inicioSemana).weekday(\$(\"input[name=diaVistaDetallada]:checked\").val());                
                \$(\".cal-semanaAnterior\").attr(\"disabled\", false);
                actualizarDisponibilidadDetallada();
                actualizarCalendario();
            });
            
            ";
        // line 940
        echo "            \$(\"#listaPartidos .partido\").each(function() {
                idPartido = \$(this).attr(\"class\").split(' ')[0];
                \$(this).hacerDraggable( idPartido );
            });                    
            
            //Hacer el chequeo de que todos los partidos están colocados correctamente
";
        // line 947
        echo "            ";
        // line 956
        echo "            
            \$(\".formCalendario\").submit( function(event) {
";
        // line 959
        echo "                var partidos = '{ \"partidos\" : [';
                 \$(\"#listaPartidos .partido\").each(function() {
                    var idPartido = \$(this).attr(\"class\").split(' ')[0];
                    idPartido = idPartido.replace('partido', '');
                    var fechaPartido = \$(this).find(\".fechaPartido\").text();
                    var horaPartido = \$(this).find(\".horaPartido\").text();
                    var numRecurso = parseInt(\$(this).find(\".recursoPartido\").text()) - 1;                    
                    var recursoPartido = \$(\".recursos\").children().eq(numRecurso).attr('class');
                    alert(recursoPartido);
                    ";
        // line 969
        echo "                    partidos = partidos + '{ \"id\": \"' + idPartido + '\" , \"recurso\":\"' + recursoPartido + '\" , \"fecha\":\"' + fechaPartido + '\" , \"hora\":\"' + horaPartido + '\" },';
                     
                });
                partidos = partidos.slice(0, -1);
                partidos = partidos + \" ]}\"; //Objeto JSON creado para pasarlo a PHP
                \$(this).children('#form_asignacion').val(partidos);
                
            });
            
           
            
        });
    </script>
";
        
        $__internal_4829f482ad08ec361cbae8d11dd93af8b9f970d275c3655b199ad4e700356ff2->leave($__internal_4829f482ad08ec361cbae8d11dd93af8b9f970d275c3655b199ad4e700356ff2_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:generacionHorario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1344 => 969,  1333 => 959,  1329 => 956,  1327 => 947,  1319 => 940,  1303 => 925,  1300 => 924,  1203 => 829,  1185 => 814,  1180 => 811,  1120 => 753,  1116 => 752,  990 => 628,  859 => 499,  854 => 495,  687 => 329,  650 => 292,  632 => 288,  628 => 287,  624 => 286,  620 => 285,  616 => 284,  612 => 283,  608 => 282,  603 => 280,  599 => 279,  595 => 278,  591 => 277,  587 => 276,  583 => 275,  579 => 274,  570 => 268,  566 => 267,  562 => 266,  557 => 265,  540 => 264,  522 => 248,  513 => 245,  509 => 244,  505 => 243,  501 => 242,  497 => 241,  493 => 240,  489 => 239,  484 => 238,  480 => 237,  476 => 235,  463 => 233,  459 => 232,  448 => 223,  440 => 220,  423 => 219,  406 => 218,  402 => 217,  398 => 215,  381 => 214,  364 => 213,  359 => 212,  355 => 211,  351 => 210,  346 => 207,  327 => 206,  310 => 205,  295 => 192,  279 => 182,  265 => 172,  261 => 171,  257 => 170,  213 => 129,  209 => 128,  205 => 127,  182 => 111,  173 => 108,  169 => 107,  161 => 106,  109 => 59,  68 => 19,  55 => 7,  49 => 6,  37 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block title %}Competicion{% endblock %}*/
/* */
/* {% block estilo %}*/
/*     <style>*/
/*         p {*/
/*             font-size: 11px;*/
/*         }*/
/*         */
/*         .overflow {*/
/*             overflow-x: scroll;*/
/*         }*/
/*         */
/*         .calendario {*/
/*             border: 1px solid black;*/
/*             {#text-align: center;#}*/
/*             table-layout: fixed;*/
/*         }*/
/*         .calendario-header {*/
/*             font-size: 11px;*/
/*         }*/
/*     */
/*         .wc-time-column-header {*/
/*             border: 1px solid black;*/
/*             width: 45px;*/
/*         }*/
/*        */
/*         .wc-day-column-header {*/
/*             border: 1px solid black;*/
/*             width: 120px;*/
/*         }*/
/*        */
/*         .wc-scrollbar-shim {*/
/*             border: 1px solid black;*/
/*             width: 20px;*/
/*         }*/
/*         */
/*         .ui-droppable {*/
/*             background-color: #AEE239;*/
/*         }*/
/*         */
/*         .preferenciaPareja {*/
/*             background-color: #fcf8e3;*/
/*         }*/
/*         */
/*         .ui-droppable.preferenciaPareja { background-color: #46a310; }*/
/*         */
/*         .celda_horario {*/
/*             height: 20px;            */
/*         }*/
/*         */
/*         .vistaDetalladaTabla {*/
/*             border: 1px solid black;*/
/*             text-align: center;*/
/*             table-layout: fixed;*/
/*             {#margin: 0 auto;#}*/
/*         }*/
/*         */
/*         .celda_vistaDetallada {*/
/*             width: 20px;*/
/*             height: 20px;*/
/*             font-size: xx-small;*/
/*         }*/
/*         */
/*         .partido {*/
/*             margin-bottom: 0px;*/
/*             background-color: #fcf8e3;*/
/*         }*/
/*         */
/*         .hover {*/
/*             background-color: #CC0000;*/
/*         }*/
/*         */
/*         .celdaOcupada {*/
/*             background-color: #E38686;*/
/*         }*/
/*         */
/*         .celdaLibre {*/
/*             background-color: #AEE239;*/
/*         }*/
/*         */
/*         .celdaConPartidos {*/
/*             background-color:  #ffeb72;*/
/*         }*/
/*         */
/*         .ui-droppable.preferenciaPareja.hover { background-color: #CC0000; }*/
/*         */
/*         .cal-header {            */
/*             background: rgba(235,233,249,1);*/
/*             background: -moz-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 0%, rgba(156,156,156,1) 0%, rgba(193,191,234,1) 100%);*/
/*             background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(235,233,249,1)), color-stop(0%, rgba(216,208,239,1)), color-stop(0%, rgba(156,156,156,1)), color-stop(100%, rgba(193,191,234,1)));*/
/*             background: -webkit-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 0%, rgba(156,156,156,1) 0%, rgba(193,191,234,1) 100%);*/
/*             background: -o-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 0%, rgba(156,156,156,1) 0%, rgba(193,191,234,1) 100%);*/
/*             background: -ms-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 0%, rgba(156,156,156,1) 0%, rgba(193,191,234,1) 100%);*/
/*             background: linear-gradient(to bottom, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 0%, rgba(156,156,156,1) 0%, rgba(193,191,234,1) 100%);*/
/*             filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ebe9f9', endColorstr='#c1bfea', GradientType=0 );*/
/*             padding-top: 20px;*/
/*         }*/
/*         */
/*         */
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block scripts %} */
/*     <script src="{{asset('bundles/stingermomentjs/js/moment-with-locales.min.js')}}"></script>    */
/*     <script src="{{asset('bundles/padelschedulemain/js/moment-range.min.js')}}"></script>    */
/* {% endblock %}*/
/* */
/* {% block content %} */
/*     */
/* */
/* <div class="clearfix calendario ">*/
/*     <div class="cal-header text-center">*/
/*         */
/*         <div class="btn-group inline-block">*/
/*             <button type="button" class="btn btn-primary cal-semanaAnterior"><i class="icon-line-rewind"></i></button>*/
/*             <button type="button" class="btn btn-primary cal-hoy"><i class="icon-home2"></i></button>*/
/*             <button type="button" class="btn btn-primary cal-proximaSemana"><i class="icon-line-fast-forward"></i></button>*/
/*         </div>*/
/*         <h2 class="inline-block nobottommargin">Calendario semanal - </h2>*/
/*         <h2 class="inline-block nobottommargin" id="calendario-head-fecha"></h2>*/
/*         */
/*         */
/* */
/*     {{ form_start(form, {'attr': {'class': 'inline-block formCalendario'}}) }}*/
/*     {{ form_widget(form.send,  {'attr': {'class': 'button button-3d button-small button-rounded button-lime'}, 'label': 'Guardar calendario'}) }}    */
/*     {{ form_end(form) }}*/
/* */
/*     </div>*/
/*     */
/*     */
/*     */
/*     <div class="col_two_fifth overflow">*/
/*         <table border="1" class="calendario nobottommargin" style="width: 100%">*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <th class="calendario-header wc-time-column-header"></th>*/
/*                     <th class="text-center calendario-header columna-dia-cabecera dia-0">*/
/*                         Lunes<br><p id="L" class="nobottommargin cabecera-dia-fecha">Feb 21, 2016</p>*/
/*                         <input id="radioLunes" type='radio' name='diaVistaDetallada' value='0' class="Lunes radio-style"><label for="radioLunes" class="radio-style-3-label radio-small"></label>*/
/*                     </th>*/
/*                     <th class="text-center calendario-header columna-dia-cabecera dia-1">*/
/*                         Martes<br><p id="M" class="nobottommargin cabecera-dia-fecha">Feb 22, 2016</p>*/
/*                         <input id="radioMartes" type='radio' name='diaVistaDetallada' value='1' class="Martes radio-style"><label for="radioMartes" class="radio-style-3-label radio-small"></label>*/
/*                     </th>*/
/*                     <th class="text-center calendario-header columna-dia-cabecera dia-2">*/
/*                         Miércoles<br><p id="X" class="nobottommargin cabecera-dia-fecha">Feb 23, 2016</p>*/
/*                         <input id="radioMiercoles" type='radio' name='diaVistaDetallada' value='2' class="Miércoles radio-style"><label for="radioMiercoles" class="radio-style-3-label radio-small"></label>*/
/*                     </th>*/
/*                     <th class="text-center calendario-header columna-dia-cabecera dia-3">*/
/*                         Jueves<br><p id="J" class="nobottommargin cabecera-dia-fecha">Feb 24, 2016</p>*/
/*                         <input id="radioJueves" type='radio' name='diaVistaDetallada' value='3' class="Jueves radio-style"><label for="radioJueves" class="radio-style-3-label radio-small"></label>*/
/*                     </th>*/
/*                     <th class="text-center calendario-header columna-dia-cabecera dia-4">*/
/*                         Viernes<br><p id="V" class="nobottommargin cabecera-dia-fecha">Feb 25, 2016</p>*/
/*                         <input id="radioViernes" type='radio' name='diaVistaDetallada' value='4' class="Viernes radio-style"><label for="radioViernes" class="radio-style-3-label radio-small"></label>*/
/*                     </th>*/
/*                     <th class="text-center calendario-header columna-dia-cabecera dia-5">*/
/*                         Sabado<br><p id="S" class="nobottommargin cabecera-dia-fecha">Feb 26, 2016</p>*/
/*                         <input id="radioSabado" type='radio' name='diaVistaDetallada' value='5' class="Sábado radio-style"><label for="radioSabado" class="radio-style-3-label radio-small"></label>*/
/*                     </th>*/
/*                     <th class="text-center calendario-header columna-dia-cabecera dia-6">*/
/*                         Domingo<br><p id="D" class="nobottommargin cabecera-dia-fecha">Feb 27, 2016</p>*/
/*                         <input id="radioDomingo" type='radio' name='diaVistaDetallada' value='6' class="Domingo radio-style"><label for="radioDomingo" class="radio-style-3-label radio-small"></label>*/
/*                     </th>*/
/*                     */
/*                 </tr>*/
/*                 {% for i in 8..23 %}*/
/*                 <tr class="{{i}}:00"> {#//Comprobar si se puede añadir el rowspan solo si es par, se evita  doble fila#}*/
/*                     <td rowspan="2">{{i}}:00</td>*/
/*                     <td class="celda_horario celda0 Lunes">a</td>*/
/*                     <td class="celda_horario celda1 Martes"></td>*/
/*                     <td class="celda_horario celda2 Miércoles"></td>*/
/*                     <td class="celda_horario celda3 Jueves"></td>*/
/*                     <td class="celda_horario celda4 Viernes"></td>*/
/*                     <td class="celda_horario celda5 Sábado"></td>*/
/*                     <td class="celda_horario celda6 Domingo"></td>*/
/*                     */
/*                 </tr>*/
/*                 <tr class="{{i}}:30">*/
/*                     <td class="celda_horario celda0 Lunes">a</td>*/
/*                     <td class="celda_horario celda1 Martes"></td>*/
/*                     <td class="celda_horario celda2 Miércoles"></td>*/
/*                     <td class="celda_horario celda3 Jueves"></td>*/
/*                     <td class="celda_horario celda4 Viernes"></td>*/
/*                     <td class="celda_horario celda5 Sábado"></td>*/
/*                     <td class="celda_horario celda6 Dómingo"></td>                 */
/*                 </tr>            */
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*          */
/*     </div>*/
/*             */
/*             <div class="vistaDetallada col_one_fifth center overflow" >*/
/*                 */
/*                 <h4 class="nobottommargin"> Vista detallada </h4>*/
/*                 <p class = "nobottommargin diaVistaDetallada"> </p>*/
/*                 <table border="1" class="vistaDetalladaTabla nobottommargin">*/
/*                     <tr>*/
/*                         <th class="calendario-header wc-time-column-header"></th>*/
/*                         */
/*                         {% for recurso in recursos %}*/
/*                             <th class="{{recurso.id}}"> {{loop.index}} </th>*/
/*                         {% endfor %}                        */
/*                     </tr>*/
/*                     <tbody>*/
/*                         {% for i in 8..23 %}*/
/*                         <tr class="{{i}}:00"> {#//Comprobar si se puede añadir el rowspan solo si es par, se evita  doble fila#}*/
/*                             <td rowspan="2">{{i}}:00</td>*/
/*                             {% for recurso in recursos %}*/
/*                                 <td class="celda_vistaDetallada {{loop.index}}"></td>*/
/*                             {% endfor %}  */
/*                         </tr>*/
/*                         <tr class="{{i}}:30">*/
/*                             {% for recurso in recursos %}*/
/*                                 <td class="celda_vistaDetallada {{loop.index}}"></td>*/
/*                             {% endfor %}  */
/*                         </tr>            */
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/*             </div>*/
/*             <div class="col_two_fifth col_last center">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading"><h4 class="nobottommargin">Recursos</h4></div>*/
/*                     <div class="panel-body">*/
/*                         <ol class="recursos nobottommargin">*/
/*                         {% for recurso in recursos %}*/
/*                             <li class="{{recurso.id}}"> {{recurso.club}} - {{recurso.cancha}}</li>*/
/*                         {% endfor %}*/
/*                         </ol>*/
/* */
/*                         {% for recurso in recursos %}*/
/*                             <div id="recurso{{recurso.id}}" style="display: none;">*/
/*                                 <p class="horarioLunes"> {{recurso.horarioLunes}} </p>*/
/*                                 <p class="horarioMartes"> {{recurso.horarioMartes}} </p>*/
/*                                 <p class="horarioMiércoles"> {{recurso.horarioMiercoles}} </p>*/
/*                                 <p class="horarioJueves"> {{recurso.horarioJueves}} </p>*/
/*                                 <p class="horarioViernes"> {{recurso.horarioViernes}} </p>*/
/*                                 <p class="horarioSábado"> {{recurso.horarioSabado}} </p>*/
/*                                 <p class="horarioDomingo"> {{recurso.horarioDomingo}} </p>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading"><h4 class="nobottommargin">Partidos</h4></div>*/
/*                     <div class="panel-body">*/
/*                         <table id="listaPartidos" class="table">*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <th></th>*/
/*                                     <th>Pareja 1</th>*/
/*                                     <th>Pareja 2</th>*/
/*                                     <th>Fecha</th>*/
/*                                     <th>Hora</th>*/
/*                                     <th>Recurso</th>*/
/*                                 </tr>*/
/*  */
/*                                 {% for partido in partidos %}*/
/*                         <tr class="partido{{partido.id}} partido">  */
/*                             <td class="indicePartido"> {{loop.index}} </td>*/
/*                             <td class="nombrePareja1"> {{partido.inscripcion1.jugador.username}} </td>*/
/*                             <td class="nombrePareja2"> {{partido.inscripcion2.jugador.username}} </td>*/
/*                             <td class="fechaPartido"></td>*/
/*                             <td class="horaPartido"></td>*/
/*                             <td class="recursoPartido"></td>*/
/*                             */
/*                             <td class="preferenciaParejas" style="display: none;"> */
/*                                 <p class="preferenciaJugador1Lunes"> {{partido.inscripcion1.horarioLunes}} </p>*/
/*                                 <p class="preferenciaJugador1Martes"> {{partido.inscripcion1.horarioMartes}} </p>*/
/*                                 <p class="preferenciaJugador1Miércoles"> {{partido.inscripcion1.horarioMiercoles}} </p>*/
/*                                 <p class="preferenciaJugador1Jueves"> {{partido.inscripcion1.horarioJueves}} </p>*/
/*                                 <p class="preferenciaJugador1Viernes"> {{partido.inscripcion1.horarioViernes}} </p>*/
/*                                 <p class="preferenciaJugador1Sábado"> {{partido.inscripcion1.horarioSabado}} </p>*/
/*                                 <p class="preferenciaJugador1Domingo"> {{partido.inscripcion1.horarioDomingo}} </p>*/
/*                                 */
/*                                 <p class="preferenciaJugador2Lunes"> {{partido.inscripcion2.horarioLunes}} </p>*/
/*                                 <p class="preferenciaJugador2Martes"> {{partido.inscripcion2.horarioMartes}} </p>*/
/*                                 <p class="preferenciaJugador2Miércoles"> {{partido.inscripcion2.horarioMiercoles}} </p>*/
/*                                 <p class="preferenciaJugador2Jueves"> {{partido.inscripcion2.horarioJueves}} </p>*/
/*                                 <p class="preferenciaJugador2Viernes"> {{partido.inscripcion2.horarioViernes}} </p>*/
/*                                 <p class="preferenciaJugador2Sábado"> {{partido.inscripcion2.horarioSabado}} </p>*/
/*                                 <p class="preferenciaJugador2Domingo"> {{partido.inscripcion2.horarioDomingo}} </p>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/* */
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*     */
/*     */
/* </div>*/
/*     */
/*     <script>*/
/*         var inicioSemana;*/
/*         var diaVistaDetallada;*/
/*         */
/*         (function ( $ ) {            */
/*             $.fn.siguienteCelda = function( )*/
/*             {*/
/*                 indexCelda = $(this).attr("class").split(' ')[1];*/
/*                 return $(this).closest('tr').next().children("."+indexCelda);*/
/*             };        */
/*             $.fn.hacerDraggable = function(idPartido) {*/
/*                 this.draggable({*/
/*                     appendTo: "body",*/
/*                     helper: function(event, ui) {*/
/*                         var foo = $('<div style="height:60px;width:20px;background-color:#ffeb72;"></div>'); */
/*                         return foo;*/
/*                     },*/
/*                     cursorAt: { top: 0, left: 0},*/
/*                     delay: 200,*/
/*                     start: function(event, ui) {*/
/*                             */
/* */
/*                         var pref1 = $("#listaPartidos").find("."+idPartido).find(".preferenciaJugador1"+diaVistaDetallada.format("dddd")).text();  */
/*                         var pref2 = $("#listaPartidos").find("."+idPartido).find(".preferenciaJugador2"+diaVistaDetallada.format("dddd")).text();  */
/*         */
/*                         {#var pref1 = $(this).find(".preferenciaJugador1"+diaVistaDetallada.format("dddd")).text();  */
/*                         var pref2 = $(this).find(".preferenciaJugador2"+diaVistaDetallada.format("dddd")).text();  #}*/
/* */
/*                         interseccion = buscarInterseccion(pref1, pref2);*/
/* */
/*                         var i;*/
/*                         //Para cada rango horario*/
/*                         for(i = 0; i < interseccion.length; i++) {*/
/* */
/*                             //Obtenemos el limite inferior y superior*/
/*                             var rangoInf = interseccion[i].start; */
/*                             var rangoSup = interseccion[i].end; */
/* */
/*                             while(rangoInf.isBefore(rangoSup)){*/
/*                                 rangoString = rangoInf.format("H:mm");        */
/*                             //Buscamos la fila en la que la pareja ha elegido jugar*/
/* */
/*                                 //       clase tabla    > tbody >          clase TR (hora)                 >  celda de recurso*/
/*                                 filaHora = $(".vistaDetalladaTabla > tbody > ." + rangoString.replace(":", "\\:") + " > .celda_vistaDetallada" ).addClass("preferenciaPareja");*/
/*                                 //Seguimos recorriendo las celdas del rango*/
/*                                 rangoInf.add(30, 'm');*/
/*                             }*/
/*                         }*/
/* */
/*                     },*/
/*                     stop: function(event, ui) {                    */
/*                         $(".vistaDetalladaTabla > tbody > tr > td").removeClass("preferenciaPareja");*/
/*                     }*/
/*                 }); */
/*             };*/
/*             $.fn.hacerDroppableVD = function( ) {*/
/*                 this.droppable({*/
/*                     accept: ".partido",*/
/*                     activeClass: "ui-state-highlight",*/
/*                     hoverClass: "hover",*/
/*                     tolerance: "pointer",*/
/*                     drop: function( event, ui ){ */
/*                         */
/*                           //Comprobar las dos casillas inferiores antes de soltar el evento   */
/*                         if($(this).siguienteCelda().hasClass("ui-droppable") && $(this).siguienteCelda().siguienteCelda().hasClass("ui-droppable")){*/
/*                             idPartido = ui.draggable.attr("class").split(' ')[0];*/
/*                             var fechaPartidoAnterior = moment($("#listaPartidos").find("."+idPartido).find(".fechaPartido").text(), "D/M/YYYY");                            */
/*                             var horaPartidoAnterior = moment($("#listaPartidos").find("."+idPartido).find(".horaPartido").text(), "H:mm");*/
/*                             if( fechaPartidoAnterior.isValid() && moment(inicioSemana).isSame(moment(fechaPartidoAnterior).weekday(0), 'day')){                                                                */
/*                                 eliminarPartidoCalendario(fechaPartidoAnterior.format('dddd'), horaPartidoAnterior);*/
/*                             }*/
/*                             //Comprobar si el partido ya existía en el mismo día para eliminarlo de la vista detallada*/
/*                             */
/*                             var casillaAnterior = $(".vistaDetalladaTabla").find("."+idPartido).closest('td');*/
/*                             if(casillaAnterior.length){*/
/*                                 //Si ya existía lo eliminamos de la tabla*/
/*                                 casillaAnterior.siguienteCelda().siguienteCelda().hacerDroppableVD();                */
/*                                 casillaAnterior.siguienteCelda().hacerDroppableVD();*/
/*                                 casillaAnterior.hacerDroppableVD(); */
/*                                 casillaAnterior.empty();    */
/*                             }*/
/*                             //Hay hueco en la celda para meter el partido*/
/*                             var filaPartido = $("#listaPartidos").find("."+ui.draggable.attr("class").split(' ')[0]);*/
/*                             var $divPartido = $("<div>");*/
/*                             var cellPos = $(this).position();*/
/*                             $divPartido.addClass(ui.draggable.attr("class").split(' ')[0]+' partido');*/
/*                                                         */
/*                             $divPartido.css({*/
/*                                position:'absolute',*/
/*                                top: cellPos.top+1,*/
/*                                left: cellPos.left+1,*/
/*                                backgroundColor: '#ffeb72',*/
/*                                width: $(this).width()+1,*/
/*                                height: $(this).height()*3+5*/
/*                             });*/
/*                             */
/*                             $divPartido.append('<p>'+filaPartido.find(".indicePartido").text()+' <i class="icon-line-cross eliminarPartido"></i></p>');*/
/*                             */
/*                             $(this).append($divPartido);*/
/*                             $(this).droppable('destroy');*/
/*                             $(this).find('div').hacerDraggable(idPartido);*/
/*                              $(this).siguienteCelda().droppable('destroy');*/
/*                             $(this).siguienteCelda().siguienteCelda().droppable('destroy');*/
/*                             */
/*                             $(this).find('.eliminarPartido').click(function() {*/
/*                                 */
/*                                 $(this).closest('td').siguienteCelda().siguienteCelda().hacerDroppableVD();*/
/*                                 $(this).closest('td').siguienteCelda().hacerDroppableVD();*/
/*                                 $(this).closest('td').hacerDroppableVD(); */
/*                                 var hora = moment($(this).closest('tr').attr("class"), "H:mm");*/
/*                                 $(this).closest('td').empty();*/
/*                                 filaPartido.find(".fechaPartido").empty();                                             */
/*                                 filaPartido.find(".horaPartido").empty();*/
/*                                 filaPartido.find(".recursoPartido").empty();*/
/*                                 filaPartido.removeClass("success");*/
/*                                 //Eliminamos la info del partido del calendario general*/
/*                                 eliminarPartidoCalendario(diaVistaDetallada.format("dddd"), hora);*/
/*                                 */
/*                             });*/
/*                             //Actualizamos la información en la tabla para dejar asociada la hora,recurso y fecha al partido*/
/*                             filaPartido.find(".fechaPartido").text(diaVistaDetallada.format("D/M/YYYY"));*/
/*                             filaPartido.find(".horaPartido").text($(this).closest('tr').attr("class"));*/
/*                             filaPartido.find(".recursoPartido").text($(this).attr("class").split(' ')[1]);*/
/*                             filaPartido.addClass("success");*/
/*                             añadirPartidoCalendario(diaVistaDetallada.format("dddd"), moment($(this).closest('tr').attr("class"), "H:mm"))*/
/*                             */
/*                         }                                         */
/*                     }                   */
/*                 });*/
/*             };*/
/*             */
/*             */
/*         }( jQuery ));*/
/*         */
/*         function añadirPartidoCalendario(diaPartido, horaPartido){*/
/*             //Recorremos las tres celdas que ocupa el partido*/
/*             var i;*/
/*             for(i = 0; i < 3; i++){*/
/*                 //Obtenemos la celda en el calendario general*/
/*                 celda = $(".calendario").find("." + horaPartido.format('H:mm').replace(":", "\\:")).find("." + diaPartido);*/
/*                 celda.removeClass("celdaLibre");*/
/*                 celda.removeClass("celdaConPartidos");*/
/*                 partidos = celda.data("partidos");*/
/*                 //Actualizamos la clase de la celda dependiendo de la información actualizada*/
/*                 if(typeof partidos === "undefined"){*/
/*                     celda.data("partidos", 1);*/
/*                     partidos = 1;*/
/*                 } else {                    */
/*                     celda.data("partidos", ++partidos);*/
/*                 }*/
/*                 */
/*                 var recursosLibres = celda.data("recursosLibres");*/
/* */
/*                 if(recursosLibres > partidos) {                    */
/*                     celda.addClass("celdaConPartidos");*/
/*                 }else{*/
/*                     celda.addClass("celdaOcupada");*/
/*                 }*/
/*                 horaPartido.add(30, 'm');*/
/*             }*/
/*         }*/
/*         */
/*         function eliminarPartidoCalendario(diaPartido, horaPartido){*/
/*             //Recorremos las tres celdas que ocupa el partido*/
/*             for(i = 0; i < 3; i++){*/
/*                 //Obtenemos la celda en el calendario general*/
/*                 celda = $(".calendario").find("." + horaPartido.format('H:mm').replace(":", "\\:")).find("." + diaPartido);*/
/*                 celda.removeClass("celdaOcupada");*/
/*                 celda.removeClass("celdaConPartidos");*/
/*                 partidos = celda.data("partidos")-1;                */
/*                 //Actualizamos la clase de la celda dependiendo de la información actualizada*/
/*                 if(partidos === 0){                    */
/*                     celda.removeData("partidos");*/
/*                     celda.addClass("celdaLibre");*/
/*                 } else {*/
/*                     celda.data("partidos", partidos);*/
/*                     celda.addClass("celdaConPartidos");*/
/*                 }*/
/*                 horaPartido.add(30, 'm');*/
/*             }*/
/*         }*/
/*         */
/*         /***/
/*          * Actualiza el calendario cuando se cambie de semana o para mostrarlo inicialmente*/
/*          * */
/*          * @returns {undefined}*/
/*          *//* */
/*         function actualizarCalendario() {*/
/*             finSemana = moment(inicioSemana).endOf('week');*/
/*             $("#calendario-head-fecha").text(inicioSemana.format("ll") + "/" + finSemana.format("ll"));*/
/* */
/*             var dia = moment(inicioSemana);*/
/* {#            actualizarDisponibilidad();#}*/
/*             //Actualizamos la cabecera del calendario para que coincida con los días de la semana que estamos viendo*/
/*             $(".cabecera-dia-fecha").each(function() {*/
/*                 $(this).text(dia.format("l"));*/
/*                 if(dia.startOf('day').isSame(moment().startOf('day'))) { {#Es hoy#}*/
/*                     $(this).parent().addClass("hoy");*/
/*                 } else {*/
/*                     $(this).parent().removeClass("hoy");*/
/*                 }*/
/* */
/*                 dia = dia.add(1, "days");*/
/*             });*/
/*             */
/*             $('.calendario .celda_horario:not(:empty)').empty();   */
/*             actualizarDisponibilidad();*/
/*         }*/
/*         */
/*         /***/
/*         * A cada uno de las celdas sobre las que se puede soltar un recurso se le añade dicha funcionalidad*/
/* */
/*          * @param int index: Nos dirá sobre que día de la semana nos encontramos*/
/*          * @param string horario: El horario del recurso que estamos actualizando*/
/*          * @returns {undefined}         *//* */
/*         function asignarDisponibilidadRecurso( index, horario ){*/
/*             //Dividimos la ristra para tener cada uno de los rangos por separado*/
/*             var horas = horario.substring(1).split(", "); */
/*             */
/*             var i;*/
/*             for(i = 0; i < horas.length; i++) {*/
/*                 rango = horas[i].split("-");*/
/*                 //Obtenemos el limite inferior y superior del rango*/
/*                 var rangoInf = moment(rango[0], "H:mm");*/
/*                 var rangoSup = moment(rango[1], "H:mm");*/
/* */
/*                 while(rangoInf.isBefore(rangoSup)){*/
/*                     rangoString = rangoInf.format("H:mm");*/
/*                     //Buscamos la celda dentro del rango y le añadimos la funcionalidad de poder mover eventos a esta casilla*/
/*                      $(".calendario > tbody > ." + rangoString.replace(":", "\\:") + " > .celda" + index).hacerDroppable(index);*/
/*                     rangoInf.add(30, 'm'); //Seguimos recorriendo las celdas del rango*/
/*                 }*/
/*             }*/
/*         }*/
/*         */
/*         /***/
/*         * Al cambiar de recurso, se actualiza sobre que celdas se puede soltar un evento recorriendo el rango de horas*/
/* */
/*          * @returns {undefined}         *//* */
/*         function actualizarDisponibilidad() {*/
/*             */
/*             $(".calendario").find(".celda_horario").removeData();*/
/*             $(".calendario").find(".celdaLibre").removeClass("celdaLibre");*/
/*             $(".calendario").find(".celdaOcupada").removeClass("celdaOcupada");*/
/*             $(".calendario").find(".celdaConPartidos").removeClass("celdaConPartidos");*/
/*             */
/*             //Recorremos cada uno de los recursos disponibles para asignar disponibilidad*/
/*             $(".recursos").find('li').each(function(){*/
/*                var recursoId = $(this).attr('class');*/
/*                //Recorremos el horario de cada día de cada recurso*/
/*                $("#recurso"+recursoId+" > p").each(function( index ) {*/
/*                    var horario = $(this).text();*/
/*                    var horas = horario.substring(1).split(", "); */
/*                    */
/*                    var i;*/
/*                    for(i = 0; i < horas.length; i++) {*/
/*                         rango = horas[i].split("-");*/
/*                         //Obtenemos el limite inferior y superior del rango*/
/*                         var rangoInf = moment(rango[0], "H:mm");*/
/*                         var rangoSup = moment(rango[1], "H:mm");*/
/*                         while(rangoInf.isBefore(rangoSup)){*/
/*                             rangoString = rangoInf.format("H:mm");*/
/*                             //Buscamos la celda dentro del rango y le añadimos la funcionalidad de poder mover eventos a esta casilla*/
/*                             var celda = $(".calendario > tbody > ." + rangoString.replace(":", "\\:") + " > .celda" + index);*/
/*                             recursosLibres = celda.data("recursosLibres");*/
/*                             if(typeof recursosLibres === "undefined"){*/
/*                                 celda.data("recursosLibres", 1);*/
/*                             } else {*/
/*                                 celda.data("recursosLibres", recursosLibres+1);*/
/*                             }*/
/*                             rangoInf.add(30, 'm'); //Seguimos recorriendo las celdas del rango*/
/*                         }                        */
/*                    }*/
/*                });*/
/*             });*/
/*             */
/*             //Recorremos los partidos asignados para comprobar los recursos ocupados*/
/*             $("#listaPartidos").find(".partido").each(function() {*/
/*                 var fechaPartido = $(this).find(".fechaPartido").text();*/
/*                 //Comprobamos si el partido se encuentra en la semana actual                 */
/*                 if( moment(inicioSemana).isSame(moment(fechaPartido, "D/M/YYYY").weekday(0), 'day')){*/
/*                     var horaPartido = moment($(this).find(".horaPartido").text(), 'H:mm');*/
/*                     var dia = moment(fechaPartido, "D-M-YYYY").format("dddd");*/
/*                     var i;*/
/*                     for(i = 0; i < 3; i++){*/
/*                         var celda = $(".calendario > tbody > ." + horaPartido.format('H:mm').replace(":", "\\:") + " > ." + dia);*/
/*                         partidos = celda.data("partidos");*/
/*                         if(typeof partidos === "undefined"){*/
/*                             celda.data("partidos", 1);*/
/*                         } else {*/
/*                             celda.data("partidos", partidos+1);*/
/*                         }*/
/*                         horaPartido.add(30, 'm');*/
/*                     }*/
/*                 }*/
/*                 */
/*             });*/
/*             //Añadimos las clases necesarias para la visualización CSS*/
/*             $(".calendario").find(".celda_horario").each(function() {*/
/*                 var recursosLibres = $(this).data("recursosLibres");*/
/*                 if(typeof recursosLibres !== "undefined"){*/
/*                     var numPartidos = $(this).data("partidos");*/
/*                     if(typeof numPartidos !== "undefined"){*/
/*                         if (numPartidos === recursosLibres) {*/
/*                             $(this).addClass("celdaOcupada");*/
/*                         } else {*/
/*                             $(this).addClass("celdaConPartidos");*/
/*                         }*/
/*                     } else {*/
/*                         $(this).addClass("celdaLibre");*/
/*                     }*/
/*                 }*/
/*             });*/
/*            */
/*             */
/*             */
/* */
/*         }*/
/*         */
/*         function actualizarDisponibilidadDetallada() {*/
/*             //Actualizamos la cabecera para mostrar la fecha correcta*/
/*             $(".vistaDetallada > .diaVistaDetallada").html(diaVistaDetallada.format("dddd<br>D/M/YYYY"));*/
/*             //Destruimos la disponibilidad mostrada anteriormente en caso de que exista*/
/*             $(".vistaDetalladaTabla .ui-droppable").droppable('destroy');*/
/*             //Borramos los partidos que se puedan encontrar en la vista detallada*/
/*             $('.vistaDetalladaTabla .celda_vistaDetallada:not(:empty)').empty();*/
/*             {# Para cada recurso disponible obtenemos el horario en el día señalado #}   */
/*             $(".recursos > li").each(function(index) {  */
/*                 //Obtenemos el horario del recurso y del día que se encuentra señalado*/
/*                 var horarioRecurso = $("#recurso"+$(this).attr("class")+" > .horario"+ diaVistaDetallada.format("dddd") ).text();*/
/*                 //Dividimos los distintos rangos horarios dentro del día*/
/*                 var rangosHorarios = horarioRecurso.substring(1).split(", "); */
/*                 var i;*/
/*                 //Para cada rango horario*/
/*                 for(i = 0; i < rangosHorarios.length; i++) {*/
/*                     rango = rangosHorarios[i].split("-");*/
/*                     //Obtenemos el limite inferior y superior*/
/*                     var rangoInf = moment(rango[0], "H:mm");*/
/*                     var rangoSup = moment(rango[1], "H:mm");*/
/*                     while(rangoInf.isBefore(rangoSup)){*/
/*                         rangoString = rangoInf.format("H:mm");                        */
/*                         //Buscamos la celda dentro del rango y le añadimos la funcionalidad de poder mover eventos a esta casilla*/
/*                          */
/*                         //       clase tabla    > tbody >          clase TR (hora)                 >  celda de recurso*/
/*                         $(".vistaDetalladaTabla > tbody > ." + rangoString.replace(":", "\\:") + " > ." + (index+1)).hacerDroppableVD();*/
/*                         //Seguimos recorriendo las celdas del rango*/
/*                         rangoInf.add(30, 'm');*/
/*                     }*/
/*                 }*/
/*                 index++;*/
/*             });*/
/*             */
/*             //Buscamos si hay algún partido asignado al día detallado*/
/*             $("#listaPartidos .partido").each(function(index) {*/
/*                 */
/*                 if($(this).find(".fechaPartido").text() === diaVistaDetallada.format("D/M/YYYY")) {*/
/* */
/*                     var horaPartido = $(this).find(".horaPartido").text().replace(":", "\\:");*/
/*                     var recursoPartido = $(this).find(".recursoPartido").text();*/
/*                     var celdaPartido = $(".vistaDetalladaTabla > tbody > ." + horaPartido + " > ." + recursoPartido);*/
/*                     var indicePartido = $(this).find(".indicePartido").text();*/
/*                            */
/*             //////////////////////////*/
/*             */
/*                     var $divPartido = $("<div>");*/
/*                     var cellPos = celdaPartido.position();*/
/*                     $divPartido.addClass($(this).attr("class").split(' ')[0]+' partido');*/
/*                                                        */
/*                     $divPartido.css({*/
/*                        position:'absolute',*/
/*                        top: cellPos.top+1,*/
/*                        left: cellPos.left+1,*/
/*                        backgroundColor: '#ffeb72',*/
/*                        width: celdaPartido.width()+1,*/
/*                        height: celdaPartido.height()*3+5*/
/*                     });*/
/*                             */
/*                     $divPartido.append('<p>'+indicePartido+' <i class="icon-line-cross eliminarPartido"></i></p>');*/
/*                             */
/*                     celdaPartido.append($divPartido);*/
/* */
/*                     celdaPartido.droppable('destroy');*/
/*                     */
/*                     celdaPartido.find('div').hacerDraggable($(this).attr("class").split(' ')[0]);*/
/*                             */
/*                     celdaPartido.siguienteCelda().droppable('destroy');*/
/*                     celdaPartido.siguienteCelda().siguienteCelda().droppable('destroy');*/
/*                             */
/*                     celdaPartido.find('.eliminarPartido').click(function() {*/
/*                         var filaPartido = $("#listaPartidos ." + $(this).closest('div').attr("class").split(' ')[0]); */
/*                         $(this).closest('td').siguienteCelda().siguienteCelda().hacerDroppableVD();*/
/*                         $(this).closest('td').siguienteCelda().hacerDroppableVD();*/
/*                         $(this).closest('td').hacerDroppableVD(); */
/* */
/*                         $(this).closest('td').empty();*/
/*                         filaPartido.find(".fechaPartido").empty();                                             */
/*                         filaPartido.find(".horaPartido").empty();*/
/*                         filaPartido.find(".recursoPartido").empty();*/
/*                     });*/
/*             */
/*             ////////////////////////////*/
/*             */
/*                */
/*                 }*/
/*                */
/*             });*/
/*             */
/*         }*/
/*         */
/*         function buscarInterseccion ( pref1, pref2){*/
/*              //Dividimos los distintos rangos horarios dentro del día*/
/*             var rangos1 = pref1.substring(1).split(", "); */
/*             var rangos2 = pref2.substring(1).split(", "); */
/*             var rangosMoment1  = [];*/
/*             var rangosMoment2  = [];*/
/*             */
/*             var i, j;            */
/*             for(i = 0; i < rangos1.length; i++) {*/
/*                 rango = rangos1[i].split("-");*/
/*                 //Obtenemos el limite inferior y superior*/
/*                 var inicio = moment(rango[0], "H:mm");*/
/*                 var fin = moment(rango[1], "H:mm");*/
/*                 rangosMoment1[i] = moment.range(inicio, fin)*/
/*             }*/
/*             for(i = 0; i < rangos2.length; i++) {*/
/*                 rango = rangos2[i].split("-");*/
/*                 //Obtenemos el limite inferior y superior*/
/*                 var inicio = moment(rango[0], "H:mm");*/
/*                 var fin = moment(rango[1], "H:mm");*/
/*                 rangosMoment2[i] = moment.range(inicio, fin)*/
/*             }*/
/*             var aux = 0;*/
/*             var rangosFinales = [];*/
/*             for(i = 0; i < rangosMoment1.length; i++){*/
/*                 */
/*                 for(j = 0; j < rangosMoment2.length; j++){*/
/*                     nuevoRango = rangosMoment1[i].intersect(rangosMoment2[j]);*/
/*                     if(nuevoRango != null){*/
/*                         rangosFinales[aux] = nuevoRango;*/
/*                         aux++;*/
/*                     }*/
/*                 }*/
/*             }*/
/*             */
/*             return rangosFinales;            */
/*         }*/
/*         */
/*         function autoGenerarHorario(){*/
/*             //Dia a partir del cual empezamos a autocolocar partidos (¿¿MAÑANA??))*/
/*             */
/*             var dia = moment("{{fechaInicio}}", "DD-MM-YYYY");*/
/*             var diaFin = moment("{{fechaFin}}", "DD-MM-YYYY");*/
/*             var diasJornada = diaFin.diff(dia, 'days');*/
/*             var partidos = [];*/
/*             $("#listaPartidos").find(".partido").each( function( index ) {*/
/*                 partidos.push($(this).attr("class").split(' ')[0]);*/
/*             });                        */
/*             var partidosOrdenados = [];            */
/*             //Recorremos todos los partidos que se van a jugar en dicha jornada para ordenarlos de menor a mayor disponibilidad*/
/*             for(j = 0; j < partidos.length; j++){*/
/*                 partidosOrdenados[j] = [];*/
/*                 partidosOrdenados[j][0] = partidos[j];*/
/*                 partidosOrdenados[j][1] = 0;                */
/*                 */
/*                 var diaSemana = moment().day("Lunes");*/
/*                 //Para cada partido, obtenemos en total como de disponible se encuentra la pareja*/
/*                 //Almacenamos la disponibilidad de cada día de la pareja*/
/*                 do {*/
/*                     diaRistra = diaSemana.format("dddd");*/
/*                     var p1 = $("#listaPartidos").find("."+partidos[j]).find(".preferenciaJugador1"+diaRistra).text();  */
/*                     var p2 = $("#listaPartidos").find("."+partidos[j]).find(".preferenciaJugador2"+diaRistra).text();  */
/*                     //Cruzamos la preferencia de las parejas involucradas en el partido*/
/*                     prefPareja = buscarInterseccion(p1, p2);                    */
/*                     var minutosDisponibles = 0;*/
/*                     for(i = 0; i < prefPareja.length; i++){*/
/*                         minutosDisponibles = minutosDisponibles + prefPareja[i].diff('minutes');*/
/*                     }*/
/*                     partidosOrdenados[j][1] += minutosDisponibles/30;                                        */
/*                     diaSemana.add(1, "days");                    */
/*                 } while(diaRistra !== "Domingo");*/
/*                 */
/*             }*/
/*             //Ordenamos los partidos de disponibilidad más restrictiva a menos restrictiva*/
/*             partidosOrdenados.sort(function(a,b){*/
/*                 if (a[0] === b[0]) {*/
/*                     return 0;*/
/*                 }*/
/*                 else {*/
/*                     return (a[0] > b[0]) ? -1 : 1;*/
/*                 }*/
/*             }); */
/*             */
/*             //Almacenamos los rangos disponibles en cada recurso y cada día disponible*/
/*             var rangosRecursos = [];*/
/*             auxDia = dia;*/
/*             for(var i = 0; i < diasJornada; i++){*/
/*                 rangosRecursos[i] = [];*/
/*                 diaRistra = auxDia.format("dddd");*/
/*                 $(".recursos").find("li").each( function( index ) {      */
/*                     rangosRecursos[i][index] = stringToRango($("#recurso" + $(this).attr("class") + " > .horario" + diaRistra).text());*/
/*                 });*/
/*                 */
/*                 auxDia.add(1, "days");                */
/*             } */
/*                         */
/*             //Tomando los partidos por orden de restricción, se van colocando*/
/*             */
/*             */
/*             {#while((partidoActual < partidosOrdenados.length) && control){#}*/
/*             for(partidoActual = 0; partidoActual < partidosOrdenados.length; partidoActual++){*/
/*                 //Recorremos día a día intentando colocar el partido*/
/*                 var diaActual = 0;*/
/*                 var dia = moment("{{fechaInicio}}", "DD-MM-YYYY");*/
/*                 var control = true;*/
/*                 while((diaActual < diasJornada) && control){*/
/*                     diaRistra = dia.format("dddd");                    */
/*                     //Recorremos recurso a recurso de ese día intentando colocar el partido*/
/*                     var recursoActual = 0;*/
/*                     while((recursoActual < rangosRecursos[diaActual].length) && control ){*/
/*                     */
/*                         var p1 = $("#listaPartidos").find("."+partidosOrdenados[partidoActual][0]).find(".preferenciaJugador1"+diaRistra).text();  */
/*                         var p2 = $("#listaPartidos").find("."+partidosOrdenados[partidoActual][0]).find(".preferenciaJugador2"+diaRistra).text();  */
/*                         var prefPareja = buscarInterseccion(p1, p2);                        */
/*                         var disponibilidad = buscarInterseccion(rangoToString(rangosRecursos[diaActual][recursoActual]), rangoToString(prefPareja), true);*/
/*                         */
/*                         var i = 0;*/
/*                         while((i < disponibilidad.length) && control){*/
/*                         {#for(i = 0; i < disponibilidad.length; i++){#}                            */
/*                             if(disponibilidad[i].valueOf() >= 5400000) {                                                                    */
/*                                     //Colocamos partido al inicio del rango*/
/*                                     var filaPartido = $("#listaPartidos").find("."+partidosOrdenados[partidoActual][0]);*/
/*                                     filaPartido.find(".fechaPartido").text(dia.format("D/M/YYYY"));*/
/*                                     filaPartido.find(".horaPartido").text(disponibilidad[i].start.format("H:mm"));*/
/*                                     filaPartido.find(".recursoPartido").text(recursoActual+1);*/
/*                                     filaPartido.addClass("success");*/
/*                                     */
/*                                     //Modificamos la disponibilidad en el recurso en el que hemos colocado el partido*/
/*                                     var rangoInicio = moment(disponibilidad[i].start);*/
/*                                     var rangoFin = moment(disponibilidad[i].start).add(90, 'm');*/
/*                                     var rangoPartido = moment.range(moment(rangoInicio), moment(rangoFin));*/
/*                                     */
/*                                     for(j = 0; j < rangosRecursos[diaActual][recursoActual].length; j++){*/
/*                                         //Eliminamos de la disponibilidad del recurso el tiempo cogido para el partido colocado*/
/*                                         if(rangoPartido.overlaps(rangosRecursos[diaActual][recursoActual][j])){                                            */
/*                                             rangosRecursos[diaActual][recursoActual][j] = rangosRecursos[diaActual][recursoActual][j].subtract(rangoPartido);*/
/*                                             var nuevosRangos = rangosRecursos[diaActual][recursoActual][j].toString().split(",");                                            */
/*                                             rangosRecursos[diaActual][recursoActual].splice(j, 1);*/
/*                                             if(nuevosRangos[0].length !== 0){*/
/*                                                 for(k = 0; k < nuevosRangos.length; k++){*/
/*                                                     rangosRecursos[diaActual][recursoActual].splice(j + k, 0, moment.range(nuevosRangos[k]));*/
/*                                                 }                                            */
/*                                             }    */
/*                                         }*/
/*                                     }                                                     */
/*                                     */
/*                                     control = false;                                    */
/*                             }*/
/*                             i++;*/
/*                         */
/*                         }*/
/*                         recursoActual++;*/
/*                     }*/
/*                     diaRistra = dia.add(1, "days").format("dddd");*/
/*                     diaActual++;*/
/*                 }*/
/*                 */
/*             }             */
/*         */
/*         }*/
/*         */
/*         function stringToRango(string) {*/
/*             if(string.charAt(0) === " "){*/
/*                 var rangos = string.substring(1);*/
/*             }*/
/*             rangos = rangos.split(", ");*/
/*             rangosMoment = [];*/
/*             for(var i = 0; i < rangos.length; i++){*/
/*                 aux = rangos[i].split("-");*/
/*                 rangosMoment[i] = moment.range(moment(aux[0], "H:mm"), moment(aux[1], "H:mm"));*/
/*             }*/
/*             return rangosMoment;*/
/*             */
/* */
/*         }*/
/*         */
/*         function rangoToString(rangos) {*/
/*             var rango = " ";*/
/*             for(var i = 0; i < rangos.length; i++) {*/
/*                 rango = rango.concat(rangos[i].start.format("H:mm")+"-"+rangos[i].end.format("H:mm")+", ");                */
/*             }*/
/*             rango = rango.substring(0, rango.length-2);*/
/*             return rango;*/
/*         }*/
/*         */
/*         $(function() {*/
/*             moment.locale('es');*/
/*             //Preguntar si se pueden empezar a poner partidos hoy o a partir de X día*/
/*             diaVistaDetallada = moment().add(1, "days");            */
/*             inicioSemana = moment(diaVistaDetallada).startOf('week'); */
/*             autoGenerarHorario();*/
/*             $(".cal-semanaAnterior").attr("disabled", true);*/
/*             actualizarCalendario();*/
/*         */
/*             $( "input[name=diaVistaDetallada]:radio." + diaVistaDetallada.format("dddd") ).prop("checked", true);*/
/*             actualizarDisponibilidadDetallada();*/
/*           */
/* */
/* */
/*             $('input[name=diaVistaDetallada]:radio').change(function() {*/
/*                 diaVistaDetallada = moment(inicioSemana).weekday($("input[name=diaVistaDetallada]:checked").val());                */
/*                 actualizarDisponibilidadDetallada();*/
/*             });           */
/*             $(".cal-semanaAnterior").click(function() {*/
/*                 inicioSemana = inicioSemana.weekday(-7);*/
/*                 diaVistaDetallada = moment(inicioSemana).weekday($("input[name=diaVistaDetallada]:checked").val());                */
/*                 if( moment(inicioSemana).isSame(moment().weekday(0), 'day')){*/
/*                     $(".cal-semanaAnterior").attr("disabled", true);*/
/*                 }*/
/*                 actualizarDisponibilidadDetallada();*/
/*                 actualizarCalendario();*/
/*             });*/
/*             $(".cal-hoy").click(function() {*/
/*                 inicioSemana = moment(){#.add(1, "days")#}.startOf('week');*/
/*                 diaVistaDetallada = moment(){#.add(1, "days")#};*/
/*                 $(".cal-semanaAnterior").attr("disabled", true);*/
/*                 $( "input[name=diaVistaDetallada]:radio." + diaVistaDetallada.format("dddd") ).prop("checked", true);*/
/*                 actualizarDisponibilidadDetallada();*/
/*                 actualizarCalendario();*/
/*             });*/
/*             $(".cal-proximaSemana").click(function() {*/
/*                 inicioSemana.weekday(7);*/
/*                 diaVistaDetallada = moment(inicioSemana).weekday($("input[name=diaVistaDetallada]:checked").val());                */
/*                 $(".cal-semanaAnterior").attr("disabled", false);*/
/*                 actualizarDisponibilidadDetallada();*/
/*                 actualizarCalendario();*/
/*             });*/
/*             */
/*             {# Interfaz de movimiento de los partidos sobre el horario #}*/
/*             $("#listaPartidos .partido").each(function() {*/
/*                 idPartido = $(this).attr("class").split(' ')[0];*/
/*                 $(this).hacerDraggable( idPartido );*/
/*             });                    */
/*             */
/*             //Hacer el chequeo de que todos los partidos están colocados correctamente*/
/* {#            USAR ESTE CODIGO PARA QUE SE MAND EO NO DEPENDIENDO DE SI ESTÄ CORRECTO#}*/
/*             {#$( "form" ).submit(function( event ) {*/
/*             if ( $( "input:first" ).val() === "correct" ) {*/
/*               $( "span" ).text( "Validated..." ).show();*/
/*               return;*/
/*             }*/
/* */
/*             $( "span" ).text( "Not valid!" ).show().fadeOut( 1000 );*/
/*             event.preventDefault();*/
/*           });#}*/
/*             */
/*             $(".formCalendario").submit( function(event) {*/
/* {#                event.preventDefault();#}*/
/*                 var partidos = '{ "partidos" : [';*/
/*                  $("#listaPartidos .partido").each(function() {*/
/*                     var idPartido = $(this).attr("class").split(' ')[0];*/
/*                     idPartido = idPartido.replace('partido', '');*/
/*                     var fechaPartido = $(this).find(".fechaPartido").text();*/
/*                     var horaPartido = $(this).find(".horaPartido").text();*/
/*                     var numRecurso = parseInt($(this).find(".recursoPartido").text()) - 1;                    */
/*                     var recursoPartido = $(".recursos").children().eq(numRecurso).attr('class');*/
/*                     alert(recursoPartido);*/
/*                     {#var recursoPartido = $(this).find(".recursoPartido").text();#}*/
/*                     partidos = partidos + '{ "id": "' + idPartido + '" , "recurso":"' + recursoPartido + '" , "fecha":"' + fechaPartido + '" , "hora":"' + horaPartido + '" },';*/
/*                      */
/*                 });*/
/*                 partidos = partidos.slice(0, -1);*/
/*                 partidos = partidos + " ]}"; //Objeto JSON creado para pasarlo a PHP*/
/*                 $(this).children('#form_asignacion').val(partidos);*/
/*                 */
/*             });*/
/*             */
/*            */
/*             */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
