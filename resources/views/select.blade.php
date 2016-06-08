@extends('layout')
@section('content')
  <div class="verticalAlign"></div>
  <div class="container">
    <div class="row">
      <div id="sortable">
          <a class="buttonCreate" href="/cv/create/{{Auth::user()->id}}/1"><div class="section col m4"><div class="template1 z-depth-1"></div></div></a>
          <a class="buttonCreate" href="/cv/create/{{Auth::user()->id}}/2"><div class="section col m4"><div class="template2 z-depth-1"></div></div></a>
          <a class="buttonCreate" href="/cv/create/{{Auth::user()->id}}/3"><div class="section col m4"><div class="template3 z-depth-1"></div></div></a>
      </div>
    </div>
  </div>
  @endsection
