<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="Bookmark" href="/favicon.ico">
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>
<script type="text/javascript" src="/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/admin/lib/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" type="text/css" href="/admin/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/style.css" />
    <!-- 载入webupload.css文件 -->
    <!-- <link rel="stylesheet" type="text/css" href="/admin/webuploader-0.1.5/webuploader.css">
     -->
    <!--[if IE 6]>
<script type="text/javascript" src="/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
    <!--/meta 作为公共模版分离出去-->
    <title>添加比赛</title>
    <meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
    <meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>

<body>
    <article class="page-container">
        <form action="" method="post" class="form form-horizontal uploadForm" id="form-member-add" enctype="multipart/form-data">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>ID：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{ $data1->id }}" placeholder="" id="id" name="id" disabled>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>比赛名称：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{ $data1->math_name }}" placeholder="" id="math_name" name="math_name">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>比赛日期：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{ $data1->date }}" placeholder="" id="laydate_date" name="date">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>比赛时间：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{ $data1->time }}" placeholder="" id="laydate_time" name="time">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>比赛阶段：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <span class="select-box" >
                        <select class="select" name="stage" size="1">
                            <option value="">--请选择--</option>
                            <option value="1" @if($data1->stage == "小组第一轮")selected @endif>小组第一轮</option>
                            <option value="2" @if($data1->stage == "小组第二轮")selected @endif>小组第二轮</option>
                            <option value="3" @if($data1->stage == "小组第三轮")selected @endif>小组第三轮</option>
                            <option value="4" @if($data1->stage == "淘汰赛")selected @endif>淘汰赛</option>
                            <option value="5" @if($data1->stage == "1/4决赛")selected @endif>1/4决赛</option>
                            <option value="6" @if($data1->stage == "半决赛")selected @endif>半决赛</option>
                            <option value="7" @if($data1->stage == "决赛")selected @endif>决赛</option>
                        </select>
                    </span>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>运动员A：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <span class="select-box" >
                        <select class="select" name="playerA_id" size="1">
                            <option value="">--请选择--</option>
                            @foreach ($data as $val)
                            <option value="{{ $val->id }}" @if($val->id == $data1->playerA_id) selected @endif>{{ $val->name }}</option>
                            @endforeach
                        </select>
                    </span>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>运动员B：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <span class="select-box" >
                        <select class="select" name="playerB_id" size="1">
                            <option value="" >--请选择--</option>
                            <option value="{{$data1->playerB_id}}" selected>
                            @foreach($data as $val)
                                @if($val->id == $data1->playerB_id)
                                    {{ $val->name }}
                                @endif
                             @endforeach</option>
                            {{-- 数据追加的位置 --}}
                        </select>
                    </span>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>比赛项目：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <span class="select-box" >
                        <select class="select" name="item" size="1">
                            <option value="">--请选择--</option>
                            <option value="1" @if($data1->item == "男单") selected @endif>男单</option>
                            <option value="2" @if($data1->item == "女单") selected @endif>女单</option>
                            <option value="3" @if($data1->item == "男双") selected @endif>男双</option>
                            <option value="4" @if($data1->item == "女双") selected @endif>女双</option>
                            <option value="5" @if($data1->item == "混双") selected @endif>混双</option>
                            <option value="6" @if($data1->item == "男团") selected @endif>男团</option>
                            <option value="7" @if($data1->item == "女团") selected @endif>女团</option>
                        </select>
                    </span>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>比赛国家：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{ $data1->nation }}" placeholder="" id="nation" name="nation">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>比赛城市：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{ $data1->city }}" placeholder="" id="city" name="city">
                </div>
            </div>
            {{-- csrf验证 --}}
            {{csrf_field()}}
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input class="btn btn-primary radius submit" type="button" value="&nbsp;&nbsp;提交修改&nbsp;&nbsp;" onclick="edit({{ $data1->id }})">
                    <input class="btn btn-danger radius" type="reset" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
                </div>
            </div> 
        </form>
    </article>
    <!--_footer 作为公共模版分离出去-->
    <script type="text/javascript" src="/admin/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/admin/lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="/admin/static/h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
    <!--/_footer 作为公共模版分离出去-->
    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
    <script type="text/javascript" src="/admin/laydate/laydate.js"></script>
    <!--
        载入webuploader的js文件
    <script type="text/javascript" src="/admin/webuploader-0.1.5/webuploader.js"></script>
    -->
    <script type="text/javascript">
    $(function() {
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });
    });

    $('select[name=playerA_id]').change(function(){
        // 获取当前选中的值
        var _id = $(this).val();
        //console.log(_id);
        // 发送ajax请求
        $.get("{{route('match_getPlayerB')}}",{id: _id},function(data){
                // 循环遍历
                // 初始化一个空的变量
                var _options = '';
                //console.log(data);
               $.each(data,function(index,el){
                     //console.log(el);
                     _options += "<option value='" + el.id + "'>" + el.name + "</option>";
                });
                 console.log(_options);
                // 先清空原有的数据（option）
                $('select[name=playerB_id]').find('option:gt(0)').remove();
                // 将拼凑好的option追加到页面中去（playerB_id）
                $('select[name=playerB_id]').append(_options);
        },'json');
    });

   /* $('.submit').click(function (){
        $.ajax({
            headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
            url:"{{route('match_add')}}",
            type:"POST",
            data:formData,
            async:false,
            cache:false,
            contentType:false,
            processData:false,
            success:function(data){
                if(data.state == "200"){
                    layer.msg(data.msg);
                }
                if(data.state =="400"){
                    layer.msg(data.msg);
                }
            }
        });
    });
*/
    function edit(id){
        $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:"{{route('match_edit')}}"+'?id='+id,
        type: "POST",
        data: $('.uploadForm').serialize(),
        success:function(data){
            //console.log(data);
                if(data.code == 0){
                    layer.msg(data.msg);
                }else{
                    layer.msg(data.msg);
                }
            }
        });
    }
    // 日期
    laydate.render({
      elem: '#laydate_date' //指定元素
    });
    //时间
    laydate.render({
      elem: '#laydate_time',
      type: 'time'
    });

    </script>
    <!--/请在上方写此页面业务相关的脚本-->
</body>

</html>