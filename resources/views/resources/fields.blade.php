<!-- Resourcename Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resourceName', 'Resourcename:') !!}
    {!! Form::text('resourceName', null, ['class' => 'form-control']) !!}
</div>

<!-- Resourcedescription Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('resourceDescription', 'Resourcedescription:') !!}
    {!! Form::textarea('resourceDescription', null, ['class' => 'form-control']) !!}
</div>

<!-- Resourceimage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resourceImage', 'Resourceimage:') !!}
    {!! Form::file('resourceImage') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('resources.index') !!}" class="btn btn-default">Cancel</a>
</div>
