<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
    
          <li class="nav-item <?php if($title == "TO-DO-LIST" || $title == 'EDIT-TO-DO-LIST' || $title == 'UPDATE-TO-DO-LIST'){echo "active";}else{echo"";} ?>">
            <a class="nav-link" href="{{url('list')}}">
             <i class="typcn typcn-th-small-outline menu-icon"></i>
              <span class="menu-title">LIST</span>
            </a>
          </li>           
          <li class="nav-item <?php if($title == "ADD-TO-DO-LIST"){echo "active";}else{echo"";} ?>">
            <a class="nav-link" href="{{url('add')}}">
             <i class="typcn typcn-th-small-outline menu-icon"></i>
              <span class="menu-title">ADD</span>
            </a>
          </li>    <!--        
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="typcn typcn-key-outline menu-icon"></i>
              <span class="menu-title">Password Change</span>
            </a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="typcn typcn-mail menu-icon"></i>
              <span class="menu-title">Query</span>
            </a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="typcn typcn-mortar-board menu-icon"></i>
              <span class="menu-title">Live Classes</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="typcn typcn-mortar-board menu-icon"></i>
              <span class="menu-title">Clasess Histroy</span>
            </a>
          </li> -->
        </ul>
      </nav>