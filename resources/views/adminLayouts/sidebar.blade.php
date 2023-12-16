 <div class="sidebar" id="sidebar">
     <div class="sidebar-inner slimscroll">
         <div id="sidebar-menu" class="sidebar-menu">
             <ul>
                 <li class="menu-title">Main</li>
                 <li class="{{ request()->is('admin/dashboard') ? 'active' : null }}">
                     <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                 </li>

                 @if (auth()->user()->status == 'admin')
                     <li class="submenu">
                         <a href="#"><i class="fa fa-user"></i> <span> Users </span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="{{ url('admin/users') }}">Users List</a></li>

                         </ul>
                     </li>
                 @endif


                 <li>
                     <a href="{{ url('admin/chat') }}"><i class="fa fa-comments"></i> <span>Chat</span> <span
                             class="badge badge-pill bg-primary float-right">5</span></a>
                 </li>
                 <li class="submenu">
                     <a href="#"><i class="fa fa-envelope"></i> <span> Email</span> <span
                             class="menu-arrow"></span></a>
                     <ul style="display: none;">
                         <li><a href="compose.html">Compose Mail</a></li>
                         <li><a href="inbox.html">Inbox</a></li>
                         <li><a href="mail-view.html">Mail View</a></li>
                     </ul>
                 </li>

                 @if (auth()->user()->status == 'admin')
                     <li class="{{ request()->is('admin/settings*') ? 'active' : null }}">
                         <a href="{{ url('admin/settings') }}"><i class="fa fa-cog"></i> <span>Settings</span></a>
                     </li>
                 @endif








             </ul>
         </div>
     </div>
 </div>
