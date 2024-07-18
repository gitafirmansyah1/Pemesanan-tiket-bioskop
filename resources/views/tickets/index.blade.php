@extends('layouts.app')
@section('content')


@foreach($booking as $booking)
<div class="ticket-container">
  <div class="ticket-header">
      <h2>Ticket #{{ $booking->movie_title }}</h2>
      <p>Created at: {{ $booking->created_at }}</p>
  </div>
  <div class="ticket-body">
      <h3>Subject: {{ $booking->subject }}</h3>
      <p>Description: {{ $booking->description }}</p>
      <p>Status: <span class="badge {{ $booking->status === 'open' ? 'badge-success' : 'badge-danger' }}">{{ $booking->status }}</span></p>
      <p>Priority: <span class="badge {{ $booking->seat_type === 'high' ? 'badge-danger' : 'badge-warning' }}">{{ $booking->seat_type }}</span></p>
  </div>
  <div class="ticket-footer">
      <p>Assigned to: {{ $booking->showtime }}</p>
      <p>Due date: {{ $booking->due_date }}</p>
  </div>
</div>
@endforeach


@endsection

<style>
 
  .ticket-container {
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .ticket-header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      border-bottom: 1px solid #333;
  }

  .ticket-header h2 {
      margin-top: 0;
  }

  .ticket-body {
      padding: 20px;
  }

  .ticket-body h3 {
      margin-top: 0;
  }

  .badge {
      font-size: 12px;
      font-weight: bold;
      padding: 5px 10px;
      border-radius: 10px;
  }

  .badge-success {
      background-color: #5cb85c;
      color: #fff;
  }

  .badge-danger {
      background-color: #d9534f;
      color: #fff;
  }

  .badge-warning {
      background-color: #f0ad4e;
      color: #fff;
  }

  .ticket-footer {
      background-color: #f9f9f9;
      padding: 10px;
      border-top: 1px solid #ddd;
  }
</style>