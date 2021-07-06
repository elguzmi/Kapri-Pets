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
    <link href="../css/propios.css" rel="stylesheet"> 
</head>

<body id="page-top">

    <!-- Navigation-->
    <?php 
    require_once("./../modelos/menu.php")  ?>
    <!-- Mashead header-->
    <header class="" >
    <section class="cta comp">
        <div class="cta-content">
            <div class="container px-3 form">
                <h2 class="text-white display-1 lh-1 mb-4">
                    Busca tu mascota
                </h2>
                <form method="GET" action="./../BuscarPeludo/php/validacion.php">
                        <div class="form-floating mb-4">
                            <input class="form-control" id="inputName" type="text" name="cod" placeholder="ingresa el codigo"/>
                            <label for="inputName">Codigo</label>
                        </div>
                        <input type="submit" class="btn btn-outline-light py-3 px-4 rounded-pill">
                        <?php 
                        
                            if (isset($_GET['status'])|| !empty($_GET['status'])) :
                                echo "<h3 style='color:red;'>ocurrio un error en las busqueda</h3>";

                            endif
                        ?>
                    </form>
            </div>
        </div>
    </section>
    </header>

    <!-- Call to action section-->
    
    <!-- App badge section-->
    <section class="bg-gradient-primary-to-secondary" id="">
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


    <!-- Feedback modal-->
    <?php
        require_once("./../modelos/form_busqueda.php");
    
    ?>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
</body>

</html>