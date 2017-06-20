<?php
$project_info_json_str = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/projects/'.$project_id.'/info_'.$lang.'.json' );
if ($project_info_json_str == FALSE) { return FALSE; }
$project_info = json_decode($project_info_json_str);
?>

<div class="column">
    <a class="ui raised fluid card" href='/project.php?id=<?php echo $project_id.'&lang='.$lang ?>' style="height: 100%">
    <div class="ui image"><img src="/data/projects/<?php echo $project_id  ?>/thumbnail.jpg" alt=""/></div>
        <div class="content">
          <div class="ui medium header"><?php echo $project_info->title ?></div>
          <div class="description"><?php echo $project_info->overview ?></div>
        </div>
        <div class="content">
          <div class="item">
            <div class="ui tiny left floated image">
              <object>
                <a href='/curator.php?id=<?php echo $project_info->curator_id.'&lang='.$lang ?>'>
                  <img src="/data/curators/<?php echo $project_info->curator_id ?>/thumbnail.jpg" alt="キュレーター"/>
                </a>
              </object>
            </div>
            <div class="ui small header">
              <object>
                <a href='/curator.php?id=<?php echo $project_info->curator_id.'&lang='.$lang ?>'>
                  <?php echo $project_info->curator_name ?>
                </a>
              </object>
            </div>
            <div class="description"><?php echo $project_info->curator_comment ?></div>
          </div>
        </div>
    </a>
</div>
