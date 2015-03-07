
// Scroll-Animate
jQuery(document).ready(function($) {
	
	$("#link_home").click(function(e) {
    e.preventDefault();
    $.scrollTo('#welcomeSection', 800, {easing:'easeInOutSine', offset:-100});
  });

  $("#link_como_funciona").click(function(e) {
    e.preventDefault();
    $.scrollTo('#howItWorksSection', 800, {easing:'easeInOutSine', offset:-75});
  });

  $("#link_equipo").click(function(e) {
    e.preventDefault();
    $.scrollTo('#TeamSection', 800, {easing:'easeInOutSine', offset:-75});
  });
  
});