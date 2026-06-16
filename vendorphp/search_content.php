    
                <div class="films">
                    <h2>Поиск: <?=$search_q?></h2>
                    <ul class="films__list" itemscope itemtype="http://schema.org/ItemList">
                    <?php
		 if(count($singles) > 0) {
            foreach ($singles as $single) { ?>
                        <li class="films__list_item" data-film="<?php echo $single["id"]; ?>" itemscope itemprop="itemListElement" itemtype="http://schema.org/Movie">
                            <a href="/<?php echo $single["url"]; ?>" class="film__box" itemprop="url">
                                <div class="film__background">
                                    <img loading="lazy" src="<?php echo $single["img"]; ?>" class="film__background_image" itemprop="image" alt="фильм <?php echo $single["altkey"]; ?> <?php echo $single["releaseyear"]; ?>">
                                    <img loading="lazy" src="img/play_icon.png" class="film__background_play" alt="смотреть онлайн">
                                    <span class="film__background_time" itemprop="duration"><?php echo $single["ltime"]; ?></span>
                                </div>
                                <div class="film__content">
                                    <h4 class="film__content_name" itemprop="name"><?php echo $single["title"]; ?></h4>
                                    <div class="film__primary rate-<?php echo $single["ricon"]; ?>">
                                        <span class="film__content_genre" itemprop="genre"><?php echo $single["genre"]; ?></span>
                                        <span class="film__content_rate"><span class="material-icons">thumb_up</span> <?php echo $single["rating"]; ?></span>
                                    </div>
                                    <div class="film__secondary">
                                        <span class="film__content_views"><?php echo custom_number_format($single["views"]); ?> просмотров</span>
                                        <span class="film__content_date" itemprop="dateCreated" content="<?php echo $single["date"]; ?>"><?php echo(format_date($single["date"])); ?></span>
                                    </div>
                                </div>
                                <meta itemprop="position" content="<?php echo $single["id"]; ?>" />
                            </a>
                        </li>  
                        <?php 
		 }
		 } else {	 
		 ?>
                <div class="films">
                    <h2>Нет результатов</h2>
                </div>
                <?
		 }
		 ?>
                    </ul>
                </div>