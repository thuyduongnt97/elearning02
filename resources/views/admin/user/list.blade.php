@extends('admin.index')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="breadcrumb-holder">
            <h1 class="main-title float-left">{{ __('text.list_user') }}</h1>
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
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover display">
                    <thead>
                        <tr>
                            <th>{{ __('text.serial') }}</th>
                            <th>{{ __('text.name') }}</th>
                            <th>{{ __('text.email') }}</th>
                            <th>{{ __('text.phone') }}</th>
                            <th>{{ __('text.edit') }}</th>
                            <th>{{ __('text.delete') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<input type="hidden" name="" value="{{ $i = 1 }}">
                    	@foreach($user as $us) 
                        <tr>
                        	<td>{{ $i++ }}</td>
                            <td>{{ $us->name }}</td>
	                        <td>{{ $us->email }}</td>
	                        <td>{{ $us->phone }}</td>
	                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('edit_user', ['id' => $us->id]) }}">{{ __('text.edit') }}</a></td>
	                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{ route('delete_user', ['id' => $us->id]) }}">{{ __('text.delete') }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
