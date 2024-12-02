<x-layout>
<h2>Currently Flowers Users</h2>



    <ul>
        @foreach($flowers as $flower)
            <li>
              <x-card href="{{ route('flowers.show', $flower->id) }}" :highlight="$flower['age'] > 60">
                <div>
                    <h3>{{ $flower->name}}</h3>
                    <p>{{ $flower->order->name }}</p>
                </div>
              </x-card>
            </li>
        @endforeach
    </ul>
    {{ $flowers->links() }}
</x-layout>