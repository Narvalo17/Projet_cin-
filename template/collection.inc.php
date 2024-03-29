<ul id="collection">
            <?php foreach($_response as $_movie):?> <!--itération avec la bdd -->
                <li>
                    
                    <img src="<?= $_movie['cover'] ?>" alt="cover">
                            
                </li>
            <?php endforeach;?>
        </ul>