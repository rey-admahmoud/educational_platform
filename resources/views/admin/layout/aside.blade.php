<aside class="left-sidebar" data-sidebarbg="skin5">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="pt-4">
        <li class="sidebar-item">
          <a
            class="sidebar-link waves-effect waves-dark sidebar-link"
            href="#"
            aria-expanded="false"
            ><i class="mdi mdi-view-dashboard"></i
            ><span class="hide-menu">Home</span></a
          >
        </li>
        <li class="sidebar-item">
          <a
            class="sidebar-link has-arrow waves-effect waves-dark"
            href="javascript:void(0)"
            aria-expanded="false"
            ><i class="mdi mdi-receipt"></i
            ><span class="hide-menu">courses </span></a
          >
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a href="{{ route('cars.index') }}" class="sidebar-link"
                ><i class="mdi mdi-note-outline"></i
                ><span class="hide-menu"> All courses </span></a
              >
            </li>
            <li class="sidebar-item">
              <a href="{{ route('cars.create') }}" class="sidebar-link"
                ><i class="mdi mdi-note-plus"></i
                ><span class="hide-menu"> Add course </span></a
              >
            </li>
            <li class="sidebar-item">
              <a href="{{ route('cars.archive') }}" class="sidebar-link"
                ><i class="mdi mdi-note-plus"></i
                ><span class="hide-menu"> Archive </span></a
              >
            </li>
      </ul>
      <ul id="sidebarnav">
        <li class="sidebar-item">
          <a
            class="sidebar-link has-arrow waves-effect waves-dark"
            href="javascript:void(0)"
            aria-expanded="false"
            ><i class="mdi mdi-receipt"></i
            ><span class="hide-menu">categories </span></a
          >
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a href="{{ route('category.index') }}" class="sidebar-link"
                ><i class="mdi mdi-note-outline"></i
                ><span class="hide-menu"> All categories </span></a
              >
            </li>
            <li class="sidebar-item">
              <a href="{{ route('category.create') }}" class="sidebar-link"
                ><i class="mdi mdi-note-plus"></i
                ><span class="hide-menu"> Add category </span></a
              >
            </li>
            
            <li class="sidebar-item">
              <a href="" class="sidebar-link"
                ><i class="mdi mdi-note-plus"></i
                ><span class="hide-menu">archive</span></a
              >
            </li>
        
      </ul>
    </li>
      </ul>
      <ul id="sidebarnav">
        <li class="sidebar-item">
          <a
            class="sidebar-link has-arrow waves-effect waves-dark"
            href="javascript:void(0)"
            aria-expanded="false"
            ><i class="mdi mdi-receipt"></i
            ><span class="hide-menu">categories </span></a
          >
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a href="{{ route('category.index') }}" class="sidebar-link"
                ><i class="mdi mdi-note-outline"></i
                ><span class="hide-menu"> All categories </span></a
              >
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link"
                ><i class="mdi mdi-note-plus"></i
                ><span class="hide-menu"> Add category </span></a
              >
            </li>
            
            <li class="sidebar-item">
              <a href="#" class="sidebar-link"
                ><i class="mdi mdi-note-plus"></i
                ><span class="hide-menu">archive</span></a
              >
            </li>
        
      </ul>
    </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>