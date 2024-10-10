const imgBanner =['fotos/flow21.png','fotos/flow31.png',
    'fotos/flow.png'];
    let fotoInicial = 0;

    function slider(){
      const banner = document.getElementById('banner');
      banner.style.backgroundImage = `url('${imgBanner[fotoInicial]}')`;
      fotoInicial++;
      if(fotoInicial >= imgBanner.length){
        fotoInicial = 0;
      }
    }

    setInterval(slider, 5000)
