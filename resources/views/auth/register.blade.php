<x-layout>
  <form action="" method="POST">
    @csrf

    <h2>Register for an Account</h2>

    <label for="name">Name:</label>
    <input 
      type="text"
      name="name"
      value="{{ old('name') }}"
      required
    >

    <label for="email">Email:</label>
    <input 
      type="email"
      name="email"
      value="{{ old('email') }}"
      required
    >

    <label for="password">Password:</label>
    <input 
      type="password"
      name="password"
      required
    >

    <label for="password_confirmation">Password:</label>
    <input 
      type="password"
      name="password_confirmation"
      required
    >

    <button type="submit" class="btn mt-4">Register</button>

    <!-- validation errors -->
    @if ($errors->any())
      <ul class="px-4 py-2 bg-red-100">
        @foreach ($errors->all() as $error)
          <li class="my-2 text-red-500">{{ $error }}</li>
        @endforeach
      </ul>
    @endif
    
  </form>
</x-layout>