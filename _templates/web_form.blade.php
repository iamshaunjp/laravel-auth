<form action="" method="">
  <h2>Create a New Ninja</h2>

  <!-- ninja Name -->
  <label for="name">Ninja Name:</label>
  <input 
    type="text" 
    id="name" 
    name="name" 
    required
  >

  <!-- ninja Strength -->
  <label for="skill">Ninja Skill (0-100):</label>
  <input 
    type="number" 
    id="skill" 
    name="skill" 
    required
  >

  <!-- ninja Bio -->
  <label for="bio">Biography:</label>
  <textarea
    rows="5"
    id="bio" 
    name="bio" 
    required
  ></textarea>

  <!-- select a dojo -->
  <label for="dojo_id">Dojo:</label>
  <select id="dojo_id" name="dojo_id" required>
    <option value="" disabled selected>Select a dojo</option>
    
  </select>

  <button type="submit" class="btn mt-4">Create Ninja</button>

  <!-- validation errors -->
  
</form>