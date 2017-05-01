<!-- jquery-ui-1.12.1 does not work here-->
<script src="../users/js/plugins/jquery-ui-1.11.4/jquery-ui.1.11.4.min.js"></script>
<script src="../users/js/plugins/trumbowyg.2/dist/trumbowyg.js"></script>
<script src="../users/js/plugins/minicolors/jquery.minicolors.min.js"></script>
<script src="../users/js/plugins/postitall/dist/jquery.postitall.js"></script>
<script src="js/postit_plan.js"></script>
<?php

?>

<script>
    var page_name = '<?php echo get_page_name() ;?>';

    var old_bbnotes = {};
    <?php
        $notes_on_hand = get_notes_for_this_page();
        if ($notes_on_hand) {
            foreach ($notes_on_hand as $big => $note) {
                $boolted = str_replace ('"false"','false',$note);
                $boolted = str_replace ('"true"','true',$boolted);
                echo "old_bbnotes['$big'] = $boolted\n";
            }

        }
    ?>

</script>