<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminItemRequest;
use Carbon\Carbon;
use App\Models\Item;
use Auth;

class AdminItemController extends Controller
{
    public function showListItems()
    {
      $items = Item::all();


      return view('admin/list-items', compact('items'));
    }

    public function showNewItem()
    {

      return view('admin/new-item');
    }

    public function actionNewItem(AdminItemRequest $request)
    {
      // Item::create($request->all());//ne fonctionne que si on modifie le nom du champ concerné

      $post = $request->all();

      \DB::table('items')->insert([
          // 'name'        => $post['name'],
          'comment'     => $post['comment'],
          'created_at'  => Carbon::now(),
      ]);
      return redirect()->route('dashboard')->with('success', 'Nouvel item créé');

    }

    public function showEditItem($id)
    {

      $item = Item::FindOrFail($id);

      return view('admin/edit-item', compact('item'));
    }

    public function actionEditItem(AdminItemRequest $request,$id)
    {
      $post = $request->all();

      \DB::table('items')->where('id', $id)->update([
          // 'name'       => $post['name'],
          'comment'     => $post['comment'],
          'updated_at'  => Carbon::now(),
      ]);
      return redirect()->route('dashboard')->with('success', 'Modification de l\'item prise en compte');
    }

    public function deleteItem($id)
    {
      $item = Item::FindOrFail($id);
        // \DB::table('items')->where('id', $id)->delete();
      $item->delete();

      return redirect()->route('dashboard')->with('success', 'Item supprimé');
    }

}
