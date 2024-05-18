<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PDF View Page</title>
</head>
<body>



<div class="container">
   
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Country</th>
                <th>Created_at</th>   
            </tr>
        </thead>
        <tbody>
            @foreach($students as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->country}}</td>
                <td>{{get_formatted_date($row->created_at, "d-M-Y")}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('pdf.convert')}}" class="btn btn-success">Convert PDF</a>

</div>

   
</body>
</html> -->







<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Template </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>  	

 	<style>
	.invoice-box {
		max-width: 800px;
		margin: auto;
		padding: 30px;
		border: 1px solid #eee;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
		font-size: 16px;
		line-height: 24px;
		font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
		color: #555;
	}

	.invoice-box table {
		width: 100%;
		line-height: inherit;
		text-align: left;
	}

	.invoice-box table td {
		padding: 5px;
		vertical-align: top;
	}

	.invoice-box table tr td:nth-child(2) {
		text-align: right;
	}

	.invoice-box table tr.top table td {
		padding-bottom: 20px;
	}

	.invoice-box table tr.top table td.title {
		font-size: 45px;
		line-height: 45px;
		color: #333;
	}

	.invoice-box table tr.information table td {
		padding-bottom: 40px;
	}

	.invoice-box table tr.heading td {
		background: #eee;
		border-bottom: 1px solid #ddd;
		font-weight: bold;
	}

	.invoice-box table tr.details td {
		padding-bottom: 20px;
	}

	.invoice-box table tr.item td {
		border-bottom: 1px solid #eee;
	}

	.invoice-box table tr.item.last td {
		border-bottom: none;
	}

	.invoice-box table tr.total td:nth-child(2) {
		border-top: 2px solid #eee;
		font-weight: bold;
	}

	@media only screen and (max-width: 600px) {
		.invoice-box table tr.top table td {
			width: 100%;
			display: block;
			text-align: center;
		}

		.invoice-box table tr.information table td {
			width: 100%;
			display: block;
			text-align: center;
		}
	}

	/** RTL **/
	.invoice-box.rtl {
		direction: rtl;
		font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
	}

	.invoice-box.rtl table {
		text-align: right;
	}

	.invoice-box.rtl table tr td:nth-child(2) {
		text-align: left;
	}
	</style>

</head>
<body>
    
    <div class="text-center" style="padding:20px;">
        <input type="button" id="rep" value="Print" class="btn btn-info btn_print">
    </div>
    <div class="container_content" id="container_content" > 
        <div class="invoice-box" style="margin-bottom: 20px">
			<table cellpadding="0" cellspacing="0" >
				<tr class="top">
					<td colspan="2">
						<table>
                            <tr>
								<td class="title">
								</td>

								<td>
                                    Invoice(billnumber): NLDSOFT1123000308<br />
									Created(addeddate): 04 Nov 2023 12:15:22<br />
									Due: February 1, 2024
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									Sparksuite, Inc.<br />
									12345 Sunny Road<br />
									Sunnyville, CA 12345
								</td>

								<td>
									Acme Corp.<br />
									John Doe<br />
									john@example.com
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Item</td>

					<td>Price</td>
				</tr>

				<tr class="item">
					<td>Website design</td>

					<td>1000.00</td>
				</tr>

				<tr class="item">
                    <td>Hosting (3 months)</td>

					<td>1000.00</td>
				</tr>

				<tr class="item last">
					<td>Domain name (1 year)</td>

					<td>1000.00</td>
				</tr>
                
				<tr class="total">
					<td></td>

					<td style="display:flex; justify-content: space-between;"><span>transamount: </span>7689.00</td>
				</tr>
				<tr class="total">
					<td></td>

					<td style="display:flex; justify-content: space-between;"><span>discount: </span> 0.0</td>
				</tr>
				<tr class="total">
					<td></td>

					<td style="display:flex; justify-content: space-between;"><span>taxamount: </span>1384.02</td>
				</tr>
				<tr class="total">
					<td></td>

					<td style="display:flex; justify-content: space-between;"><span>finalamount: </span>9073</td>
				</tr>
			</table>
		</div>
    </div>  	
    
</body>
</html>