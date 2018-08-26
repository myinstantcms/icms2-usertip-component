<table class="usertip-box" width="100%" cellpadding="2" cellspacing="2">
    <tr>
        <td class="usertip_image" valign="top">
            <?php echo html_avatar_image($profile['avatar'], 'small'); ?>
        </td>
        <td valign="top">
            <div class="usertip_text">
			  <div style="color:gray;font-size:16px"><?php echo $profile['nickname']; ?></div>
              <div style="color:gray;font-size:12px;margin-top:10px;"><?php echo $profile['is_online'] ? '<span class="online">'.LANG_ONLINE.'</span>' : string_date_age_max($profile['date_log'], true); ?></div>
					<?php if(isset($profile['city']['name'])){ ?>
					 <strong>Город:</strong> <?php echo $profile['city']['name']; ?>
					<?php } ?>
            </div>
        </td>
    </tr>
	<tr class="usertip-box">
		<td colspan="2">
			 <?php if ($content_counts) { ?>
            <div class="block">
                <ul class="content_counts">
                    <?php foreach($content_counts as $ctype_name=>$count){ ?>
                        <?php if (!$count['is_in_list']) { continue; } ?>
                        <li>
                            <a href="<?php echo href_to('users', $profile['id'], array('content', $ctype_name)); ?>">
                                <?php html($count['title']); ?>
                                <span class="counter"><?php html($count['count']); ?></span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
        </td>
    </tr>
</table>
