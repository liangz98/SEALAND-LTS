@if ($member)
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">基本信息</h3>
        </div>
        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>会员编号：</dt>
                <dd>{{ $member->member_number }}</dd>
                <dt>会员名称：</dt>
                <dd>{{ $member->name }} {{ trans('dataDict.gender.'.$member->gender) }}</dd>
                <dt>有效期：</dt>
                <dd>
                    @if (count($memberships) && $memberships->first()->expiry_date > \Illuminate\Support\Carbon::now())
                        {{ date('Y-m-d', strtotime($memberships->first()->expiry_date)) }}
                    @else
                        <div class="empty-block">不是会员？马上 <a href="#">升级成为会员</a> </div>
                    @endif
                </dd>
                <dt>邮箱：</dt>
                <dd>{{ $member->email }}</dd>
                <dt>手机号码：</dt>
                <dd>{{ $member->mobile_phone }}</dd>
                <dt>地址信息：</dt>
                <dd>{{ $member->country }} {{ $member->state }} {{ $member->city }} {{ $member->street }}</dd>
                <dt></dt>
                <dd>{{ $member->address }}</dd>
                <dt>公司：</dt>
                <dd>{{ $member->company_name }}</dd>
                <dt></dt>
                <dd>{{ $member->en_company_name }}</dd>
            </dl>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">认证信息</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>认证名称</th>
                        <th>认证级别</th>
                        <th>发证日期</th>
                        <th>到期日期</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($certifications))
                        @foreach($certifications as $certification)
                            <tr>
                                <td>{{ $certification->training->name }}</td>
                                <td>{{ $certification->training->level }}</td>
                                <td>{{ date('Y-m-d', strtotime($certification->start_date)) }}</td>
                                <td>{{ date('Y-m-d', strtotime($certification->expiry_date)) }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">
                                <div class="empty-block">暂无会员认证数据。马上 <a href="/trainings">报名培训</a></div>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">邮寄信息</h3>
        </div>
        <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>邮寄地址：</dt>
                <dd>{{ $member->mailing_address }}</dd>
                <dt>收件人：</dt>
                <dd>{{ $member->mailing_name }}</dd>
                <dt>收件人电话：</dt>
                <dd>{{ $member->mailing_mobile }}</dd>
            </dl>
        </div>
    </div>


@else
<div class="empty-block">不是会员？马上 <a href="#">升级成为会员</a> </div>
@endif
