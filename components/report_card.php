<?php
$project_info_json_str = file_get_contents($conf->ROOT_DIR.'/data/projects/'.$project_id.'/info_'.$lang.'.json' );
if ($project_info_json_str == FALSE) { return FALSE; }
$project_info = json_decode($project_info_json_str);

$report_path = './data/projects/'.$project_id.'/reports/'.$report_id;
$report_info_json_str = file_get_contents($report_path.'/info_'.$lang.'.json');
if ($report_info_json_str == FALSE) { return FALSE; }
$report_info = json_decode($report_info_json_str);
?>
<div class="ui padded segment">
  <div class="ui two column stackable relaxed grid">
    <div class="six wide column">
      <div class="ui fluid image">
        <img src="<?php echo $report_path; ?>/thumbnail.jpg" alt="">
      </div>
    </div>
    <div class="ten wide column">
      <div class="ui large header"><?php echo $report_info->title ?></div>
      <div class="meta">
        <span>
          From <a class="meta" href="./project.php?id=<?php echo $project_id.'&lang='.$lang ?>"><?php echo $project_info->title ?></a>
        </span>
      </div>
      <div class="ui divider"></div>
      <div class="ui items">
        <?php echo $report_info->overview ?>
      </div>
      <button class="ui blue basic right floated button">More</button>
    </div>
  </div>
</div>
