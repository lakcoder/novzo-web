@extends('layout')

@section('page_title')
  Dashboard
@endsection

@section('page_content')
<div>
  <div class="prof-card">
    <div class="prof-content">
      <div class="profile-1">
        <img src="img\user-logo.png" alt="Profile Image" class="prof-user-img">
        <p>Lakshya Shukla <button>Follow</button></p>
        <p style="color:#FFA500">Novice</p>
      </div>
      <div class="profile-2">
        <div class="icon-img">
          <img src="img/icons/post.png" alt="Profile Image" class="icon-img">
          <p><b style="font-size:2.1rem">12</b><br>Contributions</p>
          <div style="text-align:right;padding-top:2rem;">

          </div>
        </div>
        <div class="icon-img">
          <img src="img/icons/books.png" alt="Profile Image" class="icon-img">
          <p><b style="font-size:2.1rem">7</b><br>Books Read</p>
          <div  style="text-align:right;padding-top:2rem;">
            <button>Message</button>
          </div>
        </div>
        <div class="icon-img">
          <img src="img/icons/wishlist.png" alt="Profile Image" class="icon-img">
          <p><b style="font-size:2.1rem">19</b><br>Wishlist</p>
        </div>
      </div>
      <div class="profile-3">
        <div>
            <h3>Bio</h3>
            <p style="font-size:1rem;">The BookMan<br>BookMan brings you Raw Quotes directly from the Great Books & People around the Globe.<br>Follow to get wisdom, knowledge & One step ahead. </p>
        </div>
      </div>
    </div>
  </div>


  <div class="card profile-nav-card">
    <p class="profile-nav-text">Profile</p>
    <p class="profile-nav-text">My Bucket List</p>
    <p class="profile-nav-text">Profile</p>
    <p class="profile-nav-text">Profile</p>
    <p class="profile-nav-text hand" id="groups_but">My Groups
      <div id="groups">
        <p class="list">Fiction</p>
        <p class="list">Fiction</p>
        <p class="list">Fiction</p>
      </div>
    </p>
  </div>
  <div class="novreads">
    <p class="novreads-text">Your <b>posts</b>
      <!-- <form class="new-post" action="/action_page">
        <input type="search" name="q" class="nav-input-search border-50 ti-plus" placeholder="Add a post..." />
      </form> -->
    </p>
  </div>
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
