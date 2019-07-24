window.addEventListener('load', function () {
    sliderStart();
  });
  
  function sliderStart() {
  
    const slide = document.getElementById('slider-wrap');      //スライダー親
    const slideItem = slide.querySelectorAll('.slider-item');   //スライド要素
    const totalNum = slideItem.length - 1;                     //スライドの枚数を取得
    const FadeTime = 2000;                                     //フェードインの時間
    const IntarvalTime = 7000;                                 //クロスフェードさせるまでの間隔
    let actNum = 0;                                            //現在アクティブな番号
  
  
    // スライドの1枚目をフェードイン
    slideItem[0].classList.add('Show_', 'LeftToRight_');
  
    // 処理を繰り返す
    setInterval(() => {
      if (actNum < totalNum) {
  
        let nowSlide = slideItem[actNum];
        let nextSlide = slideItem[++actNum];
  
        //.show_削除でフェードアウト
        nowSlide.classList.remove('Show_');
        // と同時に、次のスライドがズームしながらフェードインする
        nextSlide.classList.add('Show_', 'LeftToRight_');
        //フェードアウト完了後、.LeftToRight_削除
        setTimeout(() => {
          nowSlide.classList.remove('LeftToRight_');
        }, FadeTime);
  
      } else {
  
        let nowSlide = slideItem[actNum];
        let nextSlide = slideItem[actNum = 0];
  
        //.show_削除でフェードアウト
        nowSlide.classList.remove('Show_');
        // と同時に、次のスライドがズームしながらフェードインする
        nextSlide.classList.add('Show_', 'LeftToRight_');
        //フェードアウト完了後、.LeftToRight_削除
        setTimeout(() => {
          nowSlide.classList.remove('LeftToRight_');
        }, FadeTime);
  
      }
      ;
    }, IntarvalTime);
  
  }
  
  