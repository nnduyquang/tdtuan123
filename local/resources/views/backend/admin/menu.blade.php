<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
{{--<li class="header">HEADER</li>--}}
<!-- Optionally, you can add icons to the links -->
    <li class="nav-item"><a class="nav-link active" href="{{ route('dashboard') }}"><i class="fa fa-link"></i>
            <p>Dashboard</p></a>
    @if(Auth::user()->hasRole('admin')||Auth::user()->can('user-list'))
        <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}"><i class="fa fa-link"></i>
                <p>Người Dùng</p></a>
        </li>
    @endif
    @if(Auth::user()->can('role-list'))
        <li class="nav-item"><a class="nav-link" href="{{ route('roles.index') }}"><i class="fa fa-link"></i>
                <p>Quyền</p></a></li>
        @endif
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('categorypost.index') }}"><i class="fa fa-link"></i>
                <p>Chuyên Mục Bài Viết</p></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('page.index') }}"><i class="fa fa-link"></i>
                <p>Trang</p></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('post.index') }}"><i class="fa fa-link"></i>
                <p>Bài Viết</p></a>
        </li>
        {{--<li class="nav-item"><a class="nav-link" href="{{ route('categoryproduct.index') }}"><i class="fa fa-link"></i>--}}
                {{--<p>Chuyên Mục Sản Phẩm</p></a>--}}
        {{--</li>--}}
        {{--<li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}"><i class="fa fa-link"></i>--}}
                {{--<p>Sản Phẩm</p></a>--}}
        {{--</li>--}}
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
                <i class="fa fa-link"></i>
                Cấu hình
                <i class="right fa fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('config.general.index') }}" class="nav-link">
                        {{--<i class="fa fa-link"></i>--}}
                        <p>Cấu Hình Chung</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('config.email.index') }}" class="nav-link">
                        {{--<i class="fa fa-link"></i>--}}
                        <p>Cấu Hình Email</p>
                    </a>
                </li>
            </ul>
        </li>
</ul>