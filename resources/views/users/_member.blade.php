@if ($member)
    {{ $member->name }}
@else
<div class="empty-block">不是会员？马上 <a href="#">升级成为会员</a> </div>
@endif


@if ($memberships)
    @foreach($memberships as $membership)
        {{ $membership->expiry_date }}
    @endforeach
@else
    <div class="empty-block">暂无会员续期数据 ~_~ </div>
@endif
