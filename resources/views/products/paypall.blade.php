<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<title></title>



	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">





	<script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_SANDBOX_CLIENT_ID')}}"></script>



</head>

<body>





	<a class="btn btn-primary" href="{{route('processPaypal')}}">Pay 100$</a>


</body>

</html>

