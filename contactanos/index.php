<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kapri-Pets</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="./../css/propios.css">
</head>

<body id="page-top">
    <!-- Navigation-->
    <?php require_once("./../modelos/menu.php")  ?>
    <!-- Mashead header-->
    <header class="masthead bg-dogs">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-12 ">
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-3 lh-1 mb-2">Contactanos</h1>  
                        <hr>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <section class="formulario">
        <div class="row gx-3 align-items-center" style="width: 80%; margin: auto;">
            <div class="col-lg-6">
                <form method="" action="" >
                    <div class="form-group">
                      <label for="Nombre">Nombre</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                      <label for="Asunto">Asunto</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                      <label for="Mensaje">Mensaje</label>
                        <textarea class="form-control" name="" id="" rows="3"></textarea>
                    
                        <p>
                            <button type="submit" class="btn btn-outline-dark py-3 px-4 rounded-pill">Enviar</button>
                            
                        </p>
                    </div>
                </form>
            </div>

            <div class="col-lg-6" style="text-align: center;">
                <img src="../assets/img/ilustracion_Dog.svg" alt="" width="60%">
            </div>
            
        </div>

    </section>

    
   
    <!-- App badge section-->
    <section class="bg-gradient-primary-to-secondary" id="download">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4">Consigue tu collar ahora!!</h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <a class="btn btn-primary py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age"
                    target="_blank"><i class="bi bi-whatsapp"></i> Contactar</a>
               
            </div>
        </div>
    </section>
    <!-- Footer-->
    <?php  require_once('./../modelos/footer.php') ?>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
</body>

</html>