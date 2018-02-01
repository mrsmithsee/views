<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1>@yield('titulo')</h1>
      </div>

        @yield('conteudo')

      <div class="footer">
        <h2>Rodape</h2>
    </div>
    <script type="text/javascript">

    </script>
  </body>
</html>
