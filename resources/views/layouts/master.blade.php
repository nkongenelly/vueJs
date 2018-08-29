<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.min.css">
        <!-- Styles -->
      
    </head>
    <body>
        <div id="app">
      

            <div class="content">
                <div class="title m-b-md">
                  HOSPITAL MANAGEMENT SYSTEM
                </div>

                
                    <router-links to="/" exact>Patients</router-links>
                    <router-links to="/services">Services</router-links>
                    <router-links to="/visits">Visits</router-links>
                    <router-links to="/bills">Bills</router-links>
                    <router-view></router-view>
                
            </div>
        </div>
   
        <script src="/js/app.js"></script>
    </body>
</html>
