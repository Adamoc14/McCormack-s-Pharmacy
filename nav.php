 <ul>
     <strong>
    <!-- Everytime you use this type of for loop this is the way it must be structured  --> 
        <?php 
            foreach($navItems as $item){
            echo  "<li><a href=\"$item[Link]\">$item[Title]</a></li>";
            } 
        ?> 
    </strong>
</ul>  