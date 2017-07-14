<?php

namespace PadelSchedule\MainBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use PadelSchedule\MainBundle\Entity\Competicion;
use PadelSchedule\MainBundle\Entity\Inscripcion;
use PadelSchedule\MainBundle\Entity\Partido;
use PadelSchedule\MainBundle\Entity\Recurso;
use PadelSchedule\MainBundle\Entity\Mensaje;
use PadelSchedule\MainBundle\Entity\Notificacion;
use PadelSchedule\UserBundle\Entity\User;
use PadelSchedule\MainBundle\Form\Type\InscripcionType;
use PadelSchedule\MainBundle\Form\Type\CompeticionType;
use PadelSchedule\MainBundle\Form\Type\RecursoType;
use PadelSchedule\MainBundle\Form\Type\MensajeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
//login
use Symfony\Component\Security\Core\SecurityContextInterface;

class MainController extends Controller {

    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction() {
        $competicionesCreadas = NULL;
        $competicionesInscrito = NULL;
        $repositorio = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Competicion');
        //Obtenemos las competiciones ordenadas por fecha
        $query = $repositorio->createQueryBuilder('c')
                ->where('c.fechaInicio > :today ')
                ->orderBy('c.fechaInicio', 'ASC')
                ->setParameter('today', date("Y-m-d"))
                ->getQuery();

        $competiciones = $query->getResult();
        if (TRUE === $this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $idUsuario = $this->getUser()->getId();
            //Obtenemos las competiciones que el usuario ha creado
            $query = $repositorio->createQueryBuilder('c')
                    ->where('c.creador = :idCreador ')
                    ->setParameter('idCreador', $idUsuario)
                    ->getQuery();

            $competicionesCreadas = $query->getResult();

            //Obtenemos las competiciones en las que el usuario participa
            $query = $repositorio->createQueryBuilder('c')
                    ->innerJoin('c.inscripciones', 'i')
                    ->where('i.jugador = :idUsuario')
                    ->setParameter('idUsuario', $idUsuario)
                    ->getQuery();

            $competicionesInscrito = $query->getResult();
        }

        return $this->render('PadelScheduleMainBundle:Main:index.html.twig', array(
                    'competiciones' => $competiciones,
                    'competicionesCreadas' => $competicionesCreadas,
                    'competicionesInscrito' => $competicionesInscrito
        ));
    }

    /**
     * @Route("/perfil/{idUsuario}", name="verPerfil", options={"expose"=true})
     */
    public function verPerfil(Request $request, $idUsuario) {

        $repositorio = $this->getDoctrine()
                ->getRepository('PadelScheduleUserBundle:User');

        $usuario = $repositorio->find($idUsuario);
        return $this->render(
                        'PadelScheduleMainBundle:Main:verPerfil.html.twig', array(
                    'usuario' => $usuario
        ));
    }

    /**
     * @Route("/crear_competicion", name="crearCompeticion") 
     */
    public function crearCompeticionAction(Request $request) {
        $competicion = new Competicion();

        $form = $this->createForm(new CompeticionType(), $competicion);

        $form->handleRequest($request);
        if ($form->isValid()) {
            // Guardamos la nueva competicion en la BD
            $competicion->setCreador($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($competicion);
            $em->flush();
            //Redireccionamos a la pagina de competicion
            return $this->redirectToRoute('competicion', array(
                        'Request' => $request,
                        'idCompeticion' => $competicion->getId(),
            ));
        }
        return $this->render('PadelScheduleMainBundle:Competitions:crearCompeticion.html.twig', array(
                    'form' => $form->createView()
        ));
    }
 
    /**
     * @Route("/modificar_competicion/{idCompeticion}", name="modificarCompeticion") 
     */
    public function modificarCompeticionAction(Request $request, $idCompeticion) {
        $repositorio = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Competicion');

        $competicion = $repositorio->find($idCompeticion);
        
        $form = $this->createForm(new CompeticionType(), $competicion);

        $form->handleRequest($request);
        if ($form->isValid()) {
            // Guardamos la nueva competicion en la BD
//            $competicion->setCreador($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($competicion);
            $em->flush();
            //Redireccionamos a la pagina de competicion
            return $this->redirectToRoute('competicion', array(
                        'Request' => $request,
                        'idCompeticion' => $competicion->getId(),
            ));
        }
        return $this->render('PadelScheduleMainBundle:Competitions:modificarCompeticion.html.twig', array(
                    'form' => $form->createView()
        ));
    }
 
    /**
     * @Route("/verCompeticion/{idCompeticion}", name="competicion", options={"expose"=true}) 
     */
    public function verCompeticionAction(Request $request, $idCompeticion) {
        $competicion = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Competicion')
                ->find($idCompeticion);

//  Obtener todos partidos de esta competicion para generar las jornadas
        $partidos = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Partido')
                ->findByCompeticion($competicion);


        $inscripcion = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Inscripcion')
                ->findOneBy(array('jugador' => $this->getUser(), 'competicion' => $competicion)
        );



        return $this->render(
                        'PadelScheduleMainBundle:Competitions:verCompeticion.html.twig', array(
                    'competicion' => $competicion,
                    'inscripcion' => $inscripcion,
                    'partidos' => $partidos,
        ));
    }

    /**
     * @Route("/publicarCompeticion?competicion={idCompeticion}", name="publicar") 
     */
    public function publicarCompeticionAction(Request $request, $idCompeticion) {
        $competicion = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Competicion')
                ->find($idCompeticion);

        $competicion->setEstado("Abierta");

        $em = $this->getDoctrine()->getManager();
        $em->persist($competicion);
        $em->flush();
        return $this->redirectToRoute('competicion', array('idCompeticion' => $idCompeticion));
    }

    public function competicionesDeUsuarioAction($idUsuario) {

        $repositorio = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Competicion');


        $query = $repositorio->createQueryBuilder('c')
                ->where('c.creador = :idCreador ')
                ->setParameter('idCreador', $idUsuario)
                ->getQuery();

        $competicionesCreadas = $query->getResult();

        $em = $this->getDoctrine()->getManager();

        $query = $repositorio->createQueryBuilder('c')
                ->innerJoin('c.inscripciones', 'i')
                ->where('i.jugador = :idUsuario')
                ->setParameter('idUsuario', $idUsuario)
                ->getQuery();

        $competicionesInscrito = $query->getResult();


        return $this->render(
                        'PadelScheduleMainBundle:Competitions:competicionesDeUsuario.html.twig', array(
                    'competicionesCreadas' => $competicionesCreadas,
                    'competicionesInscrito' => $competicionesInscrito
        ));
    }

    public function competicionesInscritoAction($idUsuario) {

        $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder()
                ->select('c')
                ->from('PadelScheduleMainBundle:Competicion', 'c')
                ->innerJoin('c.inscripciones', 'i')
                ->where('i.jugador = :idUsuario')
                ->setParameter('idUsuario', $idUsuario);

        $query = $qb->getQuery();

        $competiciones = $query->getResult();


        return $this->render(
                        /* Cambiar nombre */
                        'PadelScheduleMainBundle:Competitions:mostrarCompeticion.html.twig', array(
                    'competicionesInscrito' => $competiciones,
        ));
    }

    /**
     * @Route("/seleccionarPreferencias?competicion={idCompeticion}", name="seleccionarPreferencias") 
     */
    public function seleccionarPreferenciasAction(Request $request, $idCompeticion) { //cambiar nombre por inscribirse    
        $inscripcion = new Inscripcion();
        $competicion = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Competicion')
                ->find($idCompeticion);

        $form = $this->createForm(new InscripcionType(), $inscripcion);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $inscripcion->setJugador($this->getUser());
            $inscripcion->setCompeticion($competicion);

            $em = $this->getDoctrine()->getManager();
            $em->persist($inscripcion);
            $em->flush();
            return $this->redirectToRoute('competicion', array('idCompeticion' => $idCompeticion));
        }
        return $this->render('PadelScheduleMainBundle:Competitions:seleccionarPreferencia.html.twig', array(
                    'form' => $form->createView(),
                    'competicion' => $competicion,
        ));
    }

    /**
     * @Route("/abandonarCompeticion?inscripcion={idInscripcion}", name="abandonarCompeticion") 
     */
    public function abandonarCompeticionAction($idInscripcion) {
//    if (!$usuario) {
//        throw $this->createNotFoundException('No guest found');
//    }
//    if (!$competicion) {
//        throw $this->createNotFoundException('No guest found');
//    }

        $em = $this->getDoctrine()->getEntityManager();
        $inscripcion = $em->getRepository('PadelScheduleMainBundle:Inscripcion')->find($idInscripcion);
        $idCompeticion = $inscripcion->getCompeticion()->getId();
        $em->remove($inscripcion);
        $em->flush();

        return $this->redirect($this->generateUrl('competicion', array('idCompeticion' => $idCompeticion)));
    }

    /**
     * @Route("/competicion/{idCompeticion}/{numJornada}", name="buscarJornada", options={"expose"=true}))
     */
    public function buscarJornadaAction($idCompeticion, $numJornada) {
        $competicion = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Competicion')
                ->find($idCompeticion);

        $partidos = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Partido')
                ->findBy(array('jornada' => $numJornada, 'competicion' => $idCompeticion)
        );
        return $this->render('PadelScheduleMainBundle:Competitions:tablaJornada.html.twig', array(
                    'competicion' => $competicion,
                    'partidos' => $partidos,
        ));
    }

    /**
     * @Route("/obtenerHorario/{idRecurso}", name="obtenerHorarioRecurso", options={"expose"=true}))
     */
    public function obtenerHorarioAction($idRecurso) {
        $em = $this->getDoctrine()->getManager();
        $recurso = $em->getRepository('PadelScheduleMainBundle:Recurso')
                ->find($idRecurso);

//         $nombreRecurso = $recurso.club;
//         $miArray = array(
//             'nombre' => $recurso.getClub()
//         );
        return new Response($recurso . getClub());
    }

    /**
     * @Route("/generarCuadrante", name="generarCuadrante") 
     */
    public function generarCuadranteAction(Request $request) {
        $idCompeticion = $request->query->get("idCompeticion");
        $em = $this->getDoctrine()->getManager();
        $competicion = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Competicion')
                ->find($idCompeticion);
        //Obtenemos todas las inscripciones realizadas
        $inscripciones = $competicion->getInscripciones()->getValues();

        if (count($inscripciones) % 2 != 0) {
            array_push($inscripciones, null);
        }

        $mitad1 = array_splice($inscripciones, (count($inscripciones) / 2));
        $mitad2 = $inscripciones;
        $competicion->setNumJornadas(count($mitad2) + count($mitad1) - 1);
        for ($i = 0; $i < $competicion->getNumJornadas(); $i++) {
            for ($j = 0; $j < count($mitad2); $j++) {
                //Se crea el partido
                if (!(($mitad1[$j] == null) or ( $mitad2[$j] == null))) {
                    $partido = new Partido();
                    $partido->setInscripcion1($mitad2[$j])
                            ->setInscripcion2($mitad1[$j])
                            ->setJornada($i + 1)
                            ->setCompeticion($competicion);
                    $em->persist($partido);
                }
            }
            if (count($mitad2) + count($mitad1) - 1 > 2) {
                $x = array_splice($mitad2, 1, 1);
                $y = array_shift($x);

                array_unshift($mitad1, $y);
                array_push($mitad2, array_pop($mitad1));
            }
        }
        $em->flush();
        return $this->redirect($this->generateUrl('competicion', array('idCompeticion' => $idCompeticion)));
    }

    /**
     * @Route("/crearRecurso?competicion={idCompeticion}", name="crearRecurso") 
     */
    public function crearRecursoAction(Request $request, $idCompeticion) {
        $recurso = new Recurso();
        $competicion = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Competicion')
                ->find($idCompeticion);

        $form = $this->createForm(new RecursoType(), $recurso);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $recurso->setCompeticion($competicion);

            $em = $this->getDoctrine()->getManager();
            $em->persist($recurso);
            $em->flush();
            return $this->redirectToRoute('competicion', array('idCompeticion' => $idCompeticion));
        }
        return $this->render('PadelScheduleMainBundle:Competitions:crearRecurso.html.twig', array(
                    'form' => $form->createView(),
                    'competicion' => $competicion,
        ));
    }

    /**
     * @Route("/buzon/eliminarRecurso/{idCompeticion}/{idRecurso}", name="eliminarRecurso")
     */
    public function eliminarRecurso($idCompeticion, $idRecurso) {
        $recurso = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Recurso')
                ->find($idRecurso);

        $em = $this->getDoctrine()->getManager();

        $em->remove($recurso);
        $em->flush();
        return $this->redirectToRoute('competicion', array('idCompeticion' => $idCompeticion));
    }

    /**
     * @Route("/generacionHorario/{idCompeticion}/{jornada}/{fechaInicio}/{fechaFin}", name="generarHorario", options={"expose"=true}) 
     */
    public function generarHorarioJornada(Request $request, $idCompeticion, $jornada, $fechaInicio, $fechaFin) {

        $data = array();

        $form = $this->createFormBuilder($data)
                ->add('asignacion', 'hidden')
                ->add('send', 'submit')
                ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            //Modificar la proxima jornada a modificar en la competición

            $em = $this->getDoctrine()->getManager();
            $competicion = $this->getDoctrine()
                    ->getRepository('PadelScheduleMainBundle:Competicion')
                    ->find($idCompeticion);
            $competicion->setJornadaActual($jornada);
            $data = $form->getData()['asignacion'];
            $info = json_decode($data)->partidos;
            foreach ($info as $elem) {
                $partido = $this->getDoctrine()
                        ->getRepository('PadelScheduleMainBundle:Partido')
                        ->find($elem->id);
                $partido->setRecursoAsignado($elem->recurso);
                $partido->setFechaHora(date_create_from_format('d/m/Y G:i', "$elem->fecha $elem->hora"));
            }
            $em->flush();
//            return $this->render('PadelScheduleMainBundle:Competitions:debug.html.twig', array(
//                'data' => $time
//            ));            
            return $this->redirectToRoute('competicion', array('idCompeticion' => $idCompeticion));
        }

        $recursos = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Recurso')
                ->findBy(array('competicion' => $idCompeticion)
        );
        //cambiar jornada por la actual, la que se va a jugar
        $partidos = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Partido')
                ->findBy(array('jornada' => $jornada, 'competicion' => $idCompeticion)
        );
 
        return $this->render('PadelScheduleMainBundle:Competitions:generacionHorario.html.twig', array(
                    'recursos' => $recursos,
                    'partidos' => $partidos,
                    'fechaInicio' => $fechaInicio,
                    'fechaFin' => $fechaFin,
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/notificaciones", name="listadoNotificaciones")
     */
    public function verListadoNotificacionesAction(Request $request) {
        $notificaciones = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Notificacion')
                ->findBy(array('destinatario' => $this->getUser())
        );

        return $this->render('PadelScheduleMainBundle:Main:notificacionesEntrantes.html.twig', array(
                    'notificaciones' => $notificaciones,
        ));
    }

    /**
     * @Route("/buzon/verNotificacion/{idNotificacion}", name="verNotificacion", options={"expose"=true})
     */
    public function verNotificacion($idNotificacion) {
        
        $notificacion = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Notificacion')
                ->find($idNotificacion);
        if (!$notificacion) {
            throw $this->createNotFoundException(
                    'No se ha encontrado notificacion con la id ' . $idNotificacion
            );
        }

        return $this->render('PadelScheduleMainBundle:Main:verNotificacion.html.twig', array(
                    'notificacion' => $notificacion,
        ));
    }

    /**
     * @Route("/buzon", name="buzon")
     */
    public function verBuzonAction(Request $request) {
        $mensajes = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Mensaje')
                ->findBy(array('destinatarioMensaje' => $this->getUser())
        );


        return $this->render('PadelScheduleMainBundle:Main:buzonEntrada.html.twig', array(
                    'mensajes' => $mensajes,
        ));
    }

    /**
     * @Route("/buzon/verMensaje/{idMensaje}", name="verMensaje", options={"expose"=true})
     */
    public function verMensaje($idMensaje) {
        $em = $this->getDoctrine()->getManager();
        $mensaje = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Mensaje')
                ->find($idMensaje);
        if (!$mensaje) {
            throw $this->createNotFoundException(
                    'No se ha encontrado mensaje con la id ' . $idMensaje
            );
        }

        $mensaje->setLeido(true);
        $em->flush();


        return $this->render('PadelScheduleMainBundle:Main:verMensaje.html.twig', array(
                    'mensaje' => $mensaje,
        ));
    }

    /**
     * @Route("/buzon/eliminarMensaje/{idMensaje}", name="eliminarMensaje")
     */
    public function eliminarMensaje($idMensaje) {
        $mensaje = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Mensaje')
                ->find($idMensaje);

        $em = $this->getDoctrine()->getManager();

        $em->remove($mensaje);
        $em->flush();
        return $this->redirectToRoute('buzon');
    }

    /**
     * @Route("/buzon/crearMensaje/{usuario}", defaults={"usuario" = ""}, name="nuevoMensaje")
     */
    public function nuevoMensaje(Request $request, $usuario) {
        $mensaje = new Mensaje();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new MensajeType(), $mensaje);

        //Si estamos contestando un mensaje, obtenemos el usuario al que contestar


        $usuarioEnvio = new ArrayCollection(array($this->getDoctrine()
                    ->getRepository('PadelScheduleUserBundle:User')
                    ->findOneBy(array('username' => $usuario)
        )));
        $form->get('destinatarioMensaje')->setData($usuarioEnvio);
        $form->handleRequest($request);

        if ($form->isValid()) {
//             //Poner la hora de ahora, el sender como el sender
            $mensaje->setCreadorMensaje($this->getUser());

            $destinatarios = $form["destinatarioMensaje"]->getData();
            foreach ($destinatarios as $destinatario) {
                $mensajeAux = clone $mensaje;
                $mensajeAux->setDestinatarioMensaje($destinatario);
                $em->persist($mensajeAux);
                $em->flush();
            }
            return $this->redirectToRoute('buzon');
        }
        return $this->render('PadelScheduleMainBundle:Main:crearMensaje.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/buzon/fijarResultado/{idPartido}", name="fijarResultado")
     */
    public function fijarResultadoAction(Request $request, $idPartido) {
        $data = array();

        $form = $this->createFormBuilder($data)
                ->add('resultados', 'collection', array(
                    'type' => 'choice',
                    'label' => false,
                    'options' => array(
                        'choices' => array(
                            '0' => "0",
                            '1' => "1",
                            '2' => "2",
                            '3' => "3",
                            '4' => "4",
                            '5' => "5",
                            '6' => "6",
                            '7' => "7"
                        ),
                    ),
                ))
                ->add('send', 'submit')
                ->getForm();

        $array = array(0, 0, 0, 0, 0, 0);
        $form->get('resultados')->setData($array);

        $form->handleRequest($request);

        $partido = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Partido')
                ->find($idPartido);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $resultados = $form->getData()['resultados'];
            $idUsuario = $this->getUser()->getId();
            $creadorCompeticion = $partido->getCompeticion()->getCreador();
            $inscripcion1 = $partido->getInscripcion1();
            $inscripcion2 = $partido->getInscripcion2();
            //Si es el creador de la competición el que fija el resultado, se fija como resultado final
            if($idUsuario == $creadorCompeticion->getId()) {
                $pareja1Ganadora = 0;
                $pareja2Ganadora = 0;
                ($resultados[0] > $resultados[1] ? $pareja1Ganadora += 1 : $pareja2Ganadora += 1);
                ($resultados[2] > $resultados[3] ? $pareja1Ganadora += 1 : $pareja2Ganadora += 1);
                ($resultados[4] > $resultados[5] ? $pareja1Ganadora += 1 : $pareja2Ganadora += 1);
                if ($pareja1Ganadora > $pareja2Ganadora) {
                    $inscripcion1->setPartidosGanados($inscripcion1->getPartidosGanados() + 1);
                    $inscripcion2->setPartidosPerdidos($inscripcion2->getPartidosPerdidos() + 1);
                } else {
                    $inscripcion2->setPartidosGanados($inscripcion2->getPartidosGanados() + 1);
                    $inscripcion1->setPartidosPerdidos($inscripcion1->getPartidosPerdidos() + 1);
                }
                $partido->setResultadoFinal($resultados);
            //Si no es el creador de la competición, el resultado se almacena como resultado temporal a falta de confirmación        
            } else {
                $notificacion = new Notificacion();
                $notificacion->setCabecera("El resultado de un partido ha sido actualizado");
                $textoMensaje = "¿Desea confirmar el siguiente resultado para el partido entre "
                        . $inscripcion1->getJugador()->getUsername() . "/" . $inscripcion1->getNombrePareja() . " y "
                        . $inscripcion2->getJugador()->getUsername() . "/" . $inscripcion2->getNombrePareja() .
                        " en la competición '" . $inscripcion1->getCompeticion()->getNombre() . "'\n"
                        . "El resultado asignado ha sido: " .
                        $resultados[0] . "-" . $resultados[1] . "/" .
                        $resultados[2] . "-" . $resultados[3] . "/" .
                        $resultados[4] . "-" . $resultados[5] . ".";
                $notificacion->setMensaje($textoMensaje);
                $notificacion->setCompeticionAsociada($partido->getCompeticion());
                $notificacion->setPartidoAsociado($partido);
                $notificacion->setTipo(1);
                if ($idUsuario == $inscripcion1->getJugador()->getId()) {
                    $partido->setResultadoPropuesto1($resultados);                    
                    $notificacion->setDestinatario($inscripcion2->getJugador());
                    $em->persist($notificacion);
                } else {
                    $partido->setResultadoPropuesto2($resultados);                    
                    $notificacion->setDestinatario($inscripcion1->getJugador());
                    $em->persist($notificacion);                    
                }
            }
            $em->flush();
            return $this->redirectToRoute('competicion', array('idCompeticion' => $partido->getCompeticion()->getId()));
//            return $this->render('PadelScheduleMainBundle:Competitions:debug.html.twig', array(
//                        'data' => $resultados,
//            ));
        }

        return $this->render('PadelScheduleMainBundle:Competitions:fijarResultado.html.twig', array(
                    'partido' => $partido,
                    'form' => $form->createView(),
        ));
    }
    
    /**
     * @Route("/buzon/fijarResultadoAlternativo/{idNotificacion}", name="fijarResultadoAlternativo")
     */
    public function fijarResultadoAlternativoAction(Request $request, $idNotificacion) {
        $em = $this->getDoctrine()->getManager();
        $notificacion = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Notificacion')
                ->find($idNotificacion);
        $partido = $notificacion->getPartidoAsociado();
        $data = array();

        $form = $this->createFormBuilder($data)
                ->add('resultados', 'collection', array(
                    'type' => 'choice',
                    'label' => false,
                    'options' => array(
                        'choices' => array(
                            '0' => "0",
                            '1' => "1",
                            '2' => "2",
                            '3' => "3",
                            '4' => "4",
                            '5' => "5",
                            '6' => "6",
                            '7' => "7"
                        ),
                    ),
                ))
                ->add('send', 'submit')
                ->getForm();

        $array = array(0, 0, 0, 0, 0, 0);
        $form->get('resultados')->setData($array);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $resultados = $form->getData()['resultados'];
            $idUsuario = $this->getUser()->getId();
            $inscripcion1 = $partido->getInscripcion1();            
            //Si es el creador de la competición el que fija el resultado, se fija como resultado final
            if ($idUsuario == $inscripcion1->getJugador()->getId()) {
                $partido->setResultadoPropuesto1($resultados);                    
            } else {
                $partido->setResultadoPropuesto2($resultados);                    
            }
            $em->remove($notificacion);
            $em->flush();
            return $this->redirectToRoute('competicion', array('idCompeticion' => $partido->getCompeticion()->getId()));
//            return $this->render('PadelScheduleMainBundle:Competitions:debug.html.twig', array(
//                        'data' => $resultados,
//            ));
        }

        return $this->render('PadelScheduleMainBundle:Competitions:fijarResultado.html.twig', array(
                    'partido' => $partido,
                    'form' => $form->createView(),
        ));
    }
    

    /**
     * @Route("/usuarios", name="listadoUsuarios")
     */
    public function listadoUsuariosAction(Request $request) {
        $usuarios = $this->getDoctrine()
                ->getRepository('PadelScheduleUserBundle:User')
                ->findAll();
        return $this->render('PadelScheduleMainBundle:Main:listadoUsuarios.html.twig', array(
                    'usuarios' => $usuarios
        ));
    }

    /**
     * @Route("/competiciones", name="listadoCompeticiones")
     */
    public function listadoCompeticionesAction(Request $request) {
        $competiciones = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Competicion')
                ->findAll();
        return $this->render('PadelScheduleMainBundle:Competitions:listadoCompeticiones.html.twig', array(
                    'competiciones' => $competiciones
        ));
    }

    /**
     * @Route("/confirmarResultado/{idNotificacion}", name="confirmarResultado")
     */
    public function confirmarResultadoAction(Request $request, $idNotificacion) {
        $em = $this->getDoctrine()->getManager();
        $notificacion = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Notificacion')
                ->find($idNotificacion);
        $partido = $notificacion->getPartidoAsociado();

        //Modificamos los partidos ganados/perdidos de la pareja participante
        if ($partido->getResultadoPropuesto1() != null){
            $resultados = $partido->getResultadoPropuesto1();
            $partido->setResultadoPropuesto1(null);
            $partido->setResultadoPropuesto2(null);
        } else {
            $resultados = $partido->getResultadoPropuesto2();
            $partido->setResultadoPropuesto1(null);
            $partido->setResultadoPropuesto2(null);
        }
        
        $inscripcion1 = $partido->getInscripcion1();
        $inscripcion2 = $partido->getInscripcion2();
        $pareja1Ganadora = 0;
        $pareja2Ganadora = 0;
        ($resultados[0] > $resultados[1] ? $pareja1Ganadora += 1 : $pareja2Ganadora += 1);
        ($resultados[2] > $resultados[3] ? $pareja1Ganadora += 1 : $pareja2Ganadora += 1);
        ($resultados[4] > $resultados[5] ? $pareja1Ganadora += 1 : $pareja2Ganadora += 1);
        if ($pareja1Ganadora > $pareja2Ganadora) {
            $inscripcion1->setPartidosGanados($inscripcion1->getPartidosGanados() + 1);
            $inscripcion2->setPartidosPerdidos($inscripcion2->getPartidosPerdidos() + 1);
        } else {
            $inscripcion2->setPartidosGanados($inscripcion2->getPartidosGanados() + 1);
            $inscripcion1->setPartidosPerdidos($inscripcion1->getPartidosPerdidos() + 1);
        }
        //Confirmamos el resultado
        $partido->setResultadoFinal($resultados);
        $em->remove($notificacion);
        $em->flush();

        return $this->redirectToRoute('competicion', array('idCompeticion' => $notificacion->getCompeticionAsociada()->getId()));
    }
    
     /**
     * @Route("/elegirResultado/{idPartido}", name="elegirResultado")
     */
    public function elegirResultadoAction(Request $request, $idPartido) {
        $data = array();
        $partido = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Partido')
                ->find($idPartido);
        $form = $this->createFormBuilder($data)
                ->add('resultados', 'choice', array(
                    'expanded' => true,
                    'multiple' => false,
                    'label' => true,
                    'choices' => array(
                        1 => "Primera opción",
                        2 => "Segunda opción",
                    ),
                ))
                ->add('send', 'submit')
                ->getForm();
        
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $eleccion = $form->getData()['resultados'];
            if($eleccion == 1){
                $resultados = $partido->getResultadoPropuesto1();
                $partido->setResultadoPropuesto1(null);
                $partido->setResultadoPropuesto2(null);
            } else {
                $resultados = $partido->getResultadoPropuesto2();
                $partido->setResultadoPropuesto1(null);
                $partido->setResultadoPropuesto2(null);
            }
            
             //Modificamos los partidos ganados/perdidos de la pareja participante
            $inscripcion1 = $partido->getInscripcion1();
            $inscripcion2 = $partido->getInscripcion2();
            $pareja1Ganadora = 0;
            $pareja2Ganadora = 0;
            ($resultados[0] > $resultados[1] ? $pareja1Ganadora += 1 : $pareja2Ganadora += 1);
            ($resultados[2] > $resultados[3] ? $pareja1Ganadora += 1 : $pareja2Ganadora += 1);
            ($resultados[4] > $resultados[5] ? $pareja1Ganadora += 1 : $pareja2Ganadora += 1);
            if ($pareja1Ganadora > $pareja2Ganadora) {
                $inscripcion1->setPartidosGanados($inscripcion1->getPartidosGanados() + 1);
                $inscripcion2->setPartidosPerdidos($inscripcion2->getPartidosPerdidos() + 1);
            } else {
                $inscripcion2->setPartidosGanados($inscripcion2->getPartidosGanados() + 1);
                $inscripcion1->setPartidosPerdidos($inscripcion1->getPartidosPerdidos() + 1);
            }
            //Confirmamos el resultado
            $partido->setResultadoFinal($resultados);
            $notificacion = $this->getDoctrine()
                ->getRepository('PadelScheduleMainBundle:Notificacion')
                ->findOneBy(array('partidoAsociado' => $partido)
            );
            $em->remove($notificacion);
            $em->flush();
            return $this->redirectToRoute('competicion', array('idCompeticion' => $partido->getCompeticion()->getId()));
        }
        

        
       return $this->render('PadelScheduleMainBundle:Competitions:elegirResultado.html.twig', array(
                    'partido' => $partido,
                    'form' => $form->createView(),
        ));        
    }
}
