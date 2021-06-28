<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product as ProductModel;
use Illuminate\Support\Facades\Auth;

class Cart extends Component
{

    public $tax = "0%";


    public function render()
    {
        $products = ProductModel::orderBy('created_at', 'DESC')->get();


        return view('livewire.cart')
        ->extends('layouts.app')
        ->section('content');
    }
}