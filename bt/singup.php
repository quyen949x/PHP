<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>singup</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"><h1 class="text-center">ĐĂNG NHẬP</h1></div>

        <div class="col-md-6">
           <form class="needs-validation" novalidate>
			  <div class="form-row">
			    <div class="col-md-4 mb-3">
			      <label for="firstname">First name</label>
			      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" required>
			      <div class="valid-feedback">
			        Looks good!
			      </div>
			    </div>
			    <div class="col-md-4 mb-3">
			      <label for="lastname">Last name</label>
			      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" required>
			      <div class="valid-feedback">
			        Looks good!
			      </div>
			    </div>
			    <div class="col-md-4 mb-3">
			      <label for="user">Username</label>
			      <div class="input-group">
			        <div class="input-group-prepend">
			          <span class="input-group-text" id="inputGroupPrepend">@</span>
			        </div>
			        <input type="text" class="form-control" id="user" placeholder="Username" required>
			        <div class="invalid-feedback">
			          Please choose a username.
			        </div>
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
				  </div>
				  <div class="form-group">
				    <label for="repassword">Re-Password</label>
				    <input type="password" class="form-control" id="repassword" placeholder="Nhập lại Password">
				  </div>
			  <div class="form-row">
			    <div class="col-md-6 mb-3">
			      <label for="validationCustom03">City</label>
			      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
			      <div class="invalid-feedback">
			        Please provide a valid city.
			      </div>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom04">State</label>
			      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
			      <div class="invalid-feedback">
			        Please provide a valid state.
			      </div>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom05">Zip</label>
			      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
			      <div class="invalid-feedback">
			        Please provide a valid zip.
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
			      <label class="form-check-label" for="invalidCheck">
			        Agree to terms and conditions
			      </label>
			      <div class="invalid-feedback">
			        You must agree before submitting.
			      </div>
			    </div>
			  </div>
			  <button class="btn btn-primary" type="submit">Submit form</button>
			</form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>