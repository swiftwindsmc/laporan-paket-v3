<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="row justify-content-center m-4">
        <h2>LAPORAN OUTBOUND</h2>
    </div>
</head>

<body>
    <div class="container">
        <div class= "m-4">
            <h6 style="font-weight:bold">Tanggal: <?php
                    //return current system date
                    $date = date('d/m');
                    echo $date;
                    ?>
            </h6>
        </div>

        <form method="POST" action="php2/action1.php">
            <div class="form-group row m-4">
                <label for="PIC" class="col-xs-3 col-form-label" style="font-weight:bold">Nama: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Ketik nama Anda" required>
                </div>
            </div>

            <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Ekspedisi</th>
                <th scope="col">Sistem</th>
                <th scope="col">Fisik</th>
                <th scope="col">Manual</th>
                <th scope="col">Kirim</th>
                </tr>
            </thead>
            <tbody>
    <!-- BLOCK 1: ANTER+SICEPAT -->
                <tr>
                <th scope="row">Anteraja</th>

                    <form method="POST" action="php2/action1.php">
                        <div class="form-group row m-2 w-45">
                        <!-- ANTERAJA SISTEM -->
                            <td>
                                <input type="number" class="form-control" id="Sistem" 
                                name= "anterajas" required>
                            </td>
                        <!-- ANTERAJA FISIK -->
                            <td>
                                <input type="number" class="form-control" id="Fisik" 
                                name= "anterajaf" required>
                            </td>
                        <!-- ANTERAJA MANUAL -->
                            <td>
                                <input type="number" class="form-control" id="Manual" 
                                name= "anterajam" required>
                            </td>
                        </div>
                </tr>

                <tr>
                <th scope="row">JNE</th>
                    <div class="form-group row m-2 w-45">
                        <!-- JNE SISTEM -->
                            <td>
                                <input type="number" class="form-control" id="Sistem" 
                                name= "jnes" required>
                            </td>
                        <!-- JNE FISIK -->
                            <td>
                                <input type="number" class="form-control" id="Fisik" 
                                name= "jnef" required>
                            </td>
                        <!-- JNE MANUAL-->
                            <td>
                                <input type="number" class="form-control" id="Manual" 
                                name= "jnem" required>
                            </td>
                    </div>
                </tr>
                
                <tr>
                <th scope="row">Sicepat</th>
                        <div class="form-group row m-2 w-45">
                        <!-- SICEPAT SISTEM -->
                            <td>
                                <input type="number" class="form-control" id="Sistem" 
                                name= "sicepats" required>
                            </td>
                        <!-- SICEPAT FISIK -->
                            <td>
                                <input type="number" class="form-control" id="Fisik" 
                                name= "sicepatf" required>
                            </td>
                        <!-- SICEPAT MANUAL-->
                            <td>
                                <input type="number" class="form-control" id="Manual" 
                                name= "sicepatm" required>
                            </td>
                        <!-- AJ + SC SUBMIT-->
                            <td>
                                <input type="submit" class="btn btn-success" name="btnAJS" value="WA Expedisi(AJS)">
                            </td>
                        </div>
                    </form>
                </tr>


    <!-- END BLOCK 1 -->                  
    <!-- BLOCK 2: JNT -->         
                <tr>
                <th scope="row">JNT</th>

                    <form method="POST" action="php2/action2.php">
                        <div class="form-group row m-2 w-45">
                        <!-- JNT SISTEM -->
                            <td>
                                <input type="number" class="form-control" id="Sistem" 
                                name= "jnts" required>
                            </td>
                        <!-- JNT FISIK -->
                            <td>
                                <input type="number" class="form-control" id="Fisik" 
                                name= "jntf" required>
                            </td>
                        <!-- JNT MANUAL -->
                            <td>
                                <input type="number" class="form-control" id="Manual" 
                                name= "jntm" required>
                            </td>
                         <!-- JNT SUBMIT-->
                            <td>
                                <input type="submit" class="btn btn-success" name="btnJNT" value="WA Expedisi(JNT)">
                            </td>
                        
                        </div>
                    </form>
                </tr>

    <!-- END BLOCK 2 -->                  
    <!-- BLOCK 3: SHOPEE EXPRESS -->   
                <tr>
                <th scope="row">Shopee</th>

                    <form method="POST" action="php2/action3.php">
                        <div class="form-group row m-2 w-45">
                        <!-- JNT SISTEM -->
                            <td>
                                <input type="number" class="form-control" id="Sistem" 
                                name= "shopees" required>
                            </td>
                        <!-- JNT FISIK -->
                            <td>
                                <input type="number" class="form-control" id="Fisik" 
                                name= "shopeef" required>
                            </td>
                        <!-- JNT MANUAL -->
                            <td>
                                <input type="number" class="form-control" id="Manual" 
                                name= "shopeem" required>
                            </td>
                         <!-- JNT SUBMIT-->
                            <td>
                                <input type="submit" class="btn btn-success" name="btnSHP" value="WA Expedisi(SHP)">
                            </td>
                        
                        </div>
                    </form>
                </tr>
     <!-- END BLOCK 3 -->  
            </tbody>
            </table>
    <!--BUAT LAPORAN-->
    <form method="POST" action="php2/action4.php">
        <div class="row justify-content-center m-4">
            <input type="submit" class="btn btn-success" name="laporan" value="Buat & Kirim Laporan ke WA">
        </div>
    </form>

    </div>
</body>
</html>

