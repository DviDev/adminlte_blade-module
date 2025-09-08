@props([
    'items' => [],
    'show_cart_icon' => false,
    'show_right_sidebar_icon' => true,
    'show_notifications' => false,
])
@use(Illuminate\Support\Facades\Route)
@use(Modules\Chat\Models\ChatCategoryChannelTopicModel)
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        @foreach($items as $item)
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{$item['url']}}" class="nav-link">{{$item['label']}}</a>
            </li>
        @endforeach
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        {{--<li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                               aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>--}}
        <li class="nav-item dropdown">
            @if($show_cart_icon)
                @php
                    $product = request('product');
                @endphp
                <livewire:store::cart.cart-icon-items :product="$product"/>
            @endif
        </li>
        <!-- Todo - Verificar se seria legal incluir aqui o Messages Dropdown Menu -->
        @if(\Nwidart\Modules\Facades\Module::isEnabled('Chat'))
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    @php
                        $messagesQuery = ChatCategoryChannelTopicModel::query()
                            ->where('user_id', auth()->user()->id);

                        /**@var \Illuminate\Support\Collection|ChatCategoryChannelTopicModel[] $messages*/
                    @endphp
                    <span class="badge badge-danger navbar-badge">{{$messagesQuery->count()}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    @php
                        $messages = $messagesQuery->limit(5)->get()->all();
                    @endphp
                    @foreach($messages as $message)
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                {{--<img src="{{asset('assets/modules/lte/dist/img/user1-128x128.jpg')}}" alt="User Avatar"
                                     class="img-size-50 mr-3 img-circle">--}}
                                <div class="bg-gray-100 rounded-full border h-[50px] w-[50px] mr-3 flex items-center justify-center shadow-sm text-blue-300">
                                    <x-dvui::icon.user s8 fill/>
                                </div>
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        {{str($message->user->name)->words(2, '')}}
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">{{str($message->title)->words(4)}}...</p>
                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i> {{$message->created_at->diffForHumans()}}
                                    </p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                    @endforeach
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
        @endif

        <!-- Notifications Dropdown Menu -->
        @if($show_notifications)
            <li class="nav-item dropdown">
                <livewire:lte::layout.navbar.notifications/>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        @if($show_right_sidebar_icon)
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                   role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        @endif
    </ul>
</nav>
