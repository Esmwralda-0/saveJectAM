<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <h1>Sign up</h1>
        <form action="/signup" method="POST">
            @csrf
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
            @error('name')
              <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
            @error('email')
            <span>{{ $message }}</span>
          @enderror
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password">
            @error('password')
            <span>{{ $message }}</span>
          @enderror
        </div>
        <div>
            <label for="">Birthday</label>
            <input type="date" name="birthday">
            @error('birthday')
            <span>{{ $message }}</span>
          @enderror
        </div>
        <div>
            <button type="submit">Create account</button>
        </div>
        </form>


</div>
