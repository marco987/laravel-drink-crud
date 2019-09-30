<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>

      <!-- CSS -->
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  </head>
  <body>
    <div id="container">
      <header>
        <h1>Drink in database</h1>
      </header>

      <main>
        <div class="bevande">

          @foreach ($drinks as $drink)

          <div class="box">
            <p class="nome">Nome bevanda: {{$drink->nome}}</p>
            <p>Marca: {{$drink->marca}}</p>
            <p>Prezzo: {{$drink->prezzo}} €</p>
            <p>Scadenza: {{$drink->scadenza}}</p>
          </div>

          @endforeach

        </div>
        <div class="statistiche">

          <div class="box">
            <p>Prezzo massimo: {{$prezzoMax}}</p>
            <p>Prezzo minimo: {{$prezzoMin}}</p>
            <p>Prezzo medio: {{$prezzoAvg}}</p>
          </div>

        </div>
      </main>

      <footer>
        <h4>Database Laravel</h4>
      </footer>
    </div>
  </body>
</html>

{{-- <h2>Nome bevanda: {{$drinks->nome}}</h2>
<p>Marca: {{$drinks->marca}}</p>
<p>Prezzo: {{$drinks->prezzo}}</p>
<p>Scadenza: {{$drinks->scadenza}}</p> --}}
