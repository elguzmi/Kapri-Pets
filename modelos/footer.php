<footer class="bg-black text-center py-5">
        <div class="row ">
            <div class="container col col-lg-2">
                
            </div>
            <div class="container px-8 col col-lg-5 text-right">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Kapritecnology <?= date('Y'); ?> Todos los derechos reservados. </div>
                    <a href="#!">Privacidad</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terminos y condiciones</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a>
                </div>

            </div>
            <div class="container col col-lg-2">
            <?php  
                $directorioActual  = basename(getcwd());
                $directorios = ['BuscarPeludo','contactanos'];
                $p =  array_search($directorioActual,$directorios); 
                if (is_numeric($p)) {
                    $src = "../assets/Logo/logo.PNG";
                }else{
                    $src = "assets/Logo/logo.PNG";
                }
            ?>
                <img src=<?=$src ?> alt="Logo-Kapri" width="100%" class="logo-imagen">
            </div>

        </div>
    </footer>