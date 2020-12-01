@extends('layouts.admin')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>@lang('admin.categories.cate_manage')</h3>
                </div>


            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>@lang('admin.categories.edit')</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form action="{{ route('admin.category.update', $cate->cate_id) }}" method="POST"
                                enctype="multipart/form-data" id="demo-form2" data-parsley-validate
                                class="form-horizontal form-label-left">
                                @csrf
                                @method('put')
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">@lang('admin.categories.cate_name') <span
                                            class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="first-name" name="cate_name"
                                            class="form-control" value="{{ $cate->cate_name }}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name"
                                        class="col-form-label col-md-3 col-sm-3 label-align">@lang('admin.categories.cate_desc')</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="ckeditor" class="form-control" type="text" name="cate_desc"
                                            value="{{ $cate->cate_desc }}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="last-name">@lang('admin.categories.cate_image')</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="file" id="last-name" name="cate_image"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="last-name">@lang('admin.categories.cate_logo')</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="file" type="file" id="last-name" name="cate_logo"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group text-center justify-content-center">
                                    @if ($cate->cate_logo == null)
                                        <img class="img-thumbnail" style="width: 100px; height:100px;"
                                            src="https://logos.textgiraffe.com/logos/logo-name/Cate-designstyle-smoothie-m.png"
                                            alt="">
                                    @else
                                        <img class="img-thumbnail" style="width: 100px; height:100px;"
                                            src="images/categories/logos/{{ $cate->cate_logo }}" alt="">
                                        <img class="img-thumbnail" style="width: 100px; height:100px;"
                                            src="images/categories/images/{{ $cate->cate_image }}" alt="">
                                    @endif
                                </div>
                                @if ($cate->parent_id != null)
                                    <div class="item form-group">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">@lang('admin.categories.parent')</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control cars" name="parent_id">
                                                <option value="">___</option>
                                                @foreach ($categories as $category)
                                                    @if ($category->cate_id != $cate->cate_id)
                                                        <option value="{{ $category->cate_id }}">{{ $category->cate_name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                @endif
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button id="submit" type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
          $("button#submit").click(function(){
            var submit = $("input#last-name").val();
            var file = $("input#file").val();
            var first_name = $("input#first-name").val();
            var checkeditor = $("select.ckeditor").val();
            var getSelect = $("select.cars").val();
            var flag = true
            if(submit ==''){
              $("input#last-name").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
              flag = false
            }else{
              $("input#last-name").css({"background" : "rgb(100 216 90 / 30%)", "border" : "2px solid rgb(147 161 146 / 30%)"});
            }
            {{--    --}}
            if(file ==''){
                $("input#file").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
                flag = false
            }else{
                $("input#file").css({"background" : "rgb(100 216 90 / 30%)", "border" : "2px solid rgb(147 161 146 / 30%)"});
            }
            {{--    --}}
            if(first_name ==''){
                $("input#first-name").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
                flag = false
            }else{
                $("input#first-name").css({"background" : "rgb(100 216 90 / 30%)", "border" : "2px solid rgb(147 161 146 / 30%)"});
            }
            {{--    --}}
            if(ckeditor ==''){
                $("input#ckeditor").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
                flag = false
            }else{
                $("input#ckeditor").css({"background" : "rgb(100 216 90 / 30%)", "border" : "2px solid rgb(147 161 146 / 30%)"});
            }
            {{--    --}}
            if(getSelect ==''){
                $("select.cars").css({"background" : "rgba(255, 147, 146, 0.3)", "border" : "2px solid rgb(255, 0, 0, 0.3)"});
                flag = false
            }else{
                $("select.cars").css({"background" : "rgb(100 216 90 / 30%)", "border" : "2px solid rgb(147 161 146 / 30%)"});
            }
            {{--    --}}

            if(flag == true){
              alert("Thêm Thành Công")
              return true
            }
            return false
          })
        })
    </script>
@endsection
