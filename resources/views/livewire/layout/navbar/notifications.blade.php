@php
    $notifications = $this->notifications();
    $count = $notifications?->whereNull('read_at')->count();
    $list= $notifications?->limit(10)->get() ?? [];
@endphp
<div>
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">{{$count}}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">{{$count}} Notificações</span>
        <div class="dropdown-divider"></div>
        @foreach($list as $notification)
            @php
                $recent = now()->subMinute()->lessThan(new Carbon\Carbon($notification->created_at));
            @endphp
            <a href="{{route('notification', $notification->id)}}"
                @class([
                   "p-2 flex items-center",
                   "bg-gray-100" => !$notification->read_at
                   ])>
                <span class="relative inline-flex ">
                    <i class="fas fa-envelope mt-1"></i>

                    <span class="flex absolute h-2 w-2 top-0 right-0 -mt-1 -mr-1">
                        <span @class([
                           "animate-ping" => (!$notification->read_at && $recent),
                           "absolute inline-flex h-full w-full rounded-full opacity-75",
                           "bg-red-400"
                           ]) x-data="{recent: '{{$recent}}'}" x-show="recent"></span>
                    </span>
                </span>
                <div class="flex text-xs ml-2">
                        <span class="grow ml-1"
                              title="{{$notification->data['title']}}">{{str($notification->data['title'])->limit(35)}}</span>
                    <span class="float-right text-muted ml-2">
                            {{(new \Carbon\Carbon($notification->created_at))->shortRelativeDiffForHumans()}}
                        </span>
                </div>
            </a>
            <div class="dropdown-divider"></div>
        @endforeach
        <a href="{{route('my-notifications')}}" class="dropdown-item dropdown-footer">Ver todas as notificações</a>
    </div>
</div>
