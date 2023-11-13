@php
    use Illuminate\Support\Facades\Route;
    $menu_itens = [
        'Dashboard' => [
            'header' => true,
            'icon' => '<i class="nav-icon fas fa-tachometer-alt"></i>',
            'itens' => [
                ['name' => 'Dashboard v1', 'route' => route('lte.pages.dashboard1'),],
                ['name' => 'Dashboard v2', 'route' => route('lte.pages.dashboard2'),],
                ['name' => 'Dashboard v3', 'route' => route('lte.pages.dashboard3'),],
            ]
        ],
        'Widgets' => [
            'route' => route('lte.pages.widgets'),
            'icon' => '<i class="nav-icon fas fa-th"></i>',
            'new' => true,
        ],
        'Layout Options' => [
            'route' => route('lte.pages.layout.top-nav'),
            'icon' => '<i class="nav-icon fas fa-copy"></i>',
            'info' => 6,
            'treeview' => true,
            'itens' => [
                ['name' => 'Top Navigation', 'route' => route('lte.pages.layout.top-nav')],
                ['name' => 'Top Navigation + Sidebar', 'route' => route('lte.pages.layout.top-nav-sidebar')],
                ['name' => 'Boxed', 'route' => route('lte.pages.layout.boxed')],
                ['name' => 'Fixed Sidebar', 'route' => route('lte.pages.layout.fixed-sidebar')],
                ['name' => "Fixed Sidebar <small>+ Custom Area</small>", 'route' => route('lte.pages.layout.fixed-sidebar-custom')],
                ['name' => "Fixed Navbar", 'route' => route('lte.pages.layout.fixed-topnav')],
                ['name' => "Fixed Footer", 'route' => route('lte.pages.layout.fixed-footer')],
                ['name' => "Collapsed Sidebar", 'route' => route('lte.pages.layout.collapsed-sidebar')],
            ],
        ],
        'Charts' => [
            'icon' => '<i class="nav-icon fas fa-chart-pie"></i>',
            'treeview' => true,
            'itens' => [
               ['name' => 'ChartJS', 'route' => route('lte.pages.charts.chartjs')],
               ['name' => 'Flot', 'route' => route('lte.pages.charts.flot')],
               ['name' => 'Inline', 'route' => route('lte.pages.charts.inline')],
               ['name' => 'uPlot', 'route' => route('lte.pages.charts.uplot')],
            ]
        ],
        'UI Elements' => [
            'icon' => '<i class="nav-icon fas fa-tree"></i>',
            'itens' => [
                ['name' => 'General', 'route' => route('lte.pages.ui.general')],
                ['name' => 'Icons', 'route' => route('lte.pages.ui.icons')],
                ['name' => 'Buttons', 'route' => route('lte.pages.ui.buttons')],
                ['name' => 'Sliders', 'route' => route('lte.pages.ui.sliders')],
                ['name' => 'Modals & Alerts', 'route' => route('lte.pages.ui.modals')],
                ['name' => 'Navbar & Tabs', 'route' => route('lte.pages.ui.navbar')],
                ['name' => 'Timeline', 'route' => route('lte.pages.ui.timeline')],
                ['name' => 'Ribbons', 'route' => route('lte.pages.ui.ribbons')],
            ],
        ],
        'Forms' => [
            'icon' => '<i class="nav-icon fas fa-edit"></i>',
            'itens' => [
                ['name' => 'General Elements', 'route' => route('lte.pages.forms.general')],
                ['name' => 'Advanced Elements', 'route' => route('lte.pages.forms.advanced')],
                ['name' => 'Editors', 'route' => route('lte.pages.forms.editors')],
                ['name' => 'Validation', 'route' => route('lte.pages.forms.validation')],
            ],
        ],
        'Tables' => [
            'icon' => '<i class="nav-icon fas fa-table"></i>',
            'itens' => [
               ['name' => 'Simple Tables', 'route' => route('lte.pages.tables.simple')],
               ['name' => 'DataTables', 'route' => route('lte.pages.tables.data')],
               ['name' => 'jsGrid', 'route' => route('lte.pages.tables.jsgrid')],
            ],
        ],
        'EXAMPLES' => [
            'header' => true,
        ],
        'Calendar' => [
            'route' => route('lte.pages.calendar'),
            'icon' => '<i class="nav-icon far fa-calendar-alt"></i>',
             'info' => 2
         ],
        'Gallery' => [
            'route' => route('lte.pages.gallery'),
            'icon' => '<i class="nav-icon far fa-image"></i>'
        ],
        'Kanban Board' => [
            'route' => route('lte.pages.kanban'),
            'icon' => '<i class="nav-icon fas fa-columns"></i>'
        ],
        'Mailbox' => [
            'route' => route('lte.pages.mailbox.mailbox'),
            'icon' => '<i class="nav-icon far fa-envelope"></i>',
            'itens' => [
                ['name' => 'Inbox', 'route' => route('lte.pages.mailbox.mailbox')],
                ['name' => 'Compose', 'route' => route('lte.pages.mailbox.compose')],
                ['name' => 'Read', 'route' => route('lte.pages.mailbox.read-mail')],
            ],
        ],
        'Pages' => [
            'icon' => '<i class="nav-icon fas fa-book"></i>',
            'itens' => [
                ['name' => 'Invoice', 'route' => route('lte.pages.examples.invoice')],
                ['name' => 'Profile', 'route' => route('lte.pages.examples.profile')],
                ['name' => 'E-commerce', 'route' => route('lte.pages.examples.e-commerce')],
                ['name' => 'Projects', 'route' => route('lte.pages.examples.projects')],
                ['name' => 'Project Add', 'route' => route('lte.pages.examples.project-add')],
                ['name' => 'Project Edit', 'route' => route('lte.pages.examples.project-edit')],
                ['name' => 'Project Detail', 'route' => route('lte.pages.examples.project-detail')],
                ['name' => 'Contacts', 'route' => route('lte.pages.examples.contacts')],
                ['name' => 'FAQ', 'route' => route('lte.pages.examples.faq')],
                ['name' => 'Contact us', 'route' => route('lte.pages.examples.contact-us')],
            ],
        ],
        'Extras' => [
            'icon' => '<i class="nav-icon far fa-plus-square"></i>',
            'itens' => [
                [
                    'name' => 'Login & Register v1',
                    'itens' => [
                        ['name' => 'Login v1', 'route' => route('lte.pages.examples.login'),],
                        ['name' => 'Register v1', 'route' => route('lte.pages.examples.register'),],
                        ['name' => 'Forgot Password v1', 'route' => route('lte.pages.examples.forgot-password'),],
                        ['name' => 'Recover Password v1', 'route' => route('lte.pages.examples.recover-password'),],
                    ],
                ],
                [
                    'name' => 'Login & Register v2',
                     'itens' => [
                        ['name' => 'Login v2', 'route' => route('lte.pages.examples.login-v2'),],
                        ['name' => 'Register v2', 'route' => route('lte.pages.examples.register-v2'),],
                        ['name' => 'Forgot Password v2', 'route' => route('lte.pages.examples.forgot-password-v2'),],
                        ['name' => 'Recover Password v2', 'route' => route('lte.pages.examples.recover-password-v2'),],
                    ]
                ],
                ['name' => 'Lockscreen', 'route' => route('lte.pages.examples.lockscreen')],
                ['name' => 'Legacy User Menu', 'route' => route('lte.pages.examples.legacy-user-menu')],
                ['name' => 'Language Menu', 'route' => route('lte.pages.examples.language-menu')],
                ['name' => 'Error 404', 'route' => route('lte.pages.examples.404')],
                ['name' => 'Error 500', 'route' => route('lte.pages.examples.500')],
                ['name' => 'Pace', 'route' => route('lte.pages.examples.pace')],
                ['name' => 'Blank Page', 'route' => route('lte.pages.examples.blank')],
                ['name' => 'Starter Page', 'route' => ''],
            ],
        ],
        'Search' => [
            'icon' => '<i class="nav-icon fas fa-search"></i>',
            'itens' => [
                ['name' => 'Simple Search', 'route' => route('lte.pages.search.simple')],
                ['name' => 'Enhanced', 'route' => route('lte.pages.search.simple')],
            ],
        ],
        'MISCELLANEOUS' => ['header' => true],
        'Tabbed IFrame Plugin' => [
            'route' => route('lte.pages.iframe'),
            'icon' => '<i class="nav-icon fas fa-ellipsis-h"></i>',
        ],
        'Documentation' => ['icon' => '<i class="nav-icon fas fa-file"></i>', 'route'=> 'https://adminlte.io/docs/3.1/'],
        'MULTI LEVEL EXAMPLE' => ['header' => true],
        'Level 1' => ['icon' => '<i class="fas fa-circle nav-icon"></i>'],
        'Level 1' => [
            'icon' => '<i class="nav-icon fas fa-circle"></i>',
            'itens' => [
                ['name' => 'Level 2'],
                [
                    'name' => 'Level 2',
                    'itens' => [
                        ['name' => 'Level 3'],
                        ['name' => 'Level 3'],
                        ['name' => 'Level 3'],
                    ]
                ],
                ['name' => 'Level 2']
            ]
        ],
        'Level 1' => ['icon' => '<i class="fas fa-circle nav-icon"></i>'],
        'LABELS' => ['header' => true],
        'Important' => ['icon' => '<i class="nav-icon far fa-circle text-danger"></i>'],
        'Warning' => ['icon' => '<i class="nav-icon far fa-circle text-warning"></i>'],
        'Informational' => ['icon' => '<i class="nav-icon far fa-circle text-info"></i>'],
];

@endphp
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        @foreach($menu_itens as $name => $menu)
            @php
                $active = collect($menu['itens']??[])->map(fn($i) => $i['route'] ?? null)->contains(\Illuminate\Support\Facades\Request::fullUrl())
            @endphp
            <li @class(["nav-item", 'menu-open' => $active])>
                <a href="{{$menu['route'] ?? '#'}}" @class([
                    "nav-link",
                     'active' => $active
                     ])>
                    {!! $menu['icon'] ?? '' !!}
                    <p>
                        {!! $name !!}
                        @if(isset($menu['itens']))
                            <i class="right fas fa-angle-left"></i>
                        @endif
                        @if(isset($menu['info']))
                            <span class="badge badge-info right">{{$menu['info']}}</span>
                        @endif
                        @if(isset($menu['new']))
                            <span class="right badge badge-danger">New</span>
                        @endif
                    </p>
                </a>
                @if(isset($menu['itens']))
                    <ul class="nav nav-treeview">
                        @foreach($menu['itens'] ?? [] as $item)
                            <li class="nav-item">
                                <a href="{{$item['route'] ?? '#'}}"
                                    @class([
                                        'nav-link',
                                        'active' => isset($item['route']) && Request::fullUrl() == $item['route']
                                     ])>
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{!!  is_string($item) ? $item : $item['name'] !!}</p>
                                    @if(isset($item['itens']))
                                        <i class="right fas fa-angle-left"></i>
                                    @endif
                                </a>
                                @if(isset($item['itens']))
                                    <ul class="nav nav-treeview">
                                        @foreach($item['itens'] ?? [] as $item)
                                            <li class="nav-item">
                                                <a href="{{$item['route'] ?? '#'}}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>{{$item['name']}}</p>
                                                </a>
                                            </li>

                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</nav>
