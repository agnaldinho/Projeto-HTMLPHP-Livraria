<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
  <STYLE TYPE="text/css">
    BODY {background-image: url(https://s1.1zoom.me/big3/793/Library_Book_532388_1920x1080.jpg); }
</STYLE>
  <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">CRIE A SUA CONTA AQUI</h2>

              <form method ="POST"  action= "salvarRegistro.php" enctype= "multipart/form-data">
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Usuario" name="usuario">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Senha" name="senha">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Repete a sua senha" name="senha">
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                  Concordo com todas as declarações nos <a href="https://www.escritoriotaquaral.com.br/termos-de-uso-e-politica-de-privacidade-x-lgpd/" class="text-body"><u>Termos de serviço</u></a>
                  </label>
                </div>
                <div class="row justify-content-end">
                        <div><br><button class = "btn btn-primary" type="submit">Registrar</button> </div>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Já tem uma conta? <a href="login.php"
                    class="fw-bold text-body"><u>Logar AQUI</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>