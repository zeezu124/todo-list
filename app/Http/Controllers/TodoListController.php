<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;


class TodoListController extends Controller
{
    public function index () {
        return view('welcome', ['listItems' => ListItem::all()]);
    }

    public function saveItem (Request $request) {

        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();

        return redirect('/');
    }
}
