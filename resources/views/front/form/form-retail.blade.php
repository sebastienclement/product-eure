{!!Form::open(['route' => 'add-retail','method' => 'post', 'id' => 'retail-submit']) !!}

<div class="form-group">
  {!! Form::label('lieu', 'Où trouver vos produits : ', ['class' => '']) !!}
  {!! Form::textarea('lieu', null, ['placeholder' => 'Marché de ...', 'class' => 'form-control']) !!}
  {!! $errors->first('lieu', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
</div>

{{Form::submit('Envoyer', array('class' => ''))}}
{{Form::close()}}
