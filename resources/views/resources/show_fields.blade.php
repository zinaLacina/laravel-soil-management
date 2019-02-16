<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $resource->id !!}</p>
</div>

<!-- Resourcename Field -->
<div class="form-group">
    {!! Form::label('resourceName', 'Resourcename:') !!}
    <p>{!! $resource->resourceName !!}</p>
</div>

<!-- Resourcedescription Field -->
<div class="form-group">
    {!! Form::label('resourceDescription', 'Resourcedescription:') !!}
    <p>{!! $resource->resourceDescription !!}</p>
</div>

<!-- Resourceimage Field -->
<div class="form-group">
    {!! Form::label('resourceImage', 'Resourceimage:') !!}
    <p>{!! $resource->resourceImage !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $resource->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $resource->updated_at !!}</p>
</div>

