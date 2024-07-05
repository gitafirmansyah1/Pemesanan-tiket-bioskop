<br><br><br>
<h1>Creat New User</h1>

<style>
    h1{
        text-align: center
    }

    /* Add some basic styling to the form */
    form {
        max-width: 500px;
        margin: 40px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        height: 40px;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
    }

    select.form-control {
        width: 100%;
        height: 40px;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #3e8e41;
    }
</style>
{{-- @foreach($movies as $movie) --}}
<form method="POST" action="{{ route('movies.store') }}">
    @csrf
    <div class="form-group">
        <label for="title">Title :</label>
        <input type="text" id="title" name="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="description">Deskripsi :</label>
        <input type="text" id="description" name="description" class="form-control">
    </div>

    <div class="form-group">
        <label for="poster">Poster :</label>
        <input type="file" id="poster" name="poster" class="form-control">
    </div>

    <div class="form-group">
        <label for="time">Waktu tayang :</label>
        <input type="time" id="time" name="time" class="form-control">
    </div>

    <input type="submit" value="Create" class="btn btn-primary">
    {{-- @endforeach --}}
</form>