<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NewItemRequest;
use Carbon\Carbon;
use App\Models\Item;
use App\Models\Category;//ajout
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
      $categories = Category::all();//ajout
      $select = [];
      $select[''] = 'tous';
      foreach($categories as $categorie){
        $select[$categorie->id] = $categorie->name;
    }
      return view('admin/new-item', compact('select','categories'));//ajout compact
    }

    public function actionNewItem(NewItemRequest $request)
    {
      // Item::create($request->all());//ne fonctionne que si on modifie le nom du champ concerné

      $post = $request->all();

      \DB::table('items')->insert([
          'name'        => $post['name'],
          'comment'     => $post['comment'],
          'category_id' => $post['categorie'],
          'created_at'  => Carbon::now(),
      ]);
      return redirect()->route('dashboard')->with('success', 'Nouvel item créé');

    }

    public function showEditItem($id)
    {
      $categories = Category::all();//ajout

      $select = [];
      $select[''] = 'tous';
      foreach($categories as $categorie){
        $select[$categorie->id] = $categorie->name;
      }
      $item = Item::FindOrFail($id);

      return view('admin/edit-item', compact('item','select'));
    }

    public function actionEditItem(NewItemRequest $request,$id)
    {
      $item = Item::FindOrFail($id);
      // $item->update($request->all());
      $post = $request->all();

      \DB::table('items')->where('id', $id)->update([
          'name'       => $post['name'],
          'comment'     => $post['comment'],
          'category_id' => $post['categorie'],
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
