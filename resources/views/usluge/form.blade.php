<form class="row m-3">
    <div class="form-group">
        <label for="type">Tip:</label>
        {!! Form::text('tip', null, array('placeholder' =>
        'Unesi tip','class' => 'form-control')) !!}</div>
    <div class="form-group">
        <label for="price">Cena:</label>
        {!! Form::number('cena', null, array('placeholder' =>
        'Unesi cenu','class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <label for="length">Trajanje (u minutima):</label>
        {!! Form::number('trajanje', null, array('placeholder' =>
        'Unesi trajanje','class' => 'form-control')) !!} </div>
    <button type="submit" class="btn btn-primary">Potvrdi</button>
</form>
