
@extends('layouts.app')
@section('content')
 

<div class="container">
    <div class="header">
      <h1>Book Movie Ticket</h1>
    </div>

    <form method="POST" action="{{ route('bookings.store') }}">
      @csrf

      <label for="movie_title">Movie Title:</label>
      <select id="movie_title" name="movie_title" required>
        <option value="">Select a movie</option>
        @foreach($movies as $movie)
            <option value="{{ $movie->id }}">{{ $movie->title }}</option>
        @endforeach
      </select>

      <label for="showtime">Jadwal :</label>
      <select id="showtime" name="showtime" required>
        <option value="">Select time</option>
        @foreach($movies as $movie)
            <option value="{{ $movie->id }}">{{ $movie->time }}</option>
        @endforeach
      </select>

      <div class="form-group">
        <label for="seat_type">Pilih Bangku :</label>
        <select name="seat_type" id="1,2,3">
          <option value="">pilih bangku</option>
          <option value="Economy">Ekonomi</option>
          <option value="Premium">Premium</option>
          <option value="VIP">VIP</option>
        </select>
      </div>

      <div class="form-group">
        <label for="quantity">Jumlah Tiket :</label>
        <select name="quantity" id="quantity">
            <option value="">Pilih jumlah tiket</option>
            @for ($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}">{{ $i }} tiket</option>
            @endfor
        </select>
    </div>

      <!-- Other form fields... -->
      
      <button type="submit">Book Ticket</button>
    </form> 

    <footer>
      <p>&copy; STMIK Mardira Indonesia 2024 Class D Group One.</p>
    </footer>
  </div>


  <style>
    /* Global Styles */
    
    h1 {
      text-align: center;
      color: #FF0000; /* Red color */
    }
  
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
  
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
  
  
    h1 {
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #ffffff; /* Red color */
    }
  
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #666;
    }
  
    input, select {
      width: 100%;
      padding: 15px;
      margin-bottom: 20px;
      border: 1px solid #FF0000; /* Red border */
      border-radius: 5px;
      font-size: 16px;
      background-color: #FFFFFF; /* White background */
    }
  
    input:focus, select:focus {
      border-color: #FF0000; /* Red border */
      box-shadow: 0 0 10px rgba(255, 0, 0, 0.1);
    }
  
    button[type="submit"] {
      background-color: #FF0000; /* Red background */
      color: #FFFFFF; /* White text */
      padding: 15px 30px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
    }
  
    button[type="submit"]:hover {
      background-color: #FFC080; /* Light red background */
    }
  
    .alert {
      padding: 15px;
      background-color: #FFFFFF; /* White background */
      border: 1px solid #FF0000; /* Red border */
      border-radius: 5px;
      margin-bottom: 20px;
      font-size: 16px;
      font-weight: bold;
    }
  
    .alert-success {
      background-color: #C6F7D8; /* Light green background */
      border-color: #8BC34A; /* Green border */
      color: #3c763d;
    }
  
    /* Form Styles */
    form {
      max-width: 500px;
      margin: 40px auto;
      padding: 30px;
      background-color: #FFFFFF; /* White background */
      border: 1px solid #FF0000; /* Red border */
      box-shadow: 0 0 10px rgba(255, 0, 0, 0.1);
      border-radius: 10px;
    }
  
    form label {
      margin-bottom: 10px;
    }
  
    form input, form select {
      margin-bottom: 20px;
    }
  
    form button[type="submit"] {
      margin-top: 20px;
    }
  
    .header {
      background-color: #FF0000; /* Red background */
      color: #FFFFFF; /* White text */
      padding: 20px;
    }
    footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
    clear: both;
}

footer p {
    margin-bottom: 0;
}
  </style>
@endsection
