@extends('layouts.master')
@section('content')
<div class="row">
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Company</h4>
        </div>
      </div>
      <div class="col-md-12">
        <div class="page-header-toolbar">
          <div class="filter-wrapper">
            <div class="dropdown toolbar-item">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
              <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                <a class="dropdown-item" href="#">Last Day</a>
                <a class="dropdown-item" href="#">Last Month</a>
                <a class="dropdown-item" href="#">Last Year</a>
              </div>
            </div>
            <a href="#" class="advanced-link toolbar-item">Advanced Options</a>
          </div>
          <div class="sort-wrapper">
            <button type="button" class="btn btn-primary toolbar-item" data-toggle="modal" data-target="#myModal">New Project</button>
            <div class="dropdown ml-lg-auto ml-3 toolbar-item">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
              <div class="dropdown-menu" aria-labelledby="dropdownexport" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
                <a class="dropdown-item" href="#">Export as PDF</a>
                <a class="dropdown-item" href="#">Export as DOCX</a>
                <a class="dropdown-item" href="#">Export as CDR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active mt-3" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
            <div class="row" id="grid_data">
            <div class="col-12 grid-margin">
                <div class="row">
                @foreach($company as $value)
                <div class="col-md-4 grid-margin stretch-card company" data-id="{{ $value->id }}">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $value->name }}</h4>
                        <div class="media">
                        <i class="mdi mdi-server icon-md text-info d-flex align-self-start mr-3"></i>
                        <div class="media-body">
                            <p class="card-text"></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title" id="model-title">Add project</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form class="forms-sample" id="projectForm" onsubmit="return false;">
      <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Company Name</label>
              <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Project Description</label>
              <textarea class="form-control" id="project_desc" name="project_desc" rows="5"></textarea>
              <input type="hidden" class="form-control" name="project_id" id="project_id" value="">
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success mr-2">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>

  </div>
</div>
<script>
$(document).ready(function() {

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

  $('.company').click(function(){
      var id=$(this).data('id');
      console.log(id);
      var url = "{{ URL::asset('invoice/') }}"+'/'+id;
      customAjaxCall(url,'',function(output){
        changeMainBodyContent(output);
      },1);

  });


  $('#projectForm').submit(function(){
    var str = $(this).serialize();
    var url= "{{ route('project.create') }}";
    customAjaxCall(url,str,function(output){
      if(output.status_code == 200){
        $('#myModal').modal('hide');
        $(document.body).removeClass("modal-open");
        $('.modal-backdrop').remove(); 
        changeMainBodyContent(output,1);
      }
      sweet_alert(output.status_code,output.message); 
    },1);
  });

  $('.edit-project').click(function(){
      let row_id = $(this).closest('tr').attr('id');
      $('#myModal #model-title').html('Edit Project');
      var name = $(`#${row_id} td:nth-child(2)`).text();
      var description = $(`#${row_id} td:nth-child(3)`).text();
      var project_id = row_id.split('-');
      $('#project_name').val(name);
      $('#project_desc').text(description);
      $('#project_id').val(project_id[1]);
    });
  });

  $('.delete-project').click(function(){
    let row_id = $(this).closest('tr').attr('id');
    let project_id = row_id.split('-')[1];
    var data = { 'project_id':project_id };
    sweet_warning(function(){
      var url= "{{ route('project.delete') }}";
      customAjaxCall(url,data,function(output){
        $(`#${row_id}`).remove();
        sweet_alert(output.status_code,output.message); 
      });
    });

  });


  $('.layout').click(function(){
    let layout = $(this).data('layout');
    var data = {'layout' : layout };
    var url= "{{ route('project.view') }}";
    customAjaxCall(url,data,function(output){
      if(output.status_code == 200){
        $('#changelayout').html(output.html);
      }
    });
  });

</script>
@endsection