<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simulasi Manfaat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <style>
        .jumbotron {
            background: url("https://moringaku.com/img/logo-trans-white.png") no-repeat center center;
            background-color: #00CF70;
        }
        .card-footer {
            background-color: #00CF70;
            margin:25px 0px 0px 0px;
        }
        #rcorners2 {
            border-radius: 10px;
            border: 2px solid #73AD21;
            width: auto;
            height: auto;
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php
function rupiah($angka)
{
  $jadi = "Rp ".number_format($angka, 0, ',', '.').",-";
  return $jadi;
}

function number($angka)
{
  $jadi = number_format($angka, 0, ',', '.');
  return $jadi;
}

$nama = $_POST["nama"];
$paket = $_POST["paket"];
$mengajak = $_POST["mengajak"];
$tumbuh = 0;
if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $avpremi = 2650000; } else { $avpremi = 260000; }

$n = 2;
$hitung_mengajak = $mengajak;
do {
$hitung_mengajak = $hitung_mengajak + ($hitung_mengajak*$tumbuh)/100;
$n++;
} while ( $n <= 24);
$total_jaringan = $hitung_mengajak;

$m = 1;
$ref = 15/100;
$gen_2 = 1.5/100;
// $gen_8 = (50/100)*$gen_2;
// $gen_15 = (50/100)*$gen_8;
$t_member = $mengajak;

$no = 0;
$nama = $_POST["nama"];
$paket = $_POST["paket"];
$mengajak = $_POST["mengajak"];
// $tumbuh = $_POST["tumbuh"];
$tumbuh = 0;
$tambahan = $mengajak;
$new = $mengajak;
if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $avpremi = 2650000; } else { $avpremi = 260000; }
if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $list = "Gen "; } else { $list = "Bulan "; }
if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $gen_tahun = 7; } else { $gen_tahun = 12; }
$ref = 15/100;

$t_bonus_silver = 0;
$t_bonus_gold = 0;
$t_bonus_platinum = 0;

$t_2bonus_silver = 0;
$t_2bonus_gold = 0;
$t_2bonus_platinum = 0;

$gen_2_silver = 1.5/100;
$gen_2_gold = 1.75/100;
$gen_2_platinum = 2/100;

$gen_8_silver = (50/100)*$gen_2_silver;
$gen_8_gold = (50/100)*$gen_2_gold;
$gen_8_platinum = (50/100)*$gen_2_platinum;

do {
$no++;

if ($no == 1) {
  $bonus_silver = ($new * $avpremi * $ref);
  $bonus_gold = ($new * $avpremi * $ref);
  $bonus_platinum = ($new * $avpremi * $ref);
} elseif ($no >= 2 and $no <= 7) {
  $bonus_gen2_silver = ($new * $avpremi * $gen_2_silver);
  $bonus_gen2_gold = ($new * $avpremi * $gen_2_gold);
  $bonus_gen2_platinum = ($new * $avpremi * $gen_2_platinum);
  $bonus_silver = $bonus_gen2_silver;
  $bonus_gold = $bonus_gen2_gold;
  $bonus_platinum = $bonus_gen2_platinum;
} elseif ($no >= 8 && $no <= 14) {
  $bonus_gen8_silver = ($new * $avpremi * $gen_8_silver);
  $bonus_gen8_gold = ($new * $avpremi * $gen_8_gold);
  $bonus_gen8_platinum = ($new * $avpremi * $gen_8_platinum);
  $bonus_silver = $bonus_gen8_silver;
  $bonus_gold = $bonus_gen8_gold;
  $bonus_platinum = $bonus_gen8_platinum;
}
// elseif ($no >= 15 && $no <= 24) {
//   $bonus_gen15_silver = ($tambahan * $avpremi * $gen_15_silver);
//   $bonus_gen15_gold = ($tambahan * $avpremi * $gen_15_gold);
//   $bonus_gen15_platinum = ($tambahan * $avpremi * $gen_15_platinum);
//   $bonus_silver = $bonus_gen15_silver;
//   $bonus_gold = $bonus_gen15_gold;
//   $bonus_platinum = $bonus_gen15_platinum;
// }
// $tambahan = ($mengajak * $tumbuh)/100;
// $mengajak = $mengajak + $tambahan;

$new = $new * $mengajak;
$tambahan = $tambahan + $new;

$t_bonus_silver = $t_bonus_silver + $bonus_silver;
$t_bonus_gold = $t_bonus_gold + $bonus_gold;
$t_bonus_platinum = $t_bonus_platinum + $bonus_platinum;

$t_2bonus_silver = $t_2bonus_silver + $t_bonus_silver;
$t_2bonus_gold = $t_2bonus_gold + $t_bonus_gold;
$t_2bonus_platinum = $t_2bonus_platinum + $t_bonus_platinum;

if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $total_1 = $t_bonus_silver; } else { $total_1 = $t_2bonus_silver; }
if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $total_2 = $t_bonus_gold; } else { $total_2 = $t_2bonus_gold; }
if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $total_3 = $t_bonus_platinum; } else { $total_3 = $t_2bonus_platinum; }

} while ($no < $gen_tahun);
$tambahan = $tambahan - $new;

?>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1></h1>
        <p></p>
    </div>

    <div class="container" style="margin-top:30px">
        <div class="row">
          <!-- Table Data Tabungan -->
            <div class="col-md-6 offset-md-3">
                <div id="rcorners2" class="container">
                    <h3 style="text-align: center;font-weight: bold;">Table Income</h3>
                    <table class="table table-sm table-borderless">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <?php echo $nama;?>
                                </td>
                            </tr>
                            <tr>
                                <td>Rata-rata per-orang mampu mengajak</td>
                                <td>
                                    <?php echo $mengajak . " Orang";?>
                                </td>
                            </tr>
                            <tr>
                                <td>Av. Premi</td>
                                <td><?php echo rupiah($avpremi); ?>
                                </td>
                            </tr>
                            <tr>
                                <td><?php if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ echo "Bonus Silver"; } else { echo "Bonus Basic"; } ?></td>
                                <td nowrap>
                                    <?php echo rupiah(round($total_1)); ?>
                                </td>
                            </tr>
                            <tr>
                                <td><?php if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ echo "Bonus Gold"; } else { echo "Bonus Standard"; } ?></td>
                                <td nowrap>
                                    <?php echo rupiah(round($total_2));?>
                                </td>
                            </tr>
                            <tr>
                                <td><?php if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ echo "Bonus Platinum"; } else { echo "Bonus Premium"; } ?></td>
                                <td nowrap>
                                    <?php echo rupiah(round($total_3));?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="container table-responsive" style="border-style:none;">
                    <h3 style="text-align: center;font-weight: bold;">Table Bonus</h3>
                    <table style="vertical-align: middle;" class="table table-striped table-sm">
                        <thead style="color: white;background-color:#00CF70;" class="">
                            <tr>
                                <th style="width:10%;text-align: center;vertical-align: middle;" wrap><?php if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ echo 'Gen'; } else {echo 'Bulan';} ?></th>
                                <th style="width:15%;text-align: center;vertical-align: middle;" wrap>New <br> Member</th>
                                <th style="width:15%;text-align: center;vertical-align: middle;" wrap>Acc <br> Member</th>
                                <th style="width:20%;text-align: right;vertical-align: middle;" wrap><?php if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ echo 'Silver'; } else {echo 'Basic';} ?></th>
                                <th style="width:20%;text-align: right;vertical-align: middle;" wrap><?php if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ echo 'Gold'; } else {echo 'Standard';} ?></th>
                                <th style="width:20%;text-align: right;vertical-align: middle;" wrap><?php if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ echo 'Platinum'; } else {echo 'Premium';} ?></th>
                            </tr>
                        </thead>
                        <tbody>

                    <?php
                    $no = 0;
                    $nama = $_POST["nama"];
                    $paket = $_POST["paket"];
                    $mengajak = $_POST["mengajak"];
                    // $tumbuh = $_POST["tumbuh"];
                    $tumbuh = 0;
                    $tambahan = $mengajak;
                    $new = $mengajak;

                    $t_bonus_silver = 0;
                    $t_bonus_gold = 0;
                    $t_bonus_platinum = 0;

                    $t_2bonus_silver = 0;
                    $t_2bonus_gold = 0;
                    $t_2bonus_platinum = 0;

                    if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $avpremi = 2650000; } else { $avpremi = 260000; }
                    if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $list = "Gen "; } else { $list = "Bulan "; }

                    $ref = 15/100;

                    $gen_2_silver = 1.5/100;
                    $gen_2_gold = 1.75/100;
                    $gen_2_platinum = 2/100;

                    $gen_8_silver = (50/100)*$gen_2_silver;
                    $gen_8_gold = (50/100)*$gen_2_gold;
                    $gen_8_platinum = (50/100)*$gen_2_platinum;
                    //
                    // $gen_15_silver = (30/100)*$gen_2_silver;
                    // $gen_15_gold = (30/100)*$gen_2_gold;
                    // $gen_15_platinum = (30/100)*$gen_2_platinum;

                    do {
                    $no++;

                    echo "<tr>";
                    echo "<td style='text-align: center;'>".$list.$no."</td>";
                    echo "<td style='text-align: center;'>".number(round($new))."</td>";
                    echo "<td style='text-align: center;'>".number(round($tambahan))."</td>";

                    if ($no == 1) {
                      $bonus_silver = ($new * $avpremi * $ref);
                      $bonus_gold = ($new * $avpremi * $ref);
                      $bonus_platinum = ($new * $avpremi * $ref);
                    } elseif ($no >= 2 and $no <= 7) {
                      $bonus_gen2_silver = ($new * $avpremi * $gen_2_silver);
                      $bonus_gen2_gold = ($new * $avpremi * $gen_2_gold);
                      $bonus_gen2_platinum = ($new * $avpremi * $gen_2_platinum);
                      $bonus_silver = $bonus_gen2_silver;
                      $bonus_gold = $bonus_gen2_gold;
                      $bonus_platinum = $bonus_gen2_platinum;
                    } elseif ($no >= 8 && $no <= 14) {
                      $bonus_gen8_silver = ($new * $avpremi * $gen_8_silver);
                      $bonus_gen8_gold = ($new * $avpremi * $gen_8_gold);
                      $bonus_gen8_platinum = ($new * $avpremi * $gen_8_platinum);
                      $bonus_silver = $bonus_gen8_silver;
                      $bonus_gold = $bonus_gen8_gold;
                      $bonus_platinum = $bonus_gen8_platinum;
                    }
                    // elseif ($no >= 15 && $no <= 24) {
                    //   $bonus_gen15_silver = ($tambahan * $avpremi * $gen_15_silver);
                    //   $bonus_gen15_gold = ($tambahan * $avpremi * $gen_15_gold);
                    //   $bonus_gen15_platinum = ($tambahan * $avpremi * $gen_15_platinum);
                    //   $bonus_silver = $bonus_gen15_silver;
                    //   $bonus_gold = $bonus_gen15_gold;
                    //   $bonus_platinum = $bonus_gen15_platinum;
                    // }
                    // $tambahan = ($mengajak * $tumbuh)/100;
                    // $mengajak = $mengajak + $tambahan;

                    $new = $new * $mengajak;
                    $tambahan = $tambahan + $new;

                    $t_bonus_silver = $t_bonus_silver + $bonus_silver;
                    $t_bonus_gold = $t_bonus_gold + $bonus_gold;
                    $t_bonus_platinum = $t_bonus_platinum + $bonus_platinum;

                    if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $fill_1 = $bonus_silver; } else { $fill_1 = $t_bonus_silver; }
                    if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $fill_2 = $bonus_gold; } else { $fill_2 = $t_bonus_gold; }
                    if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $fill_3 = $bonus_platinum; } else { $fill_3 = $t_bonus_platinum; }

                    echo "<td style='text-align: right;' nowrap>".number(round($fill_1))."</td>";
                    echo "<td style='text-align: right;' nowrap>".number(round($fill_2))."</td>";
                    echo "<td style='text-align: right;' nowrap>".number(round($fill_3))."</td>";
                    echo "</tr>";

                    $t_2bonus_silver = $t_2bonus_silver + $t_bonus_silver;
                    $t_2bonus_gold = $t_2bonus_gold + $t_bonus_gold;
                    $t_2bonus_platinum = $t_2bonus_platinum + $t_bonus_platinum;

                  } while ($no < $gen_tahun);
                  $tambahan = $tambahan - $new;
                  if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $total_1 = $t_bonus_silver; } else { $total_1 = $t_2bonus_silver; }
                  if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $total_2 = $t_bonus_gold; } else { $total_2 = $t_2bonus_gold; }
                  if ($paket == "Silver" || $paket == "Gold" || $paket == "Platinum"){ $total_3 = $t_bonus_platinum; } else { $total_3 = $t_2bonus_platinum; }
                    ?>

                            <tr>
                                <th style="text-align: center;">TOTAL</th>
                                <th style="text-align: center;" colspan="2">
                                    <?php echo number($tambahan);?>
                                </th>
                                <th style="text-align: right;" nowrap>
                                    <?php echo number(round($total_1));?>
                                </th>
                                <th style="text-align: right;" nowrap>
                                    <?php echo number(round($total_2));?>
                                </th>
                                <th style="text-align: right;" nowrap>
                                    <?php echo number(round($total_3));?>
                                </th>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>

    </div>

    <div class="card-footer">
        <p></p>
    </div>
</body>

</html>
