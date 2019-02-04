<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simulasi Income</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script>
    $(document).ready(function(){
      $("#btn1").click(function(){
        $("#tahunan").fadeIn(500);
        $("#bulanan").css({"display": "none"});
        $(this).addClass("active");
        $("#btn2").removeClass("active");
      });
      $("#btn2").click(function(){
        $("#bulanan").fadeIn(500);
        $("#tahunan").css({"display": "none"});
        $(this).addClass("active");
        $("#btn1").removeClass("active");
      });
    });
    </script>
    <style>
    #btn1,#btn2 {
      color:#fff;
    }
    </style>
</head>

<body style="background-color:#00CF70">
    <div class="container" style="margin-top:30px;">
        <div class="row">
            <div class="col-xs-12 col-md-3">
            </div>
            <div class="col-xs-12 col-md-6" style="margin-left:10px;margin-right:10px;margin-bottom:30px;">
                <img class="mx-auto d-block" style="align:middle" src="https://moringaku.com/img/logo-trans-white.png" alt="Moringaku">
                <h2 style="text-align:center;color:white;">Simulasi Income</h2>
            </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-3">
          </div>
          <div class="col-xs-12 col-md-6" style="margin-left:10px;margin-right:10px;margin-bottom:30px;">
            <ul class="nav nav-pills nav-fill">
            <li class="nav-item" style="padding:5px;">
              <a class="btn btn-outline-warning btn-block active" id="btn2" href="#bulanan"> <b>BULANAN</b> </a>
            </li>
            <li class="nav-item" style="padding:5px;">
              <a class="btn btn-outline-warning btn-block" id="btn1" href="#tahunan"> <b>TAHUNAN</b> </a>
            </li>
          </ul>
          </div>
          <div class="col-xs-12 col-md-3">
          </div>
        </div>
        <div class="row" id="tahunan" style="display:none;">
            <div class="col-xs-12 col-md-3"></div>
            <div class="col-xs-12 col-md-6" style="background-color:white;border-radius:15px;margin:0 10px 10px;padding:30px 15px 10px;">
                <div class="container">
                    <form action="year" method="POST">
                        <div class="form-group"><input type="text" class="form-control" placeholder="Nama" name="nama" required></div>
                        <div class="input-group mb-3">
                        <input type="date" class="form-control" name="tanggal" required>
                        <div class="input-group-append"><span class="input-group-text">Tgl Lahir</span></div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="paket" required>
                                <option value="" hidden>Pilih Paket</option>
                                <option value="Silver">Silver (1.500.000/Tahun)</option>
                                <option value="Gold">Gold (3.000.000/Tahun)</option>
                                <option value="Platinum">Platinum (5000.000/Tahun)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Simulasikan</button>
                        </div>
                    </form>
                    </div>
                  </div>
            </div>
        <div class="row" id="bulanan">
            <div class="col-xs-12 col-md-3"></div>
            <div class="col-xs-12 col-md-6" style="background-color:white;border-radius:15px;margin:0 10px 10px;padding:30px 15px 10px;">
                <div class="container">
                    <form action="year" method="POST">
                        <div class="form-group"><input type="text" class="form-control" placeholder="Nama" name="nama" required></div>
                        <div class="input-group mb-3">
                        <input type="date" class="form-control" name="tanggal" required>
                        <div class="input-group-append"><span class="input-group-text">Tgl Lahir</span></div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="paket" required>
                                <option value="" hidden>Pilih Paket</option>
                                <option value="Basic">Basic (150.000/Bulan)</option>
                                <option value="Standard">Standard (250.000/Bulan)</option>
                                <option value="Premium">Premium (350.000/Bulan)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Simulasikan</button>
                        </div>
                    </form>
                    </div>
                  </div>
            </div>
            <div class="col-xs-12 col-md-3">
            </div>
        </div>
</body>

</html>
