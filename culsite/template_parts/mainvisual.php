<?php
$is_home = is_home() || is_front_page();
$tag = $is_home ? 'h2' : 'h1' ;
$prefix = $is_home ? 'top' : 'page' ;
?>
<div id="mainvisual" class="<?php echo $prefix; ?>-mv">
  <div id="mv-inner">
    <div id="mv-ttl-box">
      <<?php echo $tag ?> id="mv-ttl">
        <span>
          mainvisual
        </span>
      </<?php echo $tag; ?>>
      <div id="mv-sub-ttl">
        <span>
          sub title
        </span>
      </div>
    </div>
  </div>
</div>
