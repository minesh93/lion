@include('theme::header')

<section id="hero">
	<h1>{{$post->name}}</h1>
</section>

<section class="container">
	{!! editorContent($post->content) !!}
</section>

@include('theme::footer')