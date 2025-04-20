<?php
 include('navbar.php');
?>
<link href="/style/teach.css" rel="stylesheet">


<div id="teachContainer">
    <div class="row">
        <div class="col-12 col-xl-3" id="sidePanel">

            <!-- <h3 class="mt-2" style="font-weight: 700; text-align: center;"><?= $Course ?></h3> -->
            <div id="lessonCourseOverview">
                <ul class="list-group">
                <a href="/Courses/<?= $Course?>/introduction.php"><li class="list-group-item listHeader">Introduction
                    <!-- <i class="fa fa-check-circle completedMark"></i> -->
                </li></a>
                    <?php
                        $CourseType = mysqli_real_escape_string($conn, $Course);

                        $FetchTasks = "
                        SELECT 
                        DISTINCT 
                        A.ID, A.CourseName, B.OrderNumber, B.TaskName
                        FROM omoore94_growthbook.courselist AS A 
                        INNER JOIN omoore94_growthbook.tasklist AS B 
                        ON B.CourseID = A.ID
                        WHERE CourseName = '$CourseType'
                        ";        
                        $FetchTasksResult = mysqli_query($conn, $FetchTasks);
                        while($row = mysqli_fetch_assoc($FetchTasksResult)){
                    ?>
                        <a href="/Courses/<?= $row['CourseName']; ?>/<?= $row['TaskName']; ?>.php"><li class="list-group-item listContent">
                            <?= $row['TaskName']; ?>
                            <!-- <i class="fa fa-exclamation-circle attentionMark"></i> -->
                        </li></a>
                    <?php
                        }
                    ?>
                </ul>
            </div>

        </div>
        <div class="col-12 col-xl-9">
            <div id="articlePreviewBG">
                <div style="width: 50%; margin: 0 auto; position: sticky;">
                     <?php include('resources/articleSearchBar.php');?>
                </div>
                <?php 
                    for($i = 0; $i < 6; $i++){
                ?>
                <!-- Article boxes -->
                <div id="articleBG">
                    <div id="displayArticle">
                        <div class="row">
                            <div class="col-12 col-lg-1"></div>
                            <div class="col-12 col-lg-10">
                                <div id="articleDate">
                                    <h6 class="mt-2 mb-1">3/22/2022</h6>
                                </div>
                                <div class="mt-1 mb-2">
                                    <h5 id="displayArticleTitle"><a href="#">Octavius Moore</a></h5>
                                    <p id="displayArticlePreview">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tincidunt non elit eget viverra. 
                                        Aliquam vitae tellus ac neque ornare luctus id ac tortor. 
                                        Mauris ac porttitor libero. Ut non nunc et justo ultrices mollis eget nec lorem. 
                                        Vivamus leo leo, rutrum a ex eu, finibus facilisis arcu. 
                                        Fusce tincidunt consequat sem ut semper. 
                                        Phasellus quis mi blandit, cursus mauris eu, tempor mi.
                                        In in laoreet ante. Pellentesque et malesuada erat, vitae posuere ex.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-1"></div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>