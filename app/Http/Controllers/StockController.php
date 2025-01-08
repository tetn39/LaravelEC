<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\UserStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockController extends Controller
{
   public function index(){
        // 1ページ6個の在庫情報を取得
       $stocks = Stock::SimplePaginate(6);
       return view('stocks',compact('stocks'));
   }

    public function addMyCart(Request $request){
        $userId = Auth::id(); 
        $stockId = $request->input('stockId');

        $cartAddInfo = UserStock::firstOrCreate(['stockId' => $stockId,'userId' => $userId]);

        if($cartAddInfo->wasRecentlyCreated){
            $message = 'カートに追加しました';
        }
        else{
            $message = 'カートに登録済みです';
        }

        $myCartStocks = UserStock::where('userId',$userId)->get();

        return view('myCart',compact('myCartStocks' , 'message'));

    }
}