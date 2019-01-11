 <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">

<!-- admin menu.......................             -->

                    @if(Request::is('admin*'))
                        <li><a href="{{route('admin.dashboard')}}"><i class="{{Request::is('admin/dashboard')? 'active':''}} icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>   
                        <li><a href="{{route('admin.post.create')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> Add Post</span></a></li>
                        <li><a href="{{route('admin.course.create')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Courses</span></a></li>
                        <li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> Assignments</span></a></li>
                        <li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Attendents</span></a></li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Students</span><span class="label label-important"> 3 </span></a>
                            <ul>
                                <li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
                                <li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
                                <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
                            </ul>   
                        </li>
                        @endif

<!-- students menu.................... -->

                    @if(Request::is('student*'))
                        <li><a href="{{route('student.dashboard')}}"><i class="{{Request::is('student/dashboard')? 'active':''}} icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>

                        
                    @endif
                    </ul>
                </div>
            </div>