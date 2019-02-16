<table class="table table-responsive" id="resources-table">
    <thead>
        <th>Resourcename</th>
        <th>Resourcedescription</th>
        <th>Resourceimage</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($resources as $resource)
        <tr>
            <td>{!! $resource->resourceName !!}</td>
            <td>{!! $resource->resourceDescription !!}</td>
            <td>{!! $resource->resourceImage !!}</td>
            <td>
                {!! Form::open(['route' => ['resources.destroy', $resource->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('resources.show', [$resource->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('resources.edit', [$resource->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>