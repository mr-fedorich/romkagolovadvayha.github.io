<? include 'mysql.php'; ?>
<?
$project_name = $_GET['project_name'];
$projects_url = $_GET['project_url'];
if (!empty($project_name) && !empty($projects_url)) {
    $projects_md5 = md5($project_name . $projects_url . date('l jS \of F Y h:i:s A'));
    $query = "INSERT INTO `projects` (`name`, `url`, `md5`) VALUES ('$project_name', '$projects_url', '$projects_md5')";
    $result = mysql_query($query);
    echo $projects_md5;
} else echo 0;
?>