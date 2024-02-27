jQuery(function() {

  var controller = new ScrollMagic.Controller();

  var tkIllustrtaion = new TimelineMax(); 
  tkIllustrtaion.to('#tk-illustation .gauge .svg .cover', 0.01, {autoAlpha:0, ease:"none"})
  .staggerFrom('#tk-illustation .gauge .ring.outer', 0.4, {strokeDashoffset: 534}, 0.1)
  .staggerFrom('#tk-illustation .gauge .ring.inner', 0.4, {strokeDashoffset:534}, 0.1)
  .staggerFrom('#tk-illustation .gauge .number', 0.4, {autoAlpha:0, ease: "none"}, 0.1, '-=0.3')
  .staggerFrom('#tk-illustation .gauge .title', 0.4, {autoAlpha:0, ease: "none"}, 0.1, '-=0.2')

  .staggerFrom('#tk-illustation .bar-chart', 0.4, {scaleX: 0.01, autoAlpha: 0, transformOrigin:"0% 0%", ease: "power3.out"}, 0.15)
  .staggerFrom('#tk-illustation .bar-chart .bar-percent', 0.4, {scaleX: 0.01, autoAlpha: 0, transformOrigin:"0% 0%", ease: "power3.out"}, 0.15)
  



  
  ;
  
  new ScrollMagic.Scene({
    triggerElement: '#tk-illustation',
    triggerHook: 'onCenter',
    duration: 0,
    offset: -50,
    reverse:false
  })
  .setTween(tkIllustrtaion)
  //.addIndicators()
  .addTo(controller);


});