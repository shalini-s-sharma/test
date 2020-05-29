
<div class="card">
    <div class="card-body">
    <h4 class="card-title">Invoice</h4>
    <p class="card-description"> 
    <a href="{{ route('new_invoice',$data['company_id']) }}">Create new invoice</a>
    <button type="button" class="btn btn-primary toolbar-item" >Create New Invoice</button> 
    </p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th> # </th>
            <th> Invoice id </th>
            <th> Created at </th>
            <th> Action </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td> 1 </td>
            <td> Herman Beck </td>
            <td>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </td>
            <td> $ 77.99 </td>
        </tr>
        </tbody>
    </table>
    </div>
</div>
        