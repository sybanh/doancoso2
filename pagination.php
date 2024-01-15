<?php for($num = 1 ;$num<=$totalPage;$num++){?>
            <li class="page-item">
              <a class="page-link" href="?per_page=<?=$item_per_page?>&page=<?=$num?>">
              <?=$num?>
            </a></li>
<?php } ?>