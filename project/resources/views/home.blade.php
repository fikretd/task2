<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>TASK2</title>
  </head>
  <body class="bg-light">

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <form class="row" id="formNasa">
            <div class="form-group col-12 col-md-6">
              <label for="dateFrom">From</label>
              <input type="text" name="from" class="form-control" id="dateFrom" placeholder="dd.mm.yyyy" autocomplete="off">
            </div>
            <div class="form-group col-12 col-md-6">
              <label for="dateTo">To</label>
              <input type="text" name="to" class="form-control" id="dateTo" placeholder="dd.mm.yyyy" autocomplete="off">
            </div>
            <div class="col-6">
              <button class="btn btn-warning text-white" role="button" id="btnFlush">FLUSH</button>
            </div>
            <div class="col-6">
              <button class="btn btn-secondary" role="button" id="btnImport">IMPORT</button>
            </div>
          </form>
        </div>
        <div class="col-12 col-md-6 col-lg-8">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">From-To-ID</th>
                <th scope="col">Day</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
            @foreach($requests as $r)
              <tr>
                <th scope="row">{{$r->request_id}}</th>
                <td>{{$r->day}}</td>
                @if($r->status)
                <td class="bg-success text-white">Imported</td class="bg-success text-white">
                @else
                <td class="">Waiting</td class="bg-success text-white">
                @endif
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
      $(document).on('click', '#btnImport', function(){
        $.ajax({
          url: '/nasa',
          data: $('#formNasa').serialize(),
          method: 'get',
          dataType: 'json',
          success: function(r){
            console.log(r);
          },
          error: function(x, h){
            console.log(x, h);
          }
        });

        return false;
      });
      $(document).on('click', '#btnFlush', function(){
        $.ajax({
          url: '/nasa/flush',
          success: function(r){
            console.log(r);
          },
          error: function(x, h){
            console.log(x, h);
          }
        });

        return false;
      });
    });
    </script>
  </body>
</html>