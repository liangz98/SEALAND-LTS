@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> 报名培训

                    {{--<a href="{{ $trainingDefaultFile }}" class="btn btn-success pull-right">报表名下载</a>--}}
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('register_courses.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="training_id" value="{{ $training->id }}">

                    <div class="form-group">
                        <label for="training_name-field" class="col-sm-2 control-label">课程名称</label>
                        <div class="col-sm-9">
                            <p class="form-control-static">{{ old('training_name', $training->name ) }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="start_date-field" class="col-sm-2 control-label">开始时间</label>
                        <div class="col-sm-9">
                            <p class="form-control-static">{{ old('start_date', date('Y-m-d', strtotime($training->start_date)) ) }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="end_date-field" class="col-sm-2 control-label">结束时间</label>
                        <div class="col-sm-9">
                            <p class="form-control-static">{{ old('end_date', date('Y-m-d', strtotime($training->end_date)) ) }}</p>
{{--                            <input class="form-control" type="text" id="end_date-field" value="{{ old('end_date', $training->end_date ) }}" readonly="readonly" />--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="en_company_name-field" class="col-sm-2 control-label">公司全称(英文)</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="en_company_name" id="en_company_name-field" value="{{ old('en_company_name', $user->en_company_name ) }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company_name-field" class="col-sm-2 control-label">(中文)</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="company_name" id="company_name-field" value="{{ old('company_name', $user->company_name ) }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="en_company_address-field" class="col-sm-2 control-label">公司地址(英文)</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="en_company_address" id="en_company_address-field" value="{{ old('en_company_address', $user->en_company_address ) }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company_address-field" class="col-sm-2 control-label">(中文)</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="company_address" id="company_address-field" value="{{ old('company_address', $user->company_address ) }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="company_phone-field" class="col-sm-2 control-label">办公电话</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="company_phone" id="company_phone-field" value="{{ old('company_phone', $user->company_phone ) }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company_fax-field" class="col-sm-2 control-label">办公传真</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="company_fax" id="company_fax-field" value="{{ old('company_fax', $user->company_fax ) }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="en_mailing_address-field" class="col-sm-2 control-label">证书快递地址(英文)</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="en_mailing_address" id="en_mailing_address-field" value="{{ old('en_mailing_address', $user->en_mailing_address ) }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mailing_address-field" class="col-sm-2 control-label">(中文)</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="mailing_address" id="mailing_address-field" value="{{ old('mailing_address', $user->mailing_address ) }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nace_number-field" class="col-sm-2 control-label">NACE会员号</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="nace_number" id="nace_number-field" value="{{ old('nace_number', $user->nace_number ) }}" />
                        </div>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label for="mailing_address-field" class="col-sm-2 control-label">CIP-1认证号</label>--}}
                        {{--<div class="col-sm-9">--}}
                            {{--<input class="form-control" type="text" id="mailing_address-field" value="{{ old('mailing_address', $user->mailing_address ) }}" />--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <label for="en_name-field" class="col-sm-2 control-label">姓名(英文)</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="en_name" id="en_name-field" value="{{ old('en_name', $user->en_name ) }}" placeholder="英文姓名将显示在您的证书上" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name-field" class="col-sm-2 control-label">(中文)</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name ) }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="en_department-field" class="col-sm-2 control-label">所属部门(英文)</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="en_department" id="en_department-field" value="{{ old('en_department', $user->en_department ) }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="department-field" class="col-sm-2 control-label">(中文)</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="department" id="department-field" value="{{ old('department', $user->department ) }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="en_title-field" class="col-sm-2 control-label">职务(英文)</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="en_title" id="en_title-field" value="{{ old('en_title', $user->en_title ) }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title-field" class="col-sm-2 control-label">(中文)</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $user->title ) }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="identification_number-field" class="col-sm-2 control-label">身份证号码</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="identification_number" id="identification_number-field" value="{{ old('identification_number', $user->identification_number ) }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone-field" class="col-sm-2 control-label">家庭电话</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="phone" id="phone-field" value="{{ old('phone', $user->phone ) }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mobile-field" class="col-sm-2 control-label">手机号码</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="mobile" id="mobile-field" value="{{ old('mobile', $user->mobile ) }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email-field" class="col-sm-2 control-label">E-mail 邮箱地址</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $user->email ) }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="need_hotel" class="col-sm-2 control-label">代订酒店</label>
                        <div class="col-sm-9">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="need_hotel" id="need_hotel" value="true"> 需要
                            </label>
                        </div>
                    </div>

                    <div class="form-group hotel-div" style="display: none">
                        <div class="col-sm-offset-2 col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="room_type" id="room_type_01" value="01" checked> 标房
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="room_type" id="room_type_02" value="02"> 豪华房
                            </label>
                        </div>
                    </div>

                    <div class="form-group hotel-div" style="display: none">
                        <div class="col-sm-offset-2 col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="bed_type" id="bed_type_01" value="01" checked> 双床
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="bed_type" id="bed_type_02" value="02"> 大床
                            </label>
                        </div>
                    </div>

                    <div class="form-group hotel-div" style="display: none">
                        <label for="hotel_check_in_name-field" class="col-sm-2 control-label">入住者姓名</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="hotel_check_in_name" id="hotel_check_in_name-field" />
                        </div>
                    </div>

                    <div class="form-group hotel-div" style="display: none">
                        <label for="hotel_check_in_date-field" class="col-sm-2 control-label">入住者时间</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="date" name="hotel_check_in_date" id="hotel_check_in_date-field" />
                        </div>
                    </div>

                    <div class="form-group hotel-div" style="display: none">
                        <label for="hotel_days-field" class="col-sm-2 control-label">共住房晚</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="hotel_days" id="hotel_days-field" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="need_invoice" class="col-sm-2 control-label">开具发票</label>
                        <div class="col-sm-9">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="need_invoice" id="need_invoice" value="true"> 需要
                            </label>
                        </div>
                    </div>

                    <div class="form-group invoice_div" style="display: none">
                        <div class="col-sm-offset-2 col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="invoice_type" id="invoice_type_01" value="01" checked> 增值税普通发票
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="invoice_type" id="invoice_type_02" value="02"> 增值税专用发票
                            </label>
                        </div>
                    </div>

                    <div class="form-group invoice_div" style="display: none">
                        <label for="invoice_title-field" class="col-sm-2 control-label">发票抬头</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="invoice_title" id="invoice_title-field" value="{{ old('invoice_title', $user->invoice_title ) }}" />
                        </div>
                    </div>

                    <div class="form-group invoice_t_div" style="display: none">
                        <label for="taxpayer_identification_number-field" class="col-sm-2 control-label">纳税人识别号</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="taxpayer_identification_number" id="taxpayer_identification_number-field" value="{{ old('taxpayer_identification_number', $user->taxpayer_identification_number ) }}" />
                        </div>
                    </div>

                    <div class="form-group invoice_t_div" style="display: none">
                        <label for="invoice_address-field" class="col-sm-2 control-label">地址</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="invoice_address" id="invoice_address-field" />
                        </div>
                    </div>

                    <div class="form-group invoice_t_div" style="display: none">
                        <label for="invoice_phone-field" class="col-sm-2 control-label">电话</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="invoice_phone" id="invoice_phone-field" value="{{ old('invoice_phone', $user->invoice_phone ) }}" />
                        </div>
                    </div>

                    <div class="form-group invoice_t_div" style="display: none">
                        <label for="invoice_bank_name-field" class="col-sm-2 control-label">开户行</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="invoice_bank_name" id="invoice_bank_name-field" value="{{ old('invoice_bank_name', $user->invoice_bank_name ) }}" />
                        </div>
                    </div>

                    <div class="form-group invoice_t_div" style="display: none">
                        <label for="invoice_bank_no-field" class="col-sm-2 control-label">账号</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="invoice_bank_no" id="invoice_bank_no-field" value="{{ old('invoice_bank_no', $user->invoice_bank_no ) }}" />
                        </div>
                    </div>

                    {{--<div class="checkbox">--}}
                        {{--<label>--}}
                            {{--<input type="checkbox" value="">--}}
                            {{--Option one is this and that&mdash;be sure to include why it's great--}}
                        {{--</label>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">提交</button>
                        </div>
                    </div>

                    {{--<div class="well well-sm">--}}
                        {{--<button type="submit" class="btn btn-primary">提交</button>--}}
                        {{--<a class="btn btn-link pull-right" href="{{ route('trainings.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>--}}
                    {{--</div>--}}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function(){
	$("#need_hotel").click(function () {
		if ($(this).prop("checked")) {
			$(".hotel-div").show();
		} else {
			$(".hotel-div").hide();
        }
	});

	$("#need_invoice").click(function () {
		if ($(this).prop("checked")) {
            $(".invoice_div").show();
			if ($("#invoice_type_01").prop("checked")) {
				$(".invoice_t_div").hide();
			}
            if ($("#invoice_type_02").prop("checked")) {
				$(".invoice_t_div").show();
            }
        } else {
			$(".invoice_div").hide();
			$(".invoice_t_div").hide();
		}
	});
	$("#invoice_type_01").click(function () {
		if ($(this).prop("checked")) {
			$(".invoice_div").show();
			$(".invoice_t_div").hide();
		} else {
			$(".invoice_div-div").hide();
		}
	});
	$("#invoice_type_02").click(function () {
		if ($(this).prop("checked")) {
			$(".invoice_div").show();
            $(".invoice_t_div").show();
		} else {
			$(".invoice_div-div").hide();
		}
	});
});
</script>
@stop