<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use Illuminate\Support\Facades\Log;

class TodoListController extends Controller
{
    public function index () {
        return view('welcome', ['listItems' => ListItem::all()]);
    }

    public function saveItem (Request $request) {

        #Creating new item
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;

        $newListItem->save();

        return redirect('/');
    }

    public function markComplete ($id) {

        #changing is_complete flag to 1
        $listItem = ListItem::find($id);
        $listItem->is_complete = 1;
        $listItem->save();

        return redirect('/');
    }
}
