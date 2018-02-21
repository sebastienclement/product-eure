{!!Form::open(['route' => 'add-item','method' => 'post', 'id' => 'item-submit']) !!}

  <div class="form-group">
    {!! Form::label('comment', 'Votre produit : ', ['class' => '']) !!}
    {!! Form::textarea('comment', null, ['placeholder' => 'votre produit', 'class' => 'form-control']) !!}
    {!! $errors->first('comment', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

{{Form::submit('Envoyer', array('class' => ''))}}
{{Form::close()}}
