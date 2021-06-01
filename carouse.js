jQuery(document).ready(($)=> {
$('.element-1').owlCarousel({
    
    loop:true, 
                    margin:10, 
                    autoplay:true, 
                    smartSpeed:1000, 
                    autoplayTimeout:2000, 
                    responsive:{ 
                        0:{
                            items:1

                        },
                        375:{
                            items:1
                            
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:4
                        }
                    }
                });
            });