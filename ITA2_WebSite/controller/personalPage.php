<?php
    session_start();
    require_once '../model/User.class.php' ;
    require_once '../includes/common.inc.php' ;
    require_once '../model/Event.class.php';
   
    if(isset($_SESSION['userEmail'])){
        $email = $_SESSION['userEmail'];
        $userAccount = User::getUserAccount($email);
        $infor = $userAccount->GetData();
        $_SESSION['username'] = $infor['username'];
        
                
        
        $userAccount->getFavorites();
        $favoriteEventsIds = $userAccount->getAllFavoriteEvents();//array containing eventId's of all the events that are 
        //favorite events for the user
        
        $favoriteEvents=array();
        foreach($favoriteEventsIds as $eIds)
        {
            $favoriteEvents[]=Event::getEvent($eIds);
        }
        
        if(isset($_COOKIE['LastVisited']))
        {
            $last = $_COOKIE['LastVisited'];
        }
        //Lasted time for visitor
        $year = 31536000 + time(); // 60seconds * 60 minutes * 24 hours * 365 days.s 
        setcookie('LastVisited',time(),$year);

    }
    else{
        echo "Opps! You need to login for this page!";
    } 
    

    function DisplayFavoriteEvents()
    {
        global $favoriteEvents;
        $size = sizeof($favoriteEvents);
        $count = 0;
        if(!empty($favoriteEvents))
        {
            while($count < $size)
            {
                if(($size - $count) > 1)
                {
                    ?>
                    <div class="item">
                    <?php
                    for($j = 0; $j < 2; ++$j)
                    {
                        $allEvents = $favoriteEvents[$count]->GetData();
                        ?>
                        <div class="sevstyle">
                                <a href="#Film"><img src="<?php echo $allEvents['pictureLink'] ?>" alt="Film"></a>

                                <div class="eclassCaption" class="Desc">
                                <div class="orangeLine"></div>
                                <div class="scaptionTitle"><?php echo $allEvents["name"]; ?></div>
                                <div class="stimeLocation"><?php echo $allEvents['date'] ."|".$allEvents['location']; ?></div>
                                <div class="seventContentD"><?php echo $allEvents['description']; ?></div>
                            </div>
                        </div>
                        <?php
                        $count ++;
                        
                    }
                    ?>
                        </div>
                    <?php
                }
                else
                {
                    $allEvents = $favoriteEvents[$count]->GetData();
                     ?>
                        <div class="item">
                            <div class="sevstyle">
                                    <a href="#Film"><img src="<?php echo $allEvents['pictureLink'] ?>" alt="Film"></a>

                                    <div class="eclassCaption" class="Desc">
                                    <div class="orangeLine"></div>
                                    <div class="scaptionTitle"><?php echo $allEvents["name"]; ?></div>
                                    <div class="stimeLocation"><?php echo $allEvents['date'] ."|".$allEvents['location']; ?></div>
                                    <div class="seventContentD"><?php echo $allEvents['description']; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php
                    $count ++;
                }
            }
        }
    }
    
    include '../view/profile.view.php';
        

