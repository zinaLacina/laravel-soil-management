<table class="table table-responsive" id="locations-table">
    <thead>
        <th>Region Id</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Locationstate</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($locations as $location)
        <tr>
            <td>{!! $location->region_id !!}</td>
            <td>{!! $location->latitude !!}</td>
            <td>{!! $location->longitude !!}</td>
            <td>{!! $location->locationState !!}</td>
            <td>
                {!! Form::open(['route' => ['locations.destroy', $location->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('locations.show', [$location->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('locations.edit', [$location->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>