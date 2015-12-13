<div id="Left_Side_Bar">
    <img id="My_Stats" class="roundCorners" src="Images/MyStats.png" alt="My Stats" />
<?php
  $Button_Mode = "";
  if($Page == "About_Me")
  {
     $Button_Mode = "button_Selected";
  }
  else 
  {
    $Button_Mode = "button_Normal";
  }
    echo '<div class="button ' . $Button_Mode . '">';
        echo '<a href="../Resume.php?Page=About_Me">
              <img class="button_Icon" src="Images/icon_About_Me.png" alt="About Me" />
              <span class="button_Text">About Me</span>
            </a>
        </div>';
  
  
  if($Page == "Education")
  {
     $Button_Mode = "button_Selected";
  }
  else 
  {
    $Button_Mode = "button_Normal";
  }
    echo '<div class="button ' . $Button_Mode . '">';
        echo '<a href="../Resume.php?Page=Education">
                <img class="button_Icon" src="Images/icon_Education.png" alt="Education" />
                <span class="button_Text">Education</span>
              </a>
        </div>';
  
  
  
  if($Page == "Skills")
  {
     $Button_Mode = "button_Selected";
  }
  else 
  {
    $Button_Mode = "button_Normal";
  }
    echo '<div class="button ' . $Button_Mode . '">';
       echo '<a href="../Resume.php?Page=Skills">
              <img class="button_Icon" src="Images/icon_Skills.png" alt="Skills" />
              <span class="button_Text">My Skills</span>
             </a>
        </div>';
  
  
  
  if($Page == "Work_History")
  {
     $Button_Mode = "button_Selected";
  }
  else 
  {
    $Button_Mode = "button_Normal";
  }
    echo '<div class="button ' . $Button_Mode . '">';
        echo '<a href="../Resume.php?Page=Work_History">
                <img class="button_Icon" src="Images/icon_Work_History.png" alt="Work History" />
                <span class="button_Text">Work History</span>
              </a>
        </div>';


    ?>
</div> 