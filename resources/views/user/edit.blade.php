<!-- resources/views/users/edit.blade.php -->

<h1>Edit User</h1>

<form method="POST" action="{{ route('user.update', $user->id) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control">
    </div>

    {{-- <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control">
    </div> --}}

    {{-- <div class="form-group">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
    </div> --}}

    <div class="form-group">
        <label for="role_id">Role ID:</label>
        <input type="number" id="role_id" name="role_id" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Update User</button>
</form> 