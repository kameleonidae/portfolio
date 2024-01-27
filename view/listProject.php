<?php
    $contentFolder = "./content";
    $infoName = "info.txt";
    $CouvName = "couverture.png";
    $mainName = "main.php";

    $folders = scandir($contentFolder);
            
    foreach($folders as $folder){
        if($folder != "." && $folder != ".."){

            $contentInfo = file_get_contents($contentFolder."/".$folder."/".$infoName);
            $lines = explode("\n",$contentInfo);
            $title = $lines[0];
            $description = $lines[1];

            echo '<a class="projectDiv" href="'.$contentFolder."/".$folder."/".$mainName.'">';
            echo '<div class="imgContainer">';
            echo '<img class="imgCover" src="'.$contentFolder."/".$folder."/".$CouvName.'">';
            echo '</div>';
            echo '<div class="projectContainer">';
            echo '<h2 class="projectTitle">'.$title.'</h2>';
            echo '<div class="projectLine"></div>';
            echo '<div class="projectInfo"><div>'.$description.'</div></div>';
            echo '</div>';
            echo '</a>';

        }
    }

?>