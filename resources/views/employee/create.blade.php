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
              <a href="{{route('employee.index')}}" class="btn btn-primary">Back</a>
            </div>
          </div>
          
          <form action="{{route('employee.store')}}" method = "post">
            @csrf
              <div class="card border-0 shadow-lg ">
                <div class="card-body">

                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name" class='form-control'>
                  </div>
                  
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email" class='form-control'>
                  </div>
                  <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="4" cols='30' placeholder ='Enter Your Address'></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="image" class="form-label"></label>
                    <input type="file" name="image">
                  </div>

                </div>
              </div>
              <button class='btn btn-primary mt-3'>Save Employee</button>
          </form>

     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>