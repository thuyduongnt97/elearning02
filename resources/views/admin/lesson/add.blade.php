@extends('admin.index')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="breadcrumb-item-holder">
            <h1 class="main-title float-left">
            @if (isset($lesson_id))
            {!! __('text.edit') !!}
            @else 
            {!! __('text.add_lesson') !!}
            @endif
            </h1>
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
            @if (isset($lesson_id))
                {!! Form::open(['route' => ['edit_lesson', $lesson_id->id], 'method' => 'post', 'files' => true]) !!}
                    <div class="col-md-6 float-left">
                        <div class="form-group">
                            {!! Form::label(null, __('text.title'), ['class' => ['col-md-4', 'col-form-label', 'font-weight-bold']]) !!}
                            {!! Form::text('title', $lesson_id->title, ['class' => 'form-control', 'data-parsley-trigger' => 'change', 'required' => 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(null, __('text.subject'), ['class' => ['col-md-4', 'col-form-label', 'font-weight-bold']]) !!}
                            {!! Form::select('subject', $subject, $lesson_id->subject_id, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(null, __('text.content'), ['class' => ['col-md-4', 'col-form-label', 'font-weight-bold']]) !!}
                            {!! Form::textarea('content', $lesson_id->content, ['class' => 'form-control', 'data-parsley-trigger' => 'change']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(null, __('text.file'), ['class' => ['col-md-4', 'col-form-label', 'font-weight-bold']]) !!}
                            {!! Form::file('file') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit(__('text.edit'), ['class' => 'btn btn-info float-right']) !!}
                        </div>
                    </div>
                    <div class="col-md-6 float-right">
                        <iframe src="{{ asset(config('app.lesson_path') . $lesson_id->file) }}" class="pdf" frameborder="0"></iframe>
                    </div>
                {!! Form::close() !!}
            @else
                {!! Form::open(['route' => 'add_lesson', 'method' => 'post', 'files' => true]) !!}
                    <div class="row">
                    	<div class="form-group col-md-6">
                            {!! Form::label(null, __('text.title'), ['class' => ['col-md-4', 'col-form-label', 'font-weight-bold']]) !!}
                            {!! Form::text('title', '', ['class' => 'form-control', 'data-parsley-trigger' => 'change', 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::label(null, __('text.subject'), ['class' => ['col-md-4', 'col-form-label', 'font-weight-bold']]) !!}
                            {!! Form::select('subject', $subject, '', ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::label(null, __('text.content'), ['class' => ['col-md-4', 'col-form-label', 'font-weight-bold']]) !!}
                            {!! Form::textarea('content', '', ['class' => 'form-control', 'data-parsley-trigger' => 'change']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::label(null, __('text.file'), ['class' => ['col-md-4', 'col-form-label', 'font-weight-bold']]) !!}
                            {!! Form::file('file') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::submit(__('text.add'), ['class' => 'btn btn-info float-right']) !!}
                        </div>
                    </div>
                {!! Form::close() !!} 
            @endif
        </div><!--end card-body-->
    </div> <!--end contents-->
</div><!--end row-->
@endsection
