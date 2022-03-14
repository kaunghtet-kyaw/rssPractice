<?php 
    echo '<?xml version="1.0" encoding="utf-8"?>' . "\n";
?>

<rss version="2.0"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
    xmlns:admin="http://webns.net/mvcb/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:content="http://purl.org/rss/1.0/modules/content/">  

    <channel>

        <title><?php echo $feed_name; ?> </title> 
        <link><?php echo $feed_url; ?> </link> 
        <description><?php echo $page_description; ?></description>  
        <dc:language><?php echo $page_language; ?></dc:language>  
        <dc:creator><?php echo $creator_email; ?></dc:creator>

        <?php foreach($posts->result() as $post) {?>
            <item>  
                <title><?php echo $post->post_title; ?></title> 
                <description><?php echo $post->post_content; ?></description>
                <pubDate><?php echo $post->post_date; ?></pubDate>
            </item>  
        <?php } ?>

    </channel>

</rss>  


