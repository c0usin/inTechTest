$( document ).ready(function(){
    show_or_hide_categories_listing();
    change_input_text();
    set_checkbox_handlers();
    check_if_checked_on_item_in_category_list();
    set_lightbox();
    show_or_hide_menu();
});

function show_or_hide_categories_listing()
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

function change_input_text()
{
    $( ".other-categories-listing li a" ).click(function(){
        var text = $( this ).find( "span" ).html();

        $( ".header-category input" ).val( text );
        $( ".other-categories-listing" ).removeClass( "display-block" );

        show_hide_products( $( this ).attr( "data-filter" ) );
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

function check_if_checked_on_item_in_category_list()
{
    $( ".btn_fancybox_home" ).click(function(){
        var text_content = "";

        if( $( ".radio-button input:checked" ).length > 0 )
        {
            $( ".radio-button input:checked" ).each(function( index, item ){
                text_content += "<div>";
                    text_content += $( item ).parents( "li" ).find( "img" ).parent().html();
                    text_content += $( item ).parents( "li" ).find( "label" ).text();
                text_content += "</div>";
            });
        }
        else
        {
            text_content = '<div class="error"><div>Please select at least one product needs to be selected</div></div>';
        }

        $.fancybox({
            width: 515,
            height: 338,
            content: text_content,
            afterLoad: function(){}
        }).open();
    });
}

function set_lightbox()
{
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    });
}

function show_hide_products( class_name )
{
    $( ".radio-button input" ).prop( "checked", null );
    $( ".radio-button input" ).parent().removeClass( "checked" );
    $( ".radio-button input" ).parents( "li" ).hide();
    $( ".radio-button input" ).parents( "li." + class_name ).show();
}

function show_or_hide_menu()
{
    $( ".icon-menu" ).click(function()
    {
        if( $( ".icon-menu" ).width() <= 600 )
        {
            if( $( ".navigation ul" ).css( "display" ) == "none" )
            {
                $( ".navigation ul" ).addClass( "display-block" );
            }
            else
            {
                $( ".navigation ul" ).removeClass( "display-block" );
            }
        }
    });
}