<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){ 
        $(window).scroll(function(){ 
            if ($(this).scrollTop() > 100) { 
                $('#toTopBtn').fadeIn(); 
            } else { 
                $('#toTopBtn').fadeOut(); 
            } 
        });
        $('#toTopBtn').click(function(){ 
            $("html, body").animate({ scrollTop: 0 }, 600); 
            return false; 
        }); 
    });
</script>
<script> // Script untuk modal
    function dialog() {

        // Declare variables
        var dialogBox = $('.dialog'),
            dialogTrigger = $('.dialog__trigger'),
            dialogClose = $('.dialog__close'),
            dialogTitle = $('.dialog__title'),
            dialogContent = $('.dialog__content'),
            dialogAction = $('.dialog__action');

        // Open the dialog
        dialogTrigger.on('click', function(e) {
        dialogBox.toggleClass('dialog--active');
        e.stopPropagation();
        });

        // Close the dialog - click close button
        dialogClose.on('click', function() {
        dialogBox.removeClass('dialog--active');
        });

        // Close the dialog - press escape key // key#27
        $(document).keyup(function(e) {
        if (e.keyCode === 27) {
            dialogBox.removeClass('dialog--active');
        }
        });

        // Close the dialog - click outside
        $(document).on('click', function(e) {
        if ($(e.target).is(dialogBox) === false &&
            $(e.target).is(dialogTitle) === false &&
            $(e.target).is(dialogContent) === false &&
            $(e.target).is(dialogAction) === false) {
            dialogBox.removeClass('dialog--active');   
        }
        });

        }

        // Run function
        $(dialog);
</script>

<script> // script untuk animated select options
    $(".custom-select").each(function() {
    var classes = $(this).attr("class"),
        id = $(this).attr("id"),
        name = $(this).attr("name");
    var template = '<div class="' + classes + '">';
    template +=
        '<span class="custom-select-trigger">' +
        $(this).attr("placeholder") +
        "</span>";
    template += '<div class="custom-options">';
    $(this)
        .find("option")
        .each(function() {
        template +=
            '<span class="custom-option ' +
            $(this).attr("class") +
            '" data-value="' +
            $(this).attr("value") +
            '">' +
            $(this).html() +
            "</span>";
        });
    template += "</div></div>";

    $(this).wrap('<div class="custom-select-wrapper"></div>');
    $(this).hide();
    $(this).after(template);
    });
    $(".custom-option:first-of-type").hover(
    function() {
        $(this)
        .parents(".custom-options")
        .addClass("option-hover");
    },
    function() {
        $(this)
        .parents(".custom-options")
        .removeClass("option-hover");
    }
    );
    $(".custom-select-trigger").on("click", function() {
    $("html").one("click", function() {
        $(".custom-select").removeClass("opened");
    });
    $(this)
        .parents(".custom-select")
        .toggleClass("opened");
    event.stopPropagation();
    });
    $(".custom-option").on("click", function() {
    $(this)
        .parents(".custom-select-wrapper")
        .find("select")
        .val($(this).data("value"));
    $(this)
        .parents(".custom-options")
        .find(".custom-option")
        .removeClass("selection");
    $(this).addClass("selection");
    $(this)
        .parents(".custom-select")
        .removeClass("opened");
    $(this)
        .parents(".custom-select")
        .find(".custom-select-trigger")
        .text($(this).text());
    });

</script>