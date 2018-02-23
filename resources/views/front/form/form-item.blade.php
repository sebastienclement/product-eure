{!!Form::open(['route' => 'add-item','method' => 'post', 'id' => 'item-submit']) !!}

  <div class="form-group">
    {{-- {!! Form::label('comment', 'Ajouter un produit : ', ['class' => '']) !!} --}}
    {!! Form::textarea('comment', null, ['placeholder' => 'Décrivez vos produits un par un ici...', 'rows' => 3, 'class' => 'form-control']) !!}
    {{-- {!! $errors->first('comment', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!} --}}
  </div>

{{Form::submit('Envoyer', array('class' => 'btn btn-success'))}}
{{Form::close()}}
