<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Event;
use Livewire\Component;
use App\Models\Franchise;
use App\Models\Review;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class HomeComponent extends Component
{

    public function store($franchise_id,$franchise_brand_name,$franchise_max_investment)
    {
        Cart::instance('cart')->add($franchise_id,$franchise_brand_name,1,$franchise_max_investment)->associate('App\Models\Franchise');
        $this->emitTo('cart-component','refreshComponent');
        session()->flash('success_message','Item has been added in cart');
       
        return redirect()->route('checkout');
    }

    public function addtoWishlist($franchise_id,$franchise_brand_name,$franchise_max_investment)
    {
        Cart::instance('wishlist')->add($franchise_id,$franchise_brand_name,1,$franchise_max_investment)->associate('App\Models\Franchise');
        $this->emitTo('wishlist-component','refreshComponent');
        session()->flash('success_message','Item has been removed');
       
    }
    
    public function removefromWishlist($franchise_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem) 
        {
            if($witem->id == $franchise_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-component','refreshComponent');
                return;
            }
        }
    }

    public function render()
    {
        $evento = Event::where('eventype','expo')->get();
        $franchises = Franchise::where('status', 'active')->where('featured','high')->limit(4)->get();
        $premium = Franchise::where('status', 'active')->where('featured','premium')->limit(8)->get();
        $dealers = Franchise::where('status', 'active')->where('featured','low')->get();
        $new = Franchise::orderBy('created_at','DESC')->where('status', 'active')->limit(4)->get();
        $demand = Review::orderBy('id->count()','DESC')->limit(4)->get();
        $categories = Category::paginate(9);

        if(Auth::check())
        {     
               Cart::instance('wishlist')->store(Auth::user()->email);
               Cart::instance('wishlist')->restore(Auth::user()->email);
        }
        return view('livewire.home-component',['premium'=> $premium ,'evento'=> $evento ,'new'=> $new ,'dealers'=> $dealers ,'franchises'=> $franchises , '$categories' => $categories ])->layout('layouts.eblog');
    }
}
