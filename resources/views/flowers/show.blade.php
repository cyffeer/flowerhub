<x-layout>
    <div class="flower-details">
        <div class="detail-item">
            <span class="label"><strong>Name:</strong></span>
            <span class="value">{{ $flower->name }}</span>
        </div>
        
        <div class="detail-item">
            <span class="label"><strong>Age:</strong></span>
            <span class="value">{{ $flower->age }}</span>
        </div>
        
        <div class="detail-item">
            <span class="label"><strong>Description:</strong></span>
            <span class="value">{{ $flower->bio }}</span>
        </div>
    </div>
    <br>

    <div class="border-2 border-gray-300 rounded-md p-4">
        <h2>Order Details</h2>
        <p><strong>Name:</strong> {{ $flower->order->name }}</p>
        <p><strong>Description:</strong> {{ $flower->order->description }}</p>
        <p><strong>Location:</strong> {{ $flower->order->location }}</p>
        <p><strong>Quantity:</strong> {{ $flower->order->quantity }}</p>
    </div>
    <br>

    <form action="{{ route('flowers.destroy', $flower->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn my-4 btn-danger">Delete Flower User</button>
    </form>
</x-layout>
