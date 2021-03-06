<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include 'config.php';
?>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <?php
          $id = $_GET["file"];
          $query = $_GET["query"];
          $vis_type = $_GET["vis_type"];
      ?>
    </head>

    <body style="margin:0px; padding:0px">

        <div id="visualization"></div>
        <script type="text/javascript" src="data-config_<?php echo $_GET['service'] ?>.js"></script>
        <script type="text/javascript" src="data-config_server.js"></script>
        <script type="text/javascript" src="search_options.js"></script>
        <script>
            data_config.server_url = window.location.href.replace(/[^/]*$/, '') + "<?php echo $HEADSTART_PATH; ?>server/";
        	data_config.files = [{
        		title: <?php echo json_encode($_GET['query']) ?>,
        		file: <?php echo json_encode($_GET['file']) ?>
        	}];
                data_config.options = options_<?php echo $_GET['service'] ?>.dropdowns;
                if(<?php echo json_encode($_GET['vis_type']) ?> === "timeline") {
                    data_config.is_streamgraph = true;
                    //data_config.embed_modal = false;
                    data_config.show_area = false;
                } else {
                    if (<?php echo json_encode($_GET['vis_type']) ?> === "overview") {
                    }
                }
        </script>
        <script type="text/javascript" src="<?php echo $HEADSTART_PATH; ?>dist/headstart.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo $HEADSTART_PATH; ?>dist/headstart.css"></link>
        <script type="text/javascript">
            headstart.start();
        </script>
         <div style="margin-top:20px">Built with <a href="http://github.com/OpenKnowledgeMaps/Headstart" target="_blank">Headstart</a> and <a href="http://github.com/ropensci/rplos" target="_blank">rplos</a>. All content retrieved from <a href="https://www.gotriple.eu/" target="_blank ">TRIPLE</a>.
        </div>
    </body>
</html>
