<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Date Solutions</title>
</head>
<body>

	<div>
	 Atik vai important line :	date("d-M-Y h:i:s a", strtotime($item->created_at));
	 Today     :	{{ $today = date("d-M-Y h:i:s a") }}
	 Yesterday :	{{ $yesterday = date("Y-m-d", strtotime( '-1 days' ) ) }}

	 any date : 'orders' => Order::whereDate('created_at','=',date($request->date))->orderBy('id','desc')->get(),
	 
	</div>

</body>
</html>