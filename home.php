 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder"><?php echo $_settings->info('name') ?></h1>
            <p class="lead fw-normal text-white-50 mb-0">
                <button class="btn_btn-sm_btn-primary" type="button" id="create_appointment" onclick="redirigir()">Iniciar sesión</button>
            </p>
             <style>
                  .btn_btn-sm_btn-primary {
                    background-color: blue; /* Fondo azul */
                    color: #fff; /* Letras blancas */
                    border: none; /* Sin borde */
                    border-radius: 10px; /* Bordes redondos */
                    padding: 10px 20px; /* Espaciado interno */
                    cursor: pointer; /* Cambia el cursor al pasar el ratón */
                  }
                </style>
        </div>
    </div>
</header>
<!-- Section-->
<?php 
$sched_arr = array();
$max = 0;
?>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        
    <?php include('about.html') ?>
        
    </div>
</section>
<script>
     $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })

  $('#search-form').submit(function(e){
    e.preventDefault()
     var sTxt = $('[name="search"]').val()
     if(sTxt != '')
      location.href = './?p=products&search='+sTxt;
  })
</script>