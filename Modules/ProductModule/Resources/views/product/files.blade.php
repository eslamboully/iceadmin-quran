@extends('commonmodule::layouts.master')

@section('title')
    {{__('productmodule::product.pagetitle')}}
@endsection

@section('css')
    <style>
        .dropzone .dz-preview .dz-image img{
            width: 113px;
        }

    </style>
@endsection

@section('content-header')
    <section class="content-header">
        <h1> {{__('productmodule::product.pagetitle')}} </h1>

    </section>
@endsection

@section('content')
    <div id="product_media" class="tab-pane container" style="width: 1100px">

        <hr />
        <center><h3>{{ trans('productmodule::product.other_files') }}</h3></center>
        <div class="dropzone" id="dropzonefileupload"></div>
        <br>

        <div class="container" style="width: 1000px">
            <div class="row">
                <div class="col text-center">
                    <a href="{{ route('product.index') }}" class="btn btn-success btn-lg">return back</a>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('javascript')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">

    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        $(document).ready(function(){

            $('#dropzonefileupload').dropzone({
                url:"{{ route('product.files.post',$id) }}",
                paramName:'file',
                autoDiscover:false,
                uploadMultiple:false,
                maxFiles:15,
                maxFilessize:5, // MB
                dictDefaultMessage: '{{ __('productmodule::product.file_uploads') }}',
                dictRemoveFile:'{{ trans('productmodule::product.delete') }}',
                params:{
                    _token:'{{ csrf_token() }}'
                },
                addRemoveLinks:true,
                removedfile:function(file)
                {
                    //file.fid
                    $.ajax({
                        dataType:'json',
                        type:'post',
                        url:'{{ route('product.files.delete') }}',
                        data:{_token:'{{ csrf_token() }}',id:file.fid}
                    });
                    var fmock;
                    return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file.previewElement):void 0;


                },
                init:function(){


                    @foreach($product_files as $file)
                        var mock = {name: '{{ $file->photo }}',fid: '{{ $file->id }}',size: '50px',type: '{{ 'mime_type' }}' };
                        this.emit('addedfile',mock);
                        this.options.thumbnail.call(this,mock,'{{ asset('images/products/files/'.$file->photo) }}');
                    @endforeach

                        this.on('sending',function(file,xhr,formData){
                        formData.append('fid','');
                        file.fid = '';
                    });

                    this.on('success',function(file,response){
                        file.fid = response.id;
                    });

                }
            });

        });
    </script>
@endsection
