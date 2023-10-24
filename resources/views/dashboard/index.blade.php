@extends('dashboard.partials.main')

@section('title')
  Monitoring | Dashboard
@endsection

@section('dashboard')
<main class="relative w-full sm:w-[600px] mx-auto h-screen">
  {{-- dashboard content --}}
  <div class="px-10 py-5">

  </div>

  {{-- call footer --}}
  @include('dashboard.partials.footer')
</main>
@endsection
