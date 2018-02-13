<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Item;
use Auth;

class AdminItemController extends Controller
{
    public function showListItems()
    {
      $items = Item::with('category')->get();

      return view('admin/list-items', compact('items'));
    }

    public function showNewItem()
    {
      return view('admin/new-item');
    }

    public function actionNewItem(ItemRequest $request)
    {
      Item::create($request->all());
      return redirect()->route('dashboard')->with('success', 'Nouvel item créé');

    }

    public function showEditItem($id)
    {
      $item = Item::FindOrFail($id);
      return view('admin/edit-item', compact('item'));
    }

    public function actionEditItem(ItemRequest $request,$id)
    {
      $item = Item::FindOrFail($id);
      $item->update($request->all());
      return redirect()->route('dashboard')->with('success', 'Modification de l\'item prise en compte');
    }

    public function deleteItem($id)
    {
      $item = Item::FindOrFail($id);
      $item->delete();
      return redirect()->route('dashboard')->with('success', 'Item supprimé');
    }

}
