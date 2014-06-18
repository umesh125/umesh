<?php

/**
 * @file media_s3/includes/themes/media-s3-video.tpl.php
 *
 * Template file for theme('media_s3_video').
 *
 * Variables available:
 *  $uri - The media uri for the S3 video (e.g., s3://v/xsy7x8c9).
 *  $video_id - The unique identifier of the S3 video (e.g., xsy7x8c9).
 *  $id - The file entity ID (fid).
 *  $url - The full url including query options for the Youtube iframe.
 *  $options - An array containing the Media Youtube formatter options.
 *  $api_id_attribute - An id attribute if the Javascript API is enabled;
 *  otherwise NULL.
 *  $width - The width value set in Media: Youtube file display options.
 *  $height - The height value set in Media: Youtube file display options.
 *  $title - The Media: S3 file's title.
 *  $alternative_content - Text to display for browsers that don't support
 *  iframes.
 *
 */

?>
<div class="<?php print $classes; ?> media-s3-<?php print $id; ?>">
  <iframe class="media-s3-player" <?php print $api_id_attribute; ?>width="<?php print $width; ?>" height="<?php print $height; ?>" title="<?php print $title; ?>" src="<?php print $url; ?>" frameborder="0" allowfullscreen><?php print $alternative_content; ?></iframe>
</div>
