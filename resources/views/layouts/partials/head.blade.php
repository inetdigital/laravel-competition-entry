<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>MaxFactor gift box prize</title>
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  
  <!-- Styles -->
  <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
  
  <!-- Scripts -->
  <script>
      window.Laravel = <?php
      echo json_encode([
        'csrfToken' => csrf_token(),
      ]);
      ?>
  </script>  
</head>