<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple laravel 9 crud in hindi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
     <div class='bg-dark py-3'>
        <div class= 'container'>
            <div class='h3 text-white'>Simple laravel 9 crud in hindi</div>
        </div>
     </div>
     <div class="container">
          <div class="d-flex justify-content-between py-3">
            <div class="h4">Employees</div>
            <div>
              <a href="{{route('employee.create')}}" class="btn btn-primary">Create</a>
            </div>
          </div>

          <div class="card border-0 shadow-lg ">
            <div class="card-body">
              <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>

                <tr>
                   <td>1</td>
                   <td></td>
                   <td>Pavan</td>
                   <td>Pavan@email.com</td>
                   <td>Amrawad Kalan</td>
                   <td>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                   </td>
                </tr>
              </table>
            </div>
          </div>

     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>