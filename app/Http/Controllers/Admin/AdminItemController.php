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

    /**
     * [showListItems description]
     * affiche la vue de la liste des items
     * @return [type] [description]
     */
    public function showListItems()
    {
      $items = Item::all();


      return view('admin/list-items', compact('items'));
    }

    /**
     * [showNewItem description]
     * affiche la vue du formulaire d'ajout d'item
     * @return [type] [description]
     */
    public function showNewItem()
    {

      return view('admin/new-item');
    }

    /**
     * [actionNewItem description]
     * validation du formulaire d'ajout
     * @param  AdminItemRequest $request [description]
     * @return [type]                    [description]
     */
    public function actionNewItem(AdminItemRequest $request)
    {
      // dd($request);
      Item::create($request->all());//ne fonctionne que si on modifie le nom du champ concerné

      // $post = $request->all();
      // dd($post);
      //
      // \DB::table('items')->insert([
      //     // 'name'        => $post['name'],
      //     'comment'     => $post['comment'],
      //     'created_at'  => Carbon::now(),
      // ]);
      return redirect()->route('dashboard')->with('success', 'Nouvel item créé');

    }

    /**
     * [showEditItem description]
     * affiche la vue pour modifier un item
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function showEditItem($id)
    {

      $item = Item::FindOrFail($id);

      return view('admin/edit-item', compact('item'));
    }

    /**
     * [actionEditItem description]
     *  validation du formulaire de modification
     * @param  AdminItemRequest $request [description]
     * @param  [type]           $id      [description]
     * @return [type]                    [description]
     */
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

    /**
     * [deleteItem description]
     * effacement d'un item
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function deleteItem($id)
    {
      $item = Item::FindOrFail($id);
        // \DB::table('items')->where('id', $id)->delete();
      $item->delete();

      return redirect()->route('dashboard')->with('success', 'Item supprimé');
    }

}
