@extends('layouts.app')
@section('content')

<style>
    /* Global Styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Header Styles */
    h1 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    /* Form Styles */
    form {
        width: 50%;
        margin: 40px auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"], input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
    }

    input[type="submit"] {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        background-color: #3498db;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }
</style>

<h1>Edit Movie</h1>

<form action="{{ route('movies.update', $movie->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Judul:</label>
    <input type="text" id="title" name="title" value="{{ $movie->title }}"><br><br>

    <label for="description">Deskripsi:</label>
    <input type="text" id="description" name="description" value="{{ $movie->description }}"><br><br>

    <label for="poster">Poster:</label>
    <input type="file" id="poster" name="poster"><br><br>

    <label for="time">Waktu:</label>
    <input type="time" id="time" name="time" value="{{ $movie->time }}"><br><br>
    <input type="submit" value="Update">
</form>

@endsection