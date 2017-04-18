<!-- Tweets -->
<div class="tweets">
<?php 
  $options = array(
  'limit' => 5, 
  'cacheSeconds' => 60, // 1 minutes
  'showDate' => 'before'
  ); 
$t = $modules->get('MarkupTwitterFeed'); 
$t->showRetweets = true;       // show Twitter retweets in timeline?
$t->showReplies = true;        // show Twitter @replies in timeline?
echo $t->render($options); 
?>
</div>
<!-- / Tweets --> 