
<!DOCTYPE html>
<html><head>
<title>href.li</title>
<meta http-equiv="Refresh" content="0; url=<?php echo $_SERVER['QUERY_STRING'];?>" />
<meta name="referrer" content="no-referrer" />
<script type="text/javascript">
/* <![CDATA[ */
window.location.replace( "<?php echo $_SERVER['QUERY_STRING'];?>" + window.location.hash );
/* ]]> */
</script>
</head>
<body><p>Redirecting..<br /><a href="<?php echo $_SERVER['QUERY_STRING'];?>"><?php echo $_SERVER['QUERY_STRING'];?></a></p></body></html>[
