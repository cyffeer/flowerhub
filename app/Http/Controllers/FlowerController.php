<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    public function index() {
        
        $flowers = Flower::with('order')->orderBy('created_at', 'desc')->paginate(5);
        return view('flowers.index', ['flowers' => $flowers]);
      }
  
      public function show(Flower $flower) {
        $flower->load('order');
        return view('flowers.show', ["flower" => $flower]);
      }
  
      public function create() {
        $orders = Order::all();

        return view('flowers.create', ['orders' => $orders]);
      }
  
      public function store(Request $request) {
        $validated = $request->validate([
          'name' => 'required|string|max:255',
          'age' => 'required|integer|min:0|max:100',
          'bio' => 'required|string',
          'order_id' => 'required|exists:orders,id'
        ]);

        Flower::create($validated);

        return redirect()->route('flowers.index')->with('success', 'Flower User created successfully');
      }
  
      public function destroy(Flower $flower) {
        $flower->delete();

        return redirect()->route('flowers.index')->with('success', 'Flower User deleted successfully');
      }
  
}
