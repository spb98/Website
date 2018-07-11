<?php include("ConfigsDoctype.php"); ?>
<?php include("ConfigsDB.php");

//Verifica se o user tem o login feito e credenciais

if (isset($_SESSION["loginError"]) || $_SESSION["LoggedNivel"] != '0') {
    echo 'Erro de credenciais.';
    header("location: LogoutFunc.php");

}
?>

<html class="no-js" lang=""> <!--<![endif]-->
<?php include("ConfigsHead.php"); ?>
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


    <form method="post" class="" action="AdminTableAlunosAddFunc.php" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <strong>Adicionar </strong> aluno:
            </div>
            <div class="card-body card-block">
                <div class="form-group"><label class="form-control-label">ID do Aluno:</label><input
                            type="number" disabled placeholder="Automático" class="form-control"><span
                            class="help-block">Valor é inserido automaticamente pela base de dados.</span></div>

                <div class="form-group"><label class="form-control-label">ID do Encarregado:</label><input
                            type="number" required name="IdEncarregado" placeholder="Exemplo: 1" class="form-control"><span
                            class="help-block">Valor númerico que corresponde a um Encarregado de Educação na base de dados.</span>
                </div>

                <div class="form-group"><label class="form-control-label">ID da Turma:</label><input
                            type="number" required name="IdTurma" placeholder="Exemplo: 1" class="form-control"><span
                            class="help-block">Valor númerico que corresponde a uma turma na base de dados.</span></div>

                <div class="form-group"><label class="form-control-label">Nome do aluno:</label><input
                            type="text" required maxlength="100" name="Nome" placeholder="Exemplo: João Jacinto"
                            class="form-control"><span
                            class="help-block"></span></div>

                <div class="form-group"><label class="form-control-label">Morada do aluno:</label><input
                            type="text" required maxlength="100" name="Morada" placeholder="Exemplo: Rua da Ponte Nova"
                            class="form-control"><span
                            class="help-block"></span></div>

                <div class="form-group"><label class="form-control-label">Localidade do aluno:</label><input
                            type="text" required maxlength="100" name="Localidade" placeholder="Exemplo: Batalha"
                            class="form-control"><span
                            class="help-block"></span></div>

                <div class="form-group"><label class="form-control-label">Cartão de Cidadão do aluno:</label><input
                            type="text" required maxlength="20" name="CC" placeholder="Exemplo: XXXXXXXX XXXX"
                            class="form-control"><span
                            class="help-block"></span></div>

                <div class="form-group"><label class="form-control-label">Sexo do aluno:</label><input
                            type="text" required maxlength="10" name="Sexo" placeholder="Exemplo: Masculino"
                            class="form-control"><span
                            class="help-block"></span></div>

                <div class="form-group"><label class="form-control-label">Data de nascimento do aluno:</label><input
                            type="date" required name="DataNascimento" class="form-control"><span
                            class="help-block"></span></div>

                <div class="form-group"><label for="file-input" class=" form-control-label">Foto do aluno:</label>
                    <input type="file" required id="file-input" ng-model="image" accept="image/*" name="Foto" class="form-control-file">
                    <span class="help-block"></span></div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submeter
                </button>
                <button type="reset" class="btn btn-info btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
                <a href="AdminTableAlunos.php">
                    <button type="button" class="btn btn-danger btn-sm">
                        <i class="fa  fa-arrow-circle-o-right"></i> Cancelar
                    </button>
                </a>
            </div>
        </div>
    </form>
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
