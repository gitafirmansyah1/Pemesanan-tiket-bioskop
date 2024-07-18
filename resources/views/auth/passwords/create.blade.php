<h1>Create New User</h1>

<form method="POST" action="{{ route('user.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <label for="role_id">Role ID:</label>
    <input type="number" id="role_id" name="role_id"><br><br>
    <input type="submit" value="Create">
</form>