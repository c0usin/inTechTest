$( document ).ready(function(){
    set_status_changers( ".item_enabled a.back-red, .item_enabled a.back-green" );
    set_delete_handler( ".confirm" );
});

function set_status_changers( selector )
{
    $( selector ).click( function( event ){
        event.preventDefault();

        change_status( this );
    });
}

function set_delete_handler( selector )
{
    $( selector ).click( function( event ){
        return confirm( "Are you sure?" );
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
    var url                     = $( item ).attr( "href" );
    var parameters              = {};
    parameters["is_ajax"]       = 1;
    parameters["item_id"]       = $( item ).attr( "data-item-id" );
    parameters["ajax_function"] = 1;

    $.post( url, parameters, function( result ){
        if( result.status == "success" )
        {
            if( $( item ).hasClass( "back-green" ) )
            {
                $( item ).removeClass( "back-green" );
                $( item ).addClass( "back-red" );
                $( item ).find( "i" ).removeClass( "enabled" );
                $( item ).find( "i" ).addClass( "disabled" );
            }
            else
            {
                $( item ).removeClass( "back-red" );
                $( item ).addClass( "back-green" );
                $( item ).find( "i" ).removeClass( "disabled" );
                $( item ).find( "i" ).addClass( "enabled" );
            }
        }

        if( result.message != null )
        {
            show_ajax_message( result.message, "error" );
        }
    }, "json" );
}