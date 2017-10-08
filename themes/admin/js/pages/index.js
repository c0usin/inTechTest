$( document ).ready(function(){
    set_status_changers( ".item-enabled a.back-red, .item-enabled a.back-green" );
});

function set_status_changers( selector )
{
    $( selector ).click( function( event ){
        event.preventDefault();

        change_status( this );
    });
}

/**
 * @method	change_status
 * @access	public
 * @desc    this method sends a post request to change enabled status of an item
 * @author	Zoltan Jozsa
 *
 * @version	1.0
 */
function change_status( item )
{
    var url = $( item ).attr( "href" );
    var parameters = {};

    send_post_request( url, parameters, function( result ){
        if( result.status == "success" )
        {
            if( $( item ).hasClass( "back-green" ) )
            {
                $( item ).removeClass( "back-green" );
                $( item ).addClass( "back-red" );
                $( item ).find( "i" ).removeClass( "enabled" );
                $( item ).find( "i" ).addClass( "disabled" );
                //$( item ).html( "&#x2717;" );
            }
            else
            {
                $( item ).removeClass( "back-red" );
                $( item ).addClass( "back-green" );
                $( item ).find( "i" ).removeClass( "disabled" );
                $( item ).find( "i" ).addClass( "enabled" );
                //$( item ).html( "&#x2713;" );
            }

            //$( item ).text( result.text );
        }

        if( result.message != null )
        {
            show_ajax_message( result.message, "error" );
        }
    }, "json" );
}