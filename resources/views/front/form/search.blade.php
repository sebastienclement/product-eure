<h2>N'hésitez pas à consultez la <span><a href="{{ route('list-producer') }}">liste de tous nos producteurs</a></span>
<p>ou<br>Trouvez celui qui vous convient en fonction de votre envie.</p>
{!!Form::open(['route' => 'search-result','method' => 'get']) !!}
<div id="icon-flex">

    <input id="bovin"  value="1" type="radio" name="category" >
    <div class="icon">
        <label for="bovin" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/024-cow.svg')) !!}
        </label>
    </div>
    <input id="porc" type="radio"  value="2" name="category" >
    <div class="icon">
        <label for="porc" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/022-pig.svg')) !!}
        </label>
    </div>
    <input id="volaille" type="radio"  value="3" name="category" >
    <div class="icon">
        <label for="volaille" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/041-chicken.svg')) !!}
        </label>
    </div>
    <input id="Ovin" type="radio" value="4" name="category" >
        <div class="icon">
        <label for="Ovin"  class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/sheep.svg')) !!}
        </label>
    </div>
    <input id="Lait" type="radio" value="5" name="category" >
    <div class="icon">
        <label for="Lait"  class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/020-milk.svg')) !!}
        </label>
    </div>
    <input id="fruit" type="radio"  value="6" name="category" >
    <div class="icon">
        <label for="fruit" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/023-tomato.svg')) !!}
        </label>
    </div>
    <input id="legume" type="radio"  value="7" name="category" >
    <div class="icon">
        <label for="legume" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/013-vegetable.svg')) !!}
        </label>
    </div>
    <input id="plante" type="radio"  value="8" name="category" >
    <div class="icon">
        <label for="plante" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/030-tree.svg')) !!}
        </label>
    </div>
    <input id="miel" type="radio"  value="9" name="category" >
    <div class="icon">
        <label for="miel" class="btn btn-default m-r-mini">{!!     file_get_contents(asset('img/icons/010-bee.svg')) !!}
        </label>
    </div>
    <input id="prod" type="radio"  value="10" name="category" >
    <div class="icon">
        <label for="prod" class="btn btn-default m-r-mini">{!! file_get_contents(asset('img/icons/beer.svg')) !!}
        </label>
    </div>
</div>

<p>Un produit ? Un Producteur ? Dites le nous ici, et nous ferons de notre mieux pour le trouver.</p>
<div class="form-group">
  <i class="fa fa-search"></i>
  {!! Form::text('search', null, ['placeholder' => 'Votre recherche', 'class' => 'form-control']) !!}
  {!! $errors->first('search', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
</div>


{{Form::submit('Envoyer', array('class' => ''))}}
{{Form::close()}}
