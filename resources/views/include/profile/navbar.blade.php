<nav
class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
<div class="container-fluid">
  <nav
    class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
    <div class="input-group">
      <div class="input-group-prepend">
        <button type="submit" class="btn btn-search pe-1">
          <i class="fa fa-search search-icon"></i>
        </button>
      </div>
      <input
        type="text"
        placeholder="Search ..."
        class="form-control"
      />
    </div>
  </nav>

  <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
    <li
      class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
      <a
        class="nav-link dropdown-toggle"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-expanded="false"
        aria-haspopup="true">
        <i class="fa fa-search"></i>
      </a>
      <ul class="dropdown-menu dropdown-search animated fadeIn">
        <form class="navbar-left navbar-form nav-search">
          <div class="input-group">
            <input
              type="text"
              placeholder="Search ..."
              class="form-control"
            />
          </div>
        </form>
      </ul>
    </li>
    <li class="nav-item topbar-icon dropdown hidden-caret">
      <a
        class="nav-link dropdown-toggle"
        href="#"
        id="notifDropdown"
        role="button"
        data-bs-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false">
        <i class="fa fa-bell"></i>
        <span class="notification">4</span>
      </a>
      <ul
        class="dropdown-menu notif-box animated fadeIn"
        aria-labelledby="notifDropdown">
        <li>
          <div class="dropdown-title">
            You have 4 new notification
          </div>
        </li>
        <li>
          <div class="notif-scroll scrollbar-outer">
            <div class="notif-center">
              <a href="#">
                <div class="notif-icon notif-primary">
                  <i class="fa fa-user-plus"></i>
                </div>
                <div class="notif-content">
                  <span class="block"> New user registered </span>
                  <span class="time">5 minutes ago</span>
                </div>
              </a>
              <a href="#">
                <div class="notif-icon notif-success">
                  <i class="fa fa-comment"></i>
                </div>
                <div class="notif-content">
                  <span class="block">
                    Rahmad commented on Admin
                  </span>
                  <span class="time">12 minutes ago</span>
                </div>
              </a>
              <a href="#">
                <div class="notif-img">
                  <img
                    src="assets/img/profile2.jpg"
                    alt="Img Profile"
                  />
                </div>
                <div class="notif-content">
                  <span class="block">
                    Reza send messages to you
                  </span>
                  <span class="time">12 minutes ago</span>
                </div>
              </a>
              <a href="#">
                <div class="notif-icon notif-danger">
                  <i class="fa fa-heart"></i>
                </div>
                <div class="notif-content">
                  <span class="block"> Farrah liked Admin </span>
                  <span class="time">17 minutes ago</span>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li>
          <a class="see-all" href="javascript:void(0);"
            >See all notifications<i class="fa fa-angle-right"></i>
          </a>
        </li>
      </ul>
    </li>


    <li class="nav-item topbar-user dropdown hidden-caret">
      <a
        class="dropdown-toggle profile-pic"
        data-bs-toggle="dropdown"
        href="#"
        aria-expanded="false">
        <div class="avatar-sm">
          <img
            src="assets/img/profile.jpg"
            alt="..."
            class="avatar-img rounded-circle"
          />
        </div>
        <span class="profile-username">
          <span class="op-7">Hi,</span>
          <span class="fw-bold">Hizrian</span>
        </span>
      </a>
      <ul class="dropdown-menu dropdown-user animated fadeIn">
        <div class="dropdown-user-scroll scrollbar-outer">
          <li>
            <div class="user-box">
              <div class="avatar-lg">
                <img
                  src="assets/img/profile.jpg"
                  alt="image profile"
                  class="avatar-img rounded"
                />
              </div>
              <div class="u-text">
                <h4>Hizrian</h4>
                <p class="text-muted">hello@example.com</p>
                <a
                  href="profile.html"
                  class="btn btn-xs btn-secondary btn-sm">View Profile</a>
              </div>
            </div>
          </li>
          <li>
            <a href="{{ route('logout') }}" class="dropdown-item preview-item"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-logout text-danger"></i>
                </div>
            </div>
            <div class="preview-item-content">
                <p class="preview-subject mb-1">Log out</p>
            </div>
        </a>
        <div class="dropdown-divider"></div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
          </li>
        </div>
      </ul>
    </li>
  </ul>
</div>
</nav>
