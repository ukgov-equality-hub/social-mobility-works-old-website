jQuery(function() {

  var controller = new ScrollMagic.Controller();

  var saIllustrtaion = new TimelineMax(); 
  saIllustrtaion.to('#diversity_strategy-svg .cover', 0.01, {autoAlpha:0, ease:"none"})
  .staggerFrom('#pane-inner-circle path, #pane-back-circle path', 0.3, {scale: 0.5, autoAlpha: 0, transformOrigin:"50% 50%", ease: "back.out(2)"}, -0.15)
  .from('#pane-outer path', 0.4, {autoAlpha: 0}, '-=0.2')
  .staggerFrom('#diversity_strategy-svg #pane-text path', 0.05, {autoAlpha:0, ease: "none"},0.05, '-=0.5')
  .add('fan', '-=0.8')
  .from('#pane1-bg', 0.5, {x: '+=80px', y: '-=80px', scale: 0.3, autoAlpha:0, transformOrigin:"100% 0%", ease: "power3.out"}, 'fan')
  .from('#pane2-bg', 0.5, {x: '+=0px', y: '-=80px', scale: 0.3, autoAlpha:0, transformOrigin:"100% 0%", ease: "power3.out"}, 'fan+=0.1')
  .from('#pane3-bg', 0.5, {x: '+=0px', y: '-=80px', scale: 0.3, autoAlpha:0, transformOrigin:"0% 0%", ease: "power3.out"}, 'fan+=0.2')
  .from('#pane4-bg', 0.5, {x: '-=80px', y: '-=80px', scale: 0.3, autoAlpha:0, transformOrigin:"0% 0%", ease: "power3.out"}, 'fan+=0.3')
  .staggerFrom('#pane1-icon, #pane2-icon, #pane3-icon, #pane4-icon', 0.2, {autoAlpha:0, ease: "none"}, 0.1, '-=0.4')
  .staggerFrom('#pane1-no, #pane2-no, #pane3-no, #pane4-no', 0.2, {autoAlpha:0, ease: "none"}, 0.1, '-=0.4')


  
  ;
  
  new ScrollMagic.Scene({
    triggerElement: '#diversity_strategy-svg',
    triggerHook: 'onCenter',
    duration: 0,
    offset: -50,
    reverse:false
  })
  .setTween(saIllustrtaion)
  //.addIndicators()
  .addTo(controller);


});