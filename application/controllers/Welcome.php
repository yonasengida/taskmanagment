<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/u/bs-3.3.6/jq-2.2.3,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.12,b-1.2.0,b-colvis-1.2.0,b-html5-1.2.0,b-print-1.2.0,fh-3.1.2,se-1.2.0/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/u/bs-3.3.6/jq-2.2.3,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.12,b-1.2.0,b-colvis-1.2.0,b-html5-1.2.0,b-print-1.2.0,fh-3.1.2,se-1.2.0/datatables.min.js"></script>  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/locales/bootstrap-datepicker.de.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function(){
        $('.date_picker input').datepicker({
           format: "dd-mm-yyyy",
           todayBtn: "linked",
           language: "de",
            autoclose: true
        });
    });
    </script>
    <style type="text/css">
        .control-label {
            padding-top:7px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="page-header">
            Neues Mobile Device anlegen
        </div>
    </div>
    <div class="container">
      <form class="form-horizontal" name="mobdev_neu" action="mobdev_neu.php" method="post">
        <div class="form-group">
          <label for="mobdev_neu_type" class="col-xs-2 control-label">Type</label>
          <div class="col-xs-10">
            <select id="mobdev_neu_type" class="form-control" name="mobdev_neu_type" REQUIRED>
                <option value="">-- Bitte auswählen --</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="mobdev_neu_imei" class="col-xs-2 control-label">IMEI</label>
          <div class="col-xs-10">
            <input type="text" id="mobdev_neu_imei" class="form-control" name="mobdev_neu_imei" placeholder="Pflichtfeld" REQUIRED>
          </div>
        </div>
        <div class="form-group">
          <label for="mobdev_neu_kaufdatum" class="col-xs-2 control-label">Kaufdatum</label>
          <div class="col-xs-10 date_picker">
            <input type="text" id="mobdev_neu_kaufdatum" class="form-control" name="mobdev_neu_kaufdatum" placeholder="Pflichtfeld">
          </div>
        </div>
      </form>
    </div>

    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>

</body>