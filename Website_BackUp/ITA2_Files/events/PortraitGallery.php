<script type="text/javascript">
    $(document).ready(function(){
        $("a.home").click(function () {
            $("#container").load("home/home.php");  });
        $("a.event").click(function () {
            $("#container").load("events/events.php");	}); 
        $("a.autumn").click(function () {
            $("#container").load("events/autumnEvents.php");	});
    })
</script>
<div id = "navLinkContainer">
    <div>
    </div>
    <div>
        <ul id="navLink">
            <li></li>
            <li class="preActive"><a class="home" href="#">Home</a><span></span></li>
            <li class="preActive"><a class="event" href="#">Events</a><span></span></li>
            <li class="preActive"><a class="autumn" href="#">Autumn events</a><span></span></li>
            <li class="activeLinkNav"><a href="">Portrait Gallery</a><span></span></li>
        </ul>
    </div>
</div>
<div class="innercontainer">
    <div>
        <div class="eventPTitle">Portrait Gallery of the Golden Age</div>
        <div class="greyline"></div>
        <div class="timeLocation"></div>
        <div class="eventPic"><img src="images/events/Autumn/autumn4.jpg"></div>
        <div class="orangeLineE"></div>
    </div>
   
    <div class="EventUpperRow">
         <ul class="mainpointsE">
            <li>Unique partnership between 3 big Amsterdam museums.</li>
            <li>See over 30 big masterpieces by famous painters from the Golden Age.</li>
            <li>Discover the 17th and 18th century Dutch bourgeoisie.</li>
        </ul>    
    </div>
    <div class="bottomEvent">
        <p class="subTitleEvent">Group mentality</p>
        <p class="eventContent">This unique collection of group portraits is the first of its kind in the world and puts the typical Dutch bourgeoisie of the era on display. What was special at the time is that painters in Holland made portraits of the bourgeoisie as well as nobles and religious figures. These group portraits of ‘common folk’ demonstrate how important the typically Dutch group mentality has always been.</p>
        <p class="subTitleEvent">Unique collection</p>
        <p class="eventContent">Rembrandt's 'The Anatomy Lesson of Dr Deijman' (from spring 2016) and portraits of Civic Guards including Govert Flinck and Nicolaes Pickenoy are but a few examples of the works of art that will be available to view in the Portrait Gallery of the Golden Age.
These ‘class mates of the Night Watch’ from the collection of the Rijksmuseum and Amsterdam Museum are rarely put on display due to their enormous dimensions, let alone exhibited simultaneously. Now you can see them in all their glory at the stunning 17th-century building of the Hermitage Amsterdam.
</p>   
    </div><!--end div.bottom-->
</div><!--end div.innercontainer-->