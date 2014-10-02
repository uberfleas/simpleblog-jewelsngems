<div class="jng-header">
	<div class="masthead">
	<h1 id="big-h1">Joyous Health</h1>
	</div>
	<div class="nav">
		<ul class="nav nav-pills">
  			<li><a class="btn-sm btn-info" href="/">Home</a></li>
  			@if (Auth::check())
  				<li><a class="btn-sm btn-info" href="/posts">Posts</a></li>
  			@endif
  			<li><a class="btn-sm btn-info" href="/contact">Contact Me</a></li>
  			<li><a class="btn-sm btn-info" href="/users">Login</a></li>
		</ul>
	</div><!-- .nav -->
</div><!-- jng-header -->