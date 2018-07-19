(function() {
  $(document).foundation()
  // console.log('dsdsds');
  var navigation = document.querySelectorAll('.nav');
  var signin = document.querySelector('#signin');
  var menu = document.querySelector('#main-menu');
  var popupsign = document.querySelector('#signinpop');
  var appliedClass;


  function popup(){
    var width = $(window).width();

    if(width < '1024'){
      menu.style.display = 'none';
    }else{
      menu.style.display = 'block';
    }

    if(popupsign.style.display == "none"){
      popupsign.style.display = "block";
      window.scrollTo(0, 0);
    }else{
      popupsign.style.display = "none";
    }
  }

  var nav = document.querySelector('#main-menu');
  var links = nav.querySelectorAll('a');

  function jumpto(e) {
    e.preventDefault();
    //console.log(this.id);
    var number = this.id;
    TweenLite.to(window, .3, {scrollTo:{y:".section" + number, offsetY:80}});

  }
  links.forEach(function(child){
    child.addEventListener('click', jumpto, false);
  });


  signin.addEventListener('click', popup, false);
  window.addEventListener("load", popup, false);
  })();
