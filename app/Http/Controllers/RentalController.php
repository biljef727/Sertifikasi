<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\History;


class RentalController extends Controller
{
    //fetch data from Collection Model
    public function rental(){
        $data = Collection::all();
        return view('rental',compact('data'));
    }
    //insert pada tabel history apabila ada buku yang dipinjam dan mengubah status menjadi unavailable
    public function insert(Request $request)
    {
        $id = $request->input('book');
        $name = $request->input('Name');

        $book = Collection::find($id);

        if($book->Status === 'Available') {

            $book->update([
                'Status' => 'Unavailable'
            ]);

            $book->histories()->create([
                'bookTitle' => $book->Title,
                'Name' => $name,
                'BorrowedTime' => now(),
                'ReturnedTime' => now()->addWeek()
            ]);

            return redirect(url('rental'));
        }
    }
}