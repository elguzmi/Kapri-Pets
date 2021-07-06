<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#page-top">Kapri-Pets</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                <?php  
                        $directorioActual  = basename(getcwd());
                        $directorios = ['BuscarPeludo','contactanos'];
                        $p =  array_search($directorioActual,$directorios); 
                        if (is_numeric($p)) { ?>

                            <li class="nav-item"><a class="nav-link me-lg-3" href="./../">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link me-lg-3" href="#">Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link me-lg-3" href="./../contactanos/">Contactanos</a></li>
                        <?php $href = ($directorioActual=='BuscarPeludo') ? './' : './../BuscarPeludo/' ; }
                        else
                        {?>
                            <li class="nav-item"><a class="nav-link me-lg-3" href="./">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link me-lg-3" href="#">Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link me-lg-3" href="./contactanos/">Contactanos</a></li>
                        <?php $href = './BuscarPeludo/'; }
                ?>
                    
                </ul>
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0">
                    <span class="d-flex align-items-center">
                        <i class="bi bi-search me-2"></i>
                        <span class="small"><a href="<?= $href;   ?>" style="text-decoration: none; color:black">Buscar Mascota</a></span>
                    </span>
                </button>

                
            </div>
        </div>
    </nav>