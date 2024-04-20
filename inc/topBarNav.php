<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5 ">
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <a class="navbar-brand" href="./">
                <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                <?php echo $_settings->info('short_name') ?>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <!-- <li class="nav-item"><a class="nav-link" aria-current="page" href="./">Home</a></li> -->
                    </ul>
                    <div class="d-flex align-items-center">
                      
                    </div>
                </div>
                
                <script>
                function redirigir() {
                  window.location.href = "admin"; 
                }
                </script>
                  <style>
                  .custom-button {
                    background-color: blue; /* Fondo azul */
                    color: #fff; /* Letras blancas */
                    border: none; /* Sin borde */
                    border-radius: 10px; /* Bordes redondos */
                    padding: 10px 20px; /* Espaciado interno */
                    cursor: pointer; /* Cambia el cursor al pasar el ratón */
                  }
                </style>
            </div>
        </nav>
