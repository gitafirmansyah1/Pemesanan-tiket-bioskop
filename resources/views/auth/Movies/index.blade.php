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

    /* Table Styles */
    table {
        border-collapse: collapse;
        width: 90%;
        margin: 40px auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #f0f0f0;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    /* Button Styles */
    button[type="submit"] {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
    }

    button[type="submit"][value="Delete"] {
        background-color: #e74c3c;
    }

    button[type="submit"][value="Delete"]:hover {
        background-color: #c0392b;
    }

    button[type="submit"][value="Edit"] {
        background-color: #2ecc71;
    }

    button[type="submit"][value="Edit"]:hover {
        background-color: #1abc9c;
    }

    button[type="submit"][value="create"] {
        background-color: #3498db;
    }

    button[type="submit"][value="create"]:hover {
        background-color: #2980b9;
    }

    /* Link Styles */
    a {
        text-decoration: none;
        color: #fff;
    }

    a:hover {
        color: #fff;
        text-decoration: underline;
    }

    /* Responsive Design */
    @media only screen and (max-width: 768px) {
        table {
            width: 100%;
        }
    }
    </style>

<h1>Movies</h1>
<table>
    <thead>
        <tr>    
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Poster</th>
            <th>Waktu</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->description }}</td>
                <td>
                    @if($movie->poster)
                        <img src="{{ asset('storage/'. $movie->poster) }}" width="50" height="50">
                    @else
                        No poster
                    @endif
                </td>
                <td>{{ $movie->time }}</td>
                <td>
                    <button type="submit" value="Edit"><a href="{{ route('movies.edit', $movie->id) }}">Edit</a></button>
                    <br><br>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" value="Delete">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<button type="submit" value="create"><a href="{{ route('movies.create') }}">Tambahkan jadwal</a></button>
@endsection