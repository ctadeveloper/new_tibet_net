<section id="hTibetTv" class="d-none d-sm-block">
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
                <h6 class="text-dark font-weight-bolder border-left pl-2 border-danger">TIBET TV</h6>
            </div>
            <div class="col-12">

                <div id="video-gallery" class="royalSlider videoGallery rsMinW rounded">
                    <?php

                    $api_url = "https://www.googleapis.com/youtube/v3/playlistItems?playlistId=UUQG1iEjZPBw9m4HSZgyVoUg&key=AIzaSyB8TfK2fhoRlpKGSHNXA1tYAW0GG6oEqlQ&fields=items&part=snippet&maxResults=6";
// $api_url= "https://www.googleapis.com/youtube/v3/playlistItems?playlistId=PLCuAfgwBJqs3yODVk71I7hcR-_WUWPMTL&key=AIzaSyB8TfK2fhoRlpKGSHNXA1tYAW0GG6oEqlQ&fields=items&part=snippet&maxResults=6";
                    // Read JSON file
                    $json_data = file_get_contents($api_url);

                    // Decode JSON data into PHP array
                    $response_data = json_decode($json_data);

                    // All user data exists in 'data' object
                    $videos = $response_data->items;
                    // Traverse array and display user data
                    foreach ($videos as $video) {
                        // Convert date
                        if( $video->snippet->thumbnails !== null){
                            $date = date_format(date_create($video->snippet->publishedAt), "F j, Y");
                            // Create Elements
                            // echo "<a class='rsImg' data-rsvideo=" . $video_id . " href=" . $video->snippet->thumbnails->standard->url . ">";
                            echo "<a class='rsImg' data-rsvideo='https://www.youtube.com/watch?v=". $video->snippet->resourceId->videoId."' href=". $video->snippet->thumbnails->high->url.">";
                            echo "<div class='rsTmb'>";
                            echo "<h6 class='text-white'>" . $video->snippet->title . "</h6>";
                            echo "<h6 class='small text-white-50'>" . $date . "</h6>";
                            echo  "</div>";
                            echo "</a>";
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</section>