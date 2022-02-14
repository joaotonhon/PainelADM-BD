<!DOCTYPE html>
<html lang="pt_br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Painel Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" title="Usuario">
            <i class="fas fa-user-circle"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-user-alt mr-2"></i> Alterar Perfil
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </a>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Painel Admin Bullshop</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="../pages/widgets.html" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Principal
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-shopping-bag mr-2"></i>
                <p>
                  Produtos
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="add_produto.php" class="nav-link">
                    <i class="fas fa-cart-plus mr-1 "></i>
                    <p>Adicionar Produtos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="editar_produto.php" class="nav-link">
                    <i class="far fa-edit mr-1"></i>
                    <p>Editar Produtos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="detalhes_produto.php" class="nav-link">
                    <i class="fas fa-list-ul mr-1"></i>
                    <p>Visualizar Produtos</p>
                  </a>
              </ul>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Adicionar Produto</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row d-flex align-content-stretch flex-wrap">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Adicionar Produto</h3>

                <!--Card Central -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Nome do Produto</label>
                  <input type="text" id="inputName" class="form-control" placeholder="Insira o nome do produto">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Descrição do Produto</label>
                  <textarea id="inputDescription" class="form-control" rows="4" placeholder="Insira a descrição do produto"></textarea>
                </div>
                <div class="form-group">
                  <label for="inputFile">Foto do Produto</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputFile">
                      <label class="custom-file-label" for="inputFile">Escolha uma foto</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Insira o preço do produto">
                  <div class="input-group-append">
                    <span class="input-group-text">,00</span>
                  </div>
                </div>

                <!-- checkbox -->
                <div class="form-group">
                  <label for="inputFile">Marca</label>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Adidas</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Nike</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Puma</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Oakley</label>
                  </div>
                </div>

              </div>

            </div>
            </div>
            <div class="col-md-6">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Categoria e Estoque</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputFile">Categoria</label>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Shorts</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Camisetas</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Tênis</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Chinelos</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Mochilas</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Meias</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSpent">Quantidade em Estoque</label>
                  <input type="number" id="inputSpentBudget" class="form-control" value="1" step="1">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-6">
                  <a href="#" class="btn btn-secondary">Cancelar</a>
                  <input type="submit" value="Adicionar" class="btn btn-success float-right">
                </div>
              </div>
            </div>
    </section>
    </div>
  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>The Bullshop - 2022</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Versão</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../../plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../../plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../../plugins/moment/moment.min.js"></script>
  <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../../dist/js/pages/dashboard.js"></script>
</body>

</html>