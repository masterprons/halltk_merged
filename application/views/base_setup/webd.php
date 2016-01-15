
<script>
    $(document).ready(function () {
        $(".tabs-menu a").click(function (event) {
            event.preventDefault();
            $(this).parent().addClass("current");
            $(this).parent().siblings().removeClass("current");
            var tab = $(this).attr("href");
            $(".tab-content").not(tab).css("display", "none");
            $(tab).fadeIn();
        });
    });
</script>
<div id="tabs-container">
    <ul class="tabs-menu">
        <li class="current tabs-menu-first-3"><a href="#tab-1">DEMO</a></li>
        <li class="tabs-menu-first-3"><a href="#tab-2">HTML</a></li>
        <li class="tabs-menu-first-3" id="tab-menu-3"><a href="#tab-3">CSS</a></li>
        <li class="tabs-menu-last-2"><a href="#tab-4">JAVASCRIPT</a></li>
        <li class="tabs-menu-last-2"><a href="#tab-5">GUIDE</a></li>
    </ul>
    <div class="tab">
        <div id="tab-1" class="tab-content">
            <P>
                <?php $this->load->view($box_border); ?>
            </P>
        </div>
        <div id="tab-2" class="tab-content">
            <P>
                Proin sollicitudin tincidunt quam, in egestas dui tincidunt non. Maecenas tempus condimentum mi, sed convallis tortor iaculis eu.
                Cras dui dui, tempor quis tempor vitae, ullamcorper in justo. Integer et lorem diam. Quisque consequat lectus eget urna molestie 
                pharetra. Cras risus lectus, lobortis sit amet imperdiet sit amet, eleifend a erat.
            </P>
        </div>
        <div id="tab-3" class="tab-content">
            <P>
                Proin sollicitudin tincidunt quam, in egestas dui tincidunt non. Maecenas tempus condimentum mi, sed convallis tortor iaculis eu.
                Cras dui dui, tempor quis tempor vitae, ullamcorper in justo. Integer et lorem diam. Quisque consequat lectus eget urna molestie 
                pharetra. Cras risus lectus, lobortis sit amet imperdiet sit amet, eleifend a erat.
            </P>
        </div>
        <div id="tab-4" class="tab-content">
            <P>
                Proin sollicitudin tincidunt quam, in egestas dui tincidunt non. Maecenas tempus condimentum mi, sed convallis tortor iaculis eu.
                Cras dui dui, tempor quis tempor vitae, ullamcorper in justo. Integer et lorem diam. Quisque consequat lectus eget urna molestie 
                pharetra. Cras risus lectus, lobortis sit amet imperdiet sit amet, eleifend a erat.
            </P>
        </div>
        <div id="tab-5" class="tab-content">
            <P>
                Proin sollicitudin tincidunt quam, in egestas dui tincidunt non. Maecenas tempus condimentum mi, sed convallis tortor iaculis eu.
                Cras dui dui, tempor quis tempor vitae, ullamcorper in justo. Integer et lorem diam. Quisque consequat lectus eget urna molestie 
                pharetra. Cras risus lectus, lobortis sit amet imperdiet sit amet, eleifend a erat. Master Prons
            </P>
        </div>
    </div>
</div>