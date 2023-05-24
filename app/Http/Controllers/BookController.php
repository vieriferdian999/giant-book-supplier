<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookDetail;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function getCategory(){
        $data = Category::all();

        // dd($data);

        return view('home',[
            'nama' => $data,
        ]);
    }

    public function viewCard(){
        $cards = Book::all();
        $data = Category::all();

        
        // dd($cards);
        return view('home', [
            'card' => $cards,
            'nav' => $data
        ]);
    }

    public function viewDetail($id){
        $books = Book::find($id);
        $publisher = Publisher::where('id','=', $books->publisher_id)->get();
        $pub_final = $publisher[0];
        $data = Category::all();

        // dd($pub_final);

        return view('bookdetail', [
            'book' => $books,
            'publisher' => $pub_final,
            'nav' => $data
        ]);
    }

    public function viewPublisher(){
        $card_p = Publisher::all();
        $data = Category::all();

        return view('publisher', [
            'nav' => $data,
            'publisher' => $card_p
        ]);
    }

    public function getDetailPublisher($id){
        $publisher = Publisher::find($id);
        $books = Book::where('publisher_id', '=', $publisher->id)->get();
        $data = Category::all();

        // dd($books);
        return view('publisherdetail', [
            'nav' => $data,
            'pub_card' => $publisher,
            'book_card' => $books,
        ]);
    }

    public function getIdCategory($id){
        // dd($id);
        $data = Category::all();


        $data_cat = DB::table('books')
        ->join('bookdetails', 'books.id' ,'=', 'bookdetails.book_id')
        ->where('bookdetails.cat_id', '=', $id)
        ->get();
        // dd($data_cat);

        return view('category', [
            'nav' => $data,
            'book_card' => $data_cat,
        ]);
    }

    public function viewContact(){
        $data = Category::all();

        return view('contact', [
            'nav' => $data
        ]);
    }
}
