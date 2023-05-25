<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" key="t-menu">Menu</li>
        <li>
            <a href="{{ route('dashboard.index') }}" key="t-default">home</a>
        </li>
        <li>
            <a href="{{ route('package-queries.index') }}" key="t-default">Inbox</a>
        </li>

        <li class="menu-title" key="t-menu">Web Contents</li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-notice">News & Info</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('notices.index') }}" key="t-list">All Notice</a></li>
                <li><a href="{{ route('notices.create') }}" key="t-create">Add Notice</a></li>
            </ul>
        </li>
        {{-- End - notice --}}

                {{-- start - team --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-team">Teacher</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('teams.index') }}" key="t-list">All Teacher</a></li>
                        <li><a href="{{ route('teams.create') }}" key="t-create">Create Teacher</a></li>
                    </ul>
                </li>
                {{-- End - blog --}}

        {{-- start - blog --}}
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-blog">Blog</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('blogs.index') }}" key="t-list">All Blog</a></li>
                <li><a href="{{ route('blogs.create') }}" key="t-create">Create Blog</a></li>
            </ul>
        </li>
        {{-- End - blog --}}
        {{-- hero --}}
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-hero">Hero</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('hero.index') }}" key="t-list">All Hero</a></li>
                <li><a href="{{ route('hero.create') }}" key="t-create">Create Hero</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-hero">Website Content</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('about.edit', 1) }}" key="t-list">About Us</a></li>
                <li><a href="{{ route('contact.edit', 1) }}" key="t-list">Contact Info</a></li>
                <li><a href="{{ route('general.edit', 1) }}" key="t-list">General Setting</a></li>
            </ul>
        </li>
        {{-- End - hero --}}
    </ul>
</div>
