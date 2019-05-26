@extends('layout')

@section('page_title')
  Exchanger
@endsection

@section('page_content')
<div class="" style="margin-right:14%;margin-left:15%">
  <div class="exchangereads">
    <p class="novreads-index"><b>Exchange</b></p>
  </div>
  <form class="form-style" action="exchanger.php" method="post">
      <div class="col-lg-6 col-md-6 exchange-card">
        <h2>Books you want ro read</h2><hr>
        <p>Select number of books:
          <select id="want" name="want">
            <option value="" selected disabled hidden>0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <div id="wantArea"></div>
        </p>
      </div>
      <div class="col-lg-6 col-md-6 exchange-card">
        <h2>Books you want to give</h2><hr>
        <p>Select number of books:
          <select id="give" name="give">
            <option value="" selected disabled hidden>0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <div id="giveArea"></div>
        </p>
      </div>
    <button type="submit" class="btn" name="exchange" style="float:center"><p>Submit</p></button>
  </form>
</div>
@endsection
