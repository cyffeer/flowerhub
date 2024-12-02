<form action="" method="">
  <h2>Create a New Flower User</h2>

  <!-- ninja Name -->
  <label for="name">FlowerUser Name:</label>
  <input 
    type="text" 
    id="name" 
    name="name" 
    value="{{ old('name') }}" 
    required
  >

  <!-- ninja Strength -->
  <label for="skill">FLower User Age:</label>
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
  <label for="dojo_id">Order:</label>
  <select id="dojo_id" name="dojo_id" required>
    <option value="" disabled selected>Select a Flower Order</option>
    
  </select>

  <button type="submit" class="btn mt-4">Create Flower User</button>

  <!-- validation errors -->
  
</form>