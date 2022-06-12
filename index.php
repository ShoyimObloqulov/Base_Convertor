<?php
    include_once 'class.php';
    
    if (isset($_POST['submit']) and isset($_POST['leftbase'])) {

        $number = $_POST['number'];
        $base = $_POST['base'];
        $leftbase = $_POST['leftbase'];

        $about = new MathBase();
        $h = $about->save($number,$base,$leftbase);

        echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              '.$h.'
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close, Ok</button>
            </div>
          </div>
        </div>
      </div>';
    }

    if (isset($_POST['submit1']) and isset($_POST['number2'])) {

        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $base = $_POST['base1'];
        $amal = $_POST['amal'];
    
        $obj = new MathBase();
        $a = $obj->save($number1,$base,10);
        $b = $obj->save($number2,$base,10);
        $s = ($a + $b);
        $y = $obj->save($s,10,$base);
        echo '<div class="modal fade" id="exampleModalcha" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              '.$y.' salom
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close, Ok</button>
            </div>
          </div>
        </div>
      </div>';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asosiy menu</title>


    <!-- Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <!-- As a heading -->
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 p-3">Sanoq sistemasi</span>
        </div>
    </nav>

    <br><br>
    <ul class="nav nav-pills mb-3 container" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">Sanoq sistemasiga
                o'tish</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">2 ta son ustida
                amallar</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Mantiqiy Amallar</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">

            <div class="container">
                <form action="index.php" method="post">
                    <h1 class="text-center text-success m-3">Sanoq sistemasiga o'tish</h1>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label h6">Soni kiriting</label>
                        <input type="number" name="number" class="form-control" id="exampleInputText1"
                            aria-describedby="emailHelp">
                        <div id="textHelp" class="form-text">Kirityotgan malumotingiz son bolishi shart</div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationDefault04" class="form-label h6">Qaysi Sanoq Sistemasida
                                    turibdi.</label>
                                <select name="base" class="form-select" id="validationDefault04" required>
                                    <option selected disabled value="">Sanoqni tanlang</option>
                                    <?php
                                for ($i=2; $i <= 32 ; $i++) { 
                                    if($i == 9){
                                        continue;
                                    }
                                    ?>
                                    <option><?=$i?></option>
                                    <?php
                                }
                            ?>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="validationDefault04" class="form-label h6">Qaysi Sanoq Sistemasiga
                                    o'tmoqchisiz</label>
                                <select name="leftbase" class="form-select" id="validationDefault04" required>
                                    <option selected disabled value="">Sanoqni tanlang</option>
                                    <?php
                                for ($i=2; $i <= 32 ; $i++) { 
                                    if($i == 9){
                                        continue;
                                    }
                                    ?>
                                    <option><?=$i?></option>
                                    <?php
                                }
                            ?>
                                </select>
                            </div>
                        </div>
                    </div><br>
                    <button type="button" name="submit" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Natija</button>
                </form>
            </div>


        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="container">
                <form action="index.php" method="post">
                    <h1 class="text-center text-success m-3">2 ta son ustida qoshish amali</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleInputText1" class="form-label h6">1 - soni kiriting</label>
                                <input type="number" name="number1" class="form-control" id="exampleInputText1"
                                    aria-describedby="emailHelp">
                                <div id="textHelp" class="form-text">Kirityotgan malumotingiz son bolishi shart</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleInputText1" class="form-label h6">2 - soni kiriting</label>
                                <input type="number" name="number2" class="form-control" id="exampleInputText1"
                                    aria-describedby="emailHelp">
                                <div id="textHelp" class="form-text">Kirityotgan malumotingiz son bolishi shart</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="validationDefault04" class="form-label h6">Sanoq sistemasi
                                        </label>
                                        <select name="base1" class="form-select" id="validationDefault04" required>
                                            <option selected disabled value="">Sanoqni tanlang</option>
                                            <?php
                                                for ($i=2; $i <= 32 ; $i++) { 
                                                    if($i == 9){
                                                        continue;
                                                    }
                                                    ?>
                                            <option><?=$i?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault04" class="form-label h6">Amalni tanlang
                                            turibdi.</label>
                                        <select name="amal" class="form-select" id="validationDefault04" required>
                                            <option selected disabled value="">Amallar</option>
                                            <option>+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <!-- Button trigger modal --> <br>
                                    <button type="button" name="submit1" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalcha">
                                        Natija:
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="container">
                <div class="input-group mb-3">
                    <input type="text" id="numbers" class="form-control" placeholder="1-Soni kiriting"
                        aria-label="Recipient's username" aria-describedby="button-addon2"><br>
                    <input type="text" id="numbers1" class="form-control" placeholder="2-Soni kiriting"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary" onclick="solve()" type="button" id="button-addon2">Button</button>
                </div><br>

                <div class="col-md-6">
                    <label for="validationDefault04" class="form-label h6">Sanoq sistemasi
                    </label>
                    <select name="base1" class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">Sanoqni tanlang</option>
                        <?php
                                                for ($i=2; $i <= 32 ; $i++) { 
                                                    if($i == 9){
                                                        continue;
                                                    }
                                                    ?>
                        <option><?=$i?></option>
                        <?php
                                                }
                                            ?>
                    </select>
                </div>

            </div>
        </div>
    </div>

    <div class="col-12 py-2 py-4">
        <p class="my-0 py-0 text-center">Copyrighted © 2022-
            <?
                // https://en.wikipedia.org/wiki/Date_format_by_country
                echo date("Y")." ";
                date_default_timezone_set('YMD');
                echo date(DATE_RFC822);
            ?>
            by</p>
    </div>
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script>
        function convertBase(value, from_base, to_base) {
            var range = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+/'.split('');
            var from_range = range.slice(0, from_base);
            var to_range = range.slice(0, to_base);

            var dec_value = value.split('').reverse().reduce(function (carry, digit, index) {
                if (from_range.indexOf(digit) === -1) throw new Error('Invalid digit `' + digit +
                    '` for base ' + from_base + '.');
                return carry += from_range.indexOf(digit) * (Math.pow(from_base, index));
            }, 0);

            var new_value = '';
            while (dec_value > 0) {
                new_value = to_range[dec_value % to_base] + new_value;
                dec_value = (dec_value - (dec_value % to_base)) / to_base;
            }
            return new_value || '0';
        }

        function solve() {
            var btn = document.getElementById("numbers").value.toString();
            var btn1 = document.getElementById("numbers1").value.toString();
    

            var btn2 = document.getElementById("validationDefault04").value;

            alert(convertBase(btn,btn2,2).toString() + " " + convertBase(btn1,btn2,2).toString());
        }
    </script>
</body>

</html>