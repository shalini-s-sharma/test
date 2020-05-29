
@foreach($projects as $value)
<tr id="row-{{ $value->id }}">
    <td class="py-1">{{ $value->id }}</td>
    <td>{{ $value->name }}</td>
    <td>
    {{ $value->description }}
    </td>
    <td></td>
    <td>
        <button type="button" class="btn btn-icons btn-rounded btn-light edit-project" data-toggle="modal" data-target="#myModal">
        <i class="fa fa-edit"></i>
        </button>
        <button type="button" class="btn btn-icons btn-rounded btn-light delete-project">
        <i class="fa fa-times"></i>
        </button>
    </td>
</tr>
@endforeach
             
        