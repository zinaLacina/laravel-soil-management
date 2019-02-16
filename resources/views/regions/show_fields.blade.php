<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $region->id !!}</p>
</div>

<!-- Regionname Field -->
<div class="form-group">
    {!! Form::label('regionName', 'Regionname:') !!}
    <p>{!! $region->regionName !!}</p>
</div>

<!-- Regioncode Field -->
<div class="form-group">
    {!! Form::label('regionCode', 'Regioncode:') !!}
    <p>{!! $region->regionCode !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $region->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $region->updated_at !!}</p>
</div>

