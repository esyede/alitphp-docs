<?php if (in_array($var['currpage'],$var['doclist'])) { ?>
    <p><nav>
        <ul class="pager">
            <?php if ($var['currpage']!=$var['doclist'][0]) { ?>
                <li class="previous">
                    <a href="
                    <?php
                        $flip=array_flip($var['doclist']);
                        echo $this->baseurl().'/guide/'.$var['doclist'][$flip[$var['currpage']]-1];
                    ?>">
                        <span aria-hidden="true">&larr;</span>
                        <?php
                            $flop=array_flip(array_values($var['doclist']));
                            echo ($flop[$var['currpage']]).'. ';
                            echo preg_replace('/^[0-9]*/','',ucwords(str_replace('-',' ',
                                $var['doclist'][$flip[$var['currpage']]-1])));
                        ?>
                    </a>
                </li>
            <?php } ?>
            <?php
                $flip=array_flip($var['doclist']);
                $flop=array_flip(array_values($var['doclist']));
                if (($flip[$var['currpage']]+2)<=count($var['doclist'])) {
            ?>
                <li class="next">
                    <a href="<?php echo $this->baseurl().'/guide/'.$var['doclist'][$flip[$var['currpage']]+1]; ?>">
                        <?php echo ($flop[$var['currpage']]+2).'. '; ?>
                        <?php echo preg_replace('/^[0-9]*/','',ucwords(
                            str_replace('-',' ',$var['doclist'][$flip[$var['currpage']]+1]))); ?>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav></p>
<?php } ?>