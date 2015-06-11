


@extends('Theme/ViewParent')



  <!-- /////////////////////////////////////////////////CONTENIDO DEL SOLICITAR COTIZACIONES //////////////////////////////////////-->

@section('SolicitarCotizacion')
 @parent
  
<section class="wrapper">

             


<section id="main-content">
<section class="wrapper">
<h3>Formulario para solicitar cotización del servicio</h3>

  <div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
          <form class="form-horizontal style-form" method="get"> 
        
            <div class="form-group">
            <br>
              <label class="col-sm-2 col-sm-2 control-label">Seleccione el tipo de servicio que desea:</label>
            </div>

            <div class="form-group">  
            <div class="container" class="col-sm-10">
            <div id="content" >
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#reparacion" data-toggle="tab">Reparacion</a></li>
            <li><a href="#mantenimiento" data-toggle="tab">Mantenimiento</a></li>
            <li><a href="#venta" data-toggle="tab">Venta de Repuestos</a></li>
            </ul>

            <div id="my-tab-content" class="tab-content">

<!-- ###################CONTENIDO DE REPRCION#############################-->

              <div class="tab-pane active" id="reparacion">
                <br>
                <label>Seleccione tipo de maquinaria : </label>
                <br>
                <select class="form-control">
                  <option>...</option>
                  <option>Montacarga</option>
                  <option>ReachStackers</option>
                  <option>Excavadora</option>
                  <option>Tractor</option>
                  <option>Spreader</option>
                  <option>Cargador Frontal</option>
                </select>
                <br>
                <br>

                <label>Detalle el problema que está padeciendo su maquinaria:</label>
                <div>
                  <textarea  rows="3" class="form-control" ></textarea>
                </div>
                <br>
                <br>

                <label>¿Puede acercarse con su maquinaria a la empresa?</label>
                <br>

                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="si" value="option1" checked>
                    Sí
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="no" value="option2">
                    No
                  </label>
                </div>
                <br>

                <div class="alert alert-info"><b>Si seleccionó NO. </b> Entonces complete el siguiente cuadro, para enviar a un mecanico  realizar la inspeccion</div>
                <br>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Ubicacion: </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>
                
                <button type="button" class="btn btn-primary btn-lg btn-block">ENVIAR SOLICITUD</button>
              
              
            


                <p></p>
              </div>

<!-- ########################CONTENIDO MNTENIMENTO #########################3-->

              <div class="tab-pane" id="mantenimiento">
                <br>

                <br>
                <label>Seleccione tipo de mantenimiento : </label>
                <br>
                <select class="form-control">
                  <option>...</option>
                  <option>Específico</option>
                  <option>General</option>
                </select>
                <br>
                <br>


                <label>Seleccione tipo de maquinaria : </label>
                <br>
                <select class="form-control">
                  <option>...</option>
                  <option>Montacarga</option>
                  <option>ReachStackers</option>
                  <option>Excavadora</option>
                  <option>Tractor</option>
                  <option>Spreader</option>
                  <option>Cargador Frontal</option>
                </select>
                <br>
                <br>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Marca: </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>

                <div class="alert alert-info"><b>Si seleccionó Mantenimiento Especifico. </b> Entonces complete la siguiente informacion</div>
                <br>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Parte Especifica: </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>

                <button type="button" class="btn btn-primary btn-lg btn-block">ENVIAR SOLICITUD</button>
              

                <p></p>
              </div>


<!-- ######################## CONTENIDO DE VENTtt -->

              <div class="tab-pane" id="venta">
              <br>
                <label>Seleccione Repuesto</label>
                <br>
                <select class="form-control">
                  <option>...</option>
                  <option>Montacarga</option>
                  <option>ReachStackers</option>
                  <option>Excavadora</option>
                  <option>Tractor</option>
                  <option>Spreader</option>
                  <option>Cargador Frontal</option>
                </select>
                <br>
                <br>

                 <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Indique Cantidad: </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>

                <button type="button" class="btn btn-primary btn-lg btn-block">ENVIAR SOLICITUD</button>
              


                <p></p>
              </div>
            
            </div>
            </div>
 
 
            <script type="text/javascript">
            jQuery(document).ready(function ($) {
            $('#tabs').tab();
            });
            </script>    
            </div> <!-- container -->
            </div>
  


<!--/////////////////////////////////RADIO BUTTON ///////////////////////////////////////////// -->
       
           <!--  <div class="container">
              <br>
              <p>Seleccione el tipo de servicio que desee : </p>
              <form role="form">
                <label class="radio-inline">
                  <input type="radio" name="optradio"> Reparación de Maquinaria
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optradio"> Mantenimiento
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optradio"> Venta de Repuestos
                </label>
              </form>
            </div>
            <br>

            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Ubicación</label>
              <div class="col-sm-10">
                <input type="text" class="form-control">
              </div>
            </div> 

            <br>-->

<!-- ///////////////////////////////////////// FIN DE RADIO BUTTON ////////////////////////////-->

<!--  ///////////////Text Area !!!!!!!!!!!!!!!!!!!!!!!!!!! -->
            
            


<!--  /////////////// FIN Text Area !!!!!!!!!!!!!!!!!!!!!!!!!!! -->

              


          </form>
        </div>
    </div><!-- col-lg-12-->       
  </div>





  <!-- ////////////////////////////////////////////FIN DEL CONTENIDO DE SOLICITAR COTIZACIONES ///////////////////////////////////////////-->



  <!-- ############################################################################################################-->

 

  <!-- ############################## LIBRERÍAS PARA QUE FUNCIONE EL MENÚ DESPLEGABLE #########################-->

  </section>

    <!-- js placed at the end of the document so the pages load faster -->
   

  <!-- #######################################################################################################################################-->
  
  <!-- <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
  </script>
-->
  
    <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

@stop
