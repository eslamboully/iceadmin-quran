@extends('commonmodule::layouts.master')
@section('title') {{__('tripmodule::trip.trips')}}
@endsection

@section('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{adminurl('bower_components/select2/dist/css/select2.min.css')}}"> {{-- Metro CSS --}}
    <link rel="stylesheet" href="{{adminurl('treeview.css')}}">
@endsection

@section('content-header')
    <section class="content-header">
        <h1> {{__('tripmodule::trip.trips')}} </h1>

    </section>
@endsection

@section('content')
    <section class="content">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{__('tripmodule::trip.trips')}}</h3>
            </div>
            @if (count($errors) > 0) @foreach ($errors->all() as $item)
                <p class="alert alert-danger">{{$item}}</p>
        @endforeach @endif
        <!-- /.box-header -->
            <form class="form-horizontal" action="{{url('/admin-panel/trip')}}/{{ $trip->slug }}" method="POST"
                  enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('PUT') }}

                <div class="box-body">

                    <div class="col-md-12">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                @foreach($activeLang as$lang)
                                    <li @if($loop->first) class="active" @endif >
                                        <a href="#{{ $lang->display_lang }}"
                                           data-toggle="tab">{{ $lang->display_lang }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach($activeLang as $key=>$lang)
                                    <div class="tab-pane @if($loop->first) active @endif"
                                         id="{{ $lang->display_lang }}">

                                        <div class="form-group">
                                            {{-- title --}}
                                            <label class="control-label col-sm-2"
                                                   for="title">{{__('tripmodule::trip.title')}} :</label>
                                            <div class="col-sm-8">
                                                <input id="title_{{$lang->lang}}" type="text" autocomplete="off" class="form-control"
                                                       name="{{ $lang->lang }}[title]" @if($loop->first) required
                                                       @endif value="{{ ValueOf($trip, $lang, 'title') }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{-- Description --}}
                                            <label class="control-label col-sm-2"
                                                   for="title">{{__('tripmodule::trip.desc')}}:</label>
                                            <div class="col-sm-8">
                                        <textarea id="desc{{ $lang->id }}" name="{{ $lang->lang }}[description]"
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                            {{ ValueOf($trip, $lang, 'description') }}
                                        </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{-- Description --}}
                                            <label class="control-label col-sm-2" for="title"> Tour Option :</label>
                                            <div class="col-sm-8">
                                        <textarea id="tour_option{{ $lang->id }}" name="{{ $lang->lang }}[tour_option]"
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                            {{ ValueOf($trip, $lang, 'tour_option') }}
                                        </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{-- Description --}}
                                            <label class="control-label col-sm-2" for="title"> Tour Vehicles :</label>
                                            <div class="col-sm-8">
                                        <textarea id="tour_vehicles{{ $lang->id }}"
                                                  name="{{ $lang->lang }}[tour_vehicles]"
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                            {{ ValueOf($trip, $lang, 'tour_vehicles') }}
                                        </textarea>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            {{-- Short Description --}}
                                            <label class="control-label col-sm-2"
                                                   for="title">{{__('tripmodule::trip.short_desc')}}:</label>
                                            <div class="col-sm-8">
                                                <textarea id="shoort_desc{{ $lang->id }}"
                                                          name="{{ $lang->lang }}[short_desc]"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ ValueOf($trip, $lang, 'short_desc') }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{-- include --}}
                                            <label class="control-label col-sm-2"
                                                   for="title">{{__('tripmodule::trip.include')}}:</label>
                                            <div class="col-sm-8">
                                                <textarea id="include{{ $lang->id }}" name="{{ $lang->lang }}[include]"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ ValueOf($trip, $lang, 'include') }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{-- Not include --}}
                                            <label class="control-label col-sm-2"
                                                   for="title">{{__('tripmodule::trip.not_include')}}:</label>
                                            <div class="col-sm-8">
                                                <textarea id="not_include{{ $lang->id }}"
                                                          name="{{ $lang->lang }}[not_include]"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ ValueOf($trip, $lang, 'not_include') }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{-- Note --}}
                                            <label class="control-label col-sm-2"
                                                   for="title">{{__('tripmodule::trip.note')}}:</label>
                                            <div class="col-sm-8">
                                                <textarea id="note{{ $lang->id }}" name="{{ $lang->lang }}[note]"
                                                          style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ ValueOf($trip, $lang, 'note') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.nav-tabs-custom -->

                        {{-- Upload photo --}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="photo">{{__('tripmodule::trip.photo')}} :</label>
                            <div class="col-sm-4">
                                <input data-validation="required" type="file" autocomplete="off"
                                       name="photo"> @if ($trip->photo)
                                    <br>
                                    <img src={{ asset( "public/images/trip/thumb/".$trip->photo) }}>
                                    <br> @else
                                    <br>
                                    <strong>"No Photo"</strong>
                                    <br> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="cover">{{__('tripmodule::trip.cover')}} :</label>
                            <div class="col-sm-4">
                                <input data-validation="required" type="file" autocomplete="off"
                                       name="cover"> @if ($trip->cover)
                                    <br>
                                    <img src={{ asset( "public/images/trip/thumb/".$trip->cover) }}>
                                    <br> @else
                                    <br>
                                    <strong>"No Photo"</strong>
                                    <br> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {{-- Price --}}
                            <label class="control-label col-sm-2" for="title">{{__('tripmodule::trip.price')}} :</label>
                            <div class="col-sm-3">
                                <input id="price" type="text" value="{{ $trip->price }}" autocomplete="off"
                                       class="form-control" name="price"
                                       required>
                            </div>

                            <label class="control-label col-sm-2" for="title">{{__('tripmodule::trip.hours')}} :</label>
                            <div class="col-sm-3">
                                <input id="hours" type="text" value="{{ $trip->hours }}" autocomplete="off"
                                       class="form-control" name="hours" required>
                            </div>

                        </div>

                        <div class="form-group">
                            {{-- duelx_price --}}
                            <label class="control-label col-sm-2" for="title">@lang('frontmodule::front.duelx_price') :</label>
                            <div class="col-sm-3">
                                <input id="price" type="text" value="{{ $trip->duelx_price }}" autocomplete="off"
                                       class="form-control" name="duelx_price"
                                       >
                            </div>

                            <label class="control-label col-sm-2" for="title">@lang('frontmodule::front.Luxury_price') :</label>
                            <div class="col-sm-3">
                                <input id="Luxury_price" type="text" value="{{ $trip->luxury_price }}" autocomplete="off"
                                       class="form-control" name="luxury_price" >
                            </div>

                        </div>


                        {{-- Select Category --}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">{{trans('tripmodule::trip.category')}}
                                :</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="categories[]" multiple>
                                    @foreach($categs as $cat)
                                        <option value="{{ $cat->id }}"
                                                @if( in_array($cat->id , $trip->categories()->get()->pluck('id')->toArray()) ) selected @endif>{{ $cat->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>


                        {{--                    <div class="form-group">--}}

                        {{--                        <label class="control-label col-sm-2" for="title">{{__('tripmodule::trip.child_price')}} :</label>--}}
                        {{--                        <div class="col-sm-3">--}}
                        {{--                            <input id="price" type="text" autocomplete="off" class="form-control"--}}
                        {{--                                   value="{{ $trip->child_price }}"--}}
                        {{--                                   name="child_price"--}}
                        {{--                                   required>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}

                        {{-- Select destinations --}}
                        <div class="form-group">
                            <br>
                            <label class="control-label col-sm-2" for="title">{{trans('tripmodule::trip.destinations')}}
                                :</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="destinations[]" multiple="multiple">
                                    @foreach ($destinations as $item)
                                        <option value="{{ $item->id }}"
                                                @if(in_array($item->id, $selected_categ_ids)) selected @endif>{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


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
                                            <a href="#seo{{ $lang->display_lang }}"
                                               data-toggle="tab">{{ $lang->display_lang }}</a>
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
                                                       for="title"> {{__('tripmodule::trip.mt')}} :</label>
                                                <div class="col-sm-8">
                                                    <input id="meta_title_{{ $lang->lang }}" type="text"
                                                           autocomplete="off" class="form-control"
                                                           name="{{ $lang->lang }}[meta_title]"
                                                           value="{{ ValueOf($trip, $lang, 'meta_title') }}">
                                                    <span id="titleSpan_{{ $lang->lang }}"></span>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                {{-- Meta Description --}}
                                                <label class="control-label col-sm-2"
                                                       for="desc"> {{__('tripmodule::trip.md')}} :</label>
                                                <div class="col-sm-8">
                                            <textarea  id="meta_desc_{{$lang->lang}}" class="form-control" autocomplete="off"
                                                      name="{{ $lang->lang }}[meta_desc]" cols="15"
                                                      rows="2">{{ ValueOf($trip, $lang, 'meta_desc') }}</textarea>
                                                    <span id="descSpan_{{$lang->lang}}"></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {{-- Meta Keywords --}}
                                                <label class="control-label col-sm-2" for="tags"> Meta Keywords
                                                    / {{__('tripmodule::trip.tags')}} :</label>
                                                <div class="col-sm-8">
                                                    <input  id="countKeyWords{{$lang->lang}}" autocomplete="off"
                                                           type="text" class="form-control"
                                                           name="{{ $lang->lang }}[meta_keywords]"
                                                           value="{{ ValueOf($trip, $lang, 'meta_keywords') }}">
                                                    <span id="tagsSpan"></span>
                                                </div>
                                            </div>

                                            <!-- Slug -->
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="slug">Slug : </label>
                                                <div class="col-sm-8">
                                                    <input id="slug_{{$lang->lang}}" type="text" autocomplete="off" class="form-control"
                                                           name="{{ $lang->lang }}[slug]"
                                                           value="{{ ValueOf($trip, $lang, 'slug') }}">
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach


                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{url('/admin-panel/trip')}}" type="button"
                           class="btn btn-default">{{__('tripmodule::trip.cancel')}} &nbsp; <i class="fa fa-remove"
                                                                                               aria-hidden="true"></i>
                        </a>

                        <button type="submit" class="btn btn-primary pull-right">{{__('tripmodule::trip.submit')}}
                            &nbsp; <i class="fa fa-save"></i></button>
                    </div>
                    <!-- /.box-footer -->
            </form>
        </div>
    </section>
@endsection

@section('javascript') {{-- Treeview --}}
<script src="{{adminurl('metro.js')}}"></script>
<script src="{{adminurl('bower_components/speaking-url/speakingurl.min.js')}}">
</script>

{{-- jQuery Count letters --}}
@include('tripmodule::Trip.js') {{-- jQuery Bind data --}}
@include('tripmodule::Trip.copy')

<!-- CK Editor -->
<script src="{{adminurl('bower_components/ckeditor/ckeditor.js')}}"></script>

<!-- Select2 -->
<script src="{{adminurl('bower_components/select2/dist/js/select2.full.min.js')}}"></script>

<script>
    //Initialize Select2 Elements
    $('.select2').select2();

</script>

@foreach ($activeLang as $lang)
    <script>
        $(function () {
            CKEDITOR.replace('desc' + "{{ $lang->id }}");
            
            CKEDITOR.replace('include' + "{{ $lang->id }}");
            CKEDITOR.replace('not_include' + "{{ $lang->id }}");
            CKEDITOR.replace('tour_vehicles' + '{{ $lang->id }}');
            CKEDITOR.replace('tour_option' + '{{ $lang->id }}');
            CKEDITOR.replace('note' + '{{ $lang->id }}');
        });

    </script>
@endforeach
@endsection
