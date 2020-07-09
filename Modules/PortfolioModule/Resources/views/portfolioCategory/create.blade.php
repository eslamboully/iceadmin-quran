@extends('commonmodule::layouts.master')

@section('title')
  {{__('portfoliomodule::portfolio.pagecategtitle')}}
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('portfoliomodule::portfolio.pagecategtitle')}} </h1>

</section>
@endsection

@section('content')
<section class="content">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{__('portfoliomodule::portfolio.pagecategtitle')}}</h3>
    </div>
    @if (count($errors) > 0)
      @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
      @endforeach
    @endif
    <!-- /.box-header -->
    <form class="form-horizontal" id="createform" action="{{url('admin-panel/portfolio/category')}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="box-body">

        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">

              @foreach($activeLang as $lang)
              <li @if($loop->first) class="active" @endif >
                <a href="#{{ $lang->display_lang }}" data-toggle="tab">{{ $lang->display_lang }}</a>
              </li>
              @endforeach

            </ul>

            <div class="tab-content">
              @foreach($activeLang as $lang)

              <div class="tab-pane @if($loop->first) active @endif" id="{{ $lang->display_lang }}">
                <div class="form-group">
                  {{-- title --}}
                  <label class="control-label col-sm-2" for="title">{{__('portfoliomodule::portfolio.title')}} ({{ $lang->display_lang }}):</label>
                  <div class="col-sm-8">
                    <input id="title_{{$lang->lang}}" type="text" autocomplete="off" class="form-control"
                      name="{{$lang->lang}}[title]" @if($loop->first) required @endif>
                  </div>
                </div>

                <div class="form-group">
                  {{-- Description --}}
                  <label class="control-label col-sm-2" for="title">{{__('portfoliomodule::portfolio.desc')}} ({{$lang->display_lang}}):</label>
                  <div class="col-sm-8">
                    <textarea id="editor{{$lang->id}}" name="{{$lang->lang}}[description]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
              </div>
              @endforeach


              </div>
<!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
          <div class="form-group">
              <label class="control-label col-sm-2" for="img">{{__('portfoliomodule::portfolio.cover_photo')}} :</label>
              <div class="col-sm-4">
                  <input type="file" autocomplete="off" name="cover_photo">
              </div>
          </div>

          
 <!-- seoooo -->

        
        <div class="form-group">
                    <div class="box-header">
                        <pre><h4>SEO Columns : </h4></pre>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            @foreach($activeLang as $lang)
                            <li @if($loop->first) class="active" @endif >
                                <a href="#seo{{ $lang->display_lang }}" data-toggle="tab">{{ $lang->display_lang }}</a>
                            </li>
                            @endforeach
                        </ul>

                        <div class="tab-content">

   @foreach($activeLang as $lang)

    <div class="tab-pane @if($loop->first) active @endif"
         id="seo{{ $lang->display_lang }}">

        <div class="form-group">
            {{-- Meta Title --}}
            <label class="control-label col-sm-2"
                   for="title"> @lang('servicemodule::service.mt')
                ({{ $lang->display_lang }}) :</label>
            <div class="col-sm-8">
                <input id="meta_title_{{ $lang->lang }}"
                       type="text" autocomplete="off"
                       class="form-control"
                       name="{{$lang->lang}}[meta_title]">
                <span id="titleSpan_{{ $lang->lang }}"></span>
            </div>

        </div>

        <div class="form-group">
            {{-- Meta Description --}}
            <label class="control-label col-sm-2"
                   for="desc">  @lang('servicemodule::service.md')
                ({{ $lang->display_lang }}) :</label>
            <div class="col-sm-8">
             <textarea id="meta_desc_{{$lang->lang}}" class="form-control"
                       autocomplete="off"
                      name="{{$lang->lang}}[meta_desc]" cols="15"
                       rows="2">
             </textarea>
                <span id="descSpan_{{$lang->lang}}"></span>
            </div>
        </div>

        <div class="form-group">
            {{-- Meta Keywords --}}
            <label class="control-label col-sm-2" for="tags"> Meta Keywords
              ({{ $lang->display_lang }})
                :</label>
            <div class="col-sm-8">
                <input id="countKeyWords{{$lang->lang}}" autocomplete="off" type="text"
                       class="form-control" name="{{$lang->lang}}[meta_keywords]">
                <span id="tagsSpan"></span>
            </div>
        </div>

          <!-- Slug -->
          <div class="form-group">
              <label class="control-label col-sm-2"
                    for="slug">Slug({{ $lang->display_lang }}) : </label>
              <div class="col-sm-8">
                  <input id="slug_{{$lang->lang}}" type="text" autocomplete="off" class="form-control"
                        name="{{$lang->lang}}[slug]">
              </div>
          </div>

      </div>
 @endforeach




      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{url('admin-panel/portfolio/category')}}" type="button" class="btn btn-default">{{__('portfoliomodule::portfolio.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
        <button type="submit" id="submit" class="btn btn-primary pull-right">{{__('portfoliomodule::portfolio.submit')}} &nbsp; <i class="fa fa-save"></i></button>
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
    CKEDITOR.replace('editor' + '{{$lang->id}}');
  });
</script>
@endforeach


<!-- jQuery form validator -->
<script src="{{asset('assets/admin/plugins/jquery_form_validator/jquery.form-validator.min.js')}}"></script>
<script>
    $.validate({
        form : '#createform',
        onError : function($form) {
            alert('Error, Make sure of your Data, Validation failed!');

            return false;
        },

  });
</script>
@include('commonmodule::includes.slug');

@endsection
