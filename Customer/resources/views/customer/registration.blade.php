<h1>Registration</h1>
    <form method="post" action="">
        {{@csrf_field()}}
        
        Name: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror
        
        
        Password: <input type="text" name="password:" value="{{old('password:')}}" placeholder="Password:"><br>
        @error('password')
            {{$message}}<br>
        @enderror


        Email: <input type="text" name="email" placeholder="Enter your Email" value="{{old('email')}}"><br>
        @error('email')
            {{$message}}<br>
        @enderror

        Type: <input type="radio" id="admin" name="fav_language" value="{{old('admin')}}">
        <label for="admin">Admin</label>
        <input type="radio" id="user" name="fav_language" value="{{old('user')}}">
        <label for="user">User</label><br>
        @error('type')
            {{$message}}<br>
        @enderror

        <input type="submit" value="Registration">
    </form>
