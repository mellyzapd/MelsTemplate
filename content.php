
<div class="blog-post">
	<h2 class="blog-post-title black">Lego batman movie</h2>
	<p class="blog-post-meta yellow">10th feb 2017</p>

	<div class="row container"> <!--content a --> 
			<div class="col-xs-12 col-md-12">

<!-- https://api.themoviedb.org/3/movie/324849?api_key=a2c663c4437673f9898518359ef98ec6&language=en-US -->
	<button id="searchMovie" class="btn btn-primary btn-block">Search</button>
	<table class="table table-striped" id="results">
		<thead>
			<tr>
				<th>Title</th>
				<th>Plot</th>
				<th>Poster</th>
			</tr>
		</thead>

		<tbody>
		
		</tbody>


	</table>

	</div>
			

			<div class="col-xs-12 col-md-12 class="tweet">       
			<?php 

				require_once 'TwitterAPIExchange.php';

		        $settings = array(
		        'oauth_access_token' => "2315360047-YCxDVg2DojtbX49aXJ2dcvaggO6lqAu3qlf7EO3",
		        'oauth_access_token_secret' => "EOnyuMRbULOxgmtaZUZtK0serocDeTPEWmf9JFIrcgIXJ",
		        'consumer_key' => "WHnYp5WLcLGKaAkgKFhM3jnCv",
		        'consumer_secret' => "gvjTex5qw2cN15hDN0gVlQilfmOoUtOidgx3q0fCzb7EJj5HoS"
				);
		    
		        $url = "https://api.twitter.com/1.1/search/tweets.json";
		        $requestMethod = "GET";
		        $getfield = '?q=%23TheLEGOBatmanMovie';

		        $twitter = new TwitterAPIExchange($settings);

		        $string = json_decode($twitter ->setGetfield($getfield)
		        ->buildOauth($url, $requestMethod)
		        ->performRequest(),$assoc = TRUE);
			?>     

				<?php

       			 foreach($string['statuses'] as $items)
         			{

				echo"<div class=''>";
          		echo "<h5> <small> ".$items['created_at']."</h5> </small><br />";
            	echo "<h5>". $items['text']."<br /> </h5>";
            	echo "<p> <i class='fa fa-twitter'></i> #TheLEGOBatmanMovie ". $items['retweet_count']."<br /> </p>";
  
            	echo "<hr>";
            	// echo "screen name: ".$items['user']['screen_name']."<br />";
            		}
 				echo "</div>";

 				?>
            </div>
        
	<div class="row">
	<div class="col-xs-12 col-md-12" id="instafeed">
		//instagram feed --- links to api 
		<h2>Instagram feed</h2>

		<?php
			$instagram_uid = "245643450";
			$access_token = "245643450.a884b0e.0f25fff4baf64315bc1245842734851c";
			$photo_count = "6";

			$json_link = "https://api.instagram.com/v1/users/$instagram_uid/media/recent/?";
			$json_link .= "access_token=$access_token&count=$photo_count";

			$json = file_get_contents($json_link);
			$obj = json_decode($json, true);

			//print_r($obj);
		?>

		<?php foreach($obj['data'] as $post) {
			$caption = $post['caption']['text'];
			$link = $post['link'];
			$src = str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
			// Show the pic
			echo "<div class='col-md-4'>";
			echo "<img class='img-responsive photo-thumb' src=" . $src . ">";
			echo "<strong>" . $caption . "</strong><br />";
			echo "<a target='_blank' href=" . $link . "></a>";
			echo "</div>";
		} ?>




		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-12">cool css stuff</div>
	</div>
	</div>
</div><!-- /.blog-post -->

//the movie databse api
<script type="text/javascript">
	

(function () {
	
	$(init);

	function init() 
	{
		$("#searchMovie").click(searchMovie);
		var table = $("#results");
		var tbody = table.find("tbody");

		function searchMovie() {

			$.ajax({
				url: "https://api.themoviedb.org/3/movie/324849?api_key=a2c663c4437673f9898518359ef98ec6&language=en-US",

				dataType:"json",
				success: renderMovies

				
			});

			function renderMovies(Movies)
			{

				tbody.empty();

				for (m = 0; m < 1; m++)
				//for (var m in Movies)	
				{

					var movie = Movies[m];

					var title = Movies.original_title;
					var plot = Movies.overview;
					var posterUrl = Movies.poster_path;

					var tr = $("<tr>");
					var titleTd = $("<td>").append(title);
					var plotTd = $("<td>").append(plot);
					var imagepth = "https://image.tmdb.org/t/p/w300_and_h450_bestv2/" + posterUrl;
					var img = $("<img>").attr("src", imagepth);
					var posterTd = $("<td>").append(img);

					tr.append(titleTd);
					tr.append(plotTd);
					tr.append(posterTd);

					tbody.append(tr); //renders it in the html
					//var plotTd = $("<td>").append(plot);
				}
			}
	}
}
})();


</script> 