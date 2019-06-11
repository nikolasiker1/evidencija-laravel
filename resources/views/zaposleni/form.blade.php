<form class="row mx-auto">
    <div class="form-group">
        <label for="name">Ime:</label>
        {!! Form::text('ime', null, array('placeholder' =>
        'Unesi ime','class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <label for="lastname">Prezime:</label>
        {!! Form::text('prezime', null, array('placeholder' =>
        'Unesi prezime','class' => 'form-control')) !!} </div>

    <div class="form-group">
        <label for="email">Email:</label>
        {!! Form::email('email', null, array('placeholder' =>
        'Unesi email','class' => 'form-control')) !!} </div>

    <div class="form-group">
        <label for="phone">Broj telefona:</label>
        {!! Form::text('broj_telefona', null, array('placeholder' =>
        'Unesi broj telefona','class' => 'form-control')) !!} </div>
    <button type="submit" class="btn btn-primary">Potvrdi</button>
</form>
