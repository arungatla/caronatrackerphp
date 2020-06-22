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

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c71364fe1f.js" crossorigin="anonymous"></script>


    <!-- My icon -->
    <link rel="icon" href="virus.png" type="image/png">

    <!-- Tailwind css -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <!-- Bootstrap Js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="styles.css">
    

    
    

    <title>Covid-19 Tracker</title>
</head>
<body>
<header class="text-gray-400 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <a href="#top"><img src="virusnavi.png" title="caronavirus image"/></a>
            <span class=" ml-1 text-xl text-light">Covid-19 Tracker</span>
            <div class="container-fluid ">
                <h5 class=" text-light text-muted">An opensource project to track the covid19 cases around the world!</h5>
            </div>
        </a>
    
    </div>
</header>
    <div class="container my-5">
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
            <thead class="thead-dark bg-gray-900">
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
    <!-- <footer class="footer mt-auto py-3 bg-dark">
    <div class="container text-center">
        <img src="arungatla.jpg" alt="arungatla" height="50px" width="50px">
        <div class="text-muted">Copyright &copy;2020,<a href="#">arungatla</a></div>
    </div>
    </footer> -->
    <footer class="text-gray-500 bg-gray-900 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
        <a href="#top">
            <img src="virusnavi.png" title="caronavirus image"/></a>
                
            <span class="ml-2 text-xl" href="#top" >Covid-19 Tracker</span>
        </a>
    <p class="text-sm text-gray-600 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2020 ArunGatla —
      <a href="https://twitter.com/iamarungatla" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">@arungatla</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-600 ml-1" href="https://www.facebook.com/gatlaarun143/"  target="_blank" rel="noopener noreferrer">
        <svg fill="CurrentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
        <a ></a>
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-600" href="https://twitter.com/iamarungatla"  target="_blank" rel="noopener noreferrer">
        <svg fill="CurrentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-600" href="https://instagram.com/iamarungatla"  target="_blank" rel="noopener noreferrer">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-600" href="https://www.linkedin.com/in/arun-gatla-15358b160/"  target="_blank" rel="noopener noreferrer">
        <svg fill="CurrentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
      <a class="ml-3 text-gray-600" href="https://github.com/arungatla"  target="_blank" rel="noopener noreferrer">
      <svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m12 .5c-6.63 0-12 5.28-12 11.792 0 5.211 3.438 9.63 8.205 11.188.6.111.82-.254.82-.567 0-.28-.01-1.022-.015-2.005-3.338.711-4.042-1.582-4.042-1.582-.546-1.361-1.335-1.725-1.335-1.725-1.087-.731.084-.716.084-.716 1.205.082 1.838 1.215 1.838 1.215 1.07 1.803 2.809 1.282 3.495.981.108-.763.417-1.282.76-1.577-2.665-.295-5.466-1.309-5.466-5.827 0-1.287.465-2.339 1.235-3.164-.135-.298-.54-1.497.105-3.121 0 0 1.005-.316 3.3 1.209.96-.262 1.98-.392 3-.398 1.02.006 2.04.136 3 .398 2.28-1.525 3.285-1.209 3.285-1.209.645 1.624.24 2.823.12 3.121.765.825 1.23 1.877 1.23 3.164 0 4.53-2.805 5.527-5.475 5.817.42.354.81 1.077.81 2.182 0 1.578-.015 2.846-.015 3.229 0 .309.21.678.825.56 4.801-1.548 8.236-5.97 8.236-11.173 0-6.512-5.373-11.792-12-11.792z" fill="CurrentColor"/></svg>
      </a>
    </span>
  </div>
</footer>
    
</body>
</html>