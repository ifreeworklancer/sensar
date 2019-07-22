import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import 'flickity/dist/flickity.css';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

var mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');

(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').click(function () {
        var menu = $('.menu');
        $(this).toggleClass('active');
        menu.slideToggle().css('display', 'flex');
    });

    /**
     * Scroll
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();
        var id = $(this).attr('href');
        if (id.length > 1) {
            var top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);
        }
    });

    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            $('.outer').remove();
            $(categoryCarModal).removeClass('active');
            $(connectModal).removeClass('active');
            $(orderModal).removeClass('active');
            $(modalMask).removeClass('active');
        }
    });

    /**
     * Modal
     */
    var connectModal = $('.custom-modal--connect');
    var closeModal = $('.close-modal');
    var modalMask = $('.modal-mask');

    $('.open-connect').on('click', function (e) {
        e.preventDefault();
        $(connectModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $(closeModal).on('click', function () {
        $(connectModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(connectModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    /**
     * Sliders
     */
    if ($('.portfolio-slider--main')) {

        var elem1 = document.querySelector('.portfolio-slider--main');
        if (elem1) {

            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                pageDots: false,
                contain: true,
                draggable: false,
                wrapAround: true,
                autoPlay: 5000,
                on: {
                    change: function( index ) {
                        document.querySelector('.slider-count-index--portfolioMain').innerHTML = `0${index + 1}`.slice(-2);
                    }
                }
            });

            var prevArrowIntro = document.querySelector('.slider-nav-arrow-item--prev--portfolioMain');

            prevArrowIntro.addEventListener('click', function () {
                flkty1.previous(false, false);
            });

            var nextArrowIntro = document.querySelector('.slider-nav-arrow-item--next--portfolioMain');

            nextArrowIntro.addEventListener('click', function () {
                flkty1.next(false, false);
            });


            document.querySelector('.slider-count-last--portfolioMain').innerHTML = `0${flkty1.getCellElements().length}`.slice(-2);
        }
    }

    /**
     * Animate intro
     */
    $(document).ready(() => {
        $('#intro').addClass('start-animate');
        setTimeout(() => {
            $('#intro').addClass('finish-animate');
            ScrollReveal().reveal('.intro-item', {
                origin: 'left',
                delay: 300,
                distance: '500px',
            });
            ScrollReveal().reveal('.intro-image', {
                origin: 'right',
                delay: 400,
                distance: '500px',
            });
        }, 1200)
    });

    /**
     * Parallax for mouse
     */
    let currentX = '';
    let currentY = '';
    let movementConstant = .015;
    let movementConstant2 = .025;
    $(document).mousemove(function(e) {
        if(currentX === '') currentX = e.pageX;
        let xdiff = e.pageX - currentX;
        currentX = e.pageX;
        if(currentY === '') currentY = e.pageY;
        let ydiff = e.pageY - currentY;
        currentY = e.pageY;
        $('.decor-cloud--1').each(function(i, el) {
            let movement = (i + 1) * (xdiff * movementConstant);
            let movementy = (i + 1) * (ydiff * movementConstant);
            let newX = $(el).position().left + movement;
            let newY = $(el).position().top + movementy;
            $(el).css('left', newX + 'px');
            $(el).css('top', newY + 'px');
        });
        $('.decor-cloud--2').each(function(i, el) {
            let movement2 = (i + 2) * (xdiff * movementConstant2);
            let movementy2 = (i + 2) * (ydiff * movementConstant2);
            let newX2 = $(el).position().left + movement2;
            let newY2 = $(el).position().top + movementy2;
            $(el).css('left', newX2 + 'px');
            $(el).css('top', newY2 + 'px');
        });
    });

    /**
     * Animate scroll
     */
    // ScrollReveal().reveal('.intro-item', {
    //     origin: 'left',
    //     delay: 400,
    //     distance: '200px',
    // });
    // ScrollReveal().reveal('.intro-image', {
    //     origin: 'right',
    //     delay: 400,
    //     distance: '200px',
    // });

    /**
     * Map
     */
    if ($('#contacts-map').length > 0) {
        $('.map-mask').on('click', function () {
           $(this).addClass('is-disabled');
        });
        mapboxgl.accessToken = 'pk.eyJ1IjoibWFwYm94dXNlcm11c2V1bSIsImEiOiJjanRya2FoZXQwcjVlNDVtdTNlOWNoMzUyIn0.oMm4w0lY15eiIFOcl-gkIA';
        var map = new mapboxgl.Map({
            container: 'contacts-map',
            style: 'mapbox://styles/mapbox/dark-v10',
            center: [30.510974, 50.449998],
            zoom: 16
        });

        map.on('load', function() {
            map.loadImage('images/icon/placeholder.png', function(error, image) {
                if (error) throw error;
                map.addImage('cat', image);
                map.addLayer({
                    "id": "points",
                    "type": "symbol",
                    "source": {
                        "type": "geojson",
                        "data": {
                            "type": "FeatureCollection",
                            "features": [{
                                "type": "Feature",
                                "geometry": {
                                    "type": "Point",
                                    "coordinates": [30.510974, 50.449998]
                                }
                            }]
                        }
                    },
                    "layout": {
                        "icon-image": "cat",
                        "icon-size": 1
                    }
                });
            });
        });
    }

})(jQuery);