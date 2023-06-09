<?php include "includes/ConectBd.php"; 
      include "includes/verifLogin.php";  
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.0.min.js"></script>
    <title>Login | iscjlchavezG</title>
</head>

<body>
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 col-lg-6 px-2 mt-3">
                <h3 class="mb-4 text-center mt-3">Inicio de Sesión</h3>
                <div class="row py-1">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col  ">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="darkSwitch">
                            <label class="form-check-label" for="darkSwitch">
                                <svg class="bi text-secondary" width="22" height="22" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#brightness-low" />
                                </svg>
                            </label> | <svg class="bi text-secondary" width="15" height="15"
                                fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#moon-stars" />
                            </svg>
                            </label>
                        </div>
                    </div>
                </div>
                <form action="" class="signin-form">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <svg class="bi" width="25" height="25" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-check" />
                            </svg>
                        </span>
                        <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario"
                            aria-describedby="basic-addon1" name="usuario" required />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <svg class="bi" width="25" height="25" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#lock-fill" />
                            </svg>
                        </span>
                        <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" id="pass" name="password" required />
                    </div>
                    <div class="row py-1 px-1">
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="verPass" onclick="verpass(this);">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Visualizar Password</label>
                            </div>
                        </div>
                        <div class="col">
                            <svg class="bi" width="25" height="25" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#key-fill" />
                            </svg>&nbsp;&nbsp;¿Perdiste tu password?
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-1">
                        <input type="submit" value="Ingresar" class="btn btn-sm btn-success rounded-pill">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-10 col-lg-6 px-2">
            <div class="py-1 px-3 mt-1">
                <div class="row container">
                    <div class="col text-center">
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#facebook" />
                        </svg>
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#twitter" />
                        </svg>
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#instagram" />
                        </svg>
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#github" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row py-2">
                <div class="col text-center">
                    <img src="img/logo_iscjlchavezg.png" alt="logo_iscjlchavezg" class="img-fluid" style="width: 100px;"/>
                </div>
            </div>
        </div>  
    <script src="js/dark-mode.js"></script>
    <script>
        function verpass(cb) {
            if (cb.checked)
                $('#pass').attr("type", "text");
            else
                $('#pass').attr("type", "password");
        }
    </script>
</body>

</html>