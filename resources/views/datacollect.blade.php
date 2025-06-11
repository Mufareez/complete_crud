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

    <div class="container-flued ms-5 me-5 mt-4 mb-4">

        @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops! Something went wrong.</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


   <form action="{{ url('/employee/store') }}" method="POST">
  <div class="row">
    @csrf

    <div class="mb-3 col-12 col-md-6">

      <input type="text" class="form-control"  aria-describedby="emailHelp" value="{{ old('name') }}"
       required placeholder="Employee Name" name ="name">

    </div>

        <div class="mb-3 col-12 col-md-6">

      <input type="text" class="form-control"  placeholder="Employee ID" name="eid" value="{{ old('eid') }}"
       required>

    </div>

     <div class="mb-3 col-12 col-md-6">

      <input type="date" class="form-control"  placeholder="Date of Birth" name="dob" value="{{ old('dob') }}"
       required>

    </div>


    <div class="mb-3 col-12 col-md-6">

 <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="Male" checked value="{{ old('gender') }}"
       required>
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="Female" value="{{ old('gender') }}"
       required>
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
    </div>
 <div class="mb-3 col-12 col-md-6">

      <input type="text" class="form-control"  placeholder="NIC" name="nic" value="{{ old('nic') }}"
       required>

    </div>
     <div class="mb-3 col-12 col-md-6">

      <div class="mb-3">

  <textarea class="form-control" type="text"  placeholder="Address" name="address" rows="3" value="{{ old('address') }}"
       required></textarea>
</div>

    </div>

    <div class="mb-3 col-12 col-md-6">

      <input type="text" class="form-control"  placeholder="Mobile Nmber" name="number" value="{{ old('number') }}"
       required>

    </div>

        <div class="mb-3 col-12 col-md-6">

      <input type="email" class="form-control"  name="email" placeholder="name@example.com" value="{{ old('email') }}"
       required>

    </div>
    <div class="mb-3 col-12 col-md-6">

      <input type="date" class="form-control"  placeholder="Date of Joining" name="doj" value="{{ old('doj') }}"
       required>

    </div>

    <div class="mb-3 col-12 col-md-6">

      <input type="text" class="form-control"  placeholder="Department" name="department" value="{{ old('department') }}"
       required>

    </div>

     <div class="mb-3 col-12 col-md-6">

      <input type="text" class="form-control"  placeholder="Role" name="role" value="{{ old('role') }}"
       required>

    </div>

    <div class="mb-3 col-12 col-md-6">

      <input type="text" class="form-control"  placeholder="Employment Type" name="type" value="{{ old('type') }}"
       required>

    </div>

     <div class="mb-3 col-12 col-md-6">

      <input type="text" class="form-control"  placeholder="Branch" name="branch" value="{{ old('branch') }}"
       required>

    </div>

    <div class="mb-3 col-12 col-md-6">

      <input type="text" class="form-control"  placeholder="Work Experience" name="experience" value="{{ old('experience') }}"
       required>

    </div>





  </div>



  <!-- Submit Button -->
  <button type="submit" class="btn btn-primary">Save</button>
</form>

    </div>



</body>
</html>
