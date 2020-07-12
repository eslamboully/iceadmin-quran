@extends('commonmodule::layouts.master')

@section('title')
 {{__('widgetsmodule::widgets.monialpagetitle')}}
@endsection

@section('content-header')
<section class="content-header">
  <h1> Your Shares </h1>

</section>
@endsection

@section('content')
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Your Shares</h3>
    </div>
    @if (count($errors) > 0)
      @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
      @endforeach
    @endif
    <!-- /.box-header -->
    <form class="form-horizontal" action="{{url('admin-panel/widgets/testimonials')}}/{{$monial->id}}" method="POST" enctype="multipart/form-data">
      {{method_field('PUT')}}
      {{ csrf_field() }}

      <div class="box-body">

        <div class="col-md-12">
          <div class="form-group">
            {{-- name --}}
            <label class="control-label col-sm-2" for="title">{{__('widgetsmodule::widgets.name')}} :</label>
            <div class="col-sm-8">
              <input type="text" autocomplete="off" class="form-control"
                name="name" value="{{$monial->name}}" required>
            </div>
          </div>

          <div class="form-group">
            {{-- Job Title --}}
            <label class="control-label col-sm-2" for="title">Title :</label>
            <div class="col-sm-8">
              <input type="text" autocomplete="off" class="form-control" name="job_title" value="{{$monial->job_title}}" required>
            </div>
          </div>

          <div class="form-group">
            {{-- Quote --}}
            <label class="control-label col-sm-2" for="title">{{__('widgetsmodule::widgets.quote')}} :</label>
            <div class="col-sm-8">
              <textarea id="editor1" name="quote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$monial->quote}}</textarea>
            </div>
          </div>

        </div>
        <br> {{-- Upload photo --}}
        <div class="form-group">
          <label class="control-label col-sm-2" for="img">{{__('widgetsmodule::widgets.photo')}} :</label>
          <div class="col-sm-8">
            <input type="file" autocomplete="off" name="photo">
            <br/>
            <img src="{{asset('public/images/testimonials/' . $monial->photo)}}" width="100" height="70">
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{url('admin-panel/widgets/testimonials')}}" type="button" class="btn btn-default">{{__('widgetsmodule::widgets.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
        <button type="submit" class="btn btn-primary pull-right">{{__('widgetsmodule::widgets.submit')}} &nbsp; <i class="fa fa-save"></i></button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</section>
@endsection

@section('javascript')
<!-- CK Editor -->
<script src="{{asset('assets/admin/bower_components/ckeditor/ckeditor.js')}}"></script>

@foreach ($activeLang as $lang)
<script>
  $(function () {
    CKEDITOR.replace('editor' + '{{ $lang->id }}');
  });

</script>
@endforeach

@endsection
