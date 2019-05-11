<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Input barang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/animate/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/animsition/css/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" media="all">
    <script src="main.js"></script>
   
</head>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form autocomplete="off" method="post" action="{{url('barang1s')}}" enctype="multipart/form-data class="login100-form validate-form">
					@csrf
					<span class="login100-form-title">
						Input Data
						</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="barang" placeholder="barang">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="number" name="harga" placeholder="harga">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="number" name="stock" placeholder="stock">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
                  Input Data
						</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Stock</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($barang1s as $barang1s)
    <tr>
    <td>{{$barang1s['id']}}</td>
      <td>{{$barang1s['name_barang']}}</td>
      <td>{{$barang1s['stock']}}</td>
      <td>{{$barang1s['harga']}}</td>        
      <td >
      <td align="right"><a href="{{action('testcontroller1@edit', $barang1s['id'])}}" class="btn btn-warning">Edit</a></td>
        </td>
        <td align="left">
        <form action="{{action('testcontroller1@destroy', $barang1s['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>    </tr>
  @endforeach 
  </tbody>
</table>
 
</body>
</html>