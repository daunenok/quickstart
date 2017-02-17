@extends('layouts.app')
@section('content')
<div class="container" style="width:400px; margin:30px auto;font-family: 'Sahitya',sans-serif;font-weight:bold;font-size:16px;">

	<div class="panel panel-default">
		<div class="panel-heading"><h3 style="margin:0;">New Task</h3></div>
		<div class="panel-body">
			<form action="" method="POST">
				{!! csrf_field() !!}
				<div class="form-group">
					<label for="task-name">Task</label>
					<input type="text" class="form-control" id="task-name" name="name">
				</div>
				<button type="submit" class="btn btn-default">+ Add Task</button>
			</form>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading"><h3 style="margin:0;">Current Tasks</h3></div>
		<div class="panel-body">
            <table class="table table-striped task-table">       
				<thead>
					<th><h4>Task</h4></th>
					<th>&nbsp;</th>
				</thead>
				<tbody>
					@foreach ($tasks as $task)
					<tr>
					<td class="table-text">{{ $task->name }}</td>
					<td>
						<form action="{{url('task/'.$task->id)}}" method="POST">
							{!! csrf_field() !!}
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</td>
					</tr>
					@endforeach
				</tbody>
			</table>   
		</div>
	</div>

</div>
@endsection