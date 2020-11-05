 <!-- Modal -->
 <div class="modal fade" id="uploadArticle" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content pt-2 pb-2 pr-4 pl-4">
             <div class="modal-body p-5 h5 ">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
                 <br>
                 <h1 class="modal-title font-weight-light text-center mb-2" id="exampleModalLongTitle" ">
                     Enviar
                     Artículo</h1>
                 <div class=" text-center mb-5">
                     {{-- <span class="lnr lnr-upload"
                         style="font-size: 46px; font-weight:lighter;"></span> --}}
             </div>
             <form action="{{ route('upload-article.store') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group">
                     <label for="exampleInputEmail1">Nombre</label>
                     <input id="nameupload" required type="text" name="name" class="form-control"
                         placeholder="Escribir Aquí">

                 </div>
                 <div class="form-group mb-5 ">
                     <label for="exampleInputPassword1">Contácto</label>
                     <input id="contactupload" required type="text" name="contact" class="form-control"
                         placeholder="Escribir Aquí">
                     <small class="form-text text-muted font-weight-lighter">Correo electrónico o teléfono</small>
                 </div>

                 <div class="text-center">

                     <label for="fileselected" id="fileselectedbutton"
                         class="text-truncate btn-block btn-lg btn btn-outline-primary  ">
                         Buscar
                     </label>
                     <input accept=".doc,.docx,.pdf" id="fileselected" required type="file" hidden name="fileurl">

                     <button id="uploadsubmit" type="submit" class="btn-block btn btn-outline-success  btn-lg">
                         <span id="spinnerupload" class="spinner-border spinner-border-sm" role="status"
                             style="display: none;"></span>
                         <span id="enviartxtupload" class="" style="display: block;">Enviar</span>

                     </button>


                 </div>
                 <div class="text-center font-weight-lighter h6 text-muted mt-4">

                     <label>Formatos: PDF / WORD</label><br>
                     <label>Tamaño Máximo 35mb</label>
                 </div>
             </form>
             {{-- <h4 class="modal-title text-center font-weight-light"
                 style="font-family: 'Open Sans'" id="exampleModalLongTitle">ISSN 2334-2501</h4><br><br>
             --}}
         </div>
     </div>
 </div>
 </div>

 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-body p-5 h5">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
                 <h3 class="modal-title text-center" id="exampleModalLongTitle" style="font-family: 'Open Sans'">Revista
                     Iberoamericana De
                     Ciencias</h3>
                 <h4 class="modal-title text-center font-weight-light" style="font-family: 'Open Sans'"
                     id="exampleModalLongTitle">ISSN 2334-2501</h4><br><br>
                 <p>La Revista Iberoamericana de Ciencias es una revista arbitrada de acceso libre totalmente
                     en línea, su labor se desarrolla acorde a la Iniciativa Budapest sobre Acceso Abierto
                     (www.budapestopenaccessinitiative.org/read).</p>
                 <p>La propiedad intelectual de los artículos
                     permanece en los autores de los mismos, así como la responsabilidad de sus opiniones.
                 </p>
                 <p>De
                     acuerdo a las recomendaciones BOAI10, todo el contenido de la revista, excepto donde se
                     especifique algo diferente, se encuentra bajo los términos de la Licencia Creative
                     Commons
                     "Reconocimiento-No Comercial-Igualmente compartido 2.0" Creative Commons
                     Reconocimiento-NoComercial-Compartir Igual 3.0 Unported
                     (http://creativecommons.org/licenses/by-nc-sa/3.0/).</p>
             </div>
         </div>
     </div>
 </div>
 <script>
     $(document).ready(function() {
         $("#avisomodal").modal('show');
     });

 </script>

 @if ($uploadflag == 1)
     <a id="gotohome" hidden href="{{ route('home.index') }}#"></a>
     <div id="avisomodal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
         aria-labelledby="mySmallModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered">
             <div class="modal-content">
                 <div class="p-5">

                     <div class="text-center">
                         <p class="h3 pb-2">Documento Recibido</p>
                     </div>
                     <div class="text-center pb-3">
                         <i class="ri-checkbox-circle-fill" style="font-size:46px; color:#2487ce;"></i>

                     </div>
                     <p class="pb-3 h6 text-center">La recepción de artículos es permanente</p>
                     <div class="text-center pt-2">
                         <button id="closetohome" type="button" class="btn btn-outline-secondary">Cerrar</button>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endif

 @if ($uploadflag == 2)
     <a id="gotohome" hidden href="{{ route('home.index') }}#"></a>
     <div id="avisomodal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
         aria-labelledby="mySmallModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered">
             <div class="modal-content">
                 <div class="p-5">

                     <div class="text-center">
                         <p class="h3 pb-2">Mensaje Recibido</p>
                     </div>
                     <div class="text-center pb-3">
                         <i class="ri-checkbox-circle-fill" style="font-size:46px; color:#2487ce;"></i>

                     </div>
                     <p class="pb-3 h6 text-center">Muchas gracias por contactarnos</p>
                     <div class="text-center pt-2">
                         <button id="closetohome" type="button" class="btn btn-outline-secondary">Cerrar</button>

                     </div>
                 </div>
             </div>
         </div>
     </div>

 @endif
