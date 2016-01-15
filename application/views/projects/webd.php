
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
<h1><?php echo $title ?></h1>
<div id="tabs-container">
    <ul class="tabs-menu">
        <li class="current tabs-menu-first-3"><a href="#tab-1">DEMO</a></li>
        <li class="tabs-menu-first-3"><a href="#tab-2">HTML</a></li>
        <li class="tabs-menu-first-3" id="tab-menu-3"><a href="#tab-3">CSS</a></li>
        <li class="tabs-menu-last-2"><a href="#tab-4">JAVASCRIPT</a></li>
        <li class="tabs-menu-last-2"><a href="#tab-5">GUIDE</a></li>
    </ul>
    <div class="tab"><?php $this->load->view($tab_content, $data); ?>
        <div id="tab-1" class="tab-content">
            <div class="webd-panel-block-center">
                <?php $this->load->view($tab_demo); ?>
            </div>
        </div>
        <div id="tab-2" class="tab-content">
            <p> <?php $this->load->view($tab_html); ?> </p>
        </div>
        <div id="tab-3" class="tab-content">
            <p> <?php $this->load->view($tab_css); ?> </p>
        </div>
        <div id="tab-4" class="tab-content">
            <p> <?php $this->load->view($tab_js); ?> </p>
        </div>
        <div id="tab-5" class="tab-content">
            <p> <?php $this->load->view($tab_guide); ?> </p>
        </div>
    </div>
</div>