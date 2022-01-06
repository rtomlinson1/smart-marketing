@extends('layouts.page')

@section('content')
<div class="content-wrap">
  <section>
    <div class="subpage-header">
      <h1>Modern Website Design</h1>
      <h3>Be fast. Be findable.</h3>
      <a class="primary-button" href="/get-quote">Get Started</a>
    </div>
  </section>
  <section>
    <div class="subpage-main-content">
      <h2>Need a fresh website?</h2>
      <p>It's so important to make a good impression. Are your potential customers able to quickly find what they need to know about you online? If you don't provide authoritative information about yourself online, the internet will try to do it for you, often creating misinformation that is difficult to remove or correct.</p>
      <p>Unfortunately, simply <em>having</em> the correct information is no longer good enough. Studies show that after only 3 seconds <span class="standout">53% of visitors will move on</span> from a website that hasn't loaded. You have to be fast. You have to be engaging.</p>
      <p>On top of all this, your website doesn't exist in a vacuum. You have competition, and everyone wants to be #1 in search results. You don't just have to be good, you have to <span class="standout">be better</span> than your competitors. <strong>That's where we come in.</strong></p>

    </div>
    <div class="subpage-main-content">
      <h2>Design & Build</h2>
      <p>Our designers and developers will work together, identifying the right direction, building a prototype, and diving deep to create a stunning website that defines who you are to your customers. We will work with you to capture the <span class="standout">"voice"</span> of your business, the unique way that you operate that sets you apart from others in your industry. We will challenge you to explicitly define a "why choose us" statement if you haven't already. </p>
    </div>
    <div class="subpage-main-content">
      <h2>Host & Maintain</h2>
      <p>Once you have the perfect design, you need a way to <span class="standout">show it</span> to people. This is done through specialized computers called webservers that run 24/7 "hosting" your website to your clients. We have several options for hosting starting at just $1 a day, on up to custom pricing for dedicated servers with load balancers. For most of our clients, our standard hosting offers more than enough speed and bandwidth. Our standard build process utilizes Wordpress, but we offer custom build services using whatever technologies your project requires.</p>
      <p>Our maintenance packages are customized to your business need as well. Standard maintenance includes plugin and security updates, as well as small updates to your site, such as new slides, photos, or pricing updates. If your site requires large or frequent updates, we will work with you to provide a solution that <span class="standout">adds value</span> to your business.</p>
    </div>
  </section>
  <section>
    <div class="is-flex">
      <div class="imac-outer-wrap">
        <div class="background-cover">

          <div class="imac-wrap">
            <div class="imac">
              <div class="imac-screen">
                <img class="scroll-img-1" src="/bankwithsouthern-mx.jpg" alt="">
              </div>
              <div class="apple-logo">
                <i class="fab fa-apple"></i>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="sb-content project-description">
        <h1>Southern Bank</h1>
        <h3>Core Objective:</h3>
        <p>Smart Marketing was tasked with rebuilding Southern Bank’s entire client-side web presence. Southern Bank was refreshing their branding from the ground up, with new products, a new tone, and even some new colors -- all while maintaining their core values as a local bank with big possibilities.</p>
      </div>
    </div>
  </section>
  <section>
    <h2>Our Favorite Projects</h2>
    <h5>The Landing</h5>
    <h5>Smart Space Office</h5>
    <h5>Southern Bank</h5>
    <h5>Manulife Parking App</h5>
    <h5>See the Ozarks</h5>
    <h5>CoreTN</h5>
  </section>

</div>
<script>
		// init
		var controller = new ScrollMagic.Controller();

		// define movement of panels
		var wipeAnimation = new TimelineMax()
			.fromTo("section.panel.turqoise", 1, {x: "-100%"}, {x: "0%", ease: Linear.easeNone})  // in from left
			.fromTo("section.panel.green",    1, {x:  "100%"}, {x: "0%", ease: Linear.easeNone})  // in from right
			.fromTo("section.panel.bordeaux", 1, {y: "-100%"}, {y: "0%", ease: Linear.easeNone}); // in from top

		// create scene to pin and link animation
		new ScrollMagic.Scene({
				triggerElement: "#pinContainer",
				triggerHook: "onLeave",
				duration: "1000%"
			})
			.setPin("#pinContainer")
			.setTween(wipeAnimation)
			// .addIndicators() // add indicators (requires plugin)
			.addTo(controller);


</script>
<script type="text/javascript">
var image = document.getElementsByClassName('scroll-img-1');
new simpleParallax(image, {
delay: .6,
scale: 1.82,

transition: 'cubic-bezier(0,0,0,1)'
});

</script>
@endsection
