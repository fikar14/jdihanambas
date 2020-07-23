<div class="coloums has-text-white is-hidden-mobile">
    <div class="column" id="admin-manage">
        <aside class="menu is-hidden-mobile">
          <p class="menu-label">
              General
          </p>
          <ul class="menu-list">
            <li>
              <a href="/home"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
            </li>
            <li>
              <a href="/produk-hukum-daerah"><i class="fa fa-id-card-alt"></i> <span>Produk Hukum</span></a>
            </li> 
            {{-- <li>
              <a href="/produkhukum"><i class="fa fa-id-card-alt"></i> <span>Produk Hukum Desa</span></a>
            </li> --}}
          </ul>
          <p class="menu-label">
              Administration
          </p>
          <ul class="menu-list">
              <li>
                <a class="has-submenu"><i class="fas fa-list-alt"></i> <span>Blog Posts</span></a>
                <ul>
                  <li><a href="/blogs/create"><i class="fas fa-plus-square"></i> <span>Add Post</span></a></li>
                  <li><a href="/blogs"><i class="fas fa-list-alt"></i> <span>All Posts</span></a></li>
                  <li><a href="/blog-categories"><i class="fas fa-hashtag"></i> <span>Category</span></a></li>
                </ul>
              </li>
            @role('SuperAdministrator')
              <li><a class="has-submenu"><i class="fa fa-user"></i> <span>Users Managgement</span></a>
                <ul>
                  <li><a href="/manage/users"><i class="fas fa-users"></i> <span>Users</span></a></li>
                  <li><a href="/manage/roles"><i class="fas fa-user-tag"></i> <span>Roles</span></a></li>
                  <li><a href="/manage/permissions"><i class="fas fa-user-shield"></i> <span>Permissions</span></a></li>
                </ul>
              </li>
            @endrole
          </ul>
          <p class="menu-label">
              Settings
          </p>
          <ul class="menu-list">
            <li><a href="/manage/profile"> <i class="fas fa-newspaper"></i>
              <span>Profile</span></a>
            </li>
            {{-- <li><a class="navbar-item" href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out-alt"></i>
                     <span>{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li> --}}
          </ul>
      </aside>
    </div>
</div>