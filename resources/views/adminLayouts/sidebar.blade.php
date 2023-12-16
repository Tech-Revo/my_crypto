 <div class="sidebar" id="sidebar">
     <div class="sidebar-inner slimscroll">
         <div id="sidebar-menu" class="sidebar-menu">
             <ul>
                 <li class="menu-title">Main</li>
                 <li class="{{ request()->is('admin/dashboard') ? 'active' : null }}">
                     <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                 </li>

                 @if (auth()->user()->status == 'admin')
                     <li class="submenu {{ request()->is('admin/users*') ? 'active' : null }}">
                         <a href="#"><i class="fa fa-user"></i> <span> Users </span> <span
                                 class="menu-arrow"></span></a>
                         <ul style="display: none;">
                             <li><a href="{{ url('admin/users') }}">Client List</a></li>

                         </ul>
                     </li>
                 @endif

                  @if (auth()->user()->status == 'admin')
                     <li class="{{ request()->is('admin/contact_us') ? 'active' : null }}">
                         <a href="{{ url('admin/contact_us') }}"><i class='bx bxs-phone-call'></i> <span>Contact Us</span></a>
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
                         <li><a href="{{url('admin/email/compose')}}">Compose Mail</a></li>
                         <li><a href="{{url('admin/email/send-email')}}">View Send Email</a></li>
                         <li><a href="{{url('admin/email/trash')}}">View Trash</a></li>
                         
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
