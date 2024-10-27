<form action="" method="">
  @csrf

  <h2>Sign Up for an Account</h2>

  <label for="email">Email:</label>
  <input 
    type="email"
    name="email"
    required
  >

  <label for="password">Password:</label>
  <input 
    type="password"
    name="password"
    required
  >

  <button type="submit" class="btn mt-4">Sign Up</button>

  <!-- validation errors -->
  
</form>