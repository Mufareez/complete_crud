<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Two Column Layout</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">

   <form>
  <div class="row">
    <!-- Email Field -->
    <div class="mb-3 col-12 col-md-6">

      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Employee Name" name ="name">

    </div>

        <div class="mb-3 col-12 col-md-6">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
  </div>

  <!-- Checkbox -->
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <!-- Submit Button -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>



</body>
</html>
