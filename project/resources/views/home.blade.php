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
          <form action="" class="row">
            <div class="form-group col-12 col-md-6">
              <label for="exampleInputEmail1">From</label>
              <input type="text" class="form-control" id="dateFrom" placeholder="dd.mm.yyyy" autocomplete="off">
            </div>
            <div class="form-group col-12 col-md-6">
              <label for="exampleInputEmail1">To</label>
              <input type="text" class="form-control" id="dateTo" placeholder="dd.mm.yyyy" autocomplete="off">
            </div>
            <div class="col-6">
              <button class="btn btn-warning text-white" role="button">FLUSH</button>
            </div>
            <div class="col-6">
              <button class="btn btn-secondary" role="button">IMPORT</button>
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
              <tr>
                <th scope="row">1</th>
                <td>1</td>
                <td class="bg-success text-white">Imported</td class="bg-success text-white">
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>2</td>
                <td class="bg-success text-white">Imported</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>3</td>
                <td>Waiting</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>4</td>
                <td>Waiting</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>5</td>
                <td>Waiting</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>1</td>
                <td>Waiting</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>2</td>
                <td>Waiting</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>3</td>
                <td>Waiting</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>