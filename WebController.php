<?php

namespace App\Http\Controllers;

use App\Mail\NewOrderMail;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Book;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class WebController extends Controller
{
    public function home()
    {
        $books = Book::orderBy("bookid", "desc")->get();
        
        return view("book", compact('books'));
    }
    
    public function searchByName(Request $request){
        $keyword = $request->get("keyword");
        $books = Book::where("title","LIKE","%$keyword%")
            ->orderBy("bookid","desc")->get();

       
        return view("book",compact("books"));

    }

}
