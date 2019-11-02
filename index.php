<?php
$bk = array("images/1.jpg", "images/2.jpg", "images/3.jpg");
shuffle($bk);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>SuperMex | Um novo conceito em supermercados</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link rel="icon" href="images/favicon.png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">


    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/mymain.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/mycard.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <!--===============================================================================================-->
</head>
<body>


<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo $bk[0]; ?>');"
     data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
             data-scrollax-parent="true">
            <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">

                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <img src="images/sem fundo.png" alt="logo" style="width: 100%; max-width: 700px; height: 100%;">
                </h1>
                <p><span class="texto">Em breve, um novo conceito em supermercados!</span></p>
                <p><a href="mailto:contato@supermex.com.br"><i class="far fa-envelope"
                                                               style="color: #fff; font-size: 40px;"></i></a></p>
            </div>
        </div>
    </div>

</div>


<div class="container-contact100">
    <div class="wrap-contact100">
        <form id="regForm" class="contact100-form validate-form" method="post" enctype="text/plain"
              action="mailto:contato@supermex.com.br">
				<span class="contact100-form-title">
						Supermex - Lista de Compras
				</span>
            <div id="tab1" class="tab">
                <h4>Dados pessoais:</h4>
                <br>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <input class="input100" type="text" name="name" id="name" placeholder="Nome Completo" required>
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="email" name="email" id="email" placeholder="Email" required>
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="">
                    <input class="input100" type="tel" name="telefone" id="telefone" placeholder="Telefone" required>
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>

                <!--<div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        Enviar
                    </button>
                </div>-->
            </div>
            <div class="container-fluid">
                <div id="tab2" class='tab'>
                    <h4>Alimentos</h4>
                    <br>
                    <div class='card-deck'>
                        <div name="1" class='card' style='width: 18rem;'>
                            <img name="1" src='images/alimentos/arroz.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='1' value='1'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='1'>
                                        <h5 class='card-title'>Arroz</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas1' id='marcas1' class='form-control selectpicker' title='Selecione'
                                        data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="2" src='images/alimentos/azeite.jpeg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='2' value='2'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='2'>
                                        <h5 class='card-title'>Azeite</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas2' id='marcas2' class='form-control selectpicker' title='Selecione'
                                        data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="3" src='images/alimentos/biscoito-bolacha.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='3' value='3'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='3'>
                                        <h5 class='card-title'>Biscoito/bolacha</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas3' id='marcas3' class='form-control selectpicker' title='Selecione'
                                        data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='card-deck'>
                        <div class='card' style='width: 18rem;'>
                            <img name="4" src='images/alimentos/cafe.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='4' value='4'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='4'>
                                        <h5 class='card-title'>Café</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas4' id='marcas4' class='form-control selectpicker' title='Selecione'
                                        data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="5" src='images/alimentos/farinha.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='5' value='5'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='5'>
                                        <h5 class='card-title'>Farinha</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas5' id='marcas5' class='form-control selectpicker' title='Selecione'
                                        data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="6" src='images/alimentos/feijao.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='6' value='6'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='6'>
                                        <h5 class='card-title'>Feijão</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas6' id='marcas6' class='form-control selectpicker' title='Selecione'
                                        data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='card-deck'>
                        <div class='card' style='width: 18rem;'>
                            <img name="7" src='images/alimentos/fermento.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='7' value='7'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='7'>
                                        <h5 class='card-title'>Fermento</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas7' id='marcas7' class='form-control selectpicker' title='Selecione'
                                        data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="8" src='images/alimentos/leite.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='8' value='8'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='8'>
                                        <h5 class='card-title'>Leite</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas8' id='marcas8' class='form-control selectpicker' title='Selecione'
                                        data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="9" src='images/alimentos/macarrao.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='9' value='9'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='9'>
                                        <h5 class='card-title'>Macarrão</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas9' id='marcas9' class='form-control selectpicker' title='Selecione'
                                        data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='card-deck'>
                        <div class='card' style='width: 18rem;'>
                            <img name="10" src='images/alimentos/manteiga.png' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='10' value='10'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='10'>
                                        <h5 class='card-title'>Manteiga</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas10' id='marcas10' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="11" src='images/alimentos/margarina.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='11' value='11'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='11'>
                                        <h5 class='card-title'>Margarina</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas11' id='marcas11' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="12" src='images/alimentos/molho-de-tomate.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='12' value='12'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='12'>
                                        <h5 class='card-title'>Molho de Tomate</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas12' id='marcas12' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='card-deck'>
                        <div class='card' style='width: 18rem;'>
                            <img name="13" src='images/alimentos/oleo.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='13' value='13'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='13'>
                                        <h5 class='card-title'>Oleo</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas13' id='marcas13' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="14" src='images/alimentos/sal.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='14' value='14'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='14'>
                                        <h5 class='card-title'>Sal</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas14' id='marcas14' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>

                        <div class='mycard card' style='width: 18rem;'>
                            <style>
                                .mycard {
                                    opacity: 0;
                                    display: none;
                                }
                            </style>
                        </div>
                    </div>

                    <br>
                    <div class='wrap-input100'>
                        <textarea id='outros0' name='outros0' class='input100' placeholder='Outros:'></textarea>
                        <span class='focus-input100-1'></span>
                        <span class='focus-input100-2'></span>
                    </div>
                </div>

                <div id="tab3" class='tab'>
                    <h4>Produtos de Limpeza</h4>
                    <br>
                    <div class='card-deck'>
                        <div class='card' style='width: 18rem;'>
                            <img name="15" src='images/alimentos/limpeza/agua-sanitaria.jpg' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='15' value='15'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='15'>
                                        <h5 class='card-title'>Água Sanitária</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas15' id='marcas15' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="16" src='images/alimentos/limpeza/alcool.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='16' value='16'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='16'>
                                        <h5 class='card-title'>Álcool</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas16' id='marcas16' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="17" src='images/alimentos/limpeza/amaciante.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='17' value='17'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='17'>
                                        <h5 class='card-title'>Amaciante</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas17' id='marcas17' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='card-deck'>
                        <div class='card' style='width: 18rem;'>
                            <img name="18" src='images/alimentos/limpeza/espoja-aco.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='18' value='18'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='18'>
                                        <h5 class='card-title'>Esponja de aço</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas18' id='marcas18' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="19" src='images/alimentos/limpeza/espoja-pia.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='19' value='19'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='19'>
                                        <h5 class='card-title'>Esponja de pia</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas19' id='marcas19' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>

                        <div class='card' style='width: 18rem;'>
                            <img name="20" src='images/alimentos/limpeza/sabao-barra.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='20' value='20'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='20'>
                                        <h5 class='card-title'>Sabão em barra</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas20' id='marcas20' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='card-deck'>
                        <div class='card' style='width: 18rem;'>
                            <img name="21" src='images/alimentos/limpeza/Sabao-em-Po.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='21' value='21'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='21'>
                                        <h5 class='card-title'>Sabão em pó</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas21' id='marcas21' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="22" src='images/alimentos/limpeza/saco-lixo.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='22' value='22'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='22'>
                                        <h5 class='card-title'>Saco de Lixo</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas22' id='marcas22' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="23" src='images/alimentos/limpeza/lustra-moveis.jpg' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='23' value='23'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='23'>
                                        <h5 class='card-title'>Lustra Móveis</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas23' id='marcas23' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='card-deck'>
                        <div class='card' style='width: 18rem;'>
                            <img name="24" src='images/alimentos/limpeza/desinfetante.png' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='24' value='24'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='24'>
                                        <h5 class='card-title'>Desinfetante</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas24' id='marcas24' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="25" src='images/alimentos/limpeza/detergente.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='25' value='25'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='25'>
                                        <h5 class='card-title'>Detergente</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas25' id='marcas25' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='mycard card' style='width: 18rem;'>
                            <style>
                                .mycard {
                                    opacity: 0;
                                    display: none;
                                }
                            </style>
                        </div>
                    </div>
                    <br>
                    <div class='wrap-input100'>
                        <textarea id='outros1' name='outros1' class='input100' placeholder='Outros:'></textarea>
                        <span class='focus-input100-1'></span>
                        <span class='focus-input100-2'></span>
                    </div>
                </div>

                <div id="tab4" class='tab'>
                    <h4>Higiene Pessoal</h4>
                    <br>
                    <div class='card-deck'>
                        <div class='card' style='width: 18rem;'>
                            <img name="26" src='images/alimentos/higiene-pessoal/shampoo.jpg' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='26' value='26'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='26'>
                                        <h5 class='card-title'>Shampoo</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas26' id='marcas26' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="27" src='images/alimentos/higiene-pessoal/coondicionador.jpg'
                                 class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='27' value='27'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='27'>
                                        <h5 class='card-title'>Condicionador</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas27' id='marcas27' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="28" src='images/alimentos/higiene-pessoal/sabonete.jpg' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='28' value='28'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='28'>
                                        <h5 class='card-title'>Sabonete</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas28' id='marcas28' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='card-deck'>
                        <div class='card' style='width: 18rem;'>
                            <img name="29" src='images/alimentos/higiene-pessoal/papel-higienico.jpg'
                                 class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='29' value='29'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='29'>
                                        <h5 class='card-title'>Papel higienico</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas29' id='marcas29' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="30" src='images/alimentos/higiene-pessoal/escova.jpg' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='30' value='30'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='30'>
                                        <h5 class='card-title'>Escova de dente</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas30' id='marcas30' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="31" src='images/alimentos/higiene-pessoal/fio-dental.jpg' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='31' value='31'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='31'>
                                        <h5 class='card-title'>Fio dental</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas31' id='marcas31' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='card-deck'>
                        <div class='card' style='width: 18rem;'>
                            <img name="32" src='images/alimentos/higiene-pessoal/creme-dental.jpg' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='32' value='32'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='32'>
                                        <h5 class='card-title'>Creme dental</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas32' id='marcas32' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="33" src='images/alimentos/higiene-pessoal/desodorante.png' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='33' value='33'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='33'>
                                        <h5 class='card-title'>Desodorante</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas33' id='marcas33' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="34" src='images/alimentos/higiene-pessoal/absorvente.jpg' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='34' value='34'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='34'>
                                        <h5 class='card-title'>Absorvente</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas34' id='marcas34' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='wrap-input100'>
                        <textarea id='outros2' name='outros2' class='input100' placeholder='Outros:'></textarea>
                        <span class='focus-input100-1'></span>
                        <span class='focus-input100-2'></span>
                    </div>
                </div>

                <div id="tab5" class='tab'>
                    <h4>Utilidades</h4>
                    <br>
                    <div class='card-deck'>
                        <div class='card' style='width: 18rem;'>
                            <img name="35" src='images/alimentos/utilidades/fosforo.jpg' class='card-img-top' alt='...'
                                 onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='35' value='35'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='35'>
                                        <h5 class='card-title'>Fósforo</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas35' id='marcas35' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="36" src='images/alimentos/utilidades/guardanapo.jpg' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='36' value='36'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='36'>
                                        <h5 class='card-title'>Guardanapo de papel</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas36' id='marcas36' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="37" src='images/alimentos/utilidades/papel-toalha.jpg' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='37' value='37'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='37'>
                                        <h5 class='card-title'>Papel Toalha</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas37' id='marcas37' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='card-deck'>
                        <div class='card' style='width: 18rem;'>
                            <img name="38" src='images/alimentos/utilidades/papel-aluminio.jpg' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='38' value='38'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='38'>
                                        <h5 class='card-title'>Papel Alumínio</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas38' id='marcas38' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='card' style='width: 18rem;'>
                            <img name="39" src='images/alimentos/utilidades/papel-filme.jpg' class='card-img-top'
                                 alt='...' onclick="ativarCmb(this.name)">
                            <div class='card-body'>

                            </div>
                            <div class='card-footer'>
                                <input class='c-card' type='checkbox' id='39' value='39'>
                                <div class='card-content'>
                                    <div class='card-state-icon'></div>
                                    <label for='39'>
                                        <h5 class='card-title'>Papel Filme</h5>
                                        <p class='card-text'>Informações</p>
                                        <p class='card-text'><small class='text-muted'>...</small></p>
                                    </label>
                                </div>
                                <select name='marcas39' id='marcas39' class='form-control selectpicker'
                                        title='Selecione' data-live-search='true' multiple>
                                    <option value='marca1'>Marca 1</option>
                                    <option value='marca2'>Marca 2</option>
                                    <option value='marca3'>Marca 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='mycard card' style='width: 18rem;'>
                            <style>
                                .mycard {
                                    opacity: 0;
                                    display: none;
                                }
                            </style>
                        </div>
                    </div>
                    <br>
                    <div class='wrap-input100'>
                        <textarea id='outros3' name='outros3' class='input100' placeholder='Outros:'></textarea>
                        <span class='focus-input100-1'></span>
                        <span class='focus-input100-2'></span>
                    </div>
                </div>

                <div id="tab6" class="tab">
                    <div class="wrap-input100 validate-input" data-validate="A mensagem é obrigatória">
                        <textarea id="" name="" class="input100" name="message"
                                  placeholder="Favor informar outros produtos que deseja adicionar à Lista de Compras"></textarea>
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <!-- <div class="contact100-form-checkbox">
                         <input class="input-checkbox100" id="ckb1" type="checkbox" name="copy-mail">
                         <label class="label-checkbox100" for="ckb1">
                             Enviar cópia para email
                         </label>
                     </div>-->
                </div>

                <div class="form-group">
                    <br>
                    <!-- Circles which indicates the steps of the form: -->
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
                <div class="form-group">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Próxima</button>
                    <!-- <button type="button" id="emailLnk" name="emailLnk" onclick="sendEmail()">Send</button> -->
                </div>
            </div>
        </form>
    </div>
</div>

<!--
<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>


<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="js/main2.js"></script>
<!--===============================================================================================-->
<script src="js/form.js"></script>
<!--===============================================================================================-->
<script src="js/bootstrap-select.min.js"></script>
<!--===============================================================================================-->
<script src="js/sendForm.js"></script>
<!--===============================================================================================-->
<script>
    $(document).ready(function () {
        $('.selectpicker').selectpicker();
    });
</script>
</body>
</html>