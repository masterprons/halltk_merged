
$(document).ready(function () {
    
    //Sidebars and Footer open and close effects
    var leftCollapse = $('.left-collapse')
    var rightCollapse = $('.right-collapse');
    var footerCollapse = $('.footer-collapse');
    
    rightCollapse.click(function () {
        $(this).nextAll().toggle(100);
        $('.right-button i').toggleClass('fa-chevron-circle-right');
        $(footerCollapse).nextAll().hide(100);
        $('footer i').addClass('fa fa-chevron-circle-up');
        $(leftCollapse).prevAll().hide(100);
        $('.left-button i').addClass('fa-chevron-circle-right');
        //$('.right-button i').addClass('fa-chevron-circle-left');
        
    });
    
    leftCollapse.click(function(){
        $(this).prevAll().toggle(100);
        $('.left-button i').toggleClass('fa-chevron-circle-left');
        //$('.left-button i').toggleClass('fa-chevron-circle-right');
        $(rightCollapse).nextAll().hide(100);
        $('.right-button i').addClass('fa-chevron-circle-left');
        $(footerCollapse).nextAll().hide(100);
        $('footer i').addClass('fa fa-chevron-circle-up');
        
    });
    
    footerCollapse.click(function () {
        $(this).nextAll().toggle(100);
        $('footer i').toggleClass('fa fa-chevron-circle-down');
        //$('footer i').toggleClass('fa fa-chevron-circle-up');
        $(rightCollapse).nextAll().hide(100);
        $('.right-button i').addClass('fa-chevron-circle-left');
        $(leftCollapse).prevAll().hide(100);
        $('.left-button i').addClass('fa-chevron-circle-right');
    });
    
    //Sidebars and Footer open and close effects
    $('span').click(function(){
        $('nav').toggle(100);
        $(rightCollapse).nextAll().hide(100);
        $(leftCollapse).prevAll().hide(100);
        $(footerCollapse).nextAll().hide(100);
    });
    
    //TABS
   $('ul.tabs').each(function () {
        var $active, $content, $links = $(this).find('a');

        $active = $($links.filter('[href="' + location.hash + '"]')[0] || $links[0]);
        $active.addClass('active');

        $content = $($active[0].hash);

        $links.not($active).each(function () {
            $(this.hash).hide();
        });

        $(this).on('click', 'a', function (e) {
            
            $active.removeClass('active');
            $content.hide();

            $active = $(this);
            $content = $(this.hash);

            $active.addClass('active');
            $content.show();

            e.preventDefault();
        });
    });
    
    //Decendent Element with class ".close" hides its Ancestor Element with class ".closeMe"
    $('.closeMe').on('click', '.close', function(event){
        $(event.delegateTarget).hide();
    });

});

