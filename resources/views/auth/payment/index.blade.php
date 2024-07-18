<!-- resources/views/payment/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Payment</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('{{ asset('img/imgg.jpg') }}');
    background-size: cover;
    background-position: center;
    height: 100vh; 
    width: 100vw;
  }


.container {
    max-width: 800px;
    margin: 40px auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card {
    margin-bottom: 20px;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: #f0f0f0;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.card-body {
    padding: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="number"], select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #3e8e41;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Payment</div>
                    <div class="card-body">
                        <form action="{{ route('payment.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                              <form action="{{ route('payment.store') }}" method="post">
                                <label for="amount">Amount:</label>
                                @if($latestBooking = $booking->last())
                                    <input type="number" id="amount" name="amount" class="form-control" value="{{ $latestBooking->total_price }}" required>
                                @else
                                    <input type="number" id="amount" name="amount" class="form-control" value="" required>
                                @endif                                <!--... (rest of the form remains the same) -->
                              </form>
                          </div>
                            <div class="form-group">
                                <label for="payment_method">Payment Method:</label>
                                <select id="payment_method" name="payment_method" class="form-control" required>
                                    <option value="credit_card">Credit Card</option>
                                    <option value="paypal">PayPal</option>
                                    <option value="bank_transfer">Bank Transfer</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Pay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>