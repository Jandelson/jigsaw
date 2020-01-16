@extends('_layouts.master')

<?php $isPost = true; ?>

@section('body')
<section class="section">
    <div class="container">
      <h1 class="title">
        {{ $page->author }}
      </h1>
    </div>
  </section>
@endsection
