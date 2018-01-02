<script type="text/javascript">
  <!--
  if (screen.width <= 800) {
    window.location = "http://m.gamesharkreviews.com/";
  }
  //-->
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "http://gamesharkreviews.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "http://gamesharkreviews.com/search.php?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script>
	$(document).ready(function($) {
		function timeFormat(timeD){
			return timeD.replace("PT","").replace("H",":").replace("M",":").replace("S","");
		}
		$.get("../../server/includes/youtube.json", function(data){
			for (d = 0; d < 3; d++) { 
				var vhtml 	 = '<li><a data-id="'+data[0][d].id+'" class="video-contain" href="video.php?id='+data[0][d].id+'">';
				vhtml 		+= '<span style="background-image:url(https://i.ytimg.com/vi/'+data[0][d].id+'/maxresdefault.jpg);" class="video">';
				vhtml 		+= '<span class="duration">'+timeFormat(data[0][d].itemDetails.contentDetails.duration)+'</span>';
				vhtml 		+= '<span class="views">'+data[0][d].itemDetails.statistics.viewCount+' views</span>';
				vhtml 		+= '</span>';
				vhtml 		+= '<span class="video-title">'+data[0][d].itemDetails.snippet.title+'</span>';
				vhtml 		+= '</a></li>';
                $("#video-list").prepend(vhtml);
				
				}
			});
		//$("#asideElement").load("asideStatic.html");
		var slider = $('#featured_articles_container').unslider({autoplay: true, animation: "horizontal", delay: 4500, speed: 1000,infinite: true});
	});
// Hishest rated 2017 images injection
	$(".article_item").ready(function($) {
		$(".article_item").each(function() {
			$(this).children("#game_display").css("background", "url(../../uploads/imgs/"+$(this).attr("data-article-type")+"/" + $(this).attr("data-article-image") + ") no-repeat top right");
			$(this).children("#game_type").css("background", "url(../../uploads/imgs/"+$(this).attr("data-article-type")+"/" + $(this).attr("data-article-image") + ") no-repeat top left");
			$(this).children(".game_block").css("background", "url(../../uploads/imgs/"+$(this).attr("data-article-type")+"/" + $(this).attr("data-article-image") + ") no-repeat center center");
		});
	});
	$(".article_item").ready(function($) {
		$(".item").each(function() {
			$(this).children(".game_block").css("background", "url(../../uploads/imgs/"+$(this).attr("data-block-type")+"/" + $(this).attr("data-block-image") + ") no-repeat center center");
		});
	});				

</script>		