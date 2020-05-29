<div class="col-12 grid-margin">
<div class="row">
@foreach($projects as $value)
<div class="col-md-4 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ $value->name }}</h4>
        <div class="media">
        <i class="mdi mdi-server icon-md text-info d-flex align-self-start mr-3"></i>
        <div class="media-body">
            <p class="card-text"> {{ $value->description }}.</p>
        </div>
        </div>
    </div>
    </div>
</div>
@endforeach
</div>
</div>