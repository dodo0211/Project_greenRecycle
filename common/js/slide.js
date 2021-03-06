function slide_func() {
    // 객체변수 선언
    let slideshow = document.querySelector("div.slideshow");
    let slideshowSlides = document.querySelector("div.slideshow_slides");
    let slides = document.querySelectorAll("div.slideshow_slides a");
    let prev = document.querySelector(".prev");
    let next = document.querySelector(".next");
    let slideCount = slides.length;
    let currentIndex = 0;   //슬라이드 현재 위치 카운트
    let timer;  //타이머 설정 변수

    // 슬라이드를 가로로 배열
    for(let i=0; i<slideCount; i++) {
        let newLeft = i*100 + '%';
        slides[i].style.left = newLeft;
    }

    // 슬라이드 이동
    function gotoSlide(index) {
        currentIndex = index;
        let newLeft = -(currentIndex * 100) + '%';
        slideshowSlides.style.left = newLeft;
        slideshowSlides.classList.add('animated');

        (currentIndex === 0)?(prev.classList.add('disabled')):(prev.classList.remove('disabled'));
        (currentIndex === 4)?(next.classList.add('disabled')):(next.classList.remove('disabled'));
    }

    // 슬라이드 초기화 위치
    gotoSlide(0);

    // 좌우 네비게이션바 이벤트핸들러 처리
    prev.addEventListener('click', function(e) {
        e.preventDefault();
        let index = currentIndex;
        index=(index === 0)? slideCount-1: index-1;        
        gotoSlide(index);
    });
    
    // 좌우 네비게이션바 이벤트핸들러 처리
    next.addEventListener('click', function(e) {
        e.preventDefault();
        let index = currentIndex;
        index=(index === (slideCount-1))? 0: index+1;        
        gotoSlide(index);
    });

    // 자동 타이머 기능셋팅
    function startTimer(){
        timer = setInterval(function(){
            let index = (currentIndex + 1) % slideCount;
            gotoSlide(index);
        },3000 );
    }
    startTimer();

    // 자동타이머 정지
    slideshowSlides.addEventListener('mouseenter', function(){  
        clearInterval(timer);   //타이머를 정지
    });
    
    // 자동타이머 다시 시작
    slideshowSlides.addEventListener('mouseleave', function(){  
        startTimer();
    });
    
    console.log(timer);

}//end of slide_func

slide_func();

function Show(node) {
    var that = this;
    that.node = node;
    that.frequency = 3000;
    that.position = -1;
    that.progress = (function () {
      var slides = that.node.querySelectorAll(".slide");
      that.position = (that.position + 1) % slides.length;
      for(var i=0; i<slides.length;i++)
      {
        var slide = slides[i];
        if(i<that.position)
          slide.style.left = '-100%';
        else if(i==that.position)
          slide.style.left = 0;
        else
          slide.style.left = '100%';
      }
      that.start();
    });
    that.stop = (function (event) {
        clearTimeout(that.current_timer);
        that.current_timer = null;
    });
    that.start = (function (event) {
        that.current_timer = setTimeout(that.progress, that.frequency);
    });
    that.node.onmouseover = that.stop;
    that.node.onmouseout = that.start;
    that.current_timer = null;
    that.start();
    return that;
}

function install(root) {
    var slideshows = root.querySelectorAll(".slideshow");
    var shows = [];
    for (var si=0;si<slideshows.length;si++){
      console.log(si);
      shows.push(new Show(slideshows[si]));
    }
    return shows;
}

// window.onload = ( function(){
//     window.slide_shows = install(document);
// });