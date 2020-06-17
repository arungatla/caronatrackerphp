<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
    <!-- Bootstrap Js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c71364fe1f.js" crossorigin="anonymous"></script>

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="styles.css">

    <!-- My icon -->
    <link rel="icon" href="virus.png" type="image/png">
    

    
    

    <title>Covid-19 tracker</title>
</head>
<body >
    <div class="container-fluid bg-dark p-5 text-center my-3">
    <h1 class="text-light">Covid-19 Tracker</h1>
    <h5 class=" text-light text-muted ">An opensource project to track the covid19 cases around the world!</h5>
    </div>
    <div class="container my-5 ">
        <div class="row text-center">
        <div class="col-4 text-warning">
            <h5>Confirmed</h5>
            <?php echo $total_confirmed; ?>
        </div>
        <div class="col-4 text-success">
            <h5>Recovered</h5>
            <?php echo $total_recovered; ?>
        </div>
        <div class="col-4 text-danger">
            <h5>Deceased</h5>
            <?php echo $total_deaths; ?>
        </div>
        </div>
    </div>
    <div class="container bg-light p-3 my-3 text-center">
        <h5 class="text-info">"Prevention is better than cure"</h5>
        <h5 class="text-muted">"Stay indoors,Stay away from COVID-19!"</h5>
    </div>
    <div class="container-fluid">
        <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Countries</th>
                    <th scope="col">Confirmed</th>
                    <th scope="col">Recovered</th>
                    <th scope="col">Deceased</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data as $key => $value){
                        $increase=$value[$days_count]['confirmed']-$value[$days_count_prev]['confirmed']
                ?>
                    <tr>
                        <th><?php echo $key;?></th>
                        <td>
                            <?php echo $value[$days_count]['confirmed'];?>
                            <?php if($increase !=0){?>
                                <small class="text-danger pl-3"><i class="fas fa-arrow-alt-circle-up"></i><?php echo $increase; ?></small>
                            
                            <?php }?>
                            
                        </td>
                        <td>
                            <?php
                            echo $value[$days_count]['recovered'];
                            
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $value[$days_count]['deaths'];
                            
                            ?>
                        </td>
                    </tr>

                <?php }?>
            
            </tbody>    
        </table>
        </div>
    </div>
    <footer class="footer mt-auto py-3 bg-dark">
    <div class="container text-center">
        <img src="arungatla.jpg" alt="arungatla" height="50px" width="50px">
        <div class="text-muted">Copyright &copy;2020,<a href="#">arungatla</a></div>
    </div>
    </footer>
    
</body>
</html>