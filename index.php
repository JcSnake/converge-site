<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('template/head.php')?>
</head>
<body class="bg-pruple">
    <section class="mx-width mx-auto">
        <div class="w-100 row mx-auto">
            <div class="col-md-7 mt-5 mb-5 mb-res txt-center">
                <img src="./assets/images/logo_converge.png" alt="logo" width="200">
                <h5 class="text-uppercase c-white mt-3 font-weight-bold lh-text-title fs-18 txt-center">la primera plataforma de publicidad digital que te garantiza un volumen de ventas.</h5>
                <p class="mt-2 c-white col-10 ml-4 mb-res">
                    Integramos su negocio en un sistema de tecnología en el que solo debe invertir en publicidad digital y <span class="f-900">Converge360</span> medirá su retorno de inversión en ventas cobradas en tiempo real.
                </p>
                <p class="mt-2 c-white col-10 ml-4 d-desktop">
                    <span class="f-900">Converge 360</span> es un sistema de autogestión de inversiones publicitarias que garantiza rentabilidad sobre la inversión.
                </p>
                <hr class="d-desktop">
                <p class="mt-2 c-white col-10 ml-4 d-desktop">
                    Nuestra solución automatiza tareas, integra y apoya la gestión de las áreas de marketing, ventas y atención al cliente. Con Converge360, es posible visualizar toda la información de mkt y ventas con las interacciones con sus clientes en un sólo lugar de forma fácil y en informes personalizables.
                </p>
                <div class="text-center mt-4 mb-4 d-desktop">
                    <img src="./assets/images/grafica_converge@2x.png" class="img-fluid" alt="grafica" width="400">
                </div>
                <h5 class="text-uppercase c-white mt-3 font-weight-bold lh-text-title fs-18 d-desktop">La vista 360 de tu negocio con Converge360</h5>
                <img src="./assets/images/laptop_mkp@2x.png" class="img-fluid mt-3 d-desktop" alt="laptop">
            </div>
            <div class="col-md-5 mt-5 mb-5 mt-res">
                <div class="bg-white rounded p-4 mt-2 form-style">
                    <form action="insertLeads.php" method="POST">
                        <h6 class="text-uppercase text-center c-gray f-400">Regístrate y <br> solicita nuestro demo</h6>
                        <div class="form-group mt-4">
                            <input type="text" class="form-control form-control-sm validate" name="name" id="name" placeholder="Nombre">
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" class="form-control form-control-sm validate" name="apellido" id="apellido" placeholder="Apellido">
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" class="form-control form-control-sm validate" name="cargo" id="cargo" placeholder="Cargo">
                        </div>
                        <div class="form-group mt-4">
                            <input type="mail" class="form-control form-control-sm validate" name="mail" id="mail" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" class="form-control form-control-sm validate" name="phone" id="phone" placeholder="Teléfono">
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" class="form-control form-control-sm validate" name="empresa" id="empresa" placeholder="Empresa">
                        </div>
                        <div class="form-group mt-4">
                            <select class="form-control form-control-sm" id="industria" name="industria">
                                <option value="0">Industria</option>
                                <option value="1">Aseguradora</option>
                                <option value="2">Telecomunicaciones</option>
                                <option value="3">Servicios financieros</option>
                                <option value="4">Servicios de salud</option>
                                <option value="5">Tecnología</option>
                                <option value="6">Educación</option>
                                <option value="7">Farmacéuticos y Biotecnología</option>
                                <option value="8">Manufactura Industrial</option>
                                <option value="9">Medios de comunicación</option>
                                <option value="10">ONG y Organizaciones sin Ánimo de Lucro</option>
                                <option value="11">Gobierno / Sector Público</option>
                                <option value="12">Comercio y Bienes de Consumo</option>
                                <option value="13">Otros</option>
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <select class="form-control form-control-sm" id="empleados" name="empleados">
                                <option value="0">Empleados</option>
                                <option value="1">1 - 50 empleados </option>
                                <option value="2">51 - 300 empleados </option>
                                <option value="3">301 - 1,000 empleados </option>
                                <option value="4">1,001 - 2,000 empleados </option>
                                <option value="5">2,001 + empleados </option>
                            </select>
                        </div>
                        <p class="fs-10 f-700 col-11">Al registrarse, confirma que está de acuerdo con que Converge360 trate sus datos personales tal como se describe en la <a href="#" class="c-declaracion">Declaración de privacidad.</a></p>
                        <a href="thanks.php" class="btn btn-blue c-white col-12 rounded-0">Solicitar demostración</a>
                    </form>
                </div>
            </div>
            <div class="col-12 d-mobile txt-center pb-5">
                <p class="mt-2 c-white col-10 ml-4">
                    <span class="f-900">Converge 360</span> es un sistema de autogestión de inversiones publicitarias que garantiza rentabilidad sobre la inversión.
                </p>
                <p class="mt-2 c-white col-10 ml-4">
                    Nuestra solución automatiza tareas, integra y apoya la gestión de las áreas de marketing, ventas y atención al cliente. Con Converge360, es posible visualizar toda la información de mkt y ventas con las interacciones con sus clientes en un sólo lugar de forma fácil y en informes personalizables.
                </p>
                <div class="text-center mt-4 mb-4">
                    <img src="./assets/images/grafica_converge@2x.png" class="img-fluid" alt="grafica" width="300">
                </div>
                <h5 class="text-uppercase c-white mt-3 font-weight-bold lh-text-title fs-18">La vista 360 de tu negocio con Converge360</h5>
                <img src="./assets/images/laptop_mkp@2x.png" class="img-fluid mt-3" alt="laptop">
            </div>
        </div>
    </section>
    <?php include_once('./template/footer.php') ?>
    <script src="assets/js/function.min.js"></script>
</body>
</html>