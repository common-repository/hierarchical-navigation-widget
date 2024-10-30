<?php Echo $TITLE ?>
<ul>

  <?php If ( $PARENT && $this->Get_Option('parent_link_position') == 'top' ) : ?>
  <li class="parent-post">
    <a href="<?php Echo Get_Permalink($PARENT) ?>" title="<?php Echo Get_The_Title($PARENT) ?>">&uarr; <?php Echo Get_The_Title($PARENT) ?></a>
  </li>
  <?php EndIf ?>

  <?php While($NAVIGATION->Have_Posts()) : $NAVIGATION->The_Post() ?>
    <li class="<?php If (Get_Queried_Object()->ID == $GLOBALS['post']->ID) Echo 'current-post' ?>">
      <a href="<?php The_Permalink() ?>" title="<?php The_Title_Attribute() ?>"><?php The_Title() ?></a>
    </li>
  <?php EndWhile ?>

  <?php If ( $PARENT && $this->Get_Option('parent_link_position') != 'top' ) : ?>
  <li class="parent-post">
    <a href="<?php Echo Get_Permalink($PARENT) ?>" title="<?php Echo Get_The_Title($PARENT) ?>">&uarr; <?php Echo Get_The_Title($PARENT) ?></a>
  </li>
  <?php EndIf ?>

</ul>