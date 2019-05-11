<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Update Name</h2><br  />
        <form method="post" action="{{action('EmployeeController@update', $id)}}">
        @csrf
        @method('PATCH')
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="fullname" value="{{$employee->name}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">username:</label>
            <input type="text" class="form-control" name="username" value="{{$employee->user_name}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">email:</label>
            <input type="text" class="form-control" name="email" value="{{$employee->email}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">password:</label>
            <input type="text" class="form-control" name="password" value="{{$employee->password}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">Adreess</label>
            <input type="text" class="form-control" name="Address" value="{{$employee->alamat}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-12" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>