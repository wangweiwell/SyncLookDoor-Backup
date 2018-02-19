<header>
  <nav class="navbar navbar-expand-sm bg-dark navbar-primary">
  <!-- Brand -->
  <a id="logo" class="navbar-brand" style="margin-left:100px;" href="{{ route('home') }}">SyncLookDoor</a>
  <!-- Links -->
  <div class="collapse navbar-collapse justify-content-end" id="nav-content">
  <ul class="navbar-nav" style="margin-right:100px;">
    @if (Auth::check())
     <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">用户列表 </a></li>
     <li class="dropdown  class="nav-item"">
       <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
         {{ Auth::user()->name }} <b class="caret"></b>
       </a>
       <ul class="dropdown-menu">
         <li  class="nav-item"><a class="nav-link" href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
         <li  class="nav-item"><a class="nav-link" href="{{ route('users.edit', Auth::user()->id) }}">编辑资料</a></li>
         <li class="divider  class="nav-item""></li>
         <li  class="nav-item">
           <a id="logout" class="nav-link" href="#">
             <form action="{{ route('logout') }}" method="POST">
               {{ csrf_field() }}
               {{ method_field('DELETE') }}
               <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
             </form>
           </a>
         </li>
       </ul>
     </li>
   @else
     <li  class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
     <li  class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
   @endif
  </ul>
  </nav>
</header>
