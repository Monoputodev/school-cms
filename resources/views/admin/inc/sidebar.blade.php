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
                <span key="t-admission">Admissions</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('admissions.index') }}" key="t-list">All Admissions</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-course">Courses</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('courses.index') }}" key="t-list">All Courses</a></li>
                <li><a href="{{ route('courses.create') }}" key="t-create">Add Courses</a></li>
            </ul>
        </li>
        {{-- End - notice --}}
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-notice">Notice</span>
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
                <span key="t-blog">News</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('blogs.index') }}" key="t-list">All News</a></li>
                <li><a href="{{ route('blogs.create') }}" key="t-create">Create News</a></li>
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
        {{-- result --}}
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-result">Results</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('results.index') }}" key="t-list">All Result</a></li>
                <li><a href="{{ route('results.create') }}" key="t-create">Add Result</a></li>

            </ul>
        </li>
        {{-- End - result --}}
        {{-- rutine --}}
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-rutine">Rutines</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('rutines.index') }}" key="t-list">All Rutine</a></li>
                <li><a href="{{ route('rutines.create') }}" key="t-create">Add Rutine</a></li>

            </ul>
        </li>
        {{-- End - rutine --}}

        {{-- photo --}}
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-photo">Gallery</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('photos.index') }}" key="t-list">All Photo</a></li>
                <li><a href="{{ route('photos.create') }}" key="t-create">Add Photo</a></li>

            </ul>
        </li>
        {{-- End - photo --}}
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-hero">Website Content</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('about.edit', 1) }}" key="t-list">About Us</a></li>
                <li><a href="{{ route('contact.edit', 1) }}" key="t-list">Contact Info</a></li>
                <li><a href="{{ route('general.edit', 1) }}" key="t-list">General Setting</a></li>
                <li><a href="{{ route('social.edit', 1) }}" key="t-list">Social Media Setting</a></li>
                <li><a href="{{ route('advertisement.edit', 1) }}" key="t-list">Advertisement Setting</a></li>
            </ul>
        </li>
        {{-- End - hero --}}
    </ul>
</div>
