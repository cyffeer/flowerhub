<x-layout>
<form action="{{route('flowers.store')}}" method="POST">
  @csrf
  <h2>Create a New Flower User</h2>

  
  <label for="name">Flower User Name:</label>
  <input 
    type="text" 
    id="name" 
    name="name" 
    value="{{ old('name') }}" 
    required
  >

  
  <label for="skill">Flower User Age:</label>
  <input 
    type="number" 
    id="age" 
    name="age" 
    value="{{ old('age') }}"
    required
  >

  
  <label for="bio">Biography:</label>
  <textarea
    rows="5"
    id="bio" 
    name="bio" 
    required
  >{{ old('bio') }}</textarea>

 
  <label for="order_id">Order:</label>
  <select id="order_id" name="order_id" required>
    <option value="" disabled selected>Select a Flower Order</option>
    @foreach($orders as $order)
      <option value="{{ $order->id }}" {{ old('order_id') == $order->id ? 'selected' : '' }}>{{ $order->name }}</option>
    @endforeach
  </select>

  <button type="submit" class="btn mt-4">Create Flower User</button>

  @if ($errors->any())
    <div class="error-message">
      <ul class="px-4 py-2 bg-red-500">
        @foreach ($errors->all() as $error)
          <li class="text-white">{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  
</form>
</x-layout>