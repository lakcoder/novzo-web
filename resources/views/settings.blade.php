@extends('layout')

@section('page_title')
  Settings
@endsection

@section('page_content')

  <div class="settings-card">
    <p class="profile-nav-text">Profile</p>
    <p class="profile-nav-text">My Bucket List</p>
    <p class="profile-nav-text">Profile</p>
    <p class="profile-nav-text">Profile</p></p>
  </div>

  <!-- <div class="novreads">
    <p class="novreads-text">Your <b>posts</b>
    </p>
  </div> -->

  <div class="novpost">
    <div class="post-left">
      <img src="img\user-logo.png" alt="user-img" class="user-img"/>
    </div>
    <div class="post-right">
      <p class="ti-line-dashed"></p>
    </div>
    <div class="post-middle">
      <p class="user-name">Lakshya Shukla <b class="user-handle">@lakcoder<br>10:15 | 8 MAR</b> </p>
      <!-- <p class="post-time">10:15 | 8 MAR</p> -->
      <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in<span id="dots">...</span><span style="display:none" id="more"> reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span> </p>
      <a style="cursor:pointer" onclick="readmore()" id="btn"><b>Read more</b></a>
      <p style="font-size:1.2rem;" class="ti-heart"></p>
    </div>
  </div>
  <div class="novpost normal-post">
    <div class="post-left">
      <img src="img\user-logo.png" alt="user-img" class="user-img"/>
    </div>
    <div class="post-right">
      <p class="post-time">10:15</p>
      <p class="post-time">8 MAR</p>
    </div>
    <div class="post-middle">
      <p class="user-name">Lakshya Shukla <b class="user-handle">@lakcoder</b> </p>
      <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
  <div class="novpost normal-post">
    <div class="post-left">
      <img src="img\user-logo.png" alt="user-img" class="user-img"/>
    </div>
    <div class="post-right">
      <p class="post-time">10:15</p>
      <p class="post-time">8 MAR</p>
    </div>
    <div class="post-middle">
      <p class="user-name">Lakshya Shukla <b class="user-handle">@lakcoder</b> </p>
      <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
  <div class="novpost normal-post">
    <div class="post-left">
      <img src="img\user-logo.png" alt="user-img" class="user-img"/>
    </div>
    <div class="post-right">
      <p class="post-time">10:15</p>
      <p class="post-time">8 MAR</p>
    </div>
    <div class="post-middle">
      <p class="user-name">Lakshya Shukla <b class="user-handle">@lakcoder</b> </p>
      <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</div>

@endsection
