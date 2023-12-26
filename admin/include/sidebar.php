  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

    
      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="../users/create.php">
              <i class="bi bi-circle"></i><span>Add user</span>
            </a>
          </li>
          <li>
            <a href="../users/index.php" class="active">
              <i class="bi bi-circle"></i><span>Manage Users</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

    
      <li class="nav-item">
        <a class="nav-link " data-bs-target="#services" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="services" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="../services/create.php">
              <i class="bi bi-circle"></i><span>Add service</span>
            </a>
          </li>
          <li>
            <a href="../services/index.php" class="active">
              <i class="bi bi-circle"></i><span>Manage services</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

    </ul>

  </aside><!-- End Sidebar-->
