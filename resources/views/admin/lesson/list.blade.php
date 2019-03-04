@extends('admin.index')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="breadcrumb-holder">
            <h1 class="main-title float-left">{{ __('text.list_lesson') }}</h1>
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item active"></li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 contents">
        <div class="card-body">
            <div class="form-group">
                <div class="form-group float-right">
                    <a href="{{ route('add_lesson') }}" class="btn btn-info pull-right">{{ __('text.add') }}</a>
                </div>
            </div>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover display">
                    <thead>
                        <tr>
                            <th>{{ __('text.serial') }}</th>
                            <th>{{ __('text.title') }}</th>
                            <th>{{ __('text.user') }}</th>
                            <th>{{ __('text.subject') }}</th>
                            <th>{{ __('text.edit') }}</th>
                            <th>{{ __('text.delete') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<input type="hidden" name="" value="{{ $i = 1 }}">
                    	@foreach($lesson as $ls) 
                        <tr>
                        	<td>{{ $i++ }}</td>
                            <td>{{ $ls->title }}</td>
	                        <td>{{ $ls->user }}</td>
	                        <td>{{ $ls->subject }}</td>
	                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('edit_lesson', ['id' => $ls->id]) }}">{{ __('text.edit') }}</a></td>
	                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{ route('delete_lesson', ['id' => $ls->id]) }}">{{ __('text.delete') }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
