<!doctype html>
<html lang="pt-br" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <title>Gerador de hash</title>
</head>

<body class="h-100">
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-lg-5">
          <div class="text-center">
            <h6>Gerador de hash para senhas</h6>
          </div>
          <div class="shadow p-3 mb-5 bg-body rounded">
            <form method="post">
              <div class="input-group mb-0">
                <input type="text" name="password" placeholder="Digite a sua senha" class="form-control">
                <button type="submit" class="input-group-text btn btn-primary">
                  <i class="fas fa-share"></i>
                  </buttom>
              </div>
            </form>
          </div>

          <div class="shadow p-3 mb-5 bg-body rounded" id="hash">
            <input type="text" class="form-control" disabled>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="assets/js/hash.js?time=<?=time()?>"></script>
</body>

</html>