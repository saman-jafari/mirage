@extends('layouts.app')
@section('content')
    <div id="post_page_body">
        @while(have_posts()) @php the_post() @endphp
        @include('partials.content-single-'.get_post_type())
        @endwhile
    </div>
@endsection
