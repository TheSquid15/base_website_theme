<?php 
$video = get_field("video_link");
$youtube = get_field("link_to_video");
$youtube_link = get_field("yt_link");

$exploded_link = explode("?v=", $youtube_link);
// echo '<pre>', var_dump($exploded_link), '</pre>';
?>
<div class="container">
    <div class="formatting">
        <div class="content_container">
            <div class="row">
                <div class="col-12 video_container box-light-green">
                    <div class="video_wrapper">
                        <?php 
                        if($youtube) { ?>
                            <iframe width="834" height="480" src="https://www.youtube.com/embed/<?php echo $exploded_link[1]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <?php
                        }
                        else { ?>
                            <video class="video" loop muted controls preload="auto">
                                <source src="<?php echo $video; ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video> 
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>