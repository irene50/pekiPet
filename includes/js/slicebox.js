$(function() {
				
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ).hide(),
            $navOptions = $( '#nav-options' ).hide(),
            $shadow = $( '#sombra' ).hide(),
            slicebox = $( '#sb-slider' ).slicebox( {
                onReady : function() {

                    $navArrows.show();
                    $navOptions.show();
                    $shadow.show();
                    slicebox.play();

                },
                orientation : 'h',
                cuboidsCount : 3
            } ),
            
            init = function() {

                initEvents();
                
            },
            initEvents = function() {

                // add navigation events
                $navArrows.children( ':first' ).on( 'click', function() {

                    slicebox.next();
                    return false;

                } );

                $navArrows.children( ':last' ).on( 'click', function() {
                    
                    slicebox.previous();
                    return false;

                } );
                //slicebox.play();
                $( '#navPlay' ).on( 'click', function() {
                    
                    slicebox.play();
                    return false;

                } );

                $( '#navPause' ).on( 'click', function() {
                    
                    slicebox.pause();
                    return false;

                } );

            };

            return { init : init };

    })();

    Page.init();

});