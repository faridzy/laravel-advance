<li>
    <a href="{{url('/')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>
</li>

<li>
    <a href="#"><i class="fa fa-file-pdf-o"></i> <span class="nav-label">Data Master</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li><a href="{{url('/master/user')}}">Pengguna</a></li>
        <li><a href="{{url('/master/role')}}">Peran</a></li>
    </ul>
</li>
<li>
    <a href="{{url('/logout')}}"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
</li>