$(function() {
    $('#main-menu').smartmenus({
        subMenusSubOffsetX: 1,
        subMenusSubOffsetY: -8
    });
})


lar = screen.width
alt = screen.height

if ((lar == 1024) && (alt == 768)) {
	window.open('1024x768/index.htm',"_self")
}

else

if ((lar == 800) && (alt == 600)) {
	window.open('index.800/600',"_self")
}

else

if ((lar == 1280) && (alt == 1024)) {
	window.open('index.1280/1024',"_self")
}