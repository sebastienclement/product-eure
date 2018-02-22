


  <div class="form-group">
    {!! Form::label('image', 'Image de votre entreprise : ', ['class' => '']) !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('name', 'Nom de l\'entreprise : ', ['class' => 'requis']) !!}
    {!! Form::text('name', null, ['placeholder' => 'Nom de l\'entreprise', 'class' => 'form-control']) !!}
    {!! $errors->first('name', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('adresse', 'Votre adresse : ', ['class' => 'requis']) !!}
    {!! Form::text('adresse', null,['placeholder' => '1 rue de l\'espoir', 'class' => 'form-control']) !!}
    {!! $errors->first('adresse', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('zipcode', 'Code Postal : ', ['class' => 'requis']) !!}
    {!! Form::number('zipcode', null,['placeholder' => '27000', 'class' => 'form-control']) !!}
    {!! $errors->first('zipcode', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('ville', 'Ville : ', ['class' => 'requis']) !!}
    {!! Form::text('ville', null,['placeholder' => 'Bernay', 'class' => 'form-control']) !!}
    {!! $errors->first('ville', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('description', 'Votre présentation : ', ['class' => 'requis']) !!}
    {!! Form::textarea('description', null, ['placeholder' => 'Description de votre activité', 'class' => 'form-control']) !!}
    {!! $errors->first('description', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('producer_email', 'Votre e-mail de contact : ', ['class' => 'requis']) !!}
    {!! Form::email('producer_email', null, ['placeholder' => 'exemple@mail.com', 'class' => 'form-control']) !!}
    {!! $errors->first('producer_email', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('website', 'Site web : ', ['class' => '']) !!}
    {!! Form::text('website', null,['placeholder' => 'www.exemple.fr', 'class' => 'form-control']) !!}
    {!! $errors->first('website', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
    {!! Form::label('phone', 'Votre téléphone : ', ['class' => 'requis']) !!}
    {!! Form::number('phone', null,['placeholder' => '0123456789', 'class' => 'form-control']) !!}
    {!! $errors->first('phone', '<small class="help-block" style="color:MediumVioletRed;">:message</small>') !!}
  </div>

  <div class="form-group">
  {!! Form::label('category', 'Votre(vos) catégorie : ', ['class' => 'requis']) !!}
  {!! Form::select('category[]', $categories, null, ['multiple'=>'multiple','class' => 'form-control']) !!}
  </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}
