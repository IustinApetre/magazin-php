<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCartItem;
use function Sodium\compare;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $id = $request->query('id');
        $event = Event::find($id); // presupunând că modelul tău este numit Event


        if ($event) {
            $shoppingCartItem = ShoppingCartItem::where('event_id', $event->id)->where('user_id', Auth::user()->id)->first();
            // Creează un nou item în coșul de cumpărături
            if ($shoppingCartItem) {
                $shoppingCartItem->quantity++;
                $shoppingCartItem->save();

            } else {
                ShoppingCartItem::create([
                    'user_id' => Auth::user()->id,
                    'event_id' => $event->id,
                    'quantity' => 1,
                ]);
            }


            return redirect('/cart');


        }


    }

    public function viewCart()
    {
        $shoppingCartItems = ShoppingCartItem::where('user_id', Auth::user()->id)->get();

         $total=0;
         foreach ($shoppingCartItems as $item)
         {
             $total+=$item->event->price*$item->quantity;
         }
        return view('ticket.cart', compact('shoppingCartItems', 'total'));
    }

  public function checkOut(Request $request)
  {
      // Obținem ID-ul utilizatorului autentificat
      $userID = Auth::id();

      // Găsim cheia coșului de cumpărături asociată utilizatorului și golim conținutul
      $request->session()->forget('shoppingCartItems_' . $userID);

      // Alternativ, putem actualiza conținutul direct cu un array gol
      $request->session()->put('shoppingCartItems_' . $userID, []);

      return redirect()->intended('/viewClientInterface');
  }


}
