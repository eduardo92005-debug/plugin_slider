class HandleSlide {
    constructor({slideDescriptionClass, slideItemClass, nextSlideClass, onReadyUpdateElements = false}) {
        this.slideDescriptionClass = slideDescriptionClass;
        this.slideItemClass = slideItemClass;
        this.nextSlideClass = nextSlideClass;
        this._arrayData = [];
        this.onReadyUpdateElements = onReadyUpdateElements;
        this.isMobile = false;
        this.isMobileActivated();
    }

    get arrayData() {
        return this._arrayData;
    }

    set arrayData(newArrayData) {
        this._arrayData = newArrayData;
    }

    isMobileActivated() {
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
            || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
            this.isMobile = true;
        };
        return this.isMobile;
    }

    generateArrayData() {
        let arrayModel = [
            {
                'img': 'https://via.placeholder.com/640x360.jpeg',
                'post': 'https://crecise.gov.br/2023/04/18/creci-sergipe-realiza-palestras-sobre-vicios-construtivos-e-impactos-na-corretagem-imobiliaria/',
                'data-desktop': '22/07/2009',
                'titulo-desktop': '5',
                'resumo-desktop': 'resumoblablabal',
                'data-mobile': '27/07 2009',
                'titulo-mobile': '5',
                'resumo-mobile': 'resumoblablabal',
            },
            {
                'img': 'https://cdn.ahnegao.com.br/wp-content/uploads/2012/12/manequim.jpg',
                'post': 'https://crecise.gov.br/2023/04/19/anuidade-2023-creci-sergipe-autoriza-parcelamento-sem-juros/',
                'data-desktop': '22/07/2009',
                'titulo-desktop': '5',
                'resumo-desktop': 'resumoblablabal',
                'data-mobile': '27/07 2009',
                'titulo-mobile': '5',
                'resumo-mobile': 'resumoblablabal',
            },
            {
                'img': 'https://i.pinimg.com/originals/23/9c/05/239c05c5dcbf173b8642432fe8e460f1.jpg',
                'post': 'https://crecise.gov.br/2023/04/20/creci-sergipe-tem-contas-do-primeiro-trimestre-aprovadas-em-2a-sessao-plenaria-regional/',
                'data-desktop': '22/07/2009',
                'titulo-desktop': '5',
                'resumo-desktop': 'resumoblablabal',
                'data-mobile': '27/07 2009',
                'titulo-mobile': '5',
                'resumo-mobile': 'resumoblablabal',
            },
            {
                'img': 'https://pbs.twimg.com/profile_images/1345980086797946883/6lFdDFD9_400x400.jpg',
                'post': 'https://crecise.gov.br/2023/04/24/mentes-vencedoras-corretores-de-imoveis-tem-desconto-especial-em-treinamento-de-carlos-catuipe/',
                'data-desktop': '22/07/2009',
                'titulo-desktop': '5',
                'resumo-desktop': 'resumoblablabal',
                'data-mobile': '27/07 2009',
                'titulo-mobile': '5',
                'resumo-mobile': 'resumoblablabal',
            },
            {
                'img': 'https://cdn.ahnegao.com.br/wp-content/uploads/2012/12/manequim.jpg',
                'post': 'https://crecise.gov.br/2023/04/25/fiscalizacao-do-creci-se-fecha-primeiro-trimestre-com-trabalho-intenso-em-condominios-e-no-interior-sergipano/',
                'data-desktop': '22/07/2009',
                'titulo-desktop': '5',
                'resumo-desktop': 'resumoblablabal',
                'data-mobile': '27/07 2009',
                'titulo-mobile': '5',
                'resumo-mobile': 'resumoblablabal',
    
            },
        ]
        this._arrayData = arrayModel;
        return this._arrayData;
    }
    
    validateImage(src){
        // const size = src.length;
        // if(size <= 3){
        //     const placeholder_url = "<?php echo SLIDER_URL . classes/imagens/placeholder.png";
        //     src = placeholder_url;
        // }
        return src;
    }

    validateText(text){
        const size = text.length;
        if(size <= 3){
            text = "Sem dados";
        }
        return text;
    }

    updateMainSlideDesktop() {
        $(`.active ${this.slideDescriptionClass} > .slider__description__title`)[0].innerText = this.validateText(this._arrayData[0]["titulo-desktop"]);
        $(`.active ${this.slideDescriptionClass} > .slider__description__resume `)[0].innerText = this.validateText(this._arrayData[0]["resumo-desktop"]);
        $(`.slider`)[0].href= this._arrayData[0]["post"];
        $(`${this.slideItemClass} .slider__img`)[0].src = this.validateImage(this._arrayData[0]["img"]);
    }

    updateSideElementsSlideDesktop(){
        let sizeArray = this._arrayData.length;
        for (let n = 0; n < sizeArray - 1; n++) {
            $(` ${this.nextSlideClass}`)[n].href = this._arrayData[n + 1]["post"];
            $(` ${this.nextSlideClass} > .next-slides__description__title span`)[n].innerText = this.validateText(this._arrayData[n + 1]["titulo-desktop"]);
            $(` ${this.nextSlideClass} > .next-slides__description__date > span`)[n].innerText = this._arrayData[n + 1]["data-desktop"];
        }
    }

    updateMainSlideMobile() {
        $(`.active ${this.slideDescriptionClass} > .slider__description__title`)[0].innerText = this.validateText(this._arrayData[0]["titulo-mobile"]);
        $(`.active ${this.slideDescriptionClass} > .slider__description__resume `)[0].innerText = this.validateText(this._arrayData[0]["resumo-mobile"]);
        $(`.slider`)[0].href= this._arrayData[0]["post"];
        $(`${this.slideItemClass} .slider__img`)[0].src = this.validateImage(this._arrayData[0]["img"]);
    }

    updateSideElementsSlideMobile(){
        let sizeArray = this._arrayData.length;
        for (let n = 0; n < sizeArray - 1; n++) {
            $(` ${this.nextSlideClass}`)[n].href = this._arrayData[n + 1]["post"];
            $(` ${this.nextSlideClass} > .next-slides__description__title span`)[n].innerText = this.validateText(this._arrayData[n + 1]["titulo-mobile"]);
            $(` ${this.nextSlideClass} > .next-slides__description__date > span`)[n].innerText = this._arrayData[n + 1]["data-mobile"];
        }
    }

    immediateUpdateAllElementsSlide(){
        console.log(this.isMobile);
        if(this.onReadyUpdateElements == true && this.isMobile == false){
            this.updateMainSlideDesktop();
            this.updateSideElementsSlideDesktop();
        }

        if(this.onReadyUpdateElements == true && this.isMobile == true){
            this.updateMainSlideMobile();
            this.updateSideElementsSlideMobile();
        }
    }

    circularDynamic() {
        this._arrayData.push(this._arrayData.shift());
        this.updateSideElementsSlideDesktop();
        this.updateMainSlideDesktop();
        
    }


}