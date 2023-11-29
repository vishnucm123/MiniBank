<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>MINI BANK | Admin</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Custom fonts for this template-->
    <link
        href="vendor/font-awesome/css/font-awesome.min.css"
        rel="stylesheet"
        type="text/css"
    />
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet"/>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->

@include('bank.layout.navbar')



<div class="content-wrapper">

    @yield('content')

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('bank.layout.footer')
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Ready to Leave?
                    </h5>
                    <button
                        class="close"
                        type="button"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Select "Logout" below if you are ready to end your current
                    session.
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-secondary"
                        type="button"
                        data-dismiss="modal"
                    >
                        Cancel
                    </button>
                    {{--                    <a class="btn btn-primary" href="login.html">Logout</a>--}}
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all layout-->
    <script src="js/sb-admin.min.js"></script>


    <script>
        $(document).ready(function () {
            $('#logout-link').click(function () {
                event.preventDefault();
                $('#logout-form').submit();
            });
        });
    </script>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

</div>
</body>
</html>
