<!DOCTYPE html>
<html lang="en">
<head>

     <title>Neurociencias | Dr. Dionisio Redondo</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
	 
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<script>
   const constraints = {
       name: {
           presence: { allowEmpty: false }
       },
       email: {
           presence: { allowEmpty: false },
           email: true
       },
       message: {
           presence: { allowEmpty: false }
       }
   };

   const form = document.getElementById('contact-form');

   form.addEventListener('submit', function (event) {
     const formValues = {
         name: form.elements.name.value,
         email: form.elements.email.value,
         message: form.elements.message.value
     };	

     const errors = validate(formValues, constraints);

     if (errors) {
       event.preventDefault();
       const errorMessage = Object
           .values(errors)
           .map(function (fieldValues) { return fieldValues.join(', ')})
           .join("\n");

       alert(errorMessage);
     }
   }, false);
</script>
     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>

     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand">Tratamiento fisiológico y neuroquímico</a>
					<br>
					<p><a href="index.php">Neurociencias | Dr. Dionisio Redondo</a></p>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">Aportes</a></li>
                         <li><a href="#team" class="smoothScroll">Investigación</a></li>
                         <li><a href="#courses" class="smoothScroll">Testimonios</a></li>
                         <li><a href="#testimonial" class="smoothScroll">El tratamiento</a></li>
                         <li><a href="#contact" class="smoothScroll">Contacto</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="tel:+3382 2244 1100"><i class="fa fa-phone"></i> +3482 42-9804</a></li>
                         <li><a href="https://api.whatsapp.com/send?phone=+543482667130"><i class="fa fa-whatsapp" aria-hidden="true"></i>+54 3482 66-7130</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Un tratamiento innovador</h1>
                                             <h3>La innovación en el tratamiento de patologías neurológicas y neurofuncionales se manifiesta desde el interior </h3>
                                             <a href="#feature" class="section-btn btn btn-default smoothScroll">Averigua mas</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Desde la clínica a la investigación</h1>
                                             <h3>En esta dirección el Dr. Dionisio A. Redondo, médico argentino, se ha dedicado en su investigación clínica y básica, que lleva adelante con éxito, al estudio de los procesos de generación de señales cerebrales, la adquisición de éstas, su procesamiento, análisis y organización a través de técnicas dinámicas y combinaciones químicas logrando importantes resultados en Trastornos Neuromadurativos, Disfunción Cerebral, Lesión Cerebral y Epilepsias .</h3>
                                             <a href="#courses" class="section-btn btn btn-default smoothScroll">Testimonios</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>La exportación del tratamiento</h1>
                                             <h3>El Dr. Dionisio A. Redondo, actualmente exporta su tratamiento al exterior a través de una infraestructura tecnológica y humana que permite desarrollar su propuesta en pacientes distantes de México, España, Sudáfrica, Australia, Brasil. Esta modalidad ha permitido su contribución al conocimiento, a la salud y a la educación.<a rel="nofollow" href="https://www.facebook.com/neurociencias"></a></h3>
                                             <a href="#contact" class="section-btn btn btn-default smoothScroll">Contacta y te asesoraremos</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>


     <!-- TRATAMIENTO -->
     <section id="feature">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>01</span>
                              <h3>Tratamiento</h3>
                              <p>A partir de esta nueva perspectiva tecnológica trabaja sobre la neurotransmisión y otras funciones cerebrales. 
<br>Esta investigación se relacionó con la identificación de una proteína de PM 56 KDa que cambia su estado de fosforilación por la acción del método creado por el Dr. Redondo. Este hallazgo sugiere que esta proteína es parte de la cascada de amplificación de señales relacionada con la formación de circuitos neuronales en la corteza cerebral en desarrollo, sin excluir la importante acción fisiológica que ejerce en el cerebro maduro.
Se considera el trabajo del Dr. Redondo- al diseñar eficazmente un método que actúa sobre el SNC a partir de una técnica programada de tipo Química-molecular cuyos componentes inocuos, sin efectos secundarios, son un hallazgo de real jerarquía en Argentina y sin precedentes, es decir que su diseño es único.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>02</span>
                              <h3>Resumen descriptivo</h3>
                              <p>Técnica programada de tipo Químico-Molecular.<br>
<u>Incidencia directa:</u> nivel motriz y nivel intelectual
Niños y Adultos
Destacados efectos en: Coordinación de movimientos corporales (equilibrio y marcha)-Lenguaje articulado-Graves alteraciones de control de esfínteres
Cuadros con: Coeficiente Intelectual Disminuido- Hiperkinesia- Alteraciones de la Concentración Intelectual.
Incidencia directa en Conexiones Neurales –repercusión directa en capacidad intelectual
Este profesional recupera los viejos cánones del investigador médico, desde su postura de investigar y hacer consultorio, en contraposición al frío esquema tradicional que aísla al científico entre las cuatro paredes del laboratorio y lo aleja de la realidad. Sus logros son un ejemplo de los resultados a los que, aún en el marco de carencia tecnológica y financiera, se pueden obtener teniendo en claro la meta y poniendo, para llegar a ella, actitud de servicio, adquisición de conocimientos, voluntad de trabajo además de responsabilidad por el otro.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>03</span>
                              <h3>Perfil profesional</h3>
                              <p><u>Datos del Profesional:</u> 
Nacido en la ciudad de Santa Fe, reside hoy, en la ciudad de Reconquista. 
Graduado como Psicólogo en 1972 y graduado como Médico en 1981.

<u>Actividad en la investigación:</u>
Comienza con trabajo de tesis sobre Química Biológica Molecular. Observa que se reiteraban errores de diagnóstico en cuadros confundidos como Psíquico y que en realidad respondían a un Sustrato Neuro-funcional, convirtiéndose esto en un 1er aporte del investigador. 
El Segundo aporte fue el diseño de nuevos Protocolos de Combinación de elementos y sustancias. 
Es así como, en 1988, su trabajo interesa a los Doctores Mario Bunge ( residente en Canadá) y Serroni Copello (Bs. As.) quienes, no sólo apoyan esta investigación sino que también inducen a darle continuidad.</p>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- APORTES -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2>Aportes a la ciencia</h2>

                              <figure>
                                   <span><i class="fa fa-cubes"></i></span>
                                   <figcaption>
                                        <h3>La Tecnica</h3>
                                        <p>La técnica fue diseñada para intervenir sobre el Neurometabolismo: neurotransmisión (punto central del metabolismo cerebral), fosforilación de proteínas cerebrales, membrana celular, respuesta al fosfatidil inositol y acción sobre los denominados “segundos mensajeros” químicos.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-stethoscope"></i></span>
                                   <figcaption>
                                        <h3>Otras áreas de investigación clínica</h3>
                                        <p><u>Área Neurosiquiatría:</u>

Niños<br>
Logros comprobados en:<br>

Síndrome Autista: Se destaca que se lograron significativas Mejoras en niños con Conductas Autistas, sobre todo en aquellos que, estando diagnosticados como Autista, presentaban un “cuadro neurofuncional” con comprobación Electroencefalogáfica y / o RMN con Espectoscopia.
<br>Cuadros Fóbicos
Adultos:<br>

-Cuadros Depresivos<br>
-Cuadros Fóbicos<br>
-Cuadros Obsesivos; con significativas evoluciones.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-medkit"></i></span>
                                   <figcaption>
                                        <h3>Las neurociencias a la orden del día</h3>
                                        <p>Los avances en el campo de la Biología ayudaron a comprender desde otra perspectiva el funcionamiento y actividad cerebral. Tales hallazgos permitieron crear compuestos químicos para contrarestar la disfunción de neurotransmisores. A la electroencefalografía moderna establecida por Hans Berger en 1929, se sumaron en la actualidad nuevas técnicas dinámicas como la tomografía, la magnetoencefalografía y la resonancia magnética funcional.</p>
                                   </figcaption>
                              </figure>
							  
							   <figure>
                                   <span><i class="fa fa-graduation-cap"></i></span>
                                   <figcaption>
                                        <h3>Aportes a la educación</h3>
                                        <p>Un niño con Dificultades de Aprendizaje Escolar es un niño recuperable en Potencial Desarrollo Neuro-Evolutivo-Intelectual. Sobre esta Patología, Redondo trabaja con especial atención considerando que se había descuidado la atención médica sobre estos casos.
Un niño con DA (Déficit Atencional) es un niño que no aprende eficazmente con los métodos que se imparten en los sistemas tradicionales de enseñanza. En todos los países hay un 10-15% de niños que no consiguen aprender con eficacia.
Un niño con retraso en sus procesos madurativos neurológicos manifestará retrasos en la lectoescritura y el número. Es decir que la DA y la Maduración biológica están íntimamente relacionadas y esto a veces se percibe en el momento que el niño entra en la edad escolar. Hace un siglo los niños con DA eran considerados “torpes” y eran eliminados del sistema escolar y destinados al trabajo manual o a otras ocupaciones que no implicaran la lectoescritura.
Hoy día estos niños detectados a tiempo y ayudados adecuadamente, pueden llegar a la universidad con una escolaridad satisfactoria alejada del sombrío mundo de las frustraciones.
El Dr. Dionisio Redondo acompaña este proceso tratando a su vez la hiperkinesia, control de esfìnteres,articulación de las palabras. Un EEG (electroencefalograma) mostrará en muchos de estos niños signos patológicos leves y en otros signos evidentes de retraso motor, lesión mínima, retraso neurológico disfunciones y la necesidad de medicación adecuada.
</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="envio.php" method="post">
							  <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                                   <h2>Contacto</h2>
                                   <input type="text" name="name" class="form-control" placeholder="Nombre completo" required="">

                                   <input type="email" name="email" class="form-control" placeholder="Correo electronico" required="">

                                   <textarea class="form-control" rows="6" placeholder="Mensaje" name="message" required=""></textarea>

                                   <button class="submit-btn form-control" id="form-submit">Enviar</button>
                              </form>
                         </div>
						 <figure>
                                   <span><i class="fa fa-group"></i></span>
								   <br>
                                   <figcaption>
                                        <h3>Compromiso con la comunidad</h3>
                                        <p>El profesional orientó su trajo de investigación sobre la química biológica molecular.
Actualmente reside en Reconquista y su trabajo fue reconocido por la Municipalidad de esta ciudad y por la Cámara de Senadores de la Provincia de Santa Fe y llegó a interesar a los miembros del Centro Integrador de Neurociencias de Europa.

Su trayectoria fue distinguida a nivel regional al recibir en el mes de diciembre de 2001 el premio PROA en la categoría Salud y Calidad de Vida.

<br><u>Repercusiones en la prensa:</u>
”La medicina es una de las ciencias que más ha evolucionado en los últimos tiempos, junto a la capacitación de los profesionales que se encargan de practicarla. En nuestra región hay hombres con real vocación de servicio, de búsqueda permanente para llegar al conocimiento que posibilite transformar la realidad en beneficio del ser humano.
Dionisio Ángel Redondo es un profesional de la medicina, decidido a apostar por la superación de las dificultades que padecemos los seres humanos. Su trabajo en soledad y silencioso, hoy demuestra el alcance de sus objetivos a través de resultados concretos y medibles.
Ha logrado establecer una modalidad dinámica de avanzada, diseñando un tratamiento inédito que incluye una técnica programada de tipo Químico-Molecular eficaz.
La Red de padres de niños con problemas neurofuncionales trabajan activamente en su difusión” <i>(Texto extraído de: Diario El Litoral, 23 de junio de 2002, Santa Fe, Argentina )</i></p>
                                   </figcaption>
                              </figure>
                    </div>

               </div>
          </div>
     </section>


     <!-- INVESTIGACION -->
     <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Investigación <small>Quienes se benefician</small></h2>
                         </div>
                    </div>

         
Se pueden aplicar ocho fórmulas diferentes en Trastornos Neuromadurativos, Lesión cerebral y enfermedades de tipo convulsivo en niños y adultos.-<br>
El tratamiento interesa a organismos internacionales y a él acuden pacientes de toda la Rep. Argentina e inclusive de otros países. Los testimonios de pacientes también corroboran los resultados y logros obtenidos.
<br>
<u>Resumen:</u><br>
Técnica programada de tipo Químico-Molecular.
Incidencia directa: nivel motriz y nivel intelectual
Niños y Adultos
Destacados efectos en: Coordinación de movimientos corporales (equilibrio y marcha)-Lenguaje articulado-Graves alteraciones de control de esfínteres
Cuadros con: Coeficiente Intelectual Disminuido- Hiperkinesia- Alteraciones de la Concentración Intelectual.<br>
Incidencia directa en Conexiones Neurales –repercusión directa en capacidad intelectual
Este profesional recupera los viejos cánones del investigador médico, desde su postura de investigar y hacer consultorio, en contraposición al frío esquema tradicional que aísla al científico entre las cuatro paredes del laboratorio y lo aleja de la realidad. Sus logros son un ejemplo de los resultados a los que, aún en el marco de carencia tecnológica y financiera, se pueden obtener teniendo en claro la meta y poniendo, para llegar a ella, actitud de servicio, adquisición de conocimientos, voluntad de trabajo además de responsabilidad por el otro.
<br>
<u>La Técnica:</u> Fue diseñada para intervenir sobre el Neurometabolismo: neurotransmisión (punto central del metabolismo cerebral), fosforilación de proteínas cerebrales, membrana celular, respuesta al fosfatidil inositol y acción sobre los denominados “segundos mensajeros” químicos.
<br>
El producto no tiene efectos secundarios negativos, ya que produce una “acción” fisiológica y química sobre la génesis de la neurotransmisión del impulso nervioso. Los rápidos resultados obtenidos se explican por la capacidad lipofílica (llegar al sitio de acción específica) Y por su acción directa sobre la denominada inducción enzimática en relación sobre el AMP cíclico (segundo mensajero) que posibilita variadas acciones y reacciones neuroquímicas.
<br>
Este Complejo Químico creado por el Dr. Dionisio Redondo no reviste efectos secundarios negativos demostrado por la investigación básica pertinente. Las comprobaciones básicas (biología molecular) de las Acciones del Complejo Químico ( fueron realizadas en Laboratorios de Primer Nivel ) y se refiere a:

-Fosforilación de proteínas<br>
-Reacción de membrana celular<br>
-Relación fosfatidil-inositol<br>
-Relación a Segundos Mensajeros<br>
-Relaciones sobre la formación de circuitos neuronales (cerebro en desarrollo)<br>
-Acción fisiológica en Cerebro maduro.<br>
Esta Técnica requiere la síntesis en laboratorio a partir de Derivados y Subderivados de diversas bases Estructurales como precursores enzimáticos.

               </div>
          </div>
     </section>


    <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Testimonios <small> Red de Padres de Niños con problemas neurofuncionales</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                       
                                        <div class="tst-author">
                                             <h4>Paciente N (8 años)</h4>
                                             <span>Caso: Disfunción neuromotriz. 8 años. Inicia Tratamiento 10-01-02</span>
                                        </div>
                                        <p>Habla la mamá: “N, antes de empezar su tratamiento, no apoyaba el pie izquierdo (apoyaba medio pie debido a que los tendones estaban retraídos). Intentaba levantarse sola pudiéndola hacer muy pocas veces. Le faltaba flexibilidad en miembros superiores, inferiores y cintura. Hoy Lunes 22 de abril según el traumatólogo, N está mucho mejor, logró mayor independencia, apoya completo el pie izquierdo, mejor manejo de cintura, menor torpeza en sus movimientos, mayor agilidad. Según el neurólogo de cabecera que la revisó el viernes 19 de abril coincide con el traumatólogo. Según el kinesiólogo (quien la atiende desde que tenía 1 año y medio) su mejoría en este último mes es de destacar.</p>
                                   
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                       
                                        <div class="tst-author">
                                             <h4>Paciente C (5 años):</h4>
                                             <span>Caso: Lesión Cerebral (con presencia de válvulas). Hidrocefalia</span>
                                        </div>
                                        <p>Características del proceso: Se presenta 1ra Visita: Hipotonía, Problemas para la deglución (mastica y deglute con dificultad)-Desorganización general en los movimientos corporales.

Primeras mejoras: Mayor conexión (mira y atiende).Trata de tomar objetos- Coordinación: Mayor organización en los movimientos corporales (brazos piernas y acompaña con la mirada) Mejoría general en: Motricidad-intelectualidad. hipotonía (marcadamente)-marcha sincronizada- mayor concentración-mayor fortaleza física (estado general) no se dan bronquitis a repetición.</p>
                                    
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        
                                        <div class="tst-author">
                                             <h4>Paciente K (54 años)</h4>
                                             <span>Caso: A. C. V. (Accidente - Cerebro –Vascular) Desde hace 16 años.</span>
                                        </div>
                                        <p>K llega a la consulta con el estado que a continuación detallamos: Lesión hemisferio izquierdo. Trastorno de Marcha en pierna derecha manifestándose una atrofia y espasticidad. Brazo derecho también manifiesta contractura y espasticidad. Mano del mismo brazo no puede moverla por la contractura. Trastorno en la articulación de palabras. Insomnio Un trazado de EEG.que mostraba una Lesión Témporo-Parietal Izquierdo. TAC compromiso arteria cerebral anterior.</p>
                                     
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                       
                                        <div class="tst-author">
                                             <h4>Paciente D (68 años)</h4>
                                             <span>Caso: Secuela de A.C.V. aneurisma.</span>
                                        </div>
                                        <p>Trastornos: articulación de palabras.
Debilidad Motriz: Generalizadas. Trastorno de Marcha y equilibrio. Desorientación Témporo - Espacial. Disminución significativa de la AUDICION. EEG: Desorganización Generalizada.

A los 45 días después de iniciado el tratamiento. Mayor Organización Motriz. Mayor Conexión: Atención y Concentración. Señala las cosas que desea. Intenta decir algunas palabras.</p>
                                    
                                   </div>
                              </div>

                         </div>

               </div>
          </div>
     </section> 


     <!-- TRATAMIENTO -->
     <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>El tratamiento<small>Importante descubrimiento</small></h2>
                         </div>
                         <table width="97%" border="0" bgcolor="#000066">
</table>
<p><h5>Los Cuadros Tratados, preferentemente, con 
  este procedimiento son:</h5><br>
  1)-Trastornos Neuromadurativos<br>
  2)-Problemas de Aprendizaje-D&eacute;ficit Atencional-Hiperkinesis.(SDAH)<br>
  3)-Disfunci&oacute;n Cerebral<br>
  4)-Lesi&oacute;n Cerebral<br>
  5)-Epilepsias-Cuadros Convulsivos. </font></p>
<p>Pacientes: NI&Ntilde;OS 
  Y ADULTOS<br>
  <font size="4"><strong>El tratamiento est&aacute; organizado en dos etapas funcionales:</strong></font></font> 
</p>
<div align="justify"> 
  <ul>
    <li><strong>PRIMERA 
      ETAPA</strong></font><br>
      Per&iacute;odo 
      de prueba: de 4 meses de duraci&oacute;n</font></li>
    <ul>
      <li>Verificaci&oacute;n 
        de Cambios evolutivos en los EEG.<br>
        Observaci&oacute;n evolutiva en Niveles: Intelectual y Motriz. <br>
        Tambi&eacute;n, en los cuadros que los presentan, se observan modificaciones 
        del Nivel Sensorial.</font></li>
      <li>Controles 
        se realizan con: 1-Estudios: EEG, RMN, y otros estudios si se los requiere. 
        2-Observaci&oacute;n Cl&iacute;nica y Verificaci&oacute;n de Recuperaci&oacute;n 
        sobre logros en los Niveles antes mencionados. Evaluaci&oacute;n cada 
        15 a 30 d&iacute;as</font></li>
    </ul>
    <li><strong>SEGUNDA 
      ETAPA</font></strong><br>
      Iniciaci&oacute;n 
      del Tratamiento<br>
      Luego del Per&iacute;odo de Prueba, previa evaluaci&oacute;n de los resultados 
      obtenidos, se inicia el Tratamiento. Consiste en cumplir con la Programaci&oacute;n 
      del M&eacute;todo y verificar progresos en los Niveles: Intelectual, Motriz 
      y Sensorial que deber&aacute;n observarse aproximadamente cada 60 - 90 d&iacute;as. 
      Es decir que tienenque afianzarse los logros obtenidos &eacute; inclusive 
      evolucionar hasta concretarse en forma irreversible. <br>
      Los controles y evaluaciones se hacen cada 4 meses en este per&iacute;odo, 
      y la duraci&oacute;n del mismo puede ser de 2-3 a&ntilde;os. Los estudios 
      de laboratorios y otros se realizan seg&uacute;n el cuadro.</font></li>
    <li>	Caracter&iacute;stica 
      y particularidad del Tratamiento: estar&iacute;a 
      considerado como un Tratamiento Complementario, es decir los que se llevan 
      a cabo junto a los de Convenci&oacute;n. Se estima que en algunos cuadros 
      puede llegar a ser imprescindible en lo que se refiere a logros en los Niveles 
      mencionados (Motriz-Intelectual-Sensorial).</font></li>
    <li>Nota: No se 
      lo considera como Tratamiento Alternativo.</font></li>
    <li>Esta nueva 
      perspectiva cl&iacute;nica y esta investigaci&oacute;n que permiti&oacute; 
      la conciliaci&oacute;n de una T&eacute;cnica Programada de tipo Qu&iacute;mico 
      &ndash; Molecular, la lectura Electroencefalogr&aacute;fica Comparativa 
      y la Acci&oacute;n sobre Niveles (Motriz-Intelectual-Sensorial), despert&oacute; 
      inter&eacute;s en Instituciones cient&iacute;ficas de Europa e investigadores 
      del Canad&aacute;. </font></li>
  </ul>
</div>
<p align="justify">Una vez que el paciente 
    inicia el tratamiento obtiene resultados promisorios entre los sesenta y noventa 
    dìas . El mismo consiste en una sola toma diaria (de 10 a 15 cc), el que se 
    acompaña con la lectura de señales cerebrales evocadas por distintas técnicas. <br>
  El tiempo está directamente relacionado con el paciente (características psíquicas 
    y orgánicas) y la patología (recuperación de signos funcionales), pero puede 
    estipularse en términos generales de dos a cuatro o cinco años.<br>
  El objetivo del tratamiento es “que modifique el trazado electroencefalográfico 
    en un sentido evolutivo y positivo”. Se pueden aplicar ocho fórmulas diferentes 
    en: Trastornos Neuromadurativos, Lesión Cerebral, y en Epilepsias, sobre todo 
    en las Atípicas o de difícil manejo (refractarias), con un gran éxito ya que 
    se produce un espaciamiento importante en la manifestación delas crisis. <br>
  Se tiende a garantizar el alta en trastornos madurativos e importantes recuperaciones 
  en Lesiones cerebrales. En cambio en las Epilepsias es reservado, pero se puede 
  asegurar una mejoría sustancial .También se puede asegurar en este último caso 
    una reducción de los medicamentos convencionales permitiendo al paciente recuperar 
    su capacidad intelectual y laboral en muchos casos.<br>
  Esta nueva perspectiva clínica y esta investigación que permitió la conciliación 
    de un compuesto químico y la lectura encefalográfica, despertó interés en Instituciones 
    científicas de Europa e investigadores del Canadá. </font></p>
<table width="97%" border="0">
  <tr>
    <td>
      <p><img src="images/comquim.jpg" width="340" height="317" align="left" alt="Acciones del compuesto qu&iacute;mico"></p>
      <p>&nbsp;</p>
      <p align="justify"><b><i>En 
        la figura:</i></b> <i>A 
        modo didáctico el compuesto químico molecular tiene acciones a este nivel: 
        Desde el punto de vista molecular, la plasticidad consiste en un fortalecimiento 
        de las sinapsis mediado por señales intracelulares, transcripción de genes 
        y síntesis de proteínas estructurales que convertirán las terminales presinápticas 
        y postsinápticas en estructuras robustas. <br>
        Los receptores glutaminérgicos NMDA juegan un papel determinante en tales 
        fenómenos.</i></p>
</td>
  </tr>
</table>
               </div>
          </div>
		  <br>
	<br>
		  <table width="97%" border="0" bgcolor="#000066">
  <font size="4"><strong>1) Retrasos Neuromadurativos</strong></font>
  <br>
  <br>
  
</table>
<p align="justify"> En los 
  casos de desorganización cortical severa y trastornos madurativos, en una muestra 
  escolar previa al inicio del tratamiento y a los 120 días de iniciado, se observaron 
  signos de evolución en la caligrafía, distribución del espacio y resolución 
  de problemas. Además, en trastornos madurativos la evolución permite el cambio 
  de nivel de aprendizaje, por ejemplo se observaron pasos de un mayor avance 
  en el proceso escolar entre los 45 y 90 días.</p>
<div align="right"> 
  <table width="70%" border="1" align="center">
    <tr> 
      <td> 
        <div align="center"><img src="images/traz1_000.gif" width="160" height="151"></div>
      </td>
      <td> 
        <div align="center"><img src="images/traz1_120.gif" width="160" height="152"></div>
      </td>
    </tr>
    <tr> 
      <td> 
        <div align="center"><b>Trazado 
          tomado antes del inicio del tratamiento</b></div>
      </td>
      <td> 
        <div align="center"><b>Trazado 
          tomado a 120 d&iacute;as del inicio del tratamiento</b></div>
      </td>
    </tr>
  </table>
  <br>
  <table width="70%" border="1" align="center">
    <tr> 
      <td> 	
        <div align="center"><img src="images/traz2_000.gif" width="250" height="252"></div>
      </td>
      <td> 
        <div align="center"><img src="images/traz2_120.gif" width="250" height="254"></div>
      </td>
    </tr>
    <tr> 
      <td> 
        <div align="center"><b>Material 
          correspondiente a &quot;Escuela Especial&quot; (diferencial), al inicio 
          del tratamiento.</b></div>
      </td>
      <td> 
        <div align="center"><b>A 
          120 d&iacute;as del inicio del tratamiento, material correspondiente 
          a Evoluci&oacute;n Escolar (accede a escuela com&uacute;n)</b></div>
      </td>
    </tr>
  </table>
	<br>
	<br>
  <table width="97%" border="0" bgcolor="#000066">
</table>
  <div align="center"> <font size="4"><strong>2) Lesión cerebral</strong></font></div>
  <br>
<p align="justify"> La recuperación 
  observada dentro de los dos y cuatro meses de tratamiento en las secuelas de 
  una Lesión cerebral (niños y adultos) se da en: la alteración de movimientos 
  corporales, Trastornos de la Coordinación de movimientos, alteraciones del Equilibrio 
  Corporal, Alteraciones del Lenguaje Articulado, en el Control de Esfínteres, 
  en la Disminución de la Fuerza Física, Disminución de la Capacidad Intelectual, 
  planteando cambios reales que posibilitan una mejor calidad de vida.</p>
<div align="right"> 
  <table width="70%" border="1" align="center">
    <tr> 
      <td> 
        <div align="center"><img src="images/traz3_000.gif"></div>
      </td>
      <td><div align="center"><img src="images/traz3_030.gif"></td></div>
      <td> 
        <div align="center"><img src="images/traz3_090.gif"></div>
      </td>
    </tr>
    <tr> 
      <td> 
        <div align="center"><b>Trazado 
          tomado antes del inicio del tratamiento</b></div>
      </td>
      <td>
        <div align="center"><b>Trazado 
          tomado a 30 d&iacute;as del inicio del tratamiento, con administraci&oacute;n 
          del compuesto qu&iacute;mico.</b></div>
      </td>
      <td> 
        <div align="center"><b>Trazado 
          tomado a 90 d&iacute;as del inicio del tratamiento, con administraci&oacute;n 
          del compuesto qu&iacute;mico.</b></div>
      </td>
    </tr>
  </table>	
  <br>
  <br>
  <table width="97%" border="0" bgcolor="#000066">
   <div align="center"> <font size="4"><strong>3) Epilepsias</strong></font></div>
   <br>
</table>
<p align="justify"> En estos 
  casos se produce una <b>recuperación intelectual</b>, efectiva y física y es 
  importante destacar que el adulto afectado logra un normal desempeño en las 
  tareas laborales. En Epilepsias Atípicas la recuperación es observable en el 
  trazado, el electroencefalograma y en la desaparición de las crisis diarias.</p>
<div align="right"> 
  <table width="70%" border="1" align="center">
    <tr> 
      <td> 
        <div align="center"><img src="images/traz4_000.gif" width="200" height="190"></div>
      </td>
      <td><div align="center"><img src="images/traz4_030.gif" width="200" height="191"></td></div>
      <td> 
        <div align="center"><img src="images/traz4_090.gif" width="200" height="188"></div>
      </td>
    </tr>
    <tr> 
      <td> 
        <div align="center"><b>Trazado 
          tomado antes del inicio del tratamiento</b></div>
      </td>
      <td>
        <div align="center"><b>Trazado 
          tomado a 30 d&iacute;as del inicio del tratamiento, con administraci&oacute;n 
          del compuesto qu&iacute;mico.</b></div>
      </td>
      <td> 
        <div align="center"><b>Trazado 
          tomado a 90 d&iacute;as del inicio del tratamiento, con administraci&oacute;n 
          del compuesto qu&iacute;mico.</b></div>
      </td>
    </tr>
  </table>  
     </section> 

     <!-- CONTACTO -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
					
                         <form id="contact-form" role="form" action="envio.php" method="post">
						 <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                              <div class="section-title">
                                   <h2>Contacto<small>Averigua sobre nuestros tratamientos</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Nombre completo" name="name" required="">
                    
                                   <input type="email" class="form-control" placeholder="Ingresa tu email" name="email" required="">

                                   <textarea class="form-control" rows="6" placeholder="Hace tu consulta" name="message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Enviar Mensaje">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         
                    </div>

               </div>
          </div>
     </section>       


     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Consultorio</h2>
                              </div>
                              <address>
                                   <p>Freyre 890<br> Reconquista 3000, Sta. Fe - Argentina</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Derechos Reservados &copy; La información que se cita en este sitio web, es propiedad exclusiva de Neurociencias / Dr. Dionisio Redondo</p>
                                                                </div>
							<!--<p>Diseño: Martín Boero</b>-->									
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Información</h2>
                              </div>
                              <address>
                                   <p><a href="tel:+3382 2244 1100"><i class="fa fa-phone"></i> +3482 42-9804</a> <p><br><a href="https://api.whatsapp.com/send?phone=+543482667130"><i class="fa fa-whatsapp"></i>+54 3482 66-7130</a></p>
                                   <p><a href="mailto:neuorinv@arnet.com.ar">neuorinv@arnet.com.ar</a></p>
                              </address>

                            <!--  <div class="footer_menu">
                                   <h2>Links rapidos</h2>
                                   <ul>
                                        <li><a href="#">Terminologia</a></li>
                                        <li><a href="#">Investigacion</a></li>
                                        <li><a href="#">Terminos & Condiciones</a></li>
                                        <li><a href="#">Politica</a></li>
                                   </ul> 
                              </div>-->
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Agregate al newsletter</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Ingresa tu email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Enviar">
                                        </form>
                                        <span><sup>*</sup> Por favor verifica que no ingrese como spam</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
	 

</body>
</html>