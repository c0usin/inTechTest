$( document ).ready(function(){
    set_hide_or_show_categories_listing();
    set_checkbox_handlers();
});

function set_hide_or_show_categories_listing()
{
    $( ".icon-arrow-down" ).click(function( event ){
        event.preventDefault();

        if( $( ".other-categories-listing" ).css( "display" ) == "none" )
        {
            $( ".other-categories-listing" ).addClass( "display-block" );
        }
        else
        {
            $( ".other-categories-listing" ).removeClass( "display-block" );
        }
    });
    
}

function set_checkbox_handlers()
{
    $( ".radio-button input" ).click(function(){
        check_or_uncheck_checkbox( $( this ) );
    });
}

function check_or_uncheck_checkbox( checkbox )
{
    if( $( checkbox ).is( ":checked" ) )
    {
        var name = $( checkbox ).attr( "name" );

        $( 'input[name="'+name+'"]' ).parent().removeClass( "checked" );

        return $( checkbox ).parent().addClass( "checked" );
    }

    return $( checkbox ).parent().removeClass( "checked" );
}