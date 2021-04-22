<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Certificado</title>

    <!-- Custom fonts for this template -->
    

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style type="text/css">
        body{
            margin: 0;
        }
        html {
          margin: 0;
        }
    </style>

</head>

<body background="{{ asset('fondo.jpg') }}" style="max-width: 100%; max-height: 100%;background-repeat: no-repeat; background-position: center center;">
                            
                     

                        <div class="card-body text-center w-100 flex-column" style="margin-top: 330px">
                           <p class="" style="font-size: 18px">Se hace constar que se le ha sido otorgado el cargo de <strong>{{App\Cargo::find($ciudadanos->idcargo)->nombre}}</strong> al ciudadano
                            <h1 style="font-size: 65px">{{$ciudadanos->nombre}} {{$ciudadanos->apellidoP}} {{$ciudadanos->apellidoM}}</h1></p>
                        </div>
                  


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>