<?php include("ConfigsDoctype.php");?>
<?php include("ConfigsDB.php");

//Verifica se o user tem o login feito e credenciais

if (isset($_SESSION["loginError"]) || $_SESSION["LoggedNivel"] != '0') {
    echo 'Erro de credenciais.';
    header("location: LogoutFunc.php");

}
?>

<html class="no-js" lang=""> <!--<![endif]-->
<?php include("ConfigsHead.php");?>
<body>

<!-- Left Panel -->

<?php include("AdminTableSideBars.php"); ?>

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                   aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="LogoutFunc.php"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </header><!--
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Table</a></li>
                        <li class="active">Encarregados</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Encarregados</strong>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <h1> Adicionar a informação do Encarregado:</h1>
                                <hr></hr>
                                <form method="post" action="AdminTableEncarregadosAddFunc.php">
                                    <div>
                                        <div class="form-group"><label>Id do Aluno:</label><input class="form-control"
                                                                                                 type="text"
                                                                                                 name="IdAlunos">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group"><label>Id do User:</label><input class="form-control"
                                                                                            type="text"
                                                                                            autocomplete="off"
                                                                                            required="" name="IdUsers">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group"><label>Localidade:</label><input class="form-control"
                                                                                                 type="text"
                                                                                                 name="Localidade"
                                                                                                 autocomplete="off"
                                                                                                 required=""></div>
                                    </div>
                                    <div>
                                        <div class="form-group"><label>Morada:</label><input class="form-control"
                                                                                               type="text"
                                                                                               name="Morada"
                                                                                               required="">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group"><label>Sexo:</label><input class="form-control"
                                                                                             type="text"
                                                                                             name="Sexo"
                                                                                             required="">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group"><label>Nome:</label><input class="form-control"
                                                                                             type="text"
                                                                                             name="Nome"
                                                                                             required="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div>
                                            <button class="btn btn-primary form-btn" type="submit">Fazer Alterações
                                            </button>
                                </form>
                                <a href="AdminTableEncarregados.php">
                                    <button class="btn btn-danger form-btn" type="button">Cancelar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->


<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/lib/data-table/datatables-init.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });
</script>


</body>
</html>
