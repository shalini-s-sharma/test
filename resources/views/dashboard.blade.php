@extends('layouts.master')
@section('content')
<style>
.task-board {
    background: linear-gradient(to top, #5768f3, #1c45ef);
    display: inline-block;
    padding: 0px;
    border-radius: 3px;
    width: 961px;
    white-space: nowrap;
    overflow-x: scroll;
    min-height: 500px;
}

.status-card {
    width: 250px;
    margin-right: 8px;
    background: #e2e4e6;
    border-radius: 3px;
    display: inline-block;
    vertical-align: top;
    font-size: 0.9em;
}

.status-card:last-child {
    margin-right: 0px;
}

.card-header {
    width: 100%;
    padding: 10px 10px 0px 10px;
    box-sizing: border-box;
    border-radius: 3px;
    display: block;
    font-weight: bold;
}

.card-header-text {
    display: block;
}

ul.sortable {
    padding-bottom: 10px;
}

ul.sortable li:last-child {
    margin-bottom: 0px;
}

ul {
    list-style: none;
    margin: 0;
    padding: 0px;
}

.text-row {
    padding: 8px 10px;
    margin: 10px;
    background: #fff;
    box-sizing: border-box;
    border-radius: 3px;
    border-bottom: 1px solid #ccc;
    cursor: pointer;
    font-size: 0.8em;
    white-space: normal;
    line-height: 20px;
}

.ui-sortable-placeholder {
    visibility: inherit !important;
    background: transparent;
    border: #666 2px dashed;
}
</style>
      
<div class="content-wrapper">
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="row task-board">
        <div class="card-body">
            <!-- <h4 class="card-title">Kanban board</h4> -->
            <p class="card-description"> </p>
            <div class="">
            <?php
            foreach ($statusResult as $statusRow) {
                    ?>
                    <div class="status-card">
                        <div class="card-header">
                            <span class="card-header-text">{{ $statusRow->status_name }}</span>
                        </div>
                        <ul class="sortable ui-sortable"
                            id="sort{{ $statusRow->id}}; ?>"
                            data-status-id="{{ $statusRow->id }}">
                            @if(! empty($taskResult))
                            @foreach ($taskResult as $taskRow)
                            @if($taskRow->status_id == $statusRow->id)
                            <li class="text-row ui-sortable-handle"
                                data-task-id="{{ $taskRow->id }}">{{ $taskRow->title }}</li>
              
                            @endif
                           
                            @endforeach
                            @endif
                        </ul>
                    </div>
                    <?php
                }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>   
</div>
<script>
	$(function() {
		var url = "{{ route('editcard') }}";
		$('ul[id^="sort"]').sortable(
				{
					connectWith : ".sortable",
					receive : function(e, ui) {
						var status_id = $(ui.item).parent(".sortable").data(
								"status-id");
						var task_id = $(ui.item).data("task-id");
						$.ajax({
							url : url + '?status_id=' + status_id + '&task_id='
									+ task_id,
							success : function(response) {
							}
						});
					}

				}).disableSelection();
	});
</script>
@endsection