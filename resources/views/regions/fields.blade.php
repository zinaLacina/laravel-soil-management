<!-- Regionname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regionName', 'Regionname:') !!}
    {!! Form::text('regionName', null, ['class' => 'form-control']) !!}
</div>

<!-- Regioncode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regionCode', 'Regioncode:') !!}
    {!! Form::text('regionCode', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('regions.index') !!}" class="btn btn-default">Cancel</a>
</div>
