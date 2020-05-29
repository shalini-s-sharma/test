<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email  }}</p>
                  <p class="designation"></p>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('dashboard') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ route('company.invoice') }}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Invoice</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ route('company.invoice') }}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Company</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link"  href="{{ url('projects') }}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Projects</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('contacts') }}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Issues</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('solution') }}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Team</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('reports') }}">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Report</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/icons/font-awesome.html">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Settings</span>
              </a>
            </li> --}}
          </ul>
        </nav>
        <!-- <script>
          $(document).ready(function() {
          $('.nav-link').click(function(){
              var url= $(this).data('href');
              customAjaxCall(url, '' , function(output){
                changeMainBodyContent(output, 1);
              }, 1);
          });
        });
        </script> -->