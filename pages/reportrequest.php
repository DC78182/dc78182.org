<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Прошу рассказать о ...</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <script>
        $(document).ready(function() {
            $("#btn").click(
                function() {
                    sendAjaxForm('result_form', 'ajax_form', 'pages/report.php');
                    return false;
                }
            );
        });

        function sendAjaxForm(result_form, ajax_form, url) {
            $.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                data: $("#" + ajax_form).serialize(),
                success: function(response) {
                    $('#result_form').html(
                        '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h5><i class="icon fas fa-check"></i> Успешно!</h5>Ваше сообщение отправлено на рассмотрение.</div>'
                    );
                },
                error: function(response) {
                    $('#result_form').html(
                        '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h5><i class="icon fas fa-ban"></i> Ошибка!</h5>Произошла ошибка во время отправки данных!</div>'
                    );
                }
            });
        }
    </script>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div id="result_form"></div>
            <form role="form" id="ajax_form" method="post">
                <div class="form-group">
                    <label for="text">Ваши контактные данные и интересующая тема</label>
                    <textarea name="name" class="form-control" id="text"></textarea>
                    <input type="hidden" id="datePage" name="theme" value="Прошу рассказать о ...">
                </div>
                <button type="submit" id="btn" class="btn btn-primary">Отправить</button>
            </form>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
