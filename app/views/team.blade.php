@extends('layouts.master')

@section('main-content')
	<div class="hideMain">
		<h1>Meet Our Web Application Team</h1><hr>
		<div class="row">
			<div class="col-md-3">
				<img src="/img/leslie.jpg" alt="Leslie Tolbert" class="img-rounded img-responsive team-pics">
			</div>
			<div class="col-md-6">
				<h2>Leslie Tolbert</h2>
				<p><em>I have a BFA in Communication Design from Texas State University, giving me a wide exposure and range of graphic design, marketing, branding, and artistic skills.  I've very much enjoyed learning all aspects of web develoment and programming during my time at Codeup and I am looking forward to continuing my education and experience in the field.  I'd like to find work that promotes growth, creativity, and ingenuity and have a particular interest in User Experience design.  Have a great project in mind or need help with one in progress?  Let's work together to build great things and make this world a better place!</em></p>
				<p><strong>CodeUp Student Profile:</strong> <a href="http://www.codeup.com/students/leslie-tolbert/" target="_blank">Leslie Tolbert</a></p>
				<p><strong>Personal Website:</strong> <a href="http://lesssliemarie.me/" target="_blank">lesssliemarie.me</a></p>
			</div>
			<div class="col-md-3"></div>
		</div><hr>
		
		<div class="row">
			<div class="col-md-3">
				<img src="/img/ken.jpg" alt="Ken Priest" class="img-rounded img-responsive team-pics">
			</div>
			<div class="col-md-6">
				<h2>Ken Priest</h2>
				<p><em>I am a U.S. Air Force Veteran who hold's a Master's of Health Administration and a Bachelor's of Business Administration.  Learning programming has been a dream of mine since I was a kid.  I am still amazed how far I have come in such a short amount of time.  The wide scope of experience I have from various positions I have held as a paralegal in the Judge Advocate General's Department has fostered my love for process improvement and efficiency.  I am passionate about finding better ways to accomplish processes and making it easier for others to accomplish their jobs.  Being a programmer gives me an incredible weapon in my arsenal to help, not only improve processes, but also solve problems and help others bring their ideas to life.  My main objective going forward is to find a great Team and Culture to work in that will allow me to grow my coding skills and continue to learn.</em></p>
				<p><strong>CodeUp Student Profile:</strong> <a href="http://www.codeup.com/students/ken-priest/" target="_blank">Ken Priest</a></p>
				<p><strong>Personal Website:</strong> <a href="http://kenpriest.me" target="_blank">kenpriest.me</a></p>
			</div>
			<div class="col-md-3"></div>
		</div><hr>
		
		<div class="row">
			<div class="col-md-3">
				<img src="/img/brandon.jpg" alt="Brandon Beidel" class="img-rounded img-responsive team-pics">
			</div>
			<div class="col-md-6">
				<h2>Brandon Beidel</h2>
				<p><em>I'm a former management consultant, turned web developer.  My prior experience has focused on business case development, financial modeling and process design across clients and industries.  Within web and software development, I am most interested in making things that are data driven, purposeful and that fix real problems.  I am most intrigued by positions that would allow for continued development of both my technical skills and business acumen.  I love to challenge myself, and seek out opportunities to tackle tough problems.</em></p>
				<p><strong>CodeUp Student Profile:</strong> <a href="http://www.codeup.com/students/brandon-beidel/" target="_blank">Brandon Beidel</a></p>
				<p><strong>Personal Website:</strong> <a href="http://bcbeidel.com" target="_blank">bcbeidel.com</a></p>
			</div>
			<div class="col-md-3"></div>
		</div>

	</div>
@stop

@section('bottomscript')
<script>
  	$(document).ready(function() {
    	$('.hideMain').fadeIn(1500);
	});
</script>
@stop