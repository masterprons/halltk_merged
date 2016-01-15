<nav class="mainMenu"><!-- "nav" is an HTML5 element, you can use div if required or https://github.com/aFarkas/html5shiv to force support in ie7 and ie8 -->
    <label for="toggleMenu" class="menuTitle">MENU</label>
    <input type="checkbox" id="toggleMenu" />
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a>
            <ul>
                <li><a href="#">A subpage with a really long title</a></li>
                <li><a href="#">A subpage</a></li>
                <li><a href="#">A subpage</a></li>
            </ul>
        </li>
        <li><a href="#versionHistory">Version History</a></li>
        <li><a href="#contact">Contact</a>
            <ul>
                <li><a href="#">A subpage</a></li>
                <li><a href="#">A subpage</a></li>
                <li><a href="#">A subpage</a></li>
            </ul>
        </li>
    </ul>
</nav>
<script>
    $(function () {
        toggleChildren();
    })
</script>