@extends('layouts.app')
@section('content')
  <div class="container mx-auto py-3">
    <div class="flex flex-col border shadow-sm rounded-md p-10">
      <div class="flex justify-between items-center mb-5 border-b-4 pb-2">
        <h1 class="bg-teal-500 p-3 capitalize text-white font-bold">Buat Pemesanan Tiket Baru</h1>
        <a href="{{ route('ticket-bookings.index') }}" class="capitalize">Kembali</a>
      </div>
      <form action="{{ route('ticket-bookings.store') }}" method="POST" class="flex flex-col items-start">
        @csrf

        <div class="flex w-full my-3">
          <label for="customer_name" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Nama Pelanggan</label>
          <div class="flex flex-col w-full">
            <input type="text" id="customer_name" name="customer_name" class="border py-2 px-1" placeholder="Masukkan Nama Pelanggan" value="{{ old('customer_name') }}" required>
            @error('customer_name')
              <x-invalid :message="$message" />
            @enderror
          </div>
        </div>

        <div class="flex w-full my-3">
          <label for="schedule_id" class="w-96"> <span class="text-red-500"><sup>*</sup></span> ID Jadwal</label>
          <div class="flex flex-col w-full">
            <input type="text" id="schedule_id" name="schedule_id" class="border py-2 px-1" placeholder="Masukkan ID Jadwal" value="{{ old('schedule_id') }}" required>
            @error('schedule_id')
              <x-invalid :message="$message" />
            @enderror
          </div>
        </div>

        <div class="flex w-full my-3">
          <label for="seat_number" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Nomor Kursi</label>
          <div class="flex flex-col w-full">
            <input type="text" id="seat_number" name="seat_number" class="border py-2 px-1" placeholder="Masukkan Nomor Kursi" value="{{ old('seat_number') }}" required>
            @error('seat_number')
              <x-invalid :message="$message" />
            @enderror
          </div>
        </div>

        <div class="flex w-full my-3">
          <label for="booking_date" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Tanggal Pemesanan</label>
          <div class="flex flex-col w-full">
            <input type="date" id="booking_date" name="booking_date" class="border py-2 px-1" value="{{ old('booking_date') }}" required>
            @error('booking_date')
              <x-invalid :message="$message" />
            @enderror
          </div>
        </div>

        <div class="flex w-full justify-end">
          <button type="submit" class="bg-gray-800 text-white px-2 py-3 w-40 transition-all hover:bg-gray-900 font-semibold rounded-sm">Pesan</button>
        </div>

      </form>
    </div>
  </div>
@endsection