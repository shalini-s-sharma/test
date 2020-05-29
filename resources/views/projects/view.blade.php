@extends('layouts.master')
@section('content')
<div class="row">
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Projects</h4>
          <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
            <ul class="quick-links ml-auto">
              <li>
              <a class="nav-link nav-view <?= $activeView == 'grid' ? 'active': '' ?>" id="grid-view-tab" data-tab='grid' data-toggle="pill" href="#grid-view" role="tab" aria-controls="grid-view" aria-selected="true"><i class="mdi mdi-apps"></i></a>
              <li>
              <a class="nav-link nav-view <?= $activeView == 'list' ? 'active': '' ?>" id="list-view-tab" data-tab='list' data-toggle="pill" href="#list-view" role="tab" aria-controls="list-view" aria-selected="false"><i class="mdi mdi-format-list-bulleted"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="page-header-toolbar">
          <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
            <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
            <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
          </div>
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
              @include('projects.cardview')
            </div>
        </div>
        <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
          <div class="row">
          <div class="card">
            <div class="card-body">
            <table class="table table">
              <thead>
                <tr>
                  <th> S.no </th>
                  <th> Name </th>
                  <th> Description </th>
                  <th> Lead </th>
                  <th> Action</th>
                </tr>
              </thead>
              <tbody>
              @include('projects.tableview')
              </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
        {{ $projects->links()}}
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
              <label for="exampleInputEmail1">Project Name</label>
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