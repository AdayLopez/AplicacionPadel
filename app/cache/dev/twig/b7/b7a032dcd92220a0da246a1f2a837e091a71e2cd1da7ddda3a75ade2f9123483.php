<?php

/* PadelScheduleMainBundle:Competitions:verCompeticion.html.twig */
class __TwigTemplate_4df81dfed15ea07eb2626aa0bf19045b6ff4f51ffdf06b000b6477369c40896e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Competitions:verCompeticion.html.twig", 1);
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
        $__internal_5315fd5db54bb30918a8989118763fdddccce489e815c8d09e5acde50c728753 = $this->env->getExtension("native_profiler");
        $__internal_5315fd5db54bb30918a8989118763fdddccce489e815c8d09e5acde50c728753->enter($__internal_5315fd5db54bb30918a8989118763fdddccce489e815c8d09e5acde50c728753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:verCompeticion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5315fd5db54bb30918a8989118763fdddccce489e815c8d09e5acde50c728753->leave($__internal_5315fd5db54bb30918a8989118763fdddccce489e815c8d09e5acde50c728753_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_a7bb400f643f986d8eda62a8fe0e5005d3849c64a56a9939e152fc9a619e3821 = $this->env->getExtension("native_profiler");
        $__internal_a7bb400f643f986d8eda62a8fe0e5005d3849c64a56a9939e152fc9a619e3821->enter($__internal_a7bb400f643f986d8eda62a8fe0e5005d3849c64a56a9939e152fc9a619e3821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/daterangepicker.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/timepicker.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/bs-datatable.css"), "html", null, true);
        echo "\"  type=\"text/css\" /> 
";
        
        $__internal_a7bb400f643f986d8eda62a8fe0e5005d3849c64a56a9939e152fc9a619e3821->leave($__internal_a7bb400f643f986d8eda62a8fe0e5005d3849c64a56a9939e152fc9a619e3821_prof);

    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_0fb54ccf0fc214fa86c10d0ba246255e4f28fc58709b7a2617a41ea938e1b218 = $this->env->getExtension("native_profiler");
        $__internal_0fb54ccf0fc214fa86c10d0ba246255e4f28fc58709b7a2617a41ea938e1b218->enter($__internal_0fb54ccf0fc214fa86c10d0ba246255e4f28fc58709b7a2617a41ea938e1b218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " 
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/bs-datatable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/rangeSelector.js"), "html", null, true);
        echo "\"></script>
    <!-- Include Date Range Picker -->
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/daterangepicker.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0fb54ccf0fc214fa86c10d0ba246255e4f28fc58709b7a2617a41ea938e1b218->leave($__internal_0fb54ccf0fc214fa86c10d0ba246255e4f28fc58709b7a2617a41ea938e1b218_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6df0b2405b7e803b2d30a30d8e60b7a603992815a72329e068561486783f7c6 = $this->env->getExtension("native_profiler");
        $__internal_e6df0b2405b7e803b2d30a30d8e60b7a603992815a72329e068561486783f7c6->enter($__internal_e6df0b2405b7e803b2d30a30d8e60b7a603992815a72329e068561486783f7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Competicion";
        
        $__internal_e6df0b2405b7e803b2d30a30d8e60b7a603992815a72329e068561486783f7c6->leave($__internal_e6df0b2405b7e803b2d30a30d8e60b7a603992815a72329e068561486783f7c6_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_830c633b15253f6fcc2ac71eb69d164bdb31a3001f2b06d422ff000bd71c5889 = $this->env->getExtension("native_profiler");
        $__internal_830c633b15253f6fcc2ac71eb69d164bdb31a3001f2b06d422ff000bd71c5889->enter($__internal_830c633b15253f6fcc2ac71eb69d164bdb31a3001f2b06d422ff000bd71c5889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "    
    ";
        // line 21
        $context["creador"] = 0;
        // line 22
        echo "    ";
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 23
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "creador", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 24
                echo "            ";
                $context["creador"] = 1;
                // line 25
                echo "        ";
            }
            // line 26
            echo "    ";
        }
        // line 27
        echo "    <!-- Content
    ============================================= -->
    <section id=\"content\">
        <div class=\"single-event\">
            <div class=\"content-wrap nopadding\">
                <div class=\"container clearfix\" style=\"width: 90%\">\t\t

                    <div class=\"tabs tabs-bb clearfix ui-tabs ui-widget ui-widget-content ui-corner-all\" id=\"tabs\">

                        <ul class=\"tab-nav clearfix\">
                            <li><a href=\"#tab-1\">Información general</a></li>
                            <li><a href=\"#tab-2\">Calendario</a></li>
                            <li><a href=\"#tab-3\">Clasificación</a></li>
                            <li><a href=\"#tab-4\">Normas, ajustes y recursos</a></li>
                        </ul>

                        <div class=\"tab-container\">
                            <div class=\"tab-content clearfix\" id=\"tab-1\">
                                
                                
                                <div class=\"fancy-title title-double-border\">
                                    <h1>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
        echo "</h1>
                                </div>
                                <div class=\"col_three_fourth\">
                                    <div class=\"entry-image \">
                                        <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "getWebFotoCompeticionRuta", array(), "method")), "html", null, true);
        echo "\" alt=\"Foto de la competición\">
                                    </div>
                                    <h3>Descripción de la competición</h3>
                                    <p> ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "descripcion", array()), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"col_one_fourth col_last\">
                                    <div class=\"panel panel-default events-meta\">
                                        <div class=\"panel-heading\">
                                            <h3 class=\"panel-title\">Información general:</h3>
                                        </div>
                                        <div class=\"panel-body\">
                                            <ul class=\"iconlist nobottommargin\">
                                                <li><i class=\"icon-calendar3\"></i> ";
        // line 64
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "fechaInicio", array()), "medium", "none"), "html", null, true);
        echo "  </li>
                                                <li><i class=\"icon-map-marker2\"></i> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "localizacion", array()), "html", null, true);
        echo " </li>                                                
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"toggle\">
                                        <div class=\"togglet\"><i class=\"toggle-closed icon-circle-arrow-right\"></i><i class=\"toggle-open icon-circle-arrow-down\"></i>Listado de participantes</div>
                                        <div class=\"togglec\">
                                            <div class=\"table-responsive\">
                                                <table id=\"tablaPadel\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                                                    <thead>
                                                        <tr>
                                                            <th>Usuario</th>
                                                            <th>Pareja</th>   \t\t\t\t\t\t\t\t\t
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "inscripciones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion"]) {
            // line 84
            echo "                                                            <tr>                                                    
                                                                <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscripcion"], "jugador", array()), "username", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["inscripcion"], "nombrePareja", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t                                                    
                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscripcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>                   
                                    ";
        // line 95
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            echo "                    
                                        ";
            // line 96
            if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estado", array()) == "Cerrada")) {
                echo "                                        
                                            <button type=\"button\" class=\"btn disabled btn-block btn-lg\" data-toggle=\"tooltip\" title=\"Debe publicar la competición antes de que se permita la inscripción\">Inscribirse</button>
                                            ";
                // line 98
                if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
                    // line 99
                    echo "                                                ";
                    if (twig_test_empty($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "recursos", array()))) {
                        // line 100
                        echo "                                                    ";
                        // line 101
                        echo "                                                    <button type=\"button\" class=\"btn disabled btn-block btn-lg\" data-toggle=\"tooltip\" title=\"Para publicar esta competición debe añadir recursos en la pestaña 'Normas, ajustes y recursos'\">Publicar competición</button>
                                                ";
                    } else {
                        // line 103
                        echo "                                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicar", array("idCompeticion" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
                        echo "\" type=\"button\" class=\"btn btn-success btn-block btn-lg\" >Publicar competición</a>
                                                ";
                    }
                    // line 104
                    echo "                                                
                                            ";
                }
                // line 106
                echo "                                        ";
            } else {
                echo "                                              
                                            ";
                // line 107
                if ((isset($context["inscripcion"]) ? $context["inscripcion"] : $this->getContext($context, "inscripcion"))) {
                    // line 108
                    echo "                                                ";
                    if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "numJornadas", array()) == 0)) {
                        // line 109
                        echo "                                                    <button  type=\"button\" class=\"btn btn-danger btn-block btn-lg\" data-toggle=\"modal\" data-target=\"#abandonarCompeticion\">Abandonar Competición</button>
                                                    <div class=\"modal fade\" id=\"abandonarCompeticion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Abandonar Competición\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog modal-sm\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"center nobottommargin fancy-title title-bottom-border darkgrey\">      
                                                                    <h4><span>¿Está seguro que desea abandonar esta competición?</span></h4>             
                                                                </div>
                                                                <div class=\"center\">
                                                                    <a href=\"";
                        // line 117
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abandonarCompeticion", array("idInscripcion" => $this->getAttribute((isset($context["inscripcion"]) ? $context["inscripcion"] : $this->getContext($context, "inscripcion")), "id", array()))), "html", null, true);
                        echo "\" type=\"button\" class=\"btn btn-success\" style=\"margin: 10px;\">Confirmar</a>
                                                                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                    }
                    // line 124
                    echo "                                            ";
                } else {
                    echo "            
                                                <button  type=\"button\" class=\"btn btn-success btn-block btn-lg\" data-toggle=\"modal\" data-target=\"#seleccionarPreferencia\">Inscribirse</button>
                                                <div class=\"modal fade\" id=\"seleccionarPreferencia\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Preferencia horaria\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">    
                                                            ";
                    // line 129
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PadelScheduleMainBundle:Main:seleccionarPreferencias", array("idCompeticion" => $this->getAttribute(                    // line 130
(isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))));
                    // line 131
                    echo "
                                                        </div>
                                                    </div>
                                                </div> 
                                            ";
                }
                // line 135
                echo "             
                                        ";
            }
            // line 136
            echo "             
                                    ";
        }
        // line 137
        echo "             

                                </div>

                                <div class=\"clear\"></div>\t\t\t\t


                            </div>
                            <div class=\"tab-content clearfix\" id=\"tab-2\">
                                <div class=\"content-wrap\">

                                    <div class=\"parallax header-stick bottommargin-lg\" style=\"padding: 60px 0; background-image:  url(";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/images/parallaxPaddsdel1.jpg"), "html", null, true);
        echo "); height: auto;\" data-stellar-background-ratio=\"0.5\">

                                        <div class=\"container clearfix\">

                                            <div class=\"events-calendar\">
                                                <div class=\"events-calendar-header clearfix\">
                                                    <h2>Events Overview</h2>
                                                    <h3 class=\"calendar-month-year\">
                                                        <span id=\"calendar-month\" class=\"calendar-month\"></span>
                                                        <span id=\"calendar-year\" class=\"calendar-year\"></span>
                                                        <nav>
                                                            <span id=\"calendar-prev\" class=\"calendar-prev\"><i class=\"icon-chevron-left\"></i></span>
                                                            <span id=\"calendar-next\" class=\"calendar-next\"><i class=\"icon-chevron-right\"></i></span>
                                                            <span id=\"calendar-current\" class=\"calendar-current\" title=\"Got to current date\"><i class=\"icon-reload\"></i></span>
                                                        </nav>
                                                    </h3>
                                                </div>
                                                <div id=\"calendar\" class=\"fc-calendar-container\"></div>
                                            </div>

                                            <script type=\"text/javascript\">
                                                //Poblamos el calendario con los partidos ya colocados, modificando la variable canvasEvents
                                                var canvasEvents = {
                                                    ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "partidos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            // line 172
            echo "                                                        '";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["partido"], "fechaHora", array()), "m-d-Y"), "html", null, true);
            echo "' : '";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["partido"], "fechaHora", array()), "G:i"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "jugador", array()), "username", array()), "html", null, true);
            echo " y ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "nombrePareja", array()), "html", null, true);
            echo " vs ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "jugador", array()), "username", array()), "html", null, true);
            echo " y ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "nombrePareja", array()), "html", null, true);
            echo "',                                                         
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                                                            
                                                };
                                                var cal = \$('#calendar').calendario({
                                                onDayClick: function (\$el, \$contentEl, dateProperties) {

                                                for (var key in dateProperties) {
                                                console.log(key + ' = ' + dateProperties[ key ]);
                                                }

                                                },
                                                        caldata: canvasEvents
                                                }),
                                                        \$month = \$('#calendar-month').html(cal.getMonthName()),
                                                        \$year = \$('#calendar-year').html(cal.getYear());
                                                        \$('#calendar-next').on('click', function () {
                                                cal.gotoNextMonth(updateMonthYear);
                                                });
                                                        \$('#calendar-prev').on('click', function () {
                                                cal.gotoPreviousMonth(updateMonthYear);
                                                });
                                                        \$('#calendar-current').on('click', function () {
                                                cal.gotoNow(updateMonthYear);
                                                });
                                                        function updateMonthYear() {
                                                        \$month.html(cal.getMonthName());
                                                                \$year.html(cal.getYear());
                                                        }

                                            </script>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class=\"tab-content clearfix\" id=\"tab-3\">
";
        // line 212
        echo "                                <div class=\"col_half\">

                                    <div class=\"table-responsive\">
                                        <table id=\"tablaPadel\" class=\"tablaClasificacion table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Posición</th>
                                                    <th>Jugador 1</th>
                                                    <th>Jugador 2</th>\t\t\t\t\t\t\t\t\t
                                                    <th>PG</th>\t\t\t\t\t\t\t\t\t                                                    \t\t\t\t\t\t\t\t
                                                    <th>PP</th>\t\t\t\t\t\t\t\t\t
                                                    <th>Puntos</th>\t\t\t\t\t\t\t\t\t
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Posición</th>
                                                    <th>Jugador 1</th>
                                                    <th>Jugador 2</th>\t\t\t\t\t\t\t\t\t
                                                    <th>PG</th>\t\t\t\t\t\t\t\t\t                                                    
                                                    <th>PP</th>\t\t\t\t\t\t\t\t\t
                                                    <th>Puntos</th>\t\t\t\t\t\t\t\t\t\t
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "inscripciones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion"]) {
            // line 238
            echo "                                                    <tr>
                                                        <td></td>
                                                        <td>";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscripcion"], "jugador", array()), "username", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($context["inscripcion"], "nombrePareja", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t
                                                        <td>";
            // line 242
            echo twig_escape_filter($this->env, $this->getAttribute($context["inscripcion"], "partidosGanados", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t                                                        \t\t\t\t\t
                                                        <td>";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute($context["inscripcion"], "partidosPerdidos", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t
                                                        <td>";
            // line 244
            echo twig_escape_filter($this->env, (($this->getAttribute($context["inscripcion"], "partidosGanados", array()) * $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "puntosPorGanar", array())) + ($this->getAttribute($context["inscripcion"], "partidosPerdidos", array()) * $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "puntosPorPerder", array()))), "html", null, true);
            echo "</td>
                                                    </tr>                                                    
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscripcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <script>
                                    \$(document).ready(function() {
                                    \$('.tablaClasificacion').DataTable({
                                    \"bFilter\":  false,
                                            \"paging\":   false,
                                            \"columns\": [
                                            {\"orderable\":false},
                                            {\"orderable\":false},
                                            {\"orderable\":false},                                            
                                            {\"orderable\":false},
                                            {\"orderable\":false},
                                            {\"orderable\":false}
                                            ],
                                            \"info\":     false,
                                            \"order\": [[ 5, \"desc\" ]]
                                    });                                    ";
        // line 268
        echo "                                                \$('.tablaClasificacion tbody tr').each(function(index){
                                        \$('td:first-child', this).html(index + 1);
                                        });
                                        });                                </script>

                                
                                <div class=\"col_half col_last\">
                                    ";
        // line 275
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "numJornadas", array()) == 0)) {
            // line 276
            echo "                                        ";
            if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
                // line 277
                echo "                                            ";
                // line 278
                echo "                                            ";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "inscripciones", array())) < 2)) {
                    // line 279
                    echo "                                                <button  type=\"button\" class=\"btn disabled btn-block btn-lg\" data-toggle=\"tooltip\" title=\"Para generar los cruces entre parejas se debe haber publicado previamente la competición\">Generar cuadrante</button>
                                            ";
                } else {
                    // line 281
                    echo "                                                <button  onclick=\"window.location.href = '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generarCuadrante", array("idCompeticion" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
                    echo "'\" type=\"button\" class=\"button button-lime button-rounded button-3d btn-block btn-lg\">Generar cuadrante</button>
                                            ";
                }
                // line 283
                echo "                                        ";
            }
            // line 284
            echo "                                    ";
        } else {
            // line 285
            echo "                                        ";
            // line 286
            echo "                                        <div>

                                            <form class=\"inline\">
                                                <label class=\"inline-block\"> Seleccione la jornada a visualizar </label>
                                                <select id=\"selectJornada\">
                                                    ";
            // line 291
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "numJornadas", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 292
                echo "                                                        ";
                if (($context["i"] == $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "jornadaActual", array()))) {
                    // line 293
                    echo "                                                            <option selected=\"selected\" value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
                                                        ";
                } else {
                    // line 295
                    echo "                                                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
                                                        ";
                }
                // line 297
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 298
            echo "                                                </select>
                                            </form>
                                        </div>
                                        <div id=\"jornada\">                                      
                                            ";
            // line 302
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PadelScheduleMainBundle:Main:buscarJornada", array("idCompeticion" => $this->getAttribute(            // line 303
(isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()), "numJornada" => ((($this->getAttribute(            // line 304
(isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "jornadaActual", array()) == 0)) ? (1) : ($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "jornadaActual", array()))))));
            // line 305
            echo "
                                        </div>


                                        <script>
                                            ";
            // line 311
            echo "                                                        \$(document).ready(function () {
                                                \$(\"#selectJornada\").on('change', function () {
                                                \$('#jornada').load(Routing.generate('buscarJornada', { idCompeticion:";
            // line 313
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()), "html", null, true);
            echo ", numJornada: this.value }));
                                                });
                                                });</script>
                                            ";
            // line 316
            if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
                // line 317
                echo "                                                
                                                ";
                // line 318
                if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "jornadaActual", array()) < $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "numJornadas", array()))) {
                    // line 319
                    echo "                                                <label> Próxima jornada: ";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "jornadaActual", array()) + 1), "html", null, true);
                    echo " </label>    
                                                <button type=\"button\" class=\"button button-lime button-rounded button-3d btn-block btn-lg\" data-toggle=\"modal\" data-target=\"#modalGenerarHorario\">Generar fechas</button>

                                                <div class=\"modal fade\" id=\"modalGenerarHorario\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\">
                                                        <div class=\"modal-body\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Autogeneración de fechas</h4>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <label>Seleccione el rango de fechas en que se colocarán los partidos:</label>
                                                                    <input type=\"text\" class=\"sm-form-control daterange1\" value=\"\" />
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>                                                                                                                                        
                                                                    <button type=\"button\" class=\"btn btn-primary generarFechas\">Generar fechas</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <script>
                                                            \$(function () {                                                            
                                                            inicio = new moment();
                                                            inicio = inicio.add(1, 'days')
                                                                    \$(\".daterange1\").daterangepicker({
                                                            locale: {
                                                            \"format\": 'DD-MM-YYYY',
                                                                    \"applyLabel\": \"Aceptar\",
                                                                    \"cancelLabel\": \"Cancelar\",
                                                                    \"fromLabel\": \"Desde\",
                                                                    \"toLabel\": \"A\",
                                                                    \"customRangeLabel\": \"Custom\",
                                                                    \"daysOfWeek\": [
                                                                            \"D\",
                                                                            \"L\",
                                                                            \"M\",
                                                                            \"X\",
                                                                            \"J\",
                                                                            \"V\",
                                                                            \"S\"
                                                                    ],
                                                                    \"monthNames\": [
                                                                            \"Enero\",
                                                                            \"Febrero\",
                                                                            \"Marzo\",
                                                                            \"Abril\",
                                                                            \"Mayo\",
                                                                            \"Junio\",
                                                                            \"Julio\",
                                                                            \"Agosto\",
                                                                            \"Septiembre\",
                                                                            \"Octubre\",
                                                                            \"Noviembre\",
                                                                            \"Diciembre\"
                                                                    ],
                                                                    \"firstDay\": 1
                                                            },
                                                                    buttonClasses: \"button button-rounded button-mini nomargin\",
                                                                    applyClass: \"button-color\",
                                                                    cancelClass: \"button-light\",
                                                                    startDate: inicio.format(\"D-M-YYYY\"),
                                                                    endDate: inicio.add(7, 'days').format(\"D-M-YYYY\")
                                                            });
                                                            \$(\".generarFechas\").click(function () {
                                                                rango = \$(\".daterange1\").val().split(\" - \");
                                                                window.location.href = Routing.generate('generarHorario', { idCompeticion:";
                    // line 387
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()), "html", null, true);
                    echo ", jornada:";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "jornadaActual", array()) + 1), "html", null, true);
                    echo ", fechaInicio: rango[0], fechaFin: rango[1]});
                                                            });
                                                            });
                                                </script>
                                            ";
                }
                // line 392
                echo "                                        ";
            }
            // line 393
            echo "                                    ";
        }
        // line 394
        echo "                                </div>



                            </div>

                            <div class=\"tab-content clearfix\" id=\"tab-4\">
                                <div class=\"fancy-title title-bottom-border title-center\"><h4><i class=\"icon-exclamation-sign\"></i>    Normas</h4></div>
                                <p> ";
        // line 402
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "normas", array()), "html", null, true);
        echo " </p>
                                <div class=\"fancy-title title-bottom-border title-center\"><h4><i class=\"icon-params\"></i>    Método de puntuación</h4></div>
                                <div class=\"col_half center nobottommargin\">
                                    <p><label><i class=\"icon-arrow-up2\"></i> Puntos por ganar partido:</label> ";
        // line 405
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "puntosPorGanar", array()), "html", null, true);
        echo " </p>
                                </div>
                                
                                <div class=\"col_half col_last center nobottommargin\">
                                    <p><label><i class=\"icon-arrow-down2\"></i> Puntos por perder partido:</label> ";
        // line 409
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "puntosPorPerder", array()), "html", null, true);
        echo " </p>
                                </div>
                                <div class=\"clear\"> </div>
                                <div class=\"fancy-title title-bottom-border title-center\"><h4><i class=\"icon-th-list\"></i>    Listado de recursos</h4></div>
                                <div class=\"table-responsive\">
                                    <table id=\"tablaPadel\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                                        <thead>
                                            <tr>
                                                <th>Club</th>
                                                <th>Cancha</th>
                                                <th>Horario en lunes</th>\t\t\t\t\t\t\t\t\t
                                                <th>Direccion</th>
                                                    ";
        // line 421
        if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
            // line 422
            echo "                                                    <th></th>
                                                    ";
        }
        // line 424
        echo "                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Club</th>
                                                <th>Cancha</th>
                                                <th>Horario en lunes</th>\t\t\t\t\t\t\t\t\t
                                                <th>Direccion</th>\t
                                                    ";
        // line 432
        if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
            // line 433
            echo "                                                    <th></th>
                                                    ";
        }
        // line 435
        echo "                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            ";
        // line 438
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "recursos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["recurso"]) {
            // line 439
            echo "                                                <tr>
                                                    <td>";
            // line 440
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "club", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 441
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "cancha", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 442
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "horarioLunes", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t
                                                    <td>";
            // line 443
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "direccion", array()), "html", null, true);
            echo "</td>
                                                    ";
            // line 444
            if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
                // line 445
                echo "                                                        <td class=\"text-center col-eliminar\"> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eliminarRecurso", array("idCompeticion" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()), "idRecurso" => $this->getAttribute($context["recurso"], "id", array()))), "html", null, true);
                echo "\" <i class=\"icon-line-delete\"></i></td>                                                    
                                                        ";
            }
            // line 447
            echo "                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 449
        echo "                                        </tbody>
                                    </table>
                                </div>

                                ";
        // line 453
        if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
            // line 454
            echo "                                    
                                    <button type=\"button\" class=\"button button-rounded button-lime btn-block\" data-toggle=\"modal\" data-target=\"#crearRecurso\">Añadir recurso a la competición</button>
                                    <div class=\"modal fade\" id=\"crearRecurso\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Preferencia horaria\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\" style=\"width: 95%\">
                                            <div class=\"modal-content\">    
                                                ";
            // line 459
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PadelScheduleMainBundle:Main:crearRecurso", array("idCompeticion" => $this->getAttribute(            // line 460
(isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))));
            // line 461
            echo "
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    ";
            // line 466
            if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estado", array()) == "Cerrada")) {
                // line 467
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modificarCompeticion", array("idCompeticion" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
                echo "\" type=\"button\" class=\"button button-rounded button-lime btn-block center\">Modificar información de competición</a>
                                    
                                    ";
            }
            // line 470
            echo "                                ";
        }
        // line 471
        echo "
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>                                            

    </section>

";
        
        $__internal_830c633b15253f6fcc2ac71eb69d164bdb31a3001f2b06d422ff000bd71c5889->leave($__internal_830c633b15253f6fcc2ac71eb69d164bdb31a3001f2b06d422ff000bd71c5889_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:verCompeticion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  835 => 471,  832 => 470,  825 => 467,  823 => 466,  816 => 461,  814 => 460,  813 => 459,  806 => 454,  804 => 453,  798 => 449,  791 => 447,  785 => 445,  783 => 444,  779 => 443,  775 => 442,  771 => 441,  767 => 440,  764 => 439,  760 => 438,  755 => 435,  751 => 433,  749 => 432,  739 => 424,  735 => 422,  733 => 421,  718 => 409,  711 => 405,  705 => 402,  695 => 394,  692 => 393,  689 => 392,  679 => 387,  607 => 319,  605 => 318,  602 => 317,  600 => 316,  594 => 313,  590 => 311,  583 => 305,  581 => 304,  580 => 303,  579 => 302,  573 => 298,  567 => 297,  559 => 295,  551 => 293,  548 => 292,  544 => 291,  537 => 286,  535 => 285,  532 => 284,  529 => 283,  523 => 281,  519 => 279,  516 => 278,  514 => 277,  511 => 276,  509 => 275,  500 => 268,  478 => 247,  469 => 244,  465 => 243,  461 => 242,  457 => 241,  453 => 240,  449 => 238,  445 => 237,  418 => 212,  378 => 173,  359 => 172,  355 => 171,  329 => 148,  316 => 137,  312 => 136,  308 => 135,  301 => 131,  299 => 130,  298 => 129,  289 => 124,  279 => 117,  269 => 109,  266 => 108,  264 => 107,  259 => 106,  255 => 104,  249 => 103,  245 => 101,  243 => 100,  240 => 99,  238 => 98,  233 => 96,  229 => 95,  221 => 89,  212 => 86,  208 => 85,  205 => 84,  201 => 83,  180 => 65,  176 => 64,  164 => 55,  158 => 52,  151 => 48,  128 => 27,  125 => 26,  122 => 25,  119 => 24,  116 => 23,  113 => 22,  111 => 21,  103 => 20,  91 => 18,  82 => 14,  78 => 13,  73 => 11,  69 => 10,  61 => 9,  52 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block css %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/daterangepicker.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/timepicker.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/bs-datatable.css')}}"  type="text/css" /> */
/* {% endblock css %}*/
/* */
/* {% block scripts %} */
/*     <script src="{{asset('bundles/padelschedulemain/js/components/bs-datatable.js')}}"></script>*/
/*     <script src="{{asset('bundles/padelschedulemain/js/rangeSelector.js')}}"></script>*/
/*     <!-- Include Date Range Picker -->*/
/*     <script src="{{asset('bundles/padelschedulemain/js/components/moment.js')}}"></script>*/
/*     <script src="{{asset('bundles/padelschedulemain/js/components/daterangepicker.js')}}"></script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block title %}Competicion{% endblock %}*/
/* */
/* {% block content %}    */
/*     {% set creador = 0 %}*/
/*     {% if (is_granted('IS_AUTHENTICATED_FULLY') or is_granted('IS_AUTHENTICATED_REMEMBERED') ) %}*/
/*         {% if competicion.creador.id == app.user.id  %}*/
/*             {% set creador = 1 %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     <!-- Content*/
/*     ============================================= -->*/
/*     <section id="content">*/
/*         <div class="single-event">*/
/*             <div class="content-wrap nopadding">*/
/*                 <div class="container clearfix" style="width: 90%">		*/
/* */
/*                     <div class="tabs tabs-bb clearfix ui-tabs ui-widget ui-widget-content ui-corner-all" id="tabs">*/
/* */
/*                         <ul class="tab-nav clearfix">*/
/*                             <li><a href="#tab-1">Información general</a></li>*/
/*                             <li><a href="#tab-2">Calendario</a></li>*/
/*                             <li><a href="#tab-3">Clasificación</a></li>*/
/*                             <li><a href="#tab-4">Normas, ajustes y recursos</a></li>*/
/*                         </ul>*/
/* */
/*                         <div class="tab-container">*/
/*                             <div class="tab-content clearfix" id="tab-1">*/
/*                                 */
/*                                 */
/*                                 <div class="fancy-title title-double-border">*/
/*                                     <h1>{{ competicion.nombre }}</h1>*/
/*                                 </div>*/
/*                                 <div class="col_three_fourth">*/
/*                                     <div class="entry-image ">*/
/*                                         <img src="{{   asset(competicion.getWebFotoCompeticionRuta()) }}" alt="Foto de la competición">*/
/*                                     </div>*/
/*                                     <h3>Descripción de la competición</h3>*/
/*                                     <p> {{ competicion.descripcion }}</p>*/
/*                                 </div>*/
/*                                 <div class="col_one_fourth col_last">*/
/*                                     <div class="panel panel-default events-meta">*/
/*                                         <div class="panel-heading">*/
/*                                             <h3 class="panel-title">Información general:</h3>*/
/*                                         </div>*/
/*                                         <div class="panel-body">*/
/*                                             <ul class="iconlist nobottommargin">*/
/*                                                 <li><i class="icon-calendar3"></i> {{ competicion.fechaInicio|localizeddate("medium","none") }}  </li>*/
/*                                                 <li><i class="icon-map-marker2"></i> {{ competicion.localizacion }} </li>                                                */
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="toggle">*/
/*                                         <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Listado de participantes</div>*/
/*                                         <div class="togglec">*/
/*                                             <div class="table-responsive">*/
/*                                                 <table id="tablaPadel" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                                                     <thead>*/
/*                                                         <tr>*/
/*                                                             <th>Usuario</th>*/
/*                                                             <th>Pareja</th>   									*/
/*                                                         </tr>*/
/*                                                     </thead>*/
/* */
/*                                                     <tbody>*/
/*                                                         {% for inscripcion in competicion.inscripciones %}*/
/*                                                             <tr>                                                    */
/*                                                                 <td>{{inscripcion.jugador.username}}</td>*/
/*                                                                 <td>{{inscripcion.nombrePareja}}</td>									                                                    */
/*                                                             </tr>*/
/*                                                         {% endfor %}*/
/*                                                     </tbody>*/
/*                                                 </table>*/
/*                                             </div>*/
/* */
/*                                         </div>*/
/*                                     </div>                   */
/*                                     {% if (is_granted('IS_AUTHENTICATED_FULLY') or is_granted('IS_AUTHENTICATED_REMEMBERED') ) %}                    */
/*                                         {% if competicion.estado == "Cerrada" %}                                        */
/*                                             <button type="button" class="btn disabled btn-block btn-lg" data-toggle="tooltip" title="Debe publicar la competición antes de que se permita la inscripción">Inscribirse</button>*/
/*                                             {% if creador %}*/
/*                                                 {% if competicion.recursos is empty %}*/
/*                                                     {# Publicación de la competición una vez toda la información sea rellenada, comprobar que no haya información relevante vacía                                            #}*/
/*                                                     <button type="button" class="btn disabled btn-block btn-lg" data-toggle="tooltip" title="Para publicar esta competición debe añadir recursos en la pestaña 'Normas, ajustes y recursos'">Publicar competición</button>*/
/*                                                 {% else %}*/
/*                                                     <a href="{{ path('publicar', { 'idCompeticion': competicion.id }) }}" type="button" class="btn btn-success btn-block btn-lg" >Publicar competición</a>*/
/*                                                 {% endif %}                                                */
/*                                             {% endif %}*/
/*                                         {% else %}                                              */
/*                                             {% if inscripcion %}*/
/*                                                 {% if competicion.numJornadas == 0 %}*/
/*                                                     <button  type="button" class="btn btn-danger btn-block btn-lg" data-toggle="modal" data-target="#abandonarCompeticion">Abandonar Competición</button>*/
/*                                                     <div class="modal fade" id="abandonarCompeticion" tabindex="-1" role="dialog" aria-labelledby="Abandonar Competición" aria-hidden="true">*/
/*                                                         <div class="modal-dialog modal-sm">*/
/*                                                             <div class="modal-content">*/
/*                                                                 <div class="center nobottommargin fancy-title title-bottom-border darkgrey">      */
/*                                                                     <h4><span>¿Está seguro que desea abandonar esta competición?</span></h4>             */
/*                                                                 </div>*/
/*                                                                 <div class="center">*/
/*                                                                     <a href="{{ path('abandonarCompeticion', { 'idInscripcion': inscripcion.id }) }}" type="button" class="btn btn-success" style="margin: 10px;">Confirmar</a>*/
/*                                                                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             {% else %}            */
/*                                                 <button  type="button" class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#seleccionarPreferencia">Inscribirse</button>*/
/*                                                 <div class="modal fade" id="seleccionarPreferencia" tabindex="-1" role="dialog" aria-labelledby="Preferencia horaria" aria-hidden="true">*/
/*                                                     <div class="modal-dialog">*/
/*                                                         <div class="modal-content">    */
/*                                                             {{ render(controller("PadelScheduleMainBundle:Main:seleccionarPreferencias",*/
/*                                                             { 'idCompeticion': competicion.id }*/
/*                                                         )) }}*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div> */
/*                                             {% endif %}             */
/*                                         {% endif %}             */
/*                                     {% endif %}             */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="clear"></div>				*/
/* */
/* */
/*                             </div>*/
/*                             <div class="tab-content clearfix" id="tab-2">*/
/*                                 <div class="content-wrap">*/
/* */
/*                                     <div class="parallax header-stick bottommargin-lg" style="padding: 60px 0; background-image:  url({{asset('bundles/padelschedulemain/images/parallaxPaddsdel1.jpg')}}); height: auto;" data-stellar-background-ratio="0.5">*/
/* */
/*                                         <div class="container clearfix">*/
/* */
/*                                             <div class="events-calendar">*/
/*                                                 <div class="events-calendar-header clearfix">*/
/*                                                     <h2>Events Overview</h2>*/
/*                                                     <h3 class="calendar-month-year">*/
/*                                                         <span id="calendar-month" class="calendar-month"></span>*/
/*                                                         <span id="calendar-year" class="calendar-year"></span>*/
/*                                                         <nav>*/
/*                                                             <span id="calendar-prev" class="calendar-prev"><i class="icon-chevron-left"></i></span>*/
/*                                                             <span id="calendar-next" class="calendar-next"><i class="icon-chevron-right"></i></span>*/
/*                                                             <span id="calendar-current" class="calendar-current" title="Got to current date"><i class="icon-reload"></i></span>*/
/*                                                         </nav>*/
/*                                                     </h3>*/
/*                                                 </div>*/
/*                                                 <div id="calendar" class="fc-calendar-container"></div>*/
/*                                             </div>*/
/* */
/*                                             <script type="text/javascript">*/
/*                                                 //Poblamos el calendario con los partidos ya colocados, modificando la variable canvasEvents*/
/*                                                 var canvasEvents = {*/
/*                                                     {% for partido in competicion.partidos %}*/
/*                                                         '{{partido.fechaHora|date('m-d-Y')}}' : '{{partido.fechaHora|date('G:i')}} - {{partido.inscripcion1.jugador.username}} y {{partido.inscripcion1.nombrePareja}} vs {{partido.inscripcion2.jugador.username}} y {{partido.inscripcion2.nombrePareja}}',                                                         */
/*                                                     {% endfor %}                                                            */
/*                                                 };*/
/*                                                 var cal = $('#calendar').calendario({*/
/*                                                 onDayClick: function ($el, $contentEl, dateProperties) {*/
/* */
/*                                                 for (var key in dateProperties) {*/
/*                                                 console.log(key + ' = ' + dateProperties[ key ]);*/
/*                                                 }*/
/* */
/*                                                 },*/
/*                                                         caldata: canvasEvents*/
/*                                                 }),*/
/*                                                         $month = $('#calendar-month').html(cal.getMonthName()),*/
/*                                                         $year = $('#calendar-year').html(cal.getYear());*/
/*                                                         $('#calendar-next').on('click', function () {*/
/*                                                 cal.gotoNextMonth(updateMonthYear);*/
/*                                                 });*/
/*                                                         $('#calendar-prev').on('click', function () {*/
/*                                                 cal.gotoPreviousMonth(updateMonthYear);*/
/*                                                 });*/
/*                                                         $('#calendar-current').on('click', function () {*/
/*                                                 cal.gotoNow(updateMonthYear);*/
/*                                                 });*/
/*                                                         function updateMonthYear() {*/
/*                                                         $month.html(cal.getMonthName());*/
/*                                                                 $year.html(cal.getYear());*/
/*                                                         }*/
/* */
/*                                             </script>*/
/* */
/*                                         </div>*/
/* */
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="tab-content clearfix" id="tab-3">*/
/* {#                              Tabla de clasificación  #}*/
/*                                 <div class="col_half">*/
/* */
/*                                     <div class="table-responsive">*/
/*                                         <table id="tablaPadel" class="tablaClasificacion table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                                             <thead>*/
/*                                                 <tr>*/
/*                                                     <th>Posición</th>*/
/*                                                     <th>Jugador 1</th>*/
/*                                                     <th>Jugador 2</th>									*/
/*                                                     <th>PG</th>									                                                    								*/
/*                                                     <th>PP</th>									*/
/*                                                     <th>Puntos</th>									*/
/*                                                 </tr>*/
/*                                             </thead>*/
/*                                             <tfoot>*/
/*                                                 <tr>*/
/*                                                     <th>Posición</th>*/
/*                                                     <th>Jugador 1</th>*/
/*                                                     <th>Jugador 2</th>									*/
/*                                                     <th>PG</th>									                                                    */
/*                                                     <th>PP</th>									*/
/*                                                     <th>Puntos</th>										*/
/*                                                 </tr>*/
/*                                             </tfoot>*/
/*                                             <tbody>*/
/*                                                 {% for inscripcion in competicion.inscripciones %}*/
/*                                                     <tr>*/
/*                                                         <td></td>*/
/*                                                         <td>{{inscripcion.jugador.username}}</td>*/
/*                                                         <td>{{inscripcion.nombrePareja}}</td>									*/
/*                                                         <td>{{inscripcion.partidosGanados}}</td>									                                                        					*/
/*                                                         <td>{{inscripcion.partidosPerdidos}}</td>									*/
/*                                                         <td>{{inscripcion.partidosGanados * competicion.puntosPorGanar + inscripcion.partidosPerdidos * competicion.puntosPorPerder}}</td>*/
/*                                                     </tr>                                                    */
/*                                                 {% endfor %}*/
/* */
/*                                             </tbody>*/
/*                                         </table>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <script>*/
/*                                     $(document).ready(function() {*/
/*                                     $('.tablaClasificacion').DataTable({*/
/*                                     "bFilter":  false,*/
/*                                             "paging":   false,*/
/*                                             "columns": [*/
/*                                             {"orderable":false},*/
/*                                             {"orderable":false},*/
/*                                             {"orderable":false},                                            */
/*                                             {"orderable":false},*/
/*                                             {"orderable":false},*/
/*                                             {"orderable":false}*/
/*                                             ],*/
/*                                             "info":     false,*/
/*                                             "order": [[ 5, "desc" ]]*/
/*                                     });                                    {#                                        Añadimos la posición por orden de puntos #}*/
/*                                                 $('.tablaClasificacion tbody tr').each(function(index){*/
/*                                         $('td:first-child', this).html(index + 1);*/
/*                                         });*/
/*                                         });                                </script>*/
/* */
/*                                 */
/*                                 <div class="col_half col_last">*/
/*                                     {% if competicion.numJornadas == 0 %}*/
/*                                         {% if creador %}*/
/*                                             {# Comprobamos hay suficientes inscripciones para generar el cuadrante y cerrar las inscripciones #}*/
/*                                             {% if competicion.inscripciones|length < 2 %}*/
/*                                                 <button  type="button" class="btn disabled btn-block btn-lg" data-toggle="tooltip" title="Para generar los cruces entre parejas se debe haber publicado previamente la competición">Generar cuadrante</button>*/
/*                                             {% else %}*/
/*                                                 <button  onclick="window.location.href = '{{ path('generarCuadrante', { 'idCompeticion':competicion.id }) }}'" type="button" class="button button-lime button-rounded button-3d btn-block btn-lg">Generar cuadrante</button>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/*                                     {% else %}*/
/*                                         {#Generamos tabla con cuadrante#}*/
/*                                         <div>*/
/* */
/*                                             <form class="inline">*/
/*                                                 <label class="inline-block"> Seleccione la jornada a visualizar </label>*/
/*                                                 <select id="selectJornada">*/
/*                                                     {% for i in 1..competicion.numJornadas %}*/
/*                                                         {% if i == competicion.jornadaActual %}*/
/*                                                             <option selected="selected" value="{{i}}">{{i}}</option>*/
/*                                                         {% else %}*/
/*                                                             <option value="{{i}}">{{i}}</option>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </form>*/
/*                                         </div>*/
/*                                         <div id="jornada">                                      */
/*                                             {{ render(controller("PadelScheduleMainBundle:Main:buscarJornada",*/
/*                                                             { 'idCompeticion': competicion.id,*/
/*                                                               'numJornada': (competicion.jornadaActual == 0) ? 1 : competicion.jornadaActual   }*/
/*                                                         )) }}*/
/*                                         </div>*/
/* */
/* */
/*                                         <script>*/
/*                                             {#  Script para mostrar las jornadas de forma dinámica  #}*/
/*                                                         $(document).ready(function () {*/
/*                                                 $("#selectJornada").on('change', function () {*/
/*                                                 $('#jornada').load(Routing.generate('buscarJornada', { idCompeticion:{{competicion.id}}, numJornada: this.value }));*/
/*                                                 });*/
/*                                                 });</script>*/
/*                                             {% if creador %}*/
/*                                                 */
/*                                                 {% if competicion.jornadaActual < competicion.numJornadas %}*/
/*                                                 <label> Próxima jornada: {{ competicion.jornadaActual + 1 }} </label>    */
/*                                                 <button type="button" class="button button-lime button-rounded button-3d btn-block btn-lg" data-toggle="modal" data-target="#modalGenerarHorario">Generar fechas</button>*/
/* */
/*                                                 <div class="modal fade" id="modalGenerarHorario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                                                     <div class="modal-dialog">*/
/*                                                         <div class="modal-body">*/
/*                                                             <div class="modal-content">*/
/*                                                                 <div class="modal-header">*/
/*                                                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                                                     <h4 class="modal-title" id="myModalLabel">Autogeneración de fechas</h4>*/
/*                                                                 </div>*/
/*                                                                 <div class="modal-body">*/
/*                                                                     <label>Seleccione el rango de fechas en que se colocarán los partidos:</label>*/
/*                                                                     <input type="text" class="sm-form-control daterange1" value="" />*/
/*                                                                 </div>*/
/*                                                                 <div class="modal-footer">*/
/*                                                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                                                                                                                                        */
/*                                                                     <button type="button" class="btn btn-primary generarFechas">Generar fechas</button>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div> */
/*                                                 <script>*/
/*                                                             $(function () {                                                            */
/*                                                             inicio = new moment();*/
/*                                                             inicio = inicio.add(1, 'days')*/
/*                                                                     $(".daterange1").daterangepicker({*/
/*                                                             locale: {*/
/*                                                             "format": 'DD-MM-YYYY',*/
/*                                                                     "applyLabel": "Aceptar",*/
/*                                                                     "cancelLabel": "Cancelar",*/
/*                                                                     "fromLabel": "Desde",*/
/*                                                                     "toLabel": "A",*/
/*                                                                     "customRangeLabel": "Custom",*/
/*                                                                     "daysOfWeek": [*/
/*                                                                             "D",*/
/*                                                                             "L",*/
/*                                                                             "M",*/
/*                                                                             "X",*/
/*                                                                             "J",*/
/*                                                                             "V",*/
/*                                                                             "S"*/
/*                                                                     ],*/
/*                                                                     "monthNames": [*/
/*                                                                             "Enero",*/
/*                                                                             "Febrero",*/
/*                                                                             "Marzo",*/
/*                                                                             "Abril",*/
/*                                                                             "Mayo",*/
/*                                                                             "Junio",*/
/*                                                                             "Julio",*/
/*                                                                             "Agosto",*/
/*                                                                             "Septiembre",*/
/*                                                                             "Octubre",*/
/*                                                                             "Noviembre",*/
/*                                                                             "Diciembre"*/
/*                                                                     ],*/
/*                                                                     "firstDay": 1*/
/*                                                             },*/
/*                                                                     buttonClasses: "button button-rounded button-mini nomargin",*/
/*                                                                     applyClass: "button-color",*/
/*                                                                     cancelClass: "button-light",*/
/*                                                                     startDate: inicio.format("D-M-YYYY"),*/
/*                                                                     endDate: inicio.add(7, 'days').format("D-M-YYYY")*/
/*                                                             });*/
/*                                                             $(".generarFechas").click(function () {*/
/*                                                                 rango = $(".daterange1").val().split(" - ");*/
/*                                                                 window.location.href = Routing.generate('generarHorario', { idCompeticion:{{competicion.id}}, jornada:{{competicion.jornadaActual+1}}, fechaInicio: rango[0], fechaFin: rango[1]});*/
/*                                                             });*/
/*                                                             });*/
/*                                                 </script>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                 </div>*/
/* */
/* */
/* */
/*                             </div>*/
/* */
/*                             <div class="tab-content clearfix" id="tab-4">*/
/*                                 <div class="fancy-title title-bottom-border title-center"><h4><i class="icon-exclamation-sign"></i>    Normas</h4></div>*/
/*                                 <p> {{ competicion.normas }} </p>*/
/*                                 <div class="fancy-title title-bottom-border title-center"><h4><i class="icon-params"></i>    Método de puntuación</h4></div>*/
/*                                 <div class="col_half center nobottommargin">*/
/*                                     <p><label><i class="icon-arrow-up2"></i> Puntos por ganar partido:</label> {{competicion.puntosPorGanar}} </p>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_half col_last center nobottommargin">*/
/*                                     <p><label><i class="icon-arrow-down2"></i> Puntos por perder partido:</label> {{competicion.puntosPorPerder}} </p>*/
/*                                 </div>*/
/*                                 <div class="clear"> </div>*/
/*                                 <div class="fancy-title title-bottom-border title-center"><h4><i class="icon-th-list"></i>    Listado de recursos</h4></div>*/
/*                                 <div class="table-responsive">*/
/*                                     <table id="tablaPadel" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <th>Club</th>*/
/*                                                 <th>Cancha</th>*/
/*                                                 <th>Horario en lunes</th>									*/
/*                                                 <th>Direccion</th>*/
/*                                                     {% if creador %}*/
/*                                                     <th></th>*/
/*                                                     {% endif %}*/
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tfoot>*/
/*                                             <tr>*/
/*                                                 <th>Club</th>*/
/*                                                 <th>Cancha</th>*/
/*                                                 <th>Horario en lunes</th>									*/
/*                                                 <th>Direccion</th>	*/
/*                                                     {% if creador %}*/
/*                                                     <th></th>*/
/*                                                     {% endif %}*/
/*                                             </tr>*/
/*                                         </tfoot>*/
/*                                         <tbody>*/
/*                                             {% for recurso in competicion.recursos %}*/
/*                                                 <tr>*/
/*                                                     <td>{{recurso.club}}</td>*/
/*                                                     <td>{{recurso.cancha}}</td>*/
/*                                                     <td>{{recurso.horarioLunes}}</td>									*/
/*                                                     <td>{{recurso.direccion}}</td>*/
/*                                                     {% if creador %}*/
/*                                                         <td class="text-center col-eliminar"> <a href="{{ path('eliminarRecurso', { 'idCompeticion': competicion.id,  'idRecurso': recurso.id }) }}" <i class="icon-line-delete"></i></td>                                                    */
/*                                                         {% endif %}*/
/*                                                 </tr>*/
/*                                             {% endfor %}*/
/*                                         </tbody>*/
/*                                     </table>*/
/*                                 </div>*/
/* */
/*                                 {% if creador %}*/
/*                                     */
/*                                     <button type="button" class="button button-rounded button-lime btn-block" data-toggle="modal" data-target="#crearRecurso">Añadir recurso a la competición</button>*/
/*                                     <div class="modal fade" id="crearRecurso" tabindex="-1" role="dialog" aria-labelledby="Preferencia horaria" aria-hidden="true">*/
/*                                         <div class="modal-dialog" style="width: 95%">*/
/*                                             <div class="modal-content">    */
/*                                                 {{ render(controller("PadelScheduleMainBundle:Main:crearRecurso",*/
/*                                                     { 'idCompeticion': competicion.id }*/
/*                                                 )) }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div> */
/*                                     */
/*                                     {% if competicion.estado == "Cerrada" %}*/
/*                                         <a href="{{ path('modificarCompeticion', { 'idCompeticion': competicion.id }) }}" type="button" class="button button-rounded button-lime btn-block center">Modificar información de competición</a>*/
/*                                     */
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>                                            */
/* */
/*     </section>*/
/* */
/* {% endblock content %}*/
