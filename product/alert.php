<!-- success -->
<?php
    if(isset($messageboxsuccess)){
        foreach($messageboxsuccess as $messageboxsuccess){
            echo '
        <ul class="notifications">
            <li class="toast success">
                <div class="column">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>'.$messageboxsuccess.'</span>
                </div>
                <i class="fa-solid fa-times" onclick="removeToast(this.parentElement)"></i>
            </li>
        </ul>        
            ';    
        }
    }
?>

<!-- Danger -->
<?php
    if(isset($messageboxdanger)){
        foreach($messageboxdanger as $messageboxdanger){
            echo '
        <ul class="notifications">
            <li class="toast error">
                <div class="column">
                    <i class="fa-solid fa-circle-xmark"></i>
                    <span>'.$messageboxdanger.'</span>
                </div>
                <i class="fa-solid fa-times" onclick="removeToast(this.parentElement)"></i>
            </li>
        </ul>        
            ';    
        }
    }
?>

<!-- warning -->
<?php
    if(isset($messageboxwarning)){
        foreach($messageboxwarning as $messageboxwarning){
            echo '
        <ul class="notifications">
            <li class="toast warning">
                <div class="column">
                    <i class="fa-solid fa-circle-xmark"></i>
                    <span>'.$messageboxwarning.'</span>
                </div>
                <i class="fa-solid fa-triangle-exclamation" onclick="removeToast(this.parentElement)"></i>
            </li>
        </ul>        
            ';    
        }
    }
?>

<!-- warning -->

<?php
    if(isset($messageboxinfo)){
        foreach($messageboxinfo as $messageboxinfo){
            echo '
        <ul class="notifications">
            <li class="toast info">
                <div class="column">
                    <i class="fa-solid fa-circle-xmark"></i>
                    <span>'.$messageboxinfo.'</span>
                </div>
                <i class="fa-solid fa-triangle-exclamation" onclick="removeToast(this.parentElement)"></i>
            </li>
        </ul>        
            ';    
        }
    }
?>

