<x-layout>
    <div class="max-w-2xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-6">Edit Flower</h1>
        
        <form action="{{ route('flowers.update', $flower->id) }}" method="POST" class="space-y-4">     
            @csrf
            @method('PUT')
            
            <div class="space-y-2">
                <label for="name" class="block font-medium">Flower Name:</label>
                <input 
                    type="text" 
                    name="name" 
                    value="{{ old('name', $flower->name) }}"
                    class="w-full rounded-md border-gray-300 shadow-sm"
                    required
                >
            </div>

            <div class="space-y-2">
                <label for="age" class="block font-medium">Age:</label>
                <input 
                    type="number" 
                    name="age" 
                    value="{{ old('age', $flower->age) }}"
                    class="w-full rounded-md border-gray-300 shadow-sm"
                    required
                >
            </div>

            <div class="space-y-2">
                <label for="bio" class="block font-medium">Bio:</label>
                <textarea 
                    name="bio" 
                    rows="4"
                    class="w-full rounded-md border-gray-300 shadow-sm"
                    required
                >{{ old('bio', $flower->bio) }}</textarea>
            </div>

            <div class="space-y-2">
                <label for="order_id" class="block font-medium">Order:</label>
                <select 
                    name="order_id" 
                    class="w-full rounded-md border-gray-300 shadow-sm"
                    required
                >
                    @foreach($orders as $order)
                        <option value="{{ $order->id }}" {{ $flower->order_id == $order->id ? 'selected' : '' }}>
                            {{ $order->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end">
                <button 
                    type="submit"
                    class="bg-pink-500 text-white px-4 py-2 rounded-md hover:bg-gray-500"
                >
                    Update Flower
                </button>
            </div>
        </form>
    </div>
</x-layout> 